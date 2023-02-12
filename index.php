<?php
include_once "config/init.php";
$conn=new Database();


//print_r($conn);
$job=new Jobs('My Job Class Title');



$template=new Template('Template/homepage.php');
$template->pagetitle=$job->getJobTitle();
$template->alljobs=$job->getJobTitle();

 echo $template;


 
 

?>
