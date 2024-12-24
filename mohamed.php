<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**if(isset($_POST['send'])) {
        $_POST['username'];
        $_POST['password'];


        if($_POST['username'] == "hady"  && $_POST['password'] == "12345"){
        echo "تم تسجيل بنجاح";
        }

    }**/
    if (isset($_POST['send'])) {
        $systolic = $_POST['systolic'];
        $diastolic = $_POST['diastolic'];
        
        echo "<h1>نتائج قياس الضغط</h1>";
        echo "<p>الضغط الانقباضي: $systolic</p>";
        echo "<p>الضغط الانبساطي: $diastolic</p>";
        

        if($systolic < 120 &&  $diastolic< 80) {
        echo "<p> ضغط الدم طبيعي.</p>";
        } elseif($systolic<=129 && $diastolic <80){
        echo "<p> ضغط الدم مرتفع قليلا.</p>";
        } elseif ($systolic<= 139  && $diastolic <= 89) {
        echo "<p> ضغط الدم مرتفع جدا.</p>";
        } else{
        echo "<p>   ضغط الدم مرتفع جدا جدا .</p>";
        }
    } 

    
        
    ?>
</body>
</html>