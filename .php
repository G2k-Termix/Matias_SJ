<!DOCTYPE html>
<html lang="sk"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><title>BUILDyourPC</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Stranka_files/w3.css">
    <link rel="stylesheet" href="./Stranka_files/css">
    <link rel="stylesheet" href="./Stranka_files/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
    <style type="text/css" id="operaUserStyle"></style></head>
<?php

function displayHeader() {
    echo '
    <body>
    
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/Stranka.php" class="w3-bar-item w3-button w3-padding-large">DOMOV</a></li>
    <a href="/podstranka1.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KOMPONENTY</a>
    <a href="/podstranka2.html" class= "w3-bar-item w3-button w3-padding-large w3-hide-small">VIDEO NÁVOD</a>
    <a href="Stranka.html#kontakt" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KONTAKT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>

<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="/Stranka.php#domov" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">DOMOV</a>
  <a href="/podstranka1" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">NÁKUP</a>
  <a href="/Stranka.php#kontakt" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">KONTAKT</a>
  <a href="/podstranka2" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">VIDEO NÁVOD</a>
</div>

<div class="w3-content" style="max-width:2000px;margin-top:46px">
    ';
}

?>

<?php displayHeader(); ?>
