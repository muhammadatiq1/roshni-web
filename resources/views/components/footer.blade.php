<style>
    .premium-footer {
        background-color: #08160A; /* Ultra dark green, almost black */
        color: #FFFFFF;
        position: relative;
        overflow: hidden;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    /* Ambient background glow */
    .footer-glow {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100vw;
        height: 600px;
        background: radial-gradient(circle at top center, rgba(21, 93, 24, 0.3) 0%, transparent 70%);
        pointer-events: none;
        z-index: 0;
    }

    .footer-content-wrapper {
        position: relative;
        z-index: 10;
        max-width: 1400px;
        margin: 0 auto;
        padding: 6rem clamp(1.5rem, 5vw, 4rem) 2rem;
    }

    /* CTA Section */
    .footer-cta-box {
        text-align: center;
        max-width: 800px;
        margin: 0 auto 6rem;
        padding-bottom: 5rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .footer-cta-title {
        font-family: 'Outfit', sans-serif;
        font-size: clamp(3rem, 6vw, 4.5rem);
        font-weight: 800;
        letter-spacing: -0.02em;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        color: #FFFFFF;
    }

    .footer-cta-text {
        font-size: 1.2rem;
        color: #A3B1A5;
        line-height: 1.7;
        margin-bottom: 3rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-footer-primary {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.75rem;
        padding: 1.25rem 3rem;
        background: linear-gradient(135deg, #F59E0B 0%, #E61919 100%);
        color: white;
        border-radius: 999px;
        font-weight: 700;
        font-size: 1.15rem;
        text-decoration: none;
        transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 10px 30px rgba(230, 25, 25, 0.25);
    }

    .btn-footer-primary:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px rgba(230, 25, 25, 0.4);
    }

    .footer-partner-link {
        display: inline-block;
        margin-top: 2rem;
        color: #A3B1A5;
        font-weight: 500;
        text-decoration: none;
        border-bottom: 1px solid rgba(163, 177, 165, 0.4);
        padding-bottom: 2px;
        transition: all 0.3s ease;
    }

    .footer-partner-link:hover {
        color: #FFFFFF;
        border-bottom-color: #FFFFFF;
    }

    /* Grid Layout */
    .footer-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: 3rem;
        margin-bottom: 5rem;
    }

    @media (min-width: 640px) {
        .footer-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 1024px) {
        .footer-grid {
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 4rem;
        }
    }

    /* Brand Column */
    .footer-brand-col .logo-text {
        font-size: 1.5rem;
        color: #FFFFFF;
        margin-bottom: 1.5rem;
        display: inline-flex;
    }

    .footer-brand-desc {
        color: #A3B1A5;
        font-size: 1.05rem;
        line-height: 1.7;
        margin-bottom: 2rem;
        max-width: 320px;
    }

    /* Links Columns */
    .footer-col-title {
        font-family: 'Outfit', sans-serif;
        font-size: 1.1rem;
        font-weight: 700;
        color: #FFFFFF;
        margin-bottom: 2rem;
        letter-spacing: 0.05em;
        text-transform: uppercase;
    }

    .footer-nav-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 1.25rem;
    }

    .footer-nav-link {
        color: #A3B1A5;
        text-decoration: none;
        font-size: 1.05rem;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        transition: all 0.3s ease;
    }

    .footer-nav-link:hover {
        color: #F59E0B; /* Gold Accent */
        transform: translateX(6px);
    }

    /* Bottom Bar */
    .footer-bottom {
        display: flex;
        flex-direction: column;
        gap: 2rem;
        padding-top: 3rem;
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        align-items: center;
        text-align: center;
    }

    @media (min-width: 1024px) {
        .footer-bottom {
            flex-direction: row;
            justify-content: space-between;
            text-align: left;
        }
    }

    .footer-legal-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 2rem;
        color: #727D74;
        font-size: 0.95rem;
    }

    .footer-legal-nav a {
        color: #727D74;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-legal-nav a:hover {
        color: #FFFFFF;
    }

    .footer-socials {
        display: flex;
        gap: 1rem;
    }

    .social-btn {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        background-color: rgba(255, 255, 255, 0.05);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .social-btn:hover {
        background-color: #F59E0B;
        border-color: #F59E0B;
        color: #08160A;
        transform: translateY(-3px);
    }
</style>

<footer class="premium-footer">
    <div class="footer-glow"></div>
    
    <div class="footer-content-wrapper">
        
        <!-- CTA Section -->
        <div class="footer-cta-box" data-aos="fade-up">
            <h2 class="footer-cta-title">Empower a life today</h2>
            <p class="footer-cta-text">Your contribution provides specialized education, comprehensive hostel care, and a completely secure future for visually impaired girls.</p>
            <a href="https://api.whatsapp.com/send?phone=923206869258" class="btn-footer-primary" target="_blank">
                Support Our Mission <i data-lucide="arrow-right" style="width: 20px; height: 20px;"></i>
            </a>
            <br>
            <a href="#sponsor" class="footer-partner-link">Want to partner with us? Become a corporate sponsor.</a>
        </div>

        <!-- Links Grid -->
        <div class="footer-grid" data-aos="fade-up" data-aos-delay="100">
            
            <!-- Brand Column -->
            <div class="footer-brand-col">
                <a href="/" class="logo-text">
                    <img src="/logo.png" alt="Roshni Care Home" style="height: 48px; width: auto;">
                </a>
                <p class="footer-brand-desc">
                    Dedicated to ensuring that visual impairment never dictates a child's future. We build independence, leadership, and joy.
                </p>
            </div>

            <!-- Links Column 1 -->
            <div>
                <h4 class="footer-col-title">Our Programs</h4>
                <ul class="footer-nav-list">
                    <li><a href="#" class="footer-nav-link">Specialized Education</a></li>
                    <li><a href="#" class="footer-nav-link">Hostel Care</a></li>
                    <li><a href="#" class="footer-nav-link">Mobility Training</a></li>
                    <li><a href="#" class="footer-nav-link">Vocational Skills</a></li>
                </ul>
            </div>
            
            <!-- Links Column 2 -->
            <div>
                <h4 class="footer-col-title">Get Involved</h4>
                <ul class="footer-nav-list">
                    <li><a href="#" class="footer-nav-link">Make a Donation</a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=923206869258" class="footer-nav-link" target="_blank">Become a Volunteer</a></li>
                    <li><a href="#" class="footer-nav-link">Corporate Partners</a></li>
                    <li><a href="#" class="footer-nav-link">Start a Campaign</a></li>
                </ul>
            </div>

            <!-- Links Column 3 -->
            <div>
                <h4 class="footer-col-title">About Us</h4>
                <ul class="footer-nav-list">
                    <li><a href="#" class="footer-nav-link">Our Story</a></li>
                    <li><a href="#" class="footer-nav-link">Financial Transparency</a></li>
                    <li><a href="#" class="footer-nav-link">Safeguarding</a></li>
                    <li><a href="#" class="footer-nav-link">Contact Us</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom" data-aos="fade-up" data-aos-delay="200">
            <div class="footer-legal-nav">
                <span>&copy; 2026 Roshni Care Home. All rights reserved.</span>
                <a href="#">Terms of Service</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
            
            <div class="footer-socials">
                <a href="#" class="social-btn" aria-label="Twitter">
                    <i data-lucide="twitter" style="width: 18px; height: 18px;"></i>
                </a>
                <a href="#" class="social-btn" aria-label="Facebook">
                    <i data-lucide="facebook" style="width: 18px; height: 18px;"></i>
                </a>
                <a href="#" class="social-btn" aria-label="Instagram">
                    <i data-lucide="instagram" style="width: 18px; height: 18px;"></i>
                </a>
                <a href="#" class="social-btn" aria-label="LinkedIn">
                    <i data-lucide="linkedin" style="width: 18px; height: 18px;"></i>
                </a>
            </div>
        </div>

    </div>
</footer>
