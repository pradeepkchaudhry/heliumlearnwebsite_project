<?php
$page_title = "Contact Helium Learn — Admissions, WhatsApp & Counselling";
$page_description = "Get in touch with Helium Learn for admissions, course queries, or support. Call, WhatsApp, email, or book a free counselling session.";
$page_keywords = "Helium Learn contact, admissions enquiry, IIT-JEE NEET coaching contact, book free counselling, WhatsApp coaching";
$canonical = "https://heliumlearn.com/contact";
$current_page = "contact";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "name": "Contact Helium Learn",
      "url": "https://heliumlearn.com/contact",
      "description": "Contact Helium Learn for IIT-JEE and NEET course admissions, app support, and free counselling sessions.",
      "mainEntity": {
        "@type": "EducationalOrganization",
        "name": "Helium Learn",
        "telephone": "+91-9889763777",
        "contactPoint": {
          "@type": "ContactPoint",
          "telephone": "+91-9889763777",
          "contactType": "admissions",
          "availableLanguage": ["English", "Hindi"],
          "areaServed": "IN"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Contact", "item": "https://heliumlearn.com/contact"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>Contact Us</h1>
    <p>We're here to help. Reach out via call, WhatsApp, email, or book a free counselling session.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item active">Contact</li></ol></nav>
  </div>
</div>

<!-- 1. ENQUIRY FORM -->
<section class="hl-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="section-title text-start mb-4">
          <span class="section-badge">Enquiry Form</span>
          <h2>Send Us a Message</h2>
          <p>Fill in your details and we'll get back to you within a few hours.</p>
        </div>
        <form class="hl-form" action="mail.php" method="POST" onsubmit="gtag('event','counselling_submit',{source:'contact-form'})">
          <div class="row g-3">
            <div class="col-md-6">
              <label for="name">Full Name *</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Your full name" required>
            </div>
            <div class="col-md-6">
              <label for="phone">Phone Number *</label>
              <input type="tel" class="form-control" id="phone" name="phone" placeholder="+91 XXXXXXXXXX" required>
            </div>
            <div class="col-md-6">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com">
            </div>
            <div class="col-md-6">
              <label for="course">Course Interested In</label>
              <select class="form-select" id="course" name="course">
                <option value="">Select a course</option>
                <option>9th Foundation</option>
                <option>10th Foundation</option>
                <option>11th Foundation</option>
                <option>12th Foundation</option>
                <option>IIT-JEE</option>
                <option>NEET-UG</option>
                <option>Not Sure</option>
              </select>
            </div>
            <div class="col-12">
              <label for="message">Message</label>
              <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tell us about your preparation goals or any questions you have..."></textarea>
            </div>
            <div class="col-12">
              <button type="submit" class="btn-hl-primary">
                <i class="fa fa-paper-plane"></i> Send Enquiry
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- 2. GET IN TOUCH -->
<section class="hl-section hl-bg-light">
  <div class="container">
    <div class="section-title">
      <span class="section-badge">Get in Touch</span>
      <h2>We're Here to <span>Help You</span></h2>
      <p>Whether you have questions about courses, admissions, or the app — we're just a message away.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="contact-card">
          <div class="cc-ico ico-blue"><i class="fa fa-phone"></i></div>
          <h5>Call Us</h5>
          <p>Talk to an admissions counsellor directly.</p>
          <a href="tel:+919889763777" class="d-block mt-2 fw-600" style="color:var(--primary);font-weight:600;">+91 9889763777</a>
          <p style="font-size:12px;margin-top:6px;color:var(--text);">Mon–Sat, 9 AM – 7 PM</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="contact-card">
          <div class="cc-ico ico-green"><i class="fab fa-whatsapp"></i></div>
          <h5>WhatsApp</h5>
          <p>Quick replies on WhatsApp for any questions.</p>
          <a href="https://wa.me/+919889763777" class="btn-hl-primary d-inline-flex mt-3" style="padding:10px 20px;font-size:14px;" target="_blank" rel="noopener" onclick="gtag('event','whatsapp_click',{source:'contact-page'})">
            <i class="fab fa-whatsapp"></i> Chat Now
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="contact-card">
          <div class="cc-ico ico-orange"><i class="fa fa-calendar-check"></i></div>
          <h5>Book Counselling</h5>
          <p>Schedule a free 1:1 session with our academic counsellor.</p>
          <a href="https://calendar.app.google/shqrSfQdoPj4YaLVA" class="btn-hl-secondary d-inline-flex mt-3" style="padding:10px 20px;font-size:14px;" target="_blank" rel="noopener" onclick="gtag('event','counselling_click',{source:'contact-page'})">
            <i class="fa fa-calendar"></i> Book Now
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="contact-card">
          <div class="cc-ico ico-red"><i class="fa fa-envelope"></i></div>
          <h5>Email Us</h5>
          <p>For detailed queries, send us an email and we'll respond within 24 hours.</p>
          <a href="mailto:support@heliumlearn.com" class="d-block mt-2" style="color:var(--primary);font-weight:600;">support@heliumlearn.com</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. MORE WAYS TO REACH US -->
<section class="hl-section">
  <div class="container">
    <div class="section-title">
      <span class="section-badge section-badge-orange">More Ways to Reach Us</span>
      <h2>We Respond <span>Fast</span></h2>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="branch-card h-100">
          <div class="bc-badge">Online</div>
          <h5 class="mb-3">Helium Learn (Online)</h5>
          <div class="branch-info-item"><i class="fa fa-globe"></i><span>India-wide online learning platform</span></div>
          <div class="branch-info-item"><i class="fa fa-phone"></i><a href="tel:+919889763777">+91 9889763777</a></div>
          <div class="branch-info-item"><i class="fab fa-whatsapp"></i><a href="https://wa.me/+919889763777">WhatsApp Chat</a></div>
          <div class="branch-info-item"><i class="fa fa-envelope"></i><a href="mailto:support@heliumlearn.com">support@heliumlearn.com</a></div>
          <div class="branch-info-item"><i class="fab fa-whatsapp"></i><a href="https://rb.gy/jlgzkq" target="_blank" rel="noopener">Join WhatsApp Channel</a></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hl-info-box h-100" style="display:flex;flex-direction:column;justify-content:center;">
          <h5 class="mb-2" style="color:var(--primary);"><i class="fa fa-map-marker-alt me-2"></i>Azamgarh Centre</h5>
          <p style="font-size:14px;">We have a physical hybrid learning centre in Azamgarh, U.P. for local students who want the best of online and in-person coaching.</p>
          <a href="/azamgarh" class="btn-hl-secondary mt-3 d-inline-flex" style="font-size:13px;padding:8px 16px;" onclick="gtag('event','branch_click',{branch:'azamgarh'})">
            View Azamgarh Centre <i class="fa fa-arrow-right ms-1"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require "footer.php"; ?>
