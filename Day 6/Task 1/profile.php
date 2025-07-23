<?php
(isset($_GET['name'])) ? $name = $_GET['name'] : $name = '';
$email=$_GET['email'] ?? '' ;
$age=$_GET['age'] ?? '' ;
$city=$_GET['city'] ?? '' ;

function Total($x,$y,$z){
  return $x+$y+$z ;
}
$Tax=fn($total,$tax)=>$total * $tax  ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>profile</title>
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
    .alert,
    span {
      font-weight: bold;
    }

    form {
      border-radius: 7px;
    }
  </style>
</head>

<body>

  <body class="bg-success ">
    <div class="container ">

      <div class="row justify-content-center">

        <div class="col-lg-5 col-md-8 col-xs-12 mt-5">
          <form class=" bg-light w-100 p-4">
            <h3 class="d-flex justify-content-center mb-4">User Profile</h3>
            <div class="alert alert-success">Welcome, <?= $name ?></div>
            <div class="card ">
              <h4 class="p-3">User Information</h4>
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><span>Full name: </span><?= $name ?></li>
                <li class="list-group-item"><span>Email: </span> <?= $email ?></li>
                <li class="list-group-item"><span>Age: </span> <?= $age ?></li>
                <li class="list-group-item"><span>City: </span> <?= $city ?></li>
                <li class="list-group-item"><span>Total: </span> <?php echo Total(400,500,900) ; ?></li>
                <li class="list-group-item"><span>Tax: </span> <?php echo $Tax (Total(400,500,900),0.2) ;?></li>
                <li class="list-group-item"><span>Length Of Name : </span> <?php echo strlen($name) ;?></li>
                <li class="list-group-item"><span>replace of Name: </span> <?php echo str_replace("$name","*****",$name) ;?></li>
                <li class="list-group-item"><span>substring: </span> <?php echo substr($name,0,2) ;?></li>
                <li class="list-group-item"><span>ucifirst Of Name : </span> <?php echo ucfirst($name) ;?></li>
                <li class="list-group-item"><span>upper Of Name : </span> <?php echo strtoupper($name) ;?></li>
              </ul>
            </div>
            <br>
            <div class="d-flex justify-content-center">
              <button type="submit" class=" btn btn-primary ">Back to form</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
  </body>

</html>