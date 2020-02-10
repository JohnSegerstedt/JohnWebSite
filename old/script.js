function toggleMenu(){ //Till för mobilmenyn
	var menu = document.getElementById("menu");
	var inv = document.getElementById("inv");
	var toggleMenu = document.getElementById("toggleMenu");
		if(menu.style.display == "block"){ //Om menyn redan syns
		menu.style.display = "none"; //Gör så att den inte syns
		inv.style.display = "none";//Mobilanpassar divstorlekar
		toggleMenu.style.backgroundColor = "black";
		}
		else{					   		//Om menyn inte redan syns
		menu.style.display = "block";  //Gör så att den syns
		inv.style.display = "block";   //Mobilanpassar divstorlekar
		toggleMenu.style.backgroundColor = "gray";
		}
} //end toggleMenu

window.onresize = function(event) {
	var menu = document.getElementById("menu");
	var inv = document.getElementById("inv");
	var toggleMenu = document.getElementById("toggleMenu");
	if($(window).width() < 750){
		menu.style.display = "none"; //Gör så att den inte syns
		inv.style.display = "none";//Mobilanpassar divstorlekar
		toggleMenu.style.backgroundColor = "black";
	}else if($(window).width() > 750){
		menu.style.display = "block";  //Gör så att den syns
		inv.style.display = "block";   //Mobilanpassar divstorlekar
	}
}; //end onresize