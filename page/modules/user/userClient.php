<?php
if(!defined('_CODE')){
    die('Access denied...');
}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
        #game1Iframe {
            display: none;
            width: 100%;
            height: 630px;
            border: none;
        }
    </style>
    <style>
            #game2Iframe {
                display: none;
                width: 100%;
                height: 630px;
                border: none;
            }
    </style>
   <!-- <style>
            #game3Iframe {
                display: none;
                width: 100%;
                height: 1000px;
                border: none;
            }
    </style>
    <style>
        #game4Iframe {
            display: none;
            width: 100%;
            height: 1000px;
            border: none;
        }
 </style> -->
  </head>

<body >
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Grad</em> School</a>
    </div>
</header>

<section style="height: 700px; margin-top: 100px;">
<button id="showGameBtn" style="margin-top: 100;">Line Coler</button>
    <iframe id="game1Iframe" src="Web Test Game/Line Coler/Line Coler.html"></iframe>
    <script>
        document.getElementById("showGameBtn").onclick = function() {
            var iframe = document.getElementById("game1Iframe");
            if(iframe.style.display === "none") {
                iframe.style.display = "block";
            } else {
                iframe.style.display = "none";
            }
        };
    </script>

<button id="GameBtn">Fill the Cups</button>
<iframe id="game2Iframe" src="Web Test Game/Fill The Cups/fillthecups.html"></iframe>
<script>
    document.getElementById("GameBtn").onclick = function() {
        var iframe = document.getElementById("game2Iframe");
        if(iframe.style.display === "none") {
            iframe.style.display = "block";
        } else {
            iframe.style.display = "none";
        }
    };
</script>

<!--<button id="Game3Btn">Breath Out Pro!</button>
<iframe id="game3Iframe" src="Breath Out Pro!/Breath Out Pro!.html"></iframe>
<script>
    document.getElementById("Game3Btn").onclick = function() {
        var iframe = document.getElementById("game3Iframe");
        if(iframe.style.display === "none") {
            iframe.style.display = "block";
        } else {
            iframe.style.display = "none";
        }
    };
</script>

<button id="Game4Btn">Block Puzzle</button>
<iframe id="game4Iframe" src="Block Puzzle/Block Puzzle.html"></iframe>
<script>
    document.getElementById("Game4Btn").onclick = function() {
        var iframe = document.getElementById("game4Iframe");
        if(iframe.style.display === "none") {
            iframe.style.display = "block";
        } else {
            iframe.style.display = "none";
        }
    };
</script> -->
</section>

<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 by Grad School  
        </div>
      </div>
    </div>
  </footer>
</body>
</html>