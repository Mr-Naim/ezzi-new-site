<?php
// Maintenance page — every page request is rewritten here by .htaccess while
// the site is being moved. It answers 503 + Retry-After so search engines
// treat the outage as temporary and keep the existing pages indexed, instead
// of replacing them with this page.

http_response_code(503);
header('Retry-After: 86400');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>EZZI Perfumery House &mdash; We&rsquo;ll be back shortly</title>
	<meta name="robots" content="noindex">
	<link rel="icon" href="/images/1472113510.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
	<style>
		* { box-sizing: border-box; }
		html, body { margin: 0; min-height: 100%; }
		body {
			min-height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			padding: 32px 16px;
			font-family: "Poppins", Arial, sans-serif;
			color: #f4efe3;
			background-color: #0d2b1d;
			background-image: linear-gradient(165deg, #16412c 0%, #0d2b1d 45%, #081712 100%);
		}
		.wrap {
			width: 100%;
			max-width: 560px;
			text-align: center;
		}
		.logo-card {
			display: inline-block;
			background: #fffdf6;
			border-radius: 16px;
			padding: 18px 28px;
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
		}
		.logo-card img {
			display: block;
			width: 180px;
			max-width: 100%;
			height: auto;
		}
		.rule {
			width: 120px;
			height: 2px;
			margin: 32px auto 24px;
			background: linear-gradient(90deg, rgba(223, 192, 131, 0) 0%, #dfc083 50%, rgba(223, 192, 131, 0) 100%);
		}
		.eyebrow {
			margin: 0 0 8px;
			font-size: 0.8rem;
			font-weight: 500;
			letter-spacing: 0.18em;
			text-transform: uppercase;
			color: #dfc083;
		}
		h1 {
			margin: 0 0 16px;
			font-family: "Abril Fatface", Georgia, serif;
			font-weight: 400;
			font-size: clamp(2rem, 6vw, 2.75rem);
			line-height: 1.15;
			color: #ffffff;
		}
		p.lead {
			margin: 0 auto 8px;
			max-width: 460px;
			font-size: 1rem;
			line-height: 1.7;
			color: #e6dfcc;
		}
		p.lead-bn {
			margin: 0 auto 32px;
			font-size: 0.95rem;
			line-height: 1.7;
			color: #c9c0aa;
		}
		.actions {
			display: flex;
			flex-wrap: wrap;
			gap: 12px;
			justify-content: center;
		}
		.btn {
			display: inline-block;
			padding: 12px 22px;
			border-radius: 999px;
			font-size: 0.95rem;
			font-weight: 500;
			text-decoration: none;
			transition: background-color 0.2s, color 0.2s;
		}
		.btn-primary { background: #f3c623; color: #0f1a12; }
		.btn-primary:hover { background: #ffd84a; }
		.btn-outline { border: 1px solid #dfc083; color: #dfc083; }
		.btn-outline:hover { background: #dfc083; color: #0f1a12; }
		.btn:focus-visible { outline: 2px solid #ffffff; outline-offset: 3px; }
		.contact {
			margin-top: 32px;
			font-size: 0.875rem;
			line-height: 1.8;
			color: #c9c0aa;
		}
		.contact a { color: #dfc083; text-decoration: none; }
		.contact a:hover { text-decoration: underline; }
		footer {
			margin-top: 40px;
			font-size: 0.75rem;
			color: #8f9a8f;
		}
	</style>
</head>
<body>
	<main class="wrap">
		<div class="logo-card">
			<img src="/images/ezzi/ezzi-logo.png" alt="EZZI Perfumery House" width="500" height="290">
		</div>

		<div class="rule" aria-hidden="true"></div>

		<p class="eyebrow">Flavours &middot; Fragrances &middot; Colours &middot; Seasoning</p>
		<h1>We&rsquo;ll be back shortly</h1>
		<p class="lead">Our website is being upgraded to serve you better. We&rsquo;re still open for business &mdash; call, message or email us and our team will help you right away.</p>
		<p class="lead-bn" lang="bn">ওয়েবসাইটটি হালনাগাদ করা হচ্ছে। আমাদের সেবা যথারীতি চালু আছে।</p>

		<div class="actions">
			<a class="btn btn-primary" href="tel:+8801713008394">Call +88 01713-008394</a>
			<a class="btn btn-outline" href="https://wa.me/8801713008394" target="_blank" rel="noopener">WhatsApp us</a>
			<a class="btn btn-outline" href="mailto:info@ezziph.com">Email us</a>
		</div>

		<div class="contact">
			56/57 Mitford Road (Bhandari Medicine Market), Dhaka-1100, Bangladesh<br>
			<a href="mailto:info@ezziph.com">info@ezziph.com</a> &middot;
			<a href="https://www.facebook.com/EZZI-Flavours-Fragrances-419183892177418" target="_blank" rel="noopener">Facebook</a>
		</div>

		<footer>&copy; <?php echo date('Y'); ?> EZZI Perfumery House &middot; Since 1978</footer>
	</main>
</body>
</html>
