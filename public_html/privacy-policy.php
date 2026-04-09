<?php
$page_title = "Privacy Policy | Helium Learn";
$page_description = "Read Helium Learn's Privacy Policy — how we collect, use, and protect your personal data on the Helium App and website.";
$canonical = "https://heliumlearn.com/privacy-policy";
$current_page = "";
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>Privacy Policy</h1>
    <p>Read our privacy practices for the Helium App and website.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Privacy Policy</li>
      </ol>
    </nav>
  </div>
</div>

<section class="hl-section" style="padding-top:40px;padding-bottom:60px;">
  <div class="container-pdf">

    <div class="pdf-viewer-wrap">
      <div class="pdf-topbar">
        <span class="pdf-doc-title"><i class="fa fa-shield-alt me-2"></i>Privacy Policy — Helium Learn</span>
        <span class="pdf-note"><i class="fa fa-lock me-1"></i> View-only document</span>
      </div>
      <div class="pdf-frame-wrap">
        <iframe
          src="/Helium__pp.pdf#toolbar=0&navpanes=0&scrollbar=1&view=FitH"
          title="Helium Learn Privacy Policy"
          aria-label="Helium Learn Privacy Policy PDF"
          width="100%"
          loading="lazy"
          allowfullscreen>
          <p>Your browser does not support embedded PDFs.
            <a href="/privacy-policy" style="color:var(--primary)">Please contact us</a> for a copy.
          </p>
        </iframe>
      </div>
      <div class="pdf-footer-bar">
        <span>For privacy queries: <a href="mailto:support@heliumlearn.com">support@heliumlearn.com</a> &nbsp;|&nbsp; <a href="tel:+919889763777">+91 9889763777</a></span>
      </div>
    </div>

  </div>
</section>

<script>
document.addEventListener('contextmenu', function(e) { e.preventDefault(); });
</script>

<?php require "footer.php"; ?>
