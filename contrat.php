j<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//recuperation et verification des donnees
		if ((!empty($_POST['nuco'])) || (!empty($_POST['numfac'])) || (!empty($_POST['numcli'])) || (!empty($_POST['daco'])) || (!empty($_POST['panneau']))) {

			//nettoyage des donnees
			$numcontrat = htmlspecialchars($_POST['nuco']);
			$numfac = htmlspecialchars($_POST['numfac']);
			$numcli = htmlspecialchars($_POST['numcli']);
			$datesign = htmlspecialchars($_POST['daco']);
			$panneau = htmlspecialchars($_POST['panneau']);

			//preparation de la requette d'insertion
			$insert = $conn->prepare('INSERT INTO CONTRAT(NUMCONT,NUMFACT,NUMCLI,DATESIGNATURECONT,PANNEAU) VALUES(?,?,?,?,?)');

			//Execution de la requette      
			$insert->execute(array($numcontrat, $numfac, $numcli, $datesign, $panneau));
			echo "<script>alert('Contrat Succssfully register');</script>";
		} else {
			$errorMsg = "Veuillez renseigner le champs svp !";
			echo $errorMsg;
		}
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
	<meta name="theme-color" content="#3e454c">
	<title>Contrats Registration</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript">
function valid()
{
if(document.registration.password.value!= document.registration.cpassword.value)
{
alert("Password and Re-Type Password Field do not match  !!");
document.registration.cpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">ENREGISTREMENT CONTRAT  </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading"> all Info</div>
									<div class="panel-body">
			<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										

<div class="form-group">
<label class="col-sm-2 control-label">Numero 🤔 contrat : </label>
<div class="col-sm-8">
<input type="text" name="nuco" id="nuco"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Numero facture  : </label>
<div class="col-sm-8">
<select name="numfac" class="form-control" required="required">
<option value="">Select Num Facture</option>
<option value="male">FACT23</option>
<option value="female">Fact64</option>
<option value="others">Others</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Numero 🔢 client 👴: </label>
<div class="col-sm-8">
<select name="numcli" class="form-control" required="required">
<option value="">Select NUM CLIENT</option>
<option value="male">client Alpha</option>
<option value="female">client BIG</option>
<option value="others">Others</option>
</select>
</div>
</div>	

<div class="form-group">
<label class="col-sm-2 control-label">Date 📆 de signature du contrat  : </label>
<div class="col-sm-8">
<input type="date" name="daco" id="daco"  class="form-control" onBlur="checkAvailability()" required="required">
<span id="user-availability-status" style="font-size:12px;"></span>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Selectionner un Panneau  : </label>
<div class="col-sm-8">
<select name="panneau" class="form-control" required="required">
<option value="">Select PANNEAU</option>
<option value="male">PAN2x2</option>
<option value="female">PAN4x4</option>
<option value="others">Others</option>
</select>
</div>
</div>	

<section class="voir_">
												<a href="command.php">Voir touts les Contrats -></a>
											</section>

<div class="col-sm-6 col-sm-offset-4">
<button class="btn btn-default" type="submit">Cancel</button>
<input type="submit" name="submit" Value="Register" class="btn btn-primary">
</div>
</form>

									</div>
									</div>
								</div>
							</div>
						</div>
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
	<script>

</script>

</html>