@extends('layouts.app')

@section('content')
<div class="billing-page py-5 bg-light" style="min-height: 100vh;">
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
                        <i class="fas fa-file-invoice-dollar mx-2" style="font-size: 0.7rem;"></i> Tuition & Fees
                    </li>
                </ol>
            </nav>
            <h1 class="font-weight-black" style="color: #1e293b; font-size: 2.8rem; letter-spacing: -1px;">Billing & <span class="text-maroon">Payments</span></h1>
            <p class="text-muted">Manage your tuition fees, view payment history, and download official receipts.</p>
        </div>

        <div class="row g-4">
            <div class="col-lg-8">
                <!-- 💰 Current Balance Card -->
                <div class="dashboard-card p-5 mb-4 text-white shadow-lg animate__animated animate__fadeInUp" style="background: linear-gradient(135deg, #800000, #4a0000); border-radius: 30px;">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h5 class="opacity-75 mb-1">Outstanding Balance</h5>
                            <h1 class="display-4 font-weight-black mb-3">₹ 45,000.00</h1>
                            <p class="small opacity-75 mb-0">Next Payment Due: <span class="font-weight-bold">June 15, 2026</span></p>
                        </div>
                        <div class="col-md-5 text-md-end mt-4 mt-md-0">
                            <button class="btn btn-light btn-lg px-5 rounded-pill font-weight-black text-maroon shadow-lg transition-all">PAY NOW</button>
                        </div>
                    </div>
                </div>

                <!-- 📄 Transaction History -->
                <div class="dashboard-card p-4 p-md-5 shadow-sm bg-white border-0" style="border-radius: 30px;">
                    <h4 class="font-weight-bold mb-4" style="color: #1e293b;">Payment History</h4>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead>
                                <tr class="text-muted small text-uppercase font-weight-bold">
                                    <th class="border-0">Date</th>
                                    <th class="border-0">Description</th>
                                    <th class="border-0">Amount</th>
                                    <th class="border-0">Method</th>
                                    <th class="border-0 text-center">Receipt</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $payments = [
                                        ['date' => 'Jan 10, 2026', 'desc' => 'Semester Tuition Fee', 'amt' => '₹ 65,000', 'method' => 'Net Banking', 'status' => 'Paid'],
                                        ['date' => 'Dec 05, 2025', 'desc' => 'Library & Lab Fees', 'amt' => '₹ 12,500', 'method' => 'Credit Card', 'status' => 'Paid'],
                                        ['date' => 'Nov 20, 2025', 'desc' => 'Exam Registration Fee', 'amt' => '₹ 2,500', 'method' => 'UPI', 'status' => 'Paid'],
                                    ];
                                @endphp
                                @foreach($payments as $p)
                                <tr style="border-bottom: 1px solid #f8fafc;">
                                    <td class="py-4 font-weight-bold small">{{ $p['date'] }}</td>
                                    <td class="py-4 font-weight-bold" style="color: #1e293b;">{{ $p['desc'] }}</td>
                                    <td class="py-4 font-weight-bold text-success">{{ $p['amt'] }}</td>
                                    <td class="py-4 text-muted small">{{ $p['method'] }}</td>
                                    <td class="py-4 text-center">
                                        <button class="btn btn-sm btn-light rounded-pill px-3 font-weight-bold"><i class="fas fa-download me-1"></i> PDF</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-white p-4 rounded-xl shadow-sm border-0 mb-4" style="border-radius: 20px;">
                    <h5 class="font-weight-bold mb-4" style="color: #1e293b;">Fee Breakdown</h5>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Tuition Fee</span>
                        <span class="font-weight-bold">₹ 35,000</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Lab & Tech Fee</span>
                        <span class="font-weight-bold">₹ 8,500</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="text-muted">Maintenance</span>
                        <span class="font-weight-bold">₹ 1,500</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mt-3 text-maroon h5 font-weight-black">
                        <span>Total Payable</span>
                        <span>₹ 45,000</span>
                    </div>
                </div>

                <div class="bg-soft-maroon p-4 rounded-xl shadow-sm border-0" style="border-radius: 20px; border: 1px dashed #800000 !important;">
                    <h6 class="font-weight-bold text-maroon mb-3"><i class="fas fa-info-circle me-2"></i> Financial Aid</h6>
                    <p class="small text-maroon opacity-75 mb-3">You have an active scholarship that covers 15% of your total tuition fee.</p>
                    <a href="#" class="btn btn-maroon w-100 rounded-pill font-weight-bold small">VIEW SCHOLARSHIP</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-soft-maroon { background: #fff1f2; }
    .transition-all:hover { transform: translateY(-3px); }
</style>
@endsection
