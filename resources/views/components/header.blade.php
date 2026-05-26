<style>
    .site-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(16px);
        -webkit-backdrop-filter: blur(16px);
        z-index: 1000;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
    }

    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 1rem clamp(1.5rem, 5vw, 4rem);
        max-width: 1600px;
        margin: 0 auto;
    }
    
    .header-left {
        display: flex;
        align-items: center;
        gap: clamp(2rem, 5vw, 4rem);
    }

    .logo-link {
        display: inline-flex;
        align-items: center;
        text-decoration: none;
    }

    .logo-link img {
        height: 52px;
        width: auto;
        transition: transform 0.3s ease;
    }

    .logo-link:hover img {
        transform: scale(1.02);
    }

    .header-nav {
        display: none;
    }

    @media (min-width: 1024px) {
        .header-nav {
            display: flex;
        }
    }

    .header-nav-list {
        display: flex;
        align-items: center;
        gap: 2rem;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    .nav-link {
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        font-weight: 500;
        color: #4A5568;
        text-decoration: none;
        position: relative;
        padding: 0.5rem 0;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        transition: color 0.3s ease;
    }

    .nav-link i {
        width: 16px;
        height: 16px;
        color: #718096;
        transition: color 0.3s ease;
    }

    .nav-link::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0%;
        height: 2px;
        background-color: #155D18;
        transition: width 0.3s ease;
    }

    .nav-link:hover {
        color: #155D18;
    }

    .nav-link:hover i {
        color: #155D18;
    }

    .nav-link:hover::before {
        width: 100%;
    }

    .header-actions {
        display: flex;
        align-items: center;
        gap: 1.25rem;
    }

    .btn-volunteer {
        display: none;
        font-family: 'Inter', sans-serif;
        font-size: 0.95rem;
        font-weight: 600;
        color: #155D18;
        text-decoration: none;
        padding: 0.75rem 1.75rem;
        border: 2px solid rgba(21, 93, 24, 0.2);
        border-radius: 50px;
        transition: all 0.3s ease;
    }

    @media (min-width: 1200px) {
        .btn-volunteer { display: inline-flex; align-items: center; gap: 0.5rem; }
    }

    .btn-volunteer:hover {
        border-color: #155D18;
        background-color: rgba(21, 93, 24, 0.05);
    }

    .btn-donate {
        font-family: 'Inter', sans-serif;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem 2rem;
        background-color: #155D18;
        color: white;
        border-radius: 50px; 
        font-weight: 600;
        font-size: 0.95rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid #155D18;
        box-shadow: 0 4px 15px rgba(21, 93, 24, 0.2);
    }

    .btn-donate:hover {
        background-color: #0F4311;
        border-color: #0F4311;
        box-shadow: 0 6px 20px rgba(21, 93, 24, 0.3);
        transform: translateY(-2px);
    }

    .mobile-menu-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        background: transparent;
        border: none;
        color: #1A202C;
        cursor: pointer;
        padding: 0.5rem;
        transition: color 0.3s ease;
    }

    .mobile-menu-btn:hover {
        color: #155D18;
    }

    @media (min-width: 1024px) {
        .mobile-menu-btn {
            display: none;
        }
    }

    /* Mobile Menu Active State */
    @media (max-width: 1023px) {
        .header-nav.active {
            display: flex;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(10px);
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            border-top: 1px solid rgba(0,0,0,0.05);
            flex-direction: column;
        }
        
        .header-nav.active .header-nav-list {
            flex-direction: column;
            align-items: flex-start;
            gap: 1.5rem;
            width: 100%;
        }

        .header-nav.active .nav-link {
            width: 100%;
            font-size: 1.1rem;
            padding: 0.5rem 0;
        }
    }
</style>

<header class="site-header">
    <div class="header-container">
        
        <div class="header-left">
            <!-- Brand Logo -->
            <a href="/" class="logo-link">
                <img src="/logo.png" alt="Roshni Care Home">
            </a>
            
            <!-- Desktop Nav -->
            <nav class="header-nav" id="main-nav">
                <ul class="header-nav-list">
                    <li>
                        <a href="/" class="nav-link">
                            <i data-lucide="home"></i> Home
                        </a>
                    </li>
                    <li>
                        <a href="/about" class="nav-link">
                            <i data-lucide="book-open"></i> Our Story
                        </a>
                    </li>
                    <li>
                        <a href="/programs" class="nav-link">
                            <i data-lucide="heart-handshake"></i> Programs
                        </a>
                    </li>
                    <li>
                        <a href="/impact" class="nav-link">
                            <i data-lucide="globe"></i> Impact
                        </a>
                    </li>
                    <li>
                        <a href="/gallery" class="nav-link">
                            <i data-lucide="image"></i> Gallery
                        </a>
                    </li>
                    <li>
                        <a href="/contact" class="nav-link">
                            <i data-lucide="mail"></i> Contact
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!-- Actions -->
        <div class="header-actions">
            <a href="/contact" class="btn-volunteer">
                <i data-lucide="users" style="width: 18px; height: 18px;"></i> Volunteer
            </a>
            <a href="/contact" class="btn-donate">
                <i data-lucide="heart" style="width: 18px; height: 18px;"></i> Donate Now
            </a>
            
            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn" aria-label="Toggle Menu" onclick="document.getElementById('main-nav').classList.toggle('active')">
                <i data-lucide="menu" style="width: 28px; height: 28px;"></i>
            </button>
        </div>
        
    </div>
</header>
