<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>PlatinumUnion - Online Personal Loan + Full-Service Banking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Online Personal Loan + Full-Service Banking" name="keywords" />
    <meta content="Online Personal Loan + Full-Service Banking" name="description" />

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- CSS Files -->
</head>

<style>
    .fixed-plugin .card .obj-flex {
        display: flex;
        gap: 20px;
        align-items: center;
        padding: 1rem 1rem;
    }

    .carousel .carousel-text .text {
        max-width: 700px;
        text-align: center;
    }

    .carousel .carousel-img {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: right;
        overflow: hidden;
    }

    .carousel .carousel-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .carousel {
        position: relative;
        width: 100%;
        height: calc(100vh - 350px);
    }

    .carousel .carousel-item {
        position: relative;
        width: 100%;
        height: calc(100vh - 350px);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carousel .carousel-img::after {
        position: absolute;
        content: "";
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(9, 42, 73, 0.9);
        z-index: 1;
    }

    .carousel .carousel-text {
        position: absolute;
        z-index: 2;
    }

    .carousel .carousel-text .text h1,
    .carousel .carousel-text .text h2,
    .carousel .carousel-text .text h3 {
        color: #ffffff;
        font-weight: 600;
    }

    .carousel .carousel-text .text p {
        color: #ffffff;
    }

    @media (max-width: 991.98px) {

        .carousel,
        .carousel .carousel-item,
        .carousel .carousel-text {
            height: calc(100vh - 450px);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    @media (max-width: 767.98px) {

        .carousel,
        .carousel .carousel-item,
        .carousel .carousel-text {
            height: calc(100vh - 300px);
        }
    }

    @media (max-width: 575.98px) {
        .carousel .carousel-text h1 {
            font-size: 30px;
        }
    }

    .about {
        margin-top: 20px;
        width: 100%;
        padding: 45px 0;
    }

    .about h2,
    .about p {
        text-align: center;
    }

    .about .about-text {
        text-align: center;
    }

    .feature-items {
        background: #092a49;
        color: #ffffff;
        text-align: center;
        padding: 45px;
    }

    .feature h2 {
        color: #ffffff;
    }

    .feature .col-md-6 {
        height: 100%;
    }

    .service h2 {
        margin-bottom: 30px;
        text-align: center;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .service p {
        text-align: center;
    }

    .service .service-item img {
        max-height: 100px;
    }

    .service {
        position: relative;
        width: 100%;
        padding: 45px 0 15px 0;
    }

    .service .service-item {
        position: relative;
        width: 100%;
        margin-bottom: 30px;
        padding: 30px;
        text-align: center;
        border: 1px solid rgba(0, 0, 0, 0.1);
        transition: 0.3s;
    }

    .service .service-item:hover {
        border-color: transparent;
        box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
    }

    .service .service-item img {
        max-height: 70px;
        margin-bottom: 20px;
    }

    .service .service-item h3 {
        margin-bottom: 10px;
        font-size: 22px;
        font-weight: 300;
        letter-spacing: 1px;
    }

    .service .service-item p {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .service .service-item a {
        position: relative;
        font-size: 16px;
        color: #0796fe;
        transition: 0.3s;
    }

    .service .service-item a::after {
        content: "";
        position: absolute;
        width: 80%;
        height: 2px;
        bottom: -3px;
        left: 10%;
        background: #0796fe;
    }

    .mission {
        background: #092a49;
        color: #ffffff;
        padding: 45px;
    }

    .mission h2 {
        color: #ffffff;
        margin-bottom: 20px;
        font-size: 35px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .mission .mission-img img {
        max-height: 70px;
        margin-bottom: 20px;
    }

    .mission .container-fluid .row {
        align-items: center;
    }

    /* .mission .container-fluid .mission-items{
    display: flex;
    align-items: center;
    gap: 50px;
}

.mission .container-fluid .mission-items .flex-item{
    flex: 1 1;
} */

    .mission .container-fluid .mission-text h3 {
        color: #82cde5;
    }
</style>

<body class="page g-sidenav-show bg-gray-200">
    <aside
        class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>

            <a class="navbar-brand m-0" href="#" target="_blank">
                <img src="{{ asset('assets/img/logo-white.png') }}" class="navbar-brand-img h-100" alt="main_logo" />
            </a>
        </div>

        <hr class="horizontal light mt-0 mb-2" />
        <div class="collapse navbar-collapse w-auto max-height-vh-100" id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="dashboard">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">dashboard</i>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="transactions">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">table_view</i>
                        </div>
                        <span class="nav-link-text ms-1">Transactions</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="account">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">payment</i>
                        </div>
                        <span class="nav-link-text ms-1">Account</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="notifications">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">notifications</i>
                        </div>
                        <span class="nav-link-text ms-1">Notifications</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="profile">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">verified_user</i>
                        </div>
                        <span class="nav-link-text ms-1">User Profile</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white active bg-gradient-primary" href="about">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">account_circle</i>
                        </div>
                        <span class="nav-link-text ms-1">About Platinum Union</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="sign-in">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                            <i class="material-icons opacity-10">login</i>
                        </div>
                        <span class="nav-link-text ms-1">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--  -->
    </aside>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm">
                            <a class="opacity-5 text-dark" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">
                            About Us
                        </li>
                    </ol>
                </nav>

                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group input-group-outline">
                            <label class="form-label">Search...</label>
                            <input type="text" class="form-control" />
                        </div>
                    </div>

                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
                                <i class="fa fa-sign-out me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign Out</span>
                            </a>
                        </li>

                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>

                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                                <span class="d-sm-inline d-none">Settings</span>
                            </a>
                        </li>

                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-inbox cursor-pointer"></i>
                                <span class="d-sm-inline d-none">Inbox</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/team-2.jpg') }}"
                                                    class="avatar avatar-sm me-3" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span>
                                                    from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="{{ asset('assets/img/small-logos/logo-spotify.svg') }}"
                                                    class="avatar avatar-sm bg-gradient-dark me-3" />
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by
                                                    Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- Carousel Start -->

        <div class="carousel">
            <div class="container-fluid py-4">
                <div class="carousel-item">
                    <div class="carousel-img">
                        <img src="{{ asset('assets/img/single.jpg') }}" />
                    </div>

                    <div class="carousel-text">
                        <div class="text">
                            <h1>ABOUT US</h1>
                            <p>Helping people meet their life goals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Carousel End -->

        <!-- About Start -->
        <div class="about">
            <div class="container-fluid py-4">
                <h2 class="mb-3">Our Commitment</h2>

                <div class="row">
                    <div class="col-md-6">
                        <div class="about-text">
                            <h4>Reinvent banking</h4>
                            <p>
                                We’re the only full-spectrum fintech marketplace bank built on
                                the belief that innovative, creative solutions deliver more
                                value and a better experience.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-text">
                            <h4>Do what’s right</h4>
                            <p>
                                We're leading the governance of a new industry, developing
                                ethical, responsible ways to bring greater value and better
                                opportunities to customers.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-text">
                            <h4>Deliver world-class experiences</h4>
                            <p>
                                Accessing money should be seamless. We’re committed to making
                                borrowing and saving simple and easy for everyone.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-text">
                            <h4>Level the playing field</h4>
                            <p>
                                Everyone deserves a better financial future if they strive for
                                it. We’ve built a marketplace that keeps costs low and
                                opportunity high.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Feature Start -->
        <div class="feature">
            <div class="container-fluid py-4">
                <div class="feature-items">
                    <h2>About PlatinumUnion</h2>
                    <p>
                        Since 2010, more than 4.8+ million members have joined the Club to
                        help reach their financial goals. As the leading digital
                        marketplace bank at scale, our members can gain access to a broad
                        range of financial products and services through a
                        technology-driven platform, designed to help them pay less when
                        borrowing and earn more when saving.
                    </p>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Service Start -->
        <div class="service">
            <div class="container-fluid py-4">
                <h2>What we’ve accomplished</h2>
                <p>
                    What we’ve accomplished Transforming an industry requires new ways
                    of thinking and doing. Throughout our first decade, we’ve been
                    recognized for our ideas, innovative technology, and business
                    success. We’re proud of what we’ve achieved so far, and there’s so
                    much more ahead.
                </p>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/achieve1.png') }}" alt="Icon" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/achieve2.png') }}" alt="Icon" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/achieve3.png') }}" alt="Icon" />
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/achieve4.jpeg') }}" alt="Icon" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Mission Start -->
        <div class="mission">
            <div class="container-fluid py-4">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="mission-img">
                            <img src="{{ asset('assets/img/favicon-white.png') }}" alt="Mission Image" />
                        </div>
                        <h2>Our Mission</h2>
                        <p>
                            PlatinumUnion mission is to relentlessly advantage our members
                            by challenging the way banking is done.
                        </p>
                        <p>
                            Since launching in 2010, more than 4.8 million members have
                            joined the Club to help reach their financial goals. As the
                            leading digital marketplace bank in the U.S., our members can
                            gain access to a broad range of financial products and services
                            through a technology-driven platform, designed to help them pay
                            less when borrowing and earn more when saving.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4">
                        <div class="mission-item mb-3">
                            <div class="mission-img">
                                <img src="{{ asset('assets/img/icon-h.svg') }}" alt="Mission Image" />
                            </div>

                            <div class="mission-text">
                                <h3>Security</h3>
                                <p>
                                    We use 256-bit encryption to ensure that data is protected
                                    with the highest level of security.
                                </p>
                            </div>
                        </div>

                        <div class="mission-item mb-3">
                            <div class="mission-img">
                                <img src="{{ asset('assets/img/icon-i.svg') }}" alt="Mission Image" />
                            </div>

                            <div class="mission-text">
                                <h3>FDIC Insurance</h3>
                                <p>
                                    Your deposits are FDIC-insured up to the maximum amount
                                    allowed – $250,000.
                                </p>
                            </div>
                        </div>

                        <div class="mission-item">
                            <div class="mission-img">
                                <img src="{{ asset('assets/img/icon-j.svg') }}" alt="Mission Image" />
                            </div>

                            <div class="mission-text">
                                <h3>Customer Support</h3>
                                <p>
                                    Have a question? We’re here to help. Chat with us online, or
                                    reach us by phone or email.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mission End -->

        <!-- Service Start -->
        <div class="service">
            <div class="container-fluid py-4">
                <h2>Our Impact</h2>
                <p>
                    Economic volatility and the current rising costs of healthcare,
                    housing, education, and more have contributed to millions of
                    everyday Americans having insufficient financial reserves or living
                    paycheck to paycheck, including many earning over a quarter of a
                    million dollars annually. We offer members new ways to pay less on
                    their debt and earn more on their savings, helping them achieve
                    their financial goals.
                </p>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/impact1.svg') }}" alt="Icon" />
                            <p>
                                Our values guide all aspects of our business
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/impact3.svg') }}" alt="Icon" />
                            <p>
                                Key actions taken to support the environment
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <img src="{{ asset('assets/img/impact3.svg') }}" alt="Icon" />
                            <p>
                                A social impact business empowering members on a path to
                                financial health
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
    </main>

    <div class="fixed-plugin">
        <a class="fixed-plugin-button2 text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">chat</i>
        </a>

        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="material-icons py-2">settings</i>
        </a>

        <div class="card shadow-lg">
            <div class="card-header pb-0 pt-3">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Settings</h5>
                </div>

                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="material-icons">clear</i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>

            <div class="pt-1 pt-0 obj-flex">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ asset('assets/img/jason-statham.jpg') }}" alt="profile_image"
                        class="w-100 border-radius-lg shadow-sm" />
                </div>
                <div class="text-end pt-1">
                    <h4 class="mb-0">Jason Statham</h4>
                    <p class="text-sm mb-0 text-capitalize">Surveyor</p>
                    <p class="text-sm mb-0 text-capitalize">Male</p>
                    <p class="text-sm mb-0">jason.statham@gmail.com</p>
                    <p class="text-sm mb-0 text-capitalize">Canifonia, USA.</p>
                </div>
            </div>

            <hr class="horizontal dark my-1" />
            <div class="card-body pt-sm-3 pt-0">
                <p class="text-sm d-block mt-2">
                    You can change the sidenav type just on desktop view.
                </p>
                <!-- Navbar Fixed -->
                <div class="mt-3 d-flex">
                    <h6 class="mb-0">Navbar Fixed</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                            onclick="navbarFixed(this)" />
                    </div>
                </div>

                <hr class="horizontal dark my-3" />

                <div class="mt-2 d-flex">
                    <h6 class="mb-0">Light / Dark</h6>
                    <div class="form-check form-switch ps-0 ms-auto my-auto">
                        <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                            onclick="darkMode(this)" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>
