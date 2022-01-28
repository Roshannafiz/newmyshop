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
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/main-style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/auth-assets/css/helpers.css') }}" />
    <!---------------- Toastr Css --------------->
    <link rel="stylesheet" href="{{ asset('admin/assets/toastr/toastr.min.css') }}">
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

        .error {
            color: red !important;
        }

    </style>

    <title>User | Login</title>
    <script src="{{ asset('frontend/auth-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/auth-assets/js/jquery-migrate-3.3.2.js') }}"></script>
</head>

<body>
    <!-- register form area start -->
    <div class="register-form-area-wrapper">
        <div class="register-bg"
            style="background-image: url({{ asset('frontend/auth-assets/img/image1634455326.jpg') }});">
        </div>
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
                                <a class="nav-link active">Update Profile Information</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div>
                                <form id="MyAccountForm" action="edit_profile" method="POST"
                                    class="register-form">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="name">Name
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="name" value="{{ $user_details['name'] }}" id="name">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="email">Email<span class="ex">*</span></label>
                                            <input type="email" name="email" value="{{ $user_details['email'] }}" id="email">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="mobile">Phone
                                                <span class="ex">*</span></label>
                                            <input type="number" name="mobile" value="{{ $user_details['phone'] }}" id="mobile">
                                        </div>

                                        <div class="form-group col-12">
                                            <label for="address">Address
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="address" value="{{ $user_details['address'] }}" id="address">
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="state">State
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="state" value="{{ $user_details['state'] }}" id="state">
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="city">City
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="city" value="{{ $user_details['city'] }}" id="city">
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="country">Country
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="country" value="{{ $user_details['country'] }}" id="country">
                                        </div>

                                        <div class="form-group col-lg-6 col-12">
                                            <label for="pincode">Pin Code
                                                <span class="ex">*</span>
                                            </label>
                                            <input type="text" name="pincode" value="{{ $user_details['pincode'] }}" id="pincode">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper btn-top mt-5">
                                        <input type="submit" value="Update Profile" class="default-btn submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- register form area end -->

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
    <!-- wow js -->
    <script src="{{ asset('frontend/auth-assets/js/wow.js') }}"></script>
    <!------------ Toastr Message---------->
    <script src="{{ asset('admin/assets/toastr/toastr.min.js') }}"></script>
    <!----- Jequery Validate ----->
    <script src="{{ asset('frontend/auth-assets/jequery-validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('frontend/auth-assets/jequery-validate/jequery_form_validate.js') }}"></script>
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
