<?php
$email = $_POST['email'] ?? '';
$name = $_POST['proName'] ?? '';
$description = $_POST['description'] ?? '';
$uploadedCards = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    foreach ($_FILES['image']['name'] as $k => $filename) {
        $tmpName = $_FILES['image']['tmp_name'][$k];
        $type = mime_content_type($tmpName);

        if (strpos($type, 'image/') === 0) {
            $uniqueName = uniqid() . '_' . basename($filename);
            $targetPath = "img/$uniqueName";

            if (move_uploaded_file($tmpName, $targetPath)) {
                $uploadedCards[] = $targetPath;
            }
        }
    }
}
?>

<head>
    <style>
        img {
            display: inline;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-light">
    <div class="container mt-5 w-75">

        <form class="row p-4 bg-secondary rounded shadow mb-5" method="POST" enctype="multipart/form-data">
            <div class="col-md-6">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control mb-3" name="proName" required>
            </div>

            <div class="col-md-6">
                <label class="form-label">Description</label>
                <input type="text" class="form-control mb-3" name="description" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control mb-3" name="email" required>
            </div>

            <div class="col-md-12">
                <label class="form-label">Product Images</label>
                <input class="form-control mb-4" type="file" name="image[]" multiple required>
            </div>

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary w-50">Add Product</button>
            </div>
        </form>

        <?php if (!empty($uploadedCards)): ?>
            <div class="row">
                <?php foreach ($uploadedCards as $img): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card bg-dark border-light shadow h-100">
                            <img src="<?= htmlspecialchars($img) ?>" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title text-white"><?= htmlspecialchars($name) ?></h5>
                                <p class="card-text text-light"><?= htmlspecialchars($description) ?></p>
                                <p class="card-text text-light"><i class="bi bi-envelope-at-fill me-2"></i><?= htmlspecialchars($email) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</body>
