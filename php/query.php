<?php
include("dbcon.php");
session_start();

$userName = $userEmail = $userPassword = $userConfirmPassword = $username = "";
$userNameErr = $userEmailErr = $userPasswordErr = $userConfirmPasswordErr = "";

if (isset($_POST['userSignUp'])) {
    $userEmail = $_POST['email'];
    $username = $_POST['username'];
    $userPassword = $_POST['password'];
    $userConfirmPassword = $_POST['confirm_password'];

    // Name validation
    if (empty($username)) {
        $userNameErr = "User name is required";
    }

    // Email validation
    if (empty($userEmail)) {
        $userEmailErr = "Email is required";
    } else {
        $query = $pdo->prepare("SELECT * FROM user WHERE email = :email"); // ✅ correct table name
        $query->bindParam(':email', $userEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $userEmailErr = "Email already exists";
        }
    }

    // Password validation
    if (empty($userPassword)) {
        $userPasswordErr = "Password is required";
    }

    // Confirm password validation
    if (empty($userConfirmPassword)) {
        $userConfirmPasswordErr = "Confirm Password is required";
    } elseif ($userPassword !== $userConfirmPassword) {
        $userConfirmPasswordErr = "Confirm Password does not match";
    }

    // Insert user if no errors
    if (empty($userNameErr) && empty($userEmailErr) && empty($userPasswordErr) && empty($userConfirmPasswordErr)) {
        $query = $pdo->prepare("
            INSERT INTO user (username, email, password, role_id) 
            VALUES (:username, :email, :password, :role_id)
        ");

        $roleId = 1; // ✅ default role ID

        $query->bindParam(':username', $username);
        $query->bindParam(':email', $userEmail);
        $query->bindParam(':password', $userPassword); // ❗ password_hash() recommended
        $query->bindParam(':role_id', $roleId, PDO::PARAM_INT);

        if ($query->execute()) {
            echo "<script>alert('User registered successfully'); location.assign('index.php');</script>";
        } else {
            echo "<script>alert('Registration failed');</script>";
        }
    }
}




// login Work
if(isset($_POST['Login'])){
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];
    if(empty($userEmail)){
        $userEmailErr = "Email is Required";
    }
    else{
        $query = $pdo->prepare("select * from user where email = :email");
        $query->bindParam('email',$userEmail);
        $query->execute();
        $user = $query->fetch(PDO::FETCH_ASSOC);
        // print_r($user);
        // die();
        if($user){
                if($userPassword == $user['password'] ){
                    if($user['role_id']==2){
                        $_SESSION['adminRole'] = $user['role_id'];
                        $_SESSION['adminName'] = $user['username'];
                        $_SESSION['adminEmail'] = $user['email'];
                        $_SESSION['adminId'] = $user['user_id'];
                       echo "<script>alert('admin Login');location.assign('adminPanel/index.php')</script>";  
                    }
                    else if($user['role_id']==1){
                        $_SESSION['userRole'] = $user['role_id'];
                        $_SESSION['userName'] = $user['username'];
                        $_SESSION['userEmail'] = $user['email'];
                        $_SESSION['userId'] = $user['user_id'];
                       echo "<script>alert('User Login');location.assign('home.php')</script>";   
                    }
                        
                }
                else{
                        $userPasswordErr = "Password Not Matched";
                }
        }
        else{
            $userEmailErr = "User Not Found" ; 
        }
    }
     if(empty($userPassword)){
        $userPasswordErr = "Password is Required";
    }
}



?>