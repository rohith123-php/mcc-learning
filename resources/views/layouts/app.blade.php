<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MCC LMS | Madras Christian College</title>

    <!-- 🎨 Fonts & Icons -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
        :root {
            --primary-maroon: #800000;
            --dark-maroon: #4a0000;
        }

        /* 🛡️ Master Stability Shield */
        html {
            overflow-y: scroll;
            /* Force scrollbar to prevent horizontal shaking */
            overflow-x: hidden;
            width: 100%;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
            overflow-x: hidden;
            width: 100%;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        /* ⚓ Rock-Solid Sticky Header */
        .navbar {
            background: #ffffff !important;
            border-bottom: none !important;
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden;
            transform: translateZ(0);
            -webkit-transform: translateZ(0);
            z-index: 1050;
            transition: none !important;
            /* Kill all jittery transitions */
        }

        .navbar-brand,
        .nav-link,
        .btn-student-portal {
            backface-visibility: hidden;
            will-change: transform;
        }

        .font-weight-black {
            font-weight: 900;
        }

        .navbar-brand {
            color: var(--primary-maroon) !important;
            font-weight: 900;
            font-family: 'Playfair Display', serif;
            display: flex;
            align-items: center;
        }

        .nav-link {
            font-weight: 700;
            color: #334155 !important;
            margin: 0 10px;
            position: relative;
        }

        .nav-link.active {
            color: var(--primary-maroon) !important;
        }

        .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-maroon);
        }

        .nav-link:hover {
            color: var(--primary-maroon) !important;
        }

        .btn-student-portal {
            background: #800000 !important;
            color: #ffffff !important;
            border-radius: 50px;
            padding: 10px 28px;
            font-weight: 800;
            text-transform: uppercase;
            font-size: 0.82rem;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            border: none !important;
            box-shadow: 0 4px 15px rgba(128, 0, 0, 0.15);
            display: inline-flex;
            align-items: center;
            text-decoration: none !important;
        }

        .btn-student-portal:hover, .btn-student-portal:focus, .btn-student-portal:active {
            background: #4a0000 !important;
            color: #ffffff !important;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(128, 0, 0, 0.25);
            outline: none !important;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top py-2 mb-0">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/mcc_logo.png') }}" alt="MCC LMS" style="height: 45px; max-height: 45px; width: auto; object-fit: contain;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link {{ request()->is('/') ? 'active' : '' }}"
                                href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#about-platform') }}">About</a></li>
                        <li class="nav-item"><a class="nav-link {{ request()->is('courses*') ? 'active' : '' }}"
                                href="{{ route('courses.index') }}">Courses</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#popular-courses') }}">Departments</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/#dashboard-section') }}">Notices</a></li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="btn btn-student-portal">
                                <i class="fas fa-user-circle me-2"></i> Student Portal
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <!-- 🏁 Professional Maroon Footer -->
        <footer class="text-white py-5 mt-0" style="background: #800000;">
            <div class="container">
                <div class="row g-5">
                    <!-- Column 1: Logo & Mission -->
                    <div class="col-lg-4">
                        <h4 class="font-weight-black mb-4 d-flex align-items-center">
                            <img src="{{ asset('images/mcc_logo.png') }}" alt="MCC LMS" style="height: 45px; max-height: 45px; width: auto; object-fit: contain; filter: brightness(0) invert(1);">
                        </h4>
                        <p class="text-white-50 mb-4" style="font-size: 0.95rem; line-height: 1.8;">
                            Empowering the next generation of leaders through academic excellence and digital innovation
                            at Madras Christian College.
                        </p>
                        <div class="d-flex gap-2">
                            <a href="#" class="social-box"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-box"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-box"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-box"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>

                    <!-- Column 2: Quick Links -->
                    <div class="col-lg-2">
                        <h6 class="font-weight-bold text-uppercase mb-4" style="letter-spacing: 1px;">Quick Links</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Academic Calendar</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Library Resources</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Exam Portal</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Support Center</a></li>
                        </ul>
                    </div>

                    <!-- Column 3: Departments -->
                    <div class="col-lg-2">
                        <h6 class="font-weight-bold text-uppercase mb-4" style="letter-spacing: 1px;">Departments</h6>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Computer Science</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Business Admin</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Commerce</a></li>
                            <li class="mb-2"><a href="#" class="footer-link"><i
                                        class="fas fa-chevron-right me-2 small"></i> Humanities</a></li>
                        </ul>
                    </div>

                    <!-- Column 4: Contact Us -->
                    <div class="col-lg-4">
                        <h6 class="font-weight-bold text-uppercase mb-4" style="letter-spacing: 1px;">Contact Us</h6>
                        <div class="d-flex mb-3">
                            <div class="contact-icon me-3"><i class="fas fa-map-marker-alt"></i></div>
                            <p class="text-white-50 small mb-0">Madras Christian College<br>Tambaram, Chennai - 600059
                            </p>
                        </div>
                        <div class="d-flex mb-3">
                            <div class="contact-icon me-3"><i class="fas fa-envelope"></i></div>
                            <p class="text-white-50 small mb-0">support.lms@mcc.edu.in</p>
                        </div>
                        <div class="d-flex">
                            <div class="contact-icon me-3"><i class="fas fa-phone-alt"></i></div>
                            <p class="text-white-50 small mb-0">+91 44 1234 5678</p>
                        </div>
                    </div>
                </div>

                <hr class="mt-5 mb-4" style="border-top: 1px solid rgba(255,255,255,0.1);">
                <div class="text-center pb-2">
                    <p class="text-white-50 small mb-0">© 2026 Madras Christian College (Autonomous). All Rights
                        Reserved. Designed for Digital Learning.</p>
                </div>
            </div>
        </footer>
    </div>

    <style>
        .footer-link {
            color: rgba(255, 255, 255, 0.6) !important;
            text-decoration: none;
            font-size: 0.9rem;
            transition: 0.3s;
        }

        .footer-link:hover {
            color: white !important;
            padding-left: 5px;
        }

        .social-box {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.1);
            color: white !important;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            text-decoration: none;
            transition: 0.3s;
        }

        .social-box:hover {
            background: white;
            color: #800000 !important;
        }

        .contact-icon {
            width: 32px;
            height: 32px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            flex-shrink: 0;
        }
    </style>
</body>

</html>

</html>