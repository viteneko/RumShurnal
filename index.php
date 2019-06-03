<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div>
		<h1>Школьный журнал</h1>
	</div>
	<div class="row">
		<h4 class="col-2">Фамилия</h4>
		<h4 class="col-2">Имя</h4>
		<h4 class="col-2">19 ноября</h4>
		<h4 class="col-2">20 ноября</h4>
		<h4 class="col-2">21 ноября</h4>
		<h4 class="col-2"></h4>
	</div>
	<div class="row">
			<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'daiaana_pn_09');
	$query = mysqli_query($connect, 'SELECT * FROM school');
	for($i=0; $i < 8; $i++){

	 $row = $query->fetch_assoc(); 
	 ?>
		<h4 class="col-2"><a href=""><?php echo $row['surname']; ?></a></h4>
		<h4 class="col-2"><a href=""><?php echo $row['name']; ?></a></h4>
		<h4 class="col-2"><a href=""><?php echo $row['mark1']; ?></a></h4>
		<h4 class="col-2"><a href=""><?php echo $row['mark2']; ?></a></h4>
		<h4 class="col-2"><a href=""><?php echo $row['mark3']; ?></a></h4>
		<h4 class="col-2"><a href=""></a></h4>
		<?php
			}
		?>
	</div>
</body>
</html>