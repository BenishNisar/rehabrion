@extends("Layout.layouttwo")
@section("AdminContent")

<style>
  :root{
    --mint:#bae0db;
    --teal:#7a958f;
    --teal-dark:#6a857f;
    --bg:#f6fbfa;
    --card:#ffffff;
    --text:#0f172a;
    --muted:#64748b;
    --border: rgba(122,149,143,.22);
    --shadow: 0 12px 30px rgba(15, 23, 42, .08);
  }

  .dash-wrap{
    padding: 18px 10px 28px;
    min-height: calc(100vh - 70px);
  }

  .dash-shell{
    margin: 0 10px;
    background: var(--bg);
    border-radius: 18px;
    padding: 14px;
  }

  .dash-head{
    background: linear-gradient(135deg, rgba(186,224,219,.60), rgba(122,149,143,.25));
    border: 1px solid rgba(122,149,143,.25);
    border-radius: 18px;
    padding: 16px;
    box-shadow: 0 10px 22px rgba(122,149,143,.16);
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 14px;
  }

  .dash-head-left h1{
    margin:0;
    font-size: 22px;
    font-weight: 900;
    color: var(--text);
    letter-spacing: .2px;
  }

  .dash-head-left p{
    margin: 4px 0 0;
    font-size: 13px;
    color: rgba(15,23,42,.72);
  }

  .head-pill{
    display:inline-flex;
    align-items:center;
    gap: 8px;
    margin-top: 8px;
    padding: 6px 10px;
    border-radius: 999px;
    font-size: 11px;
    font-weight: 900;
    letter-spacing: .08em;
    text-transform: uppercase;
    background: rgba(255,255,255,.65);
    border: 1px solid rgba(122,149,143,.22);
    color: rgba(15,23,42,.75);
  }

  .head-pill .dot{
    width:8px;
    height:8px;
    border-radius: 999px;
    background: #22c55e;
    box-shadow: 0 0 0 4px rgba(34,197,94,.12);
  }

  .mini-profile{
    display:flex;
    align-items:center;
    gap: 12px;
  }

  .mini-avatar{
    width: 46px;
    height: 46px;
    border-radius: 999px;
    background: radial-gradient(circle at 30% 30%, rgba(186,224,219,.95) 0%, rgba(122,149,143,.95) 55%, rgba(106,133,127,.95) 100%);
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight: 900;
    font-size: 16px;
    box-shadow: 0 12px 22px rgba(122,149,143,.20);
    border: 1px solid rgba(255,255,255,.55);
  }

  .mini-name{
    font-size: 14px;
    font-weight: 900;
    color: var(--text);
    line-height: 1.2;
  }

  .mini-role{
    font-size: 12px;
    color: rgba(15,23,42,.65);
    font-weight: 700;
    margin-top: 2px;
  }

  .grid-gap{
    margin-top: 16px;
  }

  .stat-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow);
    padding: 16px;
    height: 100%;
    display:flex;
    flex-direction:column;
    justify-content:space-between;
    transition: .18s;
    position: relative;
    overflow:hidden;
  }

  .stat-card::before{
    content:"";
    position:absolute;
    inset:-2px;
    background: radial-gradient(circle at 20% 10%, rgba(186,224,219,.45) 0%, rgba(255,255,255,0) 55%);
    opacity:.9;
    pointer-events:none;
  }

  .stat-card:hover{
    transform: translateY(-4px);
    box-shadow: 0 18px 34px rgba(15,23,42,.12);
    border-color: rgba(122,149,143,.45);
  }

  .stat-top{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap: 12px;
    position: relative;
    z-index: 1;
  }

  .icon-wrap{
    width: 44px;
    height: 44px;
    border-radius: 999px;
    background: rgba(186,224,219,.55);
    border: 1px solid rgba(122,149,143,.22);
    display:flex;
    align-items:center;
    justify-content:center;
    box-shadow: 0 12px 20px rgba(122,149,143,.14);
  }

  .icon-wrap i{
    font-size: 18px;
    color: var(--teal);
  }

  .stat-title{
    margin-top: 10px;
    font-size: 14px;
    font-weight: 900;
    color: var(--text);
    position: relative;
    z-index: 1;
  }

  .stat-sub{
    font-size: 12px;
    color: rgba(15,23,42,.65);
    font-weight: 700;
    margin-top: 3px;
    position: relative;
    z-index: 1;
  }

  .stat-count{
    font-size: 30px;
    font-weight: 900;
    color: var(--text);
    margin-top: 10px;
    position: relative;
    z-index: 1;
    letter-spacing: .3px;
  }

  .stat-foot{
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap: 10px;
    margin-top: 12px;
    position: relative;
    z-index: 1;
  }

  .btn-mini{
    border-radius: 999px;
    padding: 8px 14px;
    font-size: 12px;
    font-weight: 900;
    text-decoration:none;
    display:inline-flex;
    align-items:center;
    gap: 8px;
    border: 1px solid rgba(122,149,143,.25);
    background: rgba(255,255,255,.9);
    color: rgba(15,23,42,.78);
    transition: .18s;
    white-space: nowrap;
  }

  .btn-mini i{ font-size: 11px; color: var(--teal); }

  .stat-card:hover .btn-mini{
    background: var(--teal);
    border-color: var(--teal);
    color:#fff;
  }

  .stat-card:hover .btn-mini i{
    color:#fff;
  }

  .meta{
    font-size: 11px;
    color: rgba(15,23,42,.55);
    font-weight: 800;
    white-space: nowrap;
  }

  .chart-card{
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow);
    padding: 16px;
    height: 100%;
  }

  .chart-head{
    display:flex;
    align-items:flex-start;
    justify-content:space-between;
    gap: 10px;
    margin-bottom: 10px;
  }

  .chart-title{
    font-size: 14px;
    font-weight: 900;
    color: var(--text);
    margin:0;
  }

  .chart-sub{
    font-size: 12px;
    font-weight: 700;
    color: rgba(15,23,42,.65);
    margin: 4px 0 0;
  }

  .chart-wrap{
    position: relative;
    width: 100%;
    height: 280px;
  }

  .hint{
    font-size: 11px;
    font-weight: 800;
    color: rgba(15,23,42,.55);
    padding: 6px 10px;
    border-radius: 999px;
    border: 1px solid rgba(122,149,143,.22);
    background: rgba(186,224,219,.25);
    white-space: nowrap;
  }

  @media (max-width: 767.98px){
    .dash-head{ flex-direction:column; align-items:stretch; }
    .mini-profile{ justify-content:space-between; width:100%; }
    .dash-shell{ margin: 0 6px; }
  }
</style>

<div class="dash-wrap">
  <div class="container-fluid px-0">
    <div class="dash-shell">

      <div class="dash-head">
        <div class="dash-head-left">
          <h1>Welcome {{ auth()->user()->firstname ?? 'User' }}</h1>
          <p>Quick access to your clinic admin tools and insights.</p>
          <div class="head-pill">
            <span class="dot"></span>
            <span>Dashboard live overview</span>
          </div>
        </div>

        <div class="mini-profile">
          @php
            $fn = auth()->user()->firstname ?? 'A';
            $ln = auth()->user()->lastname ?? 'I';
            $initials = mb_substr($fn,0,1).mb_substr($ln,0,1);
          @endphp

          <div class="mini-avatar">{{ strtoupper($initials) }}</div>

          <div>
            <div class="mini-name">
              {{ auth()->user()->firstname ?? 'Aziz' }}
              {{ auth()->user()->lastname ?? 'Ismail' }}
            </div>
            <div class="mini-role">Admin Rehabrion</div>
          </div>
        </div>
      </div>

      <div class="row gy-4 grid-gap">
        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="stat-card">
            <div>
              <div class="stat-top">
                <div class="icon-wrap"><i class="fas fa-users"></i></div>
                <span class="hint">Directory</span>
              </div>
              <div class="stat-title">Users</div>
              <div class="stat-sub">Admins staff and patients</div>
              <div class="stat-count">{{ \App\Models\User::count() }}</div>
            </div>
            <div class="stat-foot">
              <a href="{{ url('users') }}" class="btn-mini"><i class="fas fa-arrow-right"></i> View</a>
              <span class="meta">Manage users</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="stat-card">
            <div>
              <div class="stat-top">
                <div class="icon-wrap"><i class="fas fa-user-shield"></i></div>
                <span class="hint">Security</span>
              </div>
              <div class="stat-title">Roles</div>
              <div class="stat-sub">Permissions and access control</div>
              <div class="stat-count">{{ \App\Models\Role::count() }}</div>
            </div>
            <div class="stat-foot">
              <a href="{{ url('roles') }}" class="btn-mini"><i class="fas fa-shield-alt"></i> View</a>
              <span class="meta">Access rules</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="stat-card">
            <div>
              <div class="stat-top">
                <div class="icon-wrap"><i class="fas fa-blog"></i></div>
                <span class="hint">Content</span>
              </div>
              <div class="stat-title">Blogs</div>
              <div class="stat-sub">Patient education articles</div>
              <div class="stat-count">{{ \App\Models\Blog::count() }}</div>
            </div>
            <div class="stat-foot">
              <a href="{{ url('blog') }}" class="btn-mini"><i class="fas fa-pen"></i> View</a>
              <span class="meta">Blog hub</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="stat-card">
            <div>
              <div class="stat-top">
                <div class="icon-wrap"><i class="fas fa-tags"></i></div>
                <span class="hint">Structure</span>
              </div>
              <div class="stat-title">Categories</div>
              <div class="stat-sub">Organise by condition and topic</div>
              <div class="stat-count">{{ \App\Models\Category::count() }}</div>
            </div>
            <div class="stat-foot">
              <a href="{{ url('category') }}" class="btn-mini"><i class="fas fa-list-ul"></i> View</a>
              <span class="meta">Taxonomy</span>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6">
          <div class="stat-card">
            <div>
              <div class="stat-top">
                <div class="icon-wrap"><i class="fas fa-envelope-open-text"></i></div>
                <span class="hint">Inbox</span>
              </div>
              <div class="stat-title">Messages</div>
              <div class="stat-sub">Website and contact queries</div>
              <div class="stat-count">{{ \App\Models\Contact::count() }}</div>
            </div>
            <div class="stat-foot">
              <a href="{{ url('contactus') }}" class="btn-mini"><i class="fas fa-inbox"></i> View</a>
              <span class="meta">Patient messages</span>
            </div>
          </div>
        </div>
      </div>

      <div class="row gy-4 mt-2">
        <div class="col-lg-6">
          <div class="chart-card">
            <div class="chart-head">
              <div>
                <div class="chart-title">System Overview</div>
                <div class="chart-sub">Distribution of users content and messages</div>
              </div>
              <div class="hint">Overview</div>
            </div>
            <div class="chart-wrap">
              <canvas id="overviewChart"></canvas>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="chart-card">
            <div class="chart-head">
              <div>
                <div class="chart-title">Content and Communication</div>
                <div class="chart-sub">Compare blogs versus messages</div>
              </div>
              <div class="hint">Compare</div>
            </div>
            <div class="chart-wrap">
              <canvas id="contentChart"></canvas>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

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

    const ctxOverview = document.getElementById('overviewChart');
    if (ctxOverview) {
      new Chart(ctxOverview, {
        type: 'doughnut',
        data: {
          labels: ['Users', 'Blogs', 'Categories', 'Messages'],
          datasets: [{
            data: [stats.users, stats.blogs, stats.categories, stats.messages],
            backgroundColor: ['#7a958f', '#10b981', '#f59e0b', '#3b82f6'],
            borderWidth: 2,
            borderColor: '#ffffff'
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '68%',
          plugins: {
            legend: {
              position: 'bottom',
              labels: { boxWidth: 14, boxHeight: 14 }
            },
            tooltip: { padding: 10 }
          }
        }
      });
    }

    const ctxContent = document.getElementById('contentChart');
    if (ctxContent) {
      new Chart(ctxContent, {
        type: 'bar',
        data: {
          labels: ['Blogs', 'Messages'],
          datasets: [{
            label: 'Count',
            data: [stats.blogs, stats.messages],
            backgroundColor: ['#7a958f', '#3b82f6'],
            borderRadius: 10,
            maxBarThickness: 44
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true,
              ticks: { precision: 0 }
            },
            x: { grid: { display: false } }
          },
          plugins: {
            legend: { display: false },
            tooltip: { padding: 10 }
          }
        }
      });
    }
  });
</script>

@endsection
