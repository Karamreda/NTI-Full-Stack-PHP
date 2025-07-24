<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Course</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        h2 {
            color: #fff;
            font-weight: bold;
        }
        label {
            color: #fff;
            font-weight: 500;
        }
        .form-container {
            background-color: #343a40;
            border-radius: 10px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body class="bg-secondary">

    <?php include '../navbar.php'; ?>

    <div class="container p-5">
        <h2 class="mb-4 text-center">➕ Add New Course</h2>
        <form action="insert_course.php" method="POST" class="form-container card p-4 shadow m-auto" style="max-width: 600px;">
            
            <div class="form-group">
                <label for="title">Course Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="e.g., Web Development" required>
            </div>

            <div class="form-group mt-3">
                <label for="description">Course Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Brief about the course" required></textarea>
            </div>

            <div class="form-group mt-3">
                <label for="hours">Course Hours</label>
                <input type="number" class="form-control" id="hours" name="hours" placeholder="e.g., 30" required>
            </div>

            <div class="form-group mt-3">
                <label for="price">Course Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="e.g., 500" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4 w-100">Add Course</button>
        </form>
    </div>

</body>
</html>
