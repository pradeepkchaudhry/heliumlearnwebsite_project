<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?= htmlspecialchars($page_title ?? 'Helium Learn — IIT-JEE & NEET Online Coaching') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Helium Learn offers AI-powered online coaching for IIT-JEE & NEET with expert faculty, live classes, and weekly mentorship.') ?>">
  <?php if (!empty($page_keywords)): ?>
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <?php endif; ?>
  <?php if (!empty($canonical)): ?>
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <?php endif; ?>
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="author" content="Helium Learn">

  <!-- Open Graph -->
  <meta property="og:type" content="<?= htmlspecialchars($og_type ?? 'website') ?>">
  <meta property="og:site_name" content="Helium Learn">
  <meta property="og:title" content="<?= htmlspecialchars($page_title ?? 'Helium Learn') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description ?? 'AI-powered IIT-JEE & NEET coaching.') ?>">
  <meta property="og:url" content="<?= htmlspecialchars($canonical ?? 'https://heliumlearn.com/') ?>">
  <meta property="og:image" content="https://heliumlearn.com/img/hero-img.png">
  <meta property="og:image:width" content="800">
  <meta property="og:image:height" content="600">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter / X Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@heliumlearn">
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title ?? 'Helium Learn') ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description ?? 'AI-powered IIT-JEE & NEET coaching.') ?>">
  <meta name="twitter:image" content="https://heliumlearn.com/img/hero-img.png">

  <!-- Favicon -->
  <link rel="icon" href="/img/logo.png" type="image/png">
  <link rel="apple-touch-icon" href="/img/logo.png">

  <!-- Resource hints -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdn.jsdelivr.net">
  <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">
  <?php if (!empty($preload_hero)): ?>
  <link rel="preload" as="image" href="<?= htmlspecialchars($preload_hero) ?>">
  <?php endif; ?>

  <!-- Fonts: display=swap prevents render blocking -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" media="print" onload="this.media='all'">
  <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"></noscript>
  <link rel="stylesheet" href="/css/helium.css">

  <!-- Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DSCWVTSYJW"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-DSCWVTSYJW');</script>

  <!-- Schema: Organization + WebSite (sitewide) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "EducationalOrganization",
        "@id": "https://heliumlearn.com/#organization",
        "name": "Helium Learn",
        "alternateName": "Helium Edu Research Pvt. Ltd.",
        "url": "https://heliumlearn.com",
        "logo": {
          "@type": "ImageObject",
          "url": "https://heliumlearn.com/img/logo.png",
          "width": 200,
          "height": 60
        },
        "description": "India's online-first EdTech platform offering AI-powered coaching for IIT-JEE, NEET-UG, and school foundation (Class 9–12) with expert faculty, live classes, and weekly mentorship.",
        "foundingDate": "2023",
        "areaServed": {
          "@type": "Country",
          "name": "India"
        },
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Azamgarh",
          "addressRegion": "Uttar Pradesh",
          "addressCountry": "IN"
        },
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "telephone": "+91-9889763777",
            "contactType": "admissions",
            "areaServed": "IN",
            "availableLanguage": ["English", "Hindi"]
          }
        ],
        "sameAs": [
          "https://play.google.com/store/apps/details?id=com.helium.app",
          "https://wa.me/+919889763777",
          "https://blog.heliumlearn.com"
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Helium Learn Courses",
          "itemListElement": [
            {"@type": "Offer", "itemOffered": {"@type": "Course", "name": "IIT-JEE Main + Advanced", "url": "https://heliumlearn.com/courses/iit-jee"}},
            {"@type": "Offer", "itemOffered": {"@type": "Course", "name": "NEET-UG Preparation", "url": "https://heliumlearn.com/courses/neet-ug"}},
            {"@type": "Offer", "itemOffered": {"@type": "Course", "name": "Class 11 Foundation", "url": "https://heliumlearn.com/courses/11th"}},
            {"@type": "Offer", "itemOffered": {"@type": "Course", "name": "Class 12 Foundation", "url": "https://heliumlearn.com/courses/12th"}}
          ]
        }
      },
      {
        "@type": "WebSite",
        "@id": "https://heliumlearn.com/#website",
        "name": "Helium Learn",
        "url": "https://heliumlearn.com",
        "publisher": {"@id": "https://heliumlearn.com/#organization"},
        "potentialAction": {
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://heliumlearn.com/courses?q={search_term_string}"
          },
          "query-input": "required name=search_term_string"
        }
      }
    ]
  }
  </script>

  <!-- Per-page schema injected by each page -->
  <?php if (!empty($page_schema)) echo $page_schema; ?>
</head>
<body>

<div class="sticky-float-icons d-md-none">
  <a href="tel:+919889763777" class="sfi-phone" aria-label="Call Helium Learn"><i class="fa fa-phone"></i></a>
  <a href="https://wa.me/+919889763777" class="sfi-wa" aria-label="WhatsApp Helium Learn"><i class="fab fa-whatsapp"></i></a>
</div>

<header class="hl-header" role="banner">
  <div class="container-fluid px-3 px-lg-5">
    <nav class="navbar navbar-expand-lg py-2" aria-label="Main navigation">
      <a class="navbar-brand hl-logo" href="/" aria-label="Helium Learn — Home">
        <img src="/img/logo.png" alt="Helium Learn — IIT-JEE NEET Online Coaching" loading="eager" width="120" height="40">
      </a>
      <div class="d-flex align-items-center gap-2 d-lg-none ms-auto me-2">
        <a href="tel:+919889763777" style="width:34px;height:34px;border-radius:50%;background:#eff6ff;color:#1a76d1;display:flex;align-items:center;justify-content:center;font-size:14px;" title="Call Helium Learn" aria-label="Call us"><i class="fa fa-phone" aria-hidden="true"></i></a>
        <a href="https://wa.me/+919889763777" style="width:34px;height:34px;border-radius:50%;background:#dcfce7;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:14px;" title="WhatsApp Helium Learn" aria-label="WhatsApp us"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
      </div>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#hlMainNav" aria-controls="hlMainNav" aria-expanded="false" aria-label="Toggle navigation menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="hlMainNav">
        <ul class="navbar-nav mx-auto hl-nav gap-1" role="menubar">
          <li class="nav-item" role="none">
            <a class="nav-link <?= ($current_page??'')==='home'?'active-nav':'' ?>" href="/" role="menuitem">Home</a>
          </li>
          <li class="nav-item dropdown" role="none">
            <a class="nav-link dropdown-toggle <?= ($current_page??'')==='courses'?'active-nav':'' ?>" href="/courses" role="menuitem" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Courses</a>
            <ul class="dropdown-menu" role="menu">
              <li role="none"><a class="dropdown-item" href="/courses/9th" role="menuitem" onclick="gtag('event','course_view',{course:'9th'})"><i class="fa fa-book text-success me-2" aria-hidden="true"></i>9th Foundation</a></li>
              <li role="none"><a class="dropdown-item" href="/courses/10th" role="menuitem" onclick="gtag('event','course_view',{course:'10th'})"><i class="fa fa-book text-success me-2" aria-hidden="true"></i>10th Foundation</a></li>
              <li role="none"><a class="dropdown-item" href="/courses/11th" role="menuitem" onclick="gtag('event','course_view',{course:'11th'})"><i class="fa fa-book text-info me-2" aria-hidden="true"></i>11th Foundation</a></li>
              <li role="none"><a class="dropdown-item" href="/courses/12th" role="menuitem" onclick="gtag('event','course_view',{course:'12th'})"><i class="fa fa-book text-info me-2" aria-hidden="true"></i>12th Foundation</a></li>
              <li role="none"><hr class="dropdown-divider"></li>
              <li role="none"><a class="dropdown-item" href="/courses/iit-jee" role="menuitem" onclick="gtag('event','course_view',{course:'iit-jee'})"><i class="fa fa-flask text-primary me-2" aria-hidden="true"></i>IIT-JEE Coaching</a></li>
              <li role="none"><a class="dropdown-item" href="/courses/neet-ug" role="menuitem" onclick="gtag('event','course_view',{course:'neet-ug'})"><i class="fa fa-heartbeat text-danger me-2" aria-hidden="true"></i>NEET-UG Coaching</a></li>
            </ul>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link <?= ($current_page??'')==='faculty'?'active-nav':'' ?>" href="/faculty" role="menuitem" onclick="gtag('event','faculty_view')">Faculty</a>
          </li>
          <li class="nav-item" role="none">
            <a class="nav-link <?= ($current_page??'')==='contact'?'active-nav':'' ?>" href="/contact" role="menuitem">Contact</a>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
          <div class="hl-header-icons d-none d-lg-flex gap-2">
            <a href="tel:+919889763777" class="icon-phone" title="Call: +91 9889763777" aria-label="Call us at +91 9889763777"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="https://wa.me/+919889763777" class="icon-wa" title="WhatsApp Helium Learn" aria-label="WhatsApp us"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
          </div>
          <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="nav-link btn-header-app ms-1" target="_blank" rel="noopener" aria-label="Download Helium App on Google Play" onclick="gtag('event','app_download_click',{source:'header'})">
            <i class="fab fa-google-play me-1" aria-hidden="true"></i> Download App
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>
