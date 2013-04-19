<?php 	error_reporting(E_ALL);
		include('includes/init.php'); 
?>

<!DOCTYPE html">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Stellar Dawn Central - Formerly MechScape World - Petitions</title>
	<!-- BOF Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="http://outerleap.net/stellardawncentral/css/petition_form.css" />
	<link rel="stylesheet" type="text/css" href="http://outerleap.net/stellardawncentral/css/index.css" />
	<!-- EOF Main Stylesheet -->
</head>
<body>
	<div id="container">
	
		<div id="header">
			<img src="http://outerleap.net/stellardawncentral/images/logo.png" alt="Stellar Dawn Central - The Original Stellar Dawn Fansite" />
		</div>
		
		<div id="content">
			<h1 class="petition_h1">Stellar Dawn Petition Comments</h1>
	<?php 
	
		if($_POST) { insert_petition_entries(); }
			
		get_entries();
	?>
			<div id="petition_form_container">
				<?php get_ip(); ?>
			</div>
		
		</div>
	</div>

</body>
</html>