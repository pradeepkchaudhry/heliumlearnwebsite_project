<?php
$page_title = "9th Foundation Course — IIT-JEE & NEET Prep | Helium Learn";
$page_description = "Helium Learn's 9th Foundation course builds strong Maths & Science fundamentals for future IIT-JEE and NEET success. Live classes, mentorship, and the Helium App.";
$page_keywords = "9th class coaching online, 9th foundation IIT JEE, class 9 science maths coaching";
$canonical = "https://heliumlearn.com/courses/9th";
$current_page = "courses";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Course",
      "name": "Class 9 Foundation — JEE & NEET Prep",
      "description": "Foundation course for Class 9 students building strong Maths and Science fundamentals for future IIT-JEE and NEET success. Includes live classes, mentorship, and the Helium App.",
      "url": "https://heliumlearn.com/courses/9th",
      "provider": {"@type": "EducationalOrganization", "name": "Helium Learn", "url": "https://heliumlearn.com"},
      "educationalLevel": "Class 9",
      "teaches": ["Mathematics", "Science", "Foundation for JEE", "Foundation for NEET"],
      "courseMode": "Online",
      "availableLanguage": ["English", "Hindi"]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Courses", "item": "https://heliumlearn.com/courses"},
        {"@type": "ListItem", "position": 3, "name": "9th Foundation", "item": "https://heliumlearn.com/courses/9th"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>9th Foundation Course</h1>
    <p>Build the right fundamentals from Class 9 — the smartest head start for IIT-JEE &amp; NEET.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item"><a href="/courses">Courses</a></li><li class="breadcrumb-item active">9th Foundation</li></ol></nav>
  </div>
</div>

<?php include "inc/course-template.php"; ?>
<?php require "footer.php"; ?>
