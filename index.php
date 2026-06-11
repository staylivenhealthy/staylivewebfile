<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stay Live and Healthy - Coming Soon. Your journey to a healthier life starts here.">
    <title>Stay Live &amp; Healthy - Coming Soon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f4c35 0%, #1a7a52 40%, #2ecc71 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated background circles */
        body::before,
        body::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            opacity: 0.08;
            background: #fff;
            animation: float 8s ease-in-out infinite;
        }

        body::before {
            width: 500px;
            height: 500px;
            top: -150px;
            right: -100px;
        }

        body::after {
            width: 350px;
            height: 350px;
            bottom: -100px;
            left: -80px;
            animation-delay: 3s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-20px) scale(1.03); }
        }

        .container {
            text-align: center;
            color: #fff;
            padding: 40px 30px;
            max-width: 700px;
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .logo-icon {
            font-size: 72px;
            display: block;
            margin-bottom: 10px;
            animation: pulse 2.5s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .brand-name {
            font-size: 42px;
            font-weight: 800;
            letter-spacing: 1px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.2);
            margin-bottom: 6px;
        }

        .brand-name span {
            color: #a8f0c6;
        }

        .tagline {
            font-size: 16px;
            font-weight: 400;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #c8f7de;
            margin-bottom: 40px;
        }

        .coming-soon-badge {
            display: inline-block;
            background: rgba(255,255,255,0.15);
            border: 2px solid rgba(255,255,255,0.4);
            backdrop-filter: blur(10px);
            padding: 12px 36px;
            border-radius: 50px;
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 4px;
            text-transform: uppercase;
            margin-bottom: 40px;
        }

        .description {
            font-size: 17px;
            line-height: 1.8;
            color: #d4f5e5;
            margin-bottom: 50px;
            max-width: 520px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Countdown Timer */
        .countdown-wrapper {
            margin-bottom: 50px;
        }

        .countdown-label {
            font-size: 12px;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #a8f0c6;
            margin-bottom: 16px;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .countdown-item {
            background: rgba(255,255,255,0.12);
            border: 1px solid rgba(255,255,255,0.25);
            backdrop-filter: blur(8px);
            border-radius: 16px;
            padding: 18px 22px;
            min-width: 80px;
        }

        .countdown-number {
            display: block;
            font-size: 36px;
            font-weight: 800;
            line-height: 1;
        }

        .countdown-unit {
            display: block;
            font-size: 11px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #a8f0c6;
            margin-top: 6px;
        }

        /* Notify form */
        .notify-section {
            margin-bottom: 50px;
        }

        .notify-label {
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
            color: #a8f0c6;
            margin-bottom: 16px;
        }

        .notify-form {
            display: flex;
            justify-content: center;
            gap: 0;
            max-width: 460px;
            margin: 0 auto;
            border-radius: 50px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
        }

        .notify-form input[type="email"] {
            flex: 1;
            padding: 16px 24px;
            border: none;
            outline: none;
            font-size: 15px;
            background: rgba(255,255,255,0.95);
            color: #1a7a52;
        }

        .notify-form input[type="email"]::placeholder {
            color: #7abf9a;
        }

        .notify-form button {
            padding: 16px 28px;
            background: #0f4c35;
            color: #fff;
            border: none;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
            letter-spacing: 1px;
            transition: background 0.3s ease;
            white-space: nowrap;
        }

        .notify-form button:hover {
            background: #07321f;
        }

        .notify-form button:active {
            transform: scale(0.98);
        }

        .success-msg {
            display: none;
            margin-top: 14px;
            font-size: 14px;
            color: #a8f0c6;
        }

        /* Features teaser */
        .features {
            display: flex;
            justify-content: center;
            gap: 30px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .feature-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            color: #c8f7de;
            font-size: 13px;
            letter-spacing: 1px;
        }

        .feature-item .icon {
            font-size: 28px;
        }

        /* Social links */
        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 30px;
        }

        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255,255,255,0.15);
            border: 1px solid rgba(255,255,255,0.3);
            color: #fff;
            text-decoration: none;
            font-size: 18px;
            transition: background 0.3s, transform 0.2s;
        }

        .social-links a:hover {
            background: rgba(255,255,255,0.3);
            transform: translateY(-3px);
        }

        .footer-text {
            font-size: 13px;
            color: #8fd4b0;
        }

        .footer-text a {
            color: #a8f0c6;
            text-decoration: none;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .brand-name { font-size: 28px; }
            .coming-soon-badge { font-size: 16px; letter-spacing: 2px; padding: 10px 24px; }
            .countdown-item { padding: 14px 16px; min-width: 65px; }
            .countdown-number { font-size: 28px; }
            .notify-form { flex-direction: column; border-radius: 12px; }
            .notify-form input[type="email"] { border-radius: 12px 12px 0 0; }
            .notify-form button { border-radius: 0 0 12px 12px; }
        }
    </style>
</head>
<body>

<div class="container">

    <span class="logo-icon">🌿</span>

    <h1 class="brand-name">Stay Live <span>&amp;</span> Healthy</h1>
    <p class="tagline">Your Wellness Journey Starts Here</p>

    <div class="coming-soon-badge">Coming Soon</div>

    <p class="description">
        We're crafting something wonderful — a place where health, wellness, and vitality come together.
        Get ready to transform your lifestyle and thrive every day.
    </p>

    <!-- Countdown Timer -->
    <div class="countdown-wrapper">
        <p class="countdown-label">Launching In</p>
        <div class="countdown">
            <div class="countdown-item">
                <span class="countdown-number" id="days">00</span>
                <span class="countdown-unit">Days</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="hours">00</span>
                <span class="countdown-unit">Hours</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="minutes">00</span>
                <span class="countdown-unit">Mins</span>
            </div>
            <div class="countdown-item">
                <span class="countdown-number" id="seconds">00</span>
                <span class="countdown-unit">Secs</span>
            </div>
        </div>
    </div>

    <!-- Notify Me Form -->
    <div class="notify-section">
        <p class="notify-label">Be the First to Know</p>
        <form class="notify-form" onsubmit="handleNotify(event)">
            <input type="email" id="email-input" placeholder="Enter your email address" required>
            <button type="submit">Notify Me</button>
        </form>
        <p class="success-msg" id="success-msg">&#10003; Thank you! We'll notify you when we launch.</p>
    </div>

    <!-- Feature Teasers -->
    <div class="features">
        <div class="feature-item">
            <span class="icon">🥗</span>
            <span>Nutrition Tips</span>
        </div>
        <div class="feature-item">
            <span class="icon">🏃</span>
            <span>Fitness Plans</span>
        </div>
        <div class="feature-item">
            <span class="icon">🧘</span>
            <span>Mindfulness</span>
        </div>
        <div class="feature-item">
            <span class="icon">💊</span>
            <span>Health Guides</span>
        </div>
        <div class="feature-item">
            <span class="icon">😴</span>
            <span>Sleep Wellness</span>
        </div>
    </div>

    <!-- Social Links -->
    <div class="social-links">
        <a href="#" title="Facebook" aria-label="Facebook">f</a>
        <a href="#" title="Instagram" aria-label="Instagram">&#x1F4F7;</a>
        <a href="#" title="Twitter / X" aria-label="Twitter">X</a>
        <a href="#" title="YouTube" aria-label="YouTube">&#9654;</a>
    </div>

    <p class="footer-text">
        Questions? Contact us at <a href="mailto:hello@staylivenhealthy.com">hello@staylivenhealthy.com</a>
    </p>

</div>

<script>
    // ── Countdown Timer ──────────────────────────────────────────
    // Set your launch date here (YYYY, MM-1, DD, HH, MM, SS)
    const launchDate = new Date(2026, 8, 1, 0, 0, 0); // September 1, 2026

    function updateCountdown() {
        const now  = new Date().getTime();
        const diff = launchDate.getTime() - now;

        if (diff <= 0) {
            document.getElementById('days').textContent    = '00';
            document.getElementById('hours').textContent   = '00';
            document.getElementById('minutes').textContent = '00';
            document.getElementById('seconds').textContent = '00';
            return;
        }

        const days    = Math.floor(diff / (1000 * 60 * 60 * 24));
        const hours   = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((diff % (1000 * 60)) / 1000);

        document.getElementById('days').textContent    = String(days).padStart(2, '0');
        document.getElementById('hours').textContent   = String(hours).padStart(2, '0');
        document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
        document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);

    // ── Notify Me Form ────────────────────────────────────────────
    function handleNotify(e) {
        e.preventDefault();
        const email = document.getElementById('email-input').value.trim();
        if (!email) return;

        // TODO: wire up to your backend / mailing list API
        document.getElementById('email-input').value = '';
        const msg = document.getElementById('success-msg');
        msg.style.display = 'block';
        setTimeout(() => { msg.style.display = 'none'; }, 5000);
    }
</script>

</body>
</html>
