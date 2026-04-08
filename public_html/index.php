<?php
$page_title = "Helium Learn — IIT-JEE & NEET Online Coaching | Download App";
$page_description = "India's online-first coaching for IIT-JEE & NEET. Live classes, AI-powered doubt solving, weekly mentorship, and expert faculty — all in the Helium App.";
$page_keywords = "IIT-JEE coaching online, NEET coaching online, Helium Learn app, online coaching India";
$canonical = "https://heliumlearn.com/";
$current_page = "home";
require "header.php";
?>

<!-- ===== HERO ===== -->
<section class="hl-hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <span class="hero-badge"><i class="fa fa-bolt me-1"></i> Online-First EdTech Platform</span>
        <h1>Crack <span>IIT-JEE & NEET</span> with India's Best Faculty &amp; AI-Powered Technology</h1>
        <p class="hero-lead">Live classes, personalised doubt solving, AI behaviour analysis, and weekly 1:1 mentorship — all in one app. Study from anywhere in India.</p>
        <div class="hero-ctas">
          <a href="https://play.google.com/store/apps/details?id=com.helium.app"
             class="btn-hl-primary" target="_blank" rel="noopener"
             onclick="gtag('event','app_download_click',{source:'hero'})">
            <i class="fab fa-google-play"></i> Download Helium App
          </a>
          <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA"
             class="btn-hl-outline-white" target="_blank" rel="noopener"
             onclick="gtag('event','counselling_click',{source:'hero'})">
            <i class="fa fa-calendar"></i> Book Free Counselling
          </a>
        </div>
        <div class="hero-stats">
          <div class="hero-stat"><div class="num">50K+</div><div class="lbl">Students Learning</div></div>
          <div class="hero-stat"><div class="num">100+</div><div class="lbl">Expert Faculty</div></div>
          <div class="hero-stat"><div class="num">6</div><div class="lbl">Courses Offered</div></div>
          <div class="hero-stat"><div class="num">4.8★</div><div class="lbl">App Rating</div></div>
        </div>
      </div>
      <div class="col-lg-6 hero-img mt-4 mt-lg-0">
        <img src="/img/hero-img.png" alt="Helium Learn App — Online IIT-JEE NEET Coaching" loading="eager">
      </div>
    </div>
  </div>
</section>

<!-- ===== COURSE GRID ===== -->
<section class="hl-section hl-bg-light">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">What We Offer</span>
      <h2>Courses Built for <span>Every Stage</span></h2>
      <p>From foundation building in 9th grade to final-year exam preparation — we have a course designed for every aspirant.</p>
    </div>
    <div class="row g-4">

      <div class="col-lg-4 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-seedling"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>9th &amp; 10th Foundation</h3>
          <p>Build strong conceptual fundamentals in Physics, Chemistry, Mathematics, and Biology for future JEE/NEET success.</p>
          <a href="/courses/9th" class="cc-link">Explore 9th <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="course-card cc-found">
          <div class="cc-icon"><i class="fa fa-layer-group"></i></div>
          <div class="cc-tag">Foundation</div>
          <h3>11th &amp; 12th Foundation</h3>
          <p>Board exam excellence combined with JEE/NEET preparation. Structured curriculum with weekly mentorship and test series.</p>
          <a href="/courses/11th" class="cc-link">Explore 11th <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="course-card cc-jee">
          <div class="cc-icon"><i class="fa fa-flask"></i></div>
          <div class="cc-tag">Engineering</div>
          <h3>IIT-JEE (Main + Advanced)</h3>
          <p>Comprehensive preparation for JEE Main and Advanced with concept-first teaching, problem-solving sessions, and mock tests.</p>
          <a href="/courses/iit-jee" class="cc-link">Explore IIT-JEE <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="course-card cc-neet">
          <div class="cc-icon"><i class="fa fa-heartbeat"></i></div>
          <div class="cc-tag">Medical</div>
          <h3>NEET-UG</h3>
          <p>Complete NEET-UG preparation covering Biology, Physics, and Chemistry with NCERT-aligned notes, daily practice, and tests.</p>
          <a href="/courses/neet-ug" class="cc-link">Explore NEET-UG <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="course-card cc-jee">
          <div class="cc-icon"><i class="fa fa-mobile-alt"></i></div>
          <div class="cc-tag">All Courses</div>
          <h3>Learn on the Helium App</h3>
          <p>Access all courses, live classes, recorded sessions, and doubt-solving sessions anytime, anywhere from the Helium app.</p>
          <a href="/app" class="cc-link">View App Features <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6">
        <div class="course-card" style="border-color:var(--orange);background:linear-gradient(135deg,#fff8f0,#fff);">
          <div class="cc-icon" style="background:#fff3e0;color:var(--orange);"><i class="fa fa-map-marker-alt"></i></div>
          <div class="cc-tag" style="color:var(--orange);">Azamgarh Only</div>
          <h3>Hybrid Learning — Azamgarh</h3>
          <p>For students in Azamgarh, U.P., we offer a hybrid model combining online learning with an in-person support centre.</p>
          <a href="/azamgarh" class="cc-link" style="color:var(--orange);" onclick="gtag('event','branch_click',{branch:'azamgarh'})">Azamgarh Centre <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
    <div class="text-center mt-5">
      <a href="/courses" class="btn-hl-secondary">View All Courses <i class="fa fa-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<!-- ===== APP BENEFITS ===== -->
<section class="hl-section">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 text-center">
        <img src="/img/online-learning.png" alt="Helium Learn App Features" loading="lazy" style="max-height:420px;margin:0 auto;">
      </div>
      <div class="col-lg-7">
        <span class="section-badge">The Helium App</span>
        <h2 class="mb-4">Everything You Need to <span style="color:var(--primary);">Crack the Exam</span></h2>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-video"></i></div>
              <div><h4>Live Classes</h4><p>Daily live sessions with top faculty. Ask doubts in real-time.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-question-circle"></i></div>
              <div><h4>Doubt Solving</h4><p>Get doubt solutions within minutes from expert teachers.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-pencil-alt"></i></div>
              <div><h4>Daily Practice</h4><p>Topic-wise DPPs and chapter tests for consistent practice.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-brain"></i></div>
              <div><h4>AI Behaviour Analysis</h4><p>Smart insights on your study patterns and weak areas.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-user-friends"></i></div>
              <div><h4>Weekly Mentorship</h4><p>1:1 sessions with your mentor every week for guidance.</p></div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="ab-card">
              <div class="ab-icon"><i class="fa fa-chart-bar"></i></div>
              <div><h4>Test Series</h4><p>All-India mock tests with detailed performance analysis.</p></div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-primary" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'features-section'})">
            <i class="fab fa-google-play"></i> Download Free on Android
          </a>
          <a href="/app" class="btn-hl-secondary ms-2">Learn More <i class="fa fa-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== TRUST STATS ===== -->
<section class="hl-section-sm" style="background:var(--primary);color:#fff;">
  <div class="container">
    <div class="row g-4 text-center">
      <div class="col-6 col-md-3">
        <div class="trust-stat">
          <div class="ts-num" style="color:#fbbf24;">50K<span class="ts-unit" style="color:#fbbf24;">+</span></div>
          <p style="color:rgba(255,255,255,.8);">Active Students</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-stat">
          <div class="ts-num" style="color:#fbbf24;">100<span class="ts-unit" style="color:#fbbf24;">+</span></div>
          <p style="color:rgba(255,255,255,.8);">Expert Faculty</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-stat">
          <div class="ts-num" style="color:#fbbf24;">4.8<span class="ts-unit" style="color:#fbbf24;">★</span></div>
          <p style="color:rgba(255,255,255,.8);">App Store Rating</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-stat">
          <div class="ts-num" style="color:#fbbf24;">10K<span class="ts-unit" style="color:#fbbf24;">+</span></div>
          <p style="color:rgba(255,255,255,.8);">Practice Questions</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FACULTY TRUST ===== -->
<section class="hl-section hl-bg-light">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">Expert Faculty</span>
      <h2>Learn from India's <span>Top Educators</span></h2>
      <p>Our faculty are graduates of IITs, NITs, AIIMS, and other premier institutions with years of teaching experience.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="faculty-card">
          <div class="fc-avatar"><i class="fa fa-user-graduate"></i></div>
          <div class="fc-body">
            <h4>Physics Expert</h4>
            <div class="fc-subject">Physics — JEE &amp; NEET</div>
            <p>IIT-educated physicist with over 10 years of teaching experience in JEE &amp; NEET Physics.</p>
            <span class="fc-tag">IIT Graduate</span>
            <span class="fc-tag">10+ Years</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="faculty-card">
          <div class="fc-avatar"><i class="fa fa-user-graduate"></i></div>
          <div class="fc-body">
            <h4>Chemistry Expert</h4>
            <div class="fc-subject">Chemistry — JEE &amp; NEET</div>
            <p>Specialist in Organic, Inorganic, and Physical Chemistry with a research background.</p>
            <span class="fc-tag">NIT Graduate</span>
            <span class="fc-tag">8+ Years</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="faculty-card">
          <div class="fc-avatar"><i class="fa fa-user-graduate"></i></div>
          <div class="fc-body">
            <h4>Mathematics Expert</h4>
            <div class="fc-subject">Mathematics — JEE</div>
            <p>IIT alumnus specialising in Calculus, Algebra, and Advanced Mathematics for JEE preparation.</p>
            <span class="fc-tag">IIT Alumnus</span>
            <span class="fc-tag">12+ Years</span>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="faculty-card">
          <div class="fc-avatar"><i class="fa fa-user-graduate"></i></div>
          <div class="fc-body">
            <h4>Biology Expert</h4>
            <div class="fc-subject">Biology — NEET-UG</div>
            <p>AIIMS-qualified medical professional specialising in Botany and Zoology for NEET aspirants.</p>
            <span class="fc-tag">AIIMS</span>
            <span class="fc-tag">NEET Expert</span>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-5">
      <a href="/faculty" class="btn-hl-secondary" onclick="gtag('event','faculty_view')">Meet All Faculty <i class="fa fa-arrow-right ms-1"></i></a>
    </div>
  </div>
</section>

<!-- ===== CTA BANNER ===== -->
<section class="cta-banner">
  <div class="container">
    <h2>Start Your JEE / NEET Journey Today</h2>
    <p>Download the Helium App and get access to live classes, doubt solving, and mentorship — free to try.</p>
    <div class="cta-btns">
      <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-white" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'cta-banner'})">
        <i class="fab fa-google-play"></i> Download on Android
      </a>
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-outline-white" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'cta-banner'})">
        <i class="fa fa-calendar"></i> Book Free Counselling
      </a>
    </div>
  </div>
</section>

<?php require "footer.php"; ?>
