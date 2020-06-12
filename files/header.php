<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="css/hdr.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

.heder{
	background-color: white;
}
.heder_inner{
	overflow: hidden;

}
.heder_inner,.menu_inner{
	width: 80%;
	margin: auto;

	}

.menu_inner{
background-color: transparent;
position: sticky;
}
.menu_inner a{
	font-weight: bold;
	padding: 10px 40px;
	color: white;
	cursor: pointer;
	float: left;
}

.menu_inner a:hover{
	background-color:  #b2babb ;
	color: black;
}


.menu_cont{
	background-color:  #283747 ;
	overflow: hidden;
	top: 0;
	z-index: 99;
}
.logo_cont,.hdr_cont,.btn_cont{
	float: left;
	width: 33.3%;
	background-color: transparent;
	}
	.logo_cont{
		padding: 33px;
	}
	.hdr_cont{
		padding: 20px;
	}
	.btn_cont{
		padding: 18px;
		padding-right: 30px;
	}
	.nod{
	float: left;
	width: 50%;
}
.btn_cont{
	text-align: right;
}

.btn_cont button{
	background-color:  #e74c3c ;
	border: none;
	padding: 15px;
	border-radius: 25px;
	color: white;
	font-weight: bold;
}
#usrbtn{
	background-color: #3498db ;
}
.menudi,.mob_menu{
	display: none;
}
.rais_form{
	width: 100%;
	height: 100%;
	background-color: rgb(0, 0, 0);
	background-color: rgba(0, 0, 0, 0.8);
	position: fixed;
	z-index: 99;
	top: 0;
	display: none;
	z-index: 999;
}
.rais_in{
	width: 60%;
	height: 500px;
	
	margin: auto;
	margin-top: 5%;
	background-color:  #f2f3f4 ;
}
.rais_img,.rais_inp{
	float: left;
	width: 60%;
	background-color: re;
	height: 100%;
}
.rais_inp{

width: 40%;
position: relative;
	}
	.rais_inp h2{
		font-weight: bold;
       
       margin-left: 10px;
	}
	.input_rais input{
		width: 100%;
		padding:5px;
       border: none;
       background-color: transparent;
       border-bottom: 2px solid  #d5dbdb ;
       transition: .5s;

	}
	.input_rais input:focus{
		border-bottom: 2px solid #85929e  ;
		transform: scale(1);
	}
	.input_rais{
		margin-top: 10%;
	}
	#logbtn{
		width: 100%;
		margin-top: 5px;
		padding: 5px;
		border-radius: 25px;
		outline: none;
		background-color:  #2ecc71 ;
		color: white;
		font-weight: bold;
	}
	#forpass{
		color: blue;
		font-size: 15px;
		padding: 10px 3px;
		cursor: pointer;
	}
	#crtnew{
		position: absolute;
		bottom: 10%;
		width: 100%;
		left: 0;
		padding: 5px;
		border-radius: 25px;
		outline: none;
		background-color:  #5499c7 ;
		color: white;
		font-weight: bold;
	}
	#dontha{
		position: absolute;
		bottom: 25%;
		width: 100%;
		text-align: center;
		font-weight: bold;
		color: gray;
	}
	#dontha:after,#dontha:before{
		content: '-------------';
		font-weight: bold;
	}
	.signu form label{
		margin-top: 5%;
	}

	.signu form input{
		width: 100%;
		padding: 0 5px;
		border: none;
		background-color: transparent;
		border-bottom: 2px solid   #d5dbdb;
		transition: .2s;
	}

	.signu form input:focus{
		border-bottom: 2px solid  #aeb6bf ;
		transform: scale(1);
	}
	.signu form button{
		width: 100%;
		margin-top: 10%;
		padding: 5px;
		background-color:  #e74c3c ;
		color: white;
		font-weight: bold;
		border-radius: 50px;
	}
	#chekb{
		width: auto;
		padding: 5px;
		margin: 5px;
		cursor: pointer;
	}
	#iacp{
		font-size: 12px;
		user-select: none;
	}
	#h2hdn{
		width: 100%;
		background-color:  #2c3e50 ;
		padding: 5px 0;
		position: relative;
	}
	#h2hdn h2{
		color:  white ;
		font-size: 25px;
		
	}
	#lbak{
		position: absolute;
		right: 5px;
		top: 20%;
		color: white;
		font-weight: bold;
        cursor: pointer;

	}
	#crss{
		position: absolute;
		font-weight: bold;
		color: white;
		font-size: 28px;
		  top: 5%;
		  cursor: pointer;
	}

	.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 44px;
}

#webs{
	animation: blink .9s infinite;
}
@keyframes blink{
	from{
		transform: scale(1);
		background-color: red;

	}
	to{
		transform: scale(1.2);
		color: white;
	}
}

@media screen and (max-width: 600px){

	.sticky + .content {
  padding-top: 31px;
}
	.menu_inner{
		width: 100%;
	}
.menu_inner a{
	display: none;
}
.menudi{
	float: right;
	margin-right: 5px;
    color: white;
    padding: 2px;
    cursor: pointer;
    display: block;
}
.menu_inner a:first-child{
	display: block;
	font-size: 13px;
	padding: 5px;
}
.menu_cont{
position: stati;
	}
.hdr_cont,.btn_cont{
		display: none;
	}
	.heder_inner{
		width: 100%;
	}
	.logo_cont{
		width: 100%;
		margin-left: 0;
		float: none;
		}
.accs{
	background-color: #1c2833;
	width: 100%;
	height: 50p;
	overflow: hidden;
	display: none;
}
.accs img{
	border-radius: 50px;
}
#sgni,#sgnu{
	font-weight: bold;
	background-color:  #388e3c;
	padding: 5px;
	color: white;
	border-radius: 25px;
	font-size: 12px;
}
#sgnu{
	
	background-color:  #03a9f4 ;
}
#rsetic{
	background-color:  #e74c3c;
	font-weight: bold;
	border-radius: 25px;
}

.mob_menu{
	    display: block;
		width: 0;
		background-color: rgb(0, 0, 0);
		background-color: rgba(0, 0, 0, 0.9);
		padding: 0px 0;
		position: absolute;
		right: 0;
		z-index: 99;
		transition: ease .5s;
		text-align: center;

		}

.mob_menu a{
display: block;
color: white;
padding: 5px 0;
text-decoration: none;
outline: none;
cursor: pointer;
border: 1px solid black;
font-size: 13px;
}

.rais_in{
	width: 100%;
	margin-top: 20%;
}
.rais_img{
	display: none;
}
.rais_inp{
float: none;
width: 100%;
	}
#crss{
right: 2%;
top: 5%;
}


}
</style>



</head>
<body>

<div class="heder">
	<div class="heder_inner">
    <div class="logo_cont">
    	logo
</div>

<div class="hdr_cont">
   	<div class="nod">
<span>00099999999</span><br>
<span>00099999999</span>
</div>
<div class="nod">
<span>00099999999</span><br>
<span>00099999999</span>
</div>
</div>

<div class="btn_cont">
 <button id="usrbtn" type="button" onclick="document.getElementById('drtclg').style.display='block'"><i class="fa fa-user"></i> Login</button>
<button type="button">Raise a Ticket</button>

</div>

</div>

</div>


<div id="menu_frt" style="z-index: 999">
	<div class="menu_cont" >
	<div class="menu_inner">

<a href="index.php">HOME</a>
<a href="service.php">SERVICE</a>
<a href="sales.php">SALES</a>
<a>SUPPORT</a>
 
<a>BLOG</a>
<a id="webs">WEBSITE</a>


<div class="menudi" id="menuid">
<i class="fa fa-bars" style="transition: 0.5s"></i>
</div>

</div>
</div>



<div class="mob_menu" id="mobvi">
	
<div class="accs">
<img src="" width="50px" height="50px" alt="img">
<div  style="width:100%"><span >sign in</span><span >sign up</span></div>
</div>
<a id="sgni" onclick="document.getElementById('drtclg').style.display='block'">Sign In</a>
<a id="sgnu" onclick="signUp();">Sign Up</a>
<a id="rsetic" onclick="document.getElementById('drtclg').style.display='block'">Raise a Ticket</a>
<a href="service.php?ser=service">SERVICE</a>
<a href="service.php?ser=home">SALES</a>
<a>RENTAL</a>
<a>REACHI US</a>
<a>BLOG</a>

	</div>

</div>
<div class="content"></div>

<div class="rais_form" id="drtclg">
	
<div class="rais_in">
	<span id="crss" onclick="document.getElementById('drtclg').style.display='none'"><i class="fa fa-times"></i></span>
<div class="rais_img">
<img src="images/banner1.jpg" width="100%" height="100%">
</div>


<div class="rais_inp" id="log_in_page">
	<div id="h2hdn"><h2>Login </h2>

</div>

<div class="input_rais">
<label>Usser Name</label>
<input type="text" name="usern" placeholder="enter ussername">

<label style="margin-top:20px">Password</label>
<input type="password" name="usern" placeholder="enter password">

<button id="logbtn" type="submit">Login</button>

<span id="forpass">Forget Password</span>

<div id="dontha">Don't Have Account </div>

<button id="crtnew" onclick="signU();">create new account</button>

</div>

</div>

<div class="rais_inp" id="signup_page" style="display: none">
<div class="signu">
<div id="h2hdn"><h2>Sign Up </h2>
<span id="lbak" onclick="signI();"><i class="fa fa-arrow-left"></i> Login</span>
</div>

<div >
<form>
<label> First Name </label>
<input type="text" name="" value="" placeholder="enter first name" title="enter first name" required>

<label> Last Name </label>
<input type="text" name="" value="" placeholder="enter last name" title="enter last name" required>

<label> Email </label>
<input type="email" name="" value="" placeholder="enter email address" title="enter email" required>

<label> Mobile </label>
<input type="text" name="" value="" placeholder="enter mobile" title="enter mobile number ex:9876400072" required pattern="[0-9]+" maxlength="10">

<input id="chekb" type="checkbox" required><span id="iacp">i accept the above declaration</span>

<button type="submit">Sign Up</button>
</form>
</div>


</div>
</div>

</div>
</div>






	<script>
		window.onscroll = function(){stickY();}
var sticky = document.getElementById('menu_frt').offsetTop;
		function stickY(){
if(window.pageYOffset >= sticky){
document.getElementById('menu_frt').classList.add('sticky');
}else{
	document.getElementById('menu_frt').classList.remove('sticky');
}
		}

function signU(){
 document.getElementById('log_in_page').style.display='none';
document.getElementById('signup_page').style.display='block';
}

function signI(){
 document.getElementById('signup_page').style.display='none';
document.getElementById('log_in_page').style.display='block';
}

function signUp(){
	document.getElementById('drtclg').style.display='block';
 document.getElementById('log_in_page').style.display='none';
document.getElementById('signup_page').style.display='block';
}



$(document).ready(function(){
var mobvi = document.getElementById('mobvi');
$('#menuid').click(function(){
if($('.mob_menu').width()=="0"){
$('.mob_menu').css('width','60%');
if($('.menudi i').hasClass('fa fa-bars')){
	$('.menudi i').removeClass('fa fa-bars')
$('.menudi i').addClass('fa fa-times')
}
}
else{
	$('.mob_menu').css('width','0');
	if($('.menudi i').hasClass('fa fa-times')){
	$('.menudi i').removeClass('fa fa-times')
$('.menudi i').addClass('fa fa-bars')
}
}
})
})



</script>


<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
</body>
</html>