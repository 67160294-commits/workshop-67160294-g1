<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop HTML - 67160294</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            background: linear-gradient(135deg, #c988e9, #a1d7e7);
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .form-box {
            background: linear-gradient(to bottom, #7b3ff2, #2ec4c6);
            color: #fff;
            border-radius: 20px;
        }
        .form-label {
            font-weight: 500;
        }
        /* ปรับสีพื้นหลัง input ให้ดูง่ายขึ้น */
        .form-control, .form-select {
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container pt-5 pb-5">
    <div class="p-5 shadow-lg form-box">

        <h1 class="mb-4 text-white text-center">67160294-FORM</h1>

        <form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return validateForm();">
            @csrf

            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="fname" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="กรอกชื่อ">
                </div>
                <div class="col-md-6">
                    <label for="lname" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="กรอกนามสกุล">
                </div>
            </div>

            <div class="mb-3">
                <label for="birthdate" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate">
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">เพศ</label>
                <select class="form-select" id="gender" name="gender">
                    <option value="" selected>เลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">รูปภาพ</label>
                <input class="form-control" type="file" id="photo" name="photo">
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="กรอกที่อยู่"></textarea>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color w-100" id="color" name="color" value="#000000">
            </div>

            <div class="mb-3">
                <label class="form-label d-block">แนวเพลงที่ชอบ</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="music[]" value="ร็อก" id="rock">
                    <label class="form-check-label" for="rock">ร็อก</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="music[]" value="เพื่อชีวิต" id="life">
                    <label class="form-check-label" for="life">เพื่อชีวิต</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="music[]" value="ป๊อป" id="pop">
                    <label class="form-check-label" for="pop">ป๊อป</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="music[]" value="อื่นๆ" id="other">
                    <label class="form-check-label" for="other">อื่นๆ</label>
                </div>
            </div>

            <div class="mb-4 form-check">
                <input class="form-check-input" type="checkbox" id="agree" name="agree">
                <label class="form-check-label text-danger fw-bold" for="agree">
                    ยืนยัน
                </label>
            </div>

            <div class="text-center">
                <button type="reset" class="btn btn-secondary me-2 px-4">รีเซ็ต</button>
                <button type="submit" class="btn btn-success px-5">บันทึก</button>
            </div>
        </form>
    </div>
</div>

<script>
    // ฟังก์ชันช่วยจัดการสี Input เมื่อไม่ผ่านเงื่อนไข
    function setInvalid(id) {
        document.getElementById(id).classList.add("is-invalid");
    }

    function setValid(id) {
        document.getElementById(id).classList.remove("is-invalid");
    }

    function validateForm() {
        let valid = true;

        // ดึง Element มาตรวจสอบ
        const fields = ["fname", "lname", "birthdate", "gender", "photo", "address"];

        // ตรวจสอบค่าว่าง (Text, Date, Select, File)
        fields.forEach(id => {
            let el = document.getElementById(id);
            if (el.value.trim() === "") {
                setInvalid(id);
                valid = false;
            } else {
                setValid(id);
            }
        });

        // ตรวจสอบการเลือกแนวเพลง (อย่างน้อย 1 อัน)
        let musicChecked = document.querySelectorAll('input[name="music[]"]:checked').length > 0;
        if (!musicChecked) {
            alert("กรุณาเลือกแนวเพลงที่ชอบอย่างน้อย 1 แนว");
            valid = false;
        }

        // ตรวจสอบการกดยืนยัน
        let agree = document.getElementById("agree");
        if (!agree.checked) {
            agree.classList.add("is-invalid");
            valid = false;
        } else {
            agree.classList.remove("is-invalid");
        }

        if (!valid) {
            return false; // ไม่ส่งฟอร์ม
        }

        alert("บันทึกข้อมูลสำเร็จ");
        return true; // ส่งฟอร์มไปยัง Controller
    }
</script>

</body>
</html>
