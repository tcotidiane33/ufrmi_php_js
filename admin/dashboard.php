<?php
session_start();
include('includes/config.php');
// include('includes/checklogin.php');
// check_login();

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

	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">

</head>

<body>
	<?php include("includes/header.php"); ?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php"); ?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title ">Dashboard</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex laborum consectetur expedita officia, a magnam. Possimus voluptas, voluptatibus reprehenderit facilis est qui repellendus nisi! A doloribus corrupti non natus eaque asperiores eveniet, illum libero fugiat cupiditate nemo aut consequatur tenetur molestiae voluptatem, tempora possimus atque voluptate omnis culpa? Illum ullam, beatae doloribus aperiam perspiciatis error debitis quaerat unde explicabo pariatur voluptatibus ratione fugit quidem saepe iusto aspernatur voluptatem? Amet, expedita recusandae voluptatum beatae cupiditate modi aperiam illo placeat suscipit hic qui ab velit. Neque natus eos modi. Natus, tempore officia. Recusandae odio accusantium omnis cum iusto quod quasi saepe quae, eius nisi veniam similique aspernatur ab repellat consequuntur nesciunt optio, magni laboriosam atque pariatur eum unde? Modi vitae sunt ex!/p>


								</div>
							</div>
						</div>





					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	<script>
		window.onload = function() {

			// Line chart from swirlData for dashReport
			var ctx = document.getElementById("dashReport").getContext("2d");
			window.myLine = new Chart(ctx).Line(swirlData, {
				responsive: true,
				scaleShowVerticalLines: false,
				scaleBeginAtZero: true,
				multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
			});

			// Pie Chart from doughutData
			var doctx = document.getElementById("chart-area3").getContext("2d");
			window.myDoughnut = new Chart(doctx).Pie(doughnutData, {
				responsive: true
			});

			// Dougnut Chart from doughnutData
			var doctx = document.getElementById("chart-area4").getContext("2d");
			window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {
				responsive: true
			});

		}
	</script>

</body>

<div class="foot">
	<footer>
		<p> Brought To You By <a href="https://code-projects.org/">Code-Projects</p>
	</footer>
</div>


<style>
	.foot {
		text-align: center;
		border: 1px solid black;
	}
</style>

</html>