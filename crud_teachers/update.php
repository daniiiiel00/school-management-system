<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

// Get the record by ID
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $result = $conn->query("SELECT * FROM techers WHERE id=$id");
    $row = $result->fetch_assoc();
}

// Handle Update Request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = intval($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
     $sex = $conn->real_escape_string($_POST['sex']);
      $adress = $conn->real_escape_string($_POST['adress']);
    $department = $conn->real_escape_string($_POST['department']);  
    $conn->query("UPDATE techers SET name='$name',sex='$sex',adress='$adress',department='$department' WHERE id=$id");

    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
    <style>
        /* Reset and General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color:#05ce92ff ;
            text-align: center;
            padding: 20px;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        /* Responsive Form Container */
        .form-container {
            background: white;
            max-width: 500px;
            width: 90%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            text-align: left;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        /* Buttons */
        .btn {
            width: 100%;
            padding: 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-update {
            background: #333;
            color: white;
        }

        .btn-back {
            background: #dc3545;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .form-container {
                width: 95%;
                padding: 15px;
            }

            input, .btn {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>

<h2>Edit </h2>

<div class="form-container">
    <form method="post">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        
        <label>Teachers Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>
        <label>sex:</label>
        <input type="text" name="sex" value="<?= htmlspecialchars($row['sex']) ?>" required>
          <label>Adress:</label>
        <input type="text" name="adress" value="<?= htmlspecialchars($row['adress']) ?>" required>
          <label>Department:</label>
        <input type="text" name="department" value="<?= htmlspecialchars($row['department']) ?>" required>

        <button type="submit" class="btn btn-update">Update</button>
    </form>

   
</div>

</body>
</html>

<?php $conn->close(); ?>
