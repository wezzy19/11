<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/backend/css/sb-admin-2.min.css">

    <!-- Your additional styles -->
    <style>
        body.bg-gradient-primary {
            margin: 0;
            padding: 0;
            background-size: cover;
            background-position: center;
            font-family: sans-serif;
            background-color: #ccc; /* Fallback color */
        }

        .login-card {
            max-width: 400px;
            border-radius: 10px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .login-card h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .background-image {
            background-image: url('<?= base_url(); ?>assets/backend/img/loon.jpg');
            background-size: cover;
            background-position: center;
        }

        .container {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="background-image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="p-5 login-card">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>assets/frontend/images/logo.JPG" alt="circle-image">
                                    <h1 class="h4 text-gray-900 mb-4">🇼​​🇪​​🇱​​🇨​​🇴​​🇲​​🇪 🇵​​🇱​​🇪​​🇦​​🇸​​🇪​ ​🇱​​🇴​​🇬​ 🇮​​🇳​ 🇧​​🇪​​🇱​​🇴​​🇼​​​</h1>
                                    <label><?= $this->session->flashdata('msg_login'); ?></label>
                                </div>
                                <form class="user" action="<?= base_url(); ?>index.php/admin" method="post">
                                    <div class="form-group">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" class="form-control form-control-user" name="user_email" placeholder="Enter Email Address..." required>
                                    </div>
                                    <div class="form-group">
                                        <i class="fas fa-lock"></i>
                                        <input type="password" class="form-control form-control-user" name="user_password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>index.php/admin-user">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="<?= base_url(); ?>assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?= base_url(); ?>assets/backend/js/sb-admin-2.min.js"></script>
</body>

</html>
