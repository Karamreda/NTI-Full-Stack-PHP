<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['email'], $_GET['password'])) {
    $_SESSION['users'][] = [
        'email' => $_GET['email'],
        'password' => $_GET['password']
    ];
}

if (isset($_GET['act'])) {
    $action = $_GET['act'];

    if ($action === "clear") {
        session_unset();
        session_destroy();
        session_start();
        header("Location: task3.php");
        exit;
    } elseif ($action === "remove") {
        if (!empty($_SESSION['users'])) {
            array_pop($_SESSION['users']);
        }
        header("Location: task3.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Task 3 - Stylish Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #1d2b64, #f8cdda);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px;
            font-family: 'Segoe UI', sans-serif;
        }

        .form-box {
            background-color: #fff;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 600px;
        }

        h2 {
            text-align: center;
            color: #1d2b64;
            margin-bottom: 25px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #ccc;
            transition: border 0.3s ease;
        }

        input:focus {
            border-color: #1d2b64;
            box-shadow: none;
        }

        .btn-custom {
            font-weight: 600;
            padding: 12px;
            border-radius: 10px;
        }

        .btn-success {
            background-color: #1d976c;
            border: none;
        }

        .btn-success:hover {
            background-color: #159c6e;
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .table th {
            background-color: #1d2b64;
            color: #fff;
            text-align: center;
        }

        .table td {
            text-align: center;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
        }
    </style>
</head>

<body>

    <div class="form-box">
        <h2>User Login</h2>

        <form method="GET">
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-success w-100 btn-custom mb-3">Login</button>
        </form>

        <div class="action-buttons mb-4">
            <a href="task3.php?act=clear" class="btn btn-warning w-50 btn-custom">Clear Session</a>
            <a href="task3.php?act=remove" class="btn btn-danger w-50 btn-custom">Remove Last</a>
        </div>

        <?php if (!empty($_SESSION['users'])): ?>
            <h5 class="text-center mb-3 text-dark fw-bold">Logged In Users</h5>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['users'] as $user): ?>
                        <tr>
                            <td><?= htmlspecialchars($user['email']) ?></td>
                            <td><?= htmlspecialchars($user['password']) ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        <?php endif ?>
    </div>

</body>

</html>
