<?php if ($_SESSION['id']) { ?><div class="brand clearfix ">
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

<?php
} else { ?>
	<div class="brand clearfix ">
		<nav class="">

			<ul class="ts-sidebar-menu" style="display:flex;align-items: center;justify-content: center;">

				<li class="ts-label">
					<a href="#" class="logo" style="font-size:16px;">Ufrmi</a>
					<!-- <span class="menu-btn"><i class="fa fa-bars"></i></span> -->
				</li>

				<?PHP if (isset($_SESSION['id'])) { ?>
					<li><a href="index.php"><i class="fa fa-desktop"></i>Home</a></li>
					<li><a href="parcours.php"><i class="fa fa-user"></i> Parcours</a></li>
					<li><a href="labs.php"><i class="fa fa-files-o"></i>Labs</a></li>
					<li><a href="space.php"><i class="fa fa-file-o"></i>Espaces Etudiants</a></li>
					<li><a href="galerie.php"><i class="fa fa-file-o"></i>Galerie</a></li>
					<!-- <li><a href="access-log.php"><i class="fa fa-file-o"></i>Access</a></li> -->
				<?php
				} else { ?>

					<li><a href="index.php"><i class="fa fa-desktop"></i>Home</a></li>
					<li><a href="parcours.php"><i class="fa fa-users"></i> Parcours</a></li>
					<li><a href="admin/labs.php"><i class="fa fa-user"></i> Labs</a></li>
					<li><a href="admin/space.php"><i class="fa fa-user"></i> Espaces Etudiants</a></li>
					<li><a href="admin/about.php"><i class="fa fa-user"></i> About</a></li>
					<li><a href="galerie.php"><i class="fa fa-file-o"></i>Galerie</a></li>
				<?php
				} ?>

				<li class="ts-label header-label"><a href="admin/login.php">Connexion</li>
			</ul>
		</nav>

	</div>
<?php } ?>