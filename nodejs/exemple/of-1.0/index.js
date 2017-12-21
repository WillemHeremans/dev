var config = require('./app/config'),
	HOST = process.env.HOST || config.host,
	PORT = process.env.PORT || config.port;

var http = require('http'),
		fs   = require('fs');

var publicPath = './app',
		viewsPath  = './app/views';

var server 	= http.createServer(handler),
			io		= require('socket.io')(server);

function handler(req,res){

	console.log(req.url);

	if(req.url.startsWith('/public')){
		req.url = req.url == '/public' ? req.url+'/index.html' : req.url;
		req.url = req.url == '/public/' ? req.url+'index.html' : req.url;

		fs.readFile(publicPath+req.url,(err,file)=>{
			if(err){
				res.writeHead(404);
				res.write('Content not found');
			}else{
				res.writeHead(200);
				res.write(file);
			}
			res.end();
		});
	}else{
		req.url = req.url == '/' ? '/index.html' : req.url+'.html';

		fs.readFile(viewsPath+req.url,(err,file)=>{
			if(err){
				res.writeHead(500);
				res.write(err.toString());
			}else{
				res.writeHead(200);
				res.write(file);
			}
			res.end();
		});
	}
};

	var users = {
			ids : {},
			nicks : {}
		},
		messages = [];

	var toRemoveUsersArray = {};

	io.on('connection',(socket)=>{
		//console.log('New socket with ID: '+socket.id+' just connected.');

		// sending to sender-client only
		// socket.emit('message', "this is a test");

		// sending to all clients, include sender
		// io.emit('message', "this is a test");

		// sending to all clients except sender
		// socket.broadcast.emit('message', "this is a test");

		// sending to all clients in 'game' room(channel) except sender
		// socket.broadcast.to('game').emit('message', 'nice game');

		// sending to all clients in 'game' room(channel), include sender
		// io.in('game').emit('message', 'cool game');

		// sending to sender client, only if they are in 'game' room(channel)
		// socket.to('game').emit('message', 'enjoy the game');

		// sending to all clients in namespace 'myNamespace', include sender
		// io.of('myNamespace').emit('message', 'gg');

		// sending to individual socketid
		// socket.broadcast.to(socketid).emit('message', 'for your eyes only');

		socket.on('login',(newNick)=>{
			newNick = newNick.replace(/ /g,"_"),
			newNick = newNick.toLowerCase();

			if(!users.nicks[newNick]){
				users.nicks[newNick] = socket.id;
				users.ids[socket.id] = {
					nick : newNick,
					id 	 : newNick+'-'+socket.id
				};
				socket.emit('login',{
					status 	: 'logged',
					id 		: newNick+'-'+socket.id,
					nick 	: newNick,
					message : null
				});
				socket.broadcast.emit('newUser',{
					id   : newNick+'-'+socket.id,
					nick : newNick
				});
			}else{
				socket.emit('login',{
					status	: 'fail',
					id 		: null,
					nick 	: null,
					message : 'User allready exists'
				});
			}
		});

		socket.on('updateUserData',function(userData){
			clearTimeout(toRemoveUsersArray[userData.id]);

			if(users.nicks[userData.nick]){
				if(users.ids[users.nicks[userData.nick]]){
					delete users.ids[users.nicks[userData.nick]];
				}
				users.ids[socket.id] = {
					nick : userData.nick,
					id 	 : userData.id
				};
				users.nicks[userData.nick] = socket.id;
			}else{
				socket.emit('errorUpdatingUserData');
			}
		});

		socket.on('getMessages',()=>{
			socket.emit('setMessages',messages);
		});

		socket.on('getUsers',()=>{
			socket.emit('setUsers',users.ids);
		});

		socket.on('newMess',(newMess)=>{
			newMess = {
				content 	: newMess,
				addedAt 	: (new Date()).getTime(),
				senderID 	: users.ids[socket.id].id,
				senderNick 	: users.ids[socket.id].nick
			};
			messages.push(newMess);
			io.emit('newMess',newMess);
		});

		socket.on('disconnect',()=>{
			if(users.ids[socket.id]){

				var ID = users.ids[socket.id].id;
				toRemoveUsersArray[ID] = setTimeout(function(){
					if(users.ids[socket.id]){
						var nick = users.ids[socket.id].nick;
						if(users.nicks[nick]){
							delete users.nicks[nick];
							delete users.ids[socket.id];
							socket.broadcast.emit('userOut',ID);
						}
					}
				},10000);
			}
			//console.log('Socket with ID: '+socket.id+' just disconnected.');
		});
	});

	server.listen(PORT,HOST,()=>{
		console.log('Server running on port: '+PORT);
	});
