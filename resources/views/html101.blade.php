<!-- resouces/views/html101.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Workshop HTML</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Custom Font -->
    <style>
        body {
              font-family: 'Kanit', sans-serif;
        background: linear-gradient(135deg, #c988e9, #a1d7e7);
        min-height: 100vh;
        }
        .form-box {
        background: linear-gradient(to bottom, #7b3ff2, #2ec4c6);
        color: #fff;
    }

    </style>

</head>
<body style=" background: linear-gradient(135deg, #c988e9, #a1d7e7)">
<div class="container pt-5">

  <div class="p-5 shadow-lg rounded-4 form-box">

       <h1 class="mb-4 text-white">67160294-FORM</h1>

        <form onsubmit="return validateForm();">

            <!-- Name -->
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label for="fname" class="form-label">ชื่อ</label>
                    <input type="text" class="form-control" id="fname" placeholder="กรอกชื่อ">
                </div>

                <div class="col-md-6">
                    <label for="lname" class="form-label">นามสกุล</label>
                    <input type="text" class="form-control" id="lname" placeholder="กรอกนามสกุล">
                </div>
            </div>

            <!-- Birthdate -->
            <div class="mb-3">
                <label for="birthdate" class="form-label">วันเดือนปีเกิด</label>
                <input type="date" class="form-control" id="birthdate">
            </div>

            <!-- Gender -->
            <div class="mb-3">
                <label for="gender" class="form-label">เพศ</label>
                <select class="form-select" id="gender">
                    <option value="" selected>เลือกเพศ</option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    <option value="อื่นๆ">อื่นๆ</option>
                </select>
            </div>

            <!-- Photo -->
            <div class="mb-3">
                <label for="photo" class="form-label">รูปภาพ</label>
                <input class="form-control" type="file" id="photo">
            </div>

            <!-- Address -->
            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <textarea class="form-control" id="address" rows="3" placeholder="กรอกที่อยู่"></textarea>
            </div>

            <!-- Color -->
            <div class="mb-3">
                <label for="color" class="form-label">สีที่ชอบ</label>
                <input type="color" class="form-control form-control-color" id="color">
            </div>

            <!-- Music types -->
            <div class="mb-3">
                <label class="form-label">แนวเพลงที่ชอบ</label>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rock">
                    <label class="form-check-label" for="rock">ร็อก</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="life">
                    <label class="form-check-label" for="life">เพื่อชีวิต</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="pop">
                    <label class="form-check-label" for="pop">ป๊อป</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="other">
                    <label class="form-check-label" for="other">อื่นๆ</label>
                </div>
            </div>

            <!-- Consent -->
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" id="agree">
                <label class="form-check-label text-danger fw-bold" for="agree">
                    ยินยอมให้เก็บข้อมูลตามข้อกำหนด
                </label>
            </div>

            <!-- Buttons -->
            <div class="text-end">
                <button type="reset" class="btn btn-secondary">รีเซ็ต</button>
                <button type="submit" class="btn btn-success">บันทึก</button>
            </div>

        </form>

    </div>
</div>
<script>
function setInvalid(id) {
    document.getElementById(id).classList.add("is-invalid");
}

function setValid(id) {
    document.getElementById(id).classList.remove("is-invalid");
}

function validateForm() {

    let valid = true;

    let fname = document.getElementById("fname");
    let lname = document.getElementById("lname");
    let birthdate = document.getElementById("birthdate");
    let gender = document.getElementById("gender");
    let photo = document.getElementById("photo");
    let address = document.getElementById("address");
    let color = document.getElementById("color");
    let agree = document.getElementById("agree");

    // ===== ชื่อ =====
    if (fname.value.trim() === "") {
        setInvalid("fname");
        valid = false;
    } else {
        setValid("fname");
    }

    // ===== นามสกุล =====
    if (lname.value.trim() === "") {
        setInvalid("lname");
        valid = false;
    } else {
        setValid("lname");
    }

    // ===== วันเกิด =====
    if (birthdate.value === "") {
        setInvalid("birthdate");
        valid = false;
    } else {
        setValid("birthdate");
    }

    // ===== เพศ =====
    if (gender.value === "") {
        setInvalid("gender");
        valid = false;
    } else {
        setValid("gender");
    }

    // ===== รูป =====
    if (photo.value === "") {
        setInvalid("photo");
        valid = false;
    } else {
        setValid("photo");
    }

    // ===== ที่อยู่ =====
    if (address.value.trim() === "") {
        setInvalid("address");
        valid = false;
    } else {
        setValid("address");
    }

    // ===== สี =====
    if (color.value === "") {
        setInvalid("color");
        valid = false;
    } else {
        setValid("color");
    }

    // ===== แนวเพลง =====
    let musicChecked =
        document.getElementById("rock").checked ||
        document.getElementById("life").checked ||
        document.getElementById("pop").checked ||
        document.getElementById("other").checked;

    if (!musicChecked) {
        alert("กรุณาเลือกแนวเพลงที่ชอบอย่างน้อย 1 แนว");
        valid = false;
    }

    // ===== ยินยอม =====
    if (!agree.checked) {
        agree.classList.add("is-invalid");
        valid = false;
    } else {
        agree.classList.remove("is-invalid");
    }

    // ===== สรุปผล =====
    if (!valid) {
        return false;
    }

    alert("บันทึกข้อมูลสำเร็จ");
    return true;
}
</script>

</body>
</html>
