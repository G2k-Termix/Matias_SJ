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
<style type="text/css" id="operaUserStyle"></style>
</head>
<body>
<?php
function displayHeader() {
  echo ' 
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Stranka.php" class="w3-bar-item w3-button w3-padding-large">DOMOV</a></li>
    <a href="podstranka1.html" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KOMPONENTY</a>
    <a href="podstranka2.html" class= "w3-bar-item w3-button w3-padding-large w3-hide-small">VIDEO NÁVOD</a>
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
        ' ;}
?>

<?php displayHeader(); ?>
 
  <div class="w3-container w3-content w3-center w3-padding-64 " style="max-width:800px" id="domov">
    <img src="./Stranka_files/MainPhoto.jpg" class="w3-card-4" style="max-width:800px" id="MainPhoto">
    <h2 class="w3-monospace"><strong>BUILDyourPC</strong></h2>
    <p class="w3-opacity"><i>Nauč sa sám poskladať počítač</i></p>
    <p class="w3-wide">Táto stránka vznikla z dôvodu, že veľa mladých ľudí sa zaujíma o výpočtovú techniku alebo lahšie povedané počítače. Preto si ukážeme všetko od nákupu až po poskladanie.  </p>
    <div class="w3-row w3-padding-32">
        <h3 class="w3-wide"><strong>Doporučené stránky na nakupovanie.</strong></h3>
      <div class="w3-third obraskyhover">
        <p class = "w3-monospace">Alza.sk</p>
        <a class="" href="https://www.alza.sk/"><img src="img/Alza.png" class="w3-round w3-margin-bottom" style="width:60%"></a>
      </div>
      <div class="w3-third obraskyhover">
        <p class = "w3-monospace">Heureka.sk</p>
        <a class="" href="https://www.heureka.sk/"><img src="img/Herueka.png" class="w3-round w3-margin-bottom" style="width:60%"></a>
      </div>
      <div class="w3-third obraskyhover">
        <p class = "w3-monospace">Microsoft.com</p>
        <a class="" href="https://www.microsoft.com/"><img src="img/Microsoft.png" class="w3-round" style="width:60%"></a>
      </div>
    </div>
  </div>
 
  

  <?php
  function displayFooter() {

echo '
  <footer class="domovkontakt">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="kontakt">
      <h2 class="w3-wide w3-center">Kontakt</h2>
      <p class="w3-opacity w3-center"><i>Pripomienky? Nechajte nám odozvu</i></p>
      <div class="w3-row-padding" style="margin-top: 48px;">
        <div class="w3-col m6 w3-margin-bottom w3-half">
          <div class="w3-card-4 w3-padding-32 w3-center">
            <i class="fa fa-map-marker fa-2x w3-margin-bottom"></i>
            <p>Krnča, 956 19</p>
            <i class="fa fa-phone fa-2x w3-margin-bottom"></i>
            <p>+421 950 233 040</p>
            <i class="fa fa-envelope fa-2x w3-margin-bottom"></i>
            <p>Numb333rik@gmail.com</p>
          </div>
        </div>
        <div class="w3-col m6 w3-margin-bottom w3-half">
          <div class="w3-card-4 w3-padding-32 w3-round-large w3-center">
            <form action="/odoslat-pripomienku" method="post" class="w3-margin-top">
              <label for="meno" class="w3-text-grey w3-monospace w3-center">Meno:</label>
              <input type="text" id="meno" name="meno" class="w3-input w3-border w3-margin-bottom w3-monospace w3-center" required>
              <label for="email" class="w3-text-grey w3-monospace w3-center">Email:</label>
              <input type="email" id="email" name="email" class="w3-input w3-border w3-margin-bottom w3-monospace w3-center" required>
              <label for="pripomienka" class="w3-text-grey w3-monospace w3-center">Pripomienka:</label>
              <textarea id="pripomienka" name="pripomienka" rows="5" class="w3-input w3-border w3-margin-bottom w3-monospace w3-center" required></textarea>
              <button type="submit" class="w3-button w3-block w3-black w3-text-white w3-margin-bottom w3-hover-opacity w3-monospace w3-center">Odoslať</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    ';}
    ?>


<?php displayFooter(); ?>
    





</div></body></html>