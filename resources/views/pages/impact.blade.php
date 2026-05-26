<x-layout>
    <!-- Impact Hero -->
    <section class="impact-hero">
        <div class="impact-hero-bg">
            <img src="/extracted_images/image4.jpeg" alt="Impact of Roshni Care">
            <div class="impact-overlay"></div>
        </div>
        <div class="impact-hero-content">
            <span class="impact-badge">Our Impact</span>
            <h1 class="impact-title">Lives Changed,<br>Futures Brightened</h1>
            <p class="impact-subtitle">Numbers tell a part of our story, but the real impact is measured in the smiles, independence, and success of the youth we support.</p>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="impact-stats">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">5,000+</div>
                <div class="stat-label">Lives Touched</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">100%</div>
                <div class="stat-label">Commitment</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">50+</div>
                <div class="stat-label">Programs Launched</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">12</div>
                <div class="stat-label">Years of Service</div>
            </div>
        </div>
    </section>

    <!-- Success Stories -->
    <section class="success-stories">
        <div class="stories-container">
            <div class="stories-header">
                <h2>Voices of Hope</h2>
                <p>Read the inspiring stories of those who have walked through our doors.</p>
            </div>
            
            <div class="stories-grid">
                <!-- Story 1 -->
                <div class="story-card">
                    <div class="quote-icon"><i data-lucide="quote"></i></div>
                    <p class="story-text">"Before coming to Roshni Care, I felt lost. The vocational training gave me not just skills, but the confidence to start my own small business. I am now independent."</p>
                    <div class="story-author">
                        <div class="author-avatar">
                            <i data-lucide="user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Ahmad S.</h4>
                            <span>Graduate, 2023</span>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="story-card">
                    <div class="quote-icon"><i data-lucide="quote"></i></div>
                    <p class="story-text">"The emotional resilience workshops changed my life. I learned how to process my past and look forward to a future filled with light and opportunity."</p>
                    <div class="story-author">
                        <div class="author-avatar">
                            <i data-lucide="user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Fatima K.</h4>
                            <span>Alumni</span>
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="story-card">
                    <div class="quote-icon"><i data-lucide="quote"></i></div>
                    <p class="story-text">"The educators here don't just teach; they mentor. The personalized academic plan helped me secure a scholarship to university. I am forever grateful."</p>
                    <div class="story-author">
                        <div class="author-avatar">
                            <i data-lucide="user"></i>
                        </div>
                        <div class="author-info">
                            <h4>Omar R.</h4>
                            <span>University Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="impact-gallery">
        <div class="gallery-container">
            <h2>Moments of Joy</h2>
            <div class="gallery-grid">
                <div class="gallery-item"><img src="/extracted_images/image5.jpeg" alt="Gallery Image 1"></div>
                <div class="gallery-item"><img src="/extracted_images/image6.jpeg" alt="Gallery Image 2"></div>
                <div class="gallery-item"><img src="/extracted_images/image7.jpeg" alt="Gallery Image 3"></div>
                <div class="gallery-item"><img src="/extracted_images/image8.jpeg" alt="Gallery Image 4"></div>
            </div>
        </div>
    </section>
</x-layout>

<style>
    .impact-hero {
        position: relative;
        min-height: 70vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 80px;
    }

    .impact-hero-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        z-index: -1;
    }

    .impact-hero-bg img {
        width: 100%; height: 100%; object-fit: cover;
        filter: grayscale(20%);
    }

    .impact-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(21, 93, 24, 0.8) 0%, rgba(10, 28, 12, 0.9) 100%);
    }

    .impact-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 2rem;
    }

    .impact-badge {
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
        backdrop-filter: blur(4px);
    }

    .impact-title {
        font-size: clamp(3rem, 6vw, 5rem);
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .impact-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        color: rgba(255, 255, 255, 0.9);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .impact-stats {
        margin-top: -80px;
        position: relative;
        z-index: 10;
        padding: 0 2rem;
    }

    .stats-container {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
    }

    .stat-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 2.5rem 2rem;
        border-radius: 20px;
        text-align: center;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        border: 1px solid rgba(255,255,255,1);
        transition: transform 0.3s ease;
    }

    .stat-card:hover {
        transform: translateY(-10px);
    }

    .stat-number {
        font-family: 'Outfit', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        color: #155D18;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .success-stories {
        padding: clamp(6rem, 10vw, 8rem) 0;
        background-color: #F7FAFC;
    }

    .stories-container {
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .stories-header {
        text-align: center;
        max-width: 600px;
        margin: 0 auto 4rem auto;
    }

    .stories-header h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.5rem);
        color: #1A202C;
        margin-bottom: 1rem;
    }

    .stories-header p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
    }

    .stories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 3rem;
    }

    .story-card {
        background: white;
        padding: 3rem;
        border-radius: 24px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.03);
        position: relative;
        transition: all 0.3s ease;
    }

    .story-card:hover {
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        transform: translateY(-5px);
    }

    .quote-icon {
        position: absolute;
        top: 2rem;
        right: 2rem;
        color: rgba(21, 93, 24, 0.1);
    }
    
    .quote-icon i {
        width: 48px;
        height: 48px;
    }

    .story-text {
        font-family: 'Inter', sans-serif;
        color: #2D3748;
        font-size: 1.15rem;
        line-height: 1.8;
        margin-bottom: 2.5rem;
        font-style: italic;
        position: relative;
        z-index: 1;
    }

    .story-author {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .author-avatar {
        width: 50px;
        height: 50px;
        background-color: #E2E8F0;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #718096;
    }

    .author-info h4 {
        font-family: 'Outfit', sans-serif;
        color: #1A202C;
        font-size: 1.1rem;
        margin-bottom: 0.2rem;
    }

    .author-info span {
        font-family: 'Inter', sans-serif;
        color: #718096;
        font-size: 0.9rem;
    }

    .impact-gallery {
        padding: 5rem 0 8rem 0;
        background-color: white;
    }

    .gallery-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 2rem;
        text-align: center;
    }

    .gallery-container h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2rem, 3vw, 3rem);
        color: #1A202C;
        margin-bottom: 3rem;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 1.5rem;
    }

    .gallery-item {
        border-radius: 16px;
        overflow: hidden;
        aspect-ratio: 4/3;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }
</style>
