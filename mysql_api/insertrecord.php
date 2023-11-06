<?php

include("dbconnection.php");

$con = dbconnection();

if(isset($_POST['product_name']))
{
    $product_name = $_POST['product_name'];
}
else return;

if(isset($_POST['product_discription']))
{
    $product_discription = $_POST['product_discription'];
}
else return;

if(isset($_POST['product_unitprice']))
{
    $product_unitprice = $_POST['product_unitprice'];
}
else return;

if(isset($_POST['product_totalprice']))
{
    $product_totalprice = $_POST['product_totalprice'];
}
else return;

if(isset($_POST['product_quantity']))
{
    $product_quantity = $_POST['product_quantity'];
}
else return;

$query = "INSERT INTO `productlsit`(`product_name`, `product_discription`, `product_unitprice`, `product_totalprice`, `product_quantity`)
 VALUES ('$product_name', '$product_discription', '$product_unitprice', '$product_totalprice', '$product_quantity')";

 $exe = mysqli_query($con, $query);

 $arr=[];

 if($exe){
    $arr["success"] = "true";
 }else{
    $arr["success"] = "false";
 }

 print(json_encode($arr));





?>