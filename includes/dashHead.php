<?php
include_once 'headerInside.php';
if(isset($_SESSION['uid'])===FALSE){
    header("Location: ../index.php");
}
?>