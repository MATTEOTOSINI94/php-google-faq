<?php

$linkPage = [

    [
     "titolo" => " Introduzione",
     "linkAssegnato" => "introduzione.php",
    ],
    [
        "titolo" => "Norme Sulla Privacy",
        "linkAssegnato" => "normesullaprivacy.php",
    ],
    [
        "titolo" => "Norme Sulla Privacy",
        "linkAssegnato" => "normesullaprivacy.php",
    ],
    [
        "titolo" => "Termini Di Servizio",
        "linkAssegnato" => "terminidiservizio.php",
    ],
    [
        "titolo" => "Domande Frequenti",
        "linkAssegnato" => "index.php",
    ]
    ];






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/master.css">
    <title>Document</title>
</head>
<body>
<header>
        <div class="head-cont">
            <div class="box-logo-info pt-1">
                <img class="logo-style" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Google_2015_logo.svg/1024px-Google_2015_logo.svg.png" alt="">
                <h3 class="text-style">Privacy & Termini</h3>
            </div>
            <div class="pt-4">
            <ul class="lista-style p-0">
            <?php 
              foreach ($linkPage as $key => $value) {
                $nameLink = $value["titolo"];
                $linkPagina = $value["linkAssegnato"];
            ?> <li class="style-el"><?php echo "<a href=$linkPagina> $nameLink </a>" ?></li>

            <?php
        
              }?>
                </ul>
                
            </div>
        </div>
    </header>
</body>
</html>