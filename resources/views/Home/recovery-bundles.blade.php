@extends("Layout.layout")
@section("Content")

<style>
/* =========================================================
   Rehabrion Packages - Professional Medical Design
   Clean, Light, Trustworthy Healthcare Aesthetic
========================================================= */


#rehabrion-packages-page{
    --primary: #7a958f;
    --primary-light: #f2fbf9;
    --primary-dark: #5f7772;
    --accent: #bae0db;

    --secondary: #475569;
    --light: #f8fafc;
    --white: #ffffff;
    --border: #e2e8f0;
    --text: #1e293b;
    --text-light: #64748b;
    --shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    --shadow-lg: 0 20px 40px rgba(0, 0, 0, 0.08);
}

/* Layout */
#rehabrion-packages-page .container{
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
#rehabrion-packages-page .text-center{ text-align: center; }

/* Hero Section */
#rehabrion-packages-page .packages-hero{
    padding: 100px 0 80px;
    background: linear-gradient(135deg, #f0fdfa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}
#rehabrion-packages-page .packages-hero:before{
    content: "";
    position: absolute;
    top: 0;
    right: 0;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(13,148,136,0.1) 0%, rgba(255,255,255,0) 70%);
}
#rehabrion-packages-page .hero-icon{
    margin-bottom: 20px;
    color: var(--primary);
}
#rehabrion-packages-page .hero-content{
    max-width: 900px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}
#rehabrion-packages-page .hero-kicker{
    display: inline-block;
    padding: 8px 20px;
    border-radius: 30px;
    background: rgba(13,148,136,0.1);
    color: var(--primary);
    font-weight: 600;
    letter-spacing: 0.5px;
    margin-bottom: 20px;
    border: 1px solid rgba(13,148,136,0.2);
}
#rehabrion-packages-page .hero-title{
    margin: 0 0 15px;
    font-size: 3rem;
    line-height: 1.1;
    font-weight: 700;
    color: var(--text);
}
#rehabrion-packages-page .hero-subtitle{
    font-size: 1.5rem;
    color: var(--primary);
    margin: 0 0 20px;
    font-weight: 600;
}
#rehabrion-packages-page .hero-description{
    max-width: 700px;
    margin: 0 auto 30px;
    color: var(--text-light);
    font-size: 1.1rem;
}
#rehabrion-packages-page .hero-actions{
    display: flex;
    gap: 15px;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 30px;
}

/* Section Header */
#rehabrion-packages-page .packages-section{
    padding: 80px 0;
}
#rehabrion-packages-page .section-header{
    margin-bottom: 50px;
}
#rehabrion-packages-page .section-icon{
    color: var(--primary);
    margin-bottom: 20px;
}
#rehabrion-packages-page .section-header h2{
    margin: 0 0 10px;
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--text);
}
#rehabrion-packages-page .section-header p{
    margin: 0;
    color: var(--text-light);
    font-size: 1.1rem;
}

/* Packages Grid */
#rehabrion-packages-page .packages-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-top: 30px;
}
#rehabrion-packages-page .package-card{
    background: var(--white);
    border-radius: 16px;
    padding: 30px;
    display: flex;
    flex-direction: column;
    height: 100%;
    position: relative;
    box-shadow: var(--shadow);
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}
#rehabrion-packages-page .package-card:hover{
    transform: translateY(-5px);
    box-shadow: var(--shadow-lg);
}
#rehabrion-packages-page .package-card.featured{
    border: 2px solid var(--primary);
    background: linear-gradient(to bottom, #ffffff, var(--primary-light));
}
#rehabrion-packages-page .package-card.premium{
    border: 2px solid #f59e0b;
    background: linear-gradient(to bottom, #ffffff, #fffbeb);
}
#rehabrion-packages-page .package-card.custom{
    border: 2px dashed var(--primary);
    background: linear-gradient(to bottom, #ffffff, #f8fafc);
}

/* Equal height structure */
#rehabrion-packages-page .package-top{
    flex: 1;
}
#rehabrion-packages-page .package-bottom{
    margin-top: 30px;
}

/* Badges */
#rehabrion-packages-page .package-badge{
    position: absolute;
    top: 20px;
    right: 20px;
    padding: 6px 15px;
    border-radius: 20px;
    font-size: 0.85rem;
    font-weight: 600;
    background: rgba(13,148,136,0.1);
    color: var(--primary);
    border: 1px solid rgba(13,148,136,0.2);
}
#rehabrion-packages-page .package-badge.popular{
    background: var(--primary);
    color: white;
}
#rehabrion-packages-page .package-badge.premium-badge{
    background: #f59e0b;
    color: white;
    border-color: #f59e0b;
}
#rehabrion-packages-page .package-badge.custom-badge{
    background: #7c3aed;
    color: white;
    border-color: #7c3aed;
}

/* Package Header */
#rehabrion-packages-page .package-header{
    margin-bottom: 25px;
}
#rehabrion-packages-page .package-icon{
    color: var(--primary);
    margin-bottom: 15px;
}
#rehabrion-packages-page .package-title{
    margin: 0 0 8px;
    font-size: 1.8rem;
    font-weight: 700;
    color: var(--text);
}
#rehabrion-packages-page .package-subtitle{
    margin: 0;
    color: var(--text-light);
    font-size: 1rem;
}

/* Best for */
#rehabrion-packages-page .package-best-for{
    display: flex;
    align-items: flex-start;
    gap: 10px;
    margin-bottom: 25px;
    padding: 15px;
    background: #f8fafc;
    border-radius: 12px;
    border-left: 4px solid var(--primary);
}
#rehabrion-packages-page .best-for-icon{
    color: var(--primary);
    flex-shrink: 0;
}
#rehabrion-packages-page .best-for-text{
    color: var(--text);
    line-height: 1.5;
}
#rehabrion-packages-page .best-for-text strong{
    color: var(--text);
}

/* Includes */
#rehabrion-packages-page .package-includes{
    margin-bottom: 25px;
}
#rehabrion-packages-page .package-includes h4{
    margin: 0 0 20px;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
#rehabrion-packages-page .package-includes ul{
    list-style: none;
    padding: 0;
    margin: 0;
}
#rehabrion-packages-page .package-includes li{
    padding: 12px 0 12px 30px;
    position: relative;
    color: var(--text);
    border-bottom: 1px solid rgba(226,232,240,0.5);
}
#rehabrion-packages-page .package-includes li:last-child{
    border-bottom: none;
}
#rehabrion-packages-page .package-includes li:before{
    content: "";
    position: absolute;
    left: 0;
    top: 16px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: var(--primary);
}

/* Price */
#rehabrion-packages-page .package-price{
    padding-bottom: 20px;
    border-bottom: 1px solid var(--border);
    margin-bottom: 20px;
}
#rehabrion-packages-page .price-label{
    font-size: 0.9rem;
    color: var(--text-light);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 5px;
}
#rehabrion-packages-page .price-amount{
    font-size: 2.2rem;
    font-weight: 700;
    color: var(--text);
    margin-bottom: 5px;
}
#rehabrion-packages-page .price-note{
    font-size: 0.9rem;
    color: var(--text-light);
}

/* Buttons */
#rehabrion-packages-page .btn-package{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    width: 100%;
    padding: 16px 20px;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
    background: var(--primary);
    color: white;
}
#rehabrion-packages-page .btn-package:hover{
    background: var(--primary-dark);
    color: white;
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(13,148,136,0.2);
}
#rehabrion-packages-page .featured-btn{
    background: var(--primary);
}
#rehabrion-packages-page .premium-btn{
    background: #7a958f;
}
#rehabrion-packages-page .premium-btn:hover{
    background: #7a958f
}
#rehabrion-packages-page .custom-btn{
    background: #7a958f;
}
#rehabrion-packages-page .custom-btn:hover{
    background: #7a958f;
}
#rehabrion-packages-page .btn-icon{
    width: 20px;
    height: 20px;
}

/* CTA Buttons */
#rehabrion-packages-page .btn-cta-primary{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 16px 30px;
    background: var(--primary);
    color: white;
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    border: none;
    cursor: pointer;
    transition: all 0.2s ease;
}
#rehabrion-packages-page .btn-cta-primary:hover{
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(13,148,136,0.2);
}
#rehabrion-packages-page .btn-cta-secondary{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 16px 30px;
    background: white;
    color: var(--primary);
    border-radius: 12px;
    text-decoration: none;
    font-weight: 600;
    font-size: 1rem;
    border: 2px solid var(--primary);
    cursor: pointer;
    transition: all 0.2s ease;
}
#rehabrion-packages-page .btn-cta-secondary:hover{
    background: var(--primary-light);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(13,148,136,0.1);
}

/* Trust Section */
#rehabrion-packages-page .trust-section{
    padding: 80px 0;
    background: #f8fafc;
}
#rehabrion-packages-page .trust-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}
#rehabrion-packages-page .trust-item{
    text-align: center;
    padding: 30px;
    background: white;
    border-radius: 16px;
    box-shadow: var(--shadow);
}
#rehabrion-packages-page .trust-icon{
    color: var(--primary);
    margin-bottom: 20px;
}
#rehabrion-packages-page .trust-item h4{
    margin: 0 0 15px;
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--text);
}
#rehabrion-packages-page .trust-item p{
    margin: 0;
    color: var(--text-light);
    line-height: 1.6;
}

/* Included Section */
#rehabrion-packages-page .included-section{
    padding: 80px 0;
    background: white;
}
#rehabrion-packages-page .included-grid{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}
#rehabrion-packages-page .included-item{
    display: flex;
    align-items: flex-start;
    gap: 20px;
    padding: 25px;
    background: #f8fafc;
    border-radius: 16px;
    border: 1px solid var(--border);
    transition: all 0.3s ease;
}
#rehabrion-packages-page .included-item:hover{
    transform: translateY(-3px);
    box-shadow: var(--shadow);
    border-color: var(--primary);
}
#rehabrion-packages-page .included-icon{
    flex-shrink: 0;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(13,148,136,0.1);
    color: var(--primary);
    border-radius: 12px;
}
#rehabrion-packages-page .included-content h4{
    margin: 0 0 8px;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
}
#rehabrion-packages-page .included-content p{
    margin: 0;
    color: var(--text-light);
    font-size: 0.95rem;
    line-height: 1.5;
}

/* FAQ Section */
#rehabrion-packages-page .faq-section{
    padding: 80px 0;
    background: #f8fafc;
}
#rehabrion-packages-page .faq-grid{
    max-width: 800px;
    margin: 0 auto;
}
#rehabrion-packages-page .faq-item{
    margin-bottom: 15px;
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: var(--shadow);
}
#rehabrion-packages-page .faq-question{
    padding: 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    border-bottom: 1px solid transparent;
}
#rehabrion-packages-page .faq-question h4{
    margin: 0;
    font-size: 1.1rem;
    font-weight: 600;
    color: var(--text);
}
#rehabrion-packages-page .faq-icon{
    transition: transform 0.3s ease;
    color: var(--primary);
}
#rehabrion-packages-page .faq-item.active .faq-icon{
    transform: rotate(180deg);
}
#rehabrion-packages-page .faq-answer{
    padding: 0 25px;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}
#rehabrion-packages-page .faq-item.active .faq-answer{
    padding: 0 25px 25px;
    max-height: 500px;
}
#rehabrion-packages-page .faq-answer p{
    margin: 0;
    color: var(--text-light);
    line-height: 1.6;
}

/* CTA Section */
#rehabrion-packages-page .cta-section{
    padding: 100px 0;
    background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
    color: white;
}
#rehabrion-packages-page .cta-box{
    max-width: 900px;
    margin: 0 auto;
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(10px);
    border-radius: 24px;
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    flex-wrap: wrap;
}
#rehabrion-packages-page .cta-content h2{
    margin: 0 0 15px;
    font-size: 2.2rem;
    font-weight: 700;
    color: white;
}
#rehabrion-packages-page .cta-content p{
    margin: 0 0 25px;
    color: rgba(255,255,255,0.9);
    font-size: 1.1rem;
    max-width: 500px;
}
#rehabrion-packages-page .cta-features{
    display: flex;
    flex-direction: column;
    gap: 10px;
}
#rehabrion-packages-page .cta-feature{
    display: flex;
    align-items: center;
    gap: 10px;
    color: rgba(255,255,255,0.9);
}
#rehabrion-packages-page .cta-feature svg{
    color: #86efac;
}
#rehabrion-packages-page .cta-actions{
    display: flex;
    flex-direction: column;
    gap: 15px;
    min-width: 250px;
}
#rehabrion-packages-page .cta-section .btn-cta-primary{
    background: white;
    color: var(--primary);
}
#rehabrion-packages-page .cta-section .btn-cta-primary:hover{
    background: #f0fdfa;
}
#rehabrion-packages-page .cta-section .btn-cta-secondary{
    background: transparent;
    color: white;
    border-color: white;
}
#rehabrion-packages-page .cta-section .btn-cta-secondary:hover{
    background: rgba(255,255,255,0.1);
}

/* Responsive Design */
@media (max-width: 992px){
    #rehabrion-packages-page .hero-title{
        font-size: 2.5rem;
    }
    #rehabrion-packages-page .section-header h2{
        font-size: 2rem;
    }
    #rehabrion-packages-page .cta-box{
        flex-direction: column;
        text-align: center;
    }
    #rehabrion-packages-page .cta-features{
        align-items: flex-start;
    }
}

@media (max-width: 768px){
    #rehabrion-packages-page .packages-hero{
        padding: 80px 0 60px;
    }
    #rehabrion-packages-page .hero-title{
        font-size: 2rem;
    }
    #rehabrion-packages-page .hero-subtitle{
        font-size: 1.2rem;
    }
    #rehabrion-packages-page .packages-grid{
        grid-template-columns: 1fr;
    }
    #rehabrion-packages-page .hero-actions{
        flex-direction: column;
        align-items: center;
    }
    #rehabrion-packages-page .btn-cta-primary,
    #rehabrion-packages-page .btn-cta-secondary{
        width: 100%;
        max-width: 300px;
    }
    #rehabrion-packages-page .cta-box{
        padding: 30px;
    }
}
.new{
    font-size: 25px !important;
}

/* importan */
.important-note-alert{
  background:#fff;
  border:1px solid #f3b5b5;
  border-left:5px solid #dc2626;
  border-radius:12px;
  padding:18px 20px;
  gap:16px;
  box-shadow:0 10px 30px rgba(0,0,0,0.06);
}

.note-icon{
  width:44px;
  height:44px;
  border-radius:10px;
  background:#fee2e2;
  display:flex;
  align-items:center;
  justify-content:center;
  flex-shrink:0;
}

.note-icon i{
  font-size:20px;
  color:#dc2626;
}

.note-title{
  margin:0;
  font-weight:700;
  font-size:17px;
  color:#7f1d1d;
}

.note-text{
  margin-top:6px;
  margin-bottom:0;
  font-size:15px;
  line-height:1.6;
  color:#374151;
}

</style>

<div class="rehabrion-packages-page" id="rehabrion-packages-page">

    <!-- Hero Section -->
    <section class="packages-hero">
        <div class="container">
            <div class="hero-content text-center">
                <div class="hero-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <span class="hero-kicker">Professional Care</span>
                <h1 class="hero-title">Recovery & Rehabilitation Packages</h1>
                <p class="hero-subtitle">Evidence-based treatment plans designed for your recovery journey</p>
                <p class="hero-description">
                    Each package includes comprehensive assessment by licensed physiotherapists, personalized treatment plans, and one-on-one sessions in the comfort of your home.
                </p>

                <div class="hero-actions">
                    <a href="{{ asset('/submit-medical-history') }}" class="btn-cta-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        Book Consultation
                    </a>
                    <a href="/contact" class="btn-cta-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                        </svg>
                        Talk to Our Team
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Grid -->
    <section class="packages-section">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h2>Personalized Recovery Plans</h2>
                <p>Select the package that matches your rehabilitation needs and goals</p>
            </div>

            <div class="packages-grid">

                <!-- FlexCare Session -->
                <article class="package-card">
                    <div class="package-top">
                        <div class="package-badge">Single Session</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                            </div>
                            <h3 class="package-title">FlexCare Session</h3>
                            <p class="package-subtitle">One-time Assessment & Treatment</p>
                        </div>

                        <div class="package-best-for">
                            <div class="best-for-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="best-for-text">
                                <strong>Ideal for:</strong> Initial consultation, mild discomfort, or follow-up sessions
                            </div>
                        </div>

                        <div class="package-includes">
                            <h4>Package Includes</h4>
                            <ul>
                                <li>Physiotherapy consultation & assessment
</li>
                                <li>One-on-one home-care physiotherapy session</li>
                                <li>Pain management & guided exercises</li>
                                <li>Initial recovery advice</li>
                            </ul>
                        </div>
                    </div>

                    <div class="package-bottom">
                        <div class="package-price">
                            <div class="price-label">Starting from</div>
                            <div class="price-amount">PKR 2,000</div>
                        </div>
                        <a href="https://wa.me/971505653483?text=Hi%20I%20want%20to%20book%20FlexCare%20Session"
   target="_blank" rel="noopener" class="btn-package">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            Book This Session
                        </a>
                    </div>
                </article>

                <!-- MoveStart Plan (Featured) -->
                <article class="package-card featured">
                    <div class="package-top">
                        <div class="package-badge popular">Most Popular</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                    <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                    <line x1="6" y1="1" x2="6" y2="4"></line>
                                    <line x1="10" y1="1" x2="10" y2="4"></line>
                                    <line x1="14" y1="1" x2="14" y2="4"></line>
                                </svg>
                            </div>
                            <h3 class="package-title">MoveStart Plan</h3>
                            <p class="package-subtitle">Starter Recovery (3 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <div class="best-for-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="best-for-text">
                                <strong>Ideal for:</strong> Early-stage recovery, posture correction, minor injuries
                            </div>
                        </div>

                        <div class="package-includes">
                            <h4>Package Includes</h4>
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
                            <div class="price-label">Total Package</div>
                            <div class="price-amount">PKR 6,000 – 7,500</div>
                            <div class="price-note">(Save up to 15% vs single sessions)</div>
                        </div>
                      <a href="https://wa.me/971505653483?text=Hi%20I%20want%20to%20book%20FlexCare%20Session"
   target="_blank" rel="noopener" class="btn-package featured-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                            Choose This Plan
                        </a>
                    </div>
                </article>

                <!-- MotionCare Program -->
                <article class="package-card">
                    <div class="package-top">
                        <div class="package-badge">Standard</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path>
                                </svg>
                            </div>
                            <h3 class="package-title">MotionCare Program</h3>
                            <p class="package-subtitle">Standard Recovery Package(6 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <div class="best-for-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="best-for-text">
                                <strong>Ideal for:</strong> Injury rehabilitation, post-surgical recovery, chronic pain
                            </div>
                        </div>

                        <div class="package-includes">
                            <h4>Package Includes</h4>
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
                            <div class="price-label">Total Package</div>
                            <div class="price-amount">PKR 12,000 – 15,000</div>
                            <div class="price-note">(Save up to 20% vs single sessions)</div>
                        </div>
                       <a href="https://wa.me/971505653483?text=Hi%20I%20want%20to%20book%20FlexCare%20Session"
   target="_blank" rel="noopener" class="btn-package">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                            Choose This Program
                        </a>
                    </div>
                </article>

                <!-- TotalRestore Program -->
                <article class="package-card premium">
                    <div class="package-top">
                        <div class="package-badge premium-badge">Premium</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                            </div>
                            <h3 class="package-title">TotalRestore Program</h3>
                            <p class="package-subtitle">Advanced Recovery Package(10 Sessions)</p>
                        </div>

                        <div class="package-best-for">
                            <div class="best-for-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="best-for-text">
                                <strong>Ideal for:</strong> Complex conditions, long-term rehabilitation, mobility restoration
                            </div>
                        </div>

                        <div class="package-includes">
                            <h4>Package Includes</h4>
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
                            <div class="price-label">Total Package</div>
                            <div class="price-amount">PKR 20,000 – 25,000</div>
                            <div class="price-note">(Save up to 25% vs single sessions)</div>
                        </div>
                        <a href="https://wa.me/971505653483?text=Hi%20I%20want%20to%20book%20FlexCare%20Session"
   target="_blank" rel="noopener"  class="btn-package premium-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <path d="M20 6L9 17l-5-5"></path>
                            </svg>
                            Choose This Program
                        </a>
                    </div>
                </article>

                <!-- TailoredCare Program -->
                <article class="package-card custom">
                    <div class="package-top">
                        <div class="package-badge custom-badge">Custom</div>
                        <div class="package-header">
                            <div class="package-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"></path>
                                </svg>
                            </div>
                            <h3 class="package-title">TailoredCare Program</h3>
                            <p class="package-subtitle">Custom Recovery Package
</p>
                        </div>

                        <div class="package-best-for">
                            <div class="best-for-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </div>
                            <div class="best-for-text">
                                <strong>Ideal for:</strong> Complex cases, extended care, specialized treatment needs
                            </div>
                        </div>

                        <div class="package-includes">
                            <h4>Package Includes</h4>
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
                            <div class="price-label">Personalized Pricing</div>
                            <div class="price-amount">Based on assessment</div>
                            <div class="price-note">Contact for custom quote</div>
                        </div>
                        <a href="https://wa.me/971505653483?text=Hi%20I%20want%20to%20book%20FlexCare%20Session"
   target="_blank" rel="noopener" class="btn-package custom-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            </svg>
                            Request Consultation
                        </a>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- Trust Indicators -->
    {{-- <section class="trust-section">
        <div class="container">
            <div class="trust-grid">
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                    </div>
                    <h4>Licensed Professionals</h4>
                    <p>All therapists are certified and experienced in home-care rehabilitation</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path d="M12 16v-4M12 8h.01"></path>
                        </svg>
                    </div>
                    <h4>Evidence-Based Methods</h4>
                    <p>Treatment plans based on latest research and clinical best practices</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h4>Personalized Care</h4>
                    <p>One-on-one attention with customized treatment approaches</p>
                </div>
                <div class="trust-item">
                    <div class="trust-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                        </svg>
                    </div>
                    <h4>Home Convenience</h4>
                    <p>Receive professional care in the comfort and privacy of your home</p>
                </div>
            </div>
        </div>
    </section> --}}
<!-- Included in All Packages -->
<section class="included-section">
    <div class="container">
        <div class="section-header text-center">
            <h2>What’s Included in Every Rehabrion Package</h2>
            <p>Consistent, ethical care — with transparency at every step</p>
        </div>

        <div class="included-grid included-grid-4">

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-circle-check"></i></div>
                <h4>One-on-one physiotherapy care</h4>
            </div>

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-user-doctor"></i></div>
                <h4>Licensed & experienced physiotherapists</h4>
            </div>

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-house-chimney-medical"></i></div>
                <h4>Home-based comfort & privacy</h4>
            </div>

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-flask"></i></div>
                <h4>Evidence-based treatment methods</h4>
            </div>

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-tag"></i></div>
                <h4>Transparent pricing</h4>
            </div>

            <div class="included-item">
                <div class="included-icon new"><i class="fa-solid fa-heart"></i></div>
                <h4>Ethical, patient-first approach</h4>
            </div>

        </div>
    </div>
</section>

{{-- important note --}}
<div class="container-fluid my-4">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      <div class="important-note-alert d-flex align-items-start">
        <div class="note-icon">
          <i class="fas fa-circle-exclamation"></i>
        </div>

        <div class="note-content">
          <h5 class="note-title">Important Note</h5>
          <p class="note-text">
            Recovery timelines vary by individual. Your physiotherapist will guide you on session frequency and duration based on your condition and progress.
          </p>
        </div>
      </div>

    </div>
  </div>
</div>


<!-- Trust Indicators -->
{{-- <section class="trust-section">
    <div class="container">
        <div class="trust-grid">

            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                    </svg>
                </div>
                <h4>Licensed Professionals</h4>
                <p>All therapists are certified and experienced in home-care rehabilitation</p>
            </div>

            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M12 16v-4M12 8h.01"></path>
                    </svg>
                </div>
                <h4>Evidence-Based Methods</h4>
                <p>Treatment plans based on latest research and clinical best practices</p>
            </div>

            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h4>Personalized Care</h4>
                <p>One-on-one attention with customized treatment approaches</p>
            </div>

            <div class="trust-item">
                <div class="trust-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                    </svg>
                </div>
                <h4>Home Convenience</h4>
                <p>Receive professional care in the comfort and privacy of your home</p>
            </div>

        </div>
    </div>
</section> --}}




    <!-- Included in All Packages -->
    {{-- <section class="included-section">
        <div class="container">
            <div class="section-header text-center">
                <div class="section-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                </div>
                <h2>Included in Every Package</h2>
                <p>Professional standards that ensure quality care throughout your recovery</p>
            </div>

            <div class="included-grid">
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Initial Comprehensive Assessment</h4>
                        <p>Detailed evaluation of your condition and recovery goals</p>
                    </div>
                </div>
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Licensed Physiotherapists</h4>
                        <p>All sessions conducted by certified rehabilitation specialists</p>
                    </div>
                </div>
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Personalized Treatment Plan</h4>
                        <p>Customized approach based on your specific needs</p>
                    </div>
                </div>
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Home Exercise Guidance</h4>
                        <p>Instructions for between-session exercises and self-care</p>
                    </div>
                </div>
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Progress Tracking</h4>
                        <p>Regular assessment of improvement and plan adjustments</p>
                    </div>
                </div>
                <div class="included-item">
                    <div class="included-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                            <polyline points="22 4 12 14.01 9 11.01"></polyline>
                        </svg>
                    </div>
                    <div class="included-content">
                        <h4>Transparent Communication</h4>
                        <p>Clear explanations of treatment and expected outcomes</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-box">
                <div class="cta-content">
                    <h2>Start Your Recovery Journey Today</h2>
                    <p>Book a consultation to receive a personalized treatment recommendation from our licensed physiotherapists.</p>
                    <div class="cta-features">
                        <div class="cta-feature">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>No obligation consultation</span>
                        </div>
                        <div class="cta-feature">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Flexible scheduling</span>
                        </div>
                        <div class="cta-feature">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                <polyline points="22 4 12 14.01 9 11.01"></polyline>
                            </svg>
                            <span>Home convenience</span>
                        </div>
                    </div>
                </div>
                <div class="cta-actions">
                    <a href="{{ asset('submit-medical-history') }}" class="btn-cta-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="btn-icon">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        Book Now
                    </a>

                </div>
            </div>
        </div>
    </section>

</div>


@endsection
