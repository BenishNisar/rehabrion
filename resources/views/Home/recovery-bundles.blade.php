@extends("Layout.layout")
@section("Content")

<div class="rehabrion-packages-page" id="rehabrion-packages-page">

    <!-- Hero Section -->
    <section class="packages-hero">
        <div class="container">
            <div class="hero-content text-center">
                <span class="hero-kicker">Rehabrion</span>
                <h1 class="hero-title">Recovery Packages</h1>
                <p class="hero-subtitle">Personalized Care. Clear Structure. Real Recovery.</p>
                <p class="hero-description">
                    All Rehabrion packages include professional consultation and one-on-one home-care physiotherapy sessions,
                    delivered by trained and licensed physiotherapists.
                </p>

                <div class="hero-actions">
                    <a href="/booking" class="btn-cta-primary">Book a Consultation</a>
                    <a href="/contact" class="btn-cta-secondary">Talk to Our Team</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Grid -->
    <section class="packages-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>Choose Your Recovery Path</h2>
                <p>Select the package that best fits your rehabilitation needs</p>
            </div>

            <div class="packages-grid">

                <!-- FlexCare Session -->
                <article class="package-card">
                    <div class="package-top">
                        <div class="package-badge">Single Session</div>
                        <div class="package-header">
                            <h3 class="package-title">FlexCare Session</h3>
                            <p class="package-subtitle">Single Physiotherapy Visit</p>
                        </div>

                        <div class="package-best-for">
                            <strong>Best for:</strong> First-time patients, mild pain, or urgent consultation
                        </div>

                        <div class="package-includes">
                            <h4>Includes</h4>
                            <ul>
                                <li>Physiotherapy consultation & assessment</li>
                                <li>One-on-one home-care physiotherapy session</li>
                                <li>Pain management & guided exercises</li>
                                <li>Initial recovery advice</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Price</div>
                            <div class="price-amount">Starting from PKR 2,000</div>
                        </div>
                        <a href="/booking" class="btn-package">Book This Package</a>
                    </div>
                </article>

                <!-- MoveStart Plan (Featured) -->
                <article class="package-card featured">
                    <div class="package-top">
                        <div class="package-badge popular">Most Popular</div>
                        <div class="package-header">
                            <h3 class="package-title">MoveStart Plan</h3>
                            <p class="package-subtitle">Starter Recovery Package (3 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <strong>Best for:</strong> Early-stage pain, posture issues, minor injuries
                        </div>

                        <div class="package-includes">
                            <h4>Includes</h4>
                            <ul>
                                <li>Initial detailed consultation</li>
                                <li>3 home-care physiotherapy sessions</li>
                                <li>Personalized exercise & mobility plan</li>
                                <li>Pain reduction techniques</li>
                                <li>Progress review</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Price</div>
                            <div class="price-amount">PKR 6,000 – 7,500</div>
                        </div>
                        <a href="/booking" class="btn-package featured-btn">Choose This Plan</a>
                    </div>
                </article>

                <!-- MotionCare Program -->
                <article class="package-card">
                    <div class="package-top">
                        <div class="package-badge">Standard</div>
                        <div class="package-header">
                            <h3 class="package-title">MotionCare Program</h3>
                            <p class="package-subtitle">Standard Recovery Package (6 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <strong>Best for:</strong> Injury rehabilitation, post-surgical recovery
                        </div>

                        <div class="package-includes">
                            <h4>Includes</h4>
                            <ul>
                                <li>Comprehensive physiotherapy assessment</li>
                                <li>6 home-care physiotherapy sessions</li>
                                <li>Structured rehab & strengthening plan</li>
                                <li>Posture correction & mobility training</li>
                                <li>Continuous progress monitoring</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Price</div>
                            <div class="price-amount">PKR 12,000 – 15,000</div>
                        </div>
                        <a href="/booking" class="btn-package">Choose This Program</a>
                    </div>
                </article>

                <!-- TotalRestore Program -->
                <article class="package-card premium">
                    <div class="package-top">
                        <div class="package-badge premium-badge">Premium</div>
                        <div class="package-header">
                            <h3 class="package-title">TotalRestore Program</h3>
                            <p class="package-subtitle">Advanced Recovery Package (10 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <strong>Best for:</strong> Chronic pain, long-term rehab, mobility limitations
                        </div>

                        <div class="package-includes">
                            <h4>Includes</h4>
                            <ul>
                                <li>Complete movement & pain assessment</li>
                                <li>10 home-care physiotherapy sessions</li>
                                <li>Advanced pain management techniques</li>
                                <li>Functional movement & endurance training</li>
                                <li>Ongoing plan adjustments</li>
                                <li>Recovery outcome evaluation</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Price</div>
                            <div class="price-amount">PKR 20,000 – 25,000</div>
                        </div>
                        <a href="/booking" class="btn-package premium-btn">Choose This Program</a>
                    </div>
                </article>

                <!-- TailoredCare Program -->
                <article class="package-card custom">
                    <div class="package-top">
                        <div class="package-badge custom-badge">Fully Custom</div>
                        <div class="package-header">
                            <h3 class="package-title">TailoredCare Program</h3>
                            <p class="package-subtitle">Custom Recovery Package</p>
                        </div>

                        <div class="package-best-for">
                            <strong>Best for:</strong> Complex conditions, extended care needs
                        </div>

                        <div class="package-includes">
                            <h4>Includes</h4>
                            <ul>
                                <li>Fully personalized consultation</li>
                                <li>Flexible session count (home or online)</li>
                                <li>Long-term rehabilitation planning</li>
                                <li>Specialized treatment focus</li>
                                <li>Continuous therapist support</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Price</div>
                            <div class="price-amount">Based on assessment & care duration</div>
                        </div>
                        <a href="/consultation" class="btn-package custom-btn">Request Custom Package</a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Included in All Packages -->
    <section class="included-section">
        <div class="container">
            <div class="section-header text-center">
                <h2>What’s Included in Every Rehabrion Package</h2>
                <p>Consistent, ethical care — with transparency at every step</p>
            </div>

            <div class="included-grid">
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>One-on-one physiotherapy care</h4>
                </div>
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>Licensed & experienced physiotherapists</h4>
                </div>
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>Home-based comfort & privacy</h4>
                </div>
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>Evidence-based treatment methods</h4>
                </div>
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>Transparent pricing</h4>
                </div>
                <div class="included-item">
                    <div class="included-icon">✓</div>
                    <h4>Ethical, patient-first approach</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- Important Note -->
    <section class="note-section">
        <div class="container">
            <div class="note-box">
                <div class="note-icon">!</div>
                <div class="note-content">
                    <h3>Important Note</h3>
                    <p>
                        Recovery timelines vary by individual. Your physiotherapist will guide you on session frequency and duration
                        based on your condition and progress.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box text-center">
                <h2>Ready to Start Your Recovery?</h2>
                <p>Book a consultation today and let Rehabrion recommend the right recovery package for you.</p>
                <div class="cta-buttons">
                    <a href="/booking" class="btn-cta-primary">Book a Consultation</a>
                    <a href="/contact" class="btn-cta-secondary">Contact Us for Questions</a>
                </div>
                <p class="cta-footer">Rehabrion — professional rehabilitation, delivered to your home.</p>
            </div>
        </div>
    </section>

</div>
<style>
/* =========================================================
   Rehabrion Theme (Scoped) - NO font-family / NO font-size
   Colors:
   - Mint: #bae0db
   - Sage: #7a958f
========================================================= */
#rehabrion-packages-page{
    --mint: #bae0db;
    --sage: #7a958f;
    --ink: #0f172a;
    --muted: #4b5563;
    --bg: #f7fbfa;
    --card: #ffffff;
    --border: rgba(122,149,143,.22);
    --shadow: 0 18px 45px rgba(15, 23, 42, 0.08);

    color: var(--ink);
    line-height: 1.65;
    background: var(--bg);
}

/* Layout */
#rehabrion-packages-page .container{
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 18px;
}
#rehabrion-packages-page .text-center{ text-align:center; }

/* Hero */
#rehabrion-packages-page .packages-hero{
    padding: 80px 0;
    background:
      radial-gradient(900px 420px at 20% 20%, rgba(186,224,219,.55), transparent 60%),
      radial-gradient(900px 420px at 80% 10%, rgba(122,149,143,.35), transparent 60%),
      linear-gradient(180deg, #ffffff 0%, var(--bg) 100%);
    border-bottom: 1px solid var(--border);
}
#rehabrion-packages-page .hero-kicker{
    display:inline-block;
    padding: 8px 14px;
    border-radius: 999px;
    background: rgba(186,224,219,.45);
    border: 1px solid rgba(122,149,143,.25);
    color: rgba(15,23,42,.78);
    font-weight: 700;
    letter-spacing: .2px;
}
#rehabrion-packages-page .hero-title{
    margin: 12px 0 8px;
    line-height: 1.15;
    font-weight: 800;
    color: var(--ink);
}
#rehabrion-packages-page .hero-subtitle{
    margin: 0 0 10px;
    color: rgba(15,23,42,.78);
    font-weight: 600;
}
#rehabrion-packages-page .hero-description{
    max-width: 860px;
    margin: 0 auto;
    color: var(--muted);
}
#rehabrion-packages-page .hero-actions{
    margin-top: 18px;
    display:flex;
    gap: 12px;
    justify-content:center;
    flex-wrap: wrap;
}

/* Section Header */
#rehabrion-packages-page .packages-section{
    padding: 70px 0;
}
#rehabrion-packages-page .section-header{
    margin-bottom: 28px;
}
#rehabrion-packages-page .section-header h2{
    margin: 0 0 8px;
    font-weight: 800;
    color: var(--ink);
}
#rehabrion-packages-page .section-header p{
    margin: 0;
    color: var(--muted);
}

/* Packages Grid */
#rehabrion-packages-page .packages-grid{
    display:grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 18px;
    margin-top: 18px;
}
#rehabrion-packages-page .package-card{
    grid-column: span 12;
    background: var(--card);
    border: 1px solid var(--border);
    border-radius: 18px;
    box-shadow: var(--shadow);
    padding: 20px;
    display:flex;
    flex-direction: column;
    height: 100%;
    position: relative;
    overflow: hidden;
    transition: transform .18s ease, box-shadow .18s ease;
}
#rehabrion-packages-page .package-card:hover{
    transform: translateY(-3px);
    box-shadow: 0 22px 60px rgba(15, 23, 42, 0.10);
}
#rehabrion-packages-page .package-card:before{
    content:"";
    position:absolute;
    top:0; left:0; right:0;
    height: 5px;
    background: linear-gradient(90deg, var(--sage), var(--mint));
    opacity: .95;
}

/* Equal height structure */
#rehabrion-packages-page .package-top{ flex: 1 1 auto; }
#rehabrion-packages-page .package-bottom{ margin-top: 14px; }

/* Badges */
#rehabrion-packages-page .package-badge{
    position: absolute;
    top: 14px;
    right: 14px;
    padding: 7px 12px;
    border-radius: 999px;
    font-weight: 800;
    letter-spacing: .3px;
    text-transform: uppercase;
    background: rgba(186,224,219,.55);
    border: 1px solid rgba(122,149,143,.35);
    color: rgba(15,23,42,.80);
}
#rehabrion-packages-page .package-badge.popular{
    background: rgba(122,149,143,.18);
    border-color: rgba(122,149,143,.40);
    color: rgba(15,23,42,.86);
}

/* Featured/Premium/Custom styling */
#rehabrion-packages-page .package-card.featured{
    border: 2px solid rgba(122,149,143,.55);
    background:
      radial-gradient(500px 240px at 15% 10%, rgba(186,224,219,.45), transparent 55%),
      #fff;
}
#rehabrion-packages-page .package-card.premium{
    border: 2px solid rgba(122,149,143,.55);
}
#rehabrion-packages-page .package-card.custom{
    border: 2px dashed rgba(122,149,143,.60);
}

/* Header */
#rehabrion-packages-page .package-header{
    padding-top: 30px; /* space because badge on top */
    padding-bottom: 14px;
    border-bottom: 1px solid rgba(122,149,143,.18);
}
#rehabrion-packages-page .package-title{
    margin: 0 0 4px;
    font-weight: 900;
    color: var(--ink);
}
#rehabrion-packages-page .package-subtitle{
    margin: 0;
    color: var(--muted);
}

/* Best for */
#rehabrion-packages-page .package-best-for{
    margin-top: 14px;
    background: rgba(186,224,219,.22);
    border: 1px solid rgba(122,149,143,.22);
    border-radius: 14px;
    padding: 12px 13px;
    color: rgba(15,23,42,.80);
}
#rehabrion-packages-page .package-best-for strong{
    color: rgba(15,23,42,.92);
}

/* Includes */
#rehabrion-packages-page .package-includes{
    margin-top: 14px;
}
#rehabrion-packages-page .package-includes h4{
    margin: 0 0 10px;
    font-weight: 900;
    color: rgba(15,23,42,.90);
    letter-spacing: .2px;
    text-transform: uppercase;
}
#rehabrion-packages-page .package-includes ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
#rehabrion-packages-page .package-includes li{
    padding: 9px 0 9px 26px;
    position: relative;
    border-top: 1px dashed rgba(122,149,143,.22);
    color: rgba(15,23,42,.78);
}
#rehabrion-packages-page .package-includes li:first-child{ border-top: 0; }
#rehabrion-packages-page .package-includes li:before{
    content: "";
    position: absolute;
    left: 0;
    top: 16px;
    width: 12px;
    height: 12px;
    border-radius: 999px;
    background: var(--sage);
    box-shadow: 0 0 0 4px rgba(186,224,219,.35);
}

/* Price */
#rehabrion-packages-page .package-price{
    display:flex;
    align-items:flex-end;
    justify-content:space-between;
    gap: 10px;
    padding: 14px 0 10px;
    border-top: 1px solid rgba(122,149,143,.18);
}
#rehabrion-packages-page .price-label{
    font-weight: 800;
    letter-spacing: .3px;
    text-transform: uppercase;
    color: rgba(15,23,42,.55);
}
#rehabrion-packages-page .price-amount{
    font-weight: 900;
    color: rgba(15,23,42,.92);
}

/* Buttons */
#rehabrion-packages-page .btn-package{
    width: 100%;
    display:inline-flex;
    justify-content:center;
    align-items:center;
    padding: 12px 14px;
    border-radius: 14px;
    text-decoration: none;
    font-weight: 900;
    letter-spacing: .2px;
    background: var(--sage);
    color: #ffffff;
    border: 1px solid rgba(0,0,0,0.05);
    transition: transform .15s ease, filter .15s ease, background .15s ease;
}
#rehabrion-packages-page .btn-package:hover{
    transform: translateY(-1px);
    filter: brightness(0.98);
    color:#fff;
}
#rehabrion-packages-page .featured-btn{ background: rgba(15,23,42,.92); }
#rehabrion-packages-page .premium-btn{ background: rgba(15,23,42,.80); }
#rehabrion-packages-page .custom-btn{ background: rgba(122,149,143,.92); }

/* CTA Buttons (hero & bottom) */
#rehabrion-packages-page .btn-cta-primary{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding: 12px 18px;
    background: rgba(15,23,42,.92);
    color: #fff;
    border-radius: 14px;
    text-decoration:none;
    font-weight: 900;
    border: 1px solid rgba(15,23,42,.10);
    transition: transform .15s ease, filter .15s ease;
}
#rehabrion-packages-page .btn-cta-primary:hover{
    transform: translateY(-1px);
    filter: brightness(0.98);
    color:#fff;
}
#rehabrion-packages-page .btn-cta-secondary{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding: 12px 18px;
    background: rgba(186,224,219,.45);
    color: rgba(15,23,42,.90);
    border-radius: 14px;
    text-decoration:none;
    font-weight: 900;
    border: 1px solid rgba(122,149,143,.30);
    transition: transform .15s ease, filter .15s ease;
}
#rehabrion-packages-page .btn-cta-secondary:hover{
    transform: translateY(-1px);
    filter: brightness(0.98);
    color: rgba(15,23,42,.92);
}

/* Included Section */
#rehabrion-packages-page .included-section{
    padding: 64px 0;
    background: linear-gradient(180deg, var(--bg) 0%, #ffffff 100%);
    border-top: 1px solid rgba(122,149,143,.18);
    border-bottom: 1px solid rgba(122,149,143,.18);
}
#rehabrion-packages-page .included-grid{
    display:grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 14px;
    margin-top: 18px;
}
#rehabrion-packages-page .included-item{
    grid-column: span 12;
    background: #fff;
    border: 1px solid rgba(122,149,143,.22);
    border-radius: 16px;
    padding: 18px;
    display:flex;
    align-items:center;
    gap: 12px;
    min-height: 70px;
}
#rehabrion-packages-page .included-icon{
    width: 36px;
    height: 36px;
    border-radius: 12px;
    display:flex;
    align-items:center;
    justify-content:center;
    background: rgba(186,224,219,.50);
    border: 1px solid rgba(122,149,143,.28);
    font-weight: 900;
    color: rgba(15,23,42,.82);
    flex: 0 0 36px;
}
#rehabrion-packages-page .included-item h4{
    margin: 0;
    font-weight: 800;
    color: rgba(15,23,42,.88);
}

/* Note */
#rehabrion-packages-page .note-section{
    padding: 32px 0;
}
#rehabrion-packages-page .note-box{
    display:flex;
    gap: 14px;
    align-items:flex-start;
    background: rgba(186,224,219,.25);
    border: 1px solid rgba(122,149,143,.30);
    padding: 18px;
    border-radius: 18px;
}
#rehabrion-packages-page .note-icon{
    width: 42px;
    height: 42px;
    border-radius: 16px;
    display:flex;
    align-items:center;
    justify-content:center;
    background: rgba(122,149,143,.18);
    border: 1px solid rgba(122,149,143,.28);
    font-weight: 900;
    color: rgba(15,23,42,.85);
    flex: 0 0 42px;
}
#rehabrion-packages-page .note-content h3{
    margin: 0 0 6px;
    font-weight: 900;
}
#rehabrion-packages-page .note-content p{
    margin: 0;
    color: rgba(15,23,42,.70);
}

/* CTA Section */
#rehabrion-packages-page .cta-section{
    padding: 70px 0;
    background:
      radial-gradient(900px 420px at 25% 20%, rgba(186,224,219,.55), transparent 60%),
      radial-gradient(900px 420px at 85% 30%, rgba(122,149,143,.35), transparent 60%),
      linear-gradient(180deg, #ffffff 0%, var(--bg) 100%);
}
#rehabrion-packages-page .cta-box{
    max-width: 900px;
    margin: 0 auto;
    background: rgba(15,23,42,.92);
    border-radius: 22px;
    padding: 26px 18px;
    color: #fff;
    border: 1px solid rgba(255,255,255,.10);
}
#rehabrion-packages-page .cta-box h2{
    margin: 0 0 10px;
    font-weight: 900;
}
#rehabrion-packages-page .cta-box p{
    margin: 0 auto 18px;
    max-width: 760px;
    color: rgba(255,255,255,.82);
}
#rehabrion-packages-page .cta-buttons{
    display:flex;
    justify-content:center;
    gap: 12px;
    flex-wrap: wrap;
    margin-bottom: 12px;
}
#rehabrion-packages-page .cta-footer{
    margin: 0;
    color: rgba(255,255,255,.90);
    font-weight: 700;
    font-style: italic;
}

/* Responsive Columns */
@media (min-width: 768px){
    #rehabrion-packages-page .package-card{ grid-column: span 6; }
    #rehabrion-packages-page .included-item{ grid-column: span 6; }
}
@media (min-width: 1100px){
    #rehabrion-packages-page .package-card{ grid-column: span 4; }
    #rehabrion-packages-page .included-item{ grid-column: span 4; }
}

/* Mobile fine tuning */
@media (max-width: 576px){
    #rehabrion-packages-page .package-card{ padding: 18px; }
    #rehabrion-packages-page .note-box{ flex-direction: column; align-items:flex-start; }
}
</style>

@endsection
