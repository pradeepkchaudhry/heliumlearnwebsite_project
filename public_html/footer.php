<!-- ======================== FOOTER ======================== -->
<footer class="hl-footer">
  <div class="footer-top">
    <div class="container">
      <div class="row g-5">

        <!-- Brand Column -->
        <div class="col-lg-4 col-md-6">
          <div class="footer-logo">
            <img src="/img/logo.png" alt="Helium Learn" loading="lazy">
          </div>
          <p class="footer-desc">India's online-first EdTech platform for IIT-JEE and NEET aspirants. AI-powered learning, expert faculty, and weekly mentorship — all in one app.</p>
          <div class="footer-social">
            <a href="https://rb.gy/g43lg4" target="_blank" rel="noopener" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="https://rb.gy/ev893a" target="_blank" rel="noopener" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://rb.gy/nl0g8s" target="_blank" rel="noopener" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://t.me/heliumlearn" target="_blank" rel="noopener" aria-label="Telegram"><i class="fab fa-telegram-plane"></i></a>
          </div>
          <a href="https://play.google.com/store/apps/details?id=com.helium.app" class="footer-play-btn" target="_blank" rel="noopener" onclick="gtag('event','app_download_click',{source:'footer'})">
            <i class="fab fa-google-play" style="font-size:22px;"></i>
            <span>
              <span style="font-size:11px;opacity:.7;display:block;">GET IT ON</span>
              <strong style="font-size:15px;">Google Play</strong>
            </span>
          </a>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-2 col-md-6 col-6">
          <h5>Courses</h5>
          <ul class="footer-links">
            <li><a href="/courses/9th">9th Foundation</a></li>
            <li><a href="/courses/10th">10th Foundation</a></li>
            <li><a href="/courses/11th">11th Foundation</a></li>
            <li><a href="/courses/12th">12th Foundation</a></li>
            <li><a href="/courses/iit-jee">IIT-JEE</a></li>
            <li><a href="/courses/neet-ug">NEET-UG</a></li>
          </ul>
        </div>

        <!-- Company Links -->
        <div class="col-lg-2 col-md-6 col-6">
          <h5>Company</h5>
          <ul class="footer-links">
            <li><a href="/faculty">Faculty</a></li>
            <li><a href="/app">Helium App</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="/azamgarh" onclick="gtag('event','branch_click',{branch:'azamgarh'})">Azamgarh Centre</a></li>
            <li><a href="https://blog.heliumlearn.com/" target="_blank" rel="noopener">Blog</a></li>
            <li><a href="/faq">FAQs</a></li>
          </ul>
        </div>

        <!-- Legal + Contact -->
        <div class="col-lg-4 col-md-6">
          <h5>Contact & Support</h5>
          <div class="footer-contact-item">
            <i class="fa fa-phone"></i>
            <a href="tel:+919889763777">+91 9889763777</a>
          </div>
          <div class="footer-contact-item">
            <i class="fab fa-whatsapp"></i>
            <a href="https://wa.me/+919889763777" target="_blank" rel="noopener">WhatsApp Us</a>
          </div>
          <div class="footer-contact-item">
            <i class="fa fa-envelope"></i>
            <a href="mailto:support@heliumlearn.com">support@heliumlearn.com</a>
          </div>
          <div class="footer-contact-item">
            <i class="fab fa-whatsapp"></i>
            <a href="https://rb.gy/jlgzkq" target="_blank" rel="noopener">Join WhatsApp Channel</a>
          </div>
          <div class="mt-3">
            <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" target="_blank" rel="noopener"
               class="btn-hl-secondary d-inline-flex" style="font-size:13px;padding:10px 18px;"
               onclick="gtag('event','counselling_click',{source:'footer'})">
              <i class="fa fa-calendar me-2"></i> Book Free Counselling
            </a>
          </div>
          <div class="mt-3" style="border-top:1px solid rgba(255,255,255,.08);padding-top:14px;">
            <a href="/privacy-policy" style="color:rgba(255,255,255,.5);font-size:13px;margin-right:14px;">Privacy Policy</a>
            <a href="/terms" style="color:rgba(255,255,255,.5);font-size:13px;">Terms of Use</a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-2">
      <p>&copy; <?= date('Y') ?> Helium Learn. All rights reserved.</p>
      <p>Made with <i class="fa fa-heart" style="color:#ef4444;"></i> for IIT-JEE &amp; NEET aspirants across India.</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<?php require __DIR__ . '/inc/popup.php'; ?>
</body>
</html>
