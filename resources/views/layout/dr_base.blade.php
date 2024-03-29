<!DOCTYPE html>
<html lang="en">

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:03 GMT -->

<head>
    <meta charset="utf-8">
    <title>Doccure</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <!-- Favicons -->
    <link href="/assets/img/favicon.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="/assets/plugins/fontawesome/css/all.min.css">

    <!-- Datetimepicker CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap-datetimepicker.min.css">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="/assets/plugins/select2/css/select2.min.css">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="/assets/plugins/fancybox/jquery.fancybox.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="/assets/css/appointment.css">

</head>

<body>

    <!-- Main Wrapper -->
    <div class="main-wrapper">



        <!-- Breadcrumb -->
        <div class="breadcrumb-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-12 col-12">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dr Dashboard</li>
                                <li>

                                </li>
                            </ol>
                            <div style="margin-left:60rem;margin-top: -2rem;">
                                <ul class="nav header-navbar-rht">
                                    <li class="nav-item contact-item">
                                        <div class="header-contact-img">
                                            <i style="color: #fff" class="far fa-hospital"></i>
                                        </div>
                                        <div class="header-contact-detail text-center">
                                            <p class="contact-header" style="color: #fff">Contact</p>
                                            <p class="contact-info-header" style="color: #fff"> +91 {{$doctorData->phonenumber}}</p>
                                        </div>
                                    </li>
                                    <!-- User Menu -->
                                    <li class="nav-item dropdown has-arrow logged-item">
                                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                            <span class="user-img">
                                                <img class="rounded-circle" src="{{('/storage/'.$doctorData->image)}}" style="width: 60px;height: 55PX;"  >
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <div class="user-header">
                                                <div class="avatar avatar-sm">
                                                    <img src="{{('/storage/'.$doctorData->image)}}" alt="User Image"
                                                        class="avatar-img rounded-circle">
                                                </div>
                                                <div class="user-text">
                                                    <h6>{{$doctorData->firstname}}</h6>
                                                    <p class="text-muted mb-0">Doctor</p>
                                                </div>
                                            </div>
                                            <a class="dropdown-item" href="doctor-dashboard.html">Dashboard</a>
                                            <a class="dropdown-item" href="doctor-profile-settings.html">Profile
                                                Settings</a>
                                            <a class="dropdown-item" href="login.html">Logout</a>
                                        </div>
                                    </li>
                                    <!-- /User Menu -->


                                </ul>
                            </div>
                        </nav>
                        <h2 class="breadcrumb-title" style="margin-top: -2rem;">Dashboard</h2>

                    </div>

                </div>
            </div>

        </div>
        <!-- /Breadcrumb -->
        <!-- Page Content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">

                        <!-- Profile Sidebar -->
                        <div class="profile-sidebar">
                            <div class="widget-profile pro-widget-content">
                                <div class="profile-info-widget">
                                    <a href="#" class="booking-doc-img">
                                        <img src="{{('/storage/'.$doctorData->image)}}" alt="User Image">
                                    </a>
                                    <div class="profile-det-info">
                                        <h3>Dr. {{$doctorData->firstname}}</h3>

                                        <div class="patient-details">
                                            <h5 class="mb-0">BDS, MDS - Oral & Maxillofacial Surgery</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dashboard-widget">
                                <nav class="dashboard-menu">
                                    <ul>
                                        <li class="active">
                                            <a href="{{ url('dr_panal/'.$doctorData->id) }}">
                                                <i class="fas fa-columns"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dr_panal/'.$doctorData->id.'/appointments')}}">
                                                <i class="fas fa-calendar-check"></i>
                                                <span>Appointments</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dr_panal/'.$doctorData->id.'/my-patients')}}">
                                                <i class="fas fa-user-injured"></i>
                                                <span>My Patients</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dr_panal/'.$doctorData->id.'/schedule')}}">
                                                <i class="fas fa-hourglass-start"></i>
                                                <span>Schedule Timings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoices.html">
                                                <i class="fas fa-file-invoice"></i>
                                                <span>Invoices</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="reviews.html">
                                                <i class="fas fa-star"></i>
                                                <span>Reviews</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="chat-doctor.html">
                                                <i class="fas fa-comments"></i>
                                                <span>Message</span>
                                                <small class="unread-msg">23</small>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dr_panal/'.$doctorData->id.'/dr-profile')}}">
                                                <i class="fas fa-user-cog"></i>
                                                <span>Profile Settings</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="social-media.html">
                                                <i class="fas fa-share-alt"></i>
                                                <span>Social Media</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ url('dr_panal/'.$doctorData->id.'/dr-change-password')}}">
                                                <i class="fas fa-lock"></i>
                                                <span>Change Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="index-2.html">
                                                <i class="fas fa-sign-out-alt"></i>
                                                <span>Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- /Profile Sidebar -->

                    </div>
                    @yield('base')
                    <!-- Footer -->
                    <footer class="footer">

                        <!-- Footer Top -->
                        <div class="footer-top">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-6">

                                        <!-- Footer Widget -->
                                        <div class="footer-widget footer-about">
                                            <div class="footer-logo">
                                                <img src="/assets/img/footer-logo.png" alt="logo">
                                            </div>
                                            <div class="footer-about-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor
                                                    incididunt ut labore et dolore magna aliqua. </p>
                                                <div class="social-icon">
                                                    <ul>
                                                        <li>
                                                            <a href="#" target="_blank"><i
                                                                    class="fab fa-facebook-f"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank"><i
                                                                    class="fab fa-twitter"></i> </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank"><i
                                                                    class="fab fa-linkedin-in"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank"><i
                                                                    class="fab fa-instagram"></i></a>
                                                        </li>
                                                        <li>
                                                            <a href="#" target="_blank"><i
                                                                    class="fab fa-dribbble"></i> </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Footer Widget -->

                                    </div>

                                    <div class="col-lg-3 col-md-6">

                                        <!-- Footer Widget -->
                                        <div class="footer-widget footer-menu">
                                            <h2 class="footer-title">For Patients</h2>
                                            <ul>
                                                <li><a href="search.html"><i class="fas fa-angle-double-right"></i>
                                                        Search for
                                                        Doctors</a></li>
                                                <li><a href="login.html"><i class="fas fa-angle-double-right"></i>
                                                        Login</a></li>
                                                <li><a href="register.html"><i class="fas fa-angle-double-right"></i>
                                                        Register</a>
                                                </li>
                                                <li><a href="booking.html"><i class="fas fa-angle-double-right"></i>
                                                        Booking</a>
                                                </li>
                                                <li><a href="patient-dashboard.html"><i
                                                            class="fas fa-angle-double-right"></i>
                                                        Patient Dashboard</a></li>
                                            </ul>
                                        </div>
                                        <!-- /Footer Widget -->

                                    </div>

                                    <div class="col-lg-3 col-md-6">
                                        <!-- Footer Widget -->
                                        <div class="footer-widget footer-menu">
                                            <h2 class="footer-title">For Doctors</h2>
                                            <ul>
                                                <li><a href="appointments.html"><i
                                                            class="fas fa-angle-double-right"></i>
                                                        Appointments</a></li>
                                                <li><a href="chat.html"><i class="fas fa-angle-double-right"></i>
                                                        Chat</a></li>
                                                <li><a href="login.html"><i class="fas fa-angle-double-right"></i>
                                                        Login</a></li>
                                                <li><a href="doctor-register.html"><i
                                                            class="fas fa-angle-double-right"></i>
                                                        Register</a></li>
                                                <li><a href="doctor-dashboard.html"><i
                                                            class="fas fa-angle-double-right"></i>
                                                        Doctor Dashboard</a></li>
                                            </ul>
                                        </div>
                                        <!-- /Footer Widget -->

                                    </div>

                                    <div class="col-lg-3 col-md-6">

                                        <!-- Footer Widget -->
                                        <div class="footer-widget footer-contact">
                                            <h2 class="footer-title">Contact Us</h2>
                                            <div class="footer-contact-info">
                                                <div class="footer-address">
                                                    <span><i class="fas fa-map-marker-alt"></i></span>
                                                    <p> 3556 Beech Street, San Francisco,<br> California, CA 94108 </p>
                                                </div>
                                                <p>
                                                    <i class="fas fa-phone-alt"></i>
                                                    +1 315 369 5943
                                                </p>
                                                <p class="mb-0">
                                                    <i class="fas fa-envelope"></i>
                                                    doccure@example.com
                                                </p>
                                            </div>
                                        </div>
                                        <!-- /Footer Widget -->

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /Footer Top -->

                        <!-- Footer Bottom -->
                        <div class="footer-bottom">
                            <div class="container-fluid">

                                <!-- Copyright -->
                                <div class="copyright">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="copyright-text">
                                                <p class="mb-0"><a href="templateshub.net">Templates Hub</a></p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">

                                            <!-- Copyright Menu -->
                                            <div class="copyright-menu">
                                                <ul class="policy-menu">
                                                    <li><a href="term-condition.html">Terms and Conditions</a></li>
                                                    <li><a href="privacy-policy.html">Policy</a></li>
                                                </ul>
                                            </div>
                                            <!-- /Copyright Menu -->

                                        </div>
                                    </div>
                                </div>
                                <!-- /Copyright -->

                            </div>
                        </div>
                        <!-- /Footer Bottom -->

                    </footer>
                    <!-- /Footer -->

                </div>
                <!-- /Main Wrapper -->

                <!-- jQuery -->
                <script src="/assets/js/jquery.min.js"></script>

                <!-- Bootstrap Core JS -->
                <script src="/assets/js/popper.min.js"></script>
                <script src="/assets/js/bootstrap.min.js"></script>

                <!-- Sticky Sidebar JS -->
                <script src="/assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
                <script src="/assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>

                <!-- Circle Progress JS -->
                <script src="/assets/js/circle-progress.min.js"></script>

                <!-- Custom JS -->
                <script src="/assets/js/script.js"></script>

</body>

<!-- doccure/doctor-dashboard.html  30 Nov 2019 04:12:09 GMT -->

</html>
