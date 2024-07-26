<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('css/') ?>Login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .alert {
            padding: 15px;
            margin: 20px 0;
            border: 1px solid transparent;
            border-radius: 4px;
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
    <!-- <?php if (isset($error_message)) : ?>
        <p><?php echo $error_message; ?></p>
    <?php endif; ?>

    <?php if (session()->getFlashdata('message')) : ?>
        <div class="alert alert-success">
            <?= session()->getFlashdata('message') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?> -->
    <!-- Log In Form Section -->
    <section> <!--Menggabungkan konten HTML-->
        <div class="container" id="container">
            <!-- Log In Form Section -->
            <div class="form-container sign-in-container">
                <form action="<?= base_url("auth/login") ?>" method="POST">
                    <a href="index.php" target="_blank" class="logo"><img src="\image\Login\LogoOutlineHitam.png" alt="" style="width: 70px;"></a>
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="\image\Login\Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="\image\Login\fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="\image\Login\gmail.png" alt=""></a>
                    </div>
                    <span> Or sign in using Email Address</span>

                    <label>
                        <input type="username" name="username" placeholder="Username" required />
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
                <form action="" <?= base_url("auth/register") ?> method="POST">
                    <a href="index.php" target="_blank" class="logo"><img src="image\Login\LogoOutlineHitam.png" alt="" style="width: 70px;"></a>
                    <h1>Sign Up</h1>
                    <div class="social-container">
                        <a href="" target="_blank" class="social"><img src="image\Login\Google.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\fb.png" alt=""></a>
                        <a href="" target="_blank" class="social"><img src="image\Login\gmail.png" alt=""></a>
                    </div>
                    <span>Or use your Email for registration</span>
                    <label>
                        <input required type="text" class="form-control" name="name" placeholder="Name" value="<?= set_value('name'); ?>" />
                        <span class="text-danger text-sm"> <?= isset($validation) ? display_form_errors($validation, 'name') : '' ?> </span>
                    </label>
                    <label>
                        <input required type="email" name="email" placeholder="Email" required value="<?= set_value('email'); ?>" />
                        <span class="text-danger text-sm"> <?= isset($validation) ? display_form_errors($validation, 'email') : '' ?> </span>
                    </label>
                    <label>
                        <input requires type="text" name="username" placeholder="Username" required value="<?= set_value('username'); ?>" />
                        <span class="text-danger text-sm"> <?= isset($validation) ? display_form_errors($validation, 'username') : '' ?> </span>
                    </label>
                    <label>
                        <input type="password" name="password" placeholder="Password" required value="<?= set_value('password'); ?>" />
                        <span class="text-danger text-sm"> <?= isset($validation) ? display_form_errors($validation, 'password') : '' ?> </span>
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