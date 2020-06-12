<?php include "files/connection.php" ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>computer-repair</title>
	<link rel="icon" href="images/banner1.jpg" sizes="16x16">

<link rel="stylesheet" type="text/css" href="css/index.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.imgcol{
max-height: 300px;
height: auto;
overflow: hidden;
}
.imgcol img{
box-shadow: 0 0 6px 3px gray;
} 
ul{
	-webkit-column-count: 3;
	-moz-column-count: 3;
	column-count: 3;
	background-color:  #ebdef0 ;
	margin-top: 10px;
	box-shadow: 0 0 6px 3px gray;
}

</style>

</head>
<body>

	<?php include "files/header.php" ?>

	<div class="container">
<div class="row">

<div class="col-sm-12 imgcol">
<img src="images/banner1.jpg" width="100%" height="100%">
</div>

<div class="col-sm-12" style="margin-top:10px">
<ul>

	<?php $sql = mysqli_query($conn,"SELECT * FROM laptop");
while($row = mysqli_fetch_assoc($sql)){ ?>
<li><?php echo $row['service'] ?></li>

<?php } ?>
<li>2</li>


<li>one</li>
<li>2</li>
<li>3</li>

<li>one</li>
<li>2</li>
<li>3</li>

</ul>
	</div>

</div>
	</div>
	
</body>
</html>