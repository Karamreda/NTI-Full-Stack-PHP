<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Courses List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0,0,0,0.1);
        }
        h2 {
            font-weight: bold;
            color: #343a40;
        }
        .btn-custom {
            margin-right: 5px;
        }
        table th, table td {
            vertical-align: middle !important;
        }
    </style>
</head>
<body>

<?php include '../navbar.php'; ?>

<div class="container p-5 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>📚 Courses List</h2>
        <a href="add_course.php" class="btn btn-success">➕ Add Course</a>
    </div>

    <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark text-center">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Hours</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <?php
            $q = "SELECT * FROM courses";
            $res = mysqli_query($conn, $q);
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                    <td>{$row['title']}</td>
                    <td>{$row['description']}</td>
                    <td>{$row['hours']}</td>
                    <td>\${$row['price']}</td>
                    <td>
                        <a href='edit_course.php?id={$row['id']}' class='btn btn-warning btn-sm btn-custom'>Edit</a>
                        <a href='delete_course.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                    </td>
                </tr>";
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
