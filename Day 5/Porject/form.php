<?php
$email = "admin@example.com";
$password = "123456";
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        if ($_POST['email'] === $email && $_POST['password'] === $password) {
            header("Location: login.php");
            exit;
        } else {
            $message = '<div class="alert alert-danger">
                          <i class="bi bi-exclamation-triangle-fill text-warning-emphasis"></i>
                          Wrong email or password
                        </div>';
        }
    }
}
?>

<!-- CSS Links -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<body class="bg-dark">
  <div class="container m-5 p-5">
    <div class="row d-flex justify-content-center">
      <form method="POST" class="was-validated w-50 bg-secondary p-4 rounded text-light">
        <?= $message ?>

        <div class="mb-3 mt-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control mb-3" id="email" name="email" required>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label" >Password</label>
          <input type="password" class="form-control mb-3" id="password" name="password" required >
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
      </form>
    </div>
  </div>
</body>
