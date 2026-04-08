<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($page_title ?? 'Helium Learn — IIT-JEE & NEET Online Coaching') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Helium Learn offers AI-powered online coaching for IIT-JEE & NEET with expert faculty, live classes, and weekly mentorship.') ?>">
  <?php if (!empty($page_keywords)): ?>
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>">
  <?php endif; ?>
  <?php if (!empty($canonical)): ?>
  <link rel="canonical" href="<?= htmlspecialchars($canonical) ?>">
  <?php endif; ?>
  <meta property="og:title" content="<?= htmlspecialchars($page_title ?? 'Helium Learn') ?>">
  <meta property="og:description" content="<?= htmlspecialchars($page_description ?? 'AI-powered IIT-JEE & NEET coaching.') ?>">
  <meta property="og:image" content="https://heliumlearn.com/img/logo.png">
  <meta property="og:type" content="website">
  <link rel="icon" href="/img/logo.png" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="/css/helium.css">
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DSCWVTSYJW"></script>
  <script>window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}gtag('js',new Date());gtag('config','G-DSCWVTSYJW');</script>
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"EducationalOrganization","name":"Helium Learn","url":"https://heliumlearn.com","logo":"https://heliumlearn.com/img/logo.png","description":"AI-powered online coaching for IIT-JEE and NEET","contactPoint":{"@type":"ContactPoint","telephone":"+91-9889763777","contactType":"Admissions"},"sameAs":["https://play.google.com/store/apps/details?id=com.helium.app"]}</script>
  <?php if (!empty($page_schema)) echo $page_schema; ?>
</head>
<body>

<div class="sticky-float-icons d-md-none">
  <a href="tel:+919889763777" class="sfi-phone" aria-label="Call Helium Learn"><i class="fa fa-phone"></i></a>
  <a href="https://wa.me/+919889763777" class="sfi-wa" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
</div>

<header class="hl-header">
  <div class="container-fluid px-3 px-lg-5">
    <nav class="navbar navbar-expand-lg py-2">
      <a class="navbar-brand hl-logo" href="/"><img src="/img/logo.png" alt="Helium Learn" loading="eager"></a>
      <div class="d-flex align-items-center gap-2 d-lg-none ms-auto me-2">
        <a href="tel:+919889763777" style="width:34px;height:34px;border-radius:50%;background:#eff6ff;color:#1a76d1;display:flex;align-items:center;justify-content:center;font-size:14px;" title="Call Us"><i class="fa fa-phone"></i></a>
        <a href="https://wa.me/+919889763777" style="width:34px;height:34px;border-radius:50%;background:#dcfce7;color:#16a34a;display:flex;align-items:center;justify-content:center;font-size:14px;" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      </div>
      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#hlMainNav" aria-label="Toggle menu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="hlMainNav">
        <ul class="navbar-nav mx-auto hl-nav gap-1">
          <li class="nav-item">
            <a class="nav-link <?= ($current_page??'')==='home'?'active-nav':'' ?>" href="/">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($current_page??'')==='courses'?'active-nav':'' ?>" href="/courses" role="button" data-bs-toggle="dropdown">Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/courses/9th" onclick="gtag('event','course_view',{course:'9th'})"><i class="fa fa-book text-success me-2"></i>9th Foundation</a></li>
              <li><a class="dropdown-item" href="/courses/10th" onclick="gtag('event','course_view',{course:'10th'})"><i class="fa fa-book text-success me-2"></i>10th Foundation</a></li>
              <li><a class="dropdown-item" href="/courses/11th" onclick="gtag('event','course_view',{course:'11th'})"><i class="fa fa-book text-info me-2"></i>11th Foundation</a></li>
              <li><a class="dropdown-item" href="/courses/12th" onclick="gtag('event','course_view',{course:'12th'})"><i class="fa fa-book text-info me-2"></i>12th Foundation</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="/courses/iit-jee" onclick="gtag('event','course_view',{course:'iit-jee'})"><i class="fa fa-flask text-primary me-2"></i>IIT-JEE</a></li>
              <li><a class="dropdown-item" href="/courses/neet-ug" onclick="gtag('event','course_view',{course:'neet-ug'})"><i class="fa fa-heartbeat text-danger me-2"></i>NEET-UG</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page??'')==='faculty'?'active-nav':'' ?>" href="/faculty" onclick="gtag('event','faculty_view')">Faculty</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page??'')==='app'?'active-nav':'' ?>" href="/app">App</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= ($current_page??'')==='contact'?'active-nav':'' ?>" href="/contact">Contact</a>
          </li>
        </ul>
        <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
          <div class="hl-header-icons d-none d-lg-flex gap-2">
            <a href="tel:+919889763777" class="icon-phone" title="Call: +91 9889763777"><i class="fa fa-phone"></i></a>
            <a href="https://wa.me/+919889763777" class="icon-wa" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
          </div>
          <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="nav-link btn-header-app ms-1" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'header'})">
            <i class="fab fa-google-play me-1"></i> Download App
          </a>
        </div>
      </div>
    </nav>
  </div>
</header>
