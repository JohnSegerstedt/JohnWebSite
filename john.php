<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/favicon.ico">
<meta property="og:site_name" content="John Segerstedt"/>
<meta property="og:title" content="Digital Portfolio - John Segerstedt"/>
<meta property="og:description" content="The goal of this site is to provide a constantly updating and detailed presentation of both myself and any project I have worked on. I encourage you to look around and feel free to contact me through e-mail and/or on LinkedIn."/>
<meta property="og:image" content="https://john-segerstedt.000webhostapp.com/john/img/digital_portfolio.png">
<meta property="og:url" content="https://john-segerstedt.000webhostapp.com/john/john.php?page=introduction">
<meta property="og:type" content="website"/>

<title>John Segerstedt</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8"> <!-- fixar mobilanpassning -->
	<link rel = "stylesheet" type = "text/css" href = "style.css" media = "all">

</head>

<?php
$page = "";
if(isset($_GET['page'])){
	$page = $_GET['page'];
}
if($page != "introduction" && $page != "resume" && $page != "progproj" && $page != "uniwork" && $page != "other"){
	$page = "introduction";
}
?>
<body>


	
	<div class="hero-image">
	
		<!-- <img src="img/portrait.png" alt="John Segerstedt" style="margin:50px; height:150px;"> todo maybe later... -->
	
		<div class="hero-text">
			<h1 style="font-size:50px">John Segerstedt</h1>
			<h3>Interaction Design student at CTH &amp Independent Game Developer</h3>
			<h5> sejohn (at) student.chalmers.se </h5>
	  </div>
	</div>
	

	<div id = "outer_wrapper" class="outer_wrapper_background">	
		<div id = "inner_wrapper">
			<div id = "top">
				<ul>
					<div id = "menu">
						<!--fixar att sidan man är inne på blir vit i menyn-->
						<?php if($page == "introduction") { ?>	<div id = "highlight"><?php } ?><li><a href = "john.php?page=introduction">Introduction</a> </li>		<?php if($page == "introduction") { ?></div><?php } ?>
						<?php if($page == "resume") { ?>		<div id = "highlight"><?php } ?><li><a href = "john.php?page=resume">Resume/CV</a> </li>				<?php if($page == "resume") { ?></div><?php } ?>
						<?php if($page == "progproj") { ?>		<div id = "highlight"><?php } ?><li><a href = "john.php?page=progproj">Programming Projects</a> </li>	<?php if($page == "progproj") { ?></div><?php } ?>
						<?php if($page == "uniwork") { ?>		<div id = "highlight"><?php } ?><li><a href = "john.php?page=uniwork">University Work</a> </li>			<?php if($page == "uniwork") { ?></div><?php } ?>
						<?php if($page == "other") { ?>			<div id = "highlight"><?php } ?><li><a href = "john.php?page=other">Other Projects/Interests</a> </li>	<?php if($page == "other") { ?></div><?php } ?>
					</div><!-- end menu -->
				</ul>
				<div><br><br><br><hr><hr></div>
			</div><!-- end top -->
 
		
			<div id = "content">
				<?php
				//$page = $page;
				include($page.'.html')
				//if($page == "introduction"){
				//	include('introduction.html');
				//}elseif($page == "resume"){
				//	include('resume.html'); 
				//}
				?>

			</div><!-- end content -->
		</div><!-- end inner_wrapper -->
		
		<div id = "inv">
		<br>
		Any image, logo, or other asset from 3Buttons are intelectal property of John Segerstedt, Sweden.
		</div>
	</div><!-- end outer_wrapper -->
	
	
</body>
</html>























