let menu = document.getElementById("navMenu");
let lname = document.getElementById("lname");
let fname = document.getElementById('fname');
let mail = document.getElementById('mail');
let subject= document.getElementById('subject');
let message= document.getElementById('message');
let form = document.getElementById('formContact');
let test = document.getElementById('test');


function showMenu(){
    if(menu.className === "navigationBar")
    menu.className= "menuVerticale";
 else{
     menu.className="navigationBar";
 }
}

function checkForm() {
if (message.value != ""){
    form.setAttribute("action","assets/traitement/contactRequest.php" );
}
};

