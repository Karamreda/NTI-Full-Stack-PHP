<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Enrollment</title>
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

    <div class="container p-5 mt-5">
        <h2 class="text-center mb-4">➕ Add New Enrollment</h2>

        <form action="insert_enrollment.php" method="POST" class="form-container card p-4 shadow m-auto" style="max-width: 600px;">

            <div class="form-group">
                <label for="student_id">Select Student</label>
                <select name="student_id" id="student_id" class="form-control" required>
                    <option value="">-- Choose Student --</option>
                    <?php
                    $students = mysqli_query($conn, "SELECT * FROM students");
                    while ($row = mysqli_fetch_assoc($students)) {
                        echo "<option value='{$row['id']}'>{$row['name']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="course_id">Select Course</label>
                <select name="course_id" id="course_id" class="form-control" required>
                    <option value="">-- Choose Course --</option>
                    <?php
                    $courses = mysqli_query($conn, "SELECT * FROM courses");
                    while ($row = mysqli_fetch_assoc($courses)) {
                        echo "<option value='{$row['id']}'>{$row['title']}</option>";
                    }
                    ?>
                </select>
            </div>

            <div class="form-group mt-3">
                <label for="grade">Grade</label>
                <input type="number" placeholder="Enter Grade" class="form-control" id="grade" name="grade" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4 w-100">Add Enrollment</button>
        </form>
    </div>

</body>
</html>
