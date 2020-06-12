<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>hardware</title>
	<link rel="stylesheet" href="">

<style>
	body,html{
		height: 100%;
	}
.hard{
	width: 80%;
	margin: auto;
	height: 500px;
	border: 2px solid red;
}
.tab{
	float: left;
	width: 30%;
height: 500px;
	border: 1px solid green;
}
.tab .tablinks{
	width: 100%;
	display: block;
	height: 50%;
	padding: 10px;
}
.tab .tablinks img{
transition: .4s;
	}
.tabcont{
	float: left;
	width: 70%;
	height: 500px;
}
.active.tablinks img{
	transform: scale(.9);

}

</style>

</head>
<body>

	<?php include "files/header.php" ?>


	<div class="hard">

    <div class="tab">
      
      <div id="defaultOpen" class="tablinks" onclick="openCity(event, 'computer')">

<img src="images/Desktop.jpg" width="100%" height="100%">


      </div>



      <div class="tablinks" onclick="openCity(event, 'laptop')">
      	
      	<img src="images/laptop.jpg" width="100%" height="100%">
      </div>

    </div>


    <div id="computer" class="tabcont">
<p>computer</p>

    </div>

    <div id="laptop" class="tabcont">
<p>laptop</p>

    </div>


	</div>



	<script>

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcont");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
	</script>
	
</body>
</html>