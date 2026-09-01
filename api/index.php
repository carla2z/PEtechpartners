<?php
declare(strict_types=1);

chdir(dirname(__DIR__));

$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$path = rawurldecode($path);
$path = trim($path, '/');

function serve_static_file(string $path): bool
{
    if ($path === '' || str_contains($path, "\0") || str_contains($path, '..')) {
        return false;
    }

    $allowed_exact = ['robots.txt', 'sitemap.xml', 'favicon.ico'];
    $allowed_prefixes = ['assets/', 'attached_assets/', 'deal-scorecard/', 'blog/'];
    $is_allowed = in_array($path, $allowed_exact, true);

    foreach ($allowed_prefixes as $prefix) {
        if (str_starts_with($path, $prefix)) {
            $is_allowed = true;
            break;
        }
    }

    if (!$is_allowed) {
        return false;
    }

    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $mime_types = [
        'css' => 'text/css; charset=UTF-8',
        'js' => 'application/javascript; charset=UTF-8',
        'png' => 'image/png',
        'jpg' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'gif' => 'image/gif',
        'webp' => 'image/webp',
        'svg' => 'image/svg+xml',
        'pdf' => 'application/pdf',
        'ico' => 'image/x-icon',
        'txt' => 'text/plain; charset=UTF-8',
        'xml' => 'application/xml; charset=UTF-8',
        'html' => 'text/html; charset=UTF-8',
    ];

    if (!isset($mime_types[$extension])) {
        return false;
    }

    $site_root = getcwd();
    $relative_path = str_starts_with($path, 'blog/') ? 'public/' . $path : $path;
    $file_path = realpath($site_root . DIRECTORY_SEPARATOR . $relative_path);

    if ($file_path === false || !is_file($file_path)) {
        return false;
    }

    $root_prefix = rtrim((string) realpath($site_root), DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR;
    if (!str_starts_with($file_path, $root_prefix)) {
        return false;
    }

    header('Content-Type: ' . $mime_types[$extension]);
    header('Content-Disposition: inline');
    header('Cache-Control: public, max-age=3600');
    header('Content-Length: ' . filesize($file_path));
    readfile($file_path);
    return true;
}

if (serve_static_file($path)) {
    return;
}

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
    'ai-consulting-private-equity-ma-advisors-northeast.php' => 'ai-consulting-private-equity-ma-advisors-northeast.php',
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
    'blog-spv-due-diligence.php' => 'blog-spv-due-diligence.php',
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
header('Content-Disposition: inline');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
require $allowed_pages[$path];
