<style>
    .mission-section {
        background-color: #155D18; /* Deep Forest Green for premium contrast */
        padding: clamp(6rem, 10vw, 8rem) 0;
        position: relative;
        overflow: hidden;
        color: #FFFFFF;
    }

    .mission-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 4rem;
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem);
    }

    @media (min-width: 1024px) {
        .mission-container {
            grid-template-columns: 1fr 1.2fr;
            gap: 8rem;
            align-items: center;
        }
    }

    /* Left Content */
    .mission-content {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .section-label {
        display: inline-flex;
        align-items: center;
        gap: 1rem;
        font-size: 0.9rem;
        font-weight: 700;
        color: #F59E0B; /* Gold */
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    .section-label::after {
        content: '';
        height: 2px;
        width: 60px;
        background-color: #F59E0B;
    }

    .mission-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.5rem);
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1rem;
        color: #FFFFFF; /* Explicitly override global dark heading */
        letter-spacing: -0.01em;
    }

    .mission-text {
        font-size: 1.15rem;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.85);
    }

    .btn-gold-pill {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.8rem 2rem;
        background-color: #F59E0B;
        color: #155D18;
        border-radius: 999px;
        font-weight: 700;
        font-size: 0.95rem;
        text-decoration: none;
        width: fit-content;
        margin-top: 1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-gold-pill:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(245, 158, 11, 0.2);
    }

    /* Right Visuals */
    .mission-visual {
        position: relative;
        height: 100%;
        min-height: 500px;
        width: 100%;
    }

    .img-large {
        position: absolute;
        top: 0;
        right: 0;
        width: 75%;
        height: 380px;
        object-fit: cover;
        border-radius: 30px;
        border: 8px solid #155D18; /* Blends with bg to create a gap */
        box-shadow: 0 40px 80px rgba(0,0,0,0.4);
        z-index: 1;
        transition: transform 0.5s ease;
    }

    .img-small {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 55%;
        height: 280px;
        object-fit: cover;
        border-radius: 24px;
        border: 8px solid #155D18;
        box-shadow: -10px 20px 40px rgba(0,0,0,0.3);
        z-index: 2;
        transition: transform 0.5s ease;
    }

    .mission-visual:hover .img-large {
        transform: translateY(-5px) scale(1.02);
    }
    
    .mission-visual:hover .img-small {
        transform: translateY(5px) scale(1.02);
    }

    /* Ambient glow behind images */
    .visual-glow {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80%;
        height: 80%;
        background: radial-gradient(circle, rgba(245, 158, 11, 0.15) 0%, transparent 70%);
        z-index: 0;
        pointer-events: none;
    }

    /* Background Abstract Elements */
    .mission-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: radial-gradient(circle at 10% 20%, rgba(255,255,255,0.03) 0%, transparent 40%),
                          radial-gradient(circle at 90% 80%, rgba(245, 158, 11, 0.05) 0%, transparent 40%);
        pointer-events: none;
        z-index: 0;
    }
</style>

<section id="mission" class="mission-section">
    <div class="mission-pattern"></div>
    <div class="mission-container">
        
        <!-- Left Content -->
        <div class="mission-content" data-aos="fade-up">
            <div class="section-label">Our Story</div>
            <h2 class="mission-headline">Dedicated to every girl's potential.</h2>
            <p class="mission-text">
                Roshni School is a specialized educational and residential community founded on a simple belief: visual impairment should never dictate a child's future. 
            </p>
            <p class="mission-text">
                Through customized braille education, unwavering emotional support, and intensive mobility training, we create an environment where young women can shatter expectations. We don't just provide shelter; we build the foundation for lifelong independence, leadership, and joy.
            </p>
            <a href="#" class="btn-gold-pill">
                Learn More About Us <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
            </a>
        </div>

        <!-- Right Visual Overlaps -->
        <div class="mission-visual" data-aos="zoom-in-left" data-aos-delay="200">
            <div class="visual-glow"></div>
            <img src="/extracted_images/image11.jpeg" alt="Care and Support" class="img-large">
            <img src="/extracted_images/image12.jpeg" alt="Community Support" class="img-small">
        </div>

    </div>
</section>
