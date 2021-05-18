<?php
$path = "/dev.le-max-de-culture.fr/dev/"
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le Max De Culture • Un nouveau DÉPART !</title>
    <link href="<?= $path?>assets/media/logo.png" rel="shortcut icon" />

    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/master.css">

    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/accueil.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/association.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/participez.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/nouveautes.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/widgets.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>

    <a href="#accueil" id="back_home">
      <img src="<?= $path?>assets/media/logo.png" alt="Logo de l'Association" title="Retour à l'acceuil">
    </a>

    <header>
      <nav>
        <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#association">Association</a></li>
          <li><a href="#participez">Participez !</a></li>
          <li><a href="#nouveautés">Nouveautés</a></li>
        </ul>
      </nav>
    </header>

    <section id="accueil">
      <div id="home">
      <img src="assets/media/fusee.gif" alt="">
      <h1><span>Le Max De Culture</span><span>prend un nouveau DÉPART !</span></h1>
    </div>
    </section>
    <script type="text/javascript">
    var c = document.createElement('canvas');
c.id = "canvasBackground";
c.style = "position:absolute;top:0;left:0;z-index:0;";

var parent = document.getElementById('accueil');
parent.appendChild(c);

var ctx = document.getElementById('canvasBackground').getContext('2d');

var dotCount
var dotArray = [];
var radius, x, y;

function createDots(dotCount) {
  for (var i = 0; i < dotCount; i++) {
      radius = Math.floor((Math.random() * 3) + 2);
      x = Math.random() * (c.width - radius * 2) + radius;
      y = Math.random() * (c.height - radius * 2) + radius;
      xVelocity = ((Math.random() * radius) - 1)/50;
      yVelocity = ((Math.random() * radius) - 1)/50;
      fillColor = 'white';
      shadowBlur = 20;
      shadowColor = 'white';
      globalAlpha = ((Math.random() * 5) + 5)/10;
      dotArray.push(new Dot(radius, x, y, xVelocity, yVelocity, fillColor, shadowBlur, shadowColor, globalAlpha));
  }
  animate();
}

function Dot(r, x, y, xV, yV, fC, sB, sC, gA) {
  this.radius = r;
  this.x = x;
  this.y = y;
  this.xVelocity = xV;
  this.yVelocity = yV;
  this.fillColor = fC;
  this.shadowBlur = sB;
  this.shadowColor = sC;
  this.globalAlpha = gA;

  this.updateDots = function () {

      if (x + this.radius > c.width || x - this.radius < 0)
          this.xVelocity = -this.xVelocity;
      if (y + this.radius > c.height || y - this.radius < 0)
          this.yVelocity = -this.yVelocity;
      x += this.xVelocity;
      y += this.yVelocity;

      this.drawDots();
  }

  this.drawDots = function () {
      ctx.beginPath();
      ctx.arc(x, y, this.radius, 0, Math.PI * 2, false);
      ctx.shadowBlur = this.shadowBlur;
      ctx.shadowColor = this.shadowColor;
      ctx.globalAlpha = this.globalAlpha;
      ctx.fillStyle = this.fillColor;
      ctx.fill();
  }
}
function animate(){
  requestAnimationFrame(animate);
  ctx.clearRect(0, 0, c.width, c.height);

  for(var i = 0; i < dotArray.length; i++){
      dotArray[i].updateDots();
  }
}

function setValues() {
  c.width  = parent.offsetWidth;
  c.height = parent.offsetHeight;
  dotArray = [];
  dotCount = Math.floor((c.width/2)*(c.height/2)/2000);
  createDots(dotCount);

}
document.body.onload = function () {
  setValues();
}
window.addEventListener('resize', function(){
  setValues();
})
    </script>

    <section id="association">

        <h2>Création de l'association</h2>

        <div class="">
          <p>Souhaitant proposer toujours plus d'activités et de contenus, il devenait de plus en plus important d'avoir un cadre légal pour le projet. C'est pourquoi, nous avons l'immense plaisir de vous annoncer la création officielle de l'<span>association Le Max De Culture</span> !! 🎉</p>

          <p>Vous pouvez retrouver l'association sur le <a href="https://www.journal-officiel.gouv.fr/associations/detail-annonce/associations_b/20210018/320" target="_blank">Journal Officiel</a> </p>

          <p>blabla</p>
        </div>
    </section>

    <section id="participez">

        <h2>Participez au projet !</h2>

        <p>blabla</p>
        <p>blabla</p>
        <p>blabla</p>
    </section>

    <section id="nouveautes">


      <h2>Les nouveautés à venir !</h2>

      <p>blabla</p>
      <p>blabla</p>
      <p>blabla</p>
    </section>



    <footer>
      <p>&copy 2018 - <?= date('Y') ?> - <a href="https://le-max-de-culture.fr">Le Max De Culture</a></p>
      <p><a href="https://github.com/Le-Max-De-Culture/dev">Voir le code source</a> </p>

    </footer>

    <script src="<?= $path?>assets/javascript/master.js"></script>
  </body>
</html>
