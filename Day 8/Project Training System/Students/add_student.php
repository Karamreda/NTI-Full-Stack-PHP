<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Student</title>
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
        <h2 class="text-center mb-4">➕ Add New Student</h2>

        <form action="insert_student.php" method="POST" class="form-container card p-4 shadow m-auto" style="max-width: 600px;">
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="e.g. Ahmed Ali" required>
            </div>

            <div class="form-group mt-3">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="e.g. ahmed@example.com" required>
            </div>

            <div class="form-group mt-3">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="e.g. 01012345678" required>
            </div>

            <div class="form-group mt-3">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" required>
            </div>

            <button type="submit" class="btn btn-primary mt-4 w-100">Add Student</button>
        </form>
    </div>

</body>
</html>
