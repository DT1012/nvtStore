<?php
session_start();
require_once './data/database.php';

if (isset($_POST['submit'])) {
    $username = $_POST['email'];
    $password = $_POST['pass'];
    $sql = "SELECT * from khachhang where mail ='$username' and matKhau='$password'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if ($username == 'admin@gmail.com' && $password == '1111') {
        $msg = "Các bạn đã đăng nhập thành công";
        header('Location: ../Backend/home.php');
        die();
    } else if (mysqli_num_rows($query)) {
        $_SESSION['user'] = $row["tenKH"];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION["maKH"] = $row["maKH"];
        $_SESSION['pass'] = $password;
        $msg = "Các bạn đã đăng nhập thành công";
        header('Location: ../Page/Home.php');
        //  header("Location: ../font_end/index.php?name=<?php echo $query['tentk']; 
    } else {
        
        echo '<script>alert("Email hoặc mật khẩu sai !")</script>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <style>
        :root {
            --bg1: #9b59b6;
            --bg2: #3498db;
            --text: #26ade4;
        }

        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #080710;
        }

        .background {
            width: 430px;
            height: 520px;
            position: absolute;
            transform: translate(-50%, -50%);
            left: 50%;
            top: 50%;
        }

        .background .shape {
            height: 200px;
            width: 200px;
            position: absolute;
            border-radius: 50%;
        }

        .shape:first-child {
            background: linear-gradient(#1845ad, #23a2f6);
            left: -80px;
            top: -80px;
        }

        .shape:last-child {
            background: linear-gradient(to right, #ff512f, #f09819);
            right: -30px;
            bottom: -80px;
        }

        form {
            height: 520px;
            width: 400px;
            background-color: rgba(255, 255, 255, 0.13);
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            border-radius: 10px;
            backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
            padding: 50px 35px;
        }

        form * {
            font-family: 'Poppins', sans-serif;
            color: #ffffff;
            letter-spacing: 0.5px;
            outline: none;
            border: none;
        }

        form h3 {
            font-size: 32px;
            font-weight: 500;
            line-height: 42px;
            text-align: center;
        }

        label {
            display: block;
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
        }

        input {
            display: block;
            height: 50px;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.07);
            border-radius: 3px;
            padding: 0 10px;
            margin-top: 8px;
            font-size: 14px;
            font-weight: 300;
        }

        ::placeholder {
            color: #e5e5e5;
        }

        .button {
            margin-top: 50px;
            width: 100%;
            background-color: #ffffff;
            color: #080710;
            padding: 15px 0;
            font-size: 18px;
            font-weight: 600;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background">
            <div class="shape"></div>
            <div class="shape"></div>
        </div>
        <form class="form-login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <h3>Login Here</h3>
            <div class="form-text">
                <label>Username</label>
                <input type="email" name="email" placeholder="Email or Phone">
            </div>

            <div class="form-text">
                <label>Password</label>
                <input type="password" name="pass" placeholder="Password">
            </div>

            <input class="button" type="submit" name="submit" value="Login ">
        </form>
    </div>
</body>

</html>