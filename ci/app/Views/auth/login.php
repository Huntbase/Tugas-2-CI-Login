<!DOCTYPE html>
<html>

<head>
    <title>Dokumen</title>
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
    <!-- Log In Form Section -->
    <section> <!--Menggabungkan konten HTML-->
        <div class="container" id="container">
            <!-- Log In Form Section -->
            <div class="form-container sign-in-container">
                <form action="<?= base_url("auth/process") ?>" method="post">
                    <?= csrf_field(); ?>
                    <?php if (!empty(session()->getFlashdata('fail'))): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
                    <?php endif ?>

                    <?php if (!empty(session()->getFlashdata('success'))): ?>
                        <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                    <?php endif ?>
                    <img class="logo1" src="<?= base_url('image/') ?>Login\LogoOutlineHitam.png" alt=""
                        style="width: 70px;">
                    <h1>Sign In</h1>
                    <label>
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password"
                            value="<?= set_value('password'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </label>
                    <a href="<?= site_url('auth/forgot_password') ?>">Forgot your password?</a>
                    <a href="<?= site_url('auth') ?>"><button type="submit" name="login">Sign In</button></a>
                </form>
            </div>
            <!-- Log In Form Section -->
            <!-- SIGN up Form Section -->
            <div class="form-container sign-up-container" id="regis">
                <form action=" <?= base_url("auth/save") ?> " method="post">
                    <?= csrf_field() ?>

                    <a href="" target="_blank" class="logo"><img
                            src="<?= base_url('image/') ?>Login\LogoOutlineHitam.png" alt="" style="width: 70px;"></a>
                    <h1>Sign Up</h1>
                    <label>
                        <input type="text" name="name" placeholder="Name" required value="<?= set_value('name'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'name') : '' ?></span>
                    </label>
                    <label>
                        <input type="email" name="email" placeholder="Email" required value="<?= set_value('email'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'email') : '' ?></span>
                    </label>
                    <label>
                        <input type="text" name="username" placeholder="Username" required
                            value="<?= set_value('username'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'username') : '' ?></span>
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" required
                            value="<?= set_value('password'); ?>" />
                        <span
                            class="text-danger"><?= isset($validation) ? display_error($validation, 'password') : '' ?></span>
                    </label>
                    <!-- <label>
                        <input type="cpassword" name="cpassword" placeholder="Confirm Password" required />
                    </label> -->
                    <a href="<?= site_url('auth') ?>"><button type="submit" name="register" style="margin-top: 9px">Sign
                            Up</button></a>
                </form>
            </div>
            <!-- SIGN up Form Section -->
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Log In</h1>
                        <p>Sign in here if you already have an account </p>
                        <a href="<?= base_url('auth/index') ?>"><button class="ghost mt-5" id="signIn">Sign
                                In</button></a>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Create, Account!</h1>
                        <p>Sign up if you still don't have an account. </p>
                        <a href="<?= base_url('auth/register') ?>"></a><button class="ghost" id="signUp">Sign
                            Up</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= base_url('js/') ?>Login.js"></script>
</body>

</html>