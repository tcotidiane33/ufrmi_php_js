<div class="brand clearfix " style="top: -16px;">
	<a href="/index.php" class="logo" style="font-size:16px;">Ufrmi</a>
	<span class="menu-btn"><i class="fa fa-bars"></i></span>
	<ul class="ts-profile-nav">
		<li class="ts-account">
			<a href="#"><img src="img/ts-avatar.jpg" class="ts-avatar hidden-side" alt=""> Account <i class="fa fa-angle-down hidden-side"></i></a>
			<ul>
				<li><a href="my-profile.php">My Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>


<div class="brand clearfix " style="top: -16px;">
	<nav class="sidebar">

		<ul class="ts-sidebar-menu" style="display:grid;grid-template-columns:15% 45% 40%;align-items: center;justify-content: center;">
			<div class="logo">
				<li class="ts-label">
					<a href="#" class="logo" style="font-size:16px;">Ufrmi</a>
					<!-- <span class="menu-btn"><i class="fa fa-bars"></i></span> -->
				</li>
			</div>

			<?PHP if (isset($_SESSION['id'])) { ?>
				<li><a href="index.php"><i class="fa fa-desktop"></i>Home</a></li>
				<li><a href="parcours.php"><i class="fa fa-user"></i> Parcours</a></li>
				<li><a href="labs.php"><i class="fa fa-files-o"></i>Labs</a></li>
				<li><a href="dashboard.php"><i class="fa fa-file-o"></i>Espaces Etudiants</a></li>
				<li><a href="galerie.php"><i class="fa fa-file-o"></i>Galerie</a></li>
				<!-- <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access</a></li> -->
			<?php
			} else { ?>

				<div class="menu" style="display:flex;align-items: center;justify-content: center;height: 52px;background: #3e454c;">
					<li><a href="index.php"><i class="fa fa-desktop"></i>Home</a></li>
					<li><a href="parcours.php"><i class="fa fa-users"></i> Parcours</a></li>
					<li><a href="admin/labs.php"><i class="fa fa-user"></i> Labs</a></li>
					<li><a href="dashboard.php" style="display:inline-block;"><i class="fa fa-user"></i> Espaces Etudiants</a></li>
					<li><a href="galerie.php"><i class="fa fa-file-o"></i>About</a></li>
				</div>
			<?php
			} ?>
			<div class="connexion" style="text-align: end;text-shadow: 2px 5px 3px black;font-size: 3rem;font-weight: bold;">
				<li class="ts-label header-label"><a href="admin/login.php">Connexion</li>
			</div>
		</ul>
	</nav>

</div>