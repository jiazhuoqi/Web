<?php session_start();

// Connexion BDD
require_once "Gestionnaire/connexionBDD.php";
$mysqli = connexionBDD();

$sql = "SELECT * FROM article;";
$result = $mysqli->query($sql);


?>

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper">
        <div class="row">
            <div class="col s2">
                <a id="logo" href="index.php" class="valign-wrapper">
                    <img src="pictures/logo.png" alt="logo" class="responsive-img container">
                </a>
            </div>
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="Formulaire/formInscription.php">S'inscrire</a></li>
                    <li><a href="Formulaire/formConnexion.php">Connexion</a></li>
                    <li><a href="Formulaire/formConnexion.php">Admin</a></li>
                </ul>
            </div>

        </div>
    </div>
</nav>
<br><br>

<div class="section no-pad-bot container">

    <?php
    if (!$result) {
        echo "<p> Desolée ... </p>";
    } else {
        while ($ligne = $result->fetch_object()) {

            echo "<div class='card horizontal'>
        <div class='card-image'>
            <img class='image' alt='Image' src='$ligne->image'>
            <span class='card-title'>$ligne->titre</span>
        </div>
        <div class='card-stacked'>
            <div class='card-content'>
                <p class='corps'>$ligne->corps</p>
            </div>
            <div class='card-action center'>
                <a href='Formulaire/formConnexion.php'>Modifier l'article</a>
            </div>
        </div>
    </div>
    <br><br>";
        }
    }
    ?>

</div>

<br><br><br>

<footer class="page-footer orange">
    <div class="center-align">
        Ce site a été créé par <a class="orange-text text-lighten-3">Pierre MB</a>
    </div>
</footer>