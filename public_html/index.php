<?php
$page_title = "Helium Learn — IIT-JEE & NEET Online Coaching App";
$page_description = "India's online-first coaching for IIT-JEE & NEET. Live classes, AI-powered doubt solving, weekly mentorship, and expert faculty — all in the Helium App.";
$page_keywords = "IIT-JEE coaching online, NEET coaching online, Helium Learn app, online coaching India, best JEE NEET app";
$canonical = "https://heliumlearn.com/";
$current_page = "home";
$preload_hero = "/img/hero-img.png";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "EducationalOrganization",
  "@id": "https://heliumlearn.com/#homepageorg",
  "name": "Helium Learn",
  "url": "https://heliumlearn.com",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "10000",
    "bestRating": "5",
    "worstRating": "1"
  }
}
</script>';
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
          <div class="hero-stat"><div class="num">10K+</div><div class="lbl">Students Learning</div></div>
          <div class="hero-stat"><div class="num">10+</div><div class="lbl">Expert Faculty</div></div>
          <div class="hero-stat"><div class="num">6+</div><div class="lbl">Courses Offered</div></div>
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
          <div class="ts-num" style="color:#fbbf24;">10K<span class="ts-unit" style="color:#fbbf24;">+</span></div>
          <p style="color:rgba(255,255,255,.8);">Active Students</p>
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="trust-stat">
          <div class="ts-num" style="color:#fbbf24;">10<span class="ts-unit" style="color:#fbbf24;">+</span></div>
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

<!-- ===== WHY HELIUM IS DIFFERENT ===== -->
<section class="why-section" aria-labelledby="why-heading">
  <div class="container" style="position:relative;z-index:1;">

    <div class="section-title">
      <span class="section-badge"><i class="fa fa-bolt me-1"></i> Why Helium Is Different</span>
      <h2 id="why-heading">Built for student growth — <span>not just syllabus completion</span></h2>
      <p>Most EdTech platforms sell content and classes. Helium solves the real problems behind low performance: weak strategy, no feedback, no personalization, no system.</p>
    </div>

    <!-- ── 1. Problem → Solution Cards ── -->
    <div class="ps-grid" role="list" aria-label="Student problems and Helium solutions">

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Students struggle because content is the same for everyone — no personalization based on how each student actually learns.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>Personalised Learning Content</h5>
            <p>Helium App adapts to each student's pace, gaps, and learning patterns — not a generic batch-style syllabus delivery.</p>
          </div>
        </div>
      </div>

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Students rarely get direct, honest feedback on where they are going wrong — only marks and ranks, not actionable insights.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>Weekly Mentorship &amp; Expert Feedback</h5>
            <p>Every student gets weekly 1:1 mentorship sessions with expert teachers who provide real, specific feedback on performance.</p>
          </div>
        </div>
      </div>

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Most students waste hours studying the wrong topics, repeating what they already know instead of targeting actual weak areas.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>AI Behaviour Analysis</h5>
            <p>Helium's AI tracks how you study, identifies your mistakes and weak patterns, and guides you to focus where it counts most.</p>
          </div>
        </div>
      </div>

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Without a structured plan, students jump between topics, lose consistency, and approach exams without a clear learning strategy.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>Structured Learning Strategy</h5>
            <p>Helium gives every student a clear, phased preparation roadmap — concept building, practice, revision, and mock testing in order.</p>
          </div>
        </div>
      </div>

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Students lose motivation when effort isn't recognised — no visible progress milestones, no sense of growing toward the goal.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>Progress Recognition &amp; Rewards</h5>
            <p>Helium tracks improvement milestones and celebrates progress, keeping students motivated through every stage of preparation.</p>
          </div>
        </div>
      </div>

      <div class="ps-card" role="listitem">
        <div class="ps-problem">
          <i class="fa fa-times-circle" aria-hidden="true"></i>
          <p>Students study hard but improve slowly because no one monitors whether their process — not just their marks — is actually improving.</p>
        </div>
        <div class="ps-solution">
          <i class="fa fa-check-circle" aria-hidden="true"></i>
          <div class="ps-solution-body">
            <h5>Monitored Improvement Process</h5>
            <p>Helium monitors the full learning process — accuracy, speed, consistency, and habits — so improvement is systematic, not accidental.</p>
          </div>
        </div>
      </div>

    </div><!-- .ps-grid -->

    <!-- ── 2. How Helium Works ── -->
    <div class="hw-flow" aria-label="How Helium works — 5-step process">
      <div class="section-title" style="margin-bottom:40px;">
        <span class="section-badge"><i class="fa fa-route me-1"></i> The Helium Process</span>
        <h3 style="color:#fff;font-size:26px;margin-bottom:10px;">How Helium turns effort into results</h3>
        <p style="color:rgba(255,255,255,.6);font-size:15px;">A 360° improvement system — not just content delivery</p>
      </div>
      <div class="hw-steps">

        <div class="hw-step">
          <div class="hw-step-icon" aria-hidden="true">
            <i class="fa fa-stethoscope"></i>
            <span class="hw-step-num">1</span>
          </div>
          <h4>Diagnose</h4>
          <p>AI Behaviour Analysis identifies your weak areas, study habits, and where you're losing marks.</p>
        </div>

        <div class="hw-step">
          <div class="hw-step-icon" aria-hidden="true">
            <i class="fa fa-sliders-h"></i>
            <span class="hw-step-num">2</span>
          </div>
          <h4>Personalise</h4>
          <p>Your mentor builds a personalised strategy — specific to your exam, gaps, and timeline.</p>
        </div>

        <div class="hw-step">
          <div class="hw-step-icon" aria-hidden="true">
            <i class="fa fa-pencil-alt"></i>
            <span class="hw-step-num">3</span>
          </div>
          <h4>Practice</h4>
          <p>Live classes, daily DPPs, and All-India mock tests to build speed, accuracy, and exam confidence.</p>
        </div>

        <div class="hw-step">
          <div class="hw-step-icon" aria-hidden="true">
            <i class="fa fa-chart-line"></i>
            <span class="hw-step-num">4</span>
          </div>
          <h4>Review</h4>
          <p>Detailed post-mock analysis with expert teachers pinpoints exactly what to fix next.</p>
        </div>

        <div class="hw-step">
          <div class="hw-step-icon" aria-hidden="true" style="background:linear-gradient(135deg,var(--primary),#0ea5e9);">
            <i class="fa fa-trophy"></i>
            <span class="hw-step-num">5</span>
          </div>
          <h4>Improve</h4>
          <p>Consistent feedback loops, mentorship, and tracked milestones drive measurable, visible progress.</p>
        </div>

      </div>
    </div><!-- .hw-flow -->

    <!-- ── 3. Comparison Table ── -->
    <div class="section-title" style="margin-bottom:28px;">
      <h3 style="color:#fff;font-size:24px;margin-bottom:8px;">Helium vs Traditional EdTech</h3>
      <p style="color:rgba(255,255,255,.55);font-size:14px;">Why content alone isn't enough to crack IIT-JEE or NEET-UG</p>
    </div>
    <div class="compare-wrap" role="table" aria-label="Comparison between traditional EdTech and Helium">
      <div class="compare-col-head cc-old" role="columnheader">
        <i class="fa fa-times me-2"></i> Traditional EdTech
      </div>
      <div class="compare-col-head cc-new" role="columnheader">
        <i class="fa fa-bolt"></i> Helium Learn
      </div>

      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> Syllabus completion is the only goal</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> 360° student improvement — process, habits, and outcomes</div>
      </div>
      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> Same content for every student</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> Personalised learning based on each student's actual gaps</div>
      </div>
      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> Feedback limited to test scores and ranks</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> Weekly 1:1 mentorship with specific, actionable feedback</div>
      </div>
      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> No visibility into how a student studies</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> AI Behaviour Analysis monitors patterns, mistakes, and habits</div>
      </div>
      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> No structured plan — student figures it out alone</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> A structured, mentor-guided learning strategy from day one</div>
      </div>
      <div class="compare-row" role="row">
        <div class="compare-cell cc-old" role="cell"><i class="fa fa-times-circle"></i> Progress is invisible until exam day</div>
        <div class="compare-cell cc-new" role="cell"><i class="fa fa-check-circle"></i> Tracked milestones and progress recognition throughout the journey</div>
      </div>
    </div><!-- .compare-wrap -->

    <!-- Bottom CTA -->
    <div class="why-cta">
      <a href="https://play.google.com/store/apps/details?id=com.helium.app"
         class="btn-hl-primary" target="_blank" rel="noopener"
         onclick="gtag('event','app_download_click',{source:'why-helium'})">
        <i class="fab fa-google-play"></i> Download Helium App — Free
      </a>
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA"
         class="btn-hl-outline-white" target="_blank" rel="noopener"
         onclick="gtag('event','counselling_click',{source:'why-helium'})">
        <i class="fa fa-calendar"></i> Book Free Counselling
      </a>
    </div>

  </div>
</section>

<!-- ===== TESTIMONIALS ===== -->
<section class="testimonials-section" aria-label="Student Success Stories">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">Student Success Stories</span>
      <h2>Real Results from <span>Real Helium Students</span></h2>
      <p>How Helium App Behaviour Analysis, expert faculty, structured content, and test series helped students improve and achieve their goals.</p>
    </div>

    <div class="testi-track-wrap">
      <div class="testi-track" id="testiTrack" role="list">

        <!-- Card 1: IIT-JEE AIR 695 -->
        <article class="testi-card" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-flask"></i> IIT-JEE 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student A">A</div>
            <div class="testi-meta">
              <h4 itemprop="author">Aryan Sharma</h4>
              <span>IIT-JEE · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 695</div>
            <div class="testi-result-label">IIT-JEE 2025<br>IIT Bombay Qualified</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Mujhe lagta tha sirf Kota jaake hi JEE crack hota hai. Helium App ne prove kar diya ki consistent effort + sahi guidance kaafi hai. Behaviour Analysis ne clear kar diya ki Physics mein specific chapters weak the — uspe focus kiya. AIR 695 aaya aur IIT qualify kar liya!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Expert Faculty</span>
            <span class="testi-chip">Test Series</span>
            <span class="testi-chip">Kota's Style Pedagogy</span>
          </div>
        </article>

        <!-- Card 2: IIT-JEE AIR 829 -->
        <article class="testi-card" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-flask"></i> IIT-JEE 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student R">R</div>
            <div class="testi-meta">
              <h4 itemprop="author">Rahul Maurya</h4>
              <span>IIT-JEE · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 829</div>
            <div class="testi-result-label">IIT-JEE 2025<br>IIT Qualified</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Weekly Mentorship sessions ne mujhe disciplined rakha. Mentor ne notice kiya ki main mock tests ke baad analyze nahi karta tha — directly next topic pe jump karta tha. Us ek habit ko fix karne ke baad score consistently improve hua. AIR 829 — honestly unexpected tha!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Weekly Mentorship</span>
            <span class="testi-chip">Test Series</span>
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Time Management</span>
          </div>
        </article>

        <!-- Card 3: IIT-JEE AIR 1021 -->
        <article class="testi-card" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-flask"></i> IIT-JEE 2024</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student P">P</div>
            <div class="testi-meta">
              <h4 itemprop="author">Priya Srivastava</h4>
              <span>IIT-JEE · Batch 2024</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 1021</div>
            <div class="testi-result-label">IIT-JEE 2024<br>IIT Qualified</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Helium ka test series bilkul actual JEE pattern pe tha. Har mock ke baad detailed analysis milti thi — weak topics, time management, accuracy sab dikhta tha. Ek saal mein JEE Mains rank 8000+ se 1021 aa gayi. Behaviour Insights ne game change kiya mere liye."
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">All India Test Series</span>
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Daily Practice</span>
            <span class="testi-chip">Learning Strategy</span>
          </div>
        </article>

        <!-- Card 4: NEET-UG AIR 791 -->
        <article class="testi-card tc-neet" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-heartbeat"></i> NEET-UG 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student S">S</div>
            <div class="testi-meta">
              <h4 itemprop="author">Sneha Patel</h4>
              <span>NEET-UG · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 791</div>
            <div class="testi-result-label">NEET-UG 2025<br>Govt. MBBS Secured</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Biology meri strong thi but Physics aur Chemistry mein confidence nahi tha. Helium ke expert faculty ne concept-first approach use kiya aur AI Analysis ne exact weak chapters identify kiye. NEET mein AIR 791 aaya — government MBBS college mein seat confirm ho gayi!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Expert Faculty</span>
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Structured Content</span>
            <span class="testi-chip">Doubt Solving</span>
          </div>
        </article>

        <!-- Card 5: NEET-UG AIR 1053 -->
        <article class="testi-card tc-neet" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-heartbeat"></i> NEET-UG 2024</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student M">M</div>
            <div class="testi-meta">
              <h4 itemprop="author">Mohit Singh</h4>
              <span>NEET-UG · Batch 2024</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 1053</div>
            <div class="testi-result-label">NEET-UG 2024<br>Govt. Medical Secured</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Ghar pe prepare karna mushkil lagta tha — distractions bahut the. Helium App ne structure diya: daily DPPs, live classes, weekly tests. Mentor se har hafte baat hoti thi jo accountability deta tha. NEET AIR 1053 aaya — government medical college secured!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Weekly Mentorship</span>
            <span class="testi-chip">Live Classes</span>
            <span class="testi-chip">Daily Practice</span>
            <span class="testi-chip">Learning Process</span>
          </div>
        </article>

        <!-- Card 6: NEET-UG AIR 1707 -->
        <article class="testi-card tc-neet" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-heartbeat"></i> NEET-UG 2024</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student A">A</div>
            <div class="testi-meta">
              <h4 itemprop="author">Ananya Rai</h4>
              <span>NEET-UG · Batch 2024</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">AIR 1707</div>
            <div class="testi-result-label">NEET-UG 2024<br>Medical Qualified</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Main repetition se zyada smart revision Helium se follow karti thi. Behaviour Analysis ne bataya ki main weak chapters ko avoid kar rahi thi instead of practicing them. 3 months mein strategy change ki aur NEET AIR 1707 aaya. Bahut khush hoon apne result se!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Test Series</span>
            <span class="testi-chip">Expert Faculty</span>
            <span class="testi-chip">Learning Strategy</span>
          </div>
        </article>

        <!-- Card 7: Class 10th 91% -->
        <article class="testi-card tc-board" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-graduation-cap"></i> Class 10th 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student K">K</div>
            <div class="testi-meta">
              <h4 itemprop="author">Kunal Tyagi</h4>
              <span>Class 10th · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">91%</div>
            <div class="testi-result-label">Class 10th Boards<br>All Subjects</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "10th boards ki preparation akele kaafi stressful thi. Helium ke live classes aur doubt solving ne bahut help kiya — koi bhi doubt 10 minutes mein solve ho jaata tha. Consistent practice aur DPPs ki wajah se 91% aaya. Parents aur main dono bahut khush the!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Live Classes</span>
            <span class="testi-chip">Doubt Solving</span>
            <span class="testi-chip">Daily Practice</span>
            <span class="testi-chip">Structured Content</span>
          </div>
        </article>

        <!-- Card 8: Class 10th 93% -->
        <article class="testi-card tc-board" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-graduation-cap"></i> Class 10th 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student D">D</div>
            <div class="testi-meta">
              <h4 itemprop="author">Divya Joshi</h4>
              <span>Class 10th · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">93%</div>
            <div class="testi-result-label">Class 10th Boards<br>All Subjects</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "School ke baad ek coaching aur ek app manage karna mushkil tha, so I chose Helium only. Structured content, chapter-wise tests, aur mentor support kaafi tha. 93% boards mein aaya — ab confidently 11th JEE foundation usi app pe prepare kar rahi hoon!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Weekly Mentorship</span>
            <span class="testi-chip">Test Series</span>
            <span class="testi-chip">Structured Content</span>
            <span class="testi-chip">Learning Process</span>
          </div>
        </article>

        <!-- Card 9: Class 12th 94% -->
        <article class="testi-card tc-board" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-graduation-cap"></i> Class 12th 2025</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student R">R</div>
            <div class="testi-meta">
              <h4 itemprop="author">Rohan Gupta</h4>
              <span>Class 12th · Batch 2025</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">94%</div>
            <div class="testi-result-label">Class 12th Boards<br>+ JEE Mains Qualified</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "12th boards aur JEE simultaneously prepare karna tha. Helium ka approach tha ki board aur JEE content overlap kare — same concept, different depth. Time save hua aur 94% boards mein aaye aur JEE Mains bhi qualify kiya. AI Behaviour Analysis ne weak areas clearly identify kiye."
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">Expert Faculty</span>
            <span class="testi-chip">All India Test Series</span>
            <span class="testi-chip">AI-Powered Perf. Copilot</span>
          </div>
        </article>

        <!-- Card 10: Class 12th 95% -->
        <article class="testi-card tc-board" role="listitem" itemscope itemtype="https://schema.org/Review">
          <span class="testi-verified"><i class="fa fa-check-circle"></i> Verified Result</span>
          <div class="testi-exam"><i class="fa fa-graduation-cap"></i> Class 12th 2024</div>
          <div class="testi-student">
            <div class="testi-avatar" aria-label="Student N">N</div>
            <div class="testi-meta">
              <h4 itemprop="author">Nishi Chaudhary</h4>
              <span>Class 12th · Batch 2024</span>
            </div>
          </div>
          <div class="testi-result">
            <div class="testi-result-num">95%</div>
            <div class="testi-result-label">Class 12th Boards<br>Top Scorer</div>
          </div>
          <blockquote class="testi-quote" itemprop="reviewBody">
            "Helium mein faculty IIT/NIT se hai aur padhate bahut clearly hain. Weekly mentorship se consistency aayi — sirf 6 months mein meri overall accuracy 55% se 82% ho gayi. 12th boards mein 95% aaya. Online coaching ke liye genuinely best platform hai — highly recommend!"
          </blockquote>
          <div class="testi-chips">
            <span class="testi-chip">Weekly Mentorship</span>
            <span class="testi-chip">Expert Faculty</span>
            <span class="testi-chip">Behaviour Analysis</span>
            <span class="testi-chip">AI-Powered Perf. Copilot</span>
          </div>
        </article>

      </div><!-- .testi-track -->
    </div><!-- .testi-track-wrap -->

    <!-- Navigation -->
    <div class="testi-nav" role="navigation" aria-label="Testimonial navigation">
      <button class="testi-btn" id="testiPrev" aria-label="Previous testimonial" disabled>
        <i class="fa fa-chevron-left"></i>
      </button>
      <div class="testi-dots" id="testiDots" role="tablist" aria-label="Testimonial pages"></div>
      <button class="testi-btn" id="testiNext" aria-label="Next testimonial">
        <i class="fa fa-chevron-right"></i>
      </button>
    </div>
  </div>
</section>

<script>
(function(){
  var track  = document.getElementById('testiTrack');
  var prev   = document.getElementById('testiPrev');
  var next   = document.getElementById('testiNext');
  var dotsEl = document.getElementById('testiDots');
  var cards  = Array.from(track.querySelectorAll('.testi-card'));
  var total  = cards.length;
  var current = 0;
  var autoTimer;

  function visibleCount() {
    var w = window.innerWidth;
    if (w >= 992) return 3;
    if (w >= 601) return 2;
    return 1;
  }

  function pageCount() {
    return Math.ceil(total / visibleCount());
  }

  function buildDots() {
    dotsEl.innerHTML = '';
    for (var i = 0; i < pageCount(); i++) {
      var d = document.createElement('button');
      d.className = 'testi-dot' + (i === 0 ? ' active' : '');
      d.setAttribute('role', 'tab');
      d.setAttribute('aria-label', 'Go to page ' + (i + 1));
      d.dataset.page = i;
      d.addEventListener('click', function(){ goTo(+this.dataset.page); });
      dotsEl.appendChild(d);
    }
  }

  function goTo(page) {
    var pages = pageCount();
    current = Math.max(0, Math.min(page, pages - 1));
    var idx = current * visibleCount();
    var card = cards[Math.min(idx, cards.length - 1)];
    track.scrollTo({ left: card.offsetLeft - track.offsetLeft, behavior: 'smooth' });
    Array.from(dotsEl.querySelectorAll('.testi-dot')).forEach(function(d, i){
      d.classList.toggle('active', i === current);
    });
    prev.disabled = current === 0;
    next.disabled = current >= pages - 1;
  }

  function startAuto() {
    autoTimer = setInterval(function(){
      goTo(current >= pageCount() - 1 ? 0 : current + 1);
    }, 5000);
  }

  function stopAuto() { clearInterval(autoTimer); }

  prev.addEventListener('click', function(){ stopAuto(); goTo(current - 1); startAuto(); });
  next.addEventListener('click', function(){ stopAuto(); goTo(current + 1); startAuto(); });
  track.addEventListener('mouseenter', stopAuto);
  track.addEventListener('mouseleave', startAuto);

  /* Sync dot on manual scroll */
  track.addEventListener('scroll', function(){
    if (!cards[0]) return;
    var vc = visibleCount();
    var scrolled = track.scrollLeft;
    var idx = Math.round(scrolled / (cards[0].offsetWidth + 24));
    var page = Math.floor(idx / vc);
    if (page !== current) {
      current = page;
      Array.from(dotsEl.querySelectorAll('.testi-dot')).forEach(function(d, i){
        d.classList.toggle('active', i === current);
      });
      prev.disabled = current === 0;
      next.disabled = current >= pageCount() - 1;
    }
  });

  window.addEventListener('resize', function(){ buildDots(); goTo(0); });

  buildDots();
  goTo(0);
  startAuto();
})();
</script>

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
