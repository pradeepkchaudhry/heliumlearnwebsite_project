<?php
$page_title = "10th Foundation Course — Board + JEE/NEET Prep | Helium Learn";
$page_description = "Helium Learn's 10th Foundation course: board exam mastery combined with IIT-JEE & NEET foundation building. Live classes, AI mentorship, and the Helium App.";
$page_keywords = "10th class coaching online, 10th board coaching, class 10 IIT JEE foundation, NEET foundation class 10";
$canonical = "https://heliumlearn.com/courses/10th";
$current_page = "courses";
$page_schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Course",
      "name": "Class 10 Foundation — Board + JEE & NEET Prep",
      "description": "Helium Learn Class 10 Foundation course covering board exam mastery combined with IIT-JEE and NEET foundation building. Live classes, AI mentorship, and the Helium App.",
      "url": "https://heliumlearn.com/courses/10th",
      "provider": {"@type": "EducationalOrganization", "name": "Helium Learn", "url": "https://heliumlearn.com"},
      "educationalLevel": "Class 10",
      "teaches": ["Mathematics", "Science", "Board Exam Preparation", "Foundation for JEE", "Foundation for NEET"],
      "courseMode": "Online",
      "availableLanguage": ["English", "Hindi"]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Home", "item": "https://heliumlearn.com/"},
        {"@type": "ListItem", "position": 2, "name": "Courses", "item": "https://heliumlearn.com/courses"},
        {"@type": "ListItem", "position": 3, "name": "10th Foundation", "item": "https://heliumlearn.com/courses/10th"}
      ]
    }
  ]
}
</script>';
require "header.php";
?>

<div class="hl-breadcrumb">
  <div class="container">
    <h1>10th Foundation Course</h1>
    <p>Excel in your board exams while building the competitive edge for IIT-JEE &amp; NEET.</p>
    <nav aria-label="breadcrumb"><ol class="breadcrumb"><li class="breadcrumb-item"><a href="/">Home</a></li><li class="breadcrumb-item"><a href="/courses">Courses</a></li><li class="breadcrumb-item active">10th Foundation</li></ol></nav>
  </div>
</div>

<?php include "inc/course-template.php"; ?>
<?php require "footer.php"; ?>
