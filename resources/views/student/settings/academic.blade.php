@extends('layouts.app')

@section('content')
<div class="student-settings-portal">
    <!-- 🏔️ Academic Hero -->
    <section class="settings-hero py-5" style="background: linear-gradient(rgba(74, 0, 0, 0.95), rgba(0, 0, 0, 0.9)), url('{{ asset('images/mcc_library_main.png') }}'); background-size: cover; background-position: center; color: white;">
        <div class="container py-4">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb bg-transparent p-0 m-0" style="font-size: 0.85rem;">
                    <li class="breadcrumb-item"><a href="{{ route('student.portal') }}" class="text-white opacity-75 text-decoration-none">Dashboard</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Academic Performance</li>
                </ol>
            </nav>
            <h1 class="display-4 font-weight-bold mb-0" style="font-family: 'Playfair Display', serif;">Academic Performance</h1>
            <p class="lead opacity-75">Detailed overview of your grades, attendance, and learning progress.</p>
        </div>
    </section>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                @include('student.settings.sidebar')
            </div>

            <div class="col-lg-9">
                <!-- Quick Stats -->
                <div class="row g-4 mb-4">
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-xl shadow-sm border border-light text-center h-100" style="border-radius: 20px;">
                            <h6 class="text-muted small text-uppercase font-weight-bold mb-3" style="letter-spacing: 1px;">Overall GPA</h6>
                            <h2 class="display-5 font-weight-bold text-maroon mb-0">3.85</h2>
                            <p class="small text-success mt-2 mb-0"><i class="fas fa-arrow-up me-1"></i> Top 5% of Batch</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-xl shadow-sm border border-light text-center h-100" style="border-radius: 20px;">
                            <h6 class="text-muted small text-uppercase font-weight-bold mb-3" style="letter-spacing: 1px;">Total Attendance</h6>
                            <h2 class="display-5 font-weight-bold text-dark mb-0">94.2%</h2>
                            <p class="small text-muted mt-2 mb-0">Min Required: 75%</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-4 bg-white rounded-xl shadow-sm border border-light text-center h-100" style="border-radius: 20px;">
                            <h6 class="text-muted small text-uppercase font-weight-bold mb-3" style="letter-spacing: 1px;">Credits Earned</h6>
                            <h2 class="display-5 font-weight-bold text-dark mb-0">124</h2>
                            <p class="small text-muted mt-2 mb-0">Target: 180 Pts</p>
                        </div>
                    </div>
                </div>

                <!-- Subject Wise Performance -->
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0 mb-4" style="background: white; border-radius: 24px;">
                    <h4 class="font-weight-bold mb-4" style="color: #1e293b;">Subject Performance</h4>
                    <div class="table-responsive">
                        <table class="table table-borderless align-middle">
                            <thead class="text-muted small text-uppercase" style="letter-spacing: 1px;">
                                <tr class="border-bottom">
                                    <th class="ps-0 py-3">Course Title</th>
                                    <th class="py-3">Attendance</th>
                                    <th class="py-3">Internal Marks</th>
                                    <th class="py-3 text-center">Grade</th>
                                </tr>
                            </thead>
                            <tbody class="font-weight-bold" style="color: #1e293b; font-size: 0.95rem;">
                                <tr class="border-bottom" style="border-color: #f1f5f9 !important;">
                                    <td class="ps-0 py-4">Web Technology Fundamentals</td>
                                    <td>98%</td>
                                    <td>45 / 50</td>
                                    <td class="text-center"><span class="badge bg-soft-maroon text-maroon px-3 py-2 rounded-pill">A+</span></td>
                                </tr>
                                <tr class="border-bottom" style="border-color: #f1f5f9 !important;">
                                    <td class="ps-0 py-4">Database Management Systems</td>
                                    <td>92%</td>
                                    <td>42 / 50</td>
                                    <td class="text-center"><span class="badge bg-soft-maroon text-maroon px-3 py-2 rounded-pill">A</span></td>
                                </tr>
                                <tr class="border-bottom" style="border-color: #f1f5f9 !important;">
                                    <td class="ps-0 py-4">Data Structures & Algorithms</td>
                                    <td>89%</td>
                                    <td>38 / 50</td>
                                    <td class="text-center"><span class="badge bg-soft-maroon text-maroon px-3 py-2 rounded-pill">B+</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Learning Progress Chart Placeholder -->
                <div class="settings-content-card p-4 p-md-5 shadow-sm border-0" style="background: white; border-radius: 24px;">
                    <h4 class="font-weight-bold mb-4" style="color: #1e293b;">Learning Velocity</h4>
                    <div class="p-5 bg-light rounded-xl text-center" style="border-radius: 20px; border: 2px dashed #e2e8f0;">
                        <i class="fas fa-chart-area text-muted display-4 mb-3"></i>
                        <h6 class="font-weight-bold text-muted">Weekly Progress Insights</h6>
                        <p class="small text-muted mb-0">Your learning activity is being tracked. Detailed charts will appear here as you complete more lessons.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .student-settings-portal { background: #f8fafc; min-height: 100vh; }
    .text-maroon { color: #800000 !important; }
    .bg-soft-maroon { background: #fff1f2; }
    .bg-light { background-color: #f8fafc !important; }
</style>
@endsection
