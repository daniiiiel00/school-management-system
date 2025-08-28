<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>school site  </title>
    <link rel="stylesheet" href="styles.css">
</head>
 <style>
        body {
            font-family: Arial, sans-serif;
            background-color:#05ce92ff;
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
            background:#333;
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
            background: red;
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
<body>
    <header>
       
    </header>
<a href="logout.php" class="logout-btn">log out</a>
 <div class="login-box">
        <h2>welcome Admin </h2>
            <a href="teachers.php"><input type="submit" name="" value="register teachers"></a><br><br>
              <a href="student.php"><input type="submit" name="" value="register students"></a><br><br>
                <a href="room.php"><input type="submit" name="" value="register rooms"></a><br><br>
                  <a href="course.php"><input type="submit" name="" value="register course"></a><br><br>
                   
        </form>
    </div>
 
   
</body>
</html>
