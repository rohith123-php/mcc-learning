@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <h1 class="animate__animated animate__fadeInDown">Madras Christian College Online Learning Portal</h1>
        <p class="animate__animated animate__fadeInUp">Empowering students through digital learning and academic excellence
            at one of India's premier institutions.</p>
        <div class="hero-btns animate__animated animate__zoomIn">
            <a href="#" class="btn-main btn-gold">Explore Courses</a>
            <a href="#" class="btn-main btn-white">Login to Portal</a>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section-padding">
        <div class="section-title">
            <h2>LMS Features</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <i class="fas fa-book-open feature-icon"></i>
                <h3>Online Study Materials</h3>
                <p>Access high-quality lecture notes, e-books, and research papers anytime.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-video feature-icon"></i>
                <h3>Live Classes & Lectures</h3>
                <p>Join interactive live sessions and watch recorded lectures at your convenience.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-file-upload feature-icon"></i>
                <h3>Assignments & Submissions</h3>
                <p>Easy digital submission of assignments with instant feedback from faculty.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-pen-nib feature-icon"></i>
                <h3>Online Exams & Quizzes</h3>
                <p>Secure examination environment for assessments and periodic quizzes.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-chart-line feature-icon"></i>
                <h3>Result & Progress Tracking</h3>
                <p>Monitor your academic performance with detailed analytics and reports.</p>
            </div>
            <div class="feature-card">
                <i class="fas fa-bell feature-icon"></i>
                <h3>Notifications System</h3>
                <p>Stay updated with real-time alerts for classes, exams, and notices.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section-padding" style="background: var(--light-grey);">
        <div class="about-flex">
            <div class="about-content">
                <h2 class="serif" style="font-size: 2.5rem; color: var(--primary-maroon); margin-bottom: 20px;">About MCC
                    LMS</h2>
                <p style="font-size: 1.1rem; margin-bottom: 25px;">The MCC Online Learning Management System is designed to
                    provide students of Madras Christian College, Tambaram with a seamless digital learning experience
                    including classes, materials, assignments, and assessments.</p>
                <p>Our platform bridges the gap between traditional learning and modern technology, ensuring that academic
                    excellence is accessible to every student, anywhere.</p>
            </div>
            <div class="about-image">
                <img src="{{ asset('images/about.png') }}" alt="MCC Classroom">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="stats-grid">
            <div class="stat-item">
                <h3 class="counter">5000+</h3>
                <p>Students</p>
            </div>
            <div class="stat-item">
                <h3 class="counter">200+</h3>
                <p>Faculty Members</p>
            </div>
            <div class="stat-item">
                <h3 class="counter">1000+</h3>
                <p>Study Materials</p>
            </div>
            <div class="stat-item">
                <h3 class="counter">300+</h3>
                <p>Online Exams</p>
            </div>
        </div>
    </section>

    <!-- Dual Content: Notices & Live Classes -->
    <section class="section-padding">
        <div class="dual-grid">
            <!-- Notices Section -->
            <div class="notice-board">
                <h3 class="serif" style="margin-bottom: 30px; color: var(--primary-maroon);"><i class="fas fa-bullhorn"
                        style="margin-right: 15px;"></i>Important Notices</h3>

                <div class="notice-item">
                    <p style="font-weight: 600; margin-bottom: 5px;">End Semester Exam Schedule - April 2026</p>
                    <small style="color: var(--text-muted);">Posted on: April 20, 2026</small>
                </div>
                <div class="notice-item">
                    <p style="font-weight: 600; margin-bottom: 5px;">Circular: Summer Internship Opportunities</p>
                    <small style="color: var(--text-muted);">Posted on: April 18, 2026</small>
                </div>
                <div class="notice-item">
                    <p style="font-weight: 600; margin-bottom: 5px;">Assignment Deadline: Digital Humanities Project</p>
                    <small style="color: var(--text-muted);">Posted on: April 15, 2026</small>
                </div>
                <div class="notice-item">
                    <p style="font-weight: 600; margin-bottom: 5px;">New Study Materials added for Physics Dept.</p>
                    <small style="color: var(--text-muted);">Posted on: April 12, 2026</small>
                </div>

                <a href="#"
                    style="display: block; text-align: center; margin-top: 20px; color: var(--primary-maroon); text-decoration: none; font-weight: 600;">View
                    All Notices <i class="fas fa-arrow-right"></i></a>
            </div>

            <!-- Live Classes Section -->
            <div class="live-classes">
                <h3 class="serif" style="margin-bottom: 30px; color: var(--primary-maroon);"><i class="fas fa-video"
                        style="margin-right: 15px;"></i>Live & Upcoming Classes</h3>

                <div class="class-item">
                    <div>
                        <p style="font-weight: 600; margin-bottom: 2px;">Advanced Economics - Unit 4</p>
                        <small style="color: #27ae60;"><i class="fas fa-circle"
                                style="font-size: 8px; margin-right: 5px;"></i>Live Now</small>
                    </div>
                    <a href="#" class="btn-join">Join Now</a>
                </div>
                <div class="class-item">
                    <div>
                        <p style="font-weight: 600; margin-bottom: 2px;">English Literature - Romanticism</p>
                        <small style="color: var(--text-muted);">Starts at 02:00 PM</small>
                    </div>
                    <a href="#" class="btn-join" style="background: #bdc3c7;">Upcoming</a>
                </div>
                <div class="class-item">
                    <div>
                        <p style="font-weight: 600; margin-bottom: 2px;">Introduction to Computer Science</p>
                        <small style="color: var(--text-muted);">Starts at 03:30 PM</small>
                    </div>
                    <a href="#" class="btn-join" style="background: #bdc3c7;">Upcoming</a>
                </div>
                <div class="class-item">
                    <div>
                        <p style="font-weight: 600; margin-bottom: 2px;">Organic Chemistry - Hydrocarbons</p>
                        <small style="color: var(--text-muted);">Starts at 04:00 PM</small>
                    </div>
                    <a href="#" class="btn-join" style="background: #bdc3c7;">Upcoming</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive JS for counters -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const speed = 200;

            const animateCounters = () => {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.innerText.replace('+', '');
                        const count = +counter.innerText.replace('+', '');

                        // Simple simulation for demo
                        // In a real app we'd start from 0
                    };
                    // Simple static display for this mockup
                });
            };

            // Add a simple scroll animation for cards
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate__animated', 'animate__fadeInUp');
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.feature-card').forEach(card => observer.observe(card));
        });
    </script>
@endsection
