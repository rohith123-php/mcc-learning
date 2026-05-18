@extends('layouts.app')

@section('content')
<div class="student-settings-portal">
    <!-- 🏔️ Security Hero -->
    <section class="settings-hero py-5" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('student.portal') }}" class="text-white opacity-75 text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Security</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-0" style="font-family: 'Playfair Display', serif;">Security & Privacy</h1>
            <p class="lead opacity-75">Protect your account and manage your access credentials.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('student.settings.sidebar')
            </div>

            <div class="col-lg-9">
                <!-- Change Password Card -->
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0 mb-4" style="background: white; border-radius: 24px;">
                    <h4 class="font-weight-bold mb-4" style="color: #1e293b;">Change Password</h4>
                    <form action="#" method="POST">
                        <div class="row g-4">
                            <div class="col-12">
                                <label class="form-label font-weight-bold text-muted small text-uppercase">Current Password</label>
                                <input type="password" class="form-control p-3 border-light shadow-none bg-light" placeholder="••••••••" style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase">New Password</label>
                                <input type="password" class="form-control p-3 border-light shadow-none bg-light" placeholder="••••••••" style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label font-weight-bold text-muted small text-uppercase">Confirm New Password</label>
                                <input type="password" class="form-control p-3 border-light shadow-none bg-light" placeholder="••••••••" style="border-radius: 12px;">
                            </div>
                        </div>
                        <div class="mt-4 text-end">
                            <button type="submit" class="btn btn-maroon px-5 py-2 rounded-pill font-weight-bold">Update Password</button>
                        </div>
                    </form>
                </div>

                <!-- 2FA Card -->
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h4 class="font-weight-bold m-0" style="color: #1e293b;">Two-Factor Authentication</h4>
                            <p class="text-muted small mb-0">Add an extra layer of security to your account.</p>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" style="width: 50px; height: 25px; cursor: pointer;">
                        </div>
                    </div>
                    <hr class="opacity-50">
                    <div class="d-flex align-items-center gap-3 p-3 rounded-lg bg-light mt-4">
                        <div class="bg-white rounded p-3 shadow-sm">
                            <i class="fas fa-mobile-alt text-maroon h4 m-0"></i>
                        </div>
                        <div>
                            <h6 class="font-weight-bold mb-1">Authenticator App</h6>
                            <p class="text-muted small mb-0">Use an app like Google Authenticator or Authy to get security codes.</p>
                        </div>
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
    .bg-light { background-color: #f8fafc !important; }
    .form-control:focus { background: white !important; border-color: #800000 !important; box-shadow: 0 0 0 4px rgba(128, 0, 0, 0.05) !important; }
    .form-check-input:checked { background-color: #800000; border-color: #800000; }
</style>
@endsection
