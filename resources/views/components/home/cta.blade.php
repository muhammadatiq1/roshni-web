<style>
    .cta-section {
        position: relative;
        padding: clamp(8rem, 15vw, 12rem) 0;
        background-color: #0A1C0C;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .cta-bg-image {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 0.35;
        z-index: 0;
        transition: transform 10s ease;
    }

    .cta-section:hover .cta-bg-image {
        transform: scale(1.05);
    }

    .cta-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to top, #08160A 0%, rgba(8, 22, 10, 0.4) 50%, rgba(8, 22, 10, 0.8) 100%);
        z-index: 1;
    }

    .cta-container {
        position: relative;
        z-index: 10;
        max-width: 1000px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem);
        text-align: center;
    }

    .cta-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(3rem, 6vw, 5.5rem);
        font-weight: 800;
        color: #FFFFFF;
        line-height: 1.1;
        letter-spacing: -0.02em;
        margin-bottom: 2rem;
        text-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .cta-text {
        font-size: clamp(1.1rem, 2vw, 1.35rem);
        color: rgba(255, 255, 255, 0.85);
        line-height: 1.6;
        margin-bottom: 3.5rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-actions {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 1.5rem;
    }

    @media (min-width: 640px) {
        .cta-actions {
            flex-direction: row;
            gap: 2rem;
        }
    }

    .btn-cta-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 1.2rem 3rem;
        background-color: #F59E0B; /* Gold */
        color: #155D18;
        border-radius: 999px;
        font-weight: 800;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 15px 30px rgba(245, 158, 11, 0.2);
    }

    .btn-cta-primary:hover {
        transform: translateY(-4px);
        background-color: #FFFFFF;
        box-shadow: 0 20px 40px rgba(255, 255, 255, 0.2);
    }

    .btn-cta-secondary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 1.1rem 2.8rem;
        background-color: transparent;
        color: #FFFFFF;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 999px;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-cta-secondary:hover {
        border-color: #FFFFFF;
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<section class="cta-section">
    <!-- Unsplash image: visually impaired student smiling / achievement -->
    <img src="/extracted_images/image22.jpeg" alt="Student smiling" class="cta-bg-image">
    <div class="cta-overlay"></div>
    
    <div class="cta-container" data-aos="zoom-in" data-aos-duration="1000">
        <h2 class="cta-headline">Ready to make a profound difference?</h2>
        <p class="cta-text">
            Join thousands of donors who are actively breaking down barriers and building a world of independence for visually impaired girls. Your support starts today.
        </p>
        <div class="cta-actions">
            <a href="#donate" class="btn-cta-primary">
                <i data-lucide="heart" style="width: 20px; height: 20px;"></i> Donate Now
            </a>
            <a href="#volunteer" class="btn-cta-secondary">
                <i data-lucide="users" style="width: 20px; height: 20px;"></i> Become a Volunteer
            </a>
        </div>
    </div>
</section>
