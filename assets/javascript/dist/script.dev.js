"use strict";

var menu = document.getElementById("IdnavLittleScreen");
var lname = document.getElementById("lname");
var fname = document.getElementById('fname');
var mail = document.getElementById('mail');
var subject = document.getElementById('subject');
var message = document.getElementById('message');
var form = document.getElementById('formContact');
var test = document.getElementById('test');
document.getElementById('contactli').addEventListener("mouseup", function () {
  menu.style.display = "none";
});

function showMenu() {
  if (menu.style.display === "none") menu.style.display = "block";else {
    menu.style.display = "none";
  }
}

function checkForm() {
  if (message.value != "") {
    form.setAttribute("action", "assets/traitement/contactRequest.php");
  }
}

;