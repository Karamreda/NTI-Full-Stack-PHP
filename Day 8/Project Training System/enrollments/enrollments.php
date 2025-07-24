<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrollment List</title>
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
    </style>
</head>
<body>

    <?php include '../navbar.php'; ?>

    <div class="container p-5 mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>🎓 Enrollment List</h2>
            <a href="add_enrollment.php" class="btn btn-success">➕ Add Enrollment</a>
        </div>

        <table class="table table-bordered table-striped table-hover text-center">
            <thead class="thead-dark">
                <tr>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Grade</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = "SELECT enrollments.id ,students.name AS student_name, courses.title AS course_title, enrollments.grade, enrollments.enrollment_date 
                      FROM enrollments
                      JOIN students ON enrollments.student_id = students.id
                      JOIN courses ON enrollments.course_id = courses.id";
                $res = mysqli_query($conn, $q);
                while ($row = mysqli_fetch_assoc($res)) {
                    echo "<tr>
                        <td>{$row['student_name']}</td>
                        <td>{$row['course_title']}</td>
                        <td>{$row['grade']}</td>
                        <td>{$row['enrollment_date']}</td>
                        <td>
                            <a href='delete_enrollment.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
