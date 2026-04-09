<?php /* Helium Learn — Smart Conversion Popup */ ?>

<!-- ======= HELIUM SMART POPUP ======= -->
<div id="hlPopup" class="hl-popup" role="dialog" aria-modal="true" aria-label="Download the Helium App" aria-hidden="true">
  <div class="hl-popup-inner">

    <!-- Auto-close progress bar (top of card) -->
    <div class="hl-popup-progress" id="hlPopupProgress">
      <div class="hl-popup-progress-bar" id="hlPopupProgressBar"></div>
    </div>

    <!-- Header: logo row + close button + trust row -->
    <div class="hl-popup-header">
      <div class="hl-popup-header-row">
        <div class="hl-popup-brand">
          <img src="/img/logo.png" alt="Helium Learn" height="28" loading="lazy">
        </div>
        <button class="hl-popup-close" id="hlPopupClose" aria-label="Close popup" title="Close">
          <svg width="12" height="12" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path d="M1 1l12 12M13 1L1 13" stroke="currentColor" stroke-width="2.2" stroke-linecap="round"/>
          </svg>
        </button>
      </div>
      <div class="hl-popup-trust">
        <span class="hl-popup-stars" aria-label="5 star rating">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
        <span class="hl-popup-rating">4.8 Rating &nbsp;&bull;&nbsp; 10,000+ Students</span>
      </div>
    </div>

    <!-- Body -->
    <div class="hl-popup-body">
      <!-- Play Store badge icon -->
      <div class="hl-popup-store-badge" aria-hidden="true">
        <img src="/img/playstore.png" alt="Available on Google Play" loading="lazy">
      </div>
      <div class="hl-popup-content">
        <h2 class="hl-popup-title">Learn Smarter with the Helium App</h2>
        <p class="hl-popup-msg">Live classes, AI mentorship, doubt solving &amp; mock tests — all free to download.</p>
        <ul class="hl-popup-features" aria-label="App features">
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Personalised AI learning path</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Weekly mentorship sessions</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> All-India JEE &amp; NEET mock tests</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Instant live doubt solving</li>
          <li><i class="fa fa-check-circle" aria-hidden="true"></i> Expert IIT &amp; NIT educated faculty</li>
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

  var FIRST_DELAY_MS   = 6000;
  var REPEAT_INTERVAL  = 45000;
  var AUTO_CLOSE_MS    = 11000;
  var ACTIVITY_TIMEOUT = 30000;

  var popup     = document.getElementById('hlPopup');
  var backdrop  = document.getElementById('hlPopupBackdrop');
  var closeBtn  = document.getElementById('hlPopupClose');
  var progBar   = document.getElementById('hlPopupProgressBar');
  var dlBtn     = document.getElementById('hlPopupDownload');
  var cnBtn     = document.getElementById('hlPopupCounselling');

  var isVisible      = false;
  var autoCloseTimer = null;
  var progressAnim   = null;
  var repeatTimer    = null;
  var lastActivity   = Date.now();
  var lastShownAt    = 0;

  function resetActivity() { lastActivity = Date.now(); }
  ['mousemove','scroll','keydown','touchstart','click'].forEach(function(e) {
    document.addEventListener(e, resetActivity, {passive: true});
  });

  function track(event, params) {
    if (typeof gtag === 'function') gtag('event', event, params || {});
  }

  function showPopup() {
    if (isVisible) return;
    var now = Date.now();
    if (now - lastShownAt < REPEAT_INTERVAL - 1000) return;
    isVisible   = true;
    lastShownAt = now;
    popup.classList.add('hl-popup--visible');
    backdrop.classList.add('hl-popup-backdrop--visible');
    popup.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
    track('popup_view', {});
    startProgressBar();
    clearTimeout(autoCloseTimer);
    autoCloseTimer = setTimeout(function() { hidePopup('auto'); }, AUTO_CLOSE_MS);
  }

  function hidePopup(reason) {
    if (!isVisible) return;
    isVisible = false;
    popup.classList.remove('hl-popup--visible');
    backdrop.classList.remove('hl-popup-backdrop--visible');
    popup.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
    clearTimeout(autoCloseTimer);
    cancelAnimationFrame(progressAnim);
    progBar.style.width = '0%';
    if (reason === 'close') track('popup_close', {trigger: 'user'});
    scheduleRepeat();
  }

  function startProgressBar() {
    var start = null;
    progBar.style.width = '100%';
    function step(ts) {
      if (!start) start = ts;
      var pct = Math.max(0, 100 - ((ts - start) / AUTO_CLOSE_MS) * 100);
      progBar.style.width = pct + '%';
      if (pct > 0 && isVisible) progressAnim = requestAnimationFrame(step);
    }
    progressAnim = requestAnimationFrame(step);
  }

  function scheduleRepeat() {
    clearInterval(repeatTimer);
    repeatTimer = setInterval(function() {
      var now = Date.now();
      if ((now - lastActivity) < ACTIVITY_TIMEOUT && (now - lastShownAt) >= REPEAT_INTERVAL && !isVisible) {
        showPopup();
      }
    }, 5000);
  }

  if (dlBtn)   dlBtn.addEventListener('click', function() { track('app_download_click', {source:'popup'}); hidePopup('cta'); });
  if (cnBtn)   cnBtn.addEventListener('click', function() { track('counselling_click', {source:'popup'}); hidePopup('cta'); });
  if (closeBtn) closeBtn.addEventListener('click', function() { hidePopup('close'); });
  if (backdrop) backdrop.addEventListener('click', function() { hidePopup('close'); });
  document.addEventListener('keydown', function(e) { if (e.key === 'Escape' && isVisible) hidePopup('close'); });

  setTimeout(function() { showPopup(); scheduleRepeat(); }, FIRST_DELAY_MS);

})();
</script>
