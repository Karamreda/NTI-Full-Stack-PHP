<?php
include 'db/db.php';
include 'navbar1.php';

$students_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_students FROM students"))['total_students'];
$courses_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_courses FROM courses"))['total_courses'];
$enrollments_total = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total_enrollments FROM enrollments"))['total_enrollments'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #1f1f2e;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
        }

        h2 {
            color: #00d1b2;
            font-weight: bold;
            margin-bottom: 40px;
        }

        .card {
            border-radius: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 0 20px rgba(0, 209, 178, 0.4);
        }

        .card-body i {
            font-size: 2.5rem;
        }

        .btn {
            border-radius: 25px;
            font-weight: bold;
        }

        .btn-outline-primary {
            border-color: #00bcd4;
            color: #00bcd4;
        }

        .btn-outline-primary:hover {
            background-color: #00bcd4;
            color: #fff;
        }

        .btn-outline-success {
            border-color: #4caf50;
            color: #4caf50;
        }

        .btn-outline-success:hover {
            background-color: #4caf50;
            color: #fff;
        }

        .btn-outline-danger {
            border-color: #f44336;
            color: #f44336;
        }

        .btn-outline-danger:hover {
            background-color: #f44336;
            color: #fff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">📊 Dashboard</h2>
    <div class="row g-4">

        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0 bg-light text-dark">
                <div class="card-body text-center">
                    <i class="fas fa-user-graduate mb-3 text-primary"></i>
                    <h5 class="card-title">Students</h5>
                    <p class="card-text">Total Students: <strong><?= $students_total ?></strong></p>
                    <a href="students/students.php" class="btn btn-outline-primary btn-sm">View Students</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0 bg-light text-dark">
                <div class="card-body text-center">
                    <i class="fas fa-book-open mb-3 text-success"></i>
                    <h5 class="card-title">Courses</h5>
                    <p class="card-text">Total Courses: <strong><?= $courses_total ?></strong></p>
                    <a href="courses/courses.php" class="btn btn-outline-success btn-sm">View Courses</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 mb-4">
            <div class="card shadow-lg border-0 bg-light text-dark">
                <div class="card-body text-center">
                    <i class="fas fa-chart-line mb-3 text-danger"></i>
                    <h5 class="card-title">Enrollments</h5>
                    <p class="card-text">Total Enrollments: <strong><?= $enrollments_total ?></strong></p>
                    <a href="enrollments/enrollments.php" class="btn btn-outline-danger btn-sm">View Enrollments</a>
                </div>
            </div>
        </div>

    </div>
</div>

</body>
</html>
