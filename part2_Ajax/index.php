<?php 
require '../DB/db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Part2 - Ajax</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.loaitin').click(function(){
				var id = $(this).attr("dieumy");
				$.get("handle.php",{idLT:id},function(data){
					 $('.result').html(data);
				})
			})
		})
	</script>
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
						<div class="loaitin" dieumy="<?php echo $item['idLT'] ?>"><?php echo $item['Ten'] ?><br>
						</div>
					<?php } ?>
				</td>
				<td class="result">
					
				</td>
				<td>
					<iframe width="560" height="315" src="https://www.youtube.com/embed/SVgkNW2cENQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</td>
			</tr>
		</tbody>
	</table>
	</div>
	
</body>
</html>