<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | Admin</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style_colorlib.css">
</head>

<body>
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">

                <div class="signin-image">
                    <figure><img src="assets/img/admin.png" alt="sing up image"></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Masuk</h2>
                    <form action="loginadmin_proses.php" method="POST" class="register-form" id="login-form">

                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="Email" />
                        </div>

                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password" />
                        </div>

                        <div class="form-group form-button">
                            <input type="submit" name="login" id="signin" class="form-submit" value="Log in" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>