<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/favicon.jpg">
<title>Din Datorbyggare</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset = "utf-8"> <!-- fixar mobilanpassning -->
	<link rel = "stylesheet" type = "text/css" href = "style.css" media = "all">
	<script type = "text/javascript" src = "jq.js"></script>
	<script type = "text/javascript" src = "script.js"></script>
	<link rel ="stylesheet" href ="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css"><!-- accordion -->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>									<!-- accordion -->
	<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>							<!-- accordion -->
	<script src = "cycle.js"></script>
	<link rel="stylesheet" href="style.css">
		<script>
		$(function acc(){	<!-- anpassar accordion -->
		$("#accordion").accordion({collapsible : true, active : false, animate: 50});});
		</script>

</head>
<body>
	<div id = "wrapper">
		<div id = "top">

			<!-- knappen för att få fram menyn på mobilen -->
			<span id = "toggleMenu" onclick = "toggleMenu()">&equiv;</span> 


			<div id = "topbild">
				<img src = "img/logo.png" onclick = "location.href='https://john-segerstedt.000webhostapp.com/dator/index.php'">
			</div><!-- end topbild -->

			
			<ul>
				<div id = "menu">
					<li> <a href = "index.php">Hem</a> </li>
					<li> <a href = "list.php">Komponentlista </a> </li>
						<div id = "highlight"><!--fixar att sidan man är inne på blir vit i menyn-->
					<li> <a href = "pic.php">Bilder</a> </li></div> <!-- end highlight -->
				</div><!-- end menu -->
			</ul>
		</div><!-- end top -->
		
		<div id = "inv"><!--
		osynlig div, är till för att de andra divarna ska hållas på plats
		--></div>
 
		<div id = "sida">
			<div id="accordion">
			  <h3>Prislista</h3>
			  <div><p>Komponentråd - 100kr <br>
					Datorbygge - 600kr <br>
					Jag tar Swish.</p></div>
			  
			  <h3>Om</h3>
			  <div><p>Denna hemsida ägs av mig, IT-teknologen John Segerstedt. Jag bor i Göteborg och kan bara erbjuda mina tjänster i närområdet.</p></div>
			  
			  <h3>Kontakt</h3>
			  <div><p>Ni kan nå mig genom SMS på telefonnumret:<br>O7O9-4O838O.</p>
			  </div><!-- end sida -->
		</div>
		
		<div class="cycle-slideshow"  data-cycle-auto-height=container>
<?php //Hämtar alla bilder till bildspelet från img/cycle
$dirname = "img/cycle/";
$images = glob($dirname."*.JPG");

foreach($images as $image) {
    echo '<img src="'.$image.'" />';
}
?>
			</div> <!-- end cycle -->
		</div><!-- end sida -->
		
		<div id = "content"><!-- Random text för att "fylla ut" den här diven -->

<?php //Hämtar alla bilder till bildspelet från img/cycle
$dirname = "img/cycle/";
$images = glob($dirname."*.JPG");

foreach($images as $image) {
    echo '<img src="'.$image.'" class = "fullImage" />';
}
?>

		</div><!-- end content -->
	</div><!-- end wrapper -->
</body>
</html>