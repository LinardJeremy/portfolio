let menu = document.getElementById("IdnavLittleScreen");
let lname = document.getElementById("lname");
let fname = document.getElementById('fname');
let mail = document.getElementById('mail');
let subject= document.getElementById('subject');
let message= document.getElementById('message');
let form = document.getElementById('formContact');
let test = document.getElementById('test');

document.getElementById('contactli').addEventListener("mouseup", function(){
    menu.style.display ="none";
});


function showMenu(){
    if(menu.style.display === "none")
    menu.style.display= "block";
 else{
     menu.style.display="none";
 }
}

function checkForm() {
if (message.value != ""){
    form.setAttribute("action","assets/traitement/contactRequest.php" );
}
};

