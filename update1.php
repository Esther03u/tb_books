<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ฟอร์มแก้ไขข้อมูลสมาชิก</h3>
    <?php
        include "connect1.php";
        $id=$_GET['id'];
        $sql="select * from member where id=$id";
        $result=mysqli_query($link,$sql);
        $row=mysqli_fetch_array($result);
        $id=$row['id'];
        $FullName=$row['FullName'];
        $Sex=$row['Sex'];
        $Address=$row['Address'];
        $SexM="";
        $SexF="";
        if($Sex=="M"){
            $SexM="checked";
        }else{
            $SexF="checked";
        }
        mysqli_close($link);
    ?>
    <form method="POST" action="update2.php">
        ชื่อ นามสกุล :<input type="text" name="FullName" required
        value="<?=$FullName?>"> <br/>
        เพศ :
        <input type="radio" name="Sex" value="M" required <?=$SexM?> >ชาย
        <input type="radio" name="Sex" value="F" required <?=$SexF?> >หญิง <br/>
        ที่อยู่ : <br/>
        <textarea name="Address" rows="5" cols="40"
        required><?=$Address?></textarea><br/>
        <input type="hidden" name="id" value="<?=$id?>">
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>