<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::สมาชิก::</title>
</head>
<body>
    <h2>::เเสดงข้อมูลสมาชิก::</h2>
    <p><a href="insert1.php"> เพิ่มข้อมูลสมาชิก </a></p>
    <table border="1">
        <tr bgcolor="#D3D3D3">
            <td>ลำดับ</td>
            <td>ชื่อ - สกุล</td>
            <td>เพศ</td>
            <td>ที่อยู่</td>
            <td>แก้ไข</td>
            <td>ลบ</td>
        </tr>
        <?php
            include "connect1.php";
            $sql="select * from member";
            $result=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($result)){
                $id = $row['id'];
                $FullName = $row['FullName'];   // ชื่อต้องตรงกับ column ในตาราง
                $Sex = $row['Sex'];
                $Address = $row['Address'];

                if($Sex=="M"){
                    $sexshow= "ชาย";
                }else{
                    $sexshow= "หญิง";
                }

                echo "<tr>
                <td>$id</td>
                <td>$FullName</td>
                <td>$sexshow</td>
                <td>$Address</td>
                <td><a href=\"update1.php?id=$id\">แก้ไข</a></td>
                <td><a href=\"delete1.php?id=$id\" onclick=\"return confirm('คุณต้องการลบ $FullName ออกจากระบบหรือไม่')\">ลบ</a></td>
                </tr>";
            }
            mysqli_close($link);
        ?>
    </table>
</body>
</html>