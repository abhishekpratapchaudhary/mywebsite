<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title></title>
	<link rel="stylesheet" href="">
<style>
	body{
		margin: 0;
		
	}
	.ser_cont{
		padding-bottom: 40px;
        padding: 20px 0;
		width: 100%;
		overflow: hidden;
		margin-top: 10px;
		margin-bottom: 200px;
	}
	.boxx{
width: 23%;
height: 350px;
float: left;
margin: 1%;
overflow: hidden;
position: relative;
border: 1px solid  #e5e7e9 ;
transition: .5s;
}

.boxx:hover .box_img,.boxx:hover .box_nm{
	transform: rotate3d(1,1,0, -45deg);
	
}
.box_img{
width: 100%;
height: 60%;
border-radius: 25px 0 25px 0;
overflow: hidden;
box-shadow: 0 0 8px gray;
transition: .5s;
}
.box_nm{
width: 100%;
text-align: center;
height: 20%;
font-size: 25px;
color:  #212f3d ;
font-weight: bold;
font-style: italic;
text-decoration: underline;
transition: .5s;
}
.box_rm_con{
	display: block;
	position: relative;
	bottom: 0;
	left:37.5% ;
	width: 25%;
	border: 1px solid  #bdc3c7 ;
	font-size: 13px;
	color:#212f3d ;
	font-weight: bold;
    overflow: hidden;
    height: 40px;

}
.colr{
	background-color: #80c5de  ;
	width: 100%;
	height: 0%;
	position: absolute;
	bottom: 0;
transition: height .4s ease-in-out;
}
.box_rm{
	z-index: 9;
	padding: 10px 5px;
	position: absolute;
	top: 0;
}


.box_rm_con:hover .colr{
height: 100%;
}
.box_rm_con:hover .box_rm{
	color: white;
}
.box_rm_con{
	border-radius: 25px;
}

@media screen and (max-width: 500px){
	.boxx{
		width: 46%;
	}
	.box_nm{
font-size: 20px;
	}
	.box_rm_con{
		width: 60%;
		left: 30%;
		}
	
}


</style>
</head>
<body>
	
<?php include "files/header.php" ?>



<div class="ser_cont">

<a href="computer-repair.php">
	<div class="boxx">
		
<div class="box_img"><img src="images/Desktop.jpg" width="100%" height="100%"></div>
<div class="box_nm">Desktop Repair</div>

<div class="box_rm_con">
<div class="colr"></div>
<div class="box_rm">read more...</div>
</div>


	</div></a>

<a href="laptop-repair.php">
<div class="boxx">
<div class="box_img"><img src="images/laptop.jpg" width="100%" height="100%"></div>
<div class="box_nm">laptop Repair</div>
<div class="box_rm_con">
<div class="colr"></div>
<div class="box_rm">read more...</div>
</div>
	</div></a>

<a href="printer-repair.php">
	<div class="boxx">
<div class="box_img"><img src="images/printer.jpg" width="100%" height="100%"></div>
<div class="box_nm">Printer Repair</div>
<div class="box_rm_con">
<div class="colr"></div>
<div class="box_rm">read more...</div>
</div>
	</div></a>

	<a href="computer-repair.php">
	<div class="boxx">
<div class="box_img"><img src="images/poster.jpeg" width="100%" height="100%"></div>
<div class="box_nm">Desktop Repair</div>
<div class="box_rm_con">
<div class="colr"></div>
<div class="box_rm">read more...</div>
</div>
	</div></a>

	
	</div>





<?php include "files/footer.php" ?>
	
</body>
</html>