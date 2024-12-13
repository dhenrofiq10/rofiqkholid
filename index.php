<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-
scale=1.0" />
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.all.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.5/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Sign in || Sign up from</title>
    <!-- css stylesheet -->
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
<style>
    @import url("https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900; 1, 100..900&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300; 0, 400; 0, 500; 0, 700; 0, 900; 1, 100; 1, 300; 1, 400; 1, 500; 1, 700; 1, 900&display=s wap");
 
* {
            box-sizing: border-box;
        }

        body {
            align-items: center;
            background: url("gedung3.png") no-repeat;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            flex-direction: column;
            /* background: #f6f5f7; */
            font-family: "roboto", sans-serif;
            min-height: 100%;
            margin: 10%;
        }

        .container {
            position: relative;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
            background: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0,
                0.22);
        }

        .sign-up,
        .sign-in {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            transition: all 0.6s ease-in-out;
        }

        .sign-up {
            width: 50%;
            opacity: 0;
            z-index: 1;
        }

        .sign-in {
            width: 50%;
            z-index: 2;
        }

        form {
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 15px 0 20px;
        }

        input {
            background: #eee;
            padding: 12px 15px;
            margin: 8px 15px;
            width: 100%;
            border-radius: 5px;
            border: none;
            outline: none;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            color: #fff;
            background: #6c6c6c;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 55px;
            margin: 20px;
            border-radius: 20px;
            border: 1px solid #6c6c6c;
            outline: none;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
            cursor: pointer;
        }

        button:active {
            transform: scale(0.9);
        }

        #signUp,
        #signIn {
            background-color: transparent;
            border: 2px solid #fff;
        }

        .container.right-panel-active .sign-in {
            transform: translateX(100%);
        }

        .container.right-panel-active .sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
        }

        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
            overflow: hidden;
            transition: transform o.6s ease-in-out;
            z-index: 100;
        }

        .container.right-panel-active .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            position: relative;
            color: #fff;
            background: #6c6c6c;
            left: -100%;
            height: 100%;
            width: 200%;
            background: linear-gradient(to right, #8f0808, #80d892);
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .container.right-panel-active .overlay {
            transform: translateX(50%);
        }

        .overlay-left,
        .overlay-right {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
            transform: translateX(0);
            transition: transform 0.6s ease-in-out;
        }

        .overlay-left {
            transform: translateX(-20%);
        }

        .overlay-right {
            right: 0;
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-left {
            transform: translateX(0);
        }

        .container.right-panel-active .overlay-right {
            transform: translateX(20%);
        }

        .social-container {
            margin: 20px 0;
        }

        .social-container a {
            height: 40px;
            width: 40px;
            margin: 0 5px;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius:50px;
}
</style>
</head>

<body>
<div class="container" id="main">
        <!-- Sign Up Form -->
        <div class="sign-up">
            <form action="" method="POST">
                <h1>Create Account</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://mail.google.com" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>or use your email for registration</p>
                <input type="email" name="emailreg" placeholder="Email" required>
                <input type="password" name="passwordreg" placeholder="Password" required>
                <input type="password" name="repasswordreg" placeholder="Re-type password" required>
                <button type="submit" name="register">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="sign-in">
            <form action="" method="POST">
                <h1>Sign In</h1>
                <div class="social-container">
                    <a href="https://www.facebook.com" target="_blank" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://mail.google.com" target="_blank" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <p>or use your account</p>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button id="signIn">Sign In</button>
                </div>
                <div class="overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start your journey with us</p>
                    <button id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Animasi Toggle -->
    <script>
        const signUpButton = document.getElementById("signUp");
        const signInButton = document.getElementById("signIn");
        const main = document.getElementById("main");
        
        signUpButton.addEventListener("click", () => {
            main.classList.add("right-panel-active");
        });
        
        signInButton.addEventListener("click", () => {
            main.classList.remove("right-panel-active");
        });
    </script>
</body>
</html>
<?php 
require "koneksi.php";

if(isset($_SESSION['email'])){
    header("location:dashboard.php");
}

if(isset($_POST['register'])){
    $email = $_POST['emailreg'];
    $passwordreg = $_POST['passwordreg'];
    $repasswordreg = $_POST['repasswordreg'];

    if($passwordreg == $repasswordreg){
        $query = "INSERT INTO account(id_account, email, password, akses)
        VALUES ('', '$email', md5('$passwordreg'), '2')";
        
        if (mysqli_query($conn, $query)){
            echo "<script>
    Swal.fire({
      title: 'Berhasil',
      text: 'login sebagai USER berhasil',
      icon: 'success', 
      showConfirmButton: true,
    }).then(() => {
    window.location.href = 'index.php';
        });
    </script>";
        } else {
            echo "<script>
    Swal.fire({
      title: 'Berhasil',
      text: 'login sebagai USER berhasil',
      icon: 'success', 
      showConfirmButton: true,
    }).then(() => {
    window.location.href = 'index.php';
        });
    </script>";
        }
    } else {
        echo "<script>
    Swal.fire({
        title: 'Berhasil',
        text: 'login sebagai USER berhasil',
        icon: 'success', 
        showConfirmButton: true,
        }).then(() => {
        window.location.href = 'index.php';
        });
    </script>";
    }
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $query2 = mysqli_query($conn, "SELECT * FROM account WHERE email = '$email' AND password = '$password'");

    if(mysqli_num_rows($query2) != 0){
        $row = mysqli_fetch_assoc($query2);
        
        $_SESSION['id'] = $row['id_account'];
        $_SESSION['email'] = $row['email'];
        
        if($row['akses'] == 1){
            echo "<script>
                    Swal.fire({
                    title: 'Berhasil',
                    text: 'login Berhasil sebagai Admin',
                    icon: 'success', 
                    showConfirmButton: true,
                    timer: 1500
                    }).then(() => {
                    window.location.href = 'dashboard.php';
                    });
                  </script>";
        } else if($row['akses'] == 2){
            echo "<script>
                    Swal.fire({
                    title: 'Berhasil',
                    text: 'Login Berhasil sebagai admin ',
                    icon: 'success', 
                    showConfirmButton: true,
                    }).then(() => {
                    window.location.href = 'welcome.php';
                    });
                  </script>";
        }
    } else {
        echo "<script>
                Swal.fire({
            title: 'Gagal',
            text: 'login Gagal',
            icon: 'gagal', 
            showConfirmButton: true,
            }).then(() => {
            window.location.href = 'index.php';
        });
              </script>";
    }
}
?>