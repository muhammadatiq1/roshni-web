<x-layout>
    <!-- Gallery Hero -->
    <section class="gallery-hero">
        <div class="gallery-hero-bg">
            <img src="{{ asset(site_content('gallery_hero_image')) }}" alt="Gallery Hero">
            <div class="gallery-overlay"></div>
        </div>
        <div class="gallery-hero-content">
            <span class="gallery-badge">Our Visual Journey</span>
            <h1 class="gallery-title">{!! site_content('gallery_hero_title') !!}</h1>
            <p class="gallery-subtitle">{{ site_content('gallery_hero_subtitle') }}</p>
        </div>
    </section>

    <!-- Gallery Masonry Grid -->
    <section class="gallery-section">
        <div class="gallery-container">
            <div class="masonry-grid">
                @for ($i = 1; $i <= 48; $i++)
                    <div class="masonry-item" data-aos="fade-up" data-aos-delay="{{ ($i % 5) * 100 }}">
                        <img src="{{ asset(site_content('gallery_image_' . $i)) }}" alt="Roshni Care Gallery Image {{ $i }}" loading="lazy">
                        <div class="item-overlay">
                            <i data-lucide="zoom-in"></i>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
</x-layout>

<style>
    .gallery-hero {
        position: relative;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        margin-top: 80px;
    }

    .gallery-hero-bg {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        z-index: -1;
    }

    .gallery-hero-bg img {
        width: 100%; height: 100%; object-fit: cover;
        filter: grayscale(10%);
    }

    .gallery-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: linear-gradient(135deg, rgba(21, 93, 24, 0.85) 0%, rgba(10, 28, 12, 0.95) 100%);
    }

    .gallery-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        padding: 0 2rem;
    }

    .gallery-badge {
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

    .gallery-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .gallery-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.25rem);
        color: rgba(255, 255, 255, 0.8);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    /* Masonry Layout CSS */
    .gallery-section {
        padding: 5rem 0;
        background-color: #F7FAFC;
    }

    .gallery-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    .masonry-grid {
        /* This creates the masonry effect without JS */
        column-count: 4;
        column-gap: 1.5rem;
    }

    /* Responsive column counts */
    @media (max-width: 1200px) {
        .masonry-grid { column-count: 3; }
    }
    @media (max-width: 768px) {
        .masonry-grid { column-count: 2; }
    }
    @media (max-width: 480px) {
        .masonry-grid { column-count: 1; }
    }

    .masonry-item {
        position: relative;
        break-inside: avoid;
        margin-bottom: 1.5rem;
        border-radius: 12px;
        overflow: hidden;
        background-color: white;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        cursor: pointer;
        /* Force hardware acceleration for smooth hover */
        transform: translateZ(0); 
    }

    .masonry-item img {
        width: 100%;
        height: auto;
        display: block;
        transition: transform 0.5s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .item-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background-color: rgba(10, 28, 12, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 10;
    }

    .item-overlay i {
        color: white;
        width: 40px;
        height: 40px;
        transform: scale(0.5);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .masonry-item:hover img {
        transform: scale(1.05);
    }

    .masonry-item:hover .item-overlay {
        opacity: 1;
    }

    .masonry-item:hover .item-overlay i {
        transform: scale(1);
    }
</style>
