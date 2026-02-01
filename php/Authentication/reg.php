<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="register-box">
        <h2>Register</h2>

        <form action="" method="POST">
            <input type="text" name="name" placeholder="Full Name" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="pass" placeholder="Password" required>

            <input type="number" name="age" placeholder="Age" required>

            <button type="submit" name="submitbtn">Register</button>
        </form>
    </div>
    <?php
        if(isset($_POST['submitbtn'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $age = $_POST['age'];
            $name = $_POST['name'];
            $conn = mysqli_connect("localhost","root","RedTiger!Drinks5Coffee?","Authentication");
            $query = "Insert into user(name,age,email,passcode) values(?,?,?,?)";
            $ps = $conn->prepare($query);
            $ps->bind_param("siss",$name,$age,$email,$pass);
            $ps->execute();
            session_start();
            $_SESSION['Username'] = $name;
            $_SESSION['Password'] = $pass;
            $_SESSION['Age'] = $age;
            $_SESSION['Email'] = $email;
            header("location:home.php");
        }
    ?>

</body>
</html>
