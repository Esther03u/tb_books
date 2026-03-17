<?php
    include "connect1.php";
    $id=$_POST['id'];
    $FullName=$_POST['FullName'];
    $Sex=$_POST['Sex'];
    $Address=$_POST['Address'];
    $sql="update member set
        FullName='$FullName',
        Sex='$Sex',
        Address='$Address'
        where id=$id";
    $result=mysqli_query($link,$sql);
    if($result){
        echo "แก้ไขข้อมูลสมาชิกเรียบร้อยเเล้ว <br/>";
        echo "<a href='index.php'>แสดงข้อมูลสมาชิก</a>";
    }
    mysqli_close($link);
?>