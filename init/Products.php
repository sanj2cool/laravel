<?php
class Products {
    protected $dbh;


    public function __construct(){

        $this->dbh=new Database;
        
    }

    public function getAllCategories(){
        $this->dbh->query('select * from categories');
        $result=$this->dbh->resultSet();
        return $result;

    }

    public function create($data){
           $this->dbh->query("INSERT INTO `products` (product_title,product_description,product_img,product_cat) VALUES (:product_title,:product_description,:product_img,:product_cat)");
            $this->dbh->bind(':product_title',$data['product_title']);
            $this->dbh->bind(':product_description',$data['product_description']);
            $this->dbh->bind(':product_img',$data['product_img']);
            $this->dbh->bind(':product_cat',$data['product_cat']);
            //$this->dbh->execute();
    }

    
    public function getSingleProduct($productId){
        $this->dbh->query('SELECT * from `products` WHERE product_id=:product_id');
        $this->dbh->bind(':product_id',$productId);
        $result=$this->dbh->single();
        return $result;
    }

}


