<?php
session_start();
include('includes/config.php');
if(isset($_POST['submit']))
{
	if($_SERVER["REQUEST_METHOD"] == "POST") {
        //recuperation et verification des donnees
        if((!empty($_POST['NUMFACT'])) || (!empty($_POST['DATEFACT']))) {

            //nettoyage des donnees
            $numfact = htmlspecialchars($_POST['NUMFACT']);
            $datefact = htmlspecialchars($_POST['DATEFACT']);

            //preparation de la requette d'insertion
            $insert = $conn->prepare('INSERT INTO facture(NUMFACT,DATEFACT) VALUES(?, ?)');

            //Execution de la requette      
            $insert->execute(array($numfact, $datefact));    
			echo"<script>alert('Student Succssfully register');</script>";

            
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
	<title>User Registration</title>
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
					
						<h2 class="page-title">ENREGISTREMENT FACTURE </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading"> all Info</div>
									<div class="panel-body">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" name="registration" class="form-horizontal" onSubmit="return valid();">
											
										

<div class="form-group">
<label class="col-sm-2 control-label">Numero 🤔 de la facture: </label>
<div class="col-sm-8">
<input type="text" name="nufac" id="nufac"  class="form-control" required="required" >
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Date 🤔 facture: </label>
<div class="col-sm-8">
<input type="date" name="dafac" id="dafac"  class="form-control" required="required" >
</div>
</div>


						
<section class="voir_">
        <a href="command.php">Voir touts les Factures -></a>
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
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function ()
{
event.preventDefault();
alert('error');
}
});
}
</script>

</html>