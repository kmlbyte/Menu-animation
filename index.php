<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu_animation</title>
<style>
body{ margin:0px;
}
#topbar{background:#555; height:70px;
}
#menu1btn{float:left; margin:15px 0px 0px 20px; padding:10px;
}
#menu1{
	position:absolute;
	left:20px;
	background:#333;
	width:140px;
	height:auto;
	padding: 0px 2px 2px 2px;
	z-index:10;
	transform-origin:50% 0%;
	transform:perspective(800px) rotatex(90deg);
	transition:transform 0.3s linear 0s;
}
#menu1 > a{
	display:block;
	text-decoration:none;
	color:#fff;
	background:#666;
	padding:12px 0px 12px 12px;
	margin:1px;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	transition:background 0.2s linear 0s, color 0.2s linear 0s;
}
#menu1 > a:hover{background:#888; color:#fff;
}
</style>
<script type="text/javascript">
function toggleMenu(menu){
	var menu= document.getElementById(menu);
	if(menu.dataset.opened=="no"){
	menu.style.transform="perspective(800px) rotatex(0deg)";
	menu.dataset.opened="yes";
	}else{
    menu.style.transform="perspective(800px) rotatex(90deg)";
	menu.dataset.opened="no";
	}
}
</script>
</head>
<body>
<div id="topbar">
<button id="menu1btn" onclick="toggleMenu('menu1')">Menu</button>
</div>
<nav id="menu1" class="folding_menu" data-opened="no">
<a href="#">Section A</a>
<a href="#">Section B</a>
<a href="#">Section C</a>
<a href="#">Section D</a>
<a href="#">Section E</a>

</nav>


</body>
</html>