<?php
$page_title = "Helium Learn App — IIT-JEE & NEET on Android | Download Now";
$page_description = "Download the Helium Learn app on Android for live classes, AI doubt solving, weekly mentorship, practice tests, and behaviour analysis for IIT-JEE & NEET.";
$page_keywords = "Helium Learn app download, best IIT-JEE app, best NEET coaching app, online learning app India, JEE NEET preparation app";
$canonical = "https://heliumlearn.com/app";
$current_page = "app";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MobileApplication",
      "name": "Helium Learn",
      "applicationCategory": "EducationApplication",
      "operatingSystem": "ANDROID",
      "description": "AI-powered IIT-JEE and NEET coaching app with live classes, instant doubt solving, weekly mentorship, daily practice questions, and all-India mock tests.",
      "url": "https://play.google.com/store/apps/details?id=com.helium.app",
      "author": {"@type": "Organization", "name": "Helium Learn", "url": "https://heliumlearn.com"},
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.8",
        "reviewCount": "1000",
        "bestRating": "5",
        "worstRating": "1"
      },
      "offers": {
        "@type": "Offer",
        "price": "0",
        "priceCurrency": "INR",
        "availability": "https://schema.org/InStock"
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Helium App", "item": "https://heliumlearn.com/app"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>The Helium App</h1>
    <p>Your complete JEE &amp; NEET preparation toolkit — available on Android.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item active">App</li></ol></nav>
  </div>
</div>

<!-- App Hero -->
<section class="hl-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="section-badge">Now Available on Android</span>
        <h2 class="mb-4">One App for Your Entire <span style="color:var(--primary);">JEE &amp; NEET Preparation</span></h2>
        <p style="font-size:17px;margin-bottom:28px;">The Helium app brings together live classes, AI-powered doubt resolution, daily practice, and weekly mentorship in a single, intuitive platform. Study smarter, not just harder.</p>
        <ul class="feature-list mb-4">
          <li><i class="fa fa-check-circle"></i>Daily live classes with India's best faculty</li>
          <li><i class="fa fa-check-circle"></i>Instant doubt solving — answers within minutes</li>
          <li><i class="fa fa-check-circle"></i>Personalised study plans powered by AI</li>
          <li><i class="fa fa-check-circle"></i>Weekly 1:1 mentorship with your assigned mentor</li>
          <li><i class="fa fa-check-circle"></i>All-India test series and performance tracking</li>
          <li><i class="fa fa-check-circle"></i>Offline access to recorded sessions</li>
        </ul>
        <div class="d-flex flex-wrap gap-3">
          <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-primary" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'app-page-hero'})">
            <i class="fab fa-google-play"></i> Download Free on Android
          </a>
          <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-secondary" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'app-page'})">
            <i class="fa fa-calendar"></i> Book Free Counselling
          </a>
        </div>
        <p class="mt-3" style="font-size:13px;color:var(--text);">
          <i class="fa fa-star text-warning"></i> 4.8/5 rating &nbsp;·&nbsp;
          <i class="fa fa-download" style="color:var(--primary);"></i> 50,000+ downloads
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="/img/online-learning.png" alt="Helium Learn App Interface" loading="lazy" style="max-height:460px;margin:0 auto;">
      </div>
    </div>
  </div>
</section>

<!-- Features -->
<section class="hl-section hl-bg-light">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">App Features</span>
      <h2>Built for Serious <span>JEE &amp; NEET Aspirants</span></h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#fef3f2;color:var(--red);"><i class="fa fa-video"></i></div>
          <div><h4>Live Classes Daily</h4><p>Join interactive live sessions with faculty every day. Ask questions, get answers, and learn in a group setting.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon"><i class="fa fa-question-circle"></i></div>
          <div><h4>Instant Doubt Solving</h4><p>Submit your doubts via text or image and receive clear explanations from subject experts within minutes.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#f0fdf4;color:var(--green);"><i class="fa fa-brain"></i></div>
          <div><h4>AI Behaviour Analysis</h4><p>Our AI studies your learning patterns, identifies weak areas, and personalises your study schedule accordingly.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#fff3e0;color:var(--orange);"><i class="fa fa-user-friends"></i></div>
          <div><h4>Weekly 1:1 Mentorship</h4><p>Every student gets a dedicated mentor for weekly check-ins, goal setting, and personalised guidance.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon"><i class="fa fa-pencil-alt"></i></div>
          <div><h4>Daily Practice (DPP)</h4><p>Topic-wise Daily Practice Problems with difficulty levels, solutions, and performance tracking.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#fef3f2;color:var(--red);"><i class="fa fa-chart-bar"></i></div>
          <div><h4>All-India Mock Tests</h4><p>Full-length mock tests with real exam patterns. Compare your rank with students across India.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#f0fdf4;color:var(--green);"><i class="fa fa-download"></i></div>
          <div><h4>Offline Access</h4><p>Download lectures and study notes. Learn without interruption even without an internet connection.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon" style="background:#fff3e0;color:var(--orange);"><i class="fa fa-book"></i></div>
          <div><h4>Study Material</h4><p>Chapter-wise notes, NCERT solutions, formula sheets, and previous year question banks — all organised.</p></div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ab-card">
          <div class="ab-icon"><i class="fa fa-trophy"></i></div>
          <div><h4>Performance Dashboard</h4><p>Track your progress across subjects, chapters, and time periods with visual analytics.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Download CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Download the Helium App — It's Free</h2>
    <p>Join 50,000+ students already preparing smarter with Helium Learn. Available on Android.</p>
    <div class="cta-btns">
      <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-white" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'app-page-cta'})">
        <i class="fab fa-google-play me-2"></i>
        <span>
          <span style="display:block;font-size:11px;font-weight:400;">GET IT ON</span>
          <strong>Google Play</strong>
        </span>
      </a>
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-outline-white" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'app-page-cta'})">
        <i class="fa fa-calendar"></i> Book Free Counselling
      </a>
    </div>
  </div>
</section>

<?php require "footer.php"; ?>
