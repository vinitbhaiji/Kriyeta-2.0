<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

    <title>Form</title>
</head>

<body>
    <section class="form-07">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="_form_07_main">
                        <div class="row">
                            <div class="col-sm-6 ncv-kl-bn">
                                <div class="_form_07_main_sub_01">
                                    <div class="form-07-head">
                                        <h2>LOGIN</h2>
                                    </div>
                                    <div class="form-7-social-media">
                                        <ol>
                                            <li><i class="fa fa-facebook"></i></li>
                                            <li><i class="fa fa-twitter"></i></li>

                                            <li><i class="fa fa-youtube"></i></li>
                                            <li><i class="fa fa-linkedin"></i></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 cv-kl-bn">
                                <div class="_pl_nb_df">
                                    <div class="_bg_cs">
                                        <h2>Sign into your account</h2>
                                    </div>
                                    <div class="form-group">
                                        <label>Enter Your Email</label>
                                        <input type="email" name="email" class="form-control" type="text"
                                            placeholder="Enter Email" required="" aria-required="true">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" type="text"
                                            placeholder="Enter password" required="" aria-required="true">
                                    </div>

                                    <div class="checkbox form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="">
                                            <label class="form-check-label" for="">
                                                Remember me
                                            </label>
                                        </div>
                                        <a href="#">Forgot Password</a>
                                    </div>

                                    <div class="form-group">
                                        <a href="{{ url('/') }}">
                                            <div class="_btn_04">
                                                Login
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
