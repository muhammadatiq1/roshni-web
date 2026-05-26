# Roshni Care Home Website

Welcome to the official repository for the **Roshni Care Home** website! This is a premium, multi-page web platform designed to highlight the mission, programs, and impact of the Roshni NGO, providing a visually stunning and responsive experience for donors, volunteers, and visitors.

## Overview

The Roshni Care Home platform is built to showcase the critical work being done for individuals with visual impairments and multiple disabilities. The website utilizes a clean, component-based architecture for high maintainability, paired with a gorgeous, custom CSS design system featuring glassmorphism, dynamic grids, and smooth micro-animations.

### Key Pages
- **Home (`/`)**: The main landing experience with a cinematic hero, mission overview, and dynamic donation call-to-actions.
- **Our Story (`/about`)**: A deep dive into the history, mission, and vision of Roshni Care Home.
- **Programs (`/programs`)**: A detailed "zigzag" layout detailing the Specialized Academia, Emotional Resilience, and Tactile Independence programs.
- **Impact (`/impact`)**: Features real-world statistics, "Voices of Hope" testimonials, and a masonry gallery.
- **Gallery (`/gallery`)**: A premium CSS-column masonry gallery displaying high-quality imagery of the foundation's impact.
- **Contact (`/contact`)**: A split-screen interactive contact portal and volunteer/donation entry points.

## Technology Stack

- **Framework**: Laravel (PHP 8.2+)
- **Templating**: Blade Components
- **Styling**: Custom vanilla CSS using modern CSS variables, CSS Grid, Flexbox, and responsive clamps. No bloated CSS frameworks!
- **Icons**: Lucide Icons
- **Animations**: AOS (Animate On Scroll) library + native CSS transitions

## Design Philosophy

The website strictly follows a premium design aesthetic:
- **Color Palette**: Deep, trust-evoking greens (`#155D18`, `#0A1C0C`) paired with clean whites and soft grays (`#F7FAFC`).
- **Typography**: A bold, modern display font (`Outfit`) paired with a highly legible sans-serif for body text (`Inter`).
- **Motion**: Purposeful scroll-reveal animations and interactive hover states (e.g., image zooming, shadow elevations) that make the site feel tactile and alive without feeling overwhelming.

## Getting Started

To run this project locally, follow these steps:

### Prerequisites
- PHP >= 8.2
- Composer

### Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/muhammadatiq1/roshni-web.git
   cd roshni-web
   ```

2. **Install PHP Dependencies**
   ```bash
   composer install
   ```

3. **Environment Setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Serve the Application**
   ```bash
   php artisan serve
   ```
   The website will now be accessible at `http://localhost:8000`.

## Contribution

If you wish to contribute to the UI or backend logic:
1. Create a feature branch (`git checkout -b feature/amazing-feature`)
2. Commit your changes (`git commit -m 'Add some amazing feature'`)
3. Push to the branch (`git push origin feature/amazing-feature`)
4. Open a Pull Request

---
*Built with ❤️ for Roshni Care Home.*
