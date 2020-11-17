<?php 
if(isset($_GET["checkSend"])){
?>
<script>alert("Votre message a bien été envoyé")</script>
<?php
$_GET["checkSend"] = "none";
};
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Merriweather:ital@1&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/computer.png" type="image/png">
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" media="all and (max-width: 800px)" href="assets/style/petite_resolution.css" />
    <title>PortFolio</title>
</head>
<body>

<!-- NavBar -->
<nav>
<span>Menu</span>
<ul class="navigationBar" id="navMenu">
    <a href="#information"><li>Accueil</li></a>
    <a href="#project"><li>Projets</li></a>
    <a href="#contact"><li>Contact</li></a>
</ul>
<button class="buttonMenu" onclick="showMenu()"><img class="menuIcone" alt="menu" src="assets/img/burgerMenu.png"></button>
</nav>
<!-- NavBar -->
<!-- information -->
<section class="information" id="information">
    <!-- <div class="divImgProgrammer">
        <img  class="imgProgrammer"src="assets/img/Programmer.png" alt="developper">
    </div> -->
    <div class="introducing">
        <h1>Jérémy Linard</h1>
        <h2>Développeur web junior</h2>
        <img  class="computerImg"src="assets/img/computer.png" alt="computer">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Nullam sit amet diam odio. Sed interdum arcu in vulputate tincidunt. 
            Ut congue, neque nec auctor facilisis, tortor arcu fermentum metus, sit amet pretium justo sem lacinia tortor. 
            Donec malesuada ultricies lorem, at suscipit est rutrum in. Ut commodo libero ac metus posuere auctor. 
            Integer non metus posuere risus hendrerit eleifend sed ut nibh. Fusce libero dolor, faucibus ut placerat in, ullamcorper sit amet diam. Duis sit amet purus ligula. 
            Etiam ut elit sed nisi dictum tempor a sed mi. Maecenas ornare commodo quam, id ultrices ipsum lobortis ut. 
            Donec risus lectus, suscipit a dolor suscipit, vestibulum bibendum mi. 
            Sed non elit sed dui congue tristique. 
            Sed in nisl at risus blandit efficitur.
        </p>
        <div class="sectionSocial">
            <a target="_blank" href="https://github.com/LinardJeremy"><img src="assets/img/github2.png" alt="iconeGithub"></a>
            <a target="_blank" href="https://www.linkedin.com/in/jeremy-linard/"><img src="assets/img/linkedin-xxl.png"></a>
        </div>
    </div>

</section>
<!-- information -->

<!-- project -->
<section class="project" id="project">
    <div class="containerCart">
        <div class="cart">
        <a href=""><img src="assets/img/site1.jpg" alt="imageSite"></a>
            <p>
                Ici explication brève du site web et des technologies utilisées.
            </p>
            <button>Explore -></button>
        </div>
        <div class="cart">
            <a href=""><img src="assets/img/site1.jpg" alt="imageSite"></a>
            <p>
                Ici explication brève du site web et des technologies utilisées.
            </p>
            <button>Explore -></button>
        </div>
        <div class="cart">
            <a href=""><img src="assets/img/site1.jpg" alt="imageSite"></a>
            <p>
                Ici explication brève du site web et des technologies utilisées.
            </p>
            <button>Explore -></button>
        </div>
    </div>
</section>

<!-- project -->

<!-- form contact -->
<section class="contact" id="contact">
        <form method="post" id="formContact" class="contactForm" action="assets/traitement/contactRequest.php">
        <h3>Vous pouvez me contacter directement sur Linkedin en cliquant sur l'icône,
            par mail à l'adresse linard.jeremy.5@gmail.com ou bien encore en remplissant le formulaire
            ci-dessous. 
        </h3>
        <div class="sectionSocial2">
            <a target="_blank" href="https://www.linkedin.com/in/jeremy-linard/"><img src="assets/img/linkedin.png"></a>
        </div>
        <div class="containerForm">
            <div class="divLabelInput">
                <label for="fname">Nom:</label>
                <input type="text" id="fname" name="firstname" placeholder="Votre nom...">
            </div>
            <div class="divLabelInput">
                <label for="lname">Prénom:</label>
                <input type="text" id="lname" name="lastname" placeholder="Votre prénom...">
            </div>
            <div class="divLabelInput">
                <label for="email">Votre email: </label>
                <input type="text" id="mail" name="mail" placeholder="Votre adresse email...">
            </div>
            <div class="divLabelInput">
                <label for="subject">Sujet: </label>
                <input type="text" id="subject" name="subject" placeholder="L'objet de votre message">
            </div>
            <div class="divLabelInput">
                <label  class="labelMessage" for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Votre message ici"></textarea>
            </div> 
            <div class="divLabelInput">   
                <button class="buttonSend" onclick="checkForm()" type="submit" >Envoyer</button>
            </div>
        </div>
</form>
<!-- footer -->
<footer>
<p>Jérémy Linard</p>
    <div class="sectionSocialFooter">
        <a target="_blank" href="https://github.com/LinardJeremy"><img src="assets/img/github2.png" alt="iconeGithub"></a>
        <a target="_blank" href="https://www.linkedin.com/in/jeremy-linard/"><img src="assets/img/linkedin-xxl.png"></a>
    </div>
</footer>
<!-- footer -->
</section>

<!-- form contact -->
</body>
<script src="https://unpkg.com/scrollreveal"></script>
<script>
    ScrollReveal({ reset: true });

    ScrollReveal().reveal('.cart', { delay: 400 });
    ScrollReveal().reveal('#formContact', { delay: 400 });


</script>
<script src="assets/javascript/script.js"></script>

</html>