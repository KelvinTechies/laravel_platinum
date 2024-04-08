<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PlatinumUnion - Online Personal Loan + Full-Service Banking</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Online Personal Loan + Full-Service Banking" name="keywords">
    <meta content="Online Personal Loan + Full-Service Banking" name="description">


    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
</head>

<style>
    .container-fluid .card .obj-flex {
        display: flex;
        gap: 20px;

    }



    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* semi-transparent black */
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        display: none;
        /* Ensure overlay is above everything else */
    }

    .spinner {
        border: 13px solid rgba(0, 0, 0, 0.3);
        border-radius: 50%;
        border-top: 33px solid #007bff;
        width: 150px;
        height: 150px;
        animation: spin 1s linear infinite;
        display: none;
        /* Hide initially */
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 9999;
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    .fixed-plugin .card .obj-flex {
        display: flex;
        gap: 20px;
        align-items: center;
        padding: 1rem 1rem;
    }

    button {
        width: 100%;
    }



    button {
        background-color: #EA4224;
        border: none;
        padding: 8px 10px;
        text-decoration: none;
        font-size: 16px;
        font-weight: 600;
        border-radius: 10px;
    }

    button>span {
        font-size: 16px;
        color: white;
    }
</style>

<body class="g-sidenav-show bg-gray-200">
    <div class="main">
        <aside
            class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
            id="sidenav-main">

            <div class="sidenav-header">

                <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                    aria-hidden="true" id="iconSidenav"></i>

                <a class="navbar-brand m-0" href="#" target="_blank">
                    <img src="{{ asset('assets/img/logo-white.png') }}" class="navbar-brand-img h-100" alt="main_logo">
                </a>

            </div>

            <hr class="horizontal light mt-0 mb-2">
            <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link text-white  @if (Request::segment(1) == '/') active bg-gradient-primary @endif"
                            href=" {{ url('/') }}">

                            <div
                                class="text-white text-center
                            me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">dashboard</i>
                            </div>
                            <span class="nav-link-text ms-1">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white @if (Request::segment(1) == 'transactions') active bg-gradient-primary @endif"
                            href=" {{ url('transactions') }}">

                            <div
                                class="text-white text-center me-2 d-flex
                            align-items-center justify-content-center">
                                <i class="material-icons opacity-10">table_view</i>
                            </div>
                            <span class="nav-link-text ms-1">Transactions</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white  @if (Request::segment(1) == 'account') active bg-gradient-primary @endif"
                            href=" {{ url('account') }}">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">payment</i>
                            </div>
                            <span class="nav-link-text ms-1">Account</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="notifications">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">notifications</i>
                            </div>
                            <span class="nav-link-text ms-1">Notifications</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white " href="profile">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">verified_user</i>
                            </div>
                            <span class="nav-link-text ms-1">User Profile</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="about">
                            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                                <i class="material-icons opacity-10">account_circle</i>
                            </div>
                            <span class="nav-link-text ms-1">About Platinum Union</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <form id="logout-form" action="sign-out" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="nav-link text-white " href="/sign-out"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
                navbar-scroll="true">
                <div class="container-fluid py-1 px-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                    href="javascript:;">Pages</a>
                            </li>
                            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group input-group-outline">
                                <label class="form-label">Search...</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <ul class="navbar-nav  justify-content-end">
                            <form id="logout-form" action="sign-out" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li class="nav-item d-flex align-items-center">
                                <a href="/sign-out"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="nav-link text-body font-weight-bold px-0">
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
                                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                    aria-labelledby="dropdownMenuButton">

                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <i class="material-icons opacity-10">alarm</i>

                                                <div class="d-flex flex-column justify-content-center">

                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        Payment successfully completed
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li class="mb-2">
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <i class="material-icons opacity-10">alarm</i>

                                                <div class="d-flex flex-column justify-content-center">

                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        Payment successfully completed
                                                    </h6>
                                                </div>
                                            </div>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="dropdown-item border-radius-md" href="javascript:;">
                                            <div class="d-flex py-1">
                                                <i class="material-icons opacity-10">alarm</i>

                                                <div class="d-flex flex-column justify-content-center">

                                                    <h6 class="text-sm font-weight-normal mb-1">
                                                        Payment successfully completed
                                                    </h6>
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
            @yield('main')
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
                            class="w-100 border-radius-lg shadow-sm">
                    </div>
                    <div class="text-end pt-1">
                        <h4 class="mb-0">{{ Auth::user()->name }}</h4>
                        <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->occupation }}</p>
                        <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->gender }}</p>
                        <p class="text-sm mb-0">{{ Auth::user()->email }}</p>
                        <p class="text-sm mb-0 text-capitalize">{{ Auth::user()->state }},
                            {{ Auth::user()->country }}.</p>
                    </div>
                </div>

                <hr class="horizontal dark my-1">
                <div class="card-body pt-sm-3 pt-0">

                    <p class="text-sm d-block mt-2">You can change the sidenav type just on desktop view.</p>
                    <!-- Navbar Fixed -->
                    <div class="mt-3 d-flex">
                        <h6 class="mb-0">Navbar Fixed</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                                onclick="navbarFixed(this)">
                        </div>
                    </div>

                    <hr class="horizontal dark my-3">

                    <div class="mt-2 d-flex">
                        <h6 class="mb-0">Light / Dark</h6>
                        <div class="form-check form-switch ps-0 ms-auto my-auto">
                            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version"
                                onclick="darkMode(this)">
                        </div>
                    </div>



                </div>
            </div>
        </div>

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/me.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

        <script>
            var ctx = document.getElementById("chart-bars").getContext("2d");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["M", "T", "W", "T", "F", "S", "S"],
                    datasets: [{
                        label: "Sales",
                        tension: 0.4,
                        borderWidth: 0,
                        borderRadius: 4,
                        borderSkipped: false,
                        backgroundColor: "rgba(255, 255, 255, .8)",
                        data: [50, 20, 10, 22, 50, 10, 40],
                        maxBarThickness: 6
                    }, ],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                suggestedMin: 0,
                                suggestedMax: 500,
                                beginAtZero: true,
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                                color: "#fff"
                            },
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });


            var ctx2 = document.getElementById("chart-line").getContext("2d");

            new Chart(ctx2, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Mobile apps",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(255, 255, 255, .8)",
                        pointBorderColor: "transparent",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });

            var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

            new Chart(ctx3, {
                type: "line",
                data: {
                    labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                    datasets: [{
                        label: "Mobile apps",
                        tension: 0,
                        borderWidth: 0,
                        pointRadius: 5,
                        pointBackgroundColor: "rgba(255, 255, 255, .8)",
                        pointBorderColor: "transparent",
                        borderColor: "rgba(255, 255, 255, .8)",
                        borderWidth: 4,
                        backgroundColor: "transparent",
                        fill: true,
                        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                        maxBarThickness: 6

                    }],
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: false,
                        }
                    },
                    interaction: {
                        intersect: false,
                        mode: 'index',
                    },
                    scales: {
                        y: {
                            grid: {
                                drawBorder: false,
                                display: true,
                                drawOnChartArea: true,
                                drawTicks: false,
                                borderDash: [5, 5],
                                color: 'rgba(255, 255, 255, .2)'
                            },
                            ticks: {
                                display: true,
                                padding: 10,
                                color: '#f8f9fa',
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                        x: {
                            grid: {
                                drawBorder: false,
                                display: false,
                                drawOnChartArea: false,
                                drawTicks: false,
                                borderDash: [5, 5]
                            },
                            ticks: {
                                display: true,
                                color: '#f8f9fa',
                                padding: 10,
                                font: {
                                    size: 14,
                                    weight: 300,
                                    family: "Open Sans",
                                    style: 'normal',
                                    lineHeight: 2
                                },
                            }
                        },
                    },
                },
            });
        </script>

        <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
                var options = {
                    damping: '0.5'
                }
                Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script>

        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

    </div>

    <div class="popup">

        <div class="icon">
            <img src="{{ asset('assets/img/error.png') }}" alt="">
        </div>

        <h2>Error!!!</h2>

        <p class="pending">Transaction Status: <i>PENDING</i></p>
        <h4>Kindly complete your COT payment</h4>
        <p>Dear customer, you are hereby required to make payment of 0801% of the total transaction for COT to complete
            your transaction. Kindly contact customer care for more information/details.</p>

        <a href="mailto:support@platinumunion.credit"> support@platinumunion.credit </a>

        <p class="close-btn">Go back</p>

    </div>

    <div class="overlay" id="overlay">
        <div class="spinner" id="spinner"></div>
    </div>

    <script>
        // Function to start spinner and hide overlay
        function startSpinner() {
            document.getElementById('overlay').style.display = 'flex'; // Show overlay

            let count = 1;
            const spinnerInterval = setInterval(() => {
                document.getElementById('spinner').textContent = count;

                if (count === 100) {
                    clearInterval(spinnerInterval);
                    document.getElementById('overlay').style.display = 'none'; // Hide overlay
                }

                count++;
            }, 50);

            // Hide overlay after 1 second (1000 milliseconds)
            setTimeout(() => {
                document.getElementById('overlay').style.display = 'none';
            }, 1000);
        }

        // Function to handle form submission
        function Trasnsfer(e) {
            e.preventDefault();

            const transferField = document.querySelector('.transferField');
            if (transferField.value === "") {
                alert("Field must not be empty");
                var openPopupButton = document.querySelector("#open-popup");
                if (!openPopupButton.hasAttribute('data-popup-listener-added')) {
                    openPopupButton.setAttribute('data-popup-listener-added', true);
                    openPopupButton.addEventListener("click", function() {
                        setTimeout(() => {
                            document.body.classList.add("active-popup");
                        }, 1000);
                    });
                }
            } else if (transferField.value <= 0) {
                alert("Please insert a reasonable Account Number");
            } else {
                showSpinner(); // Show spinner
                startSpinner(); // Start spinner and hide overlay
            }
        }

        // Show spinner
        function showSpinner() {
            document.getElementById('spinner').style.display = 'block';
        }

        // Hide spinner
        function hideSpinner() {
            document.getElementById('spinner').style.display = 'none';
        }

        // Add event listener for showing the popup if it doesn't exist
        /*   var openPopupButton = document.querySelector("#open-popup");
          if (!openPopupButton.hasAttribute('data-popup-listener-added')) {
              openPopupButton.setAttribute('data-popup-listener-added', true);
              openPopupButton.addEventListener("click", function() {
                  setTimeout(() => {
                      document.body.classList.add("active-popup");
                  }, 1000);
              });
          } */

        // Add event listener for hiding the popup if it doesn't exist
        const closePopupButton = document.querySelector(".popup .close-btn");
        if (!closePopupButton.hasAttribute('data-popup-listener-added')) {
            closePopupButton.setAttribute('data-popup-listener-added', true);
            closePopupButton.addEventListener("click", function() {
                document.body.classList.remove("active-popup");
            });
        }
    </script>

    {{--   <script>
        document.querySelector("#open-popup").addEventListener("click", function() {
            document.body.classList.add("active-popup");
        });

        document.querySelector(".popup .close-btn").addEventListener("click", function() {
            document.body.classList.remove("active-popup");
        });
    </script> --}}

</body>

</html>
