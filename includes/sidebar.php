<nav class="ts-sidebar">
			<ul class="ts-sidebar-menu">
			
				<li class="ts-label">Menu</li>
				<?PHP if (isset($_SESSION['id'])) { ?>
					<li><a href="dashboard.php"><i class="fa fa-desktop"></i>Home</a></li>
					<li><a href="my-profile.php"><i class="fa fa-user"></i> My Profile</a></li>
<li><a href="change-password.php"><i class="fa fa-files-o"></i>Change</a></li>
<li><a href="book-hostel.php"><i class="fa fa-file-o"></i> Panneau</a></li>
<li><a href="room-details.php"><i class="fa fa-file-o"></i>Details</a></li>
<li><a href="access-log.php"><i class="fa fa-file-o"></i>Access</a></li>
<?php
}
else { ?>
				
				<li><a href="command.php"><i class="fa fa-files-o"></i>Command a New Panneau</a></li>
				<li><a href="index.php"><i class="fa fa-users"></i> User Login</a></li>
				<li><a href="admin"><i class="fa fa-user"></i> Admin Login</a></li>
				<?php
}?>

			</ul>
		</nav>