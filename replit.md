# Helium Learn Website

## Project Overview
A PHP-based marketing website for **Helium Learn**, an online-first EdTech platform offering IIT-JEE and NEET coaching across India, with a hybrid centre in Azamgarh, U.P.

## Business Direction
- **Online-first**: The entire platform is app-based. Hybrid learning is only offered in Azamgarh, U.P.
- **Primary CTA**: Download Helium App (Android / Google Play)
- **Secondary CTA**: Book Free Counselling

## Tech Stack
- **Backend:** PHP 8.2 (built-in server with router.php for clean URLs)
- **Frontend:** HTML5, Bootstrap 5.3, Poppins (Google Fonts), Font Awesome 6.5
- **No jQuery / legacy plugins** — modern Bootstrap JS only
- **Analytics:** Google Analytics (G-DSCWVTSYJW)
- **Router:** `public_html/router.php` (maps clean URLs to PHP files)

## Running the App
```
php -S 0.0.0.0:5000 -t public_html public_html/router.php
```

## Project Structure
```
public_html/
├── router.php           # URL router (clean URLs → PHP files)
├── header.php           # Shared header (nav, head, GA)
├── footer.php           # Shared footer (links, social, play store)
├── index.php            # Home
├── courses.php          # Courses hub
├── course-9th.php       # 9th Foundation
├── course-10th.php      # 10th Foundation
├── course-11th.php      # 11th Foundation
├── course-12th.php      # 12th Foundation
├── course-iit-jee.php   # IIT-JEE
├── course-neet-ug.php   # NEET-UG
├── faculty.php          # Faculty page
├── app.php              # App features + download
├── contact.php          # Contact + enquiry form
├── azamgarh.php         # Hybrid branch page (Azamgarh only)
├── faq-page.php         # FAQs (footer link only)
├── privacy-policy.php   # Privacy Policy
├── terms.php            # Terms of Use
├── inc/
│   └── course-template.php   # Shared template for 9th-12th pages
├── css/
│   └── helium.css       # New design system CSS
└── img/                 # All image assets
```

## URL Routing (via router.php)
| URL | File |
|-----|------|
| `/` | index.php |
| `/courses` | courses.php |
| `/courses/9th` | course-9th.php |
| `/courses/10th` | course-10th.php |
| `/courses/11th` | course-11th.php |
| `/courses/12th` | course-12th.php |
| `/courses/iit-jee` | course-iit-jee.php |
| `/courses/neet-ug` | course-neet-ug.php |
| `/faculty` | faculty.php |
| `/app` | app.php |
| `/contact` | contact.php |
| `/azamgarh` | azamgarh.php |
| `/privacy-policy` | privacy-policy.php |
| `/terms` | terms.php |
| `/faq` | faq-page.php |

## Navigation Rules (per build spec)
- **Header**: Home | Courses ▼ | Faculty | App | Contact | [Download App] + Phone icon + WhatsApp icon
- **Footer**: Courses | Faculty | App | Contact | Azamgarh | Blog | FAQs | Privacy | Terms
- **Removed from nav**: ASTEX, Shakti, FAQs, Blog (moved to footer only)

## Key Links (preserved)
- Phone: +91 9889763777
- WhatsApp: https://wa.me/+919889763777
- WhatsApp Channel: https://rb.gy/jlgzkq
- Counselling: https://calendar.app.google/shqrSfQdoPj4YaLVA
- Play Store: https://play.google.com/store/apps/details?id=com.helium.app
- Blog: https://blog.heliumlearn.com/

## Analytics Events Tracked
- `app_download_click` — source tagged per page/section
- `counselling_click` — counselling booking clicks
- `counselling_submit` — contact form submission
- `course_view` — course page clicks
- `faculty_view` — faculty page visits
- `branch_click` — Azamgarh centre clicks
- `whatsapp_click` — WhatsApp button clicks

## Workflow
- **Start application** — `php -S 0.0.0.0:5000 -t public_html public_html/router.php`
