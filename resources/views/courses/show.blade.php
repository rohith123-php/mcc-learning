@extends('layouts.app')

@section('content')
    <div class="v20-lms-pro">
        <!-- 🏔️ Top Section (Hero Course Header) -->
        <section class="v20-hero" style="background: linear-gradient(rgba(128, 0, 0, 0.75), rgba(74, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; margin-top: 0;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-10">
                        <nav aria-label="breadcrumb" class="mb-4">
                            <ol class="breadcrumb bg-transparent p-0 m-0"
                                style="font-size: 0.85rem; font-weight: 500; letter-spacing: 0.5px;">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}"
                                        class="text-white opacity-75 text-decoration-none">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('courses.index') }}"
                                        class="text-white opacity-75 text-decoration-none">Courses</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">{{ $course['title'] }}
                                </li>
                            </ol>
                        </nav>
                        <h1 class="animate__animated animate__fadeInUp mb-3" style="text-shadow: 0 4px 20px rgba(0,0,0,0.5); font-size: 3.5rem; letter-spacing: -1.5px;">{{ $course['title'] }}</h1>
                        <p class="lead mb-4 text-white" style="max-width: 800px; line-height: 1.6; font-weight: 500; opacity: 0.9;">
                            {{ $course['description'] ?? 'Master the fundamental principles and advanced techniques in this comprehensive academic program designed for future leaders.' }}
                        </p>

                        <div class="v20-hero-meta animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                            <span class="bg-white bg-opacity-10 px-3 py-2 rounded-pill mr-2"><i class="fas fa-signal"></i> {{ $course['level'] ?? 'Beginner' }}</span>
                            <span class="bg-white bg-opacity-10 px-3 py-2 rounded-pill mr-2"><i class="fas fa-users"></i> 1,248 Students</span>
                            <span class="bg-white bg-opacity-10 px-3 py-2 rounded-pill"><i class="fas fa-clock"></i> {{ $course['duration'] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 📑 Professional Tabs UI -->
        <nav class="v20-tabs-nav shadow-sm">
            <div class="container">
                <ul class="nav" id="lmsTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="overview-tab" data-bs-toggle="tab" href="#overview"
                            role="tab">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="curriculum-tab" data-bs-toggle="tab" href="#curriculum"
                            role="tab">Curriculum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="schedule-tab" data-bs-toggle="tab" href="#schedule" role="tab">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="assignments-tab" data-bs-toggle="tab" href="#assignments"
                            role="tab">Assignments</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="container py-5">
            <div class="row">
                <!-- ⬅️ Main Content Area -->
                <div class="col-lg-8">
                    <div class="tab-content" id="lmsTabsContent">

                        <!-- 📑 Overview Tab -->
                        <div class="tab-pane fade show active" id="overview" role="tabpanel">
                            <div class="v20-card animate__animated animate__fadeIn">
                                <h3 class="mb-4 font-weight-bold" style="font-size: 1.5rem;">About this Course</h3>
                                <p style="line-height: 1.8; color: #475569;">{{ $course['description'] }} This program is
                                    designed to provide students with a deep understanding of core academic principles while
                                    fostering practical skills necessary for professional excellence. Throughout this
                                    course, you will engage with industry-standard tools and methodologies.</p>

                                <div class="mt-5">
                                    <h4 class="mb-4 font-weight-bold" style="font-size: 1.25rem;">What you'll learn</h4>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <i class="fas fa-check-circle text-success mt-1"></i>
                                                <span style="font-weight: 500; color: #1e293b;">Industry-standard
                                                    methodologies</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <i class="fas fa-check-circle text-success mt-1"></i>
                                                <span style="font-weight: 500; color: #1e293b;">Advanced architectural
                                                    patterns</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <i class="fas fa-check-circle text-success mt-1"></i>
                                                <span style="font-weight: 500; color: #1e293b;">Real-time project
                                                    implementation</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <div class="d-flex align-items-start gap-3">
                                                <i class="fas fa-check-circle text-success mt-1"></i>
                                                <span style="font-weight: 500; color: #1e293b;">Production-ready
                                                    deployment</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-5 pt-4 border-top">
                                    <h4 class="mb-3 font-weight-bold" style="font-size: 1.25rem;">Requirements</h4>
                                    <ul class="list-unstyled" style="color: #475569;">
                                        <li class="mb-2"><i class="fas fa-circle mr-2"
                                                style="font-size: 0.5rem; vertical-align: middle; color: #800000; opacity: 0.5;"></i>
                                            Basic understanding of the subject matter.</li>
                                        <li class="mb-2"><i class="fas fa-circle mr-2"
                                                style="font-size: 0.5rem; vertical-align: middle; color: #800000; opacity: 0.5;"></i>
                                            Access to a computer with stable internet connection.</li>
                                        <li class="mb-2"><i class="fas fa-circle mr-2"
                                                style="font-size: 0.5rem; vertical-align: middle; color: #800000; opacity: 0.5;"></i>
                                            Dedication to complete 4-6 hours of study per week.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 📂 Curriculum Tab -->
                        <div class="tab-pane fade" id="curriculum" role="tabpanel">
                            <div class="v20-card">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h3 class="m-0 font-weight-bold" style="font-size: 1.5rem;">Course Curriculum</h3>
                                    <span class="text-muted small font-weight-bold">4 Sections • 18 Lessons</span>
                                </div>
                                <div class="v20-accordion" id="curriculumAccordion">
                                    @php
                                        $modules = [
                                            ['title' => 'Phase 1: Foundations & Core Concepts', 'lessons' => ['Introduction to the Program', 'Historical Context & Evolution', 'Setting up your Workspace', 'First Practical Workshop']],
                                            ['title' => 'Phase 2: Intermediate Implementation', 'lessons' => ['Advanced Theoretical Frameworks', 'System Architecture Design', 'Data Management Strategies', 'Mid-Term Assessment Review']],
                                            ['title' => 'Phase 3: Advanced Optimization', 'lessons' => ['Performance Tuning Techniques', 'Security Best Practices', 'Scaling for Production', 'Peer Review Sessions']],
                                            ['title' => 'Phase 4: Capstone & Certification', 'lessons' => ['Final Project Kickoff', 'Expert Mentorship Session', 'Final Presentation Prep', 'Course Conclusion & Graduation']]
                                        ];
                                    @endphp
                                    @foreach($modules as $index => $module)
                                        <div class="card mb-3 shadow-none border">
                                            <div class="card-header" id="heading{{ $index }}">
                                                <button class="btn btn-link py-3 px-4" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{ $index }}">
                                                    <span style="font-size: 1rem; color: #1e293b;">{{ $module['title'] }}</span>
                                                    <i class="fas fa-chevron-down small text-muted"></i>
                                                </button>
                                            </div>
                                            <div id="collapse{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}"
                                                data-bs-parent="#curriculumAccordion">
                                                <div class="card-body p-0">
                                                    @foreach($module['lessons'] as $lessonIndex => $lesson)
                                                        <div
                                                            class="v20-lesson-row d-flex align-items-center justify-content-between px-4 py-3 border-top bg-white">
                                                            <div class="v20-lesson-info d-flex align-items-center">
                                                                <i class="fas fa-play-circle mr-3"
                                                                    style="color: #800000; opacity: 0.7;"></i>
                                                                <span style="font-weight: 500; color: #475569;">{{ $lesson }}</span>
                                                            </div>
                                                            <div class="d-flex align-items-center gap-3">
                                                                <span class="badge bg-light text-muted"
                                                                    style="font-size: 0.65rem;">Video</span>
                                                                <span class="text-muted small">12:45</span>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- 📅 Schedule Tab -->
                        <div class="tab-pane fade" id="schedule" role="tabpanel">
                            <div class="v20-card">
                                <h3 class="mb-4 font-weight-bold" style="font-size: 1.5rem;">Weekly Timeline</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead style="background: #f8fafc;">
                                            <tr>
                                                <th class="border-0 px-4 py-3"
                                                    style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">
                                                    Week</th>
                                                <th class="border-0 px-4 py-3"
                                                    style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">
                                                    Topic</th>
                                                <th class="border-0 px-4 py-3"
                                                    style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">
                                                    Format</th>
                                                <th class="border-0 px-4 py-3"
                                                    style="color: #64748b; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">
                                                    Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $schedules = [
                                                    ['week' => 'Week 1', 'topic' => 'Onboarding & Core Theory', 'type' => 'Live Session', 'date' => 'Aug 1, 2026'],
                                                    ['week' => 'Week 2', 'topic' => 'Practical Implementation', 'type' => 'Workshop', 'date' => 'Aug 8, 2026'],
                                                    ['week' => 'Week 3', 'topic' => 'Case Study Analysis', 'type' => 'Recorded', 'date' => 'Aug 15, 2026'],
                                                    ['week' => 'Week 4', 'topic' => 'Mid-Term Assessment', 'type' => 'Exam', 'date' => 'Aug 22, 2026'],
                                                    ['week' => 'Week 5', 'topic' => 'Advanced Project Work', 'type' => 'Mentorship', 'date' => 'Aug 29, 2026'],
                                                    ['week' => 'Week 6', 'topic' => 'Final Presentation', 'type' => 'Live Demo', 'date' => 'Sep 5, 2026']
                                                ];
                                            @endphp
                                            @foreach($schedules as $s)
                                                <tr>
                                                    <td class="px-4 py-3 font-weight-bold" style="color: #1e293b;">
                                                        {{ $s['week'] }}</td>
                                                    <td class="px-4 py-3">
                                                        <div style="font-weight: 600; color: #1e293b;">{{ $s['topic'] }}</div>
                                                        <div class="small text-muted">{{ $s['date'] }}</div>
                                                    </td>
                                                    <td class="px-4 py-3"><span
                                                            class="badge bg-soft-maroon text-maroon px-3 py-2"
                                                            style="border-radius: 50px; font-size: 0.7rem;">{{ $s['type'] }}</span>
                                                    </td>
                                                    <td class="px-4 py-3"><span class="text-success small font-weight-bold"><i
                                                                class="fas fa-check-circle mr-1"></i> Confirmed</span></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- 📝 Assignments Tab -->
                        <div class="tab-pane fade" id="assignments" role="tabpanel">
                            <div class="v20-card">
                                <h3 class="mb-4 font-weight-bold" style="font-size: 1.5rem;">Academic Tasks</h3>
                                @foreach($course['assignments'] as $assignment)
                                    <div class="d-flex justify-content-between align-items-center p-4 border rounded-lg mb-3 hover-shadow transition-all"
                                        style="border-radius: 16px; border-color: #f1f5f9 !important;">
                                        <div>
                                            <h5 class="mb-1 font-weight-bold" style="color: #1e293b;">{{ $assignment['title'] }}</h5>
                                            <div class="d-flex gap-3 text-muted small font-weight-bold">
                                                <span><i class="far fa-calendar-alt mr-1"></i> Due: {{ \Carbon\Carbon::parse($assignment['due_date'])->format('M d, Y') }}</span>
                                                <span><i class="far fa-star mr-1"></i> Worth: 500 pts</span>
                                            </div>
                                        </div>
                                        <a href="{{ route('courses.assignments.submit', [$course['id'], $assignment['id'] ?? 1]) }}" class="btn btn-outline-maroon px-4 py-2 text-decoration-none font-weight-bold" style="font-size: 0.85rem;">Submit Task</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ➡️ Sidebar Widget -->
                <div class="col-lg-4">
                    <div class="v20-sidebar-card animate__animated animate__fadeInRight" style="border-radius: 20px; overflow: hidden;">
                        <!-- 📽️ Clickable Video Trailer -->
                        <a href="{{ route('courses.learn', $course['id']) }}" class="text-decoration-none">
                            <div class="position-relative" style="height: 220px; overflow: hidden; box-shadow: inset 0 -40px 60px rgba(0,0,0,0.5);">
                                <img src="{{ asset('images/' . ($course['image'] ?? 'course_digital.png')) }}" 
                                    class="w-100 h-100" style="object-fit: cover;">
                                <div class="position-absolute w-100 h-100 d-flex align-items-center justify-content-center" 
                                    style="top:0; left:0; background: rgba(0, 0, 0, 0.15); cursor: pointer;">
                                    <div class="bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 75px; height: 75px; box-shadow: 0 0 30px rgba(0,0,0,0.4);">
                                        <i class="fas fa-play text-maroon" style="font-size: 1.6rem; margin-left: 6px;"></i>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- 🖼️ Price Banner (No Space) -->
                        <div class="v20-price-tag py-3 position-relative" style="background: #800000;">
                            @if($course['price'] > 0)
                                <h2 class="mb-0" style="font-size: 2.2rem; letter-spacing: -1px;">₹{{ number_format($course['price'], 2) }}</h2>
                            @else
                                <h2 class="mb-0" style="font-size: 2.2rem; letter-spacing: -1px;">FREE</h2>
                            @endif
                            <p class="m-0 opacity-75 small font-weight-bold mt-1 text-uppercase letter-spacing-1">Limited Time Access</p>
                        </div>

                        <div class="v20-sidebar-content p-4">
                            <h5 class="font-weight-bold mb-3" style="font-size: 1.1rem; color: #1e293b;">This course includes:</h5>
                            <ul class="v20-sidebar-list list-unstyled">
                                <li class="mb-3 d-flex align-items-center gap-3"><i class="fas fa-video text-maroon opacity-75"></i> 12 Hours of Video</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><i class="fas fa-file-download text-maroon opacity-75"></i> 8 Resources</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><i class="fas fa-infinity text-maroon opacity-75"></i> Lifetime Access</li>
                                <li class="mb-3 d-flex align-items-center gap-3"><i class="fas fa-mobile-alt text-maroon opacity-75"></i> Mobile Access</li>
                                <li class="d-flex align-items-center gap-3"><i class="fas fa-certificate text-maroon opacity-75"></i> Certificate</li>
                            </ul>

                            <hr class="my-4">

                            <div class="d-flex align-items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Instructor&background=800000&color=fff"
                                    class="rounded-circle" width="50">
                                <div>
                                    <h6 class="mb-0 font-weight-bold">Dr. Madras Christian</h6>
                                    <p class="mb-0 text-muted small">Senior Faculty Member</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* 🏰 Premium Course Details Design System */
        .v20-lms-pro {
            background: #f8fafc;
        }

        /* 🏔️ Hero Section */
        .v20-hero {
            padding: 20px 0 60px;
            background: linear-gradient(rgba(128, 0, 0, 0.9), rgba(74, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}');
            background-size: cover;
            background-position: center;
            color: white;
        }

        .v20-hero h1 {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: 3.5rem;
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        .v20-hero-meta {
            display: flex;
            gap: 25px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .v20-hero-meta i {
            margin-right: 8px;
            opacity: 0.7;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, 0.5);
        }

        /* 📑 Tab Navigation */
        .v20-tabs-nav {
            background: white;
            position: sticky;
            top: 75px;
            z-index: 100;
        }

        .v20-tabs-nav .nav-link {
            padding: 20px 0;
            margin-right: 40px;
            color: #64748b;
            font-weight: 700;
            font-size: 0.95rem;
            border: none;
            border-bottom: 3px solid transparent;
            transition: 0.3s;
        }

        .v20-tabs-nav .nav-link.active {
            color: #800000;
            border-bottom: 3px solid #800000;
        }

        /* 📦 Main Card Styling */
        .v20-card {
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            border: 1px solid #f1f5f9;
        }

        /* 📂 Curriculum Accordion */
        .v20-accordion .card {
            border: 1px solid #f1f5f9;
            border-radius: 12px;
            overflow: hidden;
        }

        .v20-accordion .card-header {
            background: white;
            padding: 10px;
        }

        .v20-accordion .btn-link {
            text-decoration: none;
            color: #1e293b;
            font-weight: 800;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .v20-lesson-row {
            display: flex;
            justify-content: space-between;
            padding: 15px 20px;
            border-bottom: 1px solid #f8fafc;
            transition: 0.3s;
            cursor: pointer;
        }

        .v20-lesson-row:hover {
            background: #fff1f2;
        }

        .v20-lesson-info i {
            color: #800000;
            margin-right: 12px;
        }

        /* ➡️ Pro Sidebar Widget */
        .v20-sidebar-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 140px;
            border: 1px solid #f1f5f9;
        }

        .v20-price-tag {
            padding: 40px;
            background: #800000;
            color: white;
            text-align: center;
        }

        .v20-price-tag h2 {
            font-weight: 900;
            font-size: 2.5rem;
            margin-bottom: 5px;
        }

        .v20-sidebar-content {
            padding: 40px;
        }

        .btn-v20-cta {
            display: block;
            width: 100%;
            background: #800000;
            color: white !important;
            padding: 20px;
            border-radius: 12px;
            font-weight: 800;
            text-align: center;
            text-decoration: none;
            letter-spacing: 1px;
            transition: 0.3s;
            box-shadow: 0 10px 20px rgba(128, 0, 0, 0.2);
        }

        .btn-v20-cta:hover {
            background: #4a0000;
            transform: translateY(-3px);
        }

        .v20-sidebar-list {
            list-style: none;
            padding: 0;
        }

        .v20-sidebar-list li {
            padding: 12px 0;
            color: #475569;
            font-weight: 600;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .v20-sidebar-list li i {
            width: 25px;
            color: #800000;
            opacity: 0.6;
        }

        /* Utilities */
        .bg-soft-maroon {
            background: #fff1f2;
        }

        .text-maroon {
            color: #800000;
        }

        .btn-outline-maroon {
            border: 1px solid #800000;
            color: #800000;
            font-weight: 700;
            border-radius: 8px;
        }

        .btn-outline-maroon:hover {
            background: #800000;
            color: white;
        }

        /* 📱 Responsive Adjustments */
        @media (max-width: 991px) {
            .v20-hero {
                padding: 100px 0 80px;
                text-align: center;
            }

            .v20-hero h1 {
                font-size: 2.2rem !important;
                line-height: 1.2 !important;
                margin-bottom: 20px !important;
            }

            .v20-hero p {
                font-size: 1rem !important;
                line-height: 1.7 !important;
                margin: 0 auto 30px !important;
            }

            .v20-hero-meta {
                justify-content: center;
                flex-wrap: wrap;
                gap: 15px;
            }

            .v20-tabs-nav {
                top: 70px;
                overflow-x: auto;
                white-space: nowrap;
            }

            .v20-tabs-nav .container {
                padding: 0 15px;
            }

            .v20-tabs-nav .nav-link {
                margin-right: 25px;
                padding: 15px 0;
                font-size: 0.85rem;
            }

            .v20-sidebar-card {
                position: relative;
                top: 0;
                margin-top: 40px;
            }

            .v20-card {
                padding: 25px;
                text-align: left;
            }

            .v20-card h3, .v20-card h4 {
                text-align: left;
            }

            .v20-card ul {
                display: inline-block;
                text-align: left;
            }

            .v20-card .row .col-md-6 {
                display: block;
                width: 100%;
            }

            .v20-card .d-flex.justify-content-between {
                flex-direction: column;
                gap: 15px;
                text-align: left;
            }

            .v20-accordion .btn-link {
                text-align: left;
                justify-content: space-between;
                gap: 10px;
                width: 100%;
            }

            .v20-lesson-row {
                text-align: left;
                justify-content: flex-start !important;
                flex-direction: column;
                gap: 10px;
            }

            .v20-lesson-info {
                justify-content: flex-start;
                width: 100%;
            }

            .v20-lesson-row .d-flex.align-items-center.gap-3 {
                justify-content: flex-start;
                width: 100%;
            }
        }

        @media (max-width: 767px) {
            .v20-hero h1 {
                font-size: 2rem !important;
            }

            .v20-hero-meta span {
                font-size: 0.75rem;
                padding: 6px 12px !important;
            }

            .v20-lesson-row {
                flex-direction: column;
                align-items: flex-start !important;
                gap: 10px;
            }

            .v20-lesson-row .d-flex.align-items-center.gap-3 {
                width: 100%;
                justify-content: flex-end;
            }
        }
    </style>
@endsection