# Helium Learn Website

## Project Overview
A PHP-based marketing and informational website for **Helium Learn**, an educational coaching institute in India (Gorakhpur and Azamgarh) that specializes in IIT-JEE (Engineering) and NEET (Medical) entrance exam preparation.

## Tech Stack
- **Backend:** PHP 8.2 (built-in development server)
- **Frontend:** HTML5, CSS3, Bootstrap 5, jQuery 3, Font Awesome 6, IcoFont
- **Libraries:** Owl Carousel, SlickNav, Magnific Popup, Animate.css, Swiper
- **No build system** — static PHP site with assets served directly

## Project Structure
```
public_html/         # Web root
├── index.php        # Homepage
├── about.php        # About Us page
├── contact-us.php   # Contact Us page
├── faq.php          # FAQ page
├── header.php       # Shared header template
├── footer.php       # Shared footer template
├── style.css        # Main stylesheet
├── css/             # Third-party CSS files
├── js/              # Third-party and custom JS files
├── img/             # Image assets
└── fonts/           # Web font files (Font Awesome, IcoFont)
```

## Running the App
The app is served via PHP's built-in server:
```
php -S 0.0.0.0:5000 -t public_html
```

## Workflow
- **Start application** — Runs the PHP built-in server on port 5000 (webview)

## Deployment
- Target: **autoscale**
- Run command: `php -S 0.0.0.0:5000 -t public_html`

## Known Fixes Applied
- Added all missing JS plugins to `footer.php` (easing, wow, scrollUp, magnific-popup, counterup, niceselect, steller, gmaps)
- Added `owl-carousel.js` and `owl-carousel.css` which were missing but referenced by `main.js`
- Removed `window.onload` auto-popup that was incorrectly showing the Register form on every page
- Added null guards in `footer.php` for page-specific elements (carouselTrack, register-form2, enquiry-form, countdown, Swiper)
- Added `#map` null check in `main.js` to prevent GMaps crash on pages without a map element
- Fixed unclosed `<div class="container-fluid">` in `contact-us.php`
