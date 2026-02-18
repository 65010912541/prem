<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>งาน K</title>
</head>
<body>

<h2>งาน K</h2>
<p>รหัสนิสิต 65010912541</p>
<p>ชื่อ นายจิรภัทร ดอกไม้</p>
<p>อาจารย์ผู้สอน อาจารย์เอกชัย</p>

<br>

<!-- ปุ่มสีเขียว -->
<button style="background:green;color:white;padding:10px;"
        onclick="showMe()">
  เปิดรูปตัวเอง
</button>

<!-- ปุ่มสีส้ม -->
<button style="background:orange;color:black;padding:10px;"
        onclick="showTeacher()">
  เปิดรูปอาจารย์เอกชัย
</button>

<br><br>

<!-- ตรงนี้ไว้แสดงรูป -->
<img id="showImage" width="300">

<script>
function showMe(){
  document.getElementById("showImage").src = "img/1.jpg";
}

function showTeacher(){
  document.getElementById("showImage").src = "img/2.jpg";
}
</script>

</body>
</html>
