<?php
include "header.php";
if(isset($_GET['act']) && $_GET['act'] !=""){
    $act =$_GET['act'];
    switch($act){
        case 'addmin':
            include "danhmuc/add.php"; 
            break;
            default:
            include "home.php";
            break;
    }
}
//include "home.php";
include "footer.php";
?>