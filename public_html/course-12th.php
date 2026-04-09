<?php
$page_title = "Class 12 Coaching — Board + JEE & NEET Final Prep | Helium";
$page_description = "Helium Learn's Class 12 programme: intensive board + JEE/NEET preparation with revision plans, all-India mock tests, and expert doubt-clearing sessions.";
$page_keywords = "12th class JEE coaching, 12th NEET coaching, class 12 board coaching online, final year JEE NEET prep, class 12 online coaching";
$canonical = "https://heliumlearn.com/courses/12th";
$current_page = "courses";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Course",
      "name": "Class 12 — Board + JEE & NEET Final Prep",
      "description": "Intensive Class 12 preparation combining board exams with JEE Main and NEET-UG coaching. Includes revision plans, all-India mock tests, and expert doubt-clearing sessions on the Helium App.",
      "url": "https://heliumlearn.com/courses/12th",
      "provider": {"@type": "EducationalOrganization", "name": "Helium Learn", "url": "https://heliumlearn.com"},
      "educationalLevel": "Class 12",
      "teaches": ["Physics", "Chemistry", "Mathematics", "Biology", "Board Exam Preparation", "JEE Main", "NEET UG"],
      "courseMode": "Online",
      "availableLanguage": ["English", "Hindi"],
      "coursePrerequisites": "Class 11 completed"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Courses", "item": "https://heliumlearn.com/courses"},
        {"@type": "ListItem", "position": 3, "name": "12th Foundation", "item": "https://heliumlearn.com/courses/12th"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>12th Foundation Course</h1>
    <p>Boards + JEE/NEET — master both with Helium's intensive Class 12 programme.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item"><a href="/courses">Courses</a></li><li class="breadcrumb-item active">12th Foundation</li></ol></nav>
  </div>
</div>

<?php $course_id = '12'; include "inc/course-template.php"; ?>
<?php require "footer.php"; ?>
