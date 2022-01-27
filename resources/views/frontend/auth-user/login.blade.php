<!DOCTYPE html>
<html class="no-js" lang="en_GB" dir="ltr">

<head>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" href="{{ asset('frontend/auth-assets/img/fabicon.png') }}" type="image/png" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Jost:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link rel="icon" href="{{ asset('frontend/auth-assets/img/fabicon.png') }}" sizes="20x20" type="image/png" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/bootstrap.min-v4.6.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/line-awesome.min-v1.3.0.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/slick.css') }}" />
    <!---------------- Toastr Css --------------->
    <link rel="stylesheet" href="{{ asset('admin/assets/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/main-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/helpers.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/responsive.css') }}" />
    <style>
        :root {
            --main-color-one: #ff6280;
            --main-color-two: #ff695c;
            --portfolio-color: ;
            --logistic-color: ;
            --industry-color: ;
            --secondary-color: #f2f3f5;
            --heading-color: ;
            --paragraph-color: #666666;
            --construction-color: ;
            --heading-font: "Jost", sans-serif;
            --body-font: "Roboto", sans-serif;
        }

    </style>

    <title>User | Login</title>
    <script src="{{ asset('frontend/auth-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/auth-assets/js/jquery-migrate-3.3.2.js') }}"></script>
</head>

<body>
    <!-- Login form area start -->
    <div class="register-form-area-wrapper">
        <div class="register-bg"
            style="background-image: url({{ asset('frontend/auth-assets/img/image1634455326.jpg') }});"></div>
        <div class="custom-container-1720 container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-top">
                        <div class="left">
                            <div class="logo-wrapper">
                                <a href="{{ url('/') }}" class="logo">
                                    <img src="{{ asset('frontend/auth-assets/img/logo.png') }}" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <div class="register-form-wrapper">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active">sign in</a>
                            </li>
                        </ul>

                        <!------ Login Area ------>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <form action="{{ url('/login_user') }}" method="POST" class="register-form"
                                    id="LoginForm">
                                    @csrf
                                    <div class="error-wrap"></div>
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="login_email">Email Address <span
                                                    class="ex">*</span></label>
                                            <input type="email" name="email" id="email" />
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="login_password">Password<span
                                                    class="ex">*</span></label>
                                            <input type="password" name="password" class="form-control"
                                                id="password" />
                                        </div>

                                        <div class="form-group form-check col-12">
                                            <input type="checkbox" name="remember" class="form-check-input"
                                                id="login_remember" />
                                            <label class="form-check-label" for="remember">Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="btn-pair">
                                        <a id="forgot-password" href="{{ url('/forgot-password') }}"
                                            class="forgot-btn">
                                            forgot password?
                                        </a>

                                        <div class="btn-wrapper">
                                            <button type="submit" class="default-btn" id="login_btn">
                                                SIGN IN
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="bar-wrap">
                                    <span class="bar"></span>
                                    <p class="or">or</p>
                                    <span class="bar"></span>
                                </div>
                                <div class="sin-in-with">
                                    <a href="#" class="sign-in-btn">
                                        <img src="{{ asset('frontend/auth-assets/img/google-icon.svg') }}"
                                            alt="icon" />
                                        Sign in with Google
                                    </a>
                                    <a href="#" class="sign-in-btn">
                                        <img src="{{ asset('frontend/auth-assets/img/Facebook-icon.svg') }}"
                                            alt="icon" />
                                        Sign in with Facebook
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login form area end -->

    <!-- jquery -->
    <script src="{{ asset('frontend/auth-assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- jquery migrate -->
    <script src="{{ asset('frontend/auth-assets/js/jquery-migrate-3.3.2.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/auth-assets/js/bootstrap.min-v4.6.0.js') }}"></script>
    <!-- popper -->
    <script src="{{ asset('frontend/auth-assets/js/popper.min.js') }}"></script>
    <!-- slick js -->
    <script src="{{ asset('frontend/auth-assets/js/slick.min.js') }}"></script>
    <!-- isotope js -->
    <script src="{{ asset('frontend/auth-assets/js/isotope.pkgd.min-v3.0.6.js') }}"></script>
    <!-- countdown js -->
    <script src="{{ asset('frontend/auth-assets/js/loopcounter.js') }}"></script>
    <!------------ Toastr Message---------->
    <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>
    <!-- wow js -->
    <script src="{{ asset('frontend/auth-assets/js/wow.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/auth-assets/js/main.js') }}"></script>


    <!----- Success Message ------>
    @if (session('message')) {
        <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["success"]("{{ session('message') }}")
        </script>
        }

    @endif

    <!------ Error Message -------->
    @if (session('error_message')) {
        <script>
            toastr.options = {
                "closeButton": false,
                "debug": false,
                "newestOnTop": false,
                "progressBar": false,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "3000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }
            toastr["error"]("{{ session('error_message') }}")
        </script>
        }

    @endif

</body>

</html>
