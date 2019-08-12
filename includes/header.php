<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Add bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
		<!-- Add font family -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<!-- Add icons -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
		<!-- Add lightbox image gallery css -->
		<link rel="stylesheet" type="text/css" href="./css/lightbox.css">
		<!-- Add your own style -->
		<link rel="stylesheet" type="text/css" href="./css/style.css">
	</head >
	<body data-spy="scroll">
		<!-- Navbar -->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark">	
			<div class="nabar-brand">
				<h3>LOGO</h3>
			</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="./about.php">About</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="./contact.php">Contact</a>
					</li>
					<!-- Dropdown -->
				    <li class="nav-item dropdown">
				      <a class="nav-link dropdown-toggle" href="store.php" id="navbardrop" data-toggle="dropdown">
				        Select Products
				      </a>
				      <div class="dropdown-menu">
				      	<a class="dropdown-item" href="./store.php">All</a>
				        <a class="dropdown-item" href="./store.php?prod-id=watches">Watches</a>
				        <a class="dropdown-item" href="./store.php?prod-id=sunglasses">Sunglasses</a>
				        <a class="dropdown-item" href="./store.php?prod-id=handbags">Handbags</a>
				      </div>
				    </li>
				</ul>
			</div>		
		</nav>
		<!-- Navbar ends here -->