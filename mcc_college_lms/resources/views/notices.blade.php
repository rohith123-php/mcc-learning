@extends('layouts.app')

@section('content')
<div class="notices-page py-5 bg-light" style="min-height: 100vh;">
    <div class="container">
        <div class="mb-5 animate__animated animate__fadeIn">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb bg-white px-4 py-3 shadow-sm d-inline-flex align-items-center" style="border-radius: 50px; border: 1px solid #eef2f6;">
                    <li class="breadcrumb-item">
                        <a href="{{ route('student.portal') }}" class="text-maroon text-decoration-none font-weight-bold d-flex align-items-center">
                            <i class="fas fa-home me-2"></i> Dashboard
                        </a>
                    </li>
                    <li class="breadcrumb-item active font-weight-bold text-muted" aria-current="page" style="font-size: 0.9rem;">
                        <i class="fas fa-bullhorn mx-2" style="font-size: 0.7rem;"></i> Campus Announcements
                    </li>
                </ol>
            </nav>
            <h1 class="font-weight-black" style="color: #1e293b; font-size: 2.8rem; letter-spacing: -1px;">Campus <span class="text-maroon">Announcements</span></h1>
            <p class="text-muted">Stay updated with the latest news and notices from Madras Christian College.</p>
        </div>

        <div class="row">
            <div class="col-lg-8">
                @php
                    $notices = [
                        ['title' => 'Semester Holiday Schedule 2026', 'date' => 'May 04, 2026', 'tag' => 'Important', 'color' => 'danger'],
                        ['title' => 'New Library Digital Resources Available', 'date' => 'May 02, 2026', 'tag' => 'Update', 'color' => 'info'],
                        ['title' => 'Annual Cultural Fest: Registration Open', 'date' => 'April 28, 2026', 'tag' => 'Event', 'color' => 'success'],
                        ['title' => 'End Semester Examination Timetable', 'date' => 'April 25, 2026', 'tag' => 'Academic', 'color' => 'warning'],
                        ['title' => 'Hostel Maintenance Notice', 'date' => 'April 20, 2026', 'tag' => 'Campus', 'color' => 'secondary'],
                    ];
                @endphp

                @foreach($notices as $notice)
                <div class="notice-card bg-white p-4 mb-4 shadow-sm border-0 animate__animated animate__fadeInUp" style="border-radius: 20px; transition: 0.3s;">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <span class="badge bg-{{ $notice['color'] }} bg-opacity-10 text-{{ $notice['color'] }} px-3 py-2 rounded-pill font-weight-bold" style="font-size: 0.7rem;">
                            {{ $notice['tag'] }}
                        </span>
                        <small class="text-muted font-weight-bold"><i class="far fa-clock me-1"></i> {{ $notice['date'] }}</small>
                    </div>
                    <h4 class="font-weight-bold mb-3" style="color: #1e293b;">{{ $notice['title'] }}</h4>
                    <p class="text-muted mb-4" style="line-height: 1.6;">
                        Detailed information regarding {{ strtolower($notice['title']) }} has been published by the college administration. Please check your official email for further attachments and guidelines.
                    </p>
                    <a href="#" class="text-maroon font-weight-bold text-decoration-none">Read More <i class="fas fa-chevron-right ms-2" style="font-size: 0.7rem;"></i></a>
                </div>
                @endforeach
            </div>

            <div class="col-lg-4">
                <div class="bg-white p-4 rounded-xl shadow-sm border-0 sticky-top" style="border-radius: 20px; top: 100px;">
                    <h5 class="font-weight-bold mb-4" style="color: #1e293b;">Categories</h5>
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill border">All Notices</span>
                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill border">Academic</span>
                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill border">Events</span>
                        <span class="badge bg-light text-dark px-3 py-2 rounded-pill border">Admin</span>
                    </div>
                    <hr>
                    <h5 class="font-weight-bold mb-3 mt-4" style="color: #1e293b;">Subscribe</h5>
                    <p class="small text-muted mb-4">Get instant notifications on your email for urgent campus alerts.</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-light bg-light" placeholder="Email Address">
                        <button class="btn btn-maroon" type="button">JOIN</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .notice-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.08) !important;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        font-size: 1.2rem;
        line-height: 1;
        vertical-align: middle;
    }
</style>
@endsection
