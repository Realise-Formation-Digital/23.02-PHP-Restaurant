<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta données du document HTML-->
    <title>Site Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link
        href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900italic,900'
        rel='stylesheet' type='text/css'>
    <link href="../css/reset.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/Kelian.css" rel="stylesheet">
    <link href="../css/Florian.css" rel="stylesheet">
    <link href="../css/Thomas.css" rel="stylesheet">
    <link href="../css/Fellec.css" rel="stylesheet">
    <link href="../css/Benedetto.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/rosmatika" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/d5c7a576dfd9dc4ff86d9699da773674?family=Overloaded" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!--Police Rosmatika regular pour le Titres et Overloaded Regular pour le reste, ajouter les liens-->
    <!--Pour Information: Couleur de carte des plats (doré) : cf9e00-->

</head>

<body>

    <!--Entête du site SEB-------------------------->
    <header>
        <div class="container-fluid">

            <nav class="navbar left-aligned">
                <ul>
                    <li><a class="active" href="../index.php">Home</a></li>
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./ingredients.html">Ingredients</a></li>
                    <li><a href="./menu.html">Menu</a></li>
                    <li><a href="./reviews.html">Reviews</a></li>
                    <!-- Show links to login and signup if not connected -->
                    <?php if (!isset($_SESSION["isConnected"]) || !$_SESSION["isConnected"]) { ?>
                        <li><a href="../templates/login.php">Login</a></li>
                        <li><a href="../templates/signup.php">Signup</a></li>
                    <?php } ?>

                    <!-- Show links to private page and logout if connected -->
                    <?php if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"]) { ?>
                        <li><a href="../templates/private.php">Private</a></li>
                        <li><a href="../logic_php/logout.php">Logout</a></li>
                    <?php } ?>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-youtube"></a></li>
                    <li><a href="#" class="fa fa-facebook"></a></li>
                </ul>
            </nav>

            <!--TITRE PRINCIPAL---------------------------------->
            <div class="main-title text-center">
                <h1>the right ingredients</h1>
                <h1>for the right food</h1>
            </div>

            <!--Séparateur blanc et boutons------------------------->
            <img class="divider" src="../img/dividertop.png" alt="divider blanc">
            <div class="head-button">
                <button type="button" class="btn btn-dark">BOOK A TABLE</button>
                <button type="button" class="btn btn-light">SEE THE MENU</button>
            </div>

        </div>
    </header>
    <!--// Entête du site----------------------------------->