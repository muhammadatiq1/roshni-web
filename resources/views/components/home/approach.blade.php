<style>
    .approach-section {
        background-color: #051307; /* Extremely dark green/black for ultra-premium feel */
        padding: clamp(6rem, 10vw, 8rem) 0;
        position: relative;
        overflow: hidden;
        color: #FFFFFF;
    }

    /* Cinematic background lighting */
    .approach-bg-glow {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100vw;
        height: 100%;
        background: 
            radial-gradient(circle at 20% 0%, rgba(21, 93, 24, 0.4) 0%, transparent 50%),
            radial-gradient(circle at 80% 100%, rgba(245, 158, 11, 0.08) 0%, transparent 50%);
        pointer-events: none;
        z-index: 0;
    }

    .approach-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem);
        position: relative;
        z-index: 10;
    }

    .approach-header {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 5rem;
    }

    .approach-label {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.25rem;
        background-color: rgba(245, 158, 11, 0.1);
        color: #F59E0B; /* Gold */
        border-radius: 999px;
        font-weight: 800;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(245, 158, 11, 0.3);
    }

    .approach-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.8rem);
        font-weight: 800;
        line-height: 1.1;
        letter-spacing: -0.02em;
        margin-bottom: 1.5rem;
        color: #FFFFFF;
    }

    .approach-subheadline {
        font-size: 1.15rem;
        color: #A3B1A5;
        line-height: 1.7;
    }

    .approach-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    @media (min-width: 768px) {
        .approach-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }
    }

    @media (min-width: 1024px) {
        .approach-grid {
            gap: 3rem;
        }
    }

    /* Glassmorphism Cards */
    .approach-card {
        background: rgba(255, 255, 255, 0.03);
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 32px;
        padding: 3rem 2.5rem;
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
        overflow: hidden;
    }

    /* Hover light sweep effect */
    .approach-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 50%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.05), transparent);
        transform: skewX(-25deg);
        transition: all 0.7s ease;
        z-index: 1;
    }

    .approach-card:hover::before {
        left: 200%;
    }

    .approach-card:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.06);
        border-color: rgba(245, 158, 11, 0.3);
        box-shadow: 0 30px 60px rgba(0, 0, 0, 0.4), 0 0 40px rgba(245, 158, 11, 0.05);
    }

    .approach-icon-wrapper {
        width: 72px;
        height: 72px;
        border-radius: 20px;
        background: linear-gradient(135deg, rgba(245, 158, 11, 0.2) 0%, rgba(21, 93, 24, 0.2) 100%);
        border: 1px solid rgba(245, 158, 11, 0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #F59E0B;
        margin-bottom: 2rem;
        position: relative;
        z-index: 2;
        transition: transform 0.5s ease;
    }

    .approach-card:hover .approach-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .approach-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.5rem;
        font-weight: 800;
        color: #FFFFFF;
        margin-bottom: 1rem;
        position: relative;
        z-index: 2;
    }

    .approach-text {
        font-size: 1.05rem;
        line-height: 1.7;
        color: #A3B1A5;
        position: relative;
        z-index: 2;
    }
</style>

<section id="approach" class="approach-section">
    <div class="approach-bg-glow"></div>
    <div class="approach-container">
        
        <div class="approach-header" data-aos="fade-up">
            <div class="approach-label">
                <i data-lucide="compass" style="width: 14px; height: 14px;"></i> Our Methodology
            </div>
            <h2 class="approach-headline">A holistic model for lifelong success.</h2>
            <p class="approach-subheadline">
                We don't just provide shelter. We operate a comprehensive ecosystem designed to equip visually impaired girls with the tools they need to conquer the world.
            </p>
        </div>

        <div class="approach-grid">
            
            <!-- Pillar 1 -->
            <div class="approach-card" data-aos="fade-up" data-aos-delay="0">
                <div class="approach-icon-wrapper">
                    <i data-lucide="book-open" style="width: 32px; height: 32px;"></i>
                </div>
                <h3 class="approach-title">Specialized Academia</h3>
                <p class="approach-text">
                    Customized braille curriculums, state-of-the-art audio libraries, and dedicated educators ensure our students excel academically and reach top universities.
                </p>
            </div>

            <!-- Pillar 2 -->
            <div class="approach-card" data-aos="fade-up" data-aos-delay="150">
                <div class="approach-icon-wrapper">
                    <i data-lucide="navigation" style="width: 32px; height: 32px;"></i>
                </div>
                <h3 class="approach-title">Tactile Independence</h3>
                <p class="approach-text">
                    Intensive white cane training and urban navigation courses empower our girls to traverse any environment safely, confidently, and completely on their own.
                </p>
            </div>

            <!-- Pillar 3 -->
            <div class="approach-card" data-aos="fade-up" data-aos-delay="300">
                <div class="approach-icon-wrapper">
                    <i data-lucide="heart-handshake" style="width: 32px; height: 32px;"></i>
                </div>
                <h3 class="approach-title">Emotional Resilience</h3>
                <p class="approach-text">
                    Through continuous counseling, peer support networks, and vocational leadership workshops, we build unbreakable confidence and emotional intelligence.
                </p>
            </div>

        </div>

    </div>
</section>
