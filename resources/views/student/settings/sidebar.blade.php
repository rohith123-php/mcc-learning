<div class="settings-nav-card p-3 mb-4 shadow-sm border-0" style="background: white; border-radius: 20px;">
    <ul class="nav flex-column gap-2">
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('student.settings') ? 'active' : 'text-dark opacity-75' }} d-flex align-items-center gap-3 px-4 py-3 rounded-lg" href="{{ route('student.settings') }}">
                <i class="fas fa-user-circle"></i> Profile Details
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('student.settings.academic') ? 'active' : 'text-dark opacity-75' }} d-flex align-items-center gap-3 px-4 py-3 rounded-lg" href="{{ route('student.settings.academic') }}">
                <i class="fas fa-chart-line"></i> Academic Performance
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('student.settings.notifications') ? 'active' : 'text-dark opacity-75' }} d-flex align-items-center gap-3 px-4 py-3 rounded-lg" href="{{ route('student.settings.notifications') }}">
                <i class="fas fa-bell"></i> Notifications
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::routeIs('student.settings.billing') ? 'active' : 'text-dark opacity-75' }} d-flex align-items-center gap-3 px-4 py-3 rounded-lg" href="{{ route('student.settings.billing') }}">
                <i class="fas fa-credit-card"></i> Billing
            </a>
        </li>
    </ul>
</div>

<style>
    .settings-nav-card .nav-link.active {
        background: #fff1f2;
        color: #800000 !important;
        font-weight: 800;
    }
    .settings-nav-card .nav-link:hover:not(.active) {
        background: #f8fafc;
        opacity: 1 !important;
        color: #800000 !important;
    }
</style>
