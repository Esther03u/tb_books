<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>ฟอร์มรับข้อมูลสมาชิก</h3>
    <form method="POST" action="insert2.php">
    ชื่อ นามสกุล: <input type="text" name="FullName" required> <br/>
    เพศ:
    <input type="radio" name="Sex" value="M" required>ชาย
    <input type="radio" name="Sex" value="F" required>หญิง <br/>
    ที่อยู่: <br/>
    <textarea name="Address" rows="5" cols="40" required></textarea><br/>
    <input type="submit" value="Submit">
    <input type="reset" value="Reset">
</body>
</html>