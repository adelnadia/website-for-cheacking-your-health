<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styless.css">
    <title>login</title>
</head>
<body>
    <div class="container">
        <div class="box   form-box">

        <?php
        include("php/config.php");
        if(isset($_POST['submit'])) {
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $password = mysqli_real_escape_string($con,$_POST['password']);
        $result = mysqli_query($con,"select * FROM user WHERE Email= '$Email', AND  password = '$password'") or die("select error");
        $row = mysqli_fetch_assoc($result);

        if(is_array($row) && !empty($row)) {
        $_SESSION['valid'] = $row['Email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['Age'] = $row['Age'];
        $_SESSION['password'] = $row['password'];
        }else{
        echo "<div class= 'message'
        <p>  wrong username or password</p>
        </div> <br>";
        echo "<a href ='index.php'> <button class= 'btn'> Login Now</button> '";
        }
        if(isset($_SESSION['valid'])){
        header("location:home.php");
        }
        }else{
        ?>



        <header> login</header>
        <form action=""  method="post">
        <div class="field input">
        <label for="Email"> Email</label>
        <input type="text"  name="Email"  id="Email" required>
        </div>

        <div class="field input">
        <label for="password"> password</label>
        <input type="password"  name="password"  id="password" required>
        </div>

        <div class="field">
        <input  class="btn" type="submit"  name="submit" value="login">
        </div>
        <div class="links">
        Don't have accont? <a href="register.php"> sign up now</a>
        </div>
        </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>