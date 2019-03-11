<?php 
require "../DB/db.php";
$idLT = $_GET['idLT'];
$obj = "SELECT * FROM tin WHERE idLT=$idLT";
$loaitin = mysql_query($obj);
while($item = mysql_fetch_array($loaitin)){
?>
	<div class="infodetail">
		<div class="name" style="font-weight: bold;"><?php echo $item['TieuDe'] ?></div>
		<img src="../upload/tintuc/<?php echo $item['urlHinh'] ?>" alt="" style="width: 400px;height: 300px"><br>
		<div class="tomtat"><?php echo $item['TomTat'] ?></div>
	</div>
<?php } ?>