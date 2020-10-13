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
	$total_hamburgers=2*4.95;
	$milkshake=1.95;
	$cola     =0.85;
	$total    =$total_hamburgers+$milkshake+$cola;
	
	$tax_rate =$total*7.5/100;
	$pre_tax_rate=$total*16/100;
	$total_price=$total+$pre_tax_rate+$tax_rate;
	echo"<tr>";
	echo "<td>Hambagers:$hamburgers.$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>milkshake:.$milkshake$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>cola            :$cola$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>Total :$total$</td>";
	echo"</tr>";

	echo"<tr>";
	echo "<td>Post Tax Rate    :$tax_rate$</td>";
	echo"</tr>";
	echo"<tr>";
	echo "<td>Pre-tax  total   :$pre_tax_rate$</td>";
	echo"</tr>";

	echo"<tr>";
	echo "<td>Total Price:$total_price$</td>";
	echo"</tr>";




	echo "<table border=1 cellpadding=20px>
           <thead>
              <tr>
                <th> Name </th>
                <th> Price </th>
                <th> Quantity </th>
                <th> Sub total </th>
              </tr>
           </thead>
           <tbody>
                <tr> 
                  <td> Hamburger </td>
                  <td> $hamburgers </td>
                  <td> 2 </td>
                  <td> $total_hamburgers </td>
                  
                </tr>
                <tr>
                   <td> Chocolate Milkshake </td>
                   <td> $milkshake </td>
                   <td> 1 </td>
                   <td> $milkshake</td>
                </tr>
                <tr> 
                   <td> Cola </td>
                   <td> $cola </td>
                   <td> 1 </td>
                   <td> $cola </td>
                 </tr>
                 <tr>
                    <td colspan=2> Total </td>
                    <td>4</td>
                    <td> $total$ </td>
                 </tr>
                 <tr>
                    <td colspan=3> Pre Tax Rate </td>
                    <td> $tax_rate </td>
                 </tr>
                 < tr>
                    <td colspan=3> Post Tax Rate </td>
                    <td> $pre_tax_rate </td>
                  </tr>
                  <tr>
                     <td colspan=3> Total Price </td>
                     <td> $total_price </td>
                  </tr>
             </tbody>
      </table>" ;




  




	

	

	




	



?>



 </table>
	


</div>



<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>