<head> 
	<title>Kenneth Joel | <?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link href='http://fonts.googleapis.com/css?family=Raleway:600,500,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css"> 
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<div class="container">
		<div class="wrapper">
			<nav>
				<div class="top-nav"> 
					<a class="nav-link <?php if ($sectionTitle == "blog") {echo "off-color";} ?>" href="index.php">Blog</a> 
					<a class="nav-link <?php if ($sectionTitle == "about") {echo "off-color";} ?>" href="about.php">About</a> 
					<a class="nav-link <?php if ($sectionTitle == "resume") {echo "off-color";} ?>" href="resume.php">Resume</a> 
				</div> 
			</nav>
			
			<div class="avatar-container">
				<img class="avatar" src="img/avatar.jpg" alt="Kenneth's Picture">
			</div>