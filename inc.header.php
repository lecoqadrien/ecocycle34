<?php
    $url = "/ecocycle34/src/";
    $path = "/Applications/MAMP/htdocs/" .$url;
    $title = "Accueil";

?>
<DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <link rel="stylesheet" href="/ecocycle34/style.css">
            <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
            <title>
                <?php if(isset($title)){
                    echo $title;
                }?>
            </title>
        </head>

        <header>
        <nav>
            <a href="/ecocycle34/index.php"><img src="/ecocycle34/img/logo_ecocycle.png"></a>
            <div class="openMenu">
                <img src="/ecocycle34/img/burger.png" alt="image">
            </div>
            <ul>
                <li><a href="/ecocycle34/index.php">Notre service</a></li><br>
                <li><a href="/ecocycle34/src/pages/team.php">Notre Equipe</a></li><br>
                <a href="/ecocycle34/src/pages/contact.php"><button>Contactez-nous</button></a>
                <div class="closeMenu"></div>
            </ul>
        </nav>
        </header>
        <body>
       
       