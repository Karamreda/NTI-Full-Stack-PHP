<?php
$message = '';
$showCard = false;
$Name = $_POST['Name'] ?? '';
$email = $_POST['email'] ?? '';
$name1 = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
        $tmpName = $_FILES['image']['tmp_name'];
        $name1 = basename($_FILES['image']['name']);
        move_uploaded_file($tmpName, "img/$name1");

        $message = "<div class='alert alert-success'>
                        <i class='bi bi-check-circle-fill me-2'></i>Account Created Successfully
                    </div>";
        $showCard = true;
    } else {
        $message = "<div class='alert alert-danger'>
                        <i class='bi bi-x-circle-fill me-2'></i>Please upload an image
                    </div>";
    }
}
?>

<!-- Bootstrap CSS  -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<body class="bg-dark text-light">
    <div class="container my-5 p-5">
        <?= $message ?>

        <?php if ($showCard): ?>
            <div class="row justify-content-center mb-5">
                <div class="card img-thumbnail col-md-4 p-0">
                    <img src="img/<?= htmlspecialchars($name1) ?>" class="card-img-top" alt="Profile Image">
                    <div class="card-body text-dark">
                        <h5 class="card-title"><?= htmlspecialchars($Name) ?></h5>
                        <p class="card-text"><?= htmlspecialchars($email) ?></p>
                        <a href="product.php" class="btn btn-primary w-100">Go to Products</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" class="bg-secondary p-4 rounded shadow">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Profile image</label>
                <input class="form-control" type="file" name="image" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Sign Up</button>
        </form>
    </div>
</body>
