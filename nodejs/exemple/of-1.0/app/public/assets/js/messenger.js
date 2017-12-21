$(function(){

	of_load();

});

var socket = io.connect();

var myID,myNick;

var of_load_html 	= '<div class="of-main"><div class="of-load"><span class="of-logo-animate"></span><span> Loading...</span></div></div>';
var of_login_html 	= '<div class="of-main"><form id="setNick" method="post"><label>Nick</label><i>Please insert your nick that you want to use</i><input type="text" id="newNick" autofocus /><input type="submit" value="" class="of-logo-animate"/></form></div>'; 
var of_logged_html	= '<div class="of-main"><div class="of-dashbar"><span class="of-logo-animate"></span></div><ul id="users"></ul><div id="chat"><ul id="messages"></ul><form id="sendMess"  method="post"><input type="text" autofocus id="newMess" autocomplete="off"/><input type="submit" value=""/></form></div></div>';

function of_users(){
	var users_html 	= $('#users');

	function setUser(id,nick){
		return '<li class="user" data-ID="'+id+'"><span class="nick">'+nick+'</span></li>';
	}

	socket.emit('getUsers');
	socket.on('setUsers',function(users){
		for(var user in users){
			var nick = users[user].nick,
				id 	 = users[user].id;
			
			if(id != myID){
				users_html.append(setUser(id,nick));
			}
		}
	});
	socket.on('newUser',function(user){ console.log(user);
		users_html.append(setUser(user.id,user.nick));
	});
	socket.on('userOut',function(user){
		user = users_html.children('.user[data-ID="'+user+'"]').remove();
	});
}
function of_messages(){
	var messages 	= $('#messages'),
		newMessForm = $('#sendMess');

	function setMess(mess){

		//var now = new Date();

		var a = new Date(mess.addedAt),
			months = ['Janvier','Febrier','Mars','Avril','Mai','Juin','Juilet','Aout','Septembre','Octobre','Novembre','Decembre'],
			year = a.getFullYear(),
			month = months[a.getMonth()],
			date = a.getDate(),
			hour = a.getHours(),
			min = a.getMinutes(),
			sec = a.getSeconds();
			
			var time = date + ' ' + month + ' ' + year + ' ' + hour + ':' + min + ':' + sec;

			mess.content = '<div class="mess">'+mess.content+'</div>'+'<div class="mess-time" data-time="'+mess.addedAt+'">'+time+'</div>';

		var lastMessage = messages.children('.message').last(),
			lastMessID 	= lastMessage.attr('data-ID'),
			message_html = '<li class="message'+(mess.senderID==myID?' from-me':'')+'" data-ID="'+mess.senderID+'"><div class="user-data"><img src="" alt="" class="user-image"/><div class="user-nick">'+mess.senderNick+'</div></div><div class="user-message">'+mess.content+'</div></li>';

		if(typeof lastMessID != 'undefined' && lastMessID == mess.senderID){
			messages.children('.message[data-ID="'+mess.senderID+'"]').last().children(' .user-message').append(mess.content);
		}else{
			messages.append(message_html);
		}
	}

	function autoScroll(){
		var lastMessage = messages.children('.message').last();
		if(lastMessage.length > 0){
			messages.scrollTop(lastMessage.offset().top - messages.offset().top + messages.scrollTop());
		}
	}

	socket.emit('getMessages');
	socket.on('setMessages',function(messages_array){
		for (var i = 0; i <= messages_array.length-1; i++){
			setMess(messages_array[i]);
		}
		autoScroll();
	});
	socket.on('newMess',function(newMess){
		setMess(newMess);
		autoScroll();
	});

	newMessForm.on('submit',function(e){
		e.preventDefault();
		var newMess 	   = $(this).children('#newMess'),
			newMessContent = newMess.val();

		if(typeof newMess != 'undefined' && newMess != ''){
			socket.emit('newMess','<p>'+newMessContent+'</p>');
		}
		newMess.val('');
		newMess.focus();
	});
}

function of_logged(){
	$('body').fadeOut().empty().append(of_logged_html).fadeIn();

	myID 	= sessionStorage.OF_id,
	myNick 	= sessionStorage.OF_nick;

	$('.of-dashbar').append('<span class="dash my-nick">'+myNick+'</span>');

	socket.emit('updateUserData',{
		nick : myNick,
		id 	 : myID
	});
	socket.on('errorUpdatingUserData',function(){
		sessionStorage.removeItem('OF_id');
		sessionStorage.removeItem('OF_nick');
		location.reload();
	});

	of_users();
	of_messages();
}
function of_login(){

	$('body').fadeOut().empty().append(of_login_html).fadeIn();
	$('#newNick').focus();

	var loginForm = $('#setNick');

	loginForm.on('submit',function(e){
		e.preventDefault();
		$(this).children('.err-mess').remove();
		var newNick = $(this).children('#newNick').val(),
			newNick = newNick.replace(/ /g,"_"),
			newNick = newNick.toLowerCase();
		
		if(typeof newNick != 'undefined' && newNick != ''){
			socket.emit('login',newNick);
		}
	});

	socket.on('login',function(data){
		if(data.status == 'logged'){
			sessionStorage.OF_id 	= data.id,
			sessionStorage.OF_nick 	= data.nick;
			location.reload();
		}else if(data.status == 'fail'){
			loginForm.prepend('<div class="err-mess">'+data.message+'</div>');
		}
	});

}
function of_load(){ 
	
	$('body').empty().append(of_load_html);

	if (typeof(Storage) !== "undefined") {
	    // Code for localStorage/sessionStorage. 
	    if(typeof sessionStorage.OF_id == 'undefined'){
	    	of_login();
	    }else{ 
	    	of_logged();
	    }
	}else{
	    // Sorry! No Web Storage support..
	    $('body').empty().append('Sorry! No Web Storage support...');
	}
}
