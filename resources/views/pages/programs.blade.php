<x-layout>
    <!-- Programs Hero -->
    <section class="programs-hero">
        <div class="programs-hero-content">
            <span class="programs-badge">Our Programs</span>
            <h1 class="programs-title">{{ site_content('programs_hero_title') }}</h1>
            <p class="programs-subtitle">{{ site_content('programs_hero_subtitle') }}</p>
        </div>
    </section>

    <!-- Main Programs Grid -->
    <section class="programs-main">
        <div class="programs-container">
            
            <!-- Program 1 -->
            <div class="program-row">
                <div class="program-content">
                    <div class="program-icon" style="color: #2B6CB0; background: rgba(43, 108, 176, 0.1);">
                        <i data-lucide="book-open-check" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2>{{ site_content('programs_academia_title') }}</h2>
                    <p class="program-desc">{{ site_content('programs_academia_desc') }}</p>
                    <ul class="program-features">
                        <li><i data-lucide="check-circle-2"></i> Individualized Learning Plans</li>
                        <li><i data-lucide="check-circle-2"></i> Hands-on Tactile Workshops</li>
                        <li><i data-lucide="check-circle-2"></i> Small Class Sizes</li>
                    </ul>
                </div>
                <div class="program-image">
                    <div class="image-wrapper" style="border-top: 5px solid #2B6CB0;">
                        <img src="{{ asset(site_content('programs_academia_image')) }}" alt="Specialized Academia">
                    </div>
                </div>
            </div>

            <!-- Program 2 -->
            <div class="program-row reverse">
                <div class="program-content">
                    <div class="program-icon" style="color: #155D18; background: rgba(21, 93, 24, 0.1);">
                        <i data-lucide="heart-pulse" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2>{{ site_content('programs_resilience_title') }}</h2>
                    <p class="program-desc">{{ site_content('programs_resilience_desc') }}</p>
                    <ul class="program-features">
                        <li><i data-lucide="check-circle-2"></i> Group Therapy Sessions</li>
                        <li><i data-lucide="check-circle-2"></i> Art & Music Expression</li>
                        <li><i data-lucide="check-circle-2"></i> 1-on-1 Counseling</li>
                    </ul>
                </div>
                <div class="program-image">
                    <div class="image-wrapper" style="border-top: 5px solid #155D18;">
                        <img src="{{ asset(site_content('programs_resilience_image')) }}" alt="Emotional Resilience">
                    </div>
                </div>
            </div>

            <!-- Program 3 -->
            <div class="program-row">
                <div class="program-content">
                    <div class="program-icon" style="color: #D69E2E; background: rgba(214, 158, 46, 0.1);">
                        <i data-lucide="compass" style="width: 32px; height: 32px;"></i>
                    </div>
                    <h2>{{ site_content('programs_independence_title') }}</h2>
                    <p class="program-desc">{{ site_content('programs_independence_desc') }}</p>
                    <ul class="program-features">
                        <li><i data-lucide="check-circle-2"></i> Vocational Training</li>
                        <li><i data-lucide="check-circle-2"></i> Financial Literacy</li>
                        <li><i data-lucide="check-circle-2"></i> Daily Living Skills</li>
                    </ul>
                </div>
                <div class="program-image">
                    <div class="image-wrapper" style="border-top: 5px solid #D69E2E;">
                        <img src="{{ asset(site_content('programs_independence_image')) }}" alt="Tactile Independence">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="programs-cta">
        <div class="pcta-content">
            <h2>See Our Programs in Action</h2>
            <p>Your support makes these life-changing programs possible.</p>
            <div class="pcta-buttons">
                <a href="/contact" class="btn-primary">Sponsor a Program</a>
            </div>
        </div>
    </section>

</x-layout>

<style>
    .programs-hero {
        background-color: #0A1C0C;
        padding: clamp(8rem, 15vw, 12rem) 2rem clamp(5rem, 10vw, 8rem);
        text-align: center;
        margin-top: 80px; /* Header offset */
        position: relative;
        overflow: hidden;
    }

    /* Abstract background shapes */
    .programs-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(21, 93, 24, 0.2) 0%, transparent 70%);
        z-index: 0;
    }

    .programs-hero::after {
        content: '';
        position: absolute;
        bottom: -50%;
        right: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(21, 93, 24, 0.1) 0%, transparent 70%);
        z-index: 0;
    }

    .programs-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .programs-badge {
        display: inline-block;
        padding: 0.5rem 1.5rem;
        background-color: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: #E2E8F0;
        border-radius: 50px;
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        font-weight: 500;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 1.5rem;
    }

    .programs-title {
        font-size: clamp(3rem, 6vw, 4.5rem);
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .programs-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        color: rgba(255, 255, 255, 0.7);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .programs-main {
        padding: clamp(5rem, 10vw, 8rem) 0;
        background-color: #FFFFFF;
    }

    .programs-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
        display: flex;
        flex-direction: column;
        gap: clamp(6rem, 10vw, 10rem);
    }

    .program-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .program-row.reverse {
        direction: rtl;
    }

    .program-row.reverse > * {
        direction: ltr;
    }

    @media (max-width: 991px) {
        .program-row, .program-row.reverse {
            grid-template-columns: 1fr;
            direction: ltr;
            gap: 3rem;
        }
    }

    .program-content h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2rem, 3vw, 3rem);
        color: #1A202C;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .program-desc {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 2rem;
    }

    .program-icon {
        width: 64px;
        height: 64px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .program-features {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .program-features li {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        font-family: 'Inter', sans-serif;
        color: #2D3748;
        font-weight: 500;
        font-size: 1.05rem;
    }

    .program-features li i {
        color: #155D18;
        width: 20px;
        height: 20px;
    }

    .image-wrapper {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        background-color: #F7FAFC; /* fallback */
    }

    .image-wrapper img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s ease;
    }

    .image-wrapper:hover img {
        transform: scale(1.05);
    }

    .programs-cta {
        background-color: #F7FAFC;
        padding: 6rem 2rem;
        text-align: center;
    }

    .pcta-content h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2rem, 3vw, 2.5rem);
        color: #1A202C;
        margin-bottom: 1rem;
    }

    .pcta-content p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
        margin-bottom: 2.5rem;
    }

    .btn-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 1rem 2.5rem;
        background-color: #155D18;
        color: white;
        border-radius: 50px; 
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(21, 93, 24, 0.2);
    }

    .btn-primary:hover {
        background-color: #0F4311;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(21, 93, 24, 0.3);
    }
</style>
