<?php
include("dbconnection.php");
$con = dbconnection();

$query="SELECT `product_id`, `product_name`, `product_discription`, `product_unitprice`, `product_totalprice`, `product_quantity` 
FROM `productlsit`";
$exe = mysqli_query($con, $query);

$arr=[];

while($row=mysqli_fetch_array($exe))
{
    $arr[]=$row;
}
print(json_encode($arr));

 
?>