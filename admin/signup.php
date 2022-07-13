<?php
session_start();
include('includes/config.php');
if (isset($_POST['login'])) {
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
					<h1 class="text-center text-bold text-light mt-4x">Panneau Management System</h1>
					<div class="well row pt-2x pb-3x bk-light">
						<div class="col-md-8 form-login col-md-offset-2">

							        <form  class="mt" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post">
                  <div class="form-content">
                

                   <div class="form-group row my-5">
                      <div class="form-group">
                      <label for="">Enter Your Name</label>
                      <input type="text" name="fname" id="" class="form-control" placeholder="Name 'Hackerman'...." aria-describedby="helpId">
                     
                    </div>
                  </div>

                  <!-- fork form -->
                  <div class="form-group row-cols-1 my-2">
                    <label for="">Enter Last Name</label>
                  <input type="text" name="lname" class="form-control" placeholder="Last name 'Red'........." id="😋Nom" required >
                    <small id="helpId" class="text-muted">Fields required ! ...</small>
                  </div>
                    <!-- fork form -->
                    <div class="form-group">
                      <label for="">Enter Matricule</label>
                      <input type="text" name="matricule" class="form-control" placeholder="Matricule 'MI80'........." id="😋Nom" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form  filiere -->
                    <div class="form-group">
                    <label for="Username">filiere</label>
                    <input type="text" name="filiere" class="form-control" placeholder="SCIENCE INFORMATIQUES ...." id="User" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form -->
                    <div class="form-group btn-group dropdown">
                      <button class="btn btn-primary">Level</button>
                      <button id="my-dropdown" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">LMD/span>
                      </button>
                      <div class="dropdown-menu" aria-labelledby="my-dropdown">
                        <a class="dropdown-item active" href="#">LICENCE 1</a>
                        <a class="dropdown-item active" href="#">LICENCE 2</a>
                        <a class="dropdown-item active" href="#">LICENCE 3</a>
                        <a class="dropdown-item active" href="#">MASTER 1</a>
                        <a class="dropdown-item active" href="#">MASTER 2</a>
                      </div>
                    </div>
                
                    <!-- fork form -->
                    <div class="form-group">
                     
                    <label for="">Enter your Email </label>
                      <input type="email" name="email" class="form-control" placeholder="Email 'example@hugs.com' ......"
                          id="Email" required aria-required="enter a Email correct...">
            
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                    <!-- fork form -->
                    <div class="form-group">
                    <label for="">Enter your Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Your password ********" id="pw" required >
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                     <!-- fork form -->
                    <div class="form-group ">
                    <label for="">Enter a picture </label>
                      <input type="file" name="photo" class=" btn btn-dark btn-outline-light" id="pp" value="choice picture">
                      <small id="helpId" class="text-muted">Fields required ! ...</small>
                    </div>
                  </div>
              </form>
              <input type="submit" name="login" class="btn myBtnLog btn-primary btn-block" value="Sign-Up">
						</div>

						<!-- lol -->
						

          </div>
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