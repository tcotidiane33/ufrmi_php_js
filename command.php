<?php
session_start();
include('includes/config.php');
if (isset($_POST['submit'])) 
{
	
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
	<title>Panneau Registration</title>
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

</head>
<body>
	<?php include('includes/header.php'); ?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Commander un nouveau PANNEAU </h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-primary">
									<div class="panel-heading"> tous les Info</div>
									<div class="panel-body">
										<form method="post" action="" name="registration" class="form-horizontal" onSubmit="return valid();">
											<div class="container">
												<form>
													<div class="form-group row">
														
														<div class="col-sm-1-12">
																<p>lorem lorem
																	Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus magni aut officiis quia impedit soluta vero tempore inventore? Nesciunt repudiandae numquam voluptatem libero nemo. Eligendi cum nesciunt aspernatur consectetur molestiae.
																</p>
													</div>
													</div>
													<fieldset class="form-group row">
														<legend class="col-form-legend col-sm-1-12">FORMUMAIRES D'ENREGISTREMENT</legend>
														<div class="col-sm-1-12">
															
														</div>
													</fieldset>
													.<div class="form-group form-body">
														<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn myBtnCli btn-primary">CLIENT</button>
															</div>
														</div>
														<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn myBtnCom btn-primary">COMMUNE</button>
															</div>
														</div>
														<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn myBtnFac btn-primary">FACTURE</button>
															</div>
														</div>

													</div>
													
													<div class="form-group form-body">
													<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn myBtnPan btn-primary">PANNEAU</button>
															</div>
														</div>
														<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn mybtnReg btn-primary">REGLEMENT</button>
															</div>
														</div>
														<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content">
																<button type="submit" class="btn myBtnCon btn-primary">CONTRAT</button>
															</div>
														</div>
														
													
													</div>

													<div class="form-group form-body">
													
													<div class="form-group form-submit row">
															<div class="offset-sm-2 col-sm-10 form-content typ-con">
																<button type="submit" class="btn myBtnTreg btn-primary">TYPE REGLEMENT</button>
															</div>
														</div>
														
													</div>
													
												</form>
												
											</div>						


										<!-- <div class="col-sm-6 col-sm-offset-4">
										<button class="btn btn-default" type="submit">Cancel</button>
										<input type="submit" name="submit" Value="Register" class="btn btn-primary">
										</div> -->
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