<?php
    include "connect1.php";
    $FullName=$_POST['FullName'];
    $Sex=$_POST['Sex'];
    $Address=$_POST['Address'];
    $sql="insert into member values(null,'$FullName','$Sex','$Address')";
    $result=mysqli_query($link,$sql);
    if($result){
        echo "เพิ่มข้อมูลเรียบร้อยเเล้ว <br/>";
        echo "<a href='index.php'>แสดงข้อมูลสมาชิก</a>";
    }
    mysqli_close($link);
?>