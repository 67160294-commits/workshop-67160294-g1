<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="css/bootstrap.css">

    <style>
        body{
            margin:0;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:linear-gradient(90deg,#5d1ebbff,#c31e1eff);
            font-family:Arial, sans-serif;
        }

        .register-box{
            width:420px;
            background:white;
            padding:30px;
            border-radius:20px;
            box-shadow:0 10px 25px rgba(0,0,0,0.2);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
            color:#333;
        }

        label{
            font-weight:bold;
            margin-top:10px;
        }

        input, textarea, select{
            width:100%;
            padding:8px;
            margin-top:5px;
            border-radius:8px;
            border:1px solid #ccc;
        }

        .gender-group, .music-group{
            display:flex;
            gap:10px;
            margin-top:5px;
        }

        .btn-group{
            display:flex;
            gap:15px;
            margin-top:20px;
        }

        button{
            flex:1;
            padding:12px;
            border:none;
            border-radius:25px;
            font-weight:bold;
            color:white;
            cursor:pointer;
        }

        .save-btn{
            background:linear-gradient(90deg,#ffb75e,#ed5565);
        }

        .reset-btn{
            background:linear-gradient(90deg,#999,#666);
        }
    </style>
</head>

<body>

<div class="register-box">
    <h2>ฟอร์มสมัครสมาชิก</h2>

    <form>
        <label>ชื่อ</label>
        <input type="text" required>

        <label>สกุล</label>
        <input type="text" required>

        <label>วันเดือนปีเกิด</label>
        <input type="date" required>

        <label>เพศ</label>
        <div class="gender-group">
            <label><input type="radio" name="gender"> ชาย</label>
            <label><input type="radio" name="gender"> หญิง</label>
            <label><input type="radio" name="gender"> อื่น ๆ</label>
        </div>

        <label>รูปโปรไฟล์</label>
        <input type="file" accept="image/*">

        <label>ที่อยู่</label>
        <textarea rows="3"></textarea>

        <label>สีที่ชอบ</label>
        <input type="color">

        <label>แนวเพลงที่ชอบ</label>
        <div class="music-group">
            <label><input type="checkbox"> Pop</label>
            <label><input type="checkbox"> Rock</label>
            <label><input type="checkbox"> Jazz</label>
            <label><input type="checkbox"> Hip-hop</label>
        </div>

        <div style="margin-top:10px;">
            <label>
                <input type="checkbox" required>
                ยินยอมให้เก็บข้อมูล
            </label>
        </div>

        <div class="btn-group">
            <button type="reset" class="reset-btn">Reset</button>
            <button type="submit" class="save-btn">บันทึก</button>
        </div>
    </form>
</div>

</body>
</html>
