@extends('layouts.app')

@section('content')
<div class="student-settings-portal">
    <!-- 🏔️ Notifications Hero -->
    <section class="settings-hero py-5" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('student.portal') }}" class="text-white opacity-75 text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Notifications</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-0" style="font-family: 'Playfair Display', serif;">Notification Preferences</h1>
            <p class="lead opacity-75">Stay updated with course announcements and campus alerts.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('student.settings.sidebar')
            </div>

            <div class="col-lg-9">
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <h4 class="font-weight-bold mb-5" style="color: #1e293b;">Email Notifications</h4>
                    
                    <div class="notification-options gap-4 d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-1">Course Announcements</h6>
                                <p class="text-muted small mb-0">Get notified when instructors post new updates or materials.</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" checked style="width: 45px; height: 22px;">
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-1">Assignment Deadlines</h6>
                                <p class="text-muted small mb-0">Receive reminders for upcoming project submissions.</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" checked style="width: 45px; height: 22px;">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-1">Exam Alerts</h6>
                                <p class="text-muted small mb-0">Crucial updates regarding semester examinations.</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" checked style="width: 45px; height: 22px;">
                            </div>
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="font-weight-bold mb-1">Campus Events</h6>
                                <p class="text-muted small mb-0">Invitations to workshops, seminars, and club activities.</p>
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" style="width: 45px; height: 22px;">
                            </div>
                        </div>
                    </div>

                    <hr class="my-5 opacity-50">

                    <div class="d-flex justify-content-end">
                        <button class="btn btn-maroon px-5 py-3 rounded-pill font-weight-bold shadow-sm">Save Preferences</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .student-settings-portal { background: #f8fafc; min-height: 100vh; }
    .btn-maroon { background: #800000; color: white; border: none; }
    .btn-maroon:hover { background: #4a0000; color: white; transform: translateY(-2px); }
    .form-check-input:checked { background-color: #800000; border-color: #800000; }
</style>
@endsection
