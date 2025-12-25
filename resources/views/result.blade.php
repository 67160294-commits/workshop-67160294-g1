<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #c988e9, #a1d7e7);
            min-height: 100vh;
        }
        .result-box {
            background: white;
            border-radius: 15px;
            padding: 30px;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .img-preview {
            max-width: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="result-box shadow">
        <h2 class="text-primary mb-4 text-center">ผลลัพธ์การส่งข้อมูล</h2>

        <table class="table table-bordered align-middle">
            <tr>
                <th width="30%">ชื่อ-นามสกุล</th>
                <td>{{ $data['fname'] }} {{ $data['lname'] }}</td>
            </tr>
            <tr>
                <th>วันเกิด</th>
                <td>{{ $data['birthdate'] }}</td>
            </tr>
            <tr>
                <th>เพศ</th>
                <td>{{ $data['gender'] }}</td>
            </tr>
            <tr>
                <th>ที่อยู่</th>
                <td>{{ $data['address'] }}</td>
            </tr>
            <tr>
                <th>สีที่ชอบ</th>
                <td>
    <div style="
        width: 60px;
        height: 30px;
        background-color: {{ $data['color'] }};
        border: 1px solid #000;
        border-radius: 5px;
        display: block; 
    "></div>
</td>
            </tr>
           <tr>
    <th>รูปภาพ</th>
    <td>
        @if(isset($data['photo']))
            <img src="{{ asset('img/' . $data['photo']) }}"
                 alt="Uploaded Photo"
                 style="max-width: 250px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.2);">
        @else
            <span class="text-muted">ไม่ได้อัปโหลดรูปภาพ</span>
        @endif
    </td>
</tr>

        </table>

        <div class="text-center mt-4">
            <a href="{{ route('form.index') }}" class="btn btn-primary px-4">กลับไปหน้าฟอร์ม</a>
        </div>
    </div>
</div>
</body>
</html>
