<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// تحقق من وجود صورة
if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
// إعدادات الملف
$uploadedFile = $_FILES['image']['tmp_name'];
$fileName = $_FILES['image']['name'];
$filePath = 'uploads/' . basename($fileName);

 // تأكد من وجود مجلد uploads
if (!is_dir('uploads')) {
mkdir('uploads', 0777, true);
}

// نقل الصورة إلى المجلد uploads
if (move_uploaded_file($uploadedFile, $filePath)) {
// استخدام Tesseract لقراءة النص من الصورة
$outputText = shell_exec("tesseract " . escapeshellarg($filePath) . " stdout");
echo "<h3>النص المستخرج:</h3>";
echo "<pre>" . htmlspecialchars($outputText) . "</pre>";
} else {
echo "فشل في رفع الصورة.";
}
} else {
echo "يرجى اختيار صورة.";
}
}
?>c:\xamp\htdocs\matlab_html\one.htmlc:\xamp\htdocs\matlab_html\one.html