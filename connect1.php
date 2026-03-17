<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $link=mysqli_connect("localhost","root","","cs67");
        if($link){
            echo "เชื่อมต่อฐานข้อมูลสำเร็จ";
            mysqli_set_charset($link,"utf8");
        }else{
            echo "เชื่อมต่อฐานข้อมูลไม่สำเร็จ".mysqli_connect_error();
            exit();
        }
    ?>
</body>
</html>