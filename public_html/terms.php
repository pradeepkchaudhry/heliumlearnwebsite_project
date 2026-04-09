<?php
$page_title = "Terms of Use | Helium Learn";
$page_description = "Read the Terms of Use for the Helium Learn platform and Helium App — covering usage, subscriptions, payments, and your rights as a student.";
$canonical = "https://heliumlearn.com/terms";
$current_page = "";
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>Terms of Use</h1>
    <p>Terms governing your use of the Helium Learn platform and Helium App.</p>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active">Terms of Use</li>
      </ol>
    </nav>
  </div>
</div>

<section class="hl-section" style="padding-top:40px;padding-bottom:60px;">
  <div class="container-pdf">

    <div class="pdf-viewer-wrap">
      <div class="pdf-topbar">
        <span class="pdf-doc-title"><i class="fa fa-file-contract me-2"></i>Terms of Use — Helium Learn</span>
        <span class="pdf-note"><i class="fa fa-lock me-1"></i> View-only document</span>
      </div>
      <div class="pdf-frame-wrap">
        <iframe
          src="/Helium_TC.pdf#toolbar=0&navpanes=0&scrollbar=1&view=FitH"
          title="Helium Learn Terms of Use"
          aria-label="Helium Learn Terms of Use PDF"
          width="100%"
          loading="lazy"
          allowfullscreen>
          <p>Your browser does not support embedded PDFs.
            <a href="/contact" style="color:var(--primary)">Contact us</a> for a copy.
          </p>
        </iframe>
      </div>
      <div class="pdf-footer-bar">
        <span>For legal queries: <a href="mailto:support@heliumlearn.com">support@heliumlearn.com</a> &nbsp;|&nbsp; Jurisdiction: Uttar Pradesh, India</span>
      </div>
    </div>

  </div>
</section>

<script>
document.addEventListener('contextmenu', function(e) { e.preventDefault(); });
</script>

<?php require "footer.php"; ?>
