<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = rtrim($uri, '/') ?: '/';

// Serve static files (css, js, img, fonts) directly
if ($uri !== '/' && file_exists(__DIR__ . $uri) && !is_dir(__DIR__ . $uri)) {
    return false;
}

$routes = [
    '/'                  => __DIR__ . '/index.php',
    '/courses'           => __DIR__ . '/courses.php',
    '/courses/9th'       => __DIR__ . '/course-9th.php',
    '/courses/10th'      => __DIR__ . '/course-10th.php',
    '/courses/11th'      => __DIR__ . '/course-11th.php',
    '/courses/12th'      => __DIR__ . '/course-12th.php',
    '/courses/iit-jee'   => __DIR__ . '/course-iit-jee.php',
    '/courses/neet-ug'   => __DIR__ . '/course-neet-ug.php',
    '/faculty'           => __DIR__ . '/faculty.php',
    '/app'               => __DIR__ . '/app.php',
    '/contact'           => __DIR__ . '/contact.php',
    '/azamgarh'          => __DIR__ . '/azamgarh.php',
    '/privacy-policy'    => __DIR__ . '/privacy-policy.php',
    '/terms'             => __DIR__ . '/terms.php',
    '/terms-of-use'      => __DIR__ . '/terms.php',
    // Legacy redirects
    '/about'             => __DIR__ . '/index.php',
    '/about.php'         => __DIR__ . '/index.php',
    '/contact-us'        => __DIR__ . '/contact.php',
    '/contact-us.php'    => __DIR__ . '/contact.php',
    '/faq'               => __DIR__ . '/faq-page.php',
    '/faq.php'           => __DIR__ . '/faq-page.php',
];

if (isset($routes[$uri])) {
    $file = $routes[$uri];
    if (file_exists($file)) {
        include $file;
    } else {
        http_response_code(404);
        include __DIR__ . '/404.php';
    }
} else {
    // Try .php extension fallback
    $phpFile = __DIR__ . $uri . '.php';
    if (file_exists($phpFile)) {
        include $phpFile;
    } else {
        http_response_code(404);
        echo '<!DOCTYPE html><html><head><title>404</title></head><body style="font-family:sans-serif;text-align:center;padding:60px"><h1>404 — Page Not Found</h1><a href="/" style="color:#1a76d1">Back to Home</a></body></html>';
    }
}
