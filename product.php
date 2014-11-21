
<?php

include("header.php");


$servername = "localhost";
$username = "root";
$password = "welcome1";
$dbname = "wpl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
    echo "Connected";

$sql = "SELECT pettype_id,typename,stock,price FROM pet";
$result = $conn->query($sql);
$out='';

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $out.="<div>id: " . $row["pettype_id"]. "<br />".$row["typename"]."<br />Price:".$row["price"]."<br />Stock :".$row["stock"]."<br /><input type='button' value='Add to cart' name='". $row["pettype_id"]."'  /><br /><br /></div>";
    }
} 
$conn->close();




?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/product_style.css">
<title>Products Page</title>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>

</script>  

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    var $prod= $('.product_main');
      $prod.jScrollPane();
  });
</script>  


</head>

<body>
<div id="product_page">
  
    <form class="category_filter" >
       <fieldset><legend>Pet Type</legend>
        <input type="checkbox" name="dogs" value="dogs">Dogs<br />
        <input type="checkbox" name="cats" value="cats">Cats<br />
        <input type="checkbox" name="fish" value="fish">Fish<br />
        <input type="checkbox" name="fish" value="fish">Reptiles<br />
        </fieldset>
       
      </form>
    
    <form class="price_filter" >
       <fieldset><legend>Price Range</legend>
        <input type="checkbox" name="0-25" value="25">$0-$25<br />
        <input type="checkbox" name="25-50" value="50">$25-$50<br />
        <input type="checkbox" name="51-75" value="75">$50-$75<br />
        <input type="checkbox" name="75-100" value="100">$75-$100<br />
        </fieldset>
       
      </form>
    



</div>
<div class="product_main">
<?php echo $out; ?>
</div>
</body>
</html>
