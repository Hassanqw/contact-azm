<?php 
include('components/header.php');
?>
<style>
    body {
    background-color: #1c1c1c;
    color: #fff;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.login-container {
    max-width: 400px;
    margin: 80px auto;
    background-color: #2a2a2a;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

h3 {
    font-weight: 600;
    color: #ff9800;
}

.form-control {
    background-color: #333;
    border: none;
    color: #fff;
    border-radius: 5px;
    height: 42px;
    font-size: 1rem;
    transition: background-color 0.3s ease;
}

.form-control:focus {
    background-color: #444;
    box-shadow: none;
    color: #fff;
    outline: none;
}

.btn-custom {
    background-color: #ff9800;
    color: #fff;
    border: none;
    font-weight: 600;
    font-size: 1.1rem;
    padding: 12px 0;
    border-radius: 25px;
    transition: background-color 0.3s ease;
    cursor: pointer;
}

.btn-custom:hover {
    background-color: #e68900;
}

.form-group {
    margin-bottom: 20px;
    position: relative;
}

.form-group i {
    position: absolute;
    left: 15px;
    top: 12px;
    color: #aaa;
    font-size: 1.2rem;
}

.input-with-icon input {
    padding-left: 45px;
}

.extra-links {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #bbb;
}

.extra-links a {
    color: #ff9800;
    text-decoration: none;
    font-weight: 600;
}

.extra-links a:hover {
    text-decoration: underline;
}

</style>
<div class="login-container">
    <h3 class="text-center mb-4"><i class="fas fa-user-plus"></i> Sign Up</h3>
    <form action="signup_process.php" method="POST">
        <div class="form-group input-with-icon">
            <i class="fas fa-user"></i>
            <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
        </div>
        <div class="form-group input-with-icon">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" class="form-control" placeholder="Email Address" required>
        </div>
        <div class="form-group input-with-icon">
            <i class="fas fa-user-circle"></i>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
        </div>
        <div class="form-group input-with-icon">
            <i class="fas fa-lock"></i>
            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
        </div>
        <button type="submit" class="btn btn-custom btn-block">Sign Up</button>
        <div class="extra-links">
            Already have an account? <a href="login.php">Login here</a>
        </div>
    </form>
</div>

<?php 
include('components/footer.php');
?>