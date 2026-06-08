@extends('layouts.app')

@section('content')
    <div class="homepage-classic">
        <!-- 🖼️ Cinematic Hero Section -->
        <section class="hero-section"
            style="background: linear-gradient(rgba(0,0,0,0.65), rgba(0,0,0,0.65)), url('{{ asset('images/mcc_digital_lab.png') }}'); background-size: cover; background-position: center; min-height: 80vh; display: flex; align-items: center; color: white; margin-top: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 animate__animated animate__fadeInLeft">
                        <h1 class="display-3 mb-2"
                            style="font-weight: 800; letter-spacing: -1px; text-shadow: 2px 2px 10px rgba(0,0,0,0.5);">Learn
                            -
                            Grow - Achieve</h1>
                        <h2 class="h4 mb-4" style="font-weight: 700; opacity: 1;">Start Your Online Learning Journey</h2>
                        <p class="lead mb-5" style="font-size: 1.15rem; opacity: 0.95; max-width: 650px; line-height: 1.6;">
                            Access top-quality digital learning materials, live classes, and interactive assessments through
                            the official university portal designed to enhance your academic excellence.
                        </p>
                        <div class="d-flex flex-wrap gap-3" style="gap: 15px;">
                            <a href="{{ route('courses.index') }}" class="btn btn-maroon px-5 py-3 shadow-sm"
                                style="background: #800000; color: white; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 1.1rem;">Explore
                                Courses <i class="fas fa-arrow-right ml-2" style="font-size: 0.9rem;"></i></a>
                            <a href="{{ route('login') }}" class="btn btn-white px-5 py-3 shadow-sm d-flex align-items-center justify-content-center"
                                style="background: #ffffff !important; border-radius: 8px; font-weight: 700; color: #800000 !important; text-decoration: none; font-size: 1.1rem; border: none; transition: 0.3s;">
                                Student Portal
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features-row" style="margin-top: -60px; position: relative; z-index: 10;">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-md-2-4 col-sm-6">
                        <div class="feature-card text-center p-4 shadow-sm">
                            <div class="icon-circle mb-3 mx-auto"><i class="fas fa-layer-group"></i></div>
                            <h6>Browse Courses</h6>
                        </div>
                    </div>
                    <div class="col-md-2-4 col-sm-6">
                        <div class="feature-card text-center p-4 shadow-sm">
                            <div class="icon-circle mb-3 mx-auto"><i class="fas fa-file-alt"></i></div>
                            <h6>Assignments</h6>
                        </div>
                    </div>
                    <div class="col-md-2-4 col-sm-6">
                        <div class="feature-card text-center p-4 shadow-sm">
                            <div class="icon-circle mb-3 mx-auto"><i class="fas fa-laptop-code"></i></div>
                            <h6>Examinations</h6>
                        </div>
                    </div>
                    <div class="col-md-2-4 col-sm-6">
                        <div class="feature-card text-center p-4 shadow-sm">
                            <div class="icon-circle mb-3 mx-auto"><i class="fas fa-chart-line"></i></div>
                            <h6>Results & Progress</h6>
                        </div>
                    </div>
                    <div class="col-md-2-4 col-sm-6">
                        <div class="feature-card text-center p-4 shadow-sm">
                            <div class="icon-circle mb-3 mx-auto"><i class="fas fa-bell"></i></div>
                            <h6>Notifications</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 🚀 Our Learning Services Section -->
        <section id="services" class="py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="font-weight-black" style="font-size: 2.5rem; color: #1e293b;">Our Learning <span
                            style="color: #800000;">Services</span></h2>
                    <p class="text-muted mx-auto" style="max-width: 600px; font-size: 1.1rem;">Comprehensive digital tools
                        designed to support your academic journey from enrollment to graduation.</p>
                </div>

                <div class="row g-4">
                    <!-- Service 1 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-book-reader"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Digital Study Materials</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Access high-quality lecture notes,
                                e-books, research papers, and department-specific resources anytime, anywhere.</p>
                        </div>
                    </div>
                    <!-- Service 2 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-video"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Live & Recorded Classes</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Join interactive live sessions with
                                faculty or watch recorded lectures at your own pace to revise complex topics.</p>
                        </div>
                    </div>
                    <!-- Service 3 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-tasks"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Assignments & Submissions</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Easily submit digital assignments, track
                                deadlines, and receive prompt feedback and grading from instructors.</p>
                        </div>
                    </div>
                    <!-- Service 4 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-laptop-medical"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Online Exams</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Take secure online examinations, unit
                                tests, and quizzes through our specialized and proctored assessment environment.</p>
                        </div>
                    </div>
                </div>

                <div class="row g-4 mt-2">
                    <!-- Service 5 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-chart-pie"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Performance Tracking</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Monitor your academic growth with detailed
                                analytics, attendance tracking, and comprehensive progress reports.</p>
                        </div>
                    </div>
                    <!-- Service 6 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-comments"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Discussion Forums</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Engage with peers and faculty in
                                dedicated discussion boards to clarify doubts and collaborate on group projects.</p>
                        </div>
                    </div>
                    <!-- Service 7 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-headset"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">24/7 IT Support</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Get round-the-clock technical assistance
                                to resolve access issues and ensure uninterrupted digital learning.</p>
                        </div>
                    </div>
                    <!-- Service 8 -->
                    <div class="col-lg-3 col-md-6">
                        <div class="service-card p-4 h-100 shadow-sm border rounded bg-white">
                            <div class="service-icon mb-4"><i class="fas fa-graduation-cap"
                                    style="font-size: 2.5rem; color: #800000;"></i></div>
                            <h5 class="font-weight-bold mb-3" style="color: #1e293b;">Career Guidance</h5>
                            <p class="text-muted small" style="line-height: 1.6;">Access exclusive placement training,
                                resume building workshops, and connect with top recruiters through our career cell.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 📚 Popular Courses Section -->
        <section id="popular-courses" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="font-weight-black" style="font-size: 2.5rem; color: #1e293b;">Popular <span
                            style="color: #800000;">Courses</span></h2>
                    <div style="width: 60px; height: 4px; background: #800000; margin: 15px auto;"></div>
                </div>
                <div class="row">
                    @foreach ($courses->take(4) as $course)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card border-0 shadow-sm h-100"
                                style="border-radius: 20px; overflow: hidden; background: white; transition: 0.3s;">
                                <div class="course-img-box" style="height: 200px; overflow: hidden;">
                                    <img src="{{ asset('images/' . ($course->image ?? 'course_digital.png')) }}"
                                        class="card-img-top" style="height: 100%; width: 100%; object-fit: cover;">
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="mb-3 text-center">
                                        <span class="badge"
                                            style="background: #fef2f2; color: #800000; font-weight: 800; font-size: 0.7rem; letter-spacing: 0.5px; text-transform: uppercase; border-radius: 50px; padding: 8px 16px;">
                                            {{ $course->category }}
                                        </span>
                                    </div>
                                    <h5 class="font-weight-bold mb-3 text-center"
                                        style="color: #1e293b; line-height: 1.3; font-size: 1.25rem;">
                                        {{ $course->title }}
                                    </h5>
                                    <p class="text-muted small mb-4 text-center" style="line-height: 1.6; flex-grow: 1;">
                                        {{ Str::limit($course->description, 85) }}
                                    </p>

                                    <div class="d-flex justify-content-center gap-4 mb-4 pb-3 border-bottom" style="gap: 15px;">
                                        <div class="text-muted small font-weight-bold d-flex align-items-center">
                                            <i class="far fa-clock mr-2" style="color: #800000; font-size: 0.9rem;"></i>
                                            {{ $course->duration }}
                                        </div>
                                        <div class="text-muted small font-weight-bold d-flex align-items-center">
                                            <i class="fas fa-users mr-2" style="color: #800000; font-size: 0.9rem;"></i>
                                            1.2k+
                                        </div>
                                    </div>

                                    <div class="mt-auto d-flex flex-wrap justify-content-center align-items-center"
                                        style="gap: 15px;">
                                        <div class="text-center">
                                            @if(($course->price ?? 0) > 0)
                                                <div class="font-weight-black"
                                                    style="color: #800000; font-size: 1.1rem; line-height: 1;">
                                                    ₹{{ number_format($course->price, 2) }}</div>
                                            @else
                                                <div class="font-weight-black"
                                                    style="color: #800000; font-size: 1.1rem; line-height: 1;">FREE</div>
                                            @endif
                                        </div>
                                        <a href="{{ route('courses.index') }}" class="btn btn-outline-maroon px-4 py-2 rounded-pill font-weight-bold small">View Details<i class="fas fa-chevron-right ms-2" style="font-size: 0.7rem;"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- 🎓 About the Platform Section -->
        <section id="about-platform" class="py-5">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Left Content -->
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <span class="badge mb-3 p-2 px-3"
                            style="background: #fdf2f2; color: #800000; font-weight: 800; font-size: 0.75rem; border-radius: 50px; text-transform: uppercase;">
                            About the Platform
                        </span>
                        <h2 class="display-5 font-weight-black mb-4" style="color: #1e293b; line-height: 1.2;">
                            Empowering Students Through Digital Excellence
                        </h2>
                        <p class="text-muted mb-5" style="font-size: 1.1rem; line-height: 1.7;">
                            Our online learning platform is built specifically for modern university students. It
                            seamlessly bridges the gap between traditional classroom learning and digital accessibility,
                            providing a unified ecosystem for all your academic needs.
                        </p>

                        <div class="row g-4 mb-5">
                            <div class="col-md-6 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="icon-small-box mr-3"
                                        style="background: #fdf2f2; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #800000;">
                                        <i class="fas fa-home"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 font-weight-bold">Learn Anywhere</h6>
                                        <small class="text-muted">Access on any device</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="icon-small-box mr-3"
                                        style="background: #fdf2f2; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #800000;">
                                        <i class="fas fa-book-open"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 font-weight-bold">Rich Materials</h6>
                                        <small class="text-muted">Comprehensive resources</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="icon-small-box mr-3"
                                        style="background: #fdf2f2; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #800000;">
                                        <i class="fas fa-user-friends"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 font-weight-bold">Interactive</h6>
                                        <small class="text-muted">Live interactive sessions</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="d-flex align-items-center">
                                    <div class="icon-small-box mr-3"
                                        style="background: #fdf2f2; width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #800000;">
                                        <i class="fas fa-chart-line"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 font-weight-bold">Track Progress</h6>
                                        <small class="text-muted">Detailed analytics</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="btn btn-maroon px-5 py-3 shadow"
                            style="background: #800000; color: white; border-radius: 8px; font-weight: 700; text-decoration: none;">Discover
                            More <i class="fas fa-arrow-right ml-2"></i></a>
                    </div>

                    <!-- Right Image Collage -->
                    <div class="col-lg-6">
                        <div class="collage-container position-relative ml-lg-auto" style="max-width: 550px;">
                            <!-- Main Large Image -->
                            <div class="main-img rounded-lg shadow-lg overflow-hidden" style="border-radius: 20px;">
                                <img src="{{ asset('images/mcc_library_main.png') }}" class="w-100"
                                    style="object-fit: cover; height: 400px;">
                            </div>
                            <!-- Floating Smaller Img 1 -->
                            <div class="floating-img-1 position-absolute shadow-lg border-white"
                                style="top: -20px; left: -20px; width: 260px; border-radius: 20px; border: 10px solid white; overflow: hidden; z-index: 2; transition: transform 0.4s ease;">
                                <img src="{{ asset('images/student_study_1.png') }}" class="w-100">
                            </div>
                            <!-- Floating Smaller Img 2 -->
                            <div class="floating-img-2 position-absolute shadow-lg border-white"
                                style="bottom: -50px; left: -20px; width: 220px; border-radius: 15px; border: 8px solid white; overflow: hidden; z-index: 3;">
                                <img src="{{ asset('images/student_study_2.png') }}" class="w-100">
                            </div>
                            <!-- Excellence Badge -->
                            <div class="excellence-badge position-absolute shadow-lg"
                                style="bottom: 20px; right: -40px; width: 130px; height: 130px; background: #800000; border-radius: 50%; display: flex; flex-direction: column; align-items: center; justify-content: center; color: white; text-align: center; border: 8px solid white; z-index: 4; box-shadow: 0 15px 35px rgba(128,0,0,0.3) !important;">
                                <span
                                    style="font-weight: 900; font-size: 2rem; line-height: 1.1; display: block;">10+</span>
                                <span
                                    style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.5px; line-height: 1.2;">Years
                                    Of<br>Excellence</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 📊 Animated Stats Section -->
        <section id="stats-section" class="py-5 bg-white border-top border-bottom">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-user-graduate mb-3" style="font-size: 3.5rem; color: #800000;"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="font-weight-black counter mb-0" data-target="5000"
                                    style="color: #800000; font-size: 4rem;">0</h2>
                                <span class="font-weight-bold h2 mb-0 ml-1" style="color: #800000;">+</span>
                            </div>
                            <p class="text-muted small font-weight-black mt-2"
                                style="letter-spacing: 2px; text-transform: uppercase;">Students Enrolled</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-chalkboard-teacher mb-3" style="font-size: 3.5rem; color: #800000;"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="font-weight-black counter mb-0" data-target="200"
                                    style="color: #800000; font-size: 4rem;">0</h2>
                                <span class="font-weight-bold h2 mb-0 ml-1" style="color: #800000;">+</span>
                            </div>
                            <p class="text-muted small font-weight-black mt-2"
                                style="letter-spacing: 2px; text-transform: uppercase;">Expert Faculty</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-book-reader mb-3" style="font-size: 3.5rem; color: #800000;"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="font-weight-black counter mb-0" data-target="1000"
                                    style="color: #800000; font-size: 4rem;">0</h2>
                                <span class="font-weight-bold h2 mb-0 ml-1" style="color: #800000;">+</span>
                            </div>
                            <p class="text-muted small font-weight-black mt-2"
                                style="letter-spacing: 2px; text-transform: uppercase;">Digital Resources</p>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="stat-item">
                            <i class="fas fa-laptop-code mb-3" style="font-size: 3.5rem; color: #800000;"></i>
                            <div class="d-flex align-items-center justify-content-center">
                                <h2 class="font-weight-black counter mb-0" data-target="300"
                                    style="color: #800000; font-size: 4rem;">0</h2>
                                <span class="font-weight-bold h2 mb-0 ml-1" style="color: #800000;">+</span>
                            </div>
                            <p class="text-muted small font-weight-black mt-2"
                                style="letter-spacing: 2px; text-transform: uppercase;">Exams Conducted</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script>
            // 🔢 Counter Animation Logic
            const startCounters = () => {
                const counters = document.querySelectorAll('.counter');
                const speed = 200;

                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        const inc = target / speed;

                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 1);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
            };

            // Trigger when visible
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    startCounters();
                    observer.disconnect();
                }
            }, {
                threshold: 0.5
            });

            if (document.querySelector('#stats-section')) {
                observer.observe(document.querySelector('#stats-section'));
            }
        </script>

        <!-- 📢 Dashboard Section: Announcements & Sessions -->
        <section id="dashboard-section" class="py-5" style="background: #f8fafc;">
            <div class="container">
                <div class="row g-4">
                    <!-- Column 1: Announcements -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-header bg-white p-4 border-bottom-0">
                                <h5 class="font-weight-bold mb-0" style="color: #1e293b;">
                                    <i class="fas fa-bullhorn mr-2" style="color: #800000;"></i> Latest Announcements
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item p-4 border-light">
                                        <h6 class="font-weight-bold mb-1" style="color: #1e293b;">End Semester Exam Schedule
                                            Published</h6>
                                        <small class="text-muted">April 25, 2026 • <span style="color: #64748b;">Examination
                                                Board</span></small>
                                    </li>
                                    <li class="list-group-item p-4 border-light">
                                        <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Registration Open for
                                            Summer Electives</h6>
                                        <small class="text-muted">April 22, 2026 • <span style="color: #64748b;">Academic
                                                Office</span></small>
                                    </li>
                                    <li class="list-group-item p-4 border-light">
                                        <h6 class="font-weight-bold mb-1" style="color: #1e293b;">System Maintenance Notice
                                        </h6>
                                        <small class="text-muted">April 20, 2026 • <span style="color: #64748b;">IT
                                                Support</span></small>
                                    </li>
                                    <li class="list-group-item p-4 border-light">
                                        <h6 class="font-weight-bold mb-1" style="color: #1e293b;">New E-Library Resources
                                            Available</h6>
                                        <small class="text-muted">April 18, 2026 • <span style="color: #64748b;">Central
                                                Library</span></small>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white p-3 text-center border-top-0">
                                <a href="#" class="font-weight-bold small"
                                    style="color: #800000; text-decoration: none;">View All Announcements <i
                                        class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2: Upcoming Sessions -->
                    <div class="col-lg-6">
                        <div class="card border-0 shadow-sm h-100" style="border-radius: 12px; overflow: hidden;">
                            <div class="card-header bg-white p-4 border-bottom-0">
                                <h5 class="font-weight-bold mb-0" style="color: #1e293b;">
                                    <i class="fas fa-video mr-2" style="color: #800000;"></i> Upcoming Sessions
                                </h5>
                            </div>
                            <div class="card-body p-0">
                                <ul class="list-group list-group-flush">
                                    <li
                                        class="list-group-item p-4 border-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Advanced Data
                                                Structures - Graph Theory</h6>
                                            <small class="text-muted">Prof. Alan Turing • <span
                                                    style="color: #64748b;">Computer Science</span></small>
                                        </div>
                                        <span class="badge"
                                            style="background: #fee2e2; color: #b91c1c; font-size: 0.65rem; padding: 6px 12px; border-radius: 50px;">LIVE
                                            NOW</span>
                                    </li>
                                    <li
                                        class="list-group-item p-4 border-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Web Engineering -
                                                React Basics</h6>
                                            <small class="text-muted">Starts at 02:00 PM • <span
                                                    style="color: #64748b;">Today</span></small>
                                        </div>
                                        <span class="badge"
                                            style="background: #f1f5f9; color: #64748b; font-size: 0.65rem; padding: 6px 12px; border-radius: 50px;">UPCOMING</span>
                                    </li>
                                    <li
                                        class="list-group-item p-4 border-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Business Ethics
                                                Seminar</h6>
                                            <small class="text-muted">Starts at 04:30 PM • <span
                                                    style="color: #64748b;">Today</span></small>
                                        </div>
                                        <span class="badge"
                                            style="background: #f1f5f9; color: #64748b; font-size: 0.65rem; padding: 6px 12px; border-radius: 50px;">UPCOMING</span>
                                    </li>
                                    <li
                                        class="list-group-item p-4 border-light d-flex justify-content-between align-items-center">
                                        <div>
                                            <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Software Architecture
                                                Patterns</h6>
                                            <small class="text-muted">Starts at 10:00 AM • <span
                                                    style="color: #64748b;">Tomorrow</span></small>
                                        </div>
                                        <span class="badge"
                                            style="background: #f1f5f9; color: #64748b; font-size: 0.65rem; padding: 6px 12px; border-radius: 50px;">UPCOMING</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer bg-white p-3 text-center border-top-0">
                                <a href="#" class="font-weight-bold small"
                                    style="color: #800000; text-decoration: none;">View Full Schedule <i
                                        class="fas fa-arrow-right ml-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 🚀 Final CTA Banner Section -->
        <section class="pt-4 pb-md-5 pb-3 mb-md-5 mb-0" style="background: #f8fafc;">
            <div class="container">
                <div class="card border-0 shadow-sm p-5 position-relative overflow-hidden"
                    style="border-radius: 20px; background: white;">
                    <div class="row align-items-center position-relative" style="z-index: 2;">
                        <div class="col-lg-7">
                            <h2 class="display-4 font-weight-black mb-3" style="color: #1e293b; line-height: 1.1;">
                                Begin Your Journey With MCC Today
                            </h2>
                            <p class="text-muted mb-5" style="font-size: 1.15rem; max-width: 550px; line-height: 1.7;">
                                Join our thriving academic community and access world-class resources, expert faculty, and a
                                comprehensive digital learning experience.
                            </p>
                            <div class="d-flex flex-wrap gap-3" style="gap: 15px;">
                                <a href="{{ route('apply') }}" class="btn btn-maroon px-5 py-3 shadow-sm d-flex align-items-center"
                                    style="background: #800000; color: white; border-radius: 8px; font-weight: 700; text-decoration: none;">
                                    <i class="fas fa-graduation-cap mr-2"></i> Apply Now
                                </a>
                                <a href="{{ route('login') }}" class="btn btn-maroon px-5 py-3 shadow-sm d-flex align-items-center"
                                    style="background: #800000; color: white; border-radius: 8px; font-weight: 700; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fas fa-sign-in-alt mr-2"></i> Portal Login
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Faint University Watermark Icon -->
                    <div class="position-absolute"
                        style="right: -40px; bottom: -60px; opacity: 0.08; z-index: 1; transform: rotate(-15deg);">
                        <i class="fas fa-university" style="font-size: 30rem; color: #1e293b;"></i>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        /* 🛡️ Stabilization & Smoothness Patch */
        body,
        html {
            overflow-x: hidden;
            width: 100%;
        }

        .homepage-classic {
            overflow-x: hidden;
        }

        /* Prevent Jitter on Hover/Animation */
        .feature-card,
        .service-card,
        .card,
        .stat-item,
        .collage-container img {
            backface-visibility: hidden;
            -webkit-font-smoothing: subpixel-antialiased;
            will-change: transform;
        }

        .col-md-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }

        /* 📱 Responsive Adjustments */
        @media (max-width: 991px) {
            .hero-section {
                min-height: auto !important;
                padding: 120px 0 100px;
                text-align: center;
            }

            .hero-section h1 {
                font-size: 2.4rem !important;
                line-height: 1.1 !important;
                margin-bottom: 25px !important;
            }

            .hero-section h2 {
                font-size: 1.3rem !important;
                line-height: 1.4 !important;
                margin-bottom: 30px !important;
            }

            .hero-section p {
                font-size: 1rem !important;
                line-height: 1.7 !important;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 40px !important;
            }

            .hero-section .d-flex {
                justify-content: center;
                flex-direction: column;
                align-items: center;
            }

            .hero-section .btn {
                width: 100%;
                max-width: 320px;
                padding: 15px 30px !important;
                font-size: 1rem !important;
            }

            .features-row {
                margin-top: -30px !important;
            }

            .col-md-2-4 {
                flex: 0 0 50%;
                max-width: 50%;
            }

            .display-5 {
                font-size: 2.2rem !important;
                line-height: 1.1 !important;
                text-align: center;
                margin-bottom: 20px !important;
            }

            .display-4 {
                font-size: 1.8rem !important;
                line-height: 1.1 !important;
                text-align: center;
                margin-bottom: 15px !important;
            }

            #about-platform {
                text-align: center;
            }

            #about-platform p {
                margin-left: auto;
                margin-right: auto;
            }

            #about-platform .d-flex.align-items-center {
                justify-content: center;
                flex-direction: column;
                text-align: center;
            }

            #about-platform .mr-3 {
                margin-right: 0 !important;
                margin-bottom: 10px;
            }

            .card.p-5.position-relative {
                text-align: center;
                padding: 30px 20px !important;
            }

            .card.p-5.position-relative p {
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 30px !important;
                font-size: 0.95rem !important;
                line-height: 1.6 !important;
            }

            .card.p-5.position-relative .d-flex {
                justify-content: center;
                flex-direction: column !important;
                align-items: center;
                gap: 12px !important;
            }

            .card.p-5.position-relative .btn {
                width: 100%;
                max-width: 280px;
                padding: 12px 20px !important;
                margin: 0 !important;
            }

            #popular-courses .card-body {
                text-align: center;
            }

            #popular-courses .card-body .d-flex {
                justify-content: center;
            }

            .collage-container {
                margin-left: 0 !important;
                margin-top: 60px;
                padding-bottom: 60px;
            }

            .floating-img-1 {
                width: 180px !important;
                top: -30px !important;
                left: -20px !important;
            }

            .floating-img-2 {
                width: 160px !important;
                bottom: -30px !important;
            }

            .excellence-badge {
                width: 100px !important;
                height: 100px !important;
                right: -10px !important;
            }
        }

        @media (max-width: 767px) {
            .hero-section h1 {
                font-size: 2.2rem !important;
            }

            .stat-item h2 {
                font-size: 3rem !important;
            }

            .stat-item i {
                font-size: 2.5rem !important;
            }

            .col-md-2-4 {
                flex: 0 0 100%;
                max-width: 100%;
            }

            .service-card {
                padding: 30px 20px !important;
                text-align: center;
            }

            .service-icon {
                display: flex;
                justify-content: center;
            }

            .service-icon i {
                font-size: 2rem !important;
            }
        }

        .icon-circle {
            background: #fdf2f2;
            color: #800000;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .feature-card:hover .icon-circle {
            background: #800000;
            color: white;
            transform: scale(1.1);
        }

        .feature-card h6 {
            font-weight: 700;
            color: #1e293b;
            font-size: 0.95rem;
            margin-top: 10px;
        }

        .feature-card {
            background: white;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-bottom: 3px solid transparent !important;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
            border-bottom: 3px solid #800000 !important;
        }

        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            background: white;
            border: 1.5px solid transparent !important;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08) !important;
            border-color: #800000 !important;
        }

        .btn-outline-maroon {
            border: 2px solid #800000;
            color: #800000;
            transition: all 0.3s ease;
        }

        .btn-outline-maroon:hover {
            background: #800000;
            color: white !important;
        }

        .list-group-item {
            transition: all 0.2s ease;
            cursor: pointer;
        }

        .list-group-item:hover {
            background-color: #fdf2f2 !important;
        }

        /* Smooth Scroll Smoothing */
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection