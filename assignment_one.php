<!DOCTYPE html>
<html>
<head>
	<title>Assignment One</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		.justify{
			text-align: justify;
		}
	</style>
</head>
<body>
<div class="container text-center my-5">
 <table class=" table table-bordered justify">
 	<?php 

	$hamburgers=4.95;
	$two_hamburgers=2*4.95;
	$milkshake=1.95;
	$cola     =0.85;
	$total    =$hamburgers+$milkshake+$cola;
	$tax_rate =$total*7.5/100;
	$pre_tax_tix=$tax_rate *16/100;

	echo"<tr>";
	echo "<td>Hambagers:$two_hamburgers.$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>milkshake:.$milkshake$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>cola            :$cola$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>Total   Cost:$total$</td>";
	echo"</tr>";

	echo"<tr>";
	echo "<td>Post Tax Rate    :$tax_rate$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>Pre-tax  total   :$pre_tax_tix$</td>";
	echo"</tr>";


	

	

	




	



?>



 </table>
	


</div>



<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>