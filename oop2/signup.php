<?php include_once "config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .signup-box {
            max-width: 400px;
            margin: 50px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="signup-box">
        <h3 class="text-center text-primary">Signup</h3>
        <form method="post">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="pass" class="form-control" placeholder="Enter your password" required>
            </div>
            <button type="submit" name="signup" class="btn btn-primary w-100">Signup</button>
        </form>
        <?php
            if(isset($_POST['signup'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['pass'];
                $crud->signup("login","(name,email,password) VALUE ('$name','$email','$password')");
                $crud->redirect("login.php");
            }
        ?>
        <a href="login.php">already have account</a>
    </div>
</body>
</html>