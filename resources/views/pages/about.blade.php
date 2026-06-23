<x-layout>
    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="about-hero-bg">
            <img src="{{ asset(site_content('about_hero_image')) }}" alt="Children playing">
            <div class="about-hero-overlay"></div>
        </div>
        
        <div class="about-hero-content">
            <span class="about-badge">Our Story</span>
            <h1 class="about-title">{!! site_content('about_hero_title') !!}</h1>
            <p class="about-subtitle">{{ site_content('about_hero_subtitle') }}</p>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="about-mission">
        <div class="mission-container">
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i data-lucide="target" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>{{ site_content('about_mission_text') }}</p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i data-lucide="eye" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>{{ site_content('about_vision_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our History -->
    <section class="about-history">
        <div class="history-container">
            <div class="history-content">
                <h2>{{ site_content('about_history_title') }}</h2>
                <p>{{ site_content('about_history_p1') }}</p>
                <p>{{ site_content('about_history_p2') }}</p>
            </div>
            <div class="history-image">
                @if($videoPath = site_content('about_history_video'))
                    <video src="{{ asset($videoPath) }}" autoplay loop muted playsinline style="width: 100%; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);"></video>
                @else
                    <img src="{{ asset(site_content('about_history_image')) }}" alt="History of Roshni Care">
                @endif
            </div>
        </div>
    </section>
</x-layout>

<style>
    .about-hero {
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        overflow: hidden;
        margin-top: 80px; /* offset for fixed header */
    }

    .about-hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
    }

    .about-hero-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-hero-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(10, 28, 12, 0.7), rgba(10, 28, 12, 0.9));
    }

    .about-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 2rem;
    }

    .about-badge {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #E2E8F0;
        border-radius: 50px;
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 2rem;
    }

    .about-title {
        font-size: clamp(3rem, 6vw, 5.5rem);
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .about-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        color: rgba(255, 255, 255, 0.8);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .about-mission {
        padding: clamp(5rem, 10vw, 8rem) 0;
        background-color: #F7FAFC;
    }

    .mission-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .mission-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 3rem;
    }

    .mission-card {
        background: white;
        padding: 3rem;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0,0,0,0.05);
        transition: transform 0.3s ease;
    }

    .mission-card:hover {
        transform: translateY(-10px);
    }

    .mission-icon {
        width: 64px;
        height: 64px;
        background-color: rgba(21, 93, 24, 0.1);
        color: #155D18;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1.5rem;
    }

    .mission-card h3 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.8rem;
        color: #1A202C;
        margin-bottom: 1rem;
    }

    .mission-card p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        line-height: 1.7;
        font-size: 1.05rem;
    }

    .about-history {
        padding: clamp(5rem, 10vw, 8rem) 0;
        background-color: white;
    }

    .history-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 5rem;
        align-items: center;
    }

    @media (max-width: 991px) {
        .history-container {
            grid-template-columns: 1fr;
        }
    }

    .history-content h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.5rem);
        color: #1A202C;
        margin-bottom: 2rem;
        line-height: 1.2;
    }

    .history-content p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 1.5rem;
    }

    .history-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
</style>
