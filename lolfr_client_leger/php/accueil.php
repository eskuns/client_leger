<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Accueil</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:100'>
  <link rel="stylesheet" href="../css/accueil.css">

</head>
<body>

<div class="split-slideshow">
  <div class="slideshow">
    <div class="slider">
      <div class="item">
        <img src="../image/lec.png" />
      </div>
      <div class="item">
        <img src="../image/lck.png" />
      </div>
      <div class="item">
        <img src="../image/lpl.png" />
      </div>
      <div class="item">
        <img src="../image/lcs.png" />
      </div>
    </div>
  </div>
  <div class="slideshow-text">
    <div class="item"><a href="./classement.php?id_ligue=1">LEC</a> </div>
    <div class="item"><a href="./classement.php?id_ligue=2">LCK</a></div>
    <div class="item"><a href="./classement.php?id_ligue=3">LPL</a></div>
    <div class="item"><a href="./classement.php?id_ligue=4">LCS</a></div>
  </div>
</div>


  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
  <script  src="../javascript/accueil.js"></script>

</body>
</html>

<?php include ("./cookie.php"); ?>