var acc = document.getElementsByClassName("list-item");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].onclick = function(){

    var panel = this.querySelector("footer");

    if (panel.style.display === "block") {
    panel.style.display = "none";
 } else {
        panel.style.display = "block";
  }
}

}


var todo = document.getElementsByClassName('edit');
var i;

for (i = 0; i < todo.length; i++) {
todo[i].onclick = function(){
var main = document.getElementById('first');
var update = document.getElementById('third');
var taskTitleMain = document.getElementsByClassName('span-item-title')[3].textContent;
var taskTitleInput = document.getElementById("taskTitle");
    main.style.display = 'none';
    update.style.display = 'block';
    taskTitleInput.value = taskTitleMain;


  }
}



// var montre = document.getElementsByTagName("h2")[0];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[0];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[1];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[1];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[2];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[2];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[3];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[3];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[4];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[4];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[5];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[5];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
//
// var montre = document.getElementsByTagName("h2")[6];
//
// montre.onclick = function(){
// var elem = document.getElementsByTagName("footer")[6];
// if(elem.style.display == "block"){
//     elem.style.display="none";
// } else {
//     elem.style.display="block";
// }
//
// }
