@extends("Layout.layout")
@section("Content")

@php
  $active = $selectedCondition;

  $heroBg = $active && $active->hero_image_url
    ? $active->hero_image_url
    : "https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?auto=format&fit=crop&w=1920&q=80";

  $badge = $active && $active->badge_text ? $active->badge_text : "Care";

  $title = $active ? $active->title : $subcategory->name;

  $desc = $active && $active->hero_description
    ? $active->hero_description
    : "Select a condition to see its recovery roadmap, causes, symptoms, and plan.";

  $sessions = $active && $active->estimated_sessions ? $active->estimated_sessions : "4 to 8";
  $stat1 = $active && $active->stat_one ? $active->stat_one : "Home";
  $stat2 = $active && $active->stat_two ? $active->stat_two : "Targeted";
  $stat3 = $active && $active->stat_three ? $active->stat_three : "Guided";

  $causes = is_array($active->causes ?? null) ? $active->causes : [];
  $symptoms = is_array($active->symptoms ?? null) ? $active->symptoms : [];
  $roadmap = is_array($active->roadmap_steps ?? null) ? $active->roadmap_steps : [];

  $ctaHeading = $active && $active->cta_heading ? $active->cta_heading : "Book your session";
  $ctaText = $active && $active->cta_text ? $active->cta_text : "Get matched with a therapist and start recovery with a clear, personalized plan.";
  $ctaBtnText = $active && $active->cta_button_text ? $active->cta_button_text : "Book Now";
  $ctaBtnLink = $active && $active->cta_button_link ? $active->cta_button_link : "/submit-medical-history";
@endphp

<style>
  .neck-roadmap-page{
    --primary:#7a958f;
    --primary-light:#bae0db;
    --primary-dark:#6a857f;
    --dark:#1f2d2a;
    --soft:#f5fbfa;
    --border:rgba(122,149,143,.22);
    --shadow:0 14px 40px rgba(31,45,42,.10);
  }

  .neck-roadmap-page{ margin-top:0 !important; padding-top:0 !important; }

  .neck-hero{
    background:#7a958f;
    background-size:cover;
    background-position:center;
    color:#fff;
    padding: 34px 0 26px;
    border-bottom: 1px solid rgba(255,255,255,.28);
  }

  .neck-hero .badge-soft{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:10px 16px;
    border-radius:999px;
    background: rgba(255,255,255,.18);
    border: 1px solid rgba(255,255,255,.24);
    backdrop-filter: blur(10px);
    font-weight:600;
    font-size:14px;
  }

  .neck-hero .badge-dot{
    width:10px;
    height:10px;
    border-radius:999px;
    background:#fff;
    opacity:.9;
  }

  .neck-hero h1{
    font-size: 40px;
    font-weight: 800;
    margin: 14px 0 10px;
    letter-spacing: .2px;
    text-shadow: 0 10px 30px rgba(0,0,0,.20);
  }

  .neck-hero p{
    max-width: 760px;
    margin: 0 auto;
    opacity: .95;
    font-size: 16px;
  }

  .neck-wrap{ margin-top: -18px; padding-bottom: 10px; }

  .section-head{ text-align:center; margin-bottom: 18px; }
  .section-head h2{
    color: var(--dark);
    font-weight: 800;
    font-size: 28px;
    margin: 0 0 10px;
  }

  .accent-line{
    width: 74px;
    height: 6px;
    border-radius: 999px;
    margin: 0 auto;
    background: linear-gradient(90deg, var(--primary-light), var(--primary));
  }

  .stats-strip{
    padding: 18px;
    border-radius: 18px;
    background: #fff;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
  }

  .stat{ text-align:center; padding: 10px 8px; }
  .stat .num{ display:block; font-size: 26px; font-weight: 900; color: var(--primary); line-height: 1; }
  .stat .lbl{ display:block; margin-top: 6px; color: rgba(31,45,42,.70); font-size: 13px; font-weight: 600; }

  .cause-card{
    height: 100%;
    padding: 22px;
    border-radius: 16px;
    border: 1px solid var(--border);
    background:#fff;
    transition: transform .25s ease, box-shadow .25s ease;
  }
  .cause-card:hover{ transform: translateY(-4px); box-shadow: 0 18px 45px rgba(31,45,42,.12); }

  .symptom{
    display:flex;
    gap: 12px;
    padding: 16px;
    border-radius: 14px;
    border: 1px solid rgba(122,149,143,.18);
    background:#fff;
    height: 100%;
  }
  .symptom .tick{
    width: 34px;
    height: 34px;
    border-radius: 12px;
    background: rgba(186,224,219,.55);
    border: 1px solid rgba(122,149,143,.18);
    flex: 0 0 34px;
    margin-top: 2px;
    position: relative;
  }
  .symptom .tick:before{
    content:"";
    position:absolute;
    left: 10px;
    top: 14px;
    width: 12px;
    height: 6px;
    border-left: 3px solid var(--primary);
    border-bottom: 3px solid var(--primary);
    transform: rotate(-45deg);
  }
  .symptom p{ margin:0; color: rgba(31,45,42,.72); line-height: 1.55; }

  .roadmap{
    overflow:hidden;
    border-radius: 18px;
    border: 1px solid var(--border);
    box-shadow: var(--shadow);
    background:#fff;
  }
  .roadmap-head{
    padding: 28px 18px;
    text-align:center;
    background: linear-gradient(135deg, var(--primary), var(--primary-dark));
    color:#fff;
    position:relative;
  }
  .roadmap-head .inner{ position:relative; }
  .roadmap-head .step{
    width: 74px;
    height: 74px;
    border-radius: 999px;
    margin: 0 auto 12px;
    background:#fff;
    color: var(--primary);
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight: 900;
    font-size: 30px;
    border: 6px solid rgba(186,224,219,.75);
    box-shadow: 0 12px 25px rgba(0,0,0,.18);
  }

  .roadmap-body{ padding: 26px 18px; }
  .roadmap-body ul{
    margin: 0;
    padding-left: 18px;
    color: rgba(31,45,42,.78);
    line-height: 1.8;
    font-size: 15px;
  }
  .roadmap-body li{ margin-bottom: 8px; }

  .cta{
    margin: 18px 0 14px;
    padding: 20px 18px;
    border-radius: 18px;
    background: linear-gradient(135deg, rgba(122,149,143,.95), rgba(186,224,219,.92));
    border: 1px solid rgba(255,255,255,.30);
    color:#0f1b18;
    box-shadow: var(--shadow);
    text-align:center;
  }

  .btn-book{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding: 12px 18px;
    border-radius: 999px;
    background:#fff;
    border: 1px solid rgba(15,27,24,.10);
    color: var(--dark);
    font-weight: 800;
    text-decoration:none;
    transition: transform .2s ease, box-shadow .2s ease;
    min-width: 200px;
  }
  .btn-book:hover{ transform: translateY(-2px); box-shadow: 0 14px 30px rgba(0,0,0,.12); color: var(--dark); }

  .cond-pills{
    background:#fff;
    border:1px solid var(--border);
    box-shadow: var(--shadow);
    border-radius: 18px;
    padding: 14px;
    margin-top: -18px;
  }
  .cond-pill{
    display:inline-flex;
    align-items:center;
    padding: 10px 14px;
    border-radius: 999px;
    border:1px solid rgba(122,149,143,.22);
    background: rgba(245,251,250,.85);
    font-weight:700;
    color: rgba(31,45,42,.85);
    text-decoration:none;
    margin: 6px 6px 0 0;
    transition: transform .15s ease, box-shadow .15s ease;
  }
  .cond-pill:hover{ transform: translateY(-1px); box-shadow: 0 12px 25px rgba(31,45,42,.10); color: rgba(31,45,42,.95); }
  .cond-pill.active{
    background: rgba(186,224,219,.65);
    border-color: rgba(122,149,143,.35);
    color: rgba(31,45,42,.95);
  }

  @media (max-width: 767.98px){
    .neck-hero h1{ font-size: 28px; }
    .neck-hero{ padding: 26px 0 22px; }
    .neck-wrap{ margin-top: -14px; padding-bottom: 6px; }
  }
</style>

<main class="neck-roadmap-page">

  <section class="neck-hero">
    <div class="container text-center">
      <div class="badge-soft">
        <span class="badge-dot"></span>
        {{ $badge }}
      </div>
      <h1>{{ $title }}</h1>
      <p>{{ $desc }}</p>
    </div>
  </section>

  {{-- <div class="container"> --}}
{{--
    <div class="cond-pills">
      <div class="fw-bold mb-2" style="color: rgba(31,45,42,.85);">
        {{ $subcategory->name }} conditions
      </div>

      @forelse($conditions as $c)
        <a
          class="cond-pill {{ $active && $active->id === $c->id ? 'active' : '' }}"
          href="{{ route('Home.conditions.we.treat', $subcategory->slug) }}?condition={{ $c->slug }}"
        >
          {{ $c->title }}
        </a>
      @empty
        <div class="text-muted">No conditions found in this subcategory.</div>
      @endforelse
    </div> --}}

  {{-- </div> --}}
{{--  --}}
  <div class="container neck-wrap">

    @if(!$active)
      <div class="alert alert-light border mt-4">
        Please add conditions for this subcategory from the dashboard.
      </div>
    @else

      <div class="stats-strip mb-4">
        <div class="row g-0">
          <div class="col-6 col-md-3">
            <div class="stat">
              <span class="num">{{ $sessions }}</span>
              <span class="lbl">Estimated sessions</span>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat">
              <span class="num">{{ $stat1 }}</span>
              <span class="lbl">In home sessions</span>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat">
              <span class="num">{{ $stat2 }}</span>
              <span class="lbl">Plan built for you</span>
            </div>
          </div>
          <div class="col-6 col-md-3">
            <div class="stat">
              <span class="num">{{ $stat3 }}</span>
              <span class="lbl">Home exercise support</span>
            </div>
          </div>
        </div>
      </div>

      <section class="mb-5">
        <div class="section-head">
          <div class="accent-line mb-3"></div>
          <h2>What Causes This</h2>
        </div>

        <div class="row g-4">
          @forelse($causes as $c)
            <div class="col-lg-4 col-md-6">
              <div class="cause-card">
                <h4 class="mb-0">{{ $c }}</h4>
              </div>
            </div>
          @empty
            <div class="col-12">
              <div class="alert alert-light border">No causes added yet.</div>
            </div>
          @endforelse
        </div>
      </section>

      <section class="mb-5">
        <div class="section-head">
          <div class="accent-line mb-3"></div>
          <h2>Symptoms</h2>
        </div>

        <div class="row g-3">
          @forelse($symptoms as $s)
            <div class="col-lg-4 col-md-6">
              <div class="symptom">
                <div class="tick"></div>
                <div><p>{{ $s }}</p></div>
              </div>
            </div>
          @empty
            <div class="col-12">
              <div class="alert alert-light border">No symptoms added yet.</div>
            </div>
          @endforelse
        </div>
      </section>

      <section class="mb-4">
        <div class="section-head">
          <div class="accent-line mb-3"></div>
          <h2>Rehab Roadmap</h2>
        </div>

        <div class="roadmap">
          <div class="roadmap-head">
            <div class="inner">
              <div class="step">1</div>
              <h3>Assessment and targeted treatment plan</h3>
              <p>{{ $desc }}</p>
              <div class="sessions-badge">
                <span class="dot"></span>
                Estimated sessions: {{ $sessions }}
              </div>
            </div>
          </div>

          <div class="roadmap-body">
            <ul>
              @forelse($roadmap as $r)
                <li>{{ $r }}</li>
              @empty
                <li>No roadmap steps added yet.</li>
              @endforelse
            </ul>
          </div>
        </div>
      </section>

      <section class="cta">
        <h4>{{ $ctaHeading }}</h4>
        <p>{{ $ctaText }}</p>

        <a class="btn-book" href="{{ asset('/submit-medical-history') }}">
Book Now        </a>
      </section>

    @endif

  </div>
</main>

@endsection
