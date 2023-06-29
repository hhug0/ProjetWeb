<?php 
  session_start();
  require_once '../config.php'; // ajout connexion bdd 

  // si la session existe pas soit si l'on est pas connecté on redirige
  if(!isset($_SESSION['user'])){
      header('Location:../index.php');
      die();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Espace Joueur</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.min.js">
        <link rel="stylesheet" type="text/css" href="joueur.css">
        <meta name="viewport" 
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>

      <!--barre de navigation-->

      <nav class="navbar navbar-dark justify-content-center text-light border yolo">
			<div class="container-fluid mt-6">

			<div class="col p-6">
			<nav class="navbar navbar-dark justify-content-center text-light">
				<div class="link">
			<a class="" href="../index.php">
        <a class="" href="..">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-door-open-fill" viewBox="0 0 16 16">
          <path d="M1.5 15a.5.5 0 0 0 0 1h13a.5.5 0 0 0 0-1H13V2.5A1.5 1.5 0 0 0 11.5 1H11V.5a.5.5 0 0 0-.57-.495l-7 1A.5.5 0 0 0 3 1.5V15H1.5zM11 2h.5a.5.5 0 0 1 .5.5V15h-1V2zm-2.5 8c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
          </svg>
			  </a>
			</a>
			</div>
			</div>

			<div class="col p-6">
			<div class=kiki>
			<a>
            <img src="https://cdn2.trictrac.net/documents/formats/news_xlarge/documents/originals/6b/4c/b24a9d99bc500a729e1947ddcd3c2a82f1a44ff11a31b072dd5071618055.jpeg" alt="logo" height="100px" width="250px">
            </a>
			</div>
			</div>

			<div class="col p-6">
      </div>

		  </div>
      </nav>

    <br></br>
    <nav class="navbar justify-content-center text-light"><h3 style="font-family:Georgia, 'Times New Roman', Times, serif;">Liste des Quizz</h3></nav>
    
    <div class="container-fluid mt-3">
    <div class="row">
    <div class="col p-3"></div>

    <div class="col p-1">
      <div class="col p-1"></div>
      <div class="col p-1">
        <div class="row">
        <div class="col p-1"></div>
        <div class="col p-1">
        <ul style="text-align: center;">Films Disney</ul>
        <ul style="text-align: center;">Films d'actions</ul>
        <ul style="text-align: center;">Films dramatique</ul>
        </div>
        <div class="col p-1"></div>
        </div>
      </div>
      <div class="col p-1"></div>
    </div>

    <div class="col p-3"></div>
      
    </div>
    </div>


  </body>
</html>