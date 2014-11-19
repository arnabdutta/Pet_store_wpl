<?php

include('header.php');
include('db/config.php');

?>



<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Shopping Cart</title>

<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div align="center">

<h2>SHOPPING CART</h2>

<table width="70%" bordercolor="#999999" class="web" border="1" cellspacing="1" style="border:#666 solid 1px; margin-bottom:20px; margin-left:0px;font-size:12px;font-family:Verdana, Geneva, sans-serif; margin-top:20px;">
<thead>
<tr bgcolor="orange" height="30"  style="color:black;  font-weight:bold; text-align:left;">
	<td>No.</td>
    <td class="web" width="100" align="center">customer_id</td>
    <td class="web" width="400" align="center">pet_type_id</td>
    <td class="web" width="240" align="center">Quantity</td>
    <td class="web" width="240" align="center">amount</td>


    <?php
	include('db/config.php');
	$q="select * from cart;";
	$rs = mysqli_query($conn,$q);
	$count=0;
	$ihap=0;
	$num=mysql_num_rows($rs);

	if (mysqli_num_rows($rs) > 0) {
		
	    while($row = mysqli_fetch_assoc($rs)) {
   	?>
  </tr>


   <tr  class="trsss"  align="center" height="25">
   <td><?php $count++; echo $count; ?></td>
      <td bgcolor="" width="100">
	<?php

	 echo $row["cust_id"]; ?>
    </td>
    <td  width="400"><?php
	 echo $row["pet_type_id"];?></td>
    <td width="180">
    <?php
 echo $row["qty"];?>
    </td>
    <td><?php  echo $row["amt"]; ?></td>



    </tr>

   <?php
} }?>
      </thead>
  </table>

<br />
<br />
<br />
<br />

<a href="index.php"> Go to Home </a>


</div>

</body>
</html>