<style>
    .hero-section {
        background-color: #FFFFFF;
        padding: clamp(5rem, 8vw, 7rem) 0 0; /* Removed bottom padding so trust banner attaches directly */
        position: relative;
        overflow: hidden;
    }

    .hero-container {
        position: relative;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem) 6rem; /* Padding bottom for floating stats */
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        align-items: center;
    }

    @media (min-width: 1024px) {
        .hero-container {
            grid-template-columns: 1fr 1fr;
            gap: 6rem;
            padding-bottom: 8rem;
        }
    }

    /* Left Content */
    .hero-content {
        position: relative;
        z-index: 10;
    }

    .hero-label {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 0.5rem 1rem;
        background-color: rgba(21, 93, 24, 0.1);
        color: #155D18; /* Deep Green */
        border-radius: 999px;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 1.5rem;
    }

    .hero-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(3rem, 5.5vw, 4.5rem);
        font-weight: 800;
        line-height: 1.1;
        letter-spacing: -0.02em;
        color: #1A211B; /* Almost Black for authority */
        margin-bottom: 1.5rem;
    }

    .hero-headline span {
        color: #155D18; /* Deep Green Highlight */
    }

    .hero-subheadline {
        font-size: 1.15rem;
        line-height: 1.7;
        color: #647065;
        margin-bottom: 2.5rem;
        max-width: 520px;
    }

    .hero-actions {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }

    .btn-hero-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1.1rem 2.5rem;
        background: #155D18;
        color: white;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.05rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(21, 93, 24, 0.2);
    }

    .btn-hero-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(21, 93, 24, 0.3);
        background: #0e4210;
    }

    .btn-hero-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        padding: 1.1rem 2.5rem;
        background-color: transparent;
        color: #155D18;
        border: 2px solid #E1E8E2;
        border-radius: 12px;
        font-weight: 700;
        font-size: 1.05rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-hero-secondary:hover {
        border-color: #155D18;
        background-color: #F8FAF8;
    }

    /* Right Visual */
    .hero-visual {
        position: relative;
        z-index: 5;
    }

    .hero-image-wrapper {
        position: relative;
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 24px 48px rgba(0, 0, 0, 0.1);
    }

    .hero-image-wrapper img {
        width: 100%;
        height: auto;
        object-fit: cover;
        aspect-ratio: 4/5;
    }

    /* Background Abstract Shape */
    .bg-shape {
        position: absolute;
        top: -10%;
        right: -5%;
        width: 700px;
        height: 700px;
        background: radial-gradient(circle, rgba(21, 93, 24, 0.05) 0%, rgba(255,255,255,0) 70%);
        z-index: 1;
        pointer-events: none;
    }

    /* Massive Floating Impact Bar */
    .floating-stats-wrapper {
        position: relative;
        margin-top: -6rem; /* Pull up into the white hero section */
        margin-bottom: 3rem; /* Space before the trust logos */
        width: 100%;
        display: flex;
        justify-content: center;
        z-index: 20;
        padding: 0 1.5rem;
    }

    .floating-stats-bar {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
        width: 100%;
        max-width: 1100px;
    }

    @media (min-width: 768px) {
        .floating-stats-bar {
            flex-direction: row;
            justify-content: space-around;
            padding: 2.5rem;
            gap: 2rem;
        }
    }

    .stat-block {
        display: flex;
        align-items: center;
        gap: 1.25rem;
    }

    .stat-icon {
        width: 64px;
        height: 64px;
        background: #F8FAF8;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #155D18;
        flex-shrink: 0;
    }

    .stat-content {
        display: flex;
        flex-direction: column;
    }

    .stat-number {
        font-family: 'Outfit', sans-serif;
        font-size: 2rem;
        font-weight: 800;
        color: #1A211B;
        line-height: 1;
        margin-bottom: 0.25rem;
    }

    .stat-number span {
        color: #F59E0B; /* Gold + */
    }

    .stat-label {
        font-size: 0.95rem;
        color: #647065;
        font-weight: 500;
        line-height: 1.3;
    }

    .stat-divider {
        display: none;
        width: 1px;
        height: 100%;
        background-color: #E1E8E2;
    }

    @media (min-width: 768px) {
        .stat-block {
            flex: 1;
            justify-content: center;
        }
        .stat-block:not(:last-child) {
            border-right: 1px solid #E1E8E2;
            padding-right: 2rem;
        }
    }

    /* Trust & Accreditation Banner */
    .trust-banner {
        background-color: #F8FAF8;
        padding: 0 0 4rem; /* Top padding handled by floating stats margin */
        border-top: 1px solid #E1E8E2;
        text-align: center;
    }

    .trust-banner-title {
        font-size: 0.9rem;
        font-weight: 700;
        color: #647065;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 2rem;
    }

    .trust-logos {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
        gap: 3rem;
        opacity: 0.6;
        filter: grayscale(100%);
        transition: opacity 0.3s ease;
    }

    .trust-logos:hover {
        opacity: 0.8;
    }

    .trust-logo-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        font-family: 'Outfit', sans-serif;
        font-weight: 800;
        font-size: 1.25rem;
        color: #1A211B;
    }
</style>

<section id="hero" class="hero-section">
    <div class="bg-shape"></div>
    <div class="hero-container">
        
        <!-- Left Content -->
        <div class="hero-content" data-aos="fade-right">
            <div class="hero-label">
                <i data-lucide="shield-check" style="width: 16px; height: 16px;"></i> Registered NGO
            </div>
            <h1 class="hero-headline">Empowering visually impaired girls to build <span>their future.</span></h1>
            <p class="hero-subheadline">Through specialized braille education, secure hostel care, and mobility training, we provide the foundation for lifelong independence and confidence.</p>
            
            <div class="hero-actions">
                <a href="#donate" class="btn-hero-primary">
                    Donate Now <i data-lucide="heart" style="width: 18px; height: 18px; fill: white;"></i>
                </a>
                <a href="#sponsor" class="btn-hero-secondary">
                    Sponsor a Child
                </a>
            </div>
        </div>

        <!-- Right Visual -->
        <div class="hero-visual" data-aos="fade-left" data-aos-delay="200">
            <div class="hero-image-wrapper">
                <img src="/extracted_images/image17.jpeg" alt="Student reading braille">
            </div>
        </div>

    </div>

    <!-- Trust Banner directly attached to hero base -->
    <div class="trust-banner">
        
        <!-- Floating Statistics Bar (Moved into trust banner to overlap boundary naturally) -->
        <div class="floating-stats-wrapper" data-aos="fade-up" data-aos-delay="400">
            <div class="floating-stats-bar">
                <!-- Stat 1 -->
                <div class="stat-block">
                    <div class="stat-icon"><i data-lucide="users" style="width: 32px; height: 32px;"></i></div>
                    <div class="stat-content">
                        <div class="stat-number">1,250<span>+</span></div>
                        <div class="stat-label">Girls Empowered Daily</div>
                    </div>
                </div>
                
                <!-- Stat 2 -->
                <div class="stat-block">
                    <div class="stat-icon"><i data-lucide="home" style="width: 32px; height: 32px;"></i></div>
                    <div class="stat-content">
                        <div class="stat-number">100<span>%</span></div>
                        <div class="stat-label">Free Secure Hostel Care</div>
                    </div>
                </div>

                <!-- Stat 3 -->
                <div class="stat-block">
                    <div class="stat-icon"><i data-lucide="graduation-cap" style="width: 32px; height: 32px;"></i></div>
                    <div class="stat-content">
                        <div class="stat-number">45<span>+</span></div>
                        <div class="stat-label">Cities Reached Nationwide</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="trust-banner-title">Accredited & Recognized By</div>
        <div class="trust-logos">
            <div class="trust-logo-item"><i data-lucide="globe" style="width: 24px; height: 24px;"></i> Global Charity Org</div>
            <div class="trust-logo-item"><i data-lucide="award" style="width: 24px; height: 24px;"></i> Ministry of Education</div>
            <div class="trust-logo-item"><i data-lucide="shield" style="width: 24px; height: 24px;"></i> Secure Giving Foundation</div>
            <div class="trust-logo-item"><i data-lucide="heart-handshake" style="width: 24px; height: 24px;"></i> Care Network</div>
        </div>
    </div>
</section>
