<?php

include_once "config/init.php";
$conn=new Database();
$product=new Products;
$template=new Template('template/addproduct.php');
if(isset($_GET['post'])){
    $template->product=$product->getSingleProduct($_GET['post']);
}
$template->product_cat=$product->getAllCategories();
echo $template;
