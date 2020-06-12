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
		
		margin: 0 auto;
	}
	.ser_cont{
		padding-bottom: 40px;
        padding: 20px 0;
		width: 80%;
		overflow: hidden;
		margin-top: 10px;
		margin: auto;
		margin-bottom: 160px;
	}
	.boxx{
width: 46%;
height: 400px;
float: left;
margin: 1%;
overflow: hidden;
position: relative;
border: 1px solid  #e5e7e9 ;
transition: .5s;
background-color:  #d5dbdb ;
}
.boxx:after{
	content: "";
	position: absolute;
	top: 0;
	width: 100%;
  height: 100%;

  background:
    linear-gradient(to right, red 7px, transparent 4px) 0 0,
    linear-gradient(to right, black 0px, transparent 0px) 0 100%,
    linear-gradient(to left, black 0px, transparent 0px) 100% 0,
    linear-gradient(to left, red 7px, transparent 7px) 100% 100%,
    linear-gradient(to bottom, red 7px, transparent 7px) 0 0,
    linear-gradient(to bottom, black 0px, transparent 0px) 100% 0,
    linear-gradient(to top, black 0px, transparent 0px) 0 100%,
    linear-gradient(to top, red 7px, transparent 4px) 100% 100%;

  background-repeat: no-repeat;
  background-size: 60px 60px;
}

.boxx:hover .box_img,.boxx:hover .box_nm{
	transform: scale(1.2);
	color:  #e74c3c ;
}
.box_img{
width: 100%;
height: 90%;
border-radius: 25px 0 25px 0;
overflow: hidden;
box-shadow: 0 0 8px gray;
transition: .5s;
}
.box_nm{
width: 100%;
text-align: center;
height: 10%;
font-size: 25px;
color:  #212f3d ;
font-weight: bold;
font-style: italic;
text-decoration: underline;
transition: .5s;
}
.temun{
	position: absolute;
	top: 50%;
	left: 26%;
	color: red;
    margin: auto;
    font-size: 25px;
    background-color: white;
    padding: 10px;
    border-radius: 25px;
    font-weight: bold;
}







@media screen and (max-width: 500px){
	.boxx{
		width: 46%;
	}
	.box_nm{
font-size: 20px;
	}
	
}


</style>
</head>
<body>
	
<?php include "files/header.php" ?>
<div class="ser_cont">

<a href="">
	<div class="boxx">
		
<div class="box_img"><img src="images/Desktop.jpg" width="100%" height="100%"></div>
<div class="box_nm">Hardware</div>
<div class="temun">Temparary Unavailable</div>
</div></a>

<a href="software.php">
<div class="boxx">
<div class="box_img"><img src="images/laptop.jpg" width="100%" height="100%"></div>
<div class="box_nm">Software</div>

</div></a>



	
	</div>


<?php include "files/footer.php" ?>
	
</body>
</html>