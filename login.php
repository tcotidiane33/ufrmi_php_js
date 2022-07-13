


<!-- tcotidiane33@gmail.com  -->

<?php
//connexion a la base de donnee
require('config.php');
$errorMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //recuperation et verification des donnees
  if ((!empty($_POST['email']) && !empty($_POST['password']))) {

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    //preparation de la requette d'insertion
    $insert = $mysqli->prepare('INSERT INTO users(email,password)
                             VALUES(?, ?)');

    //Execution de la requette      
    $insert->execute(array($email, $password));

    //redirection ver filiere.php
    // header("location:filiere.php");
    echo "string";
  }
  else {
    $errorMsg = "Veuillez renseigner le champs";
    echo $errorMsg;
  }
}
?>

<!DOCTYPE html>
<html lang="Fr-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html">
    <link rel="stylesheet" href="./style.css" type="text/css">
    <link rel="stylesheet" href="./custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="./javascript/lightbox.min.css">
    <link rel="stylesheet" href="./assets/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <title>Tp-Web</title>
</head>


<body>
<header class="header_login">
  <div class="backgroung">
    <img src="./assets/pexels-8.jpg" style="left:0; top:0; position: absolute; z-index: -1; background-size: cover; height: 120vh; width: 100vw " alt="" srcset="">
  </div>
      <!-- Canvas -->
<canvas class="orb-canvas"></canvas>
<!-- Overlay -->
<div class="overlay">
  <!-- Overlay inner wrapper -->
  <div class="overlay__inner">
    <!-- Title -->
    <h1 class="overlay__title">
      Bienvenue sur le  site de L'UFR MI 
      <span class="text-gradient">Université Felix Félix-Houphouët-Boigny </span> de Cocody
    </h1>
    <div class="connection">
      <!-- start log -->

      <div class="wrapper">
        <section class="form login">
            <header></header>
            <form action="#">
               <div class="name-details">
                   
                <div class="field input my-5">
                    <label for="" >Email</label>
                    <input type="text" class="my-3" name="email" placeholder="Enter your Email... " required>

                </div>
                <div class="field input">
                    <label for="">🔑 Password</label>
                    <input type="password" class="my-3" name="password" placeholder="Enter your 🔑 Password... " required>
                    <i class="fas fa-eye"></i>
                </div>
              
                <div class="field my-3 btn ">
                
                    <input type="submit" class="btn btn-outline-danger " value="CONNEXION" required>

                </div>
                
               </div>
            </form>
            <!-- <div class="link">Not yet Signed Up ? <a href="#">SignUp now !</a></div> -->
        </section>
    </div>

  </div>
    <!-- Description -->
    <p class="overlay__description my-4 btn-sm">
      if you don't have a account 🙏 please <a href="./log.php"><big style="color: ;">🖱 click-Here !</big></a>
      <strong>We're gonna talk accessibility, too.</strong>
    </p>
    <!-- Buttons -->
   
  </div>
</div>
<!-- partial -->
</header>
<script src="js/jquery.min.js"></script>
  <script src="js/bootstrap-select.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.bootstrap.min.js"></script>
  <script src="js/Chart.min.js"></script>
  <script src="js/fileinput.js"></script>
  <script src="js/chartData.js"></script>
  <script src="js/main.js"></script>
</body>