

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #05ce92ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-box {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .login-box h2 {
            margin-bottom: 20px;
        }
        .login-box input[type="text"],
        .login-box input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-box input[type="submit"] {
            width: 100%;
            padding: 10px;
            background: #333;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .login-box input[type="submit"]:hover {
            background: #252517;
        }
        @media (max-width: 480px) {
            .login-box {
                padding: 15px;
            }
            .login-box h2 {
                font-size: 20px;
            }
        }
        .logout-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background: #333;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        .logout-btn:hover {
            background: #333;
        }
    </style>
    
</head>
<body>
<a href="crud_student/index.php" class="logout-btn">view students</a>

    <div class="login-box">
        <h2>students Registration page</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="enter student name" required>
             <input type="text" name="sid" placeholder="enter id" required>
              <input type="text" name="age" placeholder="enter age" required>
               <input type="text" name="sex" placeholder="enter sex" required>
            <input type="submit" name="login" value="submit">
        </form>
    </div>




    <?php
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "school";
$table = " student";
$conn = NEW mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = ($_POST['name']);
     $sid = ($_POST['sid']);
     $age = ($_POST['age']);
      $sex = ($_POST['sex']);
    $stmt = $conn->prepare("INSERT INTO   student (name,sid,age,sex) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }
    $stmt->bind_param("ssss", $name,$sid,$age,$sex);
if (!$stmt->execute()) {
      die("Execute failed: " . $stmt->error);
} else {
  echo "<script>alert(' submition successful   ');
  window.location.href = '';
  </script>";
}
}
$conn->close();
?>

</body>
</html>
