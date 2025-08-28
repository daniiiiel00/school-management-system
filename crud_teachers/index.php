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

// Fetch Data
$sql = "SELECT * FROM techers";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #05ce92ff;
            text-align: center;
        }

        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background: #333;
            color: white;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        tr:hover {
            background: #ddd;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
            margin: 5px;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
        }

        .btn-edit {
            background: #28a745;
            color: white;
        }

        .btn-delete {
            background: #dc3545;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Click-to-Call Styling */
        .phone-link {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .phone-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<h2>Crud Techers</h2>

<table>
    <thead>
        <tr>
                <th>ID</th>
            <th> Name</th>
            <th>Sex</th>
            <th>Adress</th>
            <th>Department</th>
              <th>Actions</th>
        </tr>
    </thead>
    <tbody>

    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
        <td><?= htmlspecialchars($row['id']) ?></td>
             <td><?= htmlspecialchars($row['name']) ?></td>
             <td><?= htmlspecialchars($row['sex']) ?></td>
              <td><?= htmlspecialchars($row['adress']) ?></td>
              <td><?= htmlspecialchars($row['department']) ?></td>

            <td>
                <a href="update.php?id=<?= $row['id'] ?>" class="btn btn-edit">Edit</a>
                <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-delete" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
        </tr>
    <?php endwhile; ?>

    </tbody>
</table>

</body>
</html>

<?php $conn->close(); ?>
