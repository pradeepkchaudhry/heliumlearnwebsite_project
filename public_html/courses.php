<?php
$page_title = "All Courses — IIT-JEE, NEET, Foundation | Helium Learn";
$page_description = "Explore Helium Learn's online courses for IIT-JEE, NEET-UG, and school foundation (9th–12th). Expert faculty, live classes, and AI-powered mentorship.";
$page_keywords = "IIT-JEE course online, NEET course online, 11th 12th coaching, 9th 10th foundation course";
$canonical = "https://heliumlearn.com/courses";
$current_page = "courses";
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>Our Courses</h1>
    <p>Online-first coaching built for every stage of your preparation journey.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item active">Courses</li></ol></nav>
  </div>
</div>

<!-- Foundation -->
<section class="hl-section hl-bg-light">
  <div class="container">
    <div class="section-title">
      <span class="section-badge section-badge-green">Foundation</span>
      <h2>School Foundation Courses</h2>
      <p>Build the right fundamentals from 9th grade onwards to crack JEE & NEET in the future.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-seedling"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>9th Foundation</h3>
          <p>Conceptual clarity in Maths & Science aligned with board curriculum and JEE/NEET foundation.</p>
          <a href="/courses/9th" class="cc-link" onclick="gtag('event','course_view',{course:'9th'})">View Course <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-book-open"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>10th Foundation</h3>
          <p>Board mastery + competitive exam foundation. Scored tests, live doubt sessions, and mentorship.</p>
          <a href="/courses/10th" class="cc-link" onclick="gtag('event','course_view',{course:'10th'})">View Course <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-layer-group"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>11th Foundation</h3>
          <p>Start your JEE/NEET preparation in 11th with strong concept building and structured study plans.</p>
          <a href="/courses/11th" class="cc-link" onclick="gtag('event','course_view',{course:'11th'})">View Course <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-graduation-cap"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>12th Foundation</h3>
          <p>Board + JEE/NEET dual preparation with revision plans, mock tests, and intensive doubt clearing.</p>
          <a href="/courses/12th" class="cc-link" onclick="gtag('event','course_view',{course:'12th'})">View Course <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Competitive -->
<section class="hl-section">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">Competitive Exams</span>
      <h2>IIT-JEE &amp; NEET-UG Preparation</h2>
      <p>Dedicated courses for serious aspirants targeting India's top engineering and medical colleges.</p>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-lg-5 col-md-6">
        <div class="course-card cc-jee" style="padding:32px;">
          <div class="d-flex align-items-center gap-3 mb-4">
            <div class="cc-icon mb-0"><i class="fa fa-flask"></i></div>
            <div><div class="cc-tag">Engineering</div><h3 class="mb-0">IIT-JEE (Main + Advanced)</h3></div>
          </div>
          <ul class="feature-list mb-4">
            <li><i class="fa fa-check-circle"></i>Concept-first teaching by IIT-educated faculty</li>
            <li><i class="fa fa-check-circle"></i>JEE Main + Advanced full syllabus coverage</li>
            <li><i class="fa fa-check-circle"></i>Daily practice problems (DPPs) and chapter tests</li>
            <li><i class="fa fa-check-circle"></i>All-India mock test series with analysis</li>
            <li><i class="fa fa-check-circle"></i>Weekly 1:1 mentorship sessions</li>
          </ul>
          <a href="/courses/iit-jee" class="btn-hl-primary" onclick="gtag('event','course_view',{course:'iit-jee'})">
            Explore IIT-JEE <i class="fa fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-5 col-md-6">
        <div class="course-card cc-neet" style="padding:32px;">
          <div class="d-flex align-items-center gap-3 mb-4">
            <div class="cc-icon mb-0"><i class="fa fa-heartbeat"></i></div>
            <div><div class="cc-tag">Medical</div><h3 class="mb-0">NEET-UG</h3></div>
          </div>
          <ul class="feature-list mb-4">
            <li><i class="fa fa-check-circle"></i>NCERT-aligned Biology, Physics & Chemistry</li>
            <li><i class="fa fa-check-circle"></i>Daily Biology practice and revision plans</li>
            <li><i class="fa fa-check-circle"></i>Previous year paper analysis and solving</li>
            <li><i class="fa fa-check-circle"></i>Live doubt-solving with medical experts</li>
            <li><i class="fa fa-check-circle"></i>AI-powered weak area identification</li>
          </ul>
          <a href="/courses/neet-ug" class="btn-hl-primary" style="background:var(--red);" onclick="gtag('event','course_view',{course:'neet-ug'})">
            Explore NEET-UG <i class="fa fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="container">
    <h2>Not Sure Which Course to Choose?</h2>
    <p>Talk to our counsellors — we'll help you pick the right path based on your goal and current level.</p>
    <div class="cta-btns">
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-white" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'courses-page'})">
        <i class="fa fa-calendar"></i> Book Free Counselling
      </a>
      <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-outline-white" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'courses-page'})">
        <i class="fab fa-google-play"></i> Download App
      </a>
    </div>
  </div>
</section>

<?php require "footer.php"; ?>
