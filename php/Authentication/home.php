<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
        }

        .profile-card {
            width: 320px;
            background: white;
            margin: 100px auto;
            padding: 20px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 0 10px gray;
        }

        .profile-card h2 {
            margin-bottom: 10px;
        }

        .profile-card p {
            margin: 8px 0;
            font-size: 16px;
        }

        .label {
            font-weight: bold;
            color: #555;
        }
    </style>
</head>
<body>

<?php
session_start();

if (!isset($_SESSION['Email'])) {
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "RedTiger!Drinks5Coffee?", "Authentication");

if (!$conn) {
    die("Database connection failed");
}

$email = $_SESSION['Email'];

$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);
?>

<div class="profile-card">
    <h2>User Profile</h2>
    <p><span class="label">Name:</span> <?php echo $row['name']; ?></p>
    <p><span class="label">Age:</span> <?php echo $row['age']; ?></p>
    <p><span class="label">Email:</span> <?php echo $row['email']; ?></p>
</div>

</body>
</html>
