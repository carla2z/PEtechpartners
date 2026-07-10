<?php
// Hostinger-friendly config loader: reads local .env.php and exposes values via getenv.
$local_env_file = __DIR__ . '/.env.php';
if (file_exists($local_env_file)) {
    $local_env = require $local_env_file;
    if (is_array($local_env)) {
        foreach ($local_env as $k => $v) {
            if (getenv($k) === false) {
                putenv($k . '=' . $v);
            }
        }
    }
}

function smtp_send_email($to_email, $to_name, $subject, $html_body, $text_body)
{
    $smtp_host = getenv('SMTP_HOST') ?: 'smtp.hostinger.com';
    $smtp_port = (int) (getenv('SMTP_PORT') ?: 465);
    $smtp_user = getenv('SMTP_USER') ?: 'info@petechpartners.com';
    $smtp_pass = getenv('SMTP_PASS') ?: 'P&trLSDRs8$yk6HR&PkR';
    $from_email = getenv('SMTP_FROM_EMAIL') ?: 'info@petechpartners.com' ;
    $from_name = getenv('SMTP_FROM_NAME') ?: 'PE Tech Partners';

    if ($smtp_user === '' || $smtp_pass === '' || $from_email === '') {
        return false;
    }

    $transport = ($smtp_port === 465 ? 'ssl://' : '') . $smtp_host;
    $socket = @fsockopen($transport, $smtp_port, $errno, $errstr, 15);
    if (!$socket) {
        return false;
    }

    $read = function () use ($socket) {
        $data = '';
        while (($line = fgets($socket, 515)) !== false) {
            $data .= $line;
            if (strlen($line) >= 4 && $line[3] === ' ') {
                break;
            }
        }
        return $data;
    };

    $write = function ($cmd) use ($socket) {
        fwrite($socket, $cmd . "\r\n");
    };

    $ok = function ($resp) {
        return preg_match('/^[23]/', $resp) === 1;
    };

    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('EHLO petechpartners.com');
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('AUTH LOGIN');
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write(base64_encode($smtp_user));
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write(base64_encode($smtp_pass));
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('MAIL FROM:<' . $from_email . '>');
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('RCPT TO:<' . $to_email . '>');
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('DATA');
    if (!preg_match('/^3/', $read())) {
        fclose($socket);
        return false;
    }

    $boundary = 'b_' . md5(uniqid((string) mt_rand(), true));
    $headers = [];
    $headers[] = 'From: ' . $from_name . ' <' . $from_email . '>';
    $headers[] = 'To: ' . trim($to_name . ' <' . $to_email . '>');
    $headers[] = 'Subject: ' . $subject;
    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-Type: multipart/alternative; boundary="' . $boundary . '"';
    $headers[] = 'Date: ' . date(DATE_RFC2822);

    $body = implode("\r\n", $headers) . "\r\n\r\n";
    $body .= '--' . $boundary . "\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";
    $body .= $text_body . "\r\n";
    $body .= '--' . $boundary . "\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n\r\n";
    $body .= $html_body . "\r\n";
    $body .= '--' . $boundary . "--\r\n.\r\n";

    fwrite($socket, $body);
    if (!$ok($read())) {
        fclose($socket);
        return false;
    }

    $write('QUIT');
    fclose($socket);
    return true;
}

$capture_submitted = false;
$capture_errors = [];
$capture_success = '';
$report = null;
$smtp_configured = (
    (getenv('SMTP_USER') ?: '') !== '' &&
    (getenv('SMTP_PASS') ?: '') !== '' &&
    (getenv('SMTP_FROM_EMAIL') ?: '') !== ''
);
$form_team_size = 10;
$form_base_output = 3;
$form_automation_depth = 85;
$form_verification_rate = 90;
$form_coordination_tax = 15;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['capture_intent']) && $_POST['capture_intent'] === 'firepower_report') {
    $capture_submitted = true;

    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $company = isset($_POST['company']) ? trim($_POST['company']) : '';

    $team_size = isset($_POST['team_size']) ? (int) $_POST['team_size'] : $form_team_size;
    $base_output = isset($_POST['base_output']) ? (float) $_POST['base_output'] : $form_base_output;
    $automation_depth = isset($_POST['automation_depth']) ? (float) $_POST['automation_depth'] : $form_automation_depth;
    $verification_rate = isset($_POST['verification_rate']) ? (float) $_POST['verification_rate'] : $form_verification_rate;
    $coordination_tax = isset($_POST['coordination_tax']) ? (float) $_POST['coordination_tax'] : $form_coordination_tax;

    if ($name === '') {
        $capture_errors[] = 'Name is required.';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $capture_errors[] = 'A valid email is required.';
    }
    if ($company === '') {
        $capture_errors[] = 'Company is required.';
    }

    $team_size = max(2, $team_size);
    $base_output = max(1, $base_output);
    $automation_depth = min(100, max(10, $automation_depth));
    $verification_rate = min(100, max(40, $verification_rate));
    $coordination_tax = min(60, max(5, $coordination_tax));
    $form_team_size = $team_size;
    $form_base_output = $base_output;
    $form_automation_depth = $automation_depth;
    $form_verification_rate = $verification_rate;
    $form_coordination_tax = $coordination_tax;

    if (empty($capture_errors)) {
        $automation_depth_dec = $automation_depth / 100;
        $verification_rate_dec = $verification_rate / 100;
        $coordination_tax_dec = $coordination_tax / 100;

        $automation_lift = 1 + (4.6 * pow($automation_depth_dec, 1.2));
        $quality_factor = 0.55 + (0.55 * $verification_rate_dec);
        $coordination_factor = 1 - (0.72 * $coordination_tax_dec);
        $verified_capacity = $team_size * $base_output * $automation_lift * $quality_factor * $coordination_factor;
        $effective_team = $verified_capacity / max($base_output, 1);
        $multiplier = $effective_team / $team_size;

        $benchmark = 'Baseline operator band (1x-2x)';
        if ($multiplier >= 5) {
            $benchmark = 'Strike-team band (5x-10x)';
        } elseif ($multiplier >= 3) {
            $benchmark = 'Advanced operator band (3x-5x)';
        } elseif ($multiplier >= 2) {
            $benchmark = 'Developing operator band (2x-3x)';
        }

        $recommendations = [];
        if ($automation_depth < 75) {
            $recommendations[] = 'Raise workflow automation depth on repetitive intake, triage, and reporting work to increase throughput.';
        }
        if ($verification_rate < 88) {
            $recommendations[] = 'Improve verification discipline with structured QA and review gates so AI output stays decision-ready.';
        }
        if ($coordination_tax > 20) {
            $recommendations[] = 'Reduce coordination drag by assigning smaller cross-functional strike teams with clear ownership per workflow.';
        }
        if (empty($recommendations)) {
            $recommendations[] = 'You are in a strong operating zone. Focus next on codifying playbooks to sustain high output quality at scale.';
        }

        $report = [
            'name' => $name,
            'email' => $email,
            'company' => $company,
            'team_size' => $team_size,
            'base_output' => $base_output,
            'automation_depth' => $automation_depth,
            'verification_rate' => $verification_rate,
            'coordination_tax' => $coordination_tax,
            'effective_team' => (int) round($effective_team),
            'verified_capacity' => (int) round($verified_capacity),
            'multiplier' => round($multiplier, 1),
            'benchmark' => $benchmark,
            'recommendations' => $recommendations
        ];

        $csv_file = __DIR__ . '/memory/firepower_leads.csv';
        if (!is_dir(__DIR__ . '/memory')) {
            @mkdir(__DIR__ . '/memory', 0755, true);
        }
        if (!file_exists($csv_file)) {
            @file_put_contents($csv_file, "timestamp,name,email,company,team_size,base_output,automation_depth,verification_rate,coordination_tax,effective_team,verified_capacity,multiplier,benchmark\n");
        }
        $row = sprintf(
            "\"%s\",\"%s\",\"%s\",\"%s\",%d,%.2f,%.2f,%.2f,%.2f,%d,%d,%.1f,\"%s\"\n",
            date('c'),
            str_replace('"', '""', $name),
            str_replace('"', '""', $email),
            str_replace('"', '""', $company),
            $team_size,
            $base_output,
            $automation_depth,
            $verification_rate,
            $coordination_tax,
            $report['effective_team'],
            $report['verified_capacity'],
            $report['multiplier'],
            str_replace('"', '""', $benchmark)
        );
        @file_put_contents($csv_file, $row, FILE_APPEND | LOCK_EX);

        $visitor_subject = 'Your Custom Firepower Report - PE Tech Partners';
        $visitor_text = "Hi {$report['name']},\n\n"
            . "Here is your custom firepower report for {$report['company']}.\n\n"
            . "Current Team Size: {$report['team_size']}\n"
            . "Effective Team Equivalent: {$report['effective_team']}\n"
            . "Verified Output / Quarter: {$report['verified_capacity']}\n"
            . "Firepower Multiplier: " . number_format($report['multiplier'], 1) . "x\n"
            . "Benchmark: {$report['benchmark']}\n\n"
            . "Priority Recommendations:\n- " . implode("\n- ", $report['recommendations']) . "\n\n"
            . "PE Tech Partners";

        $visitor_html = '<p>Hi ' . htmlspecialchars($report['name']) . ',</p>'
            . '<p>Here is your custom firepower report for <strong>' . htmlspecialchars($report['company']) . '</strong>.</p>'
            . '<ul>'
            . '<li><strong>Current Team Size:</strong> ' . (int) $report['team_size'] . '</li>'
            . '<li><strong>Effective Team Equivalent:</strong> ' . (int) $report['effective_team'] . '</li>'
            . '<li><strong>Verified Output / Quarter:</strong> ' . (int) $report['verified_capacity'] . '</li>'
            . '<li><strong>Firepower Multiplier:</strong> ' . htmlspecialchars(number_format($report['multiplier'], 1)) . 'x</li>'
            . '<li><strong>Benchmark:</strong> ' . htmlspecialchars($report['benchmark']) . '</li>'
            . '</ul>'
            . '<p><strong>Priority Recommendations:</strong></p><ul><li>'
            . implode('</li><li>', array_map('htmlspecialchars', $report['recommendations']))
            . '</li></ul><p>PE Tech Partners</p>';

        $alert_email = getenv('LEAD_ALERT_EMAIL') ?: 'info@petechpartners.com';
        $alert_subject = 'New Firepower Report Lead: ' . $report['company'];
        $alert_text = "New lead captured.\n\n"
            . "Name: {$report['name']}\nEmail: {$report['email']}\nCompany: {$report['company']}\n"
            . "Effective Team: {$report['effective_team']}\nVerified Output/Qtr: {$report['verified_capacity']}\n"
            . "Multiplier: " . number_format($report['multiplier'], 1) . "x\nBenchmark: {$report['benchmark']}\n";
        $alert_html = '<p><strong>New lead captured.</strong></p>'
            . '<p>Name: ' . htmlspecialchars($report['name']) . '<br>'
            . 'Email: ' . htmlspecialchars($report['email']) . '<br>'
            . 'Company: ' . htmlspecialchars($report['company']) . '</p>'
            . '<p>Effective Team: ' . (int) $report['effective_team'] . '<br>'
            . 'Verified Output/Qtr: ' . (int) $report['verified_capacity'] . '<br>'
            . 'Multiplier: ' . htmlspecialchars(number_format($report['multiplier'], 1)) . 'x<br>'
            . 'Benchmark: ' . htmlspecialchars($report['benchmark']) . '</p>';

        $sent_visitor = smtp_send_email($report['email'], $report['name'], $visitor_subject, $visitor_html, $visitor_text);
        $sent_alert = smtp_send_email($alert_email, 'PE Tech Partners', $alert_subject, $alert_html, $alert_text);

        if ($sent_visitor && $sent_alert) {
            $capture_success = 'Your custom firepower report is ready below and has been sent to your email.';
        } elseif ($sent_visitor) {
            $capture_success = 'Your custom firepower report is ready below and has been sent to your email.';
        } else {
            $capture_success = 'Your custom firepower report is ready below. Email delivery is not configured yet.';
        }
    }
}

$nav_items = [
    ['href' => 'index.php#problems', 'text' => 'Challenges'],
    ['href' => 'index.php#solutions', 'text' => 'Solutions'],
    ['href' => 'process.php', 'text' => 'Our Process'],
    ['href' => 'blogs.php', 'text' => 'Blog'],
    ['href' => 'testimonials.php', 'text' => 'Testimonials'],
    ['href' => 'schedule.php', 'text' => 'Secure a Strategic Debrief']
];

$faq_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => [
        [
            '@type' => 'Question',
            'name' => 'How should I use these estimates?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Start with current-state values, run one scenario at a time, and use the benchmark band to prioritize which lever to improve first: automation depth, verification quality, or coordination drag.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'What raises output the fastest?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Teams see the fastest gains when they combine workflow automation with strong verification discipline and lower coordination drag across the operating model.'
            ]
        ],
        [
            '@type' => 'Question',
            'name' => 'Can I use these for board and IC prep?',
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => 'Yes. The numbers are designed to support internal prioritization for technology initiatives, deal process improvements, and value creation planning.'
            ]
        ]
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-77VVQVBH64"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-77VVQVBH64');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10-to-100 Team Firepower Estimator | PE Tech Partners</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon-16x16.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/apple-touch-icon.png">

    <meta name="description" content="Model how a 10-person deal team can operate with the firepower of 100 through workflow automation, verification quality, and lower coordination drag.">
    <link rel="canonical" href="https://petechpartners.com/tools.php">
    <meta property="og:title" content="10-to-100 Team Firepower Estimator | PE Tech Partners">
    <meta property="og:description" content="Use one strike-team estimator to turn your current team into an execution army through AI force multiplication, not headcount cuts.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://petechpartners.com/tools.php">
    <meta property="og:image" content="https://petechpartners.com/attached_assets/Home_1761834398568.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --navy: #0A2E50;
            --navy-2: #083156;
            --red: #BF0A30;
            --sky: #87CEEB;
            --ink: #102132;
            --slate: #5b6877;
            --bg: #f6f9fc;
            --card: #ffffff;
            --line: #d9e2ec;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            line-height: 1.6;
            color: var(--ink);
            background: radial-gradient(circle at 0% 0%, #eef5ff 0%, #f6f9fc 48%, #ffffff 100%);
        }
        header {
            background: linear-gradient(135deg, var(--navy) 0%, var(--navy-2) 100%);
            padding: 18px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.12);
        }
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 28px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            flex-shrink: 0;
        }
        .logo-icon {
            width: 42px;
            height: 42px;
            background: white;
            border-radius: 8px;
            padding: 6px;
        }
        .logo-icon img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .logo-text {
            font-size: 20px;
            font-weight: 700;
            color: white;
            display: flex;
            flex-direction: column;
            line-height: 1.1;
        }
        .logo-text .pe { color: var(--red); }
        .logo-subtitle {
            font-size: 10px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.74);
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }
        nav {
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }
        nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: 500;
        }
        nav a:hover { color: var(--sky); }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 24px;
        }
        .hero {
            padding: 64px 0 44px;
            text-align: center;
        }
        .hero h1 {
            font-size: clamp(32px, 6vw, 52px);
            line-height: 1.1;
            color: var(--navy);
            margin-bottom: 16px;
        }
        .hero p {
            max-width: 780px;
            margin: 0 auto;
            color: var(--slate);
            font-size: 19px;
        }

        .tool-grid {
            display: grid;
            gap: 24px;
            margin-bottom: 56px;
        }
        .tool-card {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 28px;
            box-shadow: 0 6px 22px rgba(10, 46, 80, 0.06);
        }
        .tool-card h2 {
            color: var(--navy);
            margin-bottom: 8px;
            font-size: 30px;
            line-height: 1.15;
        }
        .tool-card > p {
            color: var(--slate);
            margin-bottom: 20px;
        }
        .how-to {
            background: #f8fbff;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 14px;
            margin-bottom: 16px;
        }
        .how-to h3 {
            font-size: 18px;
            color: var(--navy);
            margin-bottom: 8px;
        }
        .how-to p {
            color: #35526d;
            margin-bottom: 8px;
            font-size: 14px;
        }
        .how-to ul {
            margin-left: 18px;
            color: #29445e;
            font-size: 14px;
        }
        .how-to li {
            margin-bottom: 4px;
        }
        .inputs {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 16px;
        }
        .field label {
            display: block;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: #3b4f62;
            margin-bottom: 6px;
        }
        .field input {
            width: 100%;
            border: 1px solid #b9c9d8;
            border-radius: 8px;
            padding: 11px 12px;
            font-size: 16px;
            font-weight: 500;
            color: var(--ink);
            background: #fbfdff;
        }
        .results {
            background: linear-gradient(135deg, #edf5ff 0%, #f8fbff 100%);
            border-left: 4px solid var(--red);
            border-radius: 10px;
            padding: 16px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }
        .model-note {
            margin-top: 12px;
            color: #3b4f62;
            font-size: 14px;
            font-weight: 600;
        }
        .capture-panel {
            margin-top: 16px;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 16px;
        }
        .capture-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 10px;
            margin-bottom: 12px;
        }
        .capture-grid input {
            width: 100%;
            border: 1px solid #b9c9d8;
            border-radius: 8px;
            padding: 10px 12px;
            font-size: 15px;
            background: #fbfdff;
        }
        .capture-actions {
            display: flex;
            gap: 10px;
            align-items: center;
            flex-wrap: wrap;
        }
        .capture-btn {
            background: var(--red);
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 11px 16px;
            font-weight: 700;
            cursor: pointer;
        }
        .capture-msg {
            font-size: 14px;
            color: #27445f;
            font-weight: 600;
        }
        .capture-error {
            margin-top: 8px;
            color: #b1163a;
            font-size: 14px;
            font-weight: 600;
        }
        .report-panel {
            margin-top: 16px;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 16px;
            background: #f8fbff;
        }
        .report-panel h4 {
            color: var(--navy);
            margin-bottom: 6px;
            font-size: 21px;
        }
        .report-panel p {
            color: #35526d;
            margin-bottom: 8px;
        }
        .report-panel ul {
            margin-left: 18px;
            color: #29445e;
        }
        .metric { text-align: center; }
        .metric .value {
            color: var(--navy);
            font-size: 30px;
            font-weight: 800;
            line-height: 1;
            margin-bottom: 6px;
        }
        .metric .label {
            color: #3b4f62;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .cta {
            margin: 0 0 70px;
            background: linear-gradient(135deg, var(--navy) 0%, #0f4577 100%);
            border-radius: 14px;
            padding: 34px;
            text-align: center;
            color: white;
        }
        .cta h3 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        .cta p {
            color: #d4e2f3;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background: var(--red);
            color: white;
            padding: 13px 22px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 8px;
        }
        .btn:hover { background: #9b0827; }

        .faq {
            margin-bottom: 70px;
        }
        .faq h3 {
            font-size: 30px;
            color: var(--navy);
            margin-bottom: 16px;
        }
        .faq-item {
            background: white;
            border: 1px solid var(--line);
            border-radius: 10px;
            padding: 16px;
            margin-bottom: 12px;
        }
        .faq-item strong { display: block; color: var(--ink); margin-bottom: 4px; }
        .faq-item p { color: var(--slate); }

        @media (max-width: 980px) {
            .inputs,
            .results {
                grid-template-columns: 1fr;
            }
            .capture-grid {
                grid-template-columns: 1fr;
            }
            .metric {
                text-align: left;
            }
        }
        @media (max-width: 768px) {
            nav {
                display: none;
            }
            .hero {
                padding-top: 44px;
            }
            .tool-card h2 {
                font-size: 25px;
            }
            .cta h3 {
                font-size: 27px;
            }
        }
    </style>
    <script type="application/ld+json">
    <?php echo json_encode($faq_schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>
    </script>
</head>
<body>
    <header>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <div class="logo-icon"><img src="attached_assets/Home_1761834398568.png" alt="PE Tech Partners"></div>
                <div class="logo-text">
                    <div><span class="pe">PE</span> TECH PARTNERS</div>
                    <div class="logo-subtitle">Strategic Solutions for PE & M&A Firms</div>
                </div>
            </a>
            <nav>
                <?php foreach ($nav_items as $item): ?>
                    <a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['text']) ?></a>
                <?php endforeach; ?>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>From 10 People to 100-Person Firepower</h1>
                <p>Do not use AI to shrink headcount. Use it to turn your current team into an execution army with faster throughput, better judgment leverage, and nonstop operational momentum.</p>
            </div>
        </section>

        <section class="container tool-grid">
            <article class="tool-card" id="firepower-estimator">
                <h2>10-to-100 Strike-Team Estimator</h2>
                <p>Model raised output using three levers: automation depth, verification quality, and coordination drag.</p>
                <div class="how-to">
                    <h3>How To Use This Tool</h3>
                    <p>Use your current team and workflow reality, not ideal-state assumptions.</p>
                    <ul>
                        <li><strong>Team Size:</strong> Number of people actively executing this workflow.</li>
                        <li><strong>Base Output:</strong> Typical completed units per person per quarter before AI changes.</li>
                        <li><strong>Automation Depth:</strong> Percent of repetitive work AI/workflows can handle.</li>
                        <li><strong>Verification Quality:</strong> Percent of outputs that are decision-ready after QA.</li>
                        <li><strong>Coordination Drag:</strong> Percent of effort lost to handoffs, rework, and approval lag.</li>
                    </ul>
                    <p><strong>Interpretation:</strong> 1x-2x baseline, 2x-3x developing, 3x-5x advanced, 5x-10x strike-team performance.</p>
                </div>
                <div class="inputs">
                    <div class="field">
                        <label for="team-size">Current Team Size</label>
                        <input type="number" id="team-size" min="2" value="<?= htmlspecialchars((string) $form_team_size) ?>">
                    </div>
                    <div class="field">
                        <label for="base-output">Base Output per Person / Quarter</label>
                        <input type="number" id="base-output" min="1" value="<?= htmlspecialchars((string) $form_base_output) ?>">
                    </div>
                    <div class="field">
                        <label for="automation-depth">Workflow Automation Depth (%)</label>
                        <input type="number" id="automation-depth" min="10" max="100" value="<?= htmlspecialchars((string) $form_automation_depth) ?>">
                    </div>
                </div>
                <div class="inputs" style="grid-template-columns: repeat(2, minmax(0, 1fr)); margin-top: 8px;">
                    <div class="field">
                        <label for="verification-rate">Verification Quality (%)</label>
                        <input type="number" id="verification-rate" min="40" max="100" value="<?= htmlspecialchars((string) $form_verification_rate) ?>">
                    </div>
                    <div class="field">
                        <label for="coordination-tax">Coordination Drag (%)</label>
                        <input type="number" id="coordination-tax" min="5" max="60" value="<?= htmlspecialchars((string) $form_coordination_tax) ?>">
                    </div>
                </div>
                <div class="results">
                    <div class="metric">
                        <div class="value" id="effective-team">100</div>
                        <div class="label">Effective Team Equivalent</div>
                    </div>
                    <div class="metric">
                        <div class="value" id="verified-capacity">300</div>
                        <div class="label">Verified Output Units / Qtr</div>
                    </div>
                    <div class="metric">
                        <div class="value" id="firepower-multiplier">10.0x</div>
                        <div class="label">Firepower Multiplier</div>
                    </div>
                </div>
                <p class="model-note" id="benchmark-band">Benchmark: Advanced operator band (3x-5x)</p>
                <p class="model-note" id="model-note">At this operating model, your 10-person team is tracking near 100-person firepower.</p>

                <div class="capture-panel">
                    <form method="POST" action="tools.php" id="capture-form">
                        <input type="hidden" name="capture_intent" value="firepower_report">
                        <input type="hidden" name="team_size" id="capture-team-size" value="<?= htmlspecialchars((string) $form_team_size) ?>">
                        <input type="hidden" name="base_output" id="capture-base-output" value="<?= htmlspecialchars((string) $form_base_output) ?>">
                        <input type="hidden" name="automation_depth" id="capture-automation-depth" value="<?= htmlspecialchars((string) $form_automation_depth) ?>">
                        <input type="hidden" name="verification_rate" id="capture-verification-rate" value="<?= htmlspecialchars((string) $form_verification_rate) ?>">
                        <input type="hidden" name="coordination_tax" id="capture-coordination-tax" value="<?= htmlspecialchars((string) $form_coordination_tax) ?>">

                        <div class="capture-grid">
                            <input type="text" name="name" placeholder="Your Name" value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>" required>
                            <input type="email" name="email" placeholder="Work Email" value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
                            <input type="text" name="company" placeholder="Company" value="<?= isset($_POST['company']) ? htmlspecialchars($_POST['company']) : '' ?>" required>
                        </div>
                        <div class="capture-actions">
                            <button class="capture-btn" type="submit">Get My Custom Report</button>
                            <span class="capture-msg">We tailor recommendations to your exact firepower model inputs.</span>
                        </div>
                        <?php if (!$smtp_configured): ?>
                            <div class="capture-msg" style="margin-top: 8px; font-size: 12px; color: #607487;">
                                Admin warning: SMTP is not configured yet, so reports will render on-page only.
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($capture_errors)): ?>
                            <?php foreach ($capture_errors as $err): ?>
                                <div class="capture-error"><?= htmlspecialchars($err) ?></div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if ($capture_success !== ''): ?>
                            <div class="capture-msg" style="margin-top: 8px;"><?= htmlspecialchars($capture_success) ?></div>
                        <?php endif; ?>
                    </form>
                </div>

                <?php if ($report): ?>
                    <div class="report-panel">
                        <h4><?= htmlspecialchars($report['company']) ?> Firepower Report</h4>
                        <p><strong>Contact:</strong> <?= htmlspecialchars($report['name']) ?> (<?= htmlspecialchars($report['email']) ?>)</p>
                        <p><strong>Current Team Size:</strong> <?= (int) $report['team_size'] ?> | <strong>Effective Team Equivalent:</strong> <?= (int) $report['effective_team'] ?></p>
                        <p><strong>Verified Output / Quarter:</strong> <?= (int) $report['verified_capacity'] ?> units | <strong>Multiplier:</strong> <?= htmlspecialchars(number_format($report['multiplier'], 1)) ?>x</p>
                        <p><strong>Benchmark Band:</strong> <?= htmlspecialchars($report['benchmark']) ?></p>
                        <p><strong>Priority Recommendations:</strong></p>
                        <ul>
                            <?php foreach ($report['recommendations'] as $rec): ?>
                                <li><?= htmlspecialchars($rec) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </article>

        </section>

        <section class="container">
            <div class="cta">
                <h3>Build 100-Person Firepower from Your Current Team</h3>
                <p>Book a working session and we will map your AI operating model into a 90-day execution sprint.</p>
                <a href="schedule.php" class="btn">Secure a Strategic Debrief</a>
            </div>
        </section>

        <section class="container faq">
            <h3>Firepower FAQs</h3>
            <article class="faq-item">
                <strong>How should I use these estimates?</strong>
                <p>Start with current-state values, run one scenario at a time, and use the benchmark band to prioritize which lever to improve first: automation depth, verification quality, or coordination drag.</p>
            </article>
            <article class="faq-item">
                <strong>How does this model calculate firepower?</strong>
                <p>In this model, leverage comes from automation depth and verification quality, net of coordination drag. That reflects raised output with reliability, not just activity volume.</p>
            </article>
            <article class="faq-item">
                <strong>Can I use this in board and IC discussions?</strong>
                <p>Yes. This estimator gives leaders a simple way to frame capacity expansion goals and align AI investments around execution impact, not layoffs.</p>
            </article>
        </section>
    </main>

    <script>
        function updateStrikeTeamEstimator() {
            const teamSize = Math.max(2, Number(document.getElementById('team-size').value) || 2);
            const baseOutput = Math.max(1, Number(document.getElementById('base-output').value) || 1);
            const automationDepth = Math.min(100, Math.max(10, Number(document.getElementById('automation-depth').value) || 10)) / 100;
            const verificationRate = Math.min(100, Math.max(40, Number(document.getElementById('verification-rate').value) || 40)) / 100;
            const coordinationTax = Math.min(60, Math.max(5, Number(document.getElementById('coordination-tax').value) || 5)) / 100;

            // Calibrated model: diminishing automation returns, quality-gated output,
            // and coordination drag that compounds as teams scale work.
            const automationLift = 1 + (4.6 * Math.pow(automationDepth, 1.2));
            const qualityFactor = 0.55 + (0.55 * verificationRate);
            const coordinationFactor = 1 - (0.72 * coordinationTax);
            const verifiedCapacity = teamSize * baseOutput * automationLift * qualityFactor * coordinationFactor;
            const effectiveTeam = verifiedCapacity / Math.max(baseOutput, 1);
            const multiplier = effectiveTeam / teamSize;

            document.getElementById('effective-team').textContent = Math.round(effectiveTeam).toLocaleString();
            document.getElementById('verified-capacity').textContent = Math.round(verifiedCapacity).toLocaleString();
            document.getElementById('firepower-multiplier').textContent = `${multiplier.toFixed(1)}x`;

            const targetReached = effectiveTeam >= 100;
            document.getElementById('model-note').textContent = targetReached
                ? `At this operating model, your ${teamSize}-person team is tracking at or above 100-person firepower.`
                : `At this operating model, your ${teamSize}-person team is tracking around ${Math.round(effectiveTeam)}-person firepower.`;

            let benchmark = 'Benchmark: Baseline operator band (1x-2x)';
            if (multiplier >= 5) {
                benchmark = 'Benchmark: Strike-team band (5x-10x)';
            } else if (multiplier >= 3) {
                benchmark = 'Benchmark: Advanced operator band (3x-5x)';
            } else if (multiplier >= 2) {
                benchmark = 'Benchmark: Developing operator band (2x-3x)';
            }
            document.getElementById('benchmark-band').textContent = benchmark;

            document.getElementById('capture-team-size').value = teamSize;
            document.getElementById('capture-base-output').value = baseOutput;
            document.getElementById('capture-automation-depth').value = Math.round(automationDepth * 100);
            document.getElementById('capture-verification-rate').value = Math.round(verificationRate * 100);
            document.getElementById('capture-coordination-tax').value = Math.round(coordinationTax * 100);
        }

        const watchedIds = [
            'team-size', 'base-output', 'automation-depth', 'verification-rate', 'coordination-tax'
        ];

        watchedIds.forEach((id) => {
            const el = document.getElementById(id);
            el.addEventListener('input', () => {
                updateStrikeTeamEstimator();
            });
        });

        updateStrikeTeamEstimator();
    </script>
</body>
</html>
