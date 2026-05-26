<style>
    .appeals-section {
        background-color: #FFFFFF; /* Clean white for contrast */
        padding: clamp(6rem, 10vw, 8rem) 0;
        position: relative;
    }

    .appeals-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 0 clamp(1.5rem, 5vw, 4rem);
    }

    .appeals-header {
        text-align: center;
        margin-bottom: 5rem;
        max-width: 800px;
        margin-left: auto;
        margin-right: auto;
    }

    .section-label-urgent {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.5rem 1.25rem;
        background-color: rgba(230, 25, 25, 0.08);
        color: #E61919; /* Red Action */
        border-radius: 999px;
        font-size: 0.85rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.06em;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 15px rgba(230, 25, 25, 0.1);
    }

    .appeals-headline {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2.5rem, 4vw, 3.8rem);
        font-weight: 800;
        color: #111827;
        line-height: 1.1;
        letter-spacing: -0.02em;
        margin-bottom: 1.5rem;
    }

    .appeals-subheadline {
        font-size: 1.15rem;
        color: #4B5563;
        line-height: 1.7;
        max-width: 650px;
        margin: 0 auto;
    }

    .appeals-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }

    @media (min-width: 768px) {
        .appeals-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
    }

    @media (min-width: 1024px) {
        .appeals-grid {
            grid-template-columns: repeat(4, 1fr);
            gap: 2.5rem;
        }
    }

    /* Luxury Card Styling */
    .appeal-card {
        background-color: #FFFFFF;
        border-radius: 32px;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.03);
        box-shadow: 0 10px 40px rgba(0,0,0,0.04);
        transition: all 0.5s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .appeal-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 60px rgba(21, 93, 24, 0.08);
        border-color: rgba(21, 93, 24, 0.1);
    }

    .appeal-photo {
        width: 100%;
        height: 240px;
        position: relative;
        overflow: hidden;
    }

    .appeal-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .appeal-card:hover .appeal-photo img {
        transform: scale(1.08);
    }

    /* Glassmorphism Badge */
    .appeal-badge {
        position: absolute;
        top: 1.25rem;
        right: 1.25rem;
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(12px);
        padding: 0.5rem 1.25rem;
        border-radius: 999px;
        font-size: 0.85rem;
        font-weight: 800;
        color: #155D18;
        box-shadow: 0 8px 20px rgba(0,0,0,0.08);
        z-index: 10;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        border: 1px solid rgba(255, 255, 255, 0.5);
    }

    .appeal-content {
        padding: 2.5rem 2rem;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .appeal-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.4rem;
        font-weight: 800;
        color: #111827;
        margin-bottom: 1rem;
        line-height: 1.3;
    }

    .appeal-text {
        font-size: 1.05rem;
        color: #4B5563;
        line-height: 1.7;
        margin-bottom: 2.5rem;
    }

    /* Sleek Capsule Button */
    .btn-appeal-donate {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 1rem 1.5rem;
        background-color: #F8FAF8;
        color: #155D18;
        border-radius: 999px;
        font-weight: 700;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        margin-top: auto;
        width: 100%;
    }

    .appeal-card:hover .btn-appeal-donate {
        background-color: #155D18;
        color: white;
        box-shadow: 0 10px 20px rgba(21, 93, 24, 0.2);
    }
    
    .btn-appeal-donate i {
        transition: transform 0.3s ease;
    }
    
    .appeal-card:hover .btn-appeal-donate i {
        transform: translateX(4px);
    }
</style>

<section id="appeals" class="appeals-section">
    <div class="appeals-container">
        
        <div class="appeals-header" data-aos="fade-up">
            <div class="section-label-urgent">
                <i data-lucide="bell" style="width: 16px; height: 16px;"></i> Live Appeals
            </div>
            <h2 class="appeals-headline">Make an immediate difference.</h2>
            <p class="appeals-subheadline">
                Choose a specific cause to support right now. 100% of your donation goes directly towards funding these critical initiatives for our students.
            </p>
        </div>

        <div class="appeals-grid">
            <!-- Appeal 1 -->
            <div class="appeal-card" data-aos="fade-up" data-aos-delay="0">
                <div class="appeal-photo">
                    <div class="appeal-badge"><i data-lucide="target" style="width: 14px; height: 14px;"></i> Education</div>
                    <img src="/extracted_images/image13.jpeg" alt="Education">
                </div>
                <div class="appeal-content">
                    <h3 class="appeal-title">Sponsor a Student's Education</h3>
                    <p class="appeal-text">Provide complete braille educational resources, textbooks, and tuition for one full year.</p>
                    <a href="#donate" class="btn-appeal-donate">
                        Donate Now <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
                    </a>
                </div>
            </div>

            <!-- Appeal 2 -->
            <div class="appeal-card" data-aos="fade-up" data-aos-delay="100">
                <div class="appeal-photo">
                    <div class="appeal-badge" style="color: #F59E0B;"><i data-lucide="home" style="width: 14px; height: 14px;"></i> Care</div>
                    <img src="/extracted_images/image14.jpeg" alt="Hostel Care">
                </div>
                <div class="appeal-content">
                    <h3 class="appeal-title">Support Secure Hostel Care</h3>
                    <p class="appeal-text">Fund a month of safe, fully-equipped residential living, including nutritious daily meals.</p>
                    <a href="#donate" class="btn-appeal-donate">
                        Donate Now <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
                    </a>
                </div>
            </div>

            <!-- Appeal 3 -->
            <div class="appeal-card" data-aos="fade-up" data-aos-delay="200">
                <div class="appeal-photo">
                    <div class="appeal-badge" style="color: #E61919;"><i data-lucide="navigation" style="width: 14px; height: 14px;"></i> Training</div>
                    <img src="/extracted_images/image15.jpeg" alt="Mobility">
                </div>
                <div class="appeal-content">
                    <h3 class="appeal-title">Mobility Independence Kit</h3>
                    <p class="appeal-text">Equip a student with a professional white cane and comprehensive navigational training.</p>
                    <a href="#donate" class="btn-appeal-donate">
                        Donate Now <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
                    </a>
                </div>
            </div>

            <!-- Appeal 4 -->
            <div class="appeal-card" data-aos="fade-up" data-aos-delay="300">
                <div class="appeal-photo">
                    <div class="appeal-badge"><i data-lucide="heart" style="width: 14px; height: 14px;"></i> General</div>
                    <img src="/extracted_images/image16.jpeg" alt="General Fund">
                </div>
                <div class="appeal-content">
                    <h3 class="appeal-title">General Welfare Fund</h3>
                    <p class="appeal-text">Allow us to allocate your donation to the most urgent requirements of the care home today.</p>
                    <a href="#donate" class="btn-appeal-donate">
                        Donate Now <i data-lucide="arrow-right" style="width: 18px; height: 18px;"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
