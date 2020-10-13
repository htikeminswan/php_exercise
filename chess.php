<!DOCTYPE html>
<html>
<head>
	<title>Exercise one</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		td {
			padding:30px;
			
			

		}
		/*td:nth-child(odd){
			background-color: red;
		}*/
		.cyan{
			height:30px;
			width:30px;
			background-color:cyan;

		}
		.white{
			height:30px;
			width:30px;
			background-color:#FFFFFF;
		}
	</style>


</head>
<body>
	
		

<table class=" mx-5 my-5" border="1" >	
<?php 

	for($i=1;$i<=8;$i++)
	{
          echo "<tr>";
          for($j=1;$j<=8;$j++)
		  {
          $k=$i+$j;
          if($k%2==0)
		  {
          echo "<td class='white'></td>";
          }
		  else
		  {
          echo "<td class='cyan'></td>";
          }
          }
          echo "</tr>";
    }
          ?>

</table>



	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>