<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>


    <div class="login-box">
        <h2>Login</h2>
        <form method=POST>
            <input type="email" placeholder="email" name="email" required>
            <input type="password" name="pass" placeholder="Password" required>
            <input type="submit" name="submitbtn" value="submit">
        </form>
    </div>
    <?php
        if(isset($_POST['submitbtn'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $conn = mysqli_connect("localhost","root","RedTiger!Drinks5Coffee?","Authentication");
            $query = "Select * from user where email='$email'";
            $resultset = mysqli_query($conn,$query);
            $tablepass = "";
            while($rows = mysqli_fetch_assoc($resultset)){
                $tablepass = $rows['passcode'];
                $age = $rows['age'];
                $name = $rows['name'];
            }
            if($pass==$tablepass){
                session_start();
                $_SESSION['Username'] = $name;
                $_SESSION['Password'] = $pass;
                $_SESSION['Age'] = $age;
                $_SESSION['Email'] = $email;
                header("location:home.php");
            }else{
                echo "invalide password";
            }
        }
    ?>

</body>
</html>
