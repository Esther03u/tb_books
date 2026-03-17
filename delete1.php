<?php
    $id=$_GET['id'];
    include "connect1.php";
    $sql="delete from member where id=$id";
    $result=mysqli_query($link,$sql);
    if($result){
        header("location:index.php");
    }
?>