<?php 	error_reporting(E_ALL);
		include('petition/includes/init.php'); 
		
		if($_POST) {
			insert_petition_entries();
			}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Stellar Dawn Central - Formerly MechScape World - Sign the Petition Today!</title>
	<!-- BOF Main Stylesheet -->
	<link rel="stylesheet" type="text/css" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/petition_form.css" />
	<!-- EOF Main Stylesheet -->
</head>
<body>

	<div id="container">
	
		<div id="header">
			<img src="images/logo.png" alt="Stellar Dawn Central - The Original Stellar Dawn Fansite" />
			<div id="header_social">
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="http://outerleap.net/stellardawncentral/petition/">Petition</a></li>
					<li><a href="#">Forums</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
		
		
		<div id="content">
			<div id="sdc_content_left">
				<div id="stellar_dawn_title_image">
				<img src="images/stellar_dawn_concept.png" alt="Stellar Dawn Central - Concept Art" />
				</div>
				<div id="what_is_stellar_dawn"><h2>What is Stellar Dawn?</h2><br />
				What is Stellar Dawn?<br /><br />

				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras semper ipsum ut lorem lobortis sit amet egestas neque mollis. Sed a felis augue, non accumsan mi. Sed rhoncus facilisis massa, ut tincidunt lectus mattis eu.
				</div>
			</div>
			
			<div id="sdc_content_right">
			<h2>Sign the Petition!</h2>
			<p>Show Jagex your support for Stellar Dawn!</p>
			<?php get_ip(); ?>
			</div>
		</div>
		
		<div style="clear:both;"></div>
		
		<div id="feed_bar">
			<div id="feed_bar_left">
				<h3>Latest Community Topics</h3>
			</div>
			<div id="feed_bar_right">
				<h3>Latest Twitter Posts</h3>
			</div>
			<div style="clear:both;"></div>
		</div>
		
		<div id="news_bar">
			<h3 class="news_bar_h3">Latest News</h3>
			<div id="news_bar_left">
				<h3 class="news_bar_secondary_h3">Look! Darth Irule Fell Over! LOL!</h3>
				<h4>By PoultryChamp on September 1st 2013</h4>
				<p> Sed porta, erat vitae adipiscing mollis, metus lacus tempus mauris, eget commodo erat tortor quis quam. Sed fringilla libero sed orci rutrum vitae rhoncus dolor accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lorem libero, fermentum nec faucibus et, tristique in ipsum. Donec tincidunt ullamcorper diam, vel lacinia neque pretium vitae. Nullam laoreet condimentum mauris, non gravida leo suscipit sit amet. Sed ligula massa, aliquam sed consequat ac, luctus et justo. </p>
				<p>Read More</p>
			</div>
			<div id="news_bar_right">
				<h3 class="news_bar_secondary_h3">Stellar Dawn Has Been Released!</h3>
				<h4>By PoultryChamp on August 21st 2013</h4>
				<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor adipiscing eleifend. Nam vitae elementum massa. Cras arcu risus, volutpat id interdum quis, iaculis ac lorem. In hac habitasse platea dictumst. Praesent id bibendum nisi. Suspendisse potenti. Maecenas velit turpis, sagittis et vulputate mattis, aliquet ac dolor. Donec aliquam varius purus, quis tempus mi aliquam non. Quisque bibendum dui bibendum nulla commodo facilisis. Praesent felis mi, accumsan ut gravida luctus, hendrerit sit amet lacus. Etiam cursus risus dictum elit rhoncus tincidunt. Etiam facilisis, lectus nec gravida volutpat, turpis sapien adipiscing enim, a sodales nulla justo vitae ante. Duis facilisis mattis nulla. In nec ante libero, vel faucibus erat. Suspendisse laoreet ornare augue, vel dignissim justo pulvinar et. Proin vitae tempus enim. </p>
				<p>Read More</p>
			</div>
		</div>
		<div style="clear:both;"></div>
		<div id="footer">
		</div>
		
	</div>

</body>
</html>