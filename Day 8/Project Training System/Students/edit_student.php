<?php
include '../db/db.php';
$id = $_GET['id'];
$s = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM students WHERE id=$id"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      
    .btn-custom-edit {
        background-color: #000000ff;
        color: #343a40;
        border: none;
    }
    .btn-custom-edit:hover {
        background-color: #e2e6ea;
    }

        body {
            background-color: #6c757d; 
        }
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
<body>

<?php include '../navbar.php'; ?>

<div class="container p-5 mt-5">
    <h2 class="text-center mb-4">Edit Student</h2>

    <form action="update_student.php?id=<?= $id ?>" method="POST" class="form-container card p-4 shadow m-auto" style="max-width: 600px;">
        
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $s['name']; ?>" required>
        </div>

        <div class="form-group mt-3">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= $s['email']; ?>" required>
        </div>

        <div class="form-group mt-3">
            <label for="phone">Phone Number</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?= $s['phone']; ?>" required>
        </div>

        <div class="form-group mt-3">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="dob" name="dob" value="<?= $s['date_of_birth']; ?>" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4 w-100">Update Student</button>
    </form>
</div>

</body>
</html>
