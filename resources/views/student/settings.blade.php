@extends('layouts.app')

@section('content')
<div class="student-settings-portal">
    <!-- 🏔️ Settings Hero -->
    <section class="settings-hero py-5" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('student.portal') }}" class="text-white opacity-75 text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Profile Details</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-0" style="font-family: 'Playfair Display', serif;">Account Settings</h1>
            <p class="lead opacity-75">Manage your personal information and security preferences.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <!-- ⬅️ Sidebar Navigation -->
            <div class="col-lg-3">
                @include('student.settings.sidebar')
            </div>

            <!-- ➡️ Main Settings Content -->
            <div class="col-lg-9">
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <div class="d-flex justify-content-between align-items-center mb-5">
                        <h3 class="font-weight-bold m-0" style="color: #1e293b;">Personal Information</h3>
                        <div class="profile-photo-preview position-relative">
                            <img src="https://ui-avatars.com/api/?name=Alex+Kumar&background=800000&color=fff&size=80" alt="Avatar" class="rounded-circle shadow-sm border">
                            <button class="btn btn-sm btn-maroon position-absolute bottom-0 end-0 rounded-circle" style="width: 30px; height: 30px; padding: 0;">
                                <i class="fas fa-camera" style="font-size: 0.7rem;"></i>
                            </button>
                        </div>
                    </div>

                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Full Name</label>
                                <input type="text" class="form-control p-3 border-light shadow-none bg-light" value="Alex Kumar" style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Roll Number</label>
                                <input type="text" class="form-control p-3 border-light shadow-none bg-light" value="MCC2026CS012" disabled style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Email Address</label>
                                <input type="email" class="form-control p-3 border-light shadow-none bg-light" value="alex.kumar@student.mcc.edu" style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Phone Number</label>
                                <input type="text" class="form-control p-3 border-light shadow-none bg-light" value="+91 98765 43210" style="border-radius: 12px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Department</label>
                                <input type="text" class="form-control p-3 border-light shadow-none bg-light" value="Computer Science & Applications" disabled style="border-radius: 12px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label font-weight-bold text-muted small text-uppercase" style="letter-spacing: 1px;">Bio</label>
                                <textarea class="form-control p-3 border-light shadow-none bg-light" rows="4" style="border-radius: 12px;">Passionate about software engineering and digital innovation. Currently pursuing a Master's degree in Computer Science at MCC.</textarea>
                            </div>
                        </div>

                        <hr class="my-5 opacity-50">

                        <div class="d-flex justify-content-end gap-3">
                            <button type="button" class="btn btn-light px-5 py-3 rounded-pill font-weight-bold">Discard Changes</button>
                            <button type="submit" class="btn btn-maroon px-5 py-3 rounded-pill font-weight-bold shadow-lg">Save Profile Details</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .student-settings-portal {
        background: #f8fafc;
        min-height: 100vh;
    }

    .settings-nav-card .nav-link.active {
        background: #fff1f2;
        color: #800000 !important;
        font-weight: 800;
    }

    .settings-nav-card .nav-link:hover:not(.active) {
        background: #f8fafc;
        opacity: 1 !important;
    }

    .btn-maroon {
        background: #800000;
        color: white;
        border: none;
    }

    .btn-maroon:hover {
        background: #4a0000;
        color: white;
        transform: translateY(-2px);
    }

    .bg-light {
        background-color: #f8fafc !important;
    }

    .form-control:focus {
        background: white !important;
        border-color: #800000 !important;
        box-shadow: 0 0 0 4px rgba(128, 0, 0, 0.05) !important;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        color: rgba(255, 255, 255, 0.5);
    }
</style>
@endsection
