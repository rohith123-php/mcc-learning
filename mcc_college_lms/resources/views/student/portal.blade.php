@extends('layouts.app')

@section('content')
<div class="student-portal-dashboard">
    <!-- 🏔️ Portal Hero / Profile Header -->
    <section class="portal-hero py-5 shadow-sm" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-md-auto mb-4 mb-md-0">
                    <div class="profile-avatar-large shadow-lg animate__animated animate__zoomIn">
                        <img src="https://ui-avatars.com/api/?name=Alex+Kumar&background=800000&color=fff&size=128" alt="Profile" class="rounded-circle border border-4 border-white" style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                </div>
                <div class="col-md px-md-4">
                    <div class="d-flex align-items-center gap-2 mb-2">
                        <span class="badge px-3 py-1 rounded-pill small" style="background: rgba(255, 255, 255, 0.2); border: 1px solid rgba(255, 255, 255, 0.3); font-size: 0.65rem; letter-spacing: 1px;">STUDENT STATUS: ACTIVE</span>
                    </div>
                    <h1 class="display-5 font-weight-bold mb-1" style="font-family: 'Playfair Display', serif;">Welcome back, Alex!</h1>
                    <p class="lead opacity-75 mb-3" style="font-size: 1.1rem; font-weight: 500;">Roll No: MCC2026CS012 • Computer Science & Applications</p>
                    <div class="d-flex flex-wrap gap-4 mt-3" style="gap: 30px;">
                        <div class="stat-pill">
                            <span class="d-block small opacity-50 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Current GPA</span>
                            <span class="h4 font-weight-bold mb-0">3.85 / 4.0</span>
                        </div>
                        <div class="stat-pill border-start border-white border-opacity-25 ps-4">
                            <span class="d-block small opacity-50 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Attendance</span>
                            <span class="h4 font-weight-bold mb-0">94.2%</span>
                        </div>
                        <div class="stat-pill border-start border-white border-opacity-25 ps-4">
                            <span class="d-block small opacity-50 text-uppercase font-weight-bold" style="letter-spacing: 1px;">Course Credits</span>
                            <span class="h4 font-weight-bold mb-0">124 Pts</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto mt-4 mt-lg-0">
                    <div class="d-flex gap-2">
                        <a href="{{ route('student.settings') }}" class="btn btn-outline-light px-4 py-2 rounded-pill font-weight-bold transition-all text-decoration-none">
                            <i class="fas fa-edit me-2"></i> Update Profile
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-5">
        <div class="row g-5">
            <!-- ⬅️ Main Dashboard Content -->
            <div class="col-lg-8">
                <!-- Enrolled Courses -->
                <div class="dashboard-card p-4 p-md-5 mb-5 shadow-sm">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <div>
                            <h3 class="font-weight-bold m-0" style="color: #1e293b;">Active Learning Tracks</h3>
                            <p class="text-muted small mb-0">Pick up where you left off in your academic journey.</p>
                        </div>
                        <a href="{{ route('courses.index') }}" class="btn btn-outline-maroon px-4 py-2 rounded-pill font-weight-bold small">Explore Courses</a>
                    </div>
                    
                    <div class="row g-4">
                        @foreach($enrolledCourses as $course)
                        <div class="col-md-6">
                            <div class="enrolled-course-card p-4 border rounded-xl h-100 transition-all bg-white" style="border-radius: 20px;">
                                <div class="d-flex align-items-center mb-4">
                                    <div class="course-icon-box bg-soft-maroon text-maroon me-3">
                                        <i class="fa-solid fa-book-open"></i>
                                    </div>
                                    <div>
                                        <h6 class="font-weight-bold m-0 text-dark">{{ $course->title }}</h6>
                                        <span class="text-muted" style="font-size: 0.7rem;">{{ $course->level }}</span>
                                    </div>
                                </div>
                                <div class="progress mb-3" style="height: 8px; border-radius: 10px; background: #f1f5f9;">
                                    <div class="progress-bar" style="width: {{ rand(20, 80) }}%; background: #800000; border-radius: 10px;"></div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-muted font-weight-bold" style="font-size: 0.75rem;">PROGRESS: {{ rand(20, 80) }}%</span>
                                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-sm btn-maroon px-4 rounded-pill font-weight-bold" style="font-size: 0.75rem;">CONTINUE</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Recent Activity / Timeline -->
                <div class="dashboard-card p-4 p-md-5 shadow-sm">
                    <h4 class="font-weight-bold mb-5" style="color: #1e293b;">Academic Timeline</h4>
                    <div class="timeline-container ps-4">
                        <div class="timeline-item pb-5 position-relative">
                            <div class="timeline-marker" style="background: #800000;"></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Assignment Submitted</h6>
                                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">TODAY, 10:45 AM</span>
                            </div>
                            <p class="text-muted small mb-0">Mastering Database Design - Phase 2 Submission</p>
                        </div>
                        <div class="timeline-item pb-5 position-relative">
                            <div class="timeline-marker" style="background: #4a0000;"></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold mb-1" style="color: #1e293b;">Certification Earned</h6>
                                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">YESTERDAY</span>
                            </div>
                            <p class="text-muted small mb-0">Introduction to UI/UX Design Fundamentals</p>
                        </div>
                        <div class="timeline-item position-relative">
                            <div class="timeline-marker" style="background: #cbd5e1;"></div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-bold mb-1" style="color: #1e293b;">New Lesson Available</h6>
                                <span class="text-muted" style="font-size: 0.7rem; font-weight: 600;">MAY 04, 2026</span>
                            </div>
                            <p class="text-muted small mb-0">Advanced Web Tech - Week 5: API Integration</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ➡️ Sidebar Notifications / Deadlines -->
            <div class="col-lg-4">
                <div class="dashboard-card p-4 mb-4 border-0 shadow-sm" style="background: white;">
                    <h5 class="font-weight-bold mb-4 d-flex align-items-center" style="color: #1e293b;">
                        <i class="fa-solid fa-calendar-check me-2 text-maroon"></i> Upcoming Deadlines
                    </h5>
                    <div class="deadline-item d-flex gap-3 mb-4 p-3 rounded-lg bg-light" style="background: #f8fafc !important;">
                        <div class="date-box text-center p-2 rounded bg-white shadow-sm" style="min-width: 60px;">
                            <div class="small font-weight-bold text-maroon" style="font-size: 0.65rem;">MAY</div>
                            <div class="h4 font-weight-bold mb-0" style="color: #1e293b;">12</div>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1 text-dark">Midterm Exam</h6>
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">Web Tech Fundamentals</p>
                            <span class="badge bg-soft-maroon text-maroon mt-2" style="font-size: 0.6rem;">HIGH PRIORITY</span>
                        </div>
                    </div>
                    <div class="deadline-item d-flex gap-3 p-3 rounded-lg bg-light" style="background: #f8fafc !important;">
                        <div class="date-box text-center p-2 rounded bg-white shadow-sm" style="min-width: 60px;">
                            <div class="small font-weight-bold text-maroon" style="font-size: 0.65rem;">MAY</div>
                            <div class="h4 font-weight-bold mb-0" style="color: #1e293b;">15</div>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1 text-dark">Lab Submission</h6>
                            <p class="text-muted mb-0" style="font-size: 0.75rem;">Data Science Basics</p>
                        </div>
                    </div>
                    <a href="{{ route('student.schedule') }}" class="btn btn-outline-maroon w-100 rounded-pill font-weight-bold mt-3" style="font-size: 0.8rem;">VIEW FULL SCHEDULE</a>
                </div>

                <div class="dashboard-card p-5 mb-4 text-white text-center shadow-lg animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #800000, #4a0000);">
                    <h4 class="font-weight-bold mb-2">2 Certificates</h4>
                    <p class="small opacity-75 mb-4">You've completed 2 professional tracks this semester. Keep it up!</p>
                    <button class="btn btn-light w-100 font-weight-bold rounded-pill py-3" 
                        style="color: #800000; box-shadow: 0 10px 20px rgba(0,0,0,0.15);"
                        data-bs-toggle="modal" data-bs-target="#hallOfFameModal">
                        View Hall of Fame
                    </button>
                </div>

                <!-- 🏆 Hall of Fame Modal -->
                <div class="modal fade" id="hallOfFameModal" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content border-0 shadow-lg" style="border-radius: 30px;">
                            <div class="modal-header border-0 p-4 pb-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-5 text-center">
                                <div class="mb-4">
                                    <h2 class="font-weight-black" style="color: #1e293b;">Academic Hall of Fame</h2>
                                    <p class="text-muted">Celebrating your outstanding achievements at MCC</p>
                                </div>

                                <div class="row g-4 text-start mt-2">
                                    @php
                                        $certificates = [
                                            ['title' => 'Excellence in Web Tech', 'date' => 'March 2026', 'grade' => 'A+'],
                                            ['title' => 'Advanced UI/UX Design', 'date' => 'February 2026', 'grade' => 'A']
                                        ];
                                    @endphp
                                    @foreach($certificates as $cert)
                                    <div class="col-md-6">
                                        <div class="certificate-item p-4 text-center border rounded-xl bg-light transition-all h-100" 
                                            style="border-radius: 20px;">
                                            <div class="mb-3">
                                                <i class="fa-solid fa-file-contract text-maroon" style="font-size: 2rem; opacity: 0.8;"></i>
                                            </div>
                                            <h6 class="font-weight-bold mb-1" style="font-size: 0.9rem;">{{ $cert['title'] }}</h6>
                                            <p class="text-muted small mb-2">{{ $cert['date'] }}</p>
                                            <span class="badge bg-white text-maroon border px-3 py-1 mb-3" style="font-size: 0.65rem;">GRADE: {{ $cert['grade'] }}</span>
                                            <a href="{{ route('certificate', ['title' => $cert['title'], 'grade' => $cert['grade']]) }}" 
                                               class="btn btn-sm btn-maroon w-100 rounded-pill font-weight-bold" style="font-size: 0.7rem;">
                                               VIEW CERTIFICATE
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="mt-5">
                                    <button class="btn btn-maroon px-5 py-3 rounded-pill font-weight-bold" data-bs-dismiss="modal">CLOSE GALLERY</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dashboard-card p-4 shadow-sm border-0 bg-white">
                    <h6 class="font-weight-bold mb-3">Campus Notice Board</h6>
                    <div class="notice-item pb-3 mb-3 border-bottom">
                        <a href="#" class="text-decoration-none text-dark d-block mb-1 font-weight-bold small">Semester Holiday Schedule 2026</a>
                        <span class="text-muted" style="font-size: 0.65rem;">Posted 2 days ago</span>
                    </div>
                    <div class="notice-item mb-3">
                        <a href="#" class="text-decoration-none text-dark d-block mb-1 font-weight-bold small">New Library Digital Access Token</a>
                        <span class="text-muted" style="font-size: 0.65rem;">Posted 4 days ago</span>
                    </div>
                    <a href="{{ route('student.notices') }}" class="btn btn-outline-maroon w-100 rounded-pill font-weight-bold mt-2" style="font-size: 0.8rem;">VIEW ALL ANNOUNCEMENTS</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .student-portal-dashboard {
        background: #f8fafc;
        min-height: 100vh;
    }

    .dashboard-card {
        background: white;
        border-radius: 24px;
        border: 1px solid #f1f5f9;
    }

    .btn-outline-maroon {
        color: #800000;
        border: 2px solid #800000;
        transition: all 0.3s ease;
    }

    .btn-outline-maroon:hover {
        background: #800000;
        color: white;
    }

    .btn-maroon {
        background: #800000;
        color: white;
        border: none;
        box-shadow: 0 4px 10px rgba(128, 0, 0, 0.2);
    }

    .btn-maroon:hover {
        background: #4a0000;
        color: white;
        transform: translateY(-2px);
    }

    .bg-soft-maroon {
        background: #fff1f2;
    }

    .text-maroon {
        color: #800000 !important;
    }

    .enrolled-course-card {
        border-color: #f1f5f9 !important;
        border-width: 1px;
    }

    .enrolled-course-card:hover {
        border-color: #800000 !important;
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(128, 0, 0, 0.08);
    }

    .course-icon-box {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 12px;
        font-size: 1.25rem;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -18px;
        top: 20px;
        bottom: 0;
        width: 2px;
        background: #f1f5f9;
    }

    .timeline-item:last-child::before {
        display: none;
    }

    .timeline-marker {
        position: absolute;
        left: -24px;
        top: 5px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        border: 3px solid white;
        box-shadow: 0 0 0 2px #f1f5f9;
        z-index: 2;
    }

    .transition-all {
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }
</style>
@endsection
