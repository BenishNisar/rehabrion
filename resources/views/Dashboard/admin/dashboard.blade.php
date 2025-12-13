@extends("Layout.layouttwo")

@section("AdminContent")
<style>
    :root {
        --rehab-primary: #6b8f86;      /* soft clinic green */
        --rehab-primary-soft: #e3f0ec;
        --rehab-accent: #7a958f;
        --rehab-dark: #1f2933;
        --rehab-muted: #6b7280;
        --rehab-bg: #f5f7fa;
    }

    .dashboard-wrapper {
        font-family: "Poppins", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        /* background: var(--rehab-bg); */
        min-height: calc(100vh - 70px);
        padding: 20px 10px 32px;
    }

    .dashboard-header {
        background: #ffffff;
        border-radius: 14px;
        padding: 18px 22px;
        box-shadow: 0 8px 20px rgba(15, 23, 42, 0.06);
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        border: 1px solid rgba(148, 163, 184, 0.25);
    }

    .dashboard-header h1 {
        font-size: 22px;
        font-weight: 700;
        color: var(--rehab-dark);
        margin: 0 0 4px 0;
    }

    .dashboard-header p {
        margin: 0;
        font-size: 13px;
        color: var(--rehab-muted);
    }

    .header-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        margin-top: 6px;
        padding: 3px 10px;
        border-radius: 999px;
        font-size: 11px;
        text-transform: uppercase;
        letter-spacing: 0.09em;
        background: var(--rehab-primary-soft);
        color: var(--rehab-dark);
    }

    .header-pill span.dot {
        width: 7px;
        height: 7px;
        border-radius: 999px;
        background: #22c55e;
    }

    .mini-profile {
        display: flex;
        align-items: center;
        gap: 12px;
    }

    .mini-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--rehab-primary), var(--rehab-primary-soft));
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-weight: 700;
        font-size: 20px;
    }

    .mini-profile .name {
        font-size: 14px;
        font-weight: 600;
        color: var(--rehab-dark);
    }

    .mini-profile .role {
        font-size: 12px;
        color: var(--rehab-muted);
    }

    /* === Cards === */
    .stats-row {
        margin-top: 22px;
    }

    .dashboard-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 16px 16px 14px;
        box-shadow: 0 10px 22px rgba(15, 23, 42, 0.05);
        border: 1px solid rgba(148, 163, 184, 0.20);
        transition: transform 0.2s ease, box-shadow 0.2s ease, border-color 0.2s ease;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .dashboard-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 18px 32px rgba(15, 23, 42, 0.1);
        border-color: var(--rehab-primary);
    }

    .dashboard-card-top {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        gap: 10px;
    }

    .dashboard-icon-wrap {
        width: 40px;
        height: 40px;
        border-radius: 999px;
        background: rgba(177, 9, 55, 0.06);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dashboard-icon-wrap i {
        font-size: 20px;
        color: var(--rehab-accent);
    }

    .dashboard-title {
        font-size: 15px;
        font-weight: 600;
        color: var(--rehab-dark);
    }

    .dashboard-subtitle {
        font-size: 11px;
        color: var(--rehab-muted);
    }

    .dashboard-count {
        font-size: 26px;
        font-weight: 700;
        color: var(--rehab-dark);
        margin-top: 8px;
    }

    .dashboard-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 8px;
        margin-top: 10px;
    }

    .btn-dashboard {
        border-radius: 999px;
        border: 1px solid rgba(15, 23, 42, 0.12);
        padding: 6px 14px;
        font-size: 12px;
        font-weight: 500;
        color: var(--rehab-dark);
        background: #f9fafb;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
    }

    .btn-dashboard i {
        font-size: 11px;
    }

    .dashboard-card:hover .btn-dashboard {
        background: var(--rehab-dark);
        color: #f9fafb;
        border-color: var(--rehab-dark);
    }

    .dashboard-meta-text {
        font-size: 11px;
        color: #9ca3af;
    }

    /* === Charts === */
    .charts-row {
        margin-top: 26px;
    }

    .chart-card {
        background: #ffffff;
        border-radius: 16px;
        padding: 16px 18px 18px;
        box-shadow: 0 10px 22px rgba(15, 23, 42, 0.05);
        border: 1px solid rgba(148, 163, 184, 0.2);
        height: 100%;
    }

    .chart-title {
        font-size: 14px;
        font-weight: 600;
        color: var(--rehab-dark);
        margin-bottom: 4px;
    }

    .chart-subtitle {
        font-size: 11px;
        color: var(--rehab-muted);
        margin-bottom: 10px;
    }

    .chart-wrapper {
        position: relative;
        width: 100%;
        height: 260px;
    }

    @media (max-width: 767.98px) {
        .dashboard-header {
            flex-direction: column;
            align-items: flex-start;
        }
        .mini-profile {
            width: 100%;
            justify-content: space-between;
        }
    }
</style>

<div class="dashboard-wrapper">
    <div class="container-fluid px-0 px-md-2">

        {{-- Top Header --}}
        <div class="dashboard-header mb-3">
            <div>
                <h1>
                    Welcome
                    {{ auth()->user()->firstname ?? 'User' }}
                </h1>
                <p>Quick access to your clinic admin tools & insights.</p>
                <div class="header-pill">
                    <span class="dot"></span>
                    <span>Dashboard · Live overview</span>
                </div>
            </div>

            <div class="mini-profile">
                @php
                    $fn = auth()->user()->firstname ?? 'A';
                    $ln = auth()->user()->lastname ?? 'I';
                    $initials = mb_substr($fn,0,1).mb_substr($ln,0,1);
                @endphp
                <div class="mini-avatar">
                    {{ strtoupper($initials) }}
                </div>
                <div>
                    <div class="name">
                        {{ auth()->user()->firstname ?? 'Aziz' }}
                        {{ auth()->user()->lastname ?? 'Ismail' }}
                    </div>
                    <div class="role">Admin · Rehabrion  </div>
                </div>
            </div>
        </div>

        {{-- Stats Cards --}}
        <div class="row gy-4 stats-row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-users"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Users</div>
                        <div class="dashboard-subtitle">Admins, staff & patients.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\User::count() }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('users') }}" class="btn-dashboard">
                            <i class="fas fa-arrow-right"></i> users
                        </a>
                        <span class="dashboard-meta-text">User directory</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-user-shield"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Roles</div>
                        <div class="dashboard-subtitle">Permissions & access control.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\Role::count() }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('roles') }}" class="btn-dashboard">
                            <i class="fas fa-shield-alt"></i> View
                        </a>
                        <span class="dashboard-meta-text">Security</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-blog"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Blogs</div>
                        <div class="dashboard-subtitle">Patient education articles.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\Blog::count() }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('blog') }}" class="btn-dashboard">
                            <i class="fas fa-pen"></i> View
                        </a>
                        <span class="dashboard-meta-text">Content hub</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-tags"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Categories</div>
                        <div class="dashboard-subtitle">Organise by condition & topic.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\Category::count() }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('category') }}" class="btn-dashboard">
                            <i class="fas fa-list-ul"></i>View
                        </a>
                        <span class="dashboard-meta-text">Structure</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Messages</div>
                        <div class="dashboard-subtitle">Website & contact form queries.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\Contact::count() }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('contactus') }}" class="btn-dashboard">
                            <i class="fas fa-inbox"></i> View
                        </a>
                        <span class="dashboard-meta-text">Patient</span>
                    </div>
                </div>
            </div>

            {{-- future appointments card (jab table ready ho) --}}
            {{--
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="dashboard-card">
                    <div>
                        <div class="dashboard-card-top">
                            <div class="dashboard-icon-wrap">
                                <i class="fas fa-calendar-check"></i>
                            </div>
                        </div>
                        <div class="dashboard-title">Appointments</div>
                        <div class="dashboard-subtitle">Upcoming in-home sessions.</div>
                        <div class="dashboard-count">
                            {{ \App\Models\Appointment::count() ?? 0 }}
                        </div>
                    </div>
                    <div class="dashboard-footer">
                        <a href="{{ url('appointments') }}" class="btn-dashboard">
                            <i class="fas fa-calendar-alt"></i> View schedule
                        </a>
                        <span class="dashboard-meta-text">Booking flow</span>
                    </div>
                </div>
            </div>
            --}}
        </div>

        {{-- Charts Section --}}
        <div class="row gy-4 charts-row">
            <div class="col-lg-6">
                <div class="chart-card">
                    <div class="chart-title">System Overview</div>
                    <div class="chart-subtitle">Distribution of users, content & messages.</div>
                    <div class="chart-wrapper">
                        <canvas id="overviewChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="chart-card">
                    <div class="chart-title">Content & Communication</div>
                    <div class="chart-subtitle">Compare educational content vs patient messages.</div>
                    <div class="chart-wrapper">
                        <canvas id="contentChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Chart.js + simple config --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const stats = {
            users: {{ \App\Models\User::count() }},
            roles: {{ \App\Models\Role::count() }},
            blogs: {{ \App\Models\Blog::count() }},
            categories: {{ \App\Models\Category::count() }},
            messages: {{ \App\Models\Contact::count() }},
        };

        // Doughnut chart
        const ctxOverview = document.getElementById('overviewChart');
        if (ctxOverview) {
            new Chart(ctxOverview, {
                type: 'doughnut',
                data: {
                    labels: ['Users', 'Blogs', 'Categories', 'Messages'],
                    datasets: [{
                        data: [stats.users, stats.blogs, stats.categories, stats.messages],
                        backgroundColor: [
                            '#6b8f86',
                            '#b10937',
                            '#f59e0b',
                            '#3b82f6'
                        ],
                        borderWidth: 1,
                        borderColor: '#ffffff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { boxWidth: 14 }
                        }
                    }
                }
            });
        }

        // Bar chart
        const ctxContent = document.getElementById('contentChart');
        if (ctxContent) {
            new Chart(ctxContent, {
                type: 'bar',
                data: {
                    labels: ['Blogs', 'Messages'],
                    datasets: [{
                        label: 'Count',
                        data: [stats.blogs, stats.messages],
                        backgroundColor: ['#10b981', '#3b82f6'],
                        borderRadius: 6,
                        maxBarThickness: 40
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: { beginAtZero: true, ticks: { precision: 0 } }
                    },
                    plugins: {
                        legend: { display: false }
                    }
                }
            });
        }
    });
</script>
@endsection
