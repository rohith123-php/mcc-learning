@extends('layouts.app')

@section('content')
<div class="student-settings-portal">
    <!-- 🏔️ Billing Hero -->
    <section class="settings-hero py-5" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('student.portal') }}" class="text-white opacity-75 text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Billing</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-0" style="font-family: 'Playfair Display', serif;">Fees & Billing</h1>
            <p class="lead opacity-75">Track your semester fees, payments, and financial history.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('student.settings.sidebar')
            </div>

            <div class="col-lg-9">
                <!-- Current Balance Card -->
                <div class="settings-content-card p-5 shadow-sm border-0 mb-4 text-white d-flex justify-content-between align-items-center" style="background: linear-gradient(135deg, #800000, #4a0000); border-radius: 24px;">
                    <div>
                        <h6 class="text-uppercase small font-weight-bold opacity-75 mb-2" style="letter-spacing: 1px;">Outstanding Semester Fees</h6>
                        <h2 class="display-5 font-weight-bold mb-0">₹ 45,500</h2>
                    </div>
                    <button class="btn btn-light px-5 py-3 rounded-pill font-weight-bold text-maroon shadow-lg" data-bs-toggle="modal" data-bs-target="#paymentModal">Pay Now</button>
                </div>

                <!-- Payment History -->
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <h4 class="font-weight-bold mb-4" style="color: #1e293b;">Payment History</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <thead class="text-muted small text-uppercase" style="letter-spacing: 1px;">
                                <tr>
                                    <th class="ps-0 py-3">Description</th>
                                    <th class="py-3">Date</th>
                                    <th class="py-3">Amount</th>
                                    <th class="py-3">Status</th>
                                    <th class="text-end pe-0 py-3">Invoice</th>
                                </tr>
                            </thead>
                            <tbody class="font-weight-bold" style="color: #1e293b; font-size: 0.95rem;">
                                <tr class="border-bottom" style="border-color: #f1f5f9 !important;">
                                    <td class="ps-0 py-4">Semester 1 Tuition Fees</td>
                                    <td class="text-muted small">Dec 12, 2025</td>
                                    <td>₹ 45,000</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill small">PAID</span></td>
                                    <td class="text-end pe-0">
                                        <a href="javascript:void(0)" class="text-maroon" onclick="triggerInvoiceDownload('Semester 1 Tuition')">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="border-bottom" style="border-color: #f1f5f9 !important;">
                                    <td class="ps-0 py-4">Examination Fees - Spring</td>
                                    <td class="text-muted small">Oct 05, 2025</td>
                                    <td>₹ 2,500</td>
                                    <td><span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill small">PAID</span></td>
                                    <td class="text-end pe-0">
                                        <a href="javascript:void(0)" class="text-maroon" onclick="triggerInvoiceDownload('Examination Fees')">
                                            <i class="fas fa-download"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 💳 Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 24px;">
            <div class="modal-body p-5 text-center">
                <div class="mb-4">
                    <i class="fas fa-university text-maroon display-4"></i>
                </div>
                <h3 class="font-weight-bold mb-3">Secure Payment Gateway</h3>
                <p class="text-muted mb-5">You are about to pay <strong>₹ 45,500</strong> for the upcoming semester fees. Please choose your payment method.</p>
                
                <div class="d-flex flex-column gap-3 mb-5">
                    <button class="btn border p-3 d-flex align-items-center justify-content-between rounded-lg hover-bg-light w-100 text-start" onclick="processSimulatedPayment()">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-credit-card text-muted"></i>
                            <span class="font-weight-bold text-dark">Debit / Credit Card</span>
                        </div>
                        <i class="fas fa-chevron-right small opacity-50"></i>
                    </button>
                    <button class="btn border p-3 d-flex align-items-center justify-content-between rounded-lg hover-bg-light w-100 text-start" onclick="processSimulatedPayment()">
                        <div class="d-flex align-items-center gap-3">
                            <i class="fas fa-mobile-alt text-muted"></i>
                            <span class="font-weight-bold text-dark">UPI / Net Banking</span>
                        </div>
                        <i class="fas fa-chevron-right small opacity-50"></i>
                    </button>
                </div>
                
                <button class="btn btn-maroon w-100 py-3 rounded-pill font-weight-bold" onclick="processSimulatedPayment()">PROCEED TO PAY</button>
            </div>
        </div>
    </div>
</div>

<!-- 🎉 Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="border-radius: 24px;">
            <div class="modal-body p-5 text-center">
                <div class="mb-4">
                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                        <i class="fas fa-check text-success h2 mb-0"></i>
                    </div>
                </div>
                <h3 class="font-weight-bold mb-2">Payment Successful!</h3>
                <p class="text-muted mb-5">Your transaction has been processed. A confirmation email has been sent to your registered address.</p>
                <button class="btn btn-maroon w-100 py-3 rounded-pill font-weight-bold" data-bs-dismiss="modal">BACK TO BILLING</button>
            </div>
        </div>
    </div>
</div>

<script>
    function triggerInvoiceDownload(description) {
        const btn = event.currentTarget;
        const icon = btn.querySelector('i');
        const originalClass = icon.className;
        icon.className = 'fas fa-spinner fa-spin';
        
        setTimeout(() => {
            icon.className = 'fas fa-check-circle text-success';
            console.log('Downloading Invoice: ' + description + '.pdf');
            setTimeout(() => {
                icon.className = originalClass;
            }, 2000);
        }, 1200);
    }

    function processSimulatedPayment() {
        const payModal = bootstrap.Modal.getInstance(document.getElementById('paymentModal'));
        if(payModal) payModal.hide();
        
        setTimeout(() => {
            const successModal = new bootstrap.Modal(document.getElementById('successModal'));
            successModal.show();
        }, 600);
    }
</script>

<style>
    .student-settings-portal { background: #f8fafc; min-height: 100vh; }
    .text-maroon { color: #800000 !important; }
    .bg-success { background-color: #22c55e !important; }
    .hover-bg-light:hover { background-color: #f8fafc !important; border-color: #800000 !important; }
    .rounded-lg { border-radius: 15px !important; }
</style>
@endsection
