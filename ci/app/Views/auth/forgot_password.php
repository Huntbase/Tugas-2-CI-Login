<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <link rel="stylesheet" href="<?= base_url('css/') ?>Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .login {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
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
            background: #f7f7f7;
            padding: 40px;
        }

        .top_link {
            height: 30px;
        }

        .top_link a {
            color: #333;
            font-weight: 600;
            text-decoration: none;
            color: #007bff;
            display: flex;
            align-items: center;
        }

        .contact {
            margin-top: 15px;
            border-radius: 90px;
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

        .contact form h3 {
            margin-bottom: 20px;
            color: #333;
        }

        .contact input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #F08F7F;
            border-radius: 10px;
        }

        .contact button.submit {
            width: 100%;
            background: #F08F7F;
            color: #fff;
            padding: 10px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .contact button.submit:hover {
            background: #FDC0C0;
        }

        .right {
            width: 50%;
            padding: 40px;
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

        .right-text h2 {
            font-size: 30px;
            color: #333;
        }

        .right-text p {
            margin-top: 20px;
            font-size: 16px;
            color: #666;
        }

        .right-inductor img {
            width: 200px;
            margin-top: 20px;
        }

        .alert {
            padding: 15px;
            margin: 20px 0;
            border: 1px solid transparent;
            border-radius: 40px;
        }

        .alert-success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }

        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>
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
                        <form action="<?= base_url('/auth/forgot_password') ?>" method="post">
                            <?php if (!empty(session()->getFlashdata('fail'))): ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('fail') ?></div>
                            <?php endif ?>
                            <?php if (!empty(session()->getFlashdata('success'))): ?>
                                <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
                            <?php endif ?>
                            <img class="logo1" src="<?= base_url('image/') ?>Login\LogoOutlineHitam.png" alt="">
                            <h3>Forgot Password</h3>
                            <input type="email" name="email" placeholder="Enter your email">
                            <button class="submit">Submit</button>
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="right-text">
                        <h2>Forgot Your Password?</h2>
                        <p>
                            No problem! Just enter your email address and we'll send you a link to reset it.
                        </p>
                        <img class="logo1" src="<?= base_url('image/') ?>Login\Lupa.png" alt="">
                    </div>
                    <div class="right-inductor">
                        <img src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>