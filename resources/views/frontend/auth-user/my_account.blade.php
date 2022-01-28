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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

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

    <title>My | Account</title>
    <script src="{{ asset('frontend/auth-assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/auth-assets/js/jquery-migrate-3.3.2.js') }}"></script>
</head>

<body>
    <div class="breadcrumb-area"
        style="background-image: url({{ asset('frontend/auth-assets/img/bg1632034097.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <h2 class="page-title"> User Dashboard
                        </h2>
                        <ul class="page-list">
                            <li class="list-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="list-item"><a> User Dashboard
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="login-page-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="user-dashboard-wrapper">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="mobile_nav">
                                <i class="fas fa-user-cog"></i>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-info text-white"><i class="fas fa-user-circle"></i>
                                    {{ Auth::user()->name }}
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/my_account') }}">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/edit_profile') }}">Edit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/change_password') }}">Change
                                    Password</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('all_orders') }}">My Orders</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('shipping_address') }}">Shipping
                                    Address</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{ url('support_ticket') }}">Support
                                    Ticket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/logout-user') }}">
                                    Logout
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel">
                                <div class="message-show margin-top-10">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="user-dashboard-card style-01 ">
                                            <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                                            <div class="content">
                                                <h4 class="title">Total Orders</h4>
                                                {{-- <span class="number">{{ $orders->count() }}</span> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="user-dashboard-card style-01 ">
                                            <div class="icon"><i class="fas fa-calendar-alt"></i></div>
                                            <div class="content">
                                                <h4 class="title">Support Tickets</h4>
                                                <span class="number">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
