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
						<div id = "highlight"><!--fixar att sidan man är inne på blir vit i menyn-->
					<li> <a href = "list.php">Komponentlista </a> </li></div> <!-- end highlight -->
					<li> <a href = "pic.php">Bilder</a> </li>
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
		
		<div id = "content"><!-- Innehållstext -->

Här finns ett exempel på att det blir billigare ifall man bygger ihop en dator själv.

Den<a href="https://www.netonnet.se/art/dator/stationara-datorer/desktop/asus-rog-g11cd-nr102t/237409.8943/"> här </a>datorn på NetOnNet kostar 11'990kr.

En dator med exakt samma prestandanivå kan man bygga ihop för 9'387kr. Detta betyder att man skulle <b> spara hela 2'603kr </b>!
Nedan följer länkar till de komponenterna som tillsammans bygger ihop denna billigare, men lika kraftfulla, dator!

<br><br><hr>


Chassi: <a href="https://www.netonnet.se/art/datorkomponenter/datorchassi/tower/fractal-design-core-2500/210037.8976/">Fractal Design Core 2500</a> - 548kr
<br>Processor: <a href="https://www.netonnet.se/art/datorkomponenter/processor/amdsocketam4/amd-ryzen-5-1400/243664.13677/">AMD Ryzen 5 1400</a> - 1'729kr
<br>Grafikkort: <a href="https://www.netonnet.se/art/datorkomponenter/grafikkort/amd/asus-radeon-rx580-dual-4gb/245926.8988/">ASUS Radeon RX580 Dual 4GB</a> - 2'599kr
<br>RAM-minne: <a href="https://www.netonnet.se/art/datorkomponenter/ram-minne/ddr4/crucial-ballistix-sport-lt-red-2x4gb/234727.8996/">Crucial Ballistix Sport LT Red 2x4GB </a> - 729kr
<br>HDD/SSD: <a href="https://www.netonnet.se/art/datorkomponenter/harddisk/ssdsata-25-tum/samsung-850-evo-series-250gb/212538.8993/">Samsung 850 EVO Series 250GB</a> - 999kr
<br>DVD/CD-spelare: <a href="https://www.netonnet.se/art/datorkomponenter/cd-dvd-bluray/asus-drw-24d5mt/236686.8959/">ASUS DRW-24D5MT</a> - 149kr
<br>Moderkort: <a href="https://www.netonnet.se/art/datorkomponenter/moderkort/amdsocketam4/asus-prime-b350m-a/242785.13678/">ASUS PRIME B350M-A</a> - 945kr
<br>Nätaggregat <a href="https://www.netonnet.se/art/datorkomponenter/nataggregat/ickemodulart/mission-sg-ggp-1-0/231688.9010/">Cooler Master MasterWatt Lite 500W</a> - 499kr
<br>Operativsystem: <a href="https://www.netonnet.se/art/dator/programvara/operativsystem/microsoft-win-10-home-3264-bit-usb-se/220723.9359/">Windows 10 Home 64-bit OEM</a> - 1'190kr
<br>
Totalpris: 9'387kr

<br><br>
<a href="https://www.netonnet.se/art/dator/stationara-datorer/desktop/asus-rog-g11cd-nr102t/237409.8943/"> Färdigköpt</a>: 11'990kr
<br><br><hr>









		</div><!-- end content -->
	</div><!-- end wrapper -->
</body>
</html>