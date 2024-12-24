<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="styless.css">
    <title> register</title>
</head>
<body>
    
    <div class="container">
        <div class="box   form-box">
        
        <?php
        include("php/config.php");
        if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $Email = $_POST['Email'];
        $Age = $_POST['Age'];
        $password =$_POST['password'];

        $verify_query = mysqli_query($con,"select Email from user where Email= '$Email'");
        if(mysqli_num_rows($verify_query) !=0){
        echo "<div class= 'message'
        <p> this Email is used, try another one </p>
        </div> <br>";
        echo "<a href ='Javascript:self.history.back()'> <button class= 'btn'> Go Back </button> '";
        }
        else{
        mysqli_query($con,"INSERT INTO user(username, Email, Age, password) VALUES('$username','$Email','$Age','$password')") ;
        echo "<div class= 'message'
        <p>  registration is successfully!</p>
        </div> <br>";
        echo "<a href ='one.php'> <button class= 'btn'> Login Now</button> '";
        }
        }else{
        ?>
        <header> sign up</header>
        <form action=""  method="post">
        <div class="field input">
        <label for="username"> username</label>
        <input type="text"  name="username"  id="username" required>
        </div>

        <div class="field input">
        <label for="username">  Email</label>
        <input type="text"  name="Email"  id="Email" required>
        </div>

        <div class="field input">
        <label for="username"> Age</label>
        <input type="number"  name="Age"  id="Age" required>
        </div>

        <div class="field input">
        <label for="password"> password</label>
        <input type="password"  name="password"  id="password" required>
        </div>
        <div class="field">
        <input  class="btn" type="submit"  name="submit" value="login">
        </div>
        <div class="links">
        Already a member? <a href="register.php"> sign in</a>
        </div>
        </form>
        </div>
        <?php }?>
    </div>
</body>
</html>