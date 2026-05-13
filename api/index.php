<?php
declare(strict_types=1);

chdir(dirname(__DIR__));

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rawurldecode($path);
$path = trim($path, '/');

$allowed_pages = [
    '' => 'index.php',
    'index.php' => 'index.php',
    'blogs.php' => 'blogs.php',
    'contact.php' => 'contact.php',
    'schedule.php' => 'schedule.php',
    'process.php' => 'process.php',
    'calculator.php' => 'calculator.php',
    'testimonials.php' => 'testimonials.php',
    'privacy.php' => 'privacy.php',
    'terms.php' => 'terms.php',
    'tools.php' => 'tools.php',
    'blog-client-acquisition.php' => 'blog-client-acquisition.php',
    'blog-cloud-roi.php' => 'blog-cloud-roi.php',
    'blog-compliance-size.php' => 'blog-compliance-size.php',
    'blog-connected-ecosystem.php' => 'blog-connected-ecosystem.php',
    'blog-cybersecurity.php' => 'blog-cybersecurity.php',
    'blog-deal-velocity.php' => 'blog-deal-velocity.php',
    'blog-hidden-deal-killer.php' => 'blog-hidden-deal-killer.php',
    'blog-it-complexity.php' => 'blog-it-complexity.php',
    'blog-migration.php' => 'blog-migration.php',
    'blog-non-technical-manager.php' => 'blog-non-technical-manager.php',
    'blog-operational-efficiency.php' => 'blog-operational-efficiency.php',
    'blog-scaling.php' => 'blog-scaling.php',
    'blog-software-graveyard.php' => 'blog-software-graveyard.php',
    'blog-tech-arms-dealer.php' => 'blog-tech-arms-dealer.php',
    'blog-tech-assessment.php' => 'blog-tech-assessment.php',
    'blog-value-leak.php' => 'blog-value-leak.php',
];

if (!isset($allowed_pages[$path])) {
    http_response_code(404);
    header('Content-Type: text/html; charset=UTF-8');
    echo '<!DOCTYPE html><html lang="en"><head><meta charset="UTF-8"><title>Page Not Found - PE Tech Partners</title></head><body><h1>Page Not Found</h1><p><a href="/">Return to PE Tech Partners</a></p></body></html>';
    return;
}

header('Content-Type: text/html; charset=UTF-8');
require $allowed_pages[$path];
