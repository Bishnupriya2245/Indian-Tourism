<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="container-fluid">
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					
					<?php
						} else{
					?>
							<ul>
								<li><a href="homepage.php">HOME</a></li>
								<li><a href="#">TOUR</a></li>
								<li><a href="#">SERVICE</a></li>
								<li><a href="#">LOGOUT</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>