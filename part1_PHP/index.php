<?php 
require '../DB/db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Part1 - PHP thuần</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<table class="table table-hover" cellpadding="0" border="1">
		<thead>
			<tr>
				<th>Loại tin</th>
				<th>Tin</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					<?php 
						$obj = "SELECT * FROM loaitin";
						$loaitin = mysql_query($obj);
						while ($item = mysql_fetch_array($loaitin)) 
						{
					?>
						<a href="index.php?idLT=<?php echo $item['idLT'] ?>"><?php echo $item['Ten'] ?></a><br>
					<?php } ?>
				</td>
				<td>
					<?php
					if(isset($_GET['idLT']))
					{
						$idLT = $_GET['idLT']; 
						//settype($idLT, "int");
						$obj = "SELECT * FROM tin WHERE idLT=$idLT";
					}else {
						$idLT = 1; 
						//settype($idLT, "int");
						$obj = "SELECT * FROM tin WHERE idLT=$idLT";
					}
						$loaitin = mysql_query($obj);
						while($item = mysql_fetch_array($loaitin)){
					?>
					<div class="infodetail">
						<div class="name" style="font-weight: bold;"><?php echo $item['TieuDe'] ?></div>
						<img src="../upload/tintuc/<?php echo $item['urlHinh'] ?>" alt="" style="width: 400px;height: 300px"><br>
						<div class="tomtat"><?php echo $item['TomTat'] ?></div>

					</div>
					<?php } ?>
					<td><iframe width="560" height="315" src="https://www.youtube.com/embed/SVgkNW2cENQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
				</td>
			</tr>
		</tbody>
	</table>
	</div>
	
</body>
</html>