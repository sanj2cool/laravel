<?php 
include_once "config/init.php";
$conn=new Database();
$product=new Products;



if(isset($_POST['submit'])) {


    $target_dir = "uploads/";
    echo $target_file = $target_dir . basename($_FILES["product_img"]["name"]);
    $uploadOk = 1;
    if (move_uploaded_file($_FILES["product_img"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["product_img"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }

    $productData=array();

    $productData['product_title']=$_POST['product_title'];
    $productData['product_description']=$_POST['product_content'];
    $productData['product_cat']=$_POST['cat_id'];
    if(isset($_FILES["product_img"])){
      $productData['product_img']=SITE_URI."/".$target_file;
    }
    
    
    if($product->create($productData)){
      
      //header('location: http://localhost/joblister/addproduct.php');
      //redirect('index.php','testing','test');
    };



}else {
  header('location: http://localhost/joblister/addproduct.php');
}


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";
// print_r($_REQUEST);
// print_r($_FILES);

?>