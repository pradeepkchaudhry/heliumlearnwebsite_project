<?php
$page_title = "11th Foundation Course — Start JEE/NEET Prep | Helium Learn";
$page_description = "Begin your IIT-JEE & NEET journey in Class 11 with Helium Learn. Structured curriculum, live classes, weekly mentorship, and the Helium App.";
$page_keywords = "11th class JEE coaching, 11th NEET coaching online, class 11 physics chemistry maths biology";
$canonical = "https://heliumlearn.com/courses/11th";
$current_page = "courses";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Course",
      "name": "Class 11 Foundation — JEE & NEET Preparation",
      "description": "Start your IIT-JEE and NEET journey in Class 11 with Helium Learn. Structured curriculum, live daily classes, weekly personal mentorship, and access to the Helium App.",
      "url": "https://heliumlearn.com/courses/11th",
      "provider": {"@type": "EducationalOrganization", "name": "Helium Learn", "url": "https://heliumlearn.com"},
      "educationalLevel": "Class 11",
      "teaches": ["Physics", "Chemistry", "Mathematics", "Biology", "JEE Preparation", "NEET Preparation"],
      "courseMode": "Online",
      "availableLanguage": ["English", "Hindi"],
      "coursePrerequisites": "Class 10 pass"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Courses", "item": "https://heliumlearn.com/courses"},
        {"@type": "ListItem", "position": 3, "name": "11th Foundation", "item": "https://heliumlearn.com/courses/11th"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>11th Foundation Course</h1>
    <p>The right time to start — structured JEE &amp; NEET prep from Class 11 with expert guidance.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item"><a href="/courses">Courses</a></li><li class="breadcrumb-item active">11th Foundation</li></ol></nav>
  </div>
</div>

<?php include "inc/course-template.php"; ?>
<?php require "footer.php"; ?>
