@extends('layouts.app')

@section('content')
<div class="admission-portal" style="background: #f8fafc; min-height: 100vh; padding: 60px 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- 🏔️ Application Header -->
                <div class="text-center mb-5 animate__animated animate__fadeInDown">
                    <span class="badge mb-3 p-2 px-3" style="background: #fdf2f2; color: #800000; font-weight: 800; font-size: 0.75rem; border-radius: 50px; text-transform: uppercase; letter-spacing: 1px;">Admissions 2026</span>
                    <h1 class="display-4 font-weight-black" style="color: #1e293b; font-family: 'Playfair Display', serif;">Student Application Form</h1>
                    <p class="text-muted lead mx-auto" style="max-width: 600px;">Begin your academic journey at Madras Christian College. Please fill in the details below to start your application process.</p>
                </div>

                <div class="application-card shadow-lg border-0 p-5 p-md-5 bg-white" style="border-radius: 30px;">
                    <form id="applicationForm" onsubmit="event.preventDefault(); submitApplication();">
                        <div class="row g-4">
                            <!-- Personal Info -->
                            <div class="col-12">
                                <h5 class="font-weight-bold mb-4 d-flex align-items-center" style="color: #800000;">
                                    <span class="bg-soft-maroon rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; font-size: 0.9rem;">1</span>
                                    Personal Information
                                </h5>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Full Name</label>
                                <input type="text" class="form-control p-3 bg-light border-0 shadow-none" placeholder="John Doe" required style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Email Address</label>
                                <input type="email" class="form-control p-3 bg-light border-0 shadow-none" placeholder="john@example.com" required style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Phone Number</label>
                                <input type="tel" class="form-control p-3 bg-light border-0 shadow-none" placeholder="+91 98765 43210" required style="border-radius: 12px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Date of Birth</label>
                                <input type="date" class="form-control p-3 bg-light border-0 shadow-none" required style="border-radius: 12px;">
                            </div>

                            <!-- Academic Info -->
                            <div class="col-12 mt-5">
                                <h5 class="font-weight-bold mb-4 d-flex align-items-center" style="color: #800000;">
                                    <span class="bg-soft-maroon rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; font-size: 0.9rem;">2</span>
                                    Academic Selection
                                </h5>
                            </div>
                            <div class="col-12">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Course of Interest</label>
                                <select class="form-select p-3 bg-light border-0 shadow-none" required style="border-radius: 12px; height: 58px;">
                                    <option value="" selected disabled>Select a program...</option>
                                    <option>B.Sc. Computer Science</option>
                                    <option>B.A. English Literature</option>
                                    <option>B.Com General</option>
                                    <option>M.Sc. Information Technology</option>
                                    <option>MBA - Digital Marketing</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label small font-weight-bold text-muted text-uppercase">Last Institution Attended</label>
                                <input type="text" class="form-control p-3 bg-light border-0 shadow-none" placeholder="Higher Secondary School Name" required style="border-radius: 12px;">
                            </div>

                            <div class="col-12 mt-5">
                                <div class="form-check p-0 d-flex align-items-center gap-3">
                                    <input class="form-check-input ms-0" type="checkbox" id="terms" required style="width: 20px; height: 20px; cursor: pointer;">
                                    <label class="form-check-label small text-muted" for="terms" style="cursor: pointer;">
                                        I certify that the information provided is correct and I agree to the MCC Admission Terms & Conditions.
                                    </label>
                                </div>
                            </div>

                            <div class="col-12 mt-4">
                                <button type="submit" id="submitBtn" class="btn btn-maroon w-100 py-3 rounded-pill font-weight-bold shadow-lg transition-all" style="font-size: 1rem; letter-spacing: 1px;">
                                    SUBMIT APPLICATION
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Success Message (Hidden) -->
                    <div id="successMessage" class="text-center py-5 d-none animate__animated animate__zoomIn">
                        <h2 class="font-weight-black mb-3">Application Received!</h2>
                        <p class="text-muted mb-5 mx-auto" style="max-width: 450px;">Thank you for applying to MCC. Our admissions team will review your profile and contact you within 3-5 working days.</p>
                        <a href="{{ route('home') }}" class="btn btn-maroon px-5 py-3 rounded-pill font-weight-bold">Back to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function submitApplication() {
        const btn = document.getElementById('submitBtn');
        const form = document.getElementById('applicationForm');
        const success = document.getElementById('successMessage');
        
        btn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> PROCESSING...';
        btn.disabled = true;

        setTimeout(() => {
            form.classList.add('d-none');
            success.classList.remove('d-none');
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }, 2000);
    }
</script>

<style>
    .bg-soft-maroon { background: #fff1f2; color: #800000; }
    .btn-maroon { background: #800000; color: white; border: none; }
    .btn-maroon:hover { background: #4a0000; color: white; transform: translateY(-3px); box-shadow: 0 15px 30px rgba(128,0,0,0.2) !important; }
    .bg-light { background-color: #f1f5f9 !important; }
    .form-check-input:checked { background-color: #800000; border-color: #800000; }
    .form-control:focus, .form-select:focus { background: white !important; box-shadow: 0 0 0 4px rgba(128,0,0,0.05) !important; border: 1px solid #800000 !important; }
    .font-weight-black { font-weight: 900; }
</style>
@endsection
