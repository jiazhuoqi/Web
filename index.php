<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Bienvenue</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>

<?php

// Gestion session
if (isset($_SESSION["email"]) AND
    !empty($_SESSION["email"])
) {
    $email = $_SESSION["email"];
    require_once "listePublicationDeconnexion.html";
    echo "Deconnexion";
} else {
    require_once "listePublicationConnexion.html";
    echo "Connexion";
}

?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>