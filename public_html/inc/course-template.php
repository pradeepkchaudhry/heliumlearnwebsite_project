<?php
// Shared template for 9th/10th/11th/12th foundation pages
// Determine course-specific content based on the current file
$file = basename($_SERVER['SCRIPT_FILENAME'] ?? '');
$is9 = str_contains($file, '9th');
$is10 = str_contains($file, '10th');
$is11 = str_contains($file, '11th');
$is12 = str_contains($file, '12th');

if ($is9) {
    $course_num = "9th";
    $subjects = ["Mathematics" => "Number Systems, Algebra, Geometry, Statistics — board-aligned with JEE/NEET foundation", "Science" => "Physics, Chemistry, Biology — NCERT with concept-depth for competitive exams"];
    $who_for = ["Class 9 students wanting a head start on JEE/NEET", "Students keen on building unshakeable Maths & Science fundamentals", "Parents who want structured, guided preparation from an early stage"];
} elseif ($is10) {
    $course_num = "10th";
    $subjects = ["Mathematics" => "Algebra, Coordinate Geometry, Trigonometry, Statistics — board + JEE/NEET foundation", "Science" => "Physics, Chemistry, Biology — deep NCERT with competitive exam focus"];
    $who_for = ["Class 10 students targeting top board scores", "Students who want to build JEE/NEET foundations alongside boards", "Students aiming to enter a structured 11th coaching programme"];
} elseif ($is11) {
    $course_num = "11th";
    $subjects = ["Physics" => "Mechanics, Thermodynamics, Waves — full Class 11 + competitive syllabus", "Chemistry" => "Atomic Structure, Chemical Bonding, Organic Introduction, Equilibrium", "Mathematics/Biology" => "Depending on your stream — JEE Maths or NEET Biology from Class 11"];
    $who_for = ["Class 11 students who want to start JEE/NEET preparation on the right foot", "Students transitioning from 10th who want structured coaching from Day 1", "Those who want board + competitive preparation in one integrated programme"];
} else {
    $course_num = "12th";
    $subjects = ["Physics" => "Full Class 12 Physics — Electrostatics, Magnetism, Optics, Modern Physics", "Chemistry" => "Electrochemistry, Coordination Compounds, Polymers, Biomolecules", "Mathematics/Biology" => "Calculus, 3D Geometry for JEE — Genetics, Ecology, Reproduction for NEET"];
    $who_for = ["Class 12 students targeting board exams + JEE Main or NEET-UG", "Students who need intensive revision and mock test practice", "Those who want a structured study plan to balance boards and competitive exams"];
}
?>

<!-- Course Overview -->
<section class="hl-section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8">
        <span class="section-badge section-badge-green">Class <?= $course_num ?></span>
        <h2 class="mb-4">What You'll Learn in the <span style="color:var(--primary);"><?= $course_num ?> Foundation Programme</span></h2>
        <p style="font-size:16px;margin-bottom:28px;">Our <?= $course_num ?> Foundation programme is built to develop conceptual clarity, exam temperament, and consistent study habits. Every topic is taught to be understood — not memorised.</p>

        <h4 class="mb-3">Subjects Covered</h4>
        <div class="row g-3 mb-4">
          <?php $colors = ['ico-blue','ico-green','ico-orange']; $i = 0; ?>
          <?php foreach ($subjects as $subject => $desc): ?>
          <div class="col-md-6">
            <div class="contact-card" style="padding:18px;text-align:left;">
              <div class="cc-ico <?= $colors[$i % 3] ?>" style="width:36px;height:36px;font-size:16px;margin:0 0 10px 0;"><i class="fa fa-book"></i></div>
              <strong><?= htmlspecialchars($subject) ?></strong>
              <p style="font-size:13px;margin-top:6px;"><?= htmlspecialchars($desc) ?></p>
            </div>
          </div>
          <?php $i++; endforeach; ?>
        </div>

        <h4 class="mb-3">Course Highlights</h4>
        <ul class="feature-list mb-4">
          <li><i class="fa fa-check-circle"></i>Daily live classes with expert faculty</li>
          <li><i class="fa fa-check-circle"></i>Chapter-wise tests and topic-level practice questions</li>
          <li><i class="fa fa-check-circle"></i>AI-powered study plan personalised to your level</li>
          <li><i class="fa fa-check-circle"></i>Weekly 1:1 mentorship sessions</li>
          <li><i class="fa fa-check-circle"></i>Instant doubt solving via the Helium App</li>
          <li><i class="fa fa-check-circle"></i>Recorded lectures available offline anytime</li>
          <li><i class="fa fa-check-circle"></i>Monthly performance reviews and goal setting</li>
        </ul>

        <h4 class="mb-3">Who Is This For?</h4>
        <div class="hl-info-box mb-4">
          <ul style="list-style:none;padding:0;margin:0;font-size:15px;">
            <?php foreach ($who_for as $wf): ?>
            <li class="mb-2">✓ <?= htmlspecialchars($wf) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <h4 class="mb-3">How the App Works</h4>
        <div class="row g-3 mb-4">
          <?php $steps = [['fa-download','Download the Helium App','Install the free app from Google Play and create your account.'],['fa-book-open','Pick Your Course','Select the '.$course_num.' Foundation course and start your first live session.'],['fa-brain','Study with AI','Get personalised practice recommendations and track your progress daily.'],['fa-user-friends','Weekly Mentorship','Meet your mentor every week to review progress and plan the next steps.']]; ?>
          <?php foreach ($steps as $idx => $step): ?>
          <div class="col-sm-6">
            <div style="display:flex;gap:14px;align-items:flex-start;padding:16px;border:1px solid var(--border);border-radius:var(--radius);background:#fff;">
              <div style="min-width:36px;height:36px;border-radius:50%;background:var(--primary);color:#fff;display:flex;align-items:center;justify-content:center;font-weight:700;"><?= $idx+1 ?></div>
              <div><strong style="font-size:14px;color:var(--dark);"><?= $step[1] ?></strong><p style="font-size:13px;color:var(--text);margin:4px 0 0;"><?= $step[2] ?></p></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <h4 class="mb-3">Frequently Asked Questions</h4>
        <div class="hl-accordion accordion" id="foundationAccordion<?= $course_num ?>">
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f<?= $course_num ?>1">How are the live classes conducted?</button></h2><div id="f<?= $course_num ?>1" class="accordion-collapse collapse"><div class="accordion-body">Classes are conducted live on the Helium App with a two-way interactive format. Students can ask questions in real-time and the sessions are also recorded for later review.</div></div></div>
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f<?= $course_num ?>2">What if I miss a live class?</button></h2><div id="f<?= $course_num ?>2" class="accordion-collapse collapse"><div class="accordion-body">All live classes are recorded and available on the app within a few hours. You can watch them anytime, and submit doubts on the recording too.</div></div></div>
          <div class="accordion-item"><h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#f<?= $course_num ?>3">Is the app free to download?</button></h2><div id="f<?= $course_num ?>3" class="accordion-collapse collapse"><div class="accordion-body">Yes, the Helium App is free to download on Android. Course subscriptions are separate — contact us for current pricing.</div></div></div>
        </div>
      </div>

      <!-- Sidebar -->
      <div class="col-lg-4">
        <div style="position:sticky;top:80px;">
          <div class="branch-card" style="border-color:var(--green);">
            <h4 class="mb-3">Get Started Now</h4>
            <ul class="feature-list mb-4" style="font-size:14px;">
              <li><i class="fa fa-check-circle"></i>Free to download</li>
              <li><i class="fa fa-check-circle"></i>Live classes daily</li>
              <li><i class="fa fa-check-circle"></i>Expert faculty</li>
              <li><i class="fa fa-check-circle"></i>Weekly mentorship</li>
            </ul>
            <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-primary d-flex justify-content-center mb-3" target="_blank" rel="noopener" style="background:var(--green);" onclick="gtag('event','app_download_click',{source:'course-<?= $course_num ?>-page'})">
              <i class="fab fa-google-play"></i> Download Free App
            </a>
            <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-secondary d-flex justify-content-center mb-3" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'course-<?= $course_num ?>-page'})">
              <i class="fa fa-calendar"></i> Book Free Counselling
            </a>
            <a href="tel:+919889763777" class="d-flex align-items-center justify-content-center gap-2" style="color:var(--text);font-size:14px;">
              <i class="fa fa-phone" style="color:var(--primary);"></i> +91 9889763777
            </a>
          </div>

          <div class="mt-4">
            <h5 class="mb-3">Other Courses</h5>
            <ul class="footer-links" style="background:#fff;border:1px solid var(--border);border-radius:var(--radius);padding:16px;list-style:none;">
              <?php
              $other_courses = ['9th'=>'9th Foundation','10th'=>'10th Foundation','11th'=>'11th Foundation','12th'=>'12th Foundation','iit-jee'=>'IIT-JEE','neet-ug'=>'NEET-UG'];
              foreach ($other_courses as $slug => $label):
                $active = str_contains(strtolower($file), strtolower(str_replace('-','', $slug)));
              ?>
              <li style="margin-bottom:8px;">
                <a href="/courses/<?= $slug ?>" style="color:<?= $active ? 'var(--primary)' : 'var(--text)' ?>;font-size:14px;display:flex;align-items:center;gap:8px;">
                  <i class="fa fa-chevron-right" style="font-size:11px;color:var(--primary);"></i><?= $label ?>
                </a>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2>Begin Your Class <?= $course_num ?> Preparation Today</h2>
    <p>Download the Helium App and start learning with expert faculty from day one.</p>
    <div class="cta-btns">
      <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="btn-hl-white" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'course-<?= $course_num ?>-cta'})"><i class="fab fa-google-play"></i> Download App</a>
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-outline-white" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'course-<?= $course_num ?>-cta'})"><i class="fa fa-calendar"></i> Book Counselling</a>
    </div>
  </div>
</section>
