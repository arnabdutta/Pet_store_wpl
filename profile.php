<?php
include('header.php');
include('db/config.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Account Summary</title>
</head>

<body>

<div style="width:70%; margin-left:auto; margin-right:auto;">


<?php
include('db/config.php');

$cust_id = 9001;

  $query1 = "select * from customer WHERE customer_id=$cust_id;";
$get=mysqli_query($conn,$query1);
$edit=mysqli_fetch_assoc($get);



 ?>


<form action="" name="frm" method="post">
<table width="940" border="0" cellspacing="3" style="font-size:13px; font-weight:bold; margin-left:10px; text-align:right; margin-top:10px;font-family:Verdana, Geneva, sans-serif;">
<tr height="40">
<td>First Name</td>
<td>:</td>
<td align="left"><input style="width:250px;padding:4px;" type="text" name="book_id" value="<?php echo $edit['firstname']; ?>"></td>
<td>Last Name</td>
<td>:</td>
<td colspan="0" align="left"><input type="text" name="booktitle" style="width:250px; padding:4px;" value="<?php echo $edit['lastname']; ?>"></td>
</tr>
<tr>


<td >Address</td><td>:</td>
<td align="left" width="200px"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['addr1']; ?>"></td>

</tr>
<tr>
  <td>
City
  </td>
  <td>:</td>
<td align="left" width="200px"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['city']; ?>"></td>    
  </td>
 <td>
State
  </td>
  <td>:</td>
<td align="left" width="200px"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['state']; ?>"></td>    
  </td>
 <td>
Zip
  </td>
  <td>:</td>
<td align="left" width="200px"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['zip']; ?>"></td>    
  </td>
</tr>

<tr>


<td >Phone</td><td>:</td>
<td align="left" width="200px"><input type="text" style="width:250px;padding:4px;" name="author" value="<?php echo $edit['phone']; ?>"></td>

</tr>
</table>

</div>

<br />
<br />
<br />
<a href="index.php">Home</a>
</body>
</html>