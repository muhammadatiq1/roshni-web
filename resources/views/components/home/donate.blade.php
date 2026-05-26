<style>
    .impact-section {
        background-color: #FCFBF8; /* Soft warm off-white */
        padding: clamp(6rem, 10vw, 8rem) 0;
        position: relative;
        overflow: hidden;
    }

    /* Ambient Background Elements */
    .impact-bg-shape {
        position: absolute;
        top: -100px;
        right: -100px;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(245, 158, 11, 0.03) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }

    .impact-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem);
        position: relative;
        z-index: 10;
    }

    .impact-header-row {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin-bottom: 5rem;
    }

    @media (min-width: 768px) {
        .impact-header-row {
            flex-direction: row;
            justify-content: space-between;
            align-items: flex-end;
        }
    }

    .impact-header-content {
        max-width: 600px;
    }

    .impact-label {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.5rem 1.25rem;
        background-color: rgba(245, 158, 11, 0.15);
        color: #B47100; /* Darker gold for contrast */
        border-radius: 999px;
        font-weight: 700;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 1.5rem;
    }

    .impact-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.5rem);
        font-weight: 800;
        color: #111827; /* Near black */
        line-height: 1.1;
        letter-spacing: -0.01em;
        margin-bottom: 1.5rem;
    }

    .impact-headline span {
        color: #155D18; /* Deep Green Highlight */
    }

    /* Swiper Navigation Controls */
    .swiper-nav-wrapper {
        display: flex;
        gap: 1rem;
    }

    .swiper-btn-prev, .swiper-btn-next {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        background-color: #FFFFFF;
        box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        color: #155D18;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .swiper-btn-prev:hover, .swiper-btn-next:hover {
        background-color: #155D18;
        color: #FFFFFF;
        transform: scale(1.05);
        box-shadow: 0 15px 30px rgba(21, 93, 24, 0.2);
    }

    .swiper-btn-disabled {
        opacity: 0.5;
        cursor: not-allowed;
        box-shadow: none;
    }
    
    .swiper-btn-disabled:hover {
        background-color: #FFFFFF;
        color: #155D18;
        transform: none;
    }

    /* Swiper Slider Styles */
    .impact-swiper {
        width: 100%;
        overflow: visible !important; 
        padding-bottom: 3rem; /* Space for shadow */
    }

    .swiper-slide {
        height: auto;
        opacity: 0.4;
        transition: opacity 0.5s ease;
    }

    .swiper-slide-active, 
    .swiper-slide-next, 
    .swiper-slide-next + .swiper-slide {
        opacity: 1;
    }

    /* Luxury Card Design */
    .impact-card {
        background-color: #FFFFFF;
        border-radius: 32px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
        box-shadow: 0 10px 40px rgba(0,0,0,0.03);
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        border: 1px solid rgba(0,0,0,0.02);
    }

    .impact-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(21, 93, 24, 0.08);
    }

    .impact-img-wrapper {
        position: relative;
        width: 100%;
        height: 260px;
        overflow: hidden;
    }

    .impact-card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.7s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .impact-card:hover .impact-card-img {
        transform: scale(1.05);
    }

    .impact-card-body {
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .impact-card-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.6rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 1rem;
        line-height: 1.2;
    }

    .impact-card-text {
        color: #4B5563;
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 2rem;
    }

    .btn-read-more {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: #F59E0B; /* Gold Action */
        font-weight: 700;
        font-size: 1rem;
        margin-top: auto;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-read-more:hover {
        gap: 0.75rem;
        color: #D97706; /* Darker Gold */
    }

    .btn-read-more i {
        transition: transform 0.3s ease;
    }

    .btn-read-more:hover i {
        transform: translateX(4px);
    }

    /* Bottom Decorative Border */
    .bottom-accent {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 8px;
        background: linear-gradient(90deg, #F59E0B 0%, #155D18 100%);
    }
</style>

<section id="donate" class="impact-section">
    <div class="impact-bg-shape"></div>
    
    <div class="impact-container">
        
        <div class="impact-header-row" data-aos="fade-up">
            <div class="impact-header-content">
                <div class="impact-label">
                    <i data-lucide="trending-up" style="width: 16px; height: 16px;"></i> Our Impact
                </div>
                <h2 class="impact-headline">Transforming <span>Futures</span></h2>
                <p class="about-text" style="color: #4B5563; font-size: 1.15rem;">
                    See how your support directly transforms the lives of visually impaired girls, turning barriers into stepping stones for success.
                </p>
            </div>
            
            <div class="swiper-nav-wrapper">
                <div class="swiper-btn-prev" id="impact-prev"><i data-lucide="arrow-left" style="width: 24px; height: 24px;"></i></div>
                <div class="swiper-btn-next" id="impact-next"><i data-lucide="arrow-right" style="width: 24px; height: 24px;"></i></div>
            </div>
        </div>

        <!-- Swiper Container -->
        <div class="swiper impact-swiper" data-aos="fade-left" data-aos-delay="200">
            <div class="swiper-wrapper">
                
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <div class="impact-card">
                        <div class="impact-img-wrapper">
                            <img src="/extracted_images/image18.jpeg" alt="Academic Excellence" class="impact-card-img">
                        </div>
                        <div class="impact-card-body">
                            <h3 class="impact-card-title">Academic Excellence</h3>
                            <p class="impact-card-text">Graduates from our advanced braille program have consistently secured top university placements across the country.</p>
                            <a href="#" class="btn-read-more">Read Full Story <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <div class="impact-card">
                        <div class="impact-img-wrapper">
                            <!-- Fixed broken image link using a beautiful community/students image -->
                            <img src="/extracted_images/image19.jpeg" alt="Community Building" class="impact-card-img">
                        </div>
                        <div class="impact-card-body">
                            <h3 class="impact-card-title">A Lifelong Community</h3>
                            <p class="impact-card-text">Our secure hostel care has provided a loving home to over 1,000 girls, forging bonds that last a lifetime.</p>
                            <a href="#" class="btn-read-more">Read Full Story <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <div class="impact-card">
                        <div class="impact-img-wrapper">
                            <img src="/extracted_images/image20.jpeg" alt="Independent Mobility" class="impact-card-img">
                        </div>
                        <div class="impact-card-body">
                            <h3 class="impact-card-title">Fearless Independence</h3>
                            <p class="impact-card-text">Through intensive mobility training, 100% of our senior students navigate urban environments completely independently.</p>
                            <a href="#" class="btn-read-more">Read Full Story <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <div class="impact-card">
                        <div class="impact-img-wrapper">
                            <img src="/extracted_images/image21.jpeg" alt="Vocational Skills" class="impact-card-img">
                        </div>
                        <div class="impact-card-body">
                            <h3 class="impact-card-title">Vocational Leadership</h3>
                            <p class="impact-card-text">Teaching vital vocational skills has empowered our alumni to launch successful independent businesses.</p>
                            <a href="#" class="btn-read-more">Read Full Story <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    
    <div class="bottom-accent"></div>
</section>

<!-- Initialize Swiper just for this section -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if(typeof Swiper !== 'undefined') {
            new Swiper('.impact-swiper', {
                slidesPerView: 1.2,
                spaceBetween: 24,
                grabCursor: true,
                navigation: {
                    nextEl: '#impact-next',
                    prevEl: '#impact-prev',
                },
                breakpoints: {
                    640: { slidesPerView: 2.2, spaceBetween: 32 },
                    1024: { slidesPerView: 3.2, spaceBetween: 40 }
                }
            });
        }
    });
</script>
