<x-layout>
    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="contact-hero-content">
            <span class="contact-badge">Get Involved</span>
            <h1 class="contact-title">Let's Connect</h1>
            <p class="contact-subtitle">Whether you want to volunteer, donate, or just learn more about our mission, we would love to hear from you.</p>
        </div>
    </section>

    <!-- Main Contact Layout -->
    <section class="contact-main">
        <div class="contact-container">
            
            <!-- Left Info Panel -->
            <div class="contact-info">
                <h2>Contact Information</h2>
                <p>Reach out to us directly or use the contact form. We strive to respond to all inquiries within 24 hours.</p>
                
                <div class="info-blocks">
                    <div class="info-block">
                        <div class="info-icon"><i data-lucide="map-pin"></i></div>
                        <div>
                            <h4>Visit Us</h4>
                            <p>Roshni Quran academy.<br>469 A.<br>Block N.<br>Samnabad<br>Lahore</p>
                        </div>
                    </div>
                    
                    <div class="info-block">
                        <div class="info-icon"><i data-lucide="phone"></i></div>
                        <div>
                            <h4>Call Us</h4>
                            <p>+92320 6869258<br>+923224098062</p>
                        </div>
                    </div>
                    
                    <div class="info-block">
                        <div class="info-icon"><i data-lucide="mail"></i></div>
                        <div>
                            <h4>Email Us</h4>
                            <p><a href="mailto:info@roshnicarehome.com" class="hover:text-green-700 transition-colors">info@roshnicarehome.com</a></p>
                        </div>
                    </div>
                </div>

                <div class="get-involved-cards">
                    <div class="involve-card volunteer-card">
                        <h3>Become a Volunteer</h3>
                        <p>Join our community of dedicated educators and support staff.</p>
                        <a href="https://api.whatsapp.com/send?phone=923206869258" class="involve-link" target="_blank">Apply Now <i data-lucide="arrow-right"></i></a>
                    </div>
                    <div class="involve-card donate-card">
                        <h3>Make a Donation</h3>
                        <p>Your contribution directly supports our specialized programs.</p>
                        <a href="https://api.whatsapp.com/send?phone=923206869258" class="involve-link" target="_blank">Donate <i data-lucide="arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Right Form Panel -->
            <div class="contact-form-wrapper">
                @if(session('success'))
                    <div style="background-color: #DEF7EC; color: #03543F; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; font-family: 'Inter', sans-serif;">
                        <i data-lucide="check-circle" style="display: inline-block; vertical-align: middle; margin-right: 0.5rem; width: 20px; height: 20px;"></i>
                        {{ session('success') }}
                    </div>
                @endif
                
                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <h3>Send us a Message</h3>
                    
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <select id="subject" name="subject">
                            <option value="general">General Inquiry</option>
                            <option value="volunteer">Volunteering</option>
                            <option value="donation">Donation Support</option>
                            <option value="partnership">Partnership</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">Send Message</button>
                </form>
            </div>
            
        </div>
    </section>
</x-layout>

<style>
    .contact-hero {
        background-color: #0A1C0C;
        padding: clamp(8rem, 15vw, 12rem) 2rem clamp(5rem, 10vw, 8rem);
        text-align: center;
        margin-top: 80px;
        position: relative;
        overflow: hidden;
    }

    .contact-hero::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -10%;
        width: 60%;
        height: 200%;
        background: radial-gradient(circle, rgba(21, 93, 24, 0.2) 0%, transparent 70%);
        z-index: 0;
    }

    .contact-hero-content {
        position: relative;
        z-index: 1;
        max-width: 800px;
        margin: 0 auto;
    }

    .contact-badge {
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

    .contact-title {
        font-size: clamp(3rem, 6vw, 4.5rem);
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        color: #FFFFFF;
        line-height: 1.1;
        margin-bottom: 1.5rem;
    }

    .contact-subtitle {
        font-size: clamp(1.1rem, 2vw, 1.3rem);
        color: rgba(255, 255, 255, 0.7);
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        max-width: 600px;
        margin: 0 auto;
    }

    .contact-main {
        padding: clamp(4rem, 8vw, 6rem) 0;
        background-color: #F7FAFC;
    }

    .contact-container {
        max-width: 1200px;
        margin: -100px auto 0 auto;
        padding: 0 2rem;
        display: grid;
        grid-template-columns: 1fr 1.2fr;
        gap: 3rem;
        position: relative;
        z-index: 10;
    }

    @media (max-width: 991px) {
        .contact-container {
            grid-template-columns: 1fr;
            margin-top: -50px;
        }
    }

    .contact-info {
        background: transparent;
        padding: 2rem 0;
    }

    .contact-info h2 {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(2rem, 3vw, 2.5rem);
        color: #1A202C;
        margin-bottom: 1rem;
    }

    .contact-info > p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        font-size: 1.1rem;
        line-height: 1.6;
        margin-bottom: 3rem;
    }

    .info-blocks {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        margin-bottom: 4rem;
    }

    .info-block {
        display: flex;
        align-items: flex-start;
        gap: 1.5rem;
    }

    .info-icon {
        width: 48px;
        height: 48px;
        background-color: white;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #155D18;
        box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        flex-shrink: 0;
    }

    .info-icon i {
        width: 24px;
        height: 24px;
    }

    .info-block h4 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.2rem;
        color: #1A202C;
        margin-bottom: 0.25rem;
    }

    .info-block p {
        font-family: 'Inter', sans-serif;
        color: #4A5568;
        line-height: 1.5;
        font-size: 1rem;
    }

    .get-involved-cards {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1.5rem;
    }

    @media (max-width: 600px) {
        .get-involved-cards {
            grid-template-columns: 1fr;
        }
    }

    .involve-card {
        padding: 1.5rem;
        border-radius: 16px;
        color: white;
    }

    .volunteer-card {
        background: linear-gradient(135deg, #2B6CB0 0%, #2C5282 100%);
    }

    .donate-card {
        background: linear-gradient(135deg, #155D18 0%, #0A1C0C 100%);
    }

    .involve-card h3 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.2rem;
        margin-bottom: 0.5rem;
    }

    .involve-card p {
        font-family: 'Inter', sans-serif;
        font-size: 0.9rem;
        opacity: 0.9;
        margin-bottom: 1.5rem;
        line-height: 1.4;
    }

    .involve-link {
        color: white;
        text-decoration: none;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 0.9rem;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        transition: opacity 0.2s;
    }
    
    .involve-link i {
        width: 16px;
        height: 16px;
    }

    .involve-link:hover {
        opacity: 0.8;
    }

    .contact-form-wrapper {
        background: white;
        padding: 3rem;
        border-radius: 24px;
        box-shadow: 0 20px 40px rgba(0,0,0,0.08);
    }

    .contact-form h3 {
        font-family: 'Outfit', sans-serif;
        font-size: 1.8rem;
        color: #1A202C;
        margin-bottom: 2rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        color: #4A5568;
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }

    .form-group input, 
    .form-group select, 
    .form-group textarea {
        width: 100%;
        padding: 1rem;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        font-size: 1rem;
        color: #1A202C;
        background-color: #F7FAFC;
        transition: all 0.2s ease;
    }

    .form-group input:focus, 
    .form-group select:focus, 
    .form-group textarea:focus {
        outline: none;
        border-color: #155D18;
        background-color: white;
        box-shadow: 0 0 0 3px rgba(21, 93, 24, 0.1);
    }

    .btn-submit {
        width: 100%;
        padding: 1.25rem;
        background-color: #155D18;
        color: white;
        border: none;
        border-radius: 12px;
        font-family: 'Inter', sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        cursor: pointer;
        transition: all 0.3s ease;
        margin-top: 1rem;
    }

    .btn-submit:hover {
        background-color: #0F4311;
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(21, 93, 24, 0.2);
    }
</style>
