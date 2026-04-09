<?php /* Helium Learn — Smart Conversion Popup */ ?>

<!-- ======= HELIUM SMART POPUP ======= -->
<div id="hlPopup" class="hl-popup" role="dialog" aria-modal="true" aria-label="Download the Helium App" aria-hidden="true">
  <div class="hl-popup-inner">

    <!-- Progress bar (auto-close countdown) -->
    <div class="hl-popup-progress" id="hlPopupProgress">
      <div class="hl-popup-progress-bar" id="hlPopupProgressBar"></div>
    </div>

    <!-- Close button -->
    <button class="hl-popup-close" id="hlPopupClose" aria-label="Close popup" title="Close">
      <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 1l12 12M13 1L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
      </svg>
    </button>

    <!-- Header stripe -->
    <div class="hl-popup-header">
      <div class="hl-popup-brand">
        <img src="/img/logo.png" alt="Helium Learn" width="90" height="30" loading="lazy">
      </div>
      <div class="hl-popup-trust">
        <span class="hl-popup-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <span class="hl-popup-rating">4.8&nbsp;&bull;&nbsp;10K+ Students</span>
      </div>
    </div>

    <!-- Body -->
    <div class="hl-popup-body">
      <div class="hl-popup-icon" aria-hidden="true">
        <i class="fab fa-google-play"></i>
      </div>
      <div class="hl-popup-content">
        <h2 class="hl-popup-title">Learn Smarter with the Helium App</h2>
        <p class="hl-popup-msg">Live classes, AI mentorship, doubt solving &amp; mock tests — all free to download.</p>
        <ul class="hl-popup-features" aria-label="App features">
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Personalised learning path</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Weekly 1:1 mentor sessions</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> All-India JEE &amp; NEET mock tests</li>
        </ul>
      </div>
    </div>

    <!-- CTAs -->
    <div class="hl-popup-actions">
      <a href="https://play.google.com/store/apps/details?id=com.helium.app"
         class="hl-popup-btn-primary"
         target="_blank"
         rel="noopener"
         id="hlPopupDownload"
         aria-label="Download Helium App on Google Play">
        <i class="fab fa-google-play" aria-hidden="true"></i>
        Download Free App
      </a>
      <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA"
         class="hl-popup-btn-secondary"
         target="_blank"
         rel="noopener"
         id="hlPopupCounselling"
         aria-label="Book a free counselling session">
        <i class="fa fa-calendar-check" aria-hidden="true"></i>
        Book Free Counselling
      </a>
    </div>

  </div>
</div>
<!-- Backdrop -->
<div class="hl-popup-backdrop" id="hlPopupBackdrop" aria-hidden="true"></div>

<script>
(function () {
  'use strict';

  /* ── Config ── */
  var FIRST_DELAY_MS   = 6000;   // 6s after page load
  var REPEAT_INTERVAL  = 45000;  // show again every 45s of active browsing
  var AUTO_CLOSE_MS    = 11000;  // auto-dismiss after 11s
  var ACTIVITY_TIMEOUT = 30000;  // user considered idle after 30s

  /* ── DOM refs ── */
  var popup     = document.getElementById('hlPopup');
  var backdrop  = document.getElementById('hlPopupBackdrop');
  var closeBtn  = document.getElementById('hlPopupClose');
  var progBar   = document.getElementById('hlPopupProgressBar');
  var dlBtn     = document.getElementById('hlPopupDownload');
  var cnBtn     = document.getElementById('hlPopupCounselling');

  /* ── State ── */
  var isVisible      = false;
  var autoCloseTimer = null;
  var progressAnim   = null;
  var repeatTimer    = null;
  var lastActivity   = Date.now();
  var lastShownAt    = 0;

  /* ── Activity tracking ── */
  function resetActivity() { lastActivity = Date.now(); }
  ['mousemove','scroll','keydown','touchstart','click'].forEach(function(e) {
    document.addEventListener(e, resetActivity, {passive: true});
  });

  /* ── Analytics helper ── */
  function track(event, params) {
    if (typeof gtag === 'function') {
      gtag('event', event, params || {});
    }
  }

  /* ── Show popup ── */
  function showPopup() {
    if (isVisible) return;
    var now = Date.now();
    if (now - lastShownAt < REPEAT_INTERVAL - 1000) return;

    isVisible   = true;
    lastShownAt = now;

    popup.classList.add('hl-popup--visible');
    backdrop.classList.add('hl-popup-backdrop--visible');
    popup.setAttribute('aria-hidden', 'false');

    track('popup_view', {method: lastShownAt === now && lastShownAt < FIRST_DELAY_MS + 1000 ? 'initial' : 'repeat'});

    /* Start progress bar */
    startProgressBar();

    /* Auto-close */
    clearTimeout(autoCloseTimer);
    autoCloseTimer = setTimeout(function() {
      hidePopup('auto');
    }, AUTO_CLOSE_MS);
  }

  /* ── Hide popup ── */
  function hidePopup(reason) {
    if (!isVisible) return;
    isVisible = false;

    popup.classList.remove('hl-popup--visible');
    backdrop.classList.remove('hl-popup-backdrop--visible');
    popup.setAttribute('aria-hidden', 'true');

    clearTimeout(autoCloseTimer);
    cancelAnimationFrame(progressAnim);
    progBar.style.width = '0%';

    if (reason === 'close') {
      track('popup_close', {trigger: 'user'});
    }

    /* Schedule repeat */
    scheduleRepeat();
  }

  /* ── Progress bar animation ── */
  function startProgressBar() {
    var start = null;
    progBar.style.transition = 'none';
    progBar.style.width = '100%';

    function step(ts) {
      if (!start) start = ts;
      var elapsed = ts - start;
      var pct = Math.max(0, 100 - (elapsed / AUTO_CLOSE_MS) * 100);
      progBar.style.width = pct + '%';
      if (pct > 0 && isVisible) {
        progressAnim = requestAnimationFrame(step);
      }
    }
    progressAnim = requestAnimationFrame(step);
  }

  /* ── Schedule repeat check ── */
  function scheduleRepeat() {
    clearTimeout(repeatTimer);
    repeatTimer = setInterval(function() {
      var now = Date.now();
      var userActive = (now - lastActivity) < ACTIVITY_TIMEOUT;
      var intervalElapsed = (now - lastShownAt) >= REPEAT_INTERVAL;
      if (userActive && intervalElapsed && !isVisible) {
        showPopup();
      }
    }, 5000); /* check every 5s */
  }

  /* ── CTA event handlers ── */
  if (dlBtn) {
    dlBtn.addEventListener('click', function() {
      track('app_download_click', {source: 'popup'});
      hidePopup('cta');
    });
  }
  if (cnBtn) {
    cnBtn.addEventListener('click', function() {
      track('counselling_click', {source: 'popup'});
      hidePopup('cta');
    });
  }
  if (closeBtn) {
    closeBtn.addEventListener('click', function() {
      hidePopup('close');
    });
  }
  if (backdrop) {
    backdrop.addEventListener('click', function() {
      hidePopup('close');
    });
  }

  /* Keyboard: Escape to close */
  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape' && isVisible) hidePopup('close');
  });

  /* ── Boot ── */
  setTimeout(function() {
    showPopup();
    scheduleRepeat();
  }, FIRST_DELAY_MS);

})();
</script>
