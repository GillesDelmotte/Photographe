<?php
if(isset($_POST["submit"])){
    $error = [];
    if(isset($_POST["nom"]) && strlen($_POST["nom"])===0){
        $error[] = "Vous n'avez pas envoyé votre nom";
    }
    if(isset($_POST["email"]) && strlen($_POST["email"])===0){
        $error[] = "Vous n'avez pas envoyé votre email";
    }
    if(isset($_POST["sujet"]) && strlen($_POST["sujet"])===0){
        $error[] = "Vous n'avez pas envoyé votre sujet";
    }
    if(isset($_POST["message"]) && strlen($_POST["message"])===0){
        $error[] = "Vous n'avez pas envoyé de message";
    }
    if(sizeof($error)===0){
        header('location:toutvabien.html');
    }
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Laurie-Anne Romagne - photographe">
         <meta name="keywords" content="laurie, anne, photographe, mariage, professionnel, particulier, artistique, loft, sncb, reportage, grossesse, portrait, reverzhi, deep, errance, MUE, cigogne, goldroom, bretagne, huahine, gomme, bichromatées, studio, graphisme, dernier, jardin">
         <meta name="author" content="Gilles Delmotte">
        <link rel="stylesheet" href="../assets/css/reset.css">
        <link rel="stylesheet" href="../assets/css/bundle.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="../assets/images/all/logo.png" />

    <title>contact - Laurie-Anne Romagne - Photographe</title>
</head>
<body>
<div itemscope itemtype="http://schema.org/Person">
    <meta itemprop="familyName" content="Laurie-Anne Romagne">
    <meta itemprop="jobTitle" content="Photographe">
    <meta itemprop="description" content="Laurie-Anne Romagne est une artiste passionnée par la photographie. Depuis plusieurs années la photographie est son métier.Photographe variée, Laurie-Anne Romagne propose des photographies de grossesses, mariages, portraits, etc. Elle réalise également des expositions de ses compositions artistiques.">
    <meta itemprop="image" content=" <img src='./assets/images/accueil/Mue 17 copie.jpg'>">
    <meta itemprop="email" content="info@laurianne-romagne.com">
    <meta itemprop="workLocation" content="Belgique">
</div>
<header class="head cont__head">
        <div class="flex">
        <div class="head__title">
        <a href="../index.html" class="logo">
            <img src="../assets/images/all/logo.png" alt="" class="head__logo">
            <h1>Laurie-Anne Romagne</h1>
        </a>
        </div>
        <input id="burger" type="checkbox" class="checkbox"/>
        <label for="burger" class="burger" id="toto">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav class="head__mainNav mainNav">
            <h2 class="hidden">navigation principale</h2>
            <ul>
                <li class="mainNav__link"><a href="../index.html" title="aller sur la page d'accueil">Accueil</a></li>
                <li class="mainNav__link"><a href="professionnel.html" title="aller sur la page reprenant tous les projets professionnel">Professionnels</a></li>
                <li class="mainNav__link"><a href="particulier.html" title="aller sur la page reprenant tous les projets particulier">Particuliers</a></li>
                <li class="mainNav__link"><a href="artistique.html" title="aller sur la pge reprenant tous les projet s artistique">Artistiques</a></li>
                <li class="mainNav__link"><a href="" class="active" title="aller sur la page contact">Contact</a></li>
            </ul>
        </nav>
        </div>
    </header>
    <section class="contact">
        <div>
            <h1 class="contact__title">Coordonnées de contact</h1>
            <div class="contact__content">

                <p>Laurie-Anne Romagne</p>
                <a href="mailto:info@laurieanne-romagne.com" title="nvoyer un mail à Laurie-Anne Romagne">info@laurieanne-romagne.com</a>
            </div>
        </div>
        <form action="#" method="POST" class="contact__form">
            <div class="errors" id="errors">
                <?php if(isset($error) && sizeof($error)>0): ?>
                    <ul>
                        <?php foreach($error as $e): ?>
                            <li><p><i class="fas fa-exclamation">&nbsp;</i><?= $e ?></p></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>
        <div>
            <label for="nom">
                Nom (obligatoire)&nbsp;:
            </label>
            <input type="text" id="nom" class="nom" name="nom" value="<?= @$_POST["nom"] ?>">
            <label for="email">
                Votre email (obligatoire)&nbsp;:
            </label>
            <input type="text" id="email" class="email" name="email" value="<?= @$_POST["email"] ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
        </div>
        <div>
            <label for="sujet" >
                sujet&nbsp;:
            </label>
            <input type="text" id="sujet" class="sujet" name="sujet" value="<?= @$_POST["sujet"] ?>">
            <label for="message">
                Nom (obligatoire)&nbsp;:
            </label>
            <textarea name="message" id="message" cols="30" rows="10"><?= @$_POST["message"] ?></textarea>
            <input type="submit" value="Me contacter" name="submit">
        </div>

        </form>
    </section>
    <section class="other">
        <h2 class="other__title">
            Mes travaux professionnels
        </h2>
        <div class="other__img">
            <img src="../assets/images/pro/graph.jpg" alt="photo d'une fraise posée sur un plateau blanc en forme de coeur">
            <img src="../assets/images/pro/quartier.jpg" alt="photo d'une petite fille qui tiens un ballon en main">
            <img src="../assets/images/pro/campagne.jpg" alt="photo d'un champs en jachère">
        </div>
        <a href="professionnel.html" class="button" title="aller sur la page reprenant les projets professionnel">Tous mes travaux</a>
    </section>
    <footer class="footer">
        <div>
            <a href="https://www.facebook.com/laurieanne.romagne" class="footer__logo"><img src="../assets/images/all/facebook.png" alt=""></a>
            <a href="https://www.instagram.com/laurieanneromagne/?hl=fr" class="footer__logo"><img src="../assets/images/all/insta.png" alt=""></a>
            <small><a href="mailto:info@laurieanne-romagne.com" title="envoyer un mail a Laurie-Anne Romagne">info@laurieanne-romagne.com</a></small>
        </div>
        <small>© Laurie-Anne Romagne - Photographie créative</small>
    </footer>
</body>
</html>
