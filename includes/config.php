<?php
/**
 * PE Tech Partners – Shared Site Configuration
 * Include this at the top of every page before outputting HTML.
 */

$company_name = 'PE Tech Partners';
$year         = date('Y');
$logo_src     = 'attached_assets/Home_1761834398568.png';
$phone        = '917-715-7100';
$address_line1 = '2125 Albany Post Rd Suite 106';
$address_line2 = 'Montrose, NY 10548';
$email_contact = 'info@petechpartners.com';

// Primary navigation items – single source of truth
$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php',         'text' => 'Our Process'],
    ['href' => 'blogs.php',           'text' => 'Blog'],
    ['href' => 'tools.php',           'text' => 'Free Tools'],
    ['href' => 'testimonials.php',    'text' => 'Testimonials'],
    ['href' => 'schedule.php',        'text' => 'Secure a Strategic Debrief'],
];

// Default SEO values (override in each page before including nav.php)
if (!isset($page_title))       $page_title       = 'PE Tech Partners – Technology Alignment for Private Equity &amp; M&amp;A Firms';
if (!isset($page_description)) $page_description = 'PE Tech Partners helps private equity and M&A firms close more deals faster by integrating and automating their deal tech stack — DealCloud, PitchBook, VDRs, and more.';
if (!isset($page_url))         $page_url         = 'https://www.petechpartners.com/';
if (!isset($page_image))       $page_image       = 'https://www.petechpartners.com/attached_assets/Home_1761834398568.png';
