<?php
session_start();
include('includes/config.php');
if (isset($_POST['login'])) {
}
?>


<!-- tcotidiane33@gmail.com  -->

<?php
//connexion a la base de donnee
// require('config.php');
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


<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin login</title>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
</head >
<body>

<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
	<div class="form-content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<!-- Title -->
    <h1 class="overlay__title text-center text-bold text-light mt-4x">
      Bienvenue sur le  site de L'UFR MI 
      <span class="text-gradient">Université Felix Félix-Houphouët-Boigny </span> de Cocody
    </h1>
	
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 form-login col-md-offset-2">

							<form action="" class="mt" method="post">
								<label for="" class="text-uppercase text-sm">Your Username or Email</label>
								<input type="text" placeholder="Username" name="username" class="form-control mb">
								<label for="" class="text-uppercase text-sm">Password</label>
								<input type="password" placeholder="Password" name="password" class="form-control mb">
							</form>
							<input type="submit" name="login" class="btn myBtnLog btn-primary btn-block" value="login">
							<!-- <input type="submit" name="login" class="btn myBtnLogs btn-primary btn-block" value="login test"> -->
						</div>
						    
					</div>
						<div class="footer">
							  <!-- Description -->
        <p class="overlay__description my-4 btn-sm text-light">
          if you don't have a account 🙏 please <a href="./signup.php"><big style="color: ;">🖱 click-Here !</big></a>
          <strong>We're gonna talk accessibility, too.</strong>
        </p>
        <!-- Buttons -->
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
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

<div class="foot">
	<footer>
		<p> Brought To You By <a href="https://github.com/tcotidiane33">EUREKA DODJO</p>
	</footer>
</div>


<style>
	.foot {
		text-align: center;
		border: 1px solid black;
	}
</style>

</html>