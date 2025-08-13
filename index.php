<?php 
include('php/query.php');
include('components/header.php');
?>
  <style>
        body {
            background-color: #1c1c1c;
            color: #fff;
        }
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background-color: #2a2a2a;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }
        .form-control {
            background-color: #333;
            border: none;
            color: #fff;
        }
        .form-control:focus {
            background-color: #444;
            box-shadow: none;
            color: #fff;
        }
        .btn-custom {
            background-color: #ff9800;
            color: #fff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #e68900;
        }
        .form-group i {
            position: absolute;
            left: 15px;
            top: 10px;
            color: #aaa;
        }
        .input-with-icon {
            position: relative;
        }
        .input-with-icon input {
            padding-left: 40px;
        }
            .extra-links {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .extra-links a {
            color: #ff9800;
            text-decoration: none;
        }
        .extra-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h3 class="text-center mb-4"><i class="fas fa-sign-in-alt"></i> Login</h3>
        <form action="" method="POST">
             <div class="form-group input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
            <small id="helpId" class="text-danger"><?php echo $userEmailErr?></small>
        </div>
            <div class="form-group input-with-icon">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <small id="helpId" class="text-danger"><?php echo $userPasswordErr?></small>
            </div>
            <button type="submit" name="Login"class="btn btn-custom btn-block">Login</button>
             <div class="extra-links">
            <a href="#">Forgot Password?</a> | <a href="signup.php">Create Account</a>
        </div>
        </form>
    </div>
<?php 
include('components/footer.php');
?>