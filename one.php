<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>شريط بحث URL</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<h1>ابحث عن رابط URL</h1>
<form action="" method="POST">
<input type="text" name="url" placeholder="أدخل رابط URL هنا" required>
<button type="submit">بحث</button>
</form>
</div>
        <div id="h1">
        <div>
        <center>
        <h3> جهاز ضغط</h3>
        <p> للتعرف علي صحتك من خلال الارقام</p>
        <button class="one" onclick="location.href='hady.html'"><a><img src="photo/جهاز ضغط.webp" class="image"></a></button>
        </center>
        </div>
        <div>
        <center>
        <h3> جهاز وزن الجسم</h3>
        <p> للتعرف علي صحتك من خلال الارقام</p>
        <button class="one" onclick="location.href='nancy.html'"><a><img src="photo/وزن الجسم.jpg" class="image"></a></button>
        </center>
        </div>
        <div>
        <center>
        <h3> جهاز ضغط</h3>
        <p> للتعرف علي نتيجة عينة من مخدر</p>
        <button class="one" onclick="location.href='index.html'"><a><img src="photo/جهاز مخدر.webp" class="image"></a></button>
        </center>
        </div>
        </div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$url = filter_var($_POST['url'], FILTER_SANITIZE_URL);
if (filter_var($url, FILTER_VALIDATE_URL)) {
header("Location: $url");
exit();
} else {
echo "<p class='error'>يرجى إدخال رابط URL صالح.</p>";
}
}
?>
</body>
</html>