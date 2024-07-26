<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <link rel="stylesheet" href="<?= base_url('css/') ?>Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .alert {
            padding: 15px;
            margin: 20px 0;
            border: 1px solid transparent;
            border-radius: 40px;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }

        .login {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login_box {
            width: 900px;
            height: 550px;
            background: #FDC0C0;
            box-shadow: 0px 15px 25px rgba(0, 0, 0, 0.1);
            border-radius: 90px;
            display: flex;
            overflow: hidden;
        }

        .left {
            width: 50%;
            background: #fff;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right {
            width: 50%;
            background: #FDC0C0;
            color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .right-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .right-text img {
            width: 160px;
            margin: 0;
        }

        .top_link {
            display: flex;
            justify-content: start;
            width: 100%;
        }

        .top_link a {
            margin-top: -100px;
            text-decoration: none;
            color: #007bff;
            display: flex;
            align-items: center;
        }

        .top_link img {
            margin-right: 10px;
        }

        .contact {
            width: 100%;
        }

        .contact form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .contact form img {
            margin-left: 0;
            margin-bottom: 5px;
            width: 80px;
        }

        .contact h3 {
            margin-bottom: 20px;

        }

        .contact input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #F08F7F;
            border-radius: 10px;
        }

        .contact button {
            width: 100%;
            padding: 10px;
            background: #F08F7F;
            border: none;
            color: #fff;
            margin-top: 20px;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact button:hover {
            background: #FDC0C0;
        }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementsByName("password")[0].value;
            var cpassword = document.getElementsByName("cpassword")[0].value;
            var alertBox = document.getElementById("alert");

            if (password !== cpassword) {
                alertBox.style.display = 'block';
                alertBox.innerText = 'Confirm Password does not match with Password';
                return false;
            } else {
                alertBox.style.display = 'none';
                return true;
            }
        }
    </script>
</head>

<body>
    <section>
        <div class="login">
            <div class="login_box">
                <div class="left">
                    <div class="top_link">
                        <a href="<?= base_url('/auth/index') ?>"><img src="" alt="">Back to Login</a>
                    </div>
                    <div class="contact">
                        <form action="<?= base_url('/auth/reset_password_process') ?>" method="post"
                            onsubmit="return validateForm()">
                            <div id="alert" class="alert alert-danger" style="display: none;"></div>

                            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
                            <?php endif ?>
                            <img class="logo1" src="<?= base_url('image/') ?>Login\LogoOutlineHitam.png" alt="">
                            <h3>Reset Password</h3>
                            <input type="hidden" name="token" value="<?= $token ?>">
                            <input type="password" name="password" placeholder="Enter new password">
                            <input type="password" name="cpassword" placeholder="Confirm new password">
                            <button class="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="right-text">
                        <h2>Welcome Back!</h2>
                        <p>Please enter your new password to reset it.</p>
                        <img class="logo1" src="<?= base_url('image/') ?>Login\Lupa2.png" alt="">
                    </div>
                    <div class="right-inductor"><img src="" alt=""></div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>