<?php
session_start();
include('includes/config.php');
?>

<!doctype html>
<html lang="Fr" class="no-js">

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

	<script type="text/javascript">
	
	</script>
</head>

<body>
	<?php include('includes/header.php'); ?>
	<div class="ts-main-content">
		<?php include('includes/sidebar.php'); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
						<h2 class="page-title">Gestion de Panneau </h2>
						<div class="row">
							<div class="col-md-8 card-group col-md-offset-3">
								<div class="well body-card row pt-2x pb-3x bk-light">
									<div class="example-1 card">
										<div class="wrapper">
											<div class="date">
												<span class="day">20</span>
												<span class="month">JUIN</span>
												<span class="year">2022</span>
											</div>
											<div class="data">
												<div class="content">
													<div class="libelle-content">
														<span class="author">CLIENT</span>
														<h1 class="title"><a href="#">formulaire d'inscription client</a></h1>
														<p class="text">un client peut avoir au minimum 1 sinon plusieurs Contrat et un client est dans une et une seule commune.</p>
														<label for="show-menu-clt" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnCli" class=" myBtnCli btn-info" value="CREATE NEW DATA ">
													</div>
												</div>
												<input type="checkbox" id="show-menu-clt" />

											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">
													<div class="libelle-content">
														<span class="author">COMMUNE</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement commune</a></h1>
														<p class="text">une commune peut avoir aucun sinon plusieurs client et dans une commune on minimum un sinon plusieurs panneaux.</p>
														<label for="show-menu-com" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnCom" class="myBtnCom btn-info" value="CREATE NEW DATA">

													</div>


												</div>
												<input type="checkbox" id="show-menu-com" />

											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">
													<div class="libelle-content">
														<span class="author">CONTRAT</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement du contrat</a></h1>
														<p class="text">un contrat para un et un seul client et apartient a un sinon plusieurs panneaux. un contrat a une et une seule facture .</p>
														<label for="show-menu-con" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnCon" class=" myBtnCon btn-info" value="CREATE NEW DATA ">

													</div>
												</div>
												<input type="checkbox" id="show-menu-con" />

											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">

													<div class="libelle-content">


														<span class="author">FACTURE</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement de la facture</a></h1>
														<p class="text">Dans un facture on dénombre un sinon plusieurs contrat et une facture concerne aucun sinon plusieurs reglements.</p>
														<a href="#" class="button">Read more</a>
														<label for="show-menu" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnFac" class=" myBtnFac btn-info" value="CREATE NEW DATA ">
													</div>
												</div>
												<input type="checkbox" id="show-menu-fac" />
											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">

													<div class="libelle-content">
														<span class="author">PANNEAU</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement du panneau</a></h1>
														<p class="text">Un panneau peut apartenir a aucun sinon plusieurs contrat et un panneau est situer dans une et une seule commune .</p>
														<a href="#" class="button">Read more</a>
														<label for="show-menu-pan" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnPan" class=" myBtnPan btn-info" value="CREATE NEW DATA ">

													</div>

												</div>
												<input type="checkbox" id="show-menu-pan" />

											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">
													<div class="libelle-content">
														<span class="author">REGLEMENT</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement du reglement</a></h1>
														<p class="text">un reglement concerne une et une seule facture et un et seule type de reglement.</p>
														<a href="#" class="button">Read more</a>
														<label for="show-menu-reg" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnReg" class=" myBtnReg btn-info" value="CREATE NEW DATA ">

													</div>

												</div>
												<input type="checkbox" id="show-menu-reg" />

											</div>
										</div>
									</div>
									<div class="example-2 card">
										<div class="wrapper">
											<div class="header">
												<div class="date">
													<span class="day">20</span>
													<span class="month">JUIN</span>
													<span class="year">2022</span>
												</div>

											</div>
											<div class="data">
												<div class="content">
													<div class="libelle-content">
														<span class="author">TYPE DE REGLEMENT</span>
														<h1 class="title"><a href="#">Formulaire d'enregistrement du type de reglement</a></h1>
														<p class="text">un type de reglement concerne aucun sinon plusieurs reglements.</p>
														<a href="#" class="button">Read more</a>
														<label for="show-menu-treg" class="menu-button"><span></span></label>
													</div>
													<div class="action-content">
														<input type="button" id="myBtnTreg" class=" myBtnTreg btn-info" value="CREATE NEW DATA ">

													</div>

												</div>
												<input type="checkbox" id="show-menu-treg" />

											</div>
										</div>
									</div>
								</div>
								<div class="text-center text-light" style="color:black;">
									<a href="forgot-password.php" style="color:black;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aut ipsum nulla voluptates est aliquid quidem, sapiente tenetur, provident numquam error dolore necessitatibus consectetur pariatur tempore iure id blanditiis quis.</a>
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

</html>