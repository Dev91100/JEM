<header id="mu-hero">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light mu-navbar">
				<!-- Logo -->
				<a class="navbar-brand mu-logo" href="index.php"><img src="assets/images/index/JEM Logo_Nav.png" width = "150vw" height = "65vw" alt="logo"></a>
				<a class="navbar-brand mu-logo" href="index.php"><span>JEM</a>

			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="fa fa-bars"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto mu-navbar-nav">
			      <li class="<?php if($page=="index"){echo "active";}?> nav-item"><a href="index.php">Home</a></li>
					<li class="<?php if($page=="about-us"){echo "active";}?> nav-item"><a href="about-us.php">About us</a></li>
					<li class="<?php if($page=="services"){echo "active";}?> nav-item"><a href="services.php">Services</a></li>
					<li class="<?php if($page=="portfolio"){echo "active";}?> nav-item"><a href="portfolio.php">Portfolio</a></li>
			    	<li class="nav-item dropdown">
				    <a class="dropdown-toggle" href="blog.php" role="button" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News</a>
				    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				    	<a class="dropdown-item" href="https://www.facebook.com/LesJeunesEtudiantsMusulmans" target="_blank">Facebook</a>
				    	<a class="dropdown-item" href="https://www.instagram.com/jeunes_etudiants_musulmans/?hl=en" target="_blank">Instagram</a>
				    	<a class="dropdown-item" href="https://www.youtube.com/channel/UCtrp6KC-1pMRZd2fBwE-rDg" target="_blank">Youtube</a>
				    </div>
				    </li>
			        <li class="<?php if($page=="contact"){echo "active";}?> nav-item"><a href="contact.php">Contact us</a></li>
			    </ul>
			  </div>
			</nav>
		</div>
	</header>