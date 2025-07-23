<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $folder = 'logs/' . date('Y-m-d') . '/';

  if (!file_exists($folder)) {
    mkdir($folder, 0777, true);
  }

  if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $fileName = basename($_FILES['image']['name']);
    $ext = pathinfo($fileName, PATHINFO_EXTENSION);
    $new_name = uniqid('img_', true) . '.' . $ext;
    $target = $folder . $new_name;

    $allowed = ['image/jpeg', 'image/png'];
    $mime = mime_content_type($_FILES['image']['tmp_name']);

    if (in_array($mime, $allowed)) {
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo "<div class='alert alert-success mt-3'>Image uploaded to <code>$target</code></div>";
      } else {
        echo "<div class='alert alert-danger mt-3'>Failed to upload image.</div>";
      }
    } else {
      echo "<div class='alert alert-danger mt-3'>Invalid image type. Only JPG/PNG allowed.</div>";
    }
  } else {
    echo "<div class='alert alert-warning mt-3'>No file selected or upload error.</div>";
  }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container m-5">
  <form method="POST" enctype="multipart/form-data" class="was-validated">
    <div class="mb-3">
      <label for="image" class="form-label">Upload Image</label>
      <input type="file" class="form-control" id="image" name="image" required>
      <div class="invalid-feedback">Please choose an image file.</div>
    </div>
    <button class="btn btn-primary" type="submit">Upload</button>
  </form>
</div>
