<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Modern UI</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(45deg, #d11d89ff, #93f9b9);
        }

        .container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 35px 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            transition: 0.3s ease;
        }

        .container:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
        }

        h3 {
            text-align: center;
            margin-bottom: 25px;
            color: #ff00e1ff;
            letter-spacing: 1px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 600;
            color: #333;
        }

        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            transition: border-color 0.3s ease;
        }

        input:focus {
            border-color: #1d976c;
            outline: none;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #ff00aaff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        button:hover {
            background: #db08c9ff;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="profile.php" method="">
            <h3>User Information</h3>

            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Please Enter Your Name" required>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" id="exampleInputEmail1" name="email" placeholder="Please Enter Your Email" required>
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" id="city" name="city" placeholder="Your City" required>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>

</html>
