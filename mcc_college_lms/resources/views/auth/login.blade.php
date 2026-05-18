@extends('layouts.app')

@section('content')
<div class="login-portal-wrapper" style="background: #f8fafc; min-height: calc(100vh - 80px); display: flex; align-items: center; padding: 50px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="login-card shadow-lg border-0 overflow-hidden animate__animated animate__fadeInUp" style="border-radius: 30px; background: white;">
                    <div class="row g-0">
                        <!-- 🎨 Visual Brand Side -->
                        <div class="col-md-6 d-none d-md-block" style="background: linear-gradient(rgba(128, 0, 0, 0.9), rgba(74, 0, 0, 0.95)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; padding: 60px;">
                            <div class="h-100 d-flex flex-column justify-content-center text-white">
                                <div>
                                    <h2 class="display-5 font-weight-bold mb-4" style="font-family: 'Playfair Display', serif;">Academic Excellence</h2>
                                    <p class="lead opacity-75">Access your learning dashboard, track progress, and stay connected with the MCC community.</p>
                                </div>
                                <div class="opacity-50 small font-weight-bold text-uppercase mt-5" style="letter-spacing: 3px; font-size: 0.7rem;">
                                    Madras Christian College • Since 1837
                                </div>
                            </div>
                        </div>

                        <!-- 📝 Login Form Side -->
                        <div class="col-md-6 p-5 p-lg-5">
                            <div class="mb-5 text-center text-md-start">
                                <h3 class="font-weight-bold text-dark mb-2">Student Login</h3>
                                <p class="text-muted mb-0">Enter your university credentials to proceed.</p>
                            </div>

                            @if(session('error'))
                                <div class="alert alert-danger border-0 small font-weight-bold mb-4" style="border-radius: 12px; background: #fff1f2; color: #e11d48;">
                                    <i class="fas fa-exclamation-circle me-2"></i> {{ session('error') }}
                                </div>
                            @endif

                            <form action="{{ route('login.post') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label small font-weight-bold text-muted text-uppercase mb-2" style="letter-spacing: 1px;">Student ID / Email</label>
                                    <div class="input-group border rounded-lg overflow-hidden" style="border-color: #e2e8f0 !important; border-radius: 12px !important;">
                                        <span class="input-group-text border-0 bg-white px-3"><i class="far fa-user text-muted"></i></span>
                                        <input type="text" name="email" class="form-control border-0 bg-white p-3 shadow-none" required style="font-weight: 500; font-size: 0.95rem;">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label class="form-label small font-weight-bold text-muted text-uppercase mb-2" style="letter-spacing: 1px;">Security Password</label>
                                    <div class="input-group border rounded-lg overflow-hidden" style="border-color: #e2e8f0 !important; border-radius: 12px !important;">
                                        <span class="input-group-text border-0 bg-white px-3"><i class="fas fa-lock text-muted"></i></span>
                                        <input type="password" name="password" id="passwordInput" class="form-control border-0 bg-white p-3 shadow-none" required style="font-weight: 500; font-size: 0.95rem;">
                                        <span class="input-group-text border-0 bg-white px-3" style="cursor: pointer;" onclick="togglePassword()">
                                            <i class="far fa-eye text-muted" id="toggleIcon"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-between align-items-center mb-5">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="remember" style="cursor: pointer;">
                                        <label class="form-check-label small text-muted cursor-pointer" for="remember" style="cursor: pointer;">Keep me signed in</label>
                                    </div>
                                    <a href="#" class="small text-maroon font-weight-bold text-decoration-none">Forgot Password?</a>
                                </div>

                                <button type="submit" class="btn btn-maroon w-100 py-3 rounded-pill font-weight-bold shadow-lg transition-all mb-4" style="font-size: 0.9rem; letter-spacing: 1px;">
                                    SIGN IN TO PORTAL <i class="fas fa-sign-in-alt ms-2"></i>
                                </button>

                                <div class="text-center">
                                    <p class="small text-muted mb-0">Trouble accessing your account?</p>
                                    <a href="#" class="small text-maroon font-weight-bold text-decoration-none">Contact Academic Office</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .btn-maroon {
        background: #800000;
        color: white;
        border: none;
    }
    .btn-maroon:hover {
        background: #4a0000;
        color: white;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(128, 0, 0, 0.2) !important;
    }
    .text-maroon { color: #800000 !important; }
    .bg-light { background-color: #f1f5f9 !important; }
    .form-check-input:checked { background-color: #800000; border-color: #800000; }
    .input-group:focus-within {
        box-shadow: 0 0 0 4px rgba(128, 0, 0, 0.05);
        border-radius: 12px;
    }
    .transition-all { transition: all 0.3s ease; }
</style>
<script>
    function togglePassword() {
        const passInput = document.getElementById('passwordInput');
        const toggleIcon = document.getElementById('toggleIcon');
        if (passInput.type === 'password') {
            passInput.type = 'text';
            toggleIcon.className = 'far fa-eye-slash text-muted';
        } else {
            passInput.type = 'password';
            toggleIcon.className = 'far fa-eye text-muted';
        }
    }
</script>
@endsection
