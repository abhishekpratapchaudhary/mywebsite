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
table{
	width: 100%;
	margin-top: 10px;
background-color: #d6eaf8;
box-shadow: 0 0 6px 3px gray;

}
table,table tr th,table tr td {
	border: 1px solid   #85c1e9   ;
padding: 15px;
}
table tr th:first-child{
	width: 30%;
	padding: 25px;
}
table tr th:last-child{
	width: 70%;
	padding: 25px;
}

@media screen and (max-width: 500px){
	.container{
		width: 100%;
		margin-left: 0;
		margin: 0;
	}
.imgcol{
	width: 100%;
	margin-left:1px ;
	
}
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

<div class="col-sm-12">
<table>
<tr>
	<th>Services</th>
	<th>Description</th>
</tr>
<?php $sql = mysqli_query($conn,"SELECT * FROM computer");
while($row = mysqli_fetch_assoc($sql)){ ?>
<tr>
	<td><?php echo $row['service']; ?></td>
	<td><?php echo $row['description']; ?></td>
	</tr>
<?php } ?>
</table>
	</div>

</div>
	</div>
	
</body>
</html>