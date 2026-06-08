@extends('layouts.app')

@section('content')
<div class="schedule-page py-5 bg-light" style="min-height: 100vh;">
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
                        <i class="fas fa-calendar-alt mx-2" style="font-size: 0.7rem;"></i> Academic Schedule
                    </li>
                </ol>
            </nav>
            <h1 class="font-weight-black" style="color: #1e293b; font-size: 2.8rem; letter-spacing: -1px;">Academic <span class="text-maroon">Schedule</span></h1>
            <p class="text-muted">Detailed timeline of deadlines, assignments, and examination dates for the current semester.</p>
        </div>

        <div class="bg-white p-5 shadow-sm border-0 animate__animated animate__fadeInUp" style="border-radius: 30px;">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="bg-light">
                        <tr style="border-bottom: 2px solid #f1f5f9;">
                            <th class="px-4 py-3 border-0 text-uppercase small font-weight-black" style="color: #64748b; letter-spacing: 1px;">Date</th>
                            <th class="px-4 py-3 border-0 text-uppercase small font-weight-black" style="color: #64748b; letter-spacing: 1px;">Event / Deadline</th>
                            <th class="px-4 py-3 border-0 text-uppercase small font-weight-black" style="color: #64748b; letter-spacing: 1px;">Category</th>
                            <th class="px-4 py-3 border-0 text-uppercase small font-weight-black" style="color: #64748b; letter-spacing: 1px;">Status</th>
                            <th class="px-4 py-3 border-0 text-uppercase small font-weight-black text-center" style="color: #64748b; letter-spacing: 1px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $schedule = [
                                ['date' => 'May 15, 2026', 'title' => 'Lab Submission: Data Science Basics', 'cat' => 'Assignment', 'status' => 'Upcoming', 'color' => 'primary'],
                                ['date' => 'May 18, 2026', 'title' => 'Internal Assessment - Phase II', 'cat' => 'Exam', 'status' => 'Pending', 'color' => 'warning'],
                                ['date' => 'May 22, 2026', 'title' => 'Final Project Proposal Deadline', 'cat' => 'Project', 'status' => 'Action Required', 'color' => 'danger'],
                                ['date' => 'May 25, 2026', 'title' => 'Workshop: Advanced UI Patterns', 'cat' => 'Workshop', 'status' => 'Registered', 'color' => 'success'],
                                ['date' => 'June 02, 2026', 'title' => 'End Semester Theory Examinations', 'cat' => 'Exam', 'status' => 'Future', 'color' => 'secondary'],
                            ];
                        @endphp

                        @foreach($schedule as $item)
                        <tr style="border-bottom: 1px solid #f8fafc;">
                            <td class="px-4 py-4">
                                <div class="d-flex align-items-center">
                                    <div class="bg-soft-maroon text-maroon p-2 rounded-lg me-3 text-center" style="min-width: 50px;">
                                        <div class="font-weight-black" style="font-size: 1.1rem; line-height: 1;">{{ date('d', strtotime($item['date'])) }}</div>
                                        <div class="small text-uppercase font-weight-bold" style="font-size: 0.6rem;">{{ date('M', strtotime($item['date'])) }}</div>
                                    </div>
                                    <div class="text-muted small font-weight-bold">{{ date('Y', strtotime($item['date'])) }}</div>
                                </div>
                            </td>
                            <td class="px-4 py-4">
                                <div class="font-weight-bold" style="color: #1e293b; font-size: 1rem;">{{ $item['title'] }}</div>
                            </td>
                            <td class="px-4 py-4">
                                <span class="text-muted font-weight-bold small">{{ $item['cat'] }}</span>
                            </td>
                            <td class="px-4 py-4">
                                <div class="d-flex align-items-center">
                                    <div class="rounded-circle bg-{{ $item['color'] }} me-2" style="width: 8px; height: 8px;"></div>
                                    <span class="small font-weight-bold" style="color: #1e293b;">{{ $item['status'] }}</span>
                                </div>
                            </td>
                            <td class="px-4 py-4 text-center">
                                <button class="btn btn-sm btn-light rounded-pill px-3 font-weight-bold" style="font-size: 0.75rem;">DETAILS</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<style>
    .bg-soft-maroon { background: #fff1f2; color: #800000; }
    .table tbody tr:hover {
        background-color: #f8fafc;
    }
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        font-size: 1.2rem;
        line-height: 1;
        vertical-align: middle;
    }
</style>
@endsection
