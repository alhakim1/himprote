<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk | Anggota</title>

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
                    <figure><img src="assets/img/anggota.png" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link"></a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Masuk</h2>
                    <form action="login_proses.php" method="POST" class="register-form" id="login-form">

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