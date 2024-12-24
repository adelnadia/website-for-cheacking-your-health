<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"   href="nancy.css">
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $weight = $_POST['weight'];
        $height = $_POST['height'] / 100; // تحويل الطول إلى متر

        $bmi = $weight / ($height * $height);


        if ($bmi  < 18.5) {
        $category = "نقص في الوزن";
        } elseif ($bmi  >= 18.5 && $bmi < 24.9) {
        $category = "وزن طبيعي";
        } elseif ($bmi >= 25 &&  $bmi > 29.9) {
        $category = "زيادة في الوزن";
        } else {
        $category = "سمنة";
        }
        

        
        echo "<h1>نتيجة حساب كتلة الجسم</h1>";
        echo "<p>مؤشر كتلة الجسم (BMI): " . round($bmi, 2) . "</p>";
        echo "<p>الفئة: " . $category."</p>";
        }
    
        
    ?>
</body>
</html>