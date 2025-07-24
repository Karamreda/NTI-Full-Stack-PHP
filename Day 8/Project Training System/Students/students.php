<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-weight: bold;
            color: #343a40;
        }
        table th, table td {
            vertical-align: middle !important;
        }
        .btn-sm {
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <?php include '../navbar.php'; ?>

    <div class="container p-5 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>👨‍🎓 Student List</h2>
            <a href="add_student.php" class="btn btn-success">➕ Add Student</a>
        </div>

        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "SELECT * FROM students";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['date_of_birth']}</td>
                        <td>
                            <a href='edit_student.php?id={$row['id']}' class='btn btn-warning btn-sm mr-1'>✏️ Edit</a>
                            <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>🗑️ Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
