<?php
require("config.php");

if (isset($_POST['register'])) {
    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    // menyiapkan query
    $sql = "SELECT * FROM users WHERE username=: $username OR email=: $username";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $email
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['error_message'] = "Username atau Email sudah digunakan";
        header("Location: login.php?username=mikaael");
        exit();
    } else {
        $sql = "INSERT INTO users (name, username, email, password) 
                VALUES (:name, :username, :email, :password)";
        $stmt = $db->prepare($sql);

        // bind parameter ke query
        $params = array(
            ":name" => $name,
            ":username" => $username,
            ":password" => $password,
            ":email" => $email
        );

        // eksekusi query untuk menyimpan ke database
        $saved = $stmt->execute($params);

        // jika query simpan berhasil, maka user sudah terdaftar
        // maka alihkan ke halaman login
        if ($saved) {
            header("Location: login.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Pendaftaran gagal, silakan coba lagi.";
            header("Location: login.php?username=ulang");
            exit();
        }
    }
}

if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:$username OR email=:$username";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if (password_verify($password, $user["password"])) {
            // buat Session
            $_SESSION["user"] = $user;

            // Memeriksa peran pengguna
            if ($user['role'] == 'admin') {
                // login sukses sebagai admin, alihkan ke halaman admin
                header("Location: homeA.php");
            } else {
                // login sukses sebagai user, alihkan ke halaman user
                header("Location: homeu.php");
            }
            exit();
        } else {
            $_SESSION['error_message'] = "Password salah!";
            header("Location: login.php");
            exit();
        }
    } else {
        $_SESSION['error_message'] = "Username atau email tidak ditemukan!";
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    <link rel="stylesheet" href="css/Login.css">
    <link rel="shortcut icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
    <link rel="icon" href="img\Login\LogoOutlineHitam.png" type="image/x-icon">
</head>

<body>
    <?php if (isset($_SESSION['error_message'])) : ?>
        <p><?php echo $_SESSION['error_message'];
            unset($_SESSION['error_message']); ?></p>
    <?php endif; ?>
    <!-- Log In Form Section -->
    <section>
        <div class="container" id="container">
            <!-- Log In Form Section -->
            <div class="form-container sign-in-container">
                <form action="" method="POST">
                    <a href="index.php" target="_blank" class="logo"><img src="image\Login\LogoOutlineHitam.png" alt="" style="width: 70px;"></a>
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="image\Login\Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\gmail.png" alt=""></a>
                    </div>
                    <span> Or sign in using Email Address</span>
                    <label>
                        <input type="email" name="username" placeholder="Email" required />
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" required />
                    </label>
                    <a href="#">Forgot your password?</a>
                    <button type="submit" name="login">Sign In</button>
                </form>
            </div>
            <!-- Log In Form Section -->
            <!-- SIGN up Form Section -->
            <div class="form-container sign-up-container">
                <form action="" method="POST">
                    <a href="index.php" target="_blank" class="logo"><img src="image\Login\LogoOutlineHitam.png" alt="" style="width: 70px;"></a>
                    <h1>Sign Up</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="image\Login\Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\gmail.png" alt=""></a>
                    </div>
                    <span>Or use your Email for registration</span>
                    <label>
                        <input type="text" name="name" placeholder="Name" required />
                    </label>
                    <label>
                        <input type="email" name="email" placeholder="Email" required />
                    </label>
                    <label>
                        <input type="text" name="username" placeholder="Username" required />
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" required />
                    </label>
                    <button type="submit" name="register" style="margin-top: 9px">Sign Up</button>

                </form>
            </div>
            <!-- SIGN up Form Section -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log In</h1>
                        <p>Sign in here if you already have an account </p>
                        <button class="ghost mt-5" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account. </p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/Login.js"></script>
</body>

</html>