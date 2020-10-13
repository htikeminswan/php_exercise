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
		.polution{
			text-align: justify;
		}
		.city{
			text-align: justify;
		}
		
	</style>
</head>
<body>
<div class="container text-center my-5">
 <table class=" table table-bordered text-center">
 	<?php 
 			
 			$city_and_polution=array("New York,NY"=>"(8,175,133 people)","Los Angeles ,CA"=>"(3,792,621)","Chicago,IL"=>"(2,695,598)","Houston,TX"=>"(2,100,263)","Philadelpha,PA"=>"(1,526,006)","Phoenix,AZ"=>"(1,445,632)","San Antonio,TX"=>"(1,327,407)","San Diego,CA"=>"(1,307,402)","Dallas,TX"=>"(1,197,816)","San Joe,CA"=>"(,945,942)");
 			

 			 echo"<ul>";
 			foreach(
 			$city_and_polution as $city => $population) {
 				echo"<li class='justify'>";
 				echo"$city   $population";
 				echo"</li>";
 			}
 			 echo "</ul>";
 			 echo"<br><hr>";
 			 echo"ordered by polution<br>";
 			
 			arsort($city_and_polution);
 			echo "<ul>";
 			foreach($city_and_polution as $city=>$polution){
 				echo"<li class='polution'>";
 				echo "$polution";
 				echo"</li>";

 			}
 			echo "</ul>";
 			echo"<br><hr>";

 			// ORDERED BY CITY NAME;

 			echo"Order by city name";
 			
 			echo "<ul>";
 			ksort($city_and_polution);
 			foreach($city_and_polution as $city=>$polutin){
 				echo"<li class='city'>";
 				echo "$city";
 				echo"</li>";

 			}
 			echo "</ul>";
 			echo"<br><hr>";



 	?>

 </table>
</div>

<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>