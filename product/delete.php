<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
// database connection will be here
// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$product = new Product($db);
// read products will be here
// query products

$result = $product->delete();
echo $result;


?>

<form action="http://localhost/leerjaar%202/periode%201/php/opdracht3/product/delete.php" method="post">
    <input type="number" name="ID" id="ID" placeholder="ID" required>
    <input type="submit" value="Verzenden">
</form>