 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
	.soft{
		width: 100%;
        }
        .tab{
        	width: 100%;
        	margin-top: 10px;
        	overflow: hidden;
         }
	.tablinks{
		float: left;
		cursor: pointer;
		padding: 10px;
		background-color: #e74c3c;
        border-radius: 25px;
        color: white;
        
	   }
	.tablinks:not(:first-child){
    margin-left: 100px;
	}
	.tabcont:after{
		content: "";
	    background-color: #f2f3f4;
		font-size: 20px;
		width: 20px;
		height: 20px;
		
		display:table;
		clear: both;
		position: absolute;
       
      margin-left: 4%;
      top: -10px;
      transform: rotate(45deg);
      border-left: 1px solid  #d5dbdb ;
      border-top: 1px solid  #d5dbdb ;
	}
	#laptop:after{
    margin-left: 25%;
	}
	.tabcont{
		margin-top: 13px;
		padding: 10px;
		position: relative;
		background-color: #f2f3f4 ;
		border: 1px solid   #d5dbdb  ;
	}
	.active{
		background-color: gray;
	}
	.gg{
		width: 300px;
		height: 300px;
		background-color: gray;
		display: none;
	}
	p:hover .gg{
 display: block;

	}

</style>
 </head>
 <body>
 
<?php include "files/header.php" ?>

<div class="container">
<div class="row">

<div class="soft">

<div class="tab">
      
      <div id="defaultOpen" class="tablinks" onclick="openCity(event, 'computer')">
PAID SOFTWARE
</div>



      <div class="tablinks" onclick="openCity(event, 'laptop')">
      	FREE SOFTWARE
      </div>
 </div>


    <div id="computer" class="tabcont">
<p id="com" onclick="document.getElementById('iu').style.display ='block'">
	<img src="images/banner1.jpg" width="150px" height="150px">

</p>
<button>download</button>
</div>

    <div id="laptop" class="tabcont">
<p>laptop</p>

    </div>

    
</div>
</div>
<div class="gg" id="iu">Description</div>
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