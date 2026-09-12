<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Log Masuk | MyGred</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('template/src/assets/img/mbi_logo2.png') }}" />
    <link href="{{ asset('template/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('template/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- <script src="./layouts/vertical-light-menu/loader.js"></script> -->
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <!-- /Google Fonts -->
    <link href="{{ asset('template/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/utilities/utilities.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/plugins/src/waves/waves.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/light/main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/dark/main.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('template/src/assets/css/light/theme-customizer.css') }}">
    <link rel="stylesheet" href="{{ asset('template/src/assets/css/dark/theme-customizer.css') }}">

    <link href="{{ asset('template/src/assets/css/light/pages/layout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/light/pages/auth-cover.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('template/src/assets/css/dark/pages/layout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template/src/assets/css/dark/pages/auth-cover.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <style>
        /* =========================================================
   LOGIN ERROR ALERT
========================================================= */

        .login-alert {
            display: flex;
            align-items: flex-start;
            gap: 12px;

            padding: 14px 16px;

            background: #fff5f5;
            border: 1px solid #ffd8d8;
            border-left: 4px solid #e7515a;

            border-radius: 8px;
        }

        .login-alert-icon {
            width: 38px;
            height: 38px;

            min-width: 38px;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #ffe3e3;
            color: #e7515a;

            border-radius: 50%;
        }

        .login-alert-content {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .login-alert-content strong {
            font-size: 14px;
            font-weight: 600;
            color: #c92a2a;
        }

        .login-alert-content span {
            font-size: 12px;
            line-height: 1.5;
            color: #868e96;
        }


        /* =========================================================
   PASSWORD SHOW / HIDE
========================================================= */

        .password-wrapper {
            position: relative;
        }

        .password-input {
            padding-right: 50px !important;
        }

        .password-toggle {
            position: absolute;

            top: 50%;
            right: 15px;

            transform: translateY(-50%);

            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 0;

            border: none;
            outline: none;

            background: transparent;

            color: #888ea8;

            cursor: pointer;

            z-index: 10;

            transition: all 0.2s ease;
        }

        .password-toggle:hover {
            color: #805dca;
        }

        .password-toggle:focus {
            outline: none;
            box-shadow: none;
        }
    </style>
</head>

<body data-page="true" class="page-auth-cover">

    <!-- BEGIN LOADER -->
    <!-- <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div> -->
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <nav class="navbar fixed-top navbar-expand-lg">

        <div class="container-xl">

            <div class="d-flex align-items-center">
                <a class="navbar-brand" href="https://designreset.com/cork-admin/">
                    <img src="{{ asset('template/src/assets/img/mbi_logo2.png') }}" alt="logo">
                </a>
            </div>


        </div>
    </nav>
    <!--  END NAVBAR  -->

    <!-- Theme Customizer Overlay -->
    <div class="tc-overlay"></div>
    <!-- ./End Theme Customizer Overlay -->

    <!-- Authentication - Sign In Cover -->
    <div id="auth-cover" class="auth-container">

        <div class="container mx-auto align-self-center">

            <div class="row">

                <div class="col-5 d-lg-flex d-none h-100 my-auto top-0 start-0 flex-column">
                    <div class="auth-cover-bg-image"></div>
                    <div class="auth-overlay"></div>

                    <div class="auth-cover">

                        <div class="position-relative">

                            <img src="{{ asset('template/src/assets/img/pages/auth/login.png') }}"
                                alt="faq-category-alt">

                            <h1 class="mt-5 mb-4 px-2">Sistem Pengredan Premis Makanan dan Tandas</h1>
                            <p class="px-2">Memastikan premis makanan dan tandas sentiasa bersih, selamat dan
                                berkualiti untuk kesejahteraan komuniti.</p>

                        </div>

                    </div>

                </div>

                <div
                    class="col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center ms-lg-auto me-lg-0 mx-auto">
                    <div class="card">
                        <div class="card-body">

                            {{-- =========================================================
                                SESSION STATUS
                            ========================================================== --}}
                            @if (session('status'))
                                <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
                                    <div class="me-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">

                                            <path d="M20 6 9 17l-5-5"></path>
                                        </svg>
                                    </div>

                                    <div>
                                        {{ session('status') }}
                                    </div>
                                </div>
                            @endif


                            {{-- =========================================================
                                LOGIN ERROR ALERT
                            ========================================================== --}}
                            @if ($errors->any())
                                <div class="login-alert mb-4">

                                    <div class="login-alert-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">

                                            <circle cx="12" cy="12" r="10"></circle>
                                            <line x1="12" y1="8" x2="12" y2="12">
                                            </line>
                                            <line x1="12" y1="16" x2="12.01" y2="16">
                                            </line>
                                        </svg>
                                    </div>

                                    <div class="login-alert-content">
                                        <strong>Log masuk tidak berjaya</strong>

                                        <span>
                                            Emel atau kata laluan yang dimasukkan tidak tepat.
                                            Sila cuba semula.
                                        </span>
                                    </div>

                                </div>
                            @endif


                            <div class="row">

                                {{-- =========================================================
                                    HEADING
                                ========================================================== --}}
                                <div class="col-md-12 mb-4">

                                    <h2>
                                        Log Masuk
                                    </h2>

                                    <p class="mb-0 text-muted">
                                        Masukkan emel dan kata laluan anda.
                                    </p>

                                </div>


                                {{-- =========================================================
                                    FORM
                                ========================================================== --}}
                                <form method="POST" action="{{ route('login') }}">

                                    @csrf


                                    {{-- =====================================================
                                        EMAIL
                                    ====================================================== --}}
                                    <div class="col-md-12 mb-4">

                                        <div class="form-group">

                                            <div class="form-float">

                                                <input type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    id="email" name="email" value="{{ old('email') }}"
                                                    placeholder="Email" required autofocus autocomplete="username">

                                                <label for="email">
                                                    Email
                                                </label>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- =====================================================
                                        PASSWORD
                                    ====================================================== --}}
                                    <div class="col-12 mb-4">

                                        <div class="form-group">

                                            @if (Route::has('password.request'))
                                                <div class="text-end pass-reset">

                                                    <a href="{{ route('password.request') }}">
                                                        Lupa Kata Laluan?
                                                    </a>

                                                </div>
                                            @endif


                                            <div class="form-float password-wrapper">

                                                <input type="password"
                                                    class="form-control password-input @error('password') is-invalid @enderror"
                                                    id="password" name="password" placeholder="Kata Laluan" required
                                                    autocomplete="current-password">

                                                <label for="password">
                                                    Kata Laluan
                                                </label>


                                                {{-- SHOW / HIDE PASSWORD --}}
                                                <button type="button" class="password-toggle" id="togglePassword"
                                                    aria-label="Lihat kata laluan">

                                                    {{-- EYE --}}
                                                    <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">

                                                        <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7S2 12 2 12z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>

                                                    </svg>


                                                    {{-- EYE OFF --}}
                                                    <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg"
                                                        width="20" height="20" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        style="display: none;">

                                                        <path
                                                            d="M17.94 17.94A10.94 10.94 0 0 1 12 20c-7 0-10-8-10-8a18.3 18.3 0 0 1 5.06-5.94">
                                                        </path>

                                                        <path
                                                            d="M9.9 4.24A10.6 10.6 0 0 1 12 4c7 0 10 8 10 8a18.5 18.5 0 0 1-2.17 3.19">
                                                        </path>

                                                        <line x1="1" y1="1" x2="23"
                                                            y2="23"></line>

                                                    </svg>

                                                </button>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- =====================================================
                                        REMEMBER ME
                                    ====================================================== --}}
                                    <div class="col-12">

                                        <div class="mb-3">

                                            <div class="form-check form-check-primary form-check-inline">

                                                <input class="form-check-input me-3" type="checkbox" id="remember"
                                                    name="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">

                                                    Ingat Saya

                                                </label>

                                            </div>

                                        </div>

                                    </div>


                                    {{-- =====================================================
                                        LOGIN BUTTON
                                    ====================================================== --}}
                                    <div class="col-12">

                                        <button type="submit" class="btn btn-gradient-secondary w-100">

                                            LOG MASUK

                                        </button>

                                    </div>

                                </form>

                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- ./End Authentication - Sign In Cover -->


    <div class="page-overlay"></div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('template/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/splide/splide.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('template/src/plugins/src/waves/waves.min.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('template/src/assets/js/pages/pages.js') }}"></script>
    <script src="{{ asset('template/src/assets/js/pages/faqs.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('togglePassword');

            const eyeOpen = document.getElementById('eyeOpen');
            const eyeClosed = document.getElementById('eyeClosed');

            if (passwordInput && togglePassword) {

                togglePassword.addEventListener('click', function() {

                    const isPassword = passwordInput.type === 'password';

                    passwordInput.type = isPassword ? 'text' : 'password';

                    if (isPassword) {

                        eyeOpen.style.display = 'none';
                        eyeClosed.style.display = 'block';

                        togglePassword.setAttribute(
                            'aria-label',
                            'Sembunyikan kata laluan'
                        );

                    } else {

                        eyeOpen.style.display = 'block';
                        eyeClosed.style.display = 'none';

                        togglePassword.setAttribute(
                            'aria-label',
                            'Lihat kata laluan'
                        );

                    }

                });

            }

        });
    </script>
</body>

</html>
