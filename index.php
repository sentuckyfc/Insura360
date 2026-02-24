<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insura360 Risk Advisory | General Insurance Solutions</title>
    <meta name="description" content="Insura360 Risk Advisory - Comprehensive general insurance solutions for individuals and businesses. Get protected today.">
    <link rel="icon" href="Insura360 logo.webp" type="image/webp">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        :root {
            --blue: #0B5FA5;
            --blue-deep: #062D50;
            --blue-light: #3B8DD4;
            --green: #2EAE6D;
            --green-light: #4FD98F;
            --green-pale: #E8FBF0;
            --teal: #0EA5A1;
            --navy: #07101F;
            --charcoal: #111827;
            --slate: #1E293B;
            --off-white: #F7F8FA;
            --cream: #FAFBFD;
            --border: #E5E7EB;
            --text: #1F2937;
            --text-mid: #4B5563;
            --text-light: #9CA3AF;
            --white: #FFFFFF;
            --radius: 16px;
            --radius-sm: 10px;
            --radius-xs: 6px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }

        body {
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text);
            background: var(--white);
            overflow-x: hidden;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        .serif { font-family: 'Instrument Serif', Georgia, serif; }

        /* ========== TOPBAR ========== */
        .topbar {
            background: var(--navy);
            color: rgba(255,255,255,0.7);
            font-size: 0.8rem;
            padding: 8px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .topbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .topbar a { color: var(--green-light); text-decoration: none; }
        .topbar-left, .topbar-right { display: flex; gap: 20px; align-items: center; }
        .topbar-left i, .topbar-right i { margin-right: 6px; font-size: 0.75rem; }

        /* ========== NAVBAR ========== */
        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border-bottom: 1px solid rgba(0,0,0,0.05);
            padding: 0;
            transition: box-shadow 0.3s;
        }
        .navbar.shadow { box-shadow: 0 1px 20px rgba(0,0,0,0.06); }
        .navbar .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
        }
        .nav-logo img { height: 46px; }
        .nav-links {
            display: flex;
            align-items: center;
            gap: 6px;
            list-style: none;
        }
        .nav-links a {
            text-decoration: none;
            color: var(--text);
            font-weight: 500;
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.2s;
        }
        .nav-links a:hover {
            background: var(--off-white);
            color: var(--blue);
        }
        .nav-cta-wrap { display: flex; align-items: center; gap: 10px; }
        .nav-phone {
            display: flex;
            align-items: center;
            gap: 8px;
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 8px 14px;
            border-radius: 10px;
            transition: all 0.2s;
        }
        .nav-phone:hover { background: var(--off-white); }
        .nav-phone i { color: var(--green); }
        .nav-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 22px;
            background: var(--blue);
            color: var(--white);
            border: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 0.88rem;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.25s;
        }
        .nav-btn:hover { background: var(--blue-deep); transform: translateY(-1px); box-shadow: 0 4px 16px rgba(11,95,165,0.25); }

        .mobile-toggle {
            display: none;
            background: none;
            border: 2px solid var(--border);
            border-radius: 8px;
            width: 42px;
            height: 42px;
            cursor: pointer;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: var(--text);
        }

        /* ========== CONTAINER ========== */
        .container { max-width: 1200px; margin: 0 auto; padding: 0 24px; }

        /* ========== HERO ========== */
        .hero {
            position: relative;
            background: var(--navy);
            overflow: hidden;
            min-height: 92vh;
            display: flex;
            align-items: center;
        }
        .hero-bg {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 80% 70% at 70% 40%, rgba(11,95,165,0.35) 0%, transparent 60%),
                radial-gradient(ellipse 60% 50% at 20% 80%, rgba(46,174,109,0.2) 0%, transparent 50%),
                radial-gradient(ellipse 40% 40% at 90% 90%, rgba(14,165,161,0.15) 0%, transparent 50%);
        }
        .hero-noise {
            position: absolute;
            inset: 0;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            background-size: 200px;
        }
        .hero-grid-lines {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(255,255,255,0.02) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255,255,255,0.02) 1px, transparent 1px);
            background-size: 80px 80px;
        }
        .hero .container { position: relative; z-index: 2; }
        .hero-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
            padding: 60px 0;
        }
        .hero-eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 6px 6px 6px 16px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 100px;
            color: rgba(255,255,255,0.8);
            font-size: 0.82rem;
            font-weight: 500;
            margin-bottom: 28px;
            backdrop-filter: blur(10px);
        }
        .hero-eyebrow-dot {
            width: 8px; height: 8px; border-radius: 50%;
            background: var(--green-light);
            animation: dotPulse 2s infinite;
        }
        @keyframes dotPulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.4; }
        }
        .hero-eyebrow span {
            background: var(--green);
            color: var(--white);
            padding: 4px 12px;
            border-radius: 100px;
            font-size: 0.72rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .hero h1 {
            font-family: 'Instrument Serif', serif;
            font-size: 4.2rem;
            font-weight: 400;
            line-height: 1.08;
            color: var(--white);
            margin-bottom: 24px;
            letter-spacing: -0.02em;
        }
        .hero h1 em {
            font-style: italic;
            color: var(--green-light);
        }
        .hero-sub {
            font-size: 1.08rem;
            color: rgba(255,255,255,0.55);
            line-height: 1.75;
            margin-bottom: 36px;
            max-width: 480px;
        }
        .hero-actions { display: flex; gap: 12px; margin-bottom: 56px; flex-wrap: wrap; }
        .btn-hero-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            background: var(--green);
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.25s;
        }
        .btn-hero-primary:hover { background: var(--green-light); color: var(--navy); transform: translateY(-2px); box-shadow: 0 8px 30px rgba(46,174,109,0.3); }
        .btn-hero-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            background: rgba(255,255,255,0.08);
            color: var(--white);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.25s;
            backdrop-filter: blur(10px);
        }
        .btn-hero-secondary:hover { background: rgba(255,255,255,0.14); border-color: rgba(255,255,255,0.3); }

        .hero-metrics {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: rgba(255,255,255,0.06);
            border-radius: 16px;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.06);
        }
        .hero-metric {
            padding: 24px;
            background: rgba(255,255,255,0.03);
            backdrop-filter: blur(10px);
            text-align: center;
        }
        .hero-metric h3 {
            font-family: 'Instrument Serif', serif;
            font-size: 2.4rem;
            color: var(--white);
            line-height: 1;
            margin-bottom: 4px;
        }
        .hero-metric h3 span { color: var(--green-light); }
        .hero-metric p {
            font-size: 0.72rem;
            color: rgba(255,255,255,0.4);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 600;
        }

        /* Hero right - bento cards */
        .hero-bento {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto auto;
            gap: 14px;
        }
        .bento-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 18px;
            padding: 24px;
            transition: all 0.35s;
        }
        .bento-card:hover { background: rgba(255,255,255,0.08); border-color: rgba(255,255,255,0.15); transform: translateY(-4px); }
        .bento-wide { grid-column: span 2; display: flex; align-items: center; gap: 16px; }
        .bento-icon {
            width: 48px; height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 16px;
        }
        .bento-wide .bento-icon { margin-bottom: 0; flex-shrink: 0; }
        .bento-icon.blue { background: rgba(11,95,165,0.2); color: var(--blue-light); }
        .bento-icon.green { background: rgba(46,174,109,0.2); color: var(--green-light); }
        .bento-icon.teal { background: rgba(14,165,161,0.2); color: var(--teal); }
        .bento-card h4 {
            color: var(--white);
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 6px;
        }
        .bento-card p {
            color: rgba(255,255,255,0.45);
            font-size: 0.84rem;
            line-height: 1.6;
        }
        .bento-featured {
            background: linear-gradient(135deg, rgba(11,95,165,0.15), rgba(46,174,109,0.1));
            border-color: rgba(46,174,109,0.15);
        }
        .bento-featured .bento-stat {
            font-family: 'Instrument Serif', serif;
            font-size: 3rem;
            color: var(--green-light);
            line-height: 1;
        }
        .bento-featured .bento-stat-label {
            color: rgba(255,255,255,0.5);
            font-size: 0.82rem;
            margin-top: 4px;
        }
        .bento-img {
            padding: 0;
            overflow: hidden;
            max-height: 180px;
        }
        .bento-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 17px;
        }

        /* ========== MARQUEE ========== */
        .marquee-strip {
            background: var(--off-white);
            border-bottom: 1px solid var(--border);
            padding: 18px 0;
            overflow: hidden;
        }
        .marquee-inner {
            display: flex;
            gap: 48px;
            animation: marqueeScroll 30s linear infinite;
            width: max-content;
        }
        .marquee-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: var(--text-light);
            font-size: 0.85rem;
            font-weight: 600;
            white-space: nowrap;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .marquee-item .dot {
            width: 6px; height: 6px;
            background: var(--green);
            border-radius: 50%;
        }
        @keyframes marqueeScroll {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        /* ========== SECTIONS ========== */
        .section { padding: 100px 0; }
        .section-sm { padding: 70px 0; }

        .section-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            color: var(--blue);
            margin-bottom: 14px;
        }
        .section-tag::before {
            content: '';
            width: 20px; height: 2px;
            background: var(--blue);
            border-radius: 2px;
        }

        .section-title {
            font-family: 'Instrument Serif', serif;
            font-size: 2.8rem;
            font-weight: 400;
            line-height: 1.15;
            margin-bottom: 16px;
            letter-spacing: -0.01em;
        }
        .section-title em { font-style: italic; color: var(--green); }

        .section-desc {
            font-size: 1.05rem;
            color: var(--text-mid);
            max-width: 560px;
            line-height: 1.75;
        }

        .section-head-center {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 56px;
        }
        .section-head-center .section-desc { margin: 0 auto; }

        /* ========== SERVICES — BENTO GRID ========== */
        .services-bento {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-template-rows: auto auto;
            gap: 16px;
        }
        .svc-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px 26px 28px;
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
        }
        .svc-card::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0; right: 0;
            height: 3px;
            background: linear-gradient(90deg, var(--blue), var(--green));
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.4s;
        }
        .svc-card:hover::after { transform: scaleX(1); }
        .svc-card:hover { border-color: var(--blue); box-shadow: 0 8px 32px rgba(11,95,165,0.08); transform: translateY(-4px); }
        .svc-card-wide { grid-column: span 2; display: grid; grid-template-columns: 1fr 1fr; gap: 24px; align-items: center; }
        .svc-card-wide .svc-img { border-radius: 12px; overflow: hidden; height: 100%; min-height: 160px; }
        .svc-card-wide .svc-img img { width: 100%; height: 100%; object-fit: cover; }
        .svc-icon {
            width: 50px; height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-bottom: 18px;
            background: linear-gradient(135deg, rgba(11,95,165,0.08), rgba(46,174,109,0.08));
            color: var(--blue);
        }
        .svc-card h3 {
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 8px;
            color: var(--text);
        }
        .svc-card p {
            font-size: 0.88rem;
            color: var(--text-mid);
            line-height: 1.65;
        }

        /* ========== WHY US — SPLIT ========== */
        .why-split {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 80px;
            align-items: center;
        }
        .why-left .section-tag { margin-bottom: 12px; }

        .why-list { display: flex; flex-direction: column; gap: 0; margin-top: 32px; }
        .why-item {
            display: flex;
            gap: 18px;
            padding: 22px 0;
            border-bottom: 1px solid var(--border);
            transition: all 0.25s;
        }
        .why-item:last-child { border-bottom: none; }
        .why-item:hover { padding-left: 8px; }
        .why-num {
            flex-shrink: 0;
            width: 40px; height: 40px;
            border-radius: 10px;
            background: var(--off-white);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            color: var(--blue);
            border: 1px solid var(--border);
            transition: all 0.25s;
        }
        .why-item:hover .why-num {
            background: var(--blue);
            color: var(--white);
            border-color: var(--blue);
        }
        .why-item h4 { font-size: 1rem; font-weight: 700; margin-bottom: 4px; }
        .why-item p { font-size: 0.88rem; color: var(--text-mid); }

        .why-right {
            position: relative;
        }
        .why-img-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }
        .why-img-grid img {
            width: 100%;
            border-radius: var(--radius);
            object-fit: cover;
        }
        .why-img-grid img:nth-child(1) { height: 260px; }
        .why-img-grid img:nth-child(2) { height: 260px; margin-top: 40px; }
        .why-img-grid img:nth-child(3) { height: 200px; grid-column: span 2; }

        .why-float {
            position: absolute;
            bottom: 40px;
            left: -30px;
            background: var(--white);
            border-radius: 14px;
            padding: 20px 24px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.1);
            display: flex;
            align-items: center;
            gap: 14px;
            border: 1px solid var(--border);
        }
        .why-float-icon {
            width: 46px; height: 46px;
            border-radius: 50%;
            background: var(--green-pale);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--green);
            font-size: 1.1rem;
        }
        .why-float h5 { font-size: 0.92rem; font-weight: 700; }
        .why-float p { font-size: 0.78rem; color: var(--text-light); }

        /* ========== INSURANCE PRODUCTS ========== */
        .products-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .prod-card {
            border: 1px solid var(--border);
            border-radius: var(--radius);
            overflow: hidden;
            background: var(--white);
            transition: all 0.35s;
        }
        .prod-card:hover { box-shadow: 0 16px 48px rgba(0,0,0,0.08); transform: translateY(-6px); border-color: transparent; }
        .prod-card-top {
            position: relative;
            height: 190px;
            overflow: hidden;
        }
        .prod-card-top img {
            width: 100%; height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .prod-card:hover .prod-card-top img { transform: scale(1.06); }
        .prod-badge {
            position: absolute;
            top: 14px; left: 14px;
            padding: 5px 12px;
            border-radius: 6px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .prod-badge.blue { background: var(--blue); color: var(--white); }
        .prod-badge.green { background: var(--green); color: var(--white); }
        .prod-badge.teal { background: var(--teal); color: var(--white); }
        .prod-card-body { padding: 26px; }
        .prod-card-body h3 {
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .prod-card-body p {
            font-size: 0.88rem;
            color: var(--text-mid);
            line-height: 1.65;
            margin-bottom: 18px;
        }
        .prod-features {
            list-style: none;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 6px 12px;
            margin-bottom: 22px;
        }
        .prod-features li {
            font-size: 0.82rem;
            color: var(--text-mid);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        .prod-features li i { color: var(--green); font-size: 0.7rem; }
        .prod-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            background: var(--off-white);
            border: 1px solid var(--border);
            border-radius: 10px;
            color: var(--blue);
            font-weight: 600;
            font-size: 0.85rem;
            text-decoration: none;
            transition: all 0.25s;
        }
        .prod-link:hover {
            background: var(--blue);
            color: var(--white);
            border-color: var(--blue);
        }

        /* ========== PROCESS ========== */
        .process-section { background: var(--navy); overflow: hidden; }
        .process-track {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
            position: relative;
        }
        .process-track::before {
            content: '';
            position: absolute;
            top: 44px;
            left: 10%;
            right: 10%;
            height: 2px;
            background: rgba(255,255,255,0.08);
        }
        .proc-step {
            text-align: center;
            padding: 0 20px;
            position: relative;
        }
        .proc-num {
            width: 56px; height: 56px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.15rem;
            margin: 0 auto 20px;
            position: relative;
            z-index: 2;
            transition: all 0.3s;
        }
        .proc-num.n1 { background: var(--blue); color: var(--white); }
        .proc-num.n2 { background: rgba(11,95,165,0.3); color: var(--blue-light); border: 2px solid var(--blue); }
        .proc-num.n3 { background: rgba(46,174,109,0.3); color: var(--green-light); border: 2px solid var(--green); }
        .proc-num.n4 { background: var(--green); color: var(--white); }
        .proc-step:hover .proc-num { transform: scale(1.15); }
        .proc-step h4 {
            color: var(--white);
            font-size: 1.05rem;
            font-weight: 700;
            margin-bottom: 8px;
        }
        .proc-step p {
            color: rgba(255,255,255,0.45);
            font-size: 0.85rem;
            line-height: 1.65;
        }

        /* ========== TESTIMONIALS ========== */
        .test-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .test-card {
            background: var(--white);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 32px;
            transition: all 0.3s;
            position: relative;
        }
        .test-card:hover { box-shadow: 0 8px 32px rgba(0,0,0,0.06); transform: translateY(-4px); }
        .test-card::before {
            content: '\201C';
            position: absolute;
            top: 16px; right: 24px;
            font-family: 'Instrument Serif', serif;
            font-size: 4rem;
            color: var(--border);
            line-height: 1;
        }
        .test-stars { margin-bottom: 16px; }
        .test-stars i { color: #F59E0B; font-size: 0.82rem; }
        .test-card blockquote {
            font-size: 0.92rem;
            color: var(--text-mid);
            line-height: 1.75;
            margin-bottom: 24px;
        }
        .test-author {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .test-avatar {
            width: 44px; height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--white);
        }
        .test-avatar.bg1 { background: var(--blue); }
        .test-avatar.bg2 { background: var(--green); }
        .test-avatar.bg3 { background: var(--teal); }
        .test-author h5 { font-size: 0.9rem; font-weight: 700; }
        .test-author p { font-size: 0.78rem; color: var(--text-light); }

        /* ========== CTA BANNER ========== */
        .cta-banner {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            background: linear-gradient(135deg, var(--navy) 0%, var(--blue-deep) 40%, var(--blue) 100%);
            padding: 72px 64px;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }
        .cta-banner::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 300px; height: 300px;
            border-radius: 50%;
            background: rgba(46,174,109,0.15);
        }
        .cta-banner::after {
            content: '';
            position: absolute;
            bottom: -60px; left: 30%;
            width: 200px; height: 200px;
            border-radius: 50%;
            background: rgba(14,165,161,0.1);
        }
        .cta-left { position: relative; z-index: 2; }
        .cta-banner h2 {
            font-family: 'Instrument Serif', serif;
            font-size: 2.6rem;
            color: var(--white);
            line-height: 1.15;
            margin-bottom: 14px;
        }
        .cta-banner p {
            color: rgba(255,255,255,0.6);
            font-size: 1rem;
            line-height: 1.7;
            margin-bottom: 32px;
            max-width: 460px;
        }
        .cta-btns { display: flex; gap: 12px; flex-wrap: wrap; position: relative; z-index: 2; }
        .btn-wa {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            background: #25D366;
            color: var(--white);
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.25s;
        }
        .btn-wa:hover { background: #1EBE57; transform: translateY(-2px); box-shadow: 0 8px 28px rgba(37,211,102,0.35); }
        .btn-call {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 15px 30px;
            background: rgba(255,255,255,0.1);
            color: var(--white);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.25s;
        }
        .btn-call:hover { background: rgba(255,255,255,0.18); }

        .cta-right {
            position: relative;
            z-index: 2;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        .cta-info-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 18px 22px;
            background: rgba(255,255,255,0.06);
            border: 1px solid rgba(255,255,255,0.08);
            border-radius: 14px;
            backdrop-filter: blur(10px);
        }
        .cta-info-icon {
            width: 42px; height: 42px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }
        .cta-info-icon.blue { background: rgba(11,95,165,0.3); color: var(--blue-light); }
        .cta-info-icon.green { background: rgba(46,174,109,0.3); color: var(--green-light); }
        .cta-info-icon.teal { background: rgba(14,165,161,0.3); color: var(--teal); }
        .cta-info-card h5 { color: var(--white); font-size: 0.9rem; font-weight: 600; }
        .cta-info-card p { color: rgba(255,255,255,0.5); font-size: 0.82rem; }

        /* ========== FOOTER ========== */
        .footer { background: var(--charcoal); padding: 72px 0 0; }
        .footer-top {
            display: grid;
            grid-template-columns: 1.6fr 1fr 1fr 1.2fr;
            gap: 48px;
            padding-bottom: 48px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .footer-brand img { height: 48px; margin-bottom: 16px; }
        .footer-brand p {
            color: rgba(255,255,255,0.45);
            font-size: 0.88rem;
            line-height: 1.7;
            margin-bottom: 20px;
            max-width: 300px;
        }
        .footer-socials { display: flex; gap: 8px; }
        .footer-socials a {
            width: 38px; height: 38px;
            border-radius: 10px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.5);
            font-size: 0.9rem;
            text-decoration: none;
            transition: all 0.25s;
        }
        .footer-socials a:hover { background: var(--blue); color: var(--white); border-color: var(--blue); }
        .footer h4 {
            color: var(--white);
            font-size: 0.82rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            margin-bottom: 20px;
        }
        .footer-links { list-style: none; }
        .footer-links li { margin-bottom: 10px; }
        .footer-links a {
            color: rgba(255,255,255,0.45);
            text-decoration: none;
            font-size: 0.88rem;
            transition: all 0.2s;
        }
        .footer-links a:hover { color: var(--green-light); padding-left: 4px; }
        .footer-contact li {
            display: flex;
            gap: 12px;
            margin-bottom: 14px;
            color: rgba(255,255,255,0.45);
            font-size: 0.88rem;
        }
        .footer-contact li i { color: var(--green); margin-top: 3px; font-size: 0.85rem; width: 14px; }
        .footer-bottom {
            padding: 22px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: rgba(255,255,255,0.3);
            font-size: 0.82rem;
        }

        /* ========== WHATSAPP FLOAT ========== */
        .wa-float {
            position: fixed;
            bottom: 28px;
            right: 28px;
            z-index: 999;
        }
        .wa-float-btn {
            width: 60px; height: 60px;
            border-radius: 50%;
            background: #25D366;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.8rem;
            text-decoration: none;
            box-shadow: 0 4px 24px rgba(37,211,102,0.4);
            transition: all 0.3s;
            position: relative;
        }
        .wa-float-btn:hover { transform: scale(1.1); box-shadow: 0 6px 32px rgba(37,211,102,0.5); }
        .wa-float-btn::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid rgba(37,211,102,0.3);
            animation: waPing 2s infinite;
        }
        @keyframes waPing {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.5); opacity: 0; }
        }
        .wa-label {
            position: absolute;
            right: 70px;
            top: 50%;
            transform: translateY(-50%);
            background: var(--white);
            color: var(--text);
            padding: 8px 16px;
            border-radius: 10px;
            font-size: 0.82rem;
            font-weight: 600;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s;
        }
        .wa-float:hover .wa-label { opacity: 1; }

        /* ========== SCROLLTOP ========== */
        .scroll-top {
            position: fixed;
            bottom: 28px;
            left: 28px;
            width: 44px; height: 44px;
            border-radius: 12px;
            background: var(--white);
            border: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text);
            font-size: 0.9rem;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
        }
        .scroll-top.show { opacity: 1; visibility: visible; transform: translateY(0); }
        .scroll-top:hover { background: var(--blue); color: var(--white); border-color: var(--blue); }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 1024px) {
            .hero h1 { font-size: 3.2rem; }
            .hero-layout { gap: 40px; }
            .services-bento { grid-template-columns: repeat(2, 1fr); }
            .svc-card-wide { grid-column: span 2; }
            .products-grid { grid-template-columns: repeat(2, 1fr); }
            .footer-top { grid-template-columns: repeat(2, 1fr); }
            .cta-banner { grid-template-columns: 1fr; padding: 48px 36px; }
        }

        @media (max-width: 768px) {
            .topbar { display: none; }
            .nav-links, .nav-cta-wrap .nav-phone { display: none; }
            .mobile-toggle { display: flex; }

            .nav-links.active {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0; right: 0;
                background: var(--white);
                padding: 16px 24px;
                box-shadow: 0 12px 32px rgba(0,0,0,0.08);
                gap: 0;
            }
            .nav-links.active a { padding: 12px 0; width: 100%; }

            .hero { min-height: auto; padding: 40px 0; }
            .hero-layout { grid-template-columns: 1fr; gap: 40px; }
            .hero h1 { font-size: 2.5rem; }
            .hero-bento { display: none; }

            .section { padding: 64px 0; }
            .section-title { font-size: 2rem; }

            .services-bento { grid-template-columns: 1fr; }
            .svc-card-wide { grid-column: span 1; grid-template-columns: 1fr; }
            .svc-card-wide .svc-img { min-height: 160px; }

            .why-split { grid-template-columns: 1fr; gap: 40px; }
            .why-img-grid { display: none; }
            .why-float { display: none; }

            .products-grid { grid-template-columns: 1fr; }
            .prod-features { grid-template-columns: 1fr; }

            .process-track { grid-template-columns: repeat(2, 1fr); gap: 32px; }
            .process-track::before { display: none; }

            .test-grid { grid-template-columns: 1fr; }

            .cta-banner { padding: 40px 24px; border-radius: 18px; }
            .cta-banner h2 { font-size: 2rem; }

            .footer-top { grid-template-columns: 1fr; gap: 32px; }
            .footer-bottom { flex-direction: column; gap: 8px; text-align: center; }
        }

        @media (max-width: 480px) {
            .hero h1 { font-size: 2rem; }
            .hero-metrics { grid-template-columns: 1fr; }
            .hero-actions { flex-direction: column; }
            .process-track { grid-template-columns: 1fr; }
        }

        /* ========== ANIMATIONS ========== */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }
    </style>
</head>
<body>

<!-- TOPBAR -->
<div class="topbar">
    <div class="container">
        <div class="topbar-left">
            <span><i class="fas fa-envelope"></i> info@insura360.com</span>
            <span><i class="fas fa-clock"></i> Mon - Fri: 9AM - 6PM</span>
        </div>
        <div class="topbar-right">
            <span><i class="fas fa-phone"></i> <a href="tel:+60123456789">+60 12-345 6789</a></span>
        </div>
    </div>
</div>

<!-- NAVBAR -->
<nav class="navbar" id="navbar">
    <div class="container">
        <a href="#" class="nav-logo"><img src="Insura360 logo.webp" alt="Insura360"></a>
        <ul class="nav-links" id="navLinks">
            <li><a href="#services">Services</a></li>
            <li><a href="#why-us">Why Us</a></li>
            <li><a href="#products">Insurance</a></li>
            <li><a href="#process">Process</a></li>
            <li><a href="#testimonials">Testimonials</a></li>
        </ul>
        <div class="nav-cta-wrap">
            <a href="tel:+60123456789" class="nav-phone"><i class="fas fa-phone"></i> +60 12-345 6789</a>
            <a href="https://wa.me/60123456789?text=Hi%20Insura360%2C%20I%20would%20like%20a%20free%20quote." class="nav-btn" target="_blank"><i class="fab fa-whatsapp"></i> Get a Quote</a>
        </div>
        <button class="mobile-toggle" id="mobileToggle" aria-label="Menu"><i class="fas fa-bars"></i></button>
    </div>
</nav>

<!-- HERO -->
<section class="hero" id="home">
    <div class="hero-bg"></div>
    <div class="hero-noise"></div>
    <div class="hero-grid-lines"></div>
    <div class="container">
        <div class="hero-layout">
            <div>
                <div class="hero-eyebrow">
                    <div class="hero-eyebrow-dot"></div>
                    Licensed Insurance Advisory
                    <span>Since 2005</span>
                </div>
                <h1>Smarter Insurance.<br>Total <em>Protection.</em></h1>
                <p class="hero-sub">We help individuals and businesses across Malaysia find the right coverage at the right price — with expert guidance every step of the way.</p>
                <div class="hero-actions">
                    <a href="https://wa.me/60123456789?text=Hi%20Insura360%2C%20I%20need%20insurance%20advice." class="btn-hero-primary" target="_blank"><i class="fab fa-whatsapp"></i> Talk to an Advisor</a>
                    <a href="#products" class="btn-hero-secondary"><i class="fas fa-th-large"></i> View All Plans</a>
                </div>
                <div class="hero-metrics">
                    <div class="hero-metric">
                        <h3>15K<span>+</span></h3>
                        <p>Clients Covered</p>
                    </div>
                    <div class="hero-metric">
                        <h3>98<span>%</span></h3>
                        <p>Claims Success</p>
                    </div>
                    <div class="hero-metric">
                        <h3>20<span>+</span></h3>
                        <p>Years Active</p>
                    </div>
                </div>
            </div>
            <div class="hero-bento">
                <div class="bento-card bento-img">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=250&fit=crop" alt="Insurance consultation">
                </div>
                <div class="bento-card bento-featured">
                    <div class="bento-stat">360&deg;</div>
                    <div class="bento-stat-label">Full Spectrum Coverage</div>
                    <p style="margin-top: 10px;">Motor, property, health, travel, business &amp; more.</p>
                </div>
                <div class="bento-card">
                    <div class="bento-icon green"><i class="fas fa-bolt"></i></div>
                    <h4>Fast Claims</h4>
                    <p>Most claims settled within 24 – 48 hours.</p>
                </div>
                <div class="bento-card">
                    <div class="bento-icon blue"><i class="fas fa-handshake"></i></div>
                    <h4>Trusted Partners</h4>
                    <p>Panel of 20+ leading insurers &amp; takaful operators.</p>
                </div>
                <div class="bento-card bento-wide">
                    <div class="bento-icon teal"><i class="fas fa-shield-halved"></i></div>
                    <div>
                        <h4>Independent &amp; Unbiased</h4>
                        <p>We work for you, not the insurer. Transparent advice with zero hidden fees.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MARQUEE -->
<div class="marquee-strip">
    <div class="marquee-inner">
        <span class="marquee-item"><span class="dot"></span> Allianz</span>
        <span class="marquee-item"><span class="dot"></span> AIA</span>
        <span class="marquee-item"><span class="dot"></span> Zurich</span>
        <span class="marquee-item"><span class="dot"></span> Tokio Marine</span>
        <span class="marquee-item"><span class="dot"></span> Etiqa</span>
        <span class="marquee-item"><span class="dot"></span> AXA Affin</span>
        <span class="marquee-item"><span class="dot"></span> MSIG</span>
        <span class="marquee-item"><span class="dot"></span> Lonpac</span>
        <span class="marquee-item"><span class="dot"></span> RHB Insurance</span>
        <span class="marquee-item"><span class="dot"></span> Takaful Malaysia</span>
        <span class="marquee-item"><span class="dot"></span> Allianz</span>
        <span class="marquee-item"><span class="dot"></span> AIA</span>
        <span class="marquee-item"><span class="dot"></span> Zurich</span>
        <span class="marquee-item"><span class="dot"></span> Tokio Marine</span>
        <span class="marquee-item"><span class="dot"></span> Etiqa</span>
        <span class="marquee-item"><span class="dot"></span> AXA Affin</span>
        <span class="marquee-item"><span class="dot"></span> MSIG</span>
        <span class="marquee-item"><span class="dot"></span> Lonpac</span>
        <span class="marquee-item"><span class="dot"></span> RHB Insurance</span>
        <span class="marquee-item"><span class="dot"></span> Takaful Malaysia</span>
    </div>
</div>

<!-- SERVICES -->
<section class="section" id="services">
    <div class="container">
        <div class="section-head-center reveal">
            <div class="section-tag">What We Cover</div>
            <h2 class="section-title">Insurance solutions built around <em>your life</em></h2>
            <p class="section-desc">From your first car to your growing business — we've got a policy for every chapter.</p>
        </div>
        <div class="services-bento">
            <div class="svc-card svc-card-wide reveal">
                <div>
                    <div class="svc-icon"><i class="fas fa-car-side"></i></div>
                    <h3>Motor Insurance</h3>
                    <p>Comprehensive, third-party, and special perils coverage for private vehicles, motorcycles, and commercial fleets. Includes NCD protection and windscreen cover.</p>
                </div>
                <div class="svc-img">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0afe?w=400&h=250&fit=crop" alt="Motor Insurance">
                </div>
            </div>
            <div class="svc-card reveal reveal-delay-1">
                <div class="svc-icon"><i class="fas fa-fire-flame-curved"></i></div>
                <h3>Fire &amp; Property</h3>
                <p>Protect homes, offices, and industrial assets from fire, flood, and natural perils.</p>
            </div>
            <div class="svc-card reveal reveal-delay-2">
                <div class="svc-icon"><i class="fas fa-heart-pulse"></i></div>
                <h3>Health &amp; PA</h3>
                <p>Medical cards, hospitalisation, personal accident, and critical illness coverage.</p>
            </div>
            <div class="svc-card reveal reveal-delay-1">
                <div class="svc-icon"><i class="fas fa-briefcase"></i></div>
                <h3>Business &amp; Liability</h3>
                <p>Public liability, workmen comp, professional indemnity, and fidelity guarantee.</p>
            </div>
            <div class="svc-card reveal reveal-delay-2">
                <div class="svc-icon"><i class="fas fa-plane-departure"></i></div>
                <h3>Travel Insurance</h3>
                <p>Medical emergencies, trip cancellation, and lost baggage — travel worry-free.</p>
            </div>
            <div class="svc-card reveal reveal-delay-3">
                <div class="svc-icon"><i class="fas fa-helmet-safety"></i></div>
                <h3>Engineering &amp; CAR</h3>
                <p>Contractor all risk, erection all risk, and machinery breakdown policies.</p>
            </div>
            <div class="svc-card reveal reveal-delay-4">
                <div class="svc-icon"><i class="fas fa-ship"></i></div>
                <h3>Marine &amp; Cargo</h3>
                <p>Hull, cargo, and goods-in-transit protection for local and international shipping.</p>
            </div>
        </div>
    </div>
</section>

<!-- WHY US -->
<section class="section" id="why-us" style="background: var(--off-white);">
    <div class="container">
        <div class="why-split">
            <div class="why-left reveal">
                <div class="section-tag">Why Insura360</div>
                <h2 class="section-title">Not just a policy.<br>A <em>partnership.</em></h2>
                <p class="section-desc">We take the time to understand your risks, compare options across insurers, and stay with you long after the policy is signed.</p>
                <div class="why-list">
                    <div class="why-item">
                        <div class="why-num">01</div>
                        <div>
                            <h4>Personalised Risk Assessment</h4>
                            <p>Every client gets a custom analysis — no cookie-cutter recommendations.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-num">02</div>
                        <div>
                            <h4>Claims Advocacy</h4>
                            <p>We fight for your claim from filing to settlement. 98% success rate.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-num">03</div>
                        <div>
                            <h4>Best Market Pricing</h4>
                            <p>Access to 20+ insurers means we always find you the most competitive rates.</p>
                        </div>
                    </div>
                    <div class="why-item">
                        <div class="why-num">04</div>
                        <div>
                            <h4>Always Available</h4>
                            <p>WhatsApp, call, or email — we respond fast, even on weekends for emergencies.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-right reveal reveal-delay-2">
                <div class="why-img-grid">
                    <img src="https://images.unsplash.com/photo-1521791136064-7986c2920216?w=400&h=350&fit=crop" alt="Handshake">
                    <img src="https://images.unsplash.com/photo-1553484771-047a44eee27b?w=400&h=350&fit=crop" alt="Advisory team">
                    <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&h=280&fit=crop" alt="Happy client">
                </div>
                <div class="why-float">
                    <div class="why-float-icon"><i class="fas fa-star"></i></div>
                    <div>
                        <h5>4.9 / 5.0 Rating</h5>
                        <p>Based on 2,400+ client reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INSURANCE PRODUCTS -->
<section class="section" id="products">
    <div class="container">
        <div class="section-head-center reveal">
            <div class="section-tag">Insurance Plans</div>
            <h2 class="section-title">Find the right plan for <em>you</em></h2>
            <p class="section-desc">Browse our most popular insurance products. Can't find what you need? Chat with us — we cover it all.</p>
        </div>
        <div class="products-grid">
            <div class="prod-card reveal">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=500&h=300&fit=crop" alt="Motor Insurance">
                    <span class="prod-badge blue">Most Popular</span>
                </div>
                <div class="prod-card-body">
                    <h3>Motor Insurance</h3>
                    <p>Full protection for your vehicle — from road accidents to natural perils.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> Comprehensive Cover</li>
                        <li><i class="fas fa-check"></i> Windscreen Protection</li>
                        <li><i class="fas fa-check"></i> Special Perils</li>
                        <li><i class="fas fa-check"></i> NCD Protect</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Motor%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="prod-card reveal reveal-delay-1">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=500&h=300&fit=crop" alt="Property Insurance">
                    <span class="prod-badge green">Essential</span>
                </div>
                <div class="prod-card-body">
                    <h3>Property &amp; Fire</h3>
                    <p>Shield your property from fire, flood, and unforeseen natural disasters.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> Fire &amp; Allied Perils</li>
                        <li><i class="fas fa-check"></i> Houseowner Cover</li>
                        <li><i class="fas fa-check"></i> Industrial All Risk</li>
                        <li><i class="fas fa-check"></i> Business Interruption</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Property%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="prod-card reveal reveal-delay-2">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?w=500&h=300&fit=crop" alt="Health Insurance">
                    <span class="prod-badge teal">Recommended</span>
                </div>
                <div class="prod-card-body">
                    <h3>Health &amp; Personal Accident</h3>
                    <p>Medical cards, PA cover, and critical illness protection for your family.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> Medical Card</li>
                        <li><i class="fas fa-check"></i> Personal Accident</li>
                        <li><i class="fas fa-check"></i> Group H&amp;S</li>
                        <li><i class="fas fa-check"></i> Critical Illness</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Health%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="prod-card reveal">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=500&h=300&fit=crop" alt="Business Insurance">
                </div>
                <div class="prod-card-body">
                    <h3>Business &amp; Liability</h3>
                    <p>Protect your business ops with tailored commercial insurance solutions.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> Public Liability</li>
                        <li><i class="fas fa-check"></i> Workmen Comp</li>
                        <li><i class="fas fa-check"></i> Prof. Indemnity</li>
                        <li><i class="fas fa-check"></i> Fidelity Guarantee</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Business%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="prod-card reveal reveal-delay-1">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1436491865332-7a61a109db05?w=500&h=300&fit=crop" alt="Travel Insurance">
                </div>
                <div class="prod-card-body">
                    <h3>Travel Insurance</h3>
                    <p>Fly with confidence — medical, cancellation, and baggage cover worldwide.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> Overseas Medical</li>
                        <li><i class="fas fa-check"></i> Trip Cancellation</li>
                        <li><i class="fas fa-check"></i> Lost Baggage</li>
                        <li><i class="fas fa-check"></i> Annual / Single Trip</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Travel%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="prod-card reveal reveal-delay-2">
                <div class="prod-card-top">
                    <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=500&h=300&fit=crop" alt="Engineering Insurance">
                </div>
                <div class="prod-card-body">
                    <h3>Engineering &amp; Contractor</h3>
                    <p>Specialised cover for construction projects, machinery, and engineering works.</p>
                    <ul class="prod-features">
                        <li><i class="fas fa-check"></i> CAR / EAR</li>
                        <li><i class="fas fa-check"></i> Machinery Breakdown</li>
                        <li><i class="fas fa-check"></i> Performance Bond</li>
                        <li><i class="fas fa-check"></i> Boiler &amp; Pressure</li>
                    </ul>
                    <a href="https://wa.me/60123456789?text=Hi%2C%20I%27m%20interested%20in%20Engineering%20Insurance." class="prod-link" target="_blank">Get Quote <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="section process-section" id="process">
    <div class="container">
        <div class="section-head-center reveal">
            <div class="section-tag" style="color: var(--green-light);">How It Works</div>
            <h2 class="section-title" style="color: var(--white);">Get covered in <em>4 easy steps</em></h2>
            <p class="section-desc" style="color: rgba(255,255,255,0.5);">Our process is designed to be simple, fast, and transparent — so you spend less time on paperwork and more time living.</p>
        </div>
        <div class="process-track">
            <div class="proc-step reveal">
                <div class="proc-num n1">01</div>
                <h4>Reach Out</h4>
                <p>WhatsApp us or fill out our quick enquiry form with your basic details.</p>
            </div>
            <div class="proc-step reveal reveal-delay-1">
                <div class="proc-num n2">02</div>
                <h4>Free Consultation</h4>
                <p>Our advisor reviews your needs and recommends the best-fit coverage.</p>
            </div>
            <div class="proc-step reveal reveal-delay-2">
                <div class="proc-num n3">03</div>
                <h4>Compare Quotes</h4>
                <p>We present competitive quotes from multiple insurers — you choose.</p>
            </div>
            <div class="proc-step reveal reveal-delay-3">
                <div class="proc-num n4">04</div>
                <h4>Get Protected</h4>
                <p>Sign, pay, and receive your policy. You're officially covered!</p>
            </div>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="section" id="testimonials">
    <div class="container">
        <div class="section-head-center reveal">
            <div class="section-tag">Client Stories</div>
            <h2 class="section-title">Trusted by thousands across <em>Malaysia</em></h2>
            <p class="section-desc">Real feedback from real clients who trust Insura360 with their protection.</p>
        </div>
        <div class="test-grid">
            <div class="test-card reveal">
                <div class="test-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote>"My motor claim was settled in under 48 hours. The team handled everything — I didn't have to chase a single document. Incredible service."</blockquote>
                <div class="test-author">
                    <div class="test-avatar bg1">AH</div>
                    <div><h5>Ahmad Hakim</h5><p>Business Owner, Kuala Lumpur</p></div>
                </div>
            </div>
            <div class="test-card reveal reveal-delay-1">
                <div class="test-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote>"I've been with Insura360 for 5 years. They always find better rates during renewals and their WhatsApp support is genuinely responsive."</blockquote>
                <div class="test-author">
                    <div class="test-avatar bg2">SL</div>
                    <div><h5>Sarah Lim</h5><p>HR Manager, Penang</p></div>
                </div>
            </div>
            <div class="test-card reveal reveal-delay-2">
                <div class="test-stars"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                <blockquote>"They restructured our entire company insurance portfolio and saved us 30%. Professional, transparent, and genuinely client-focused."</blockquote>
                <div class="test-author">
                    <div class="test-avatar bg3">RK</div>
                    <div><h5>Raj Kumar</h5><p>CEO, Tech Startup</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-sm" id="contact">
    <div class="container">
        <div class="cta-banner reveal">
            <div class="cta-left">
                <h2>Ready to protect what matters?</h2>
                <p>Get a free, no-obligation quote from our insurance advisors. We respond within minutes during business hours.</p>
                <div class="cta-btns">
                    <a href="https://wa.me/60123456789?text=Hi%20Insura360%2C%20I%20would%20like%20a%20free%20quote." class="btn-wa" target="_blank"><i class="fab fa-whatsapp"></i> WhatsApp Us Now</a>
                    <a href="tel:+60123456789" class="btn-call"><i class="fas fa-phone"></i> Call Us</a>
                </div>
            </div>
            <div class="cta-right">
                <div class="cta-info-card">
                    <div class="cta-info-icon green"><i class="fas fa-clock"></i></div>
                    <div><h5>Quick Response</h5><p>Average reply within 5 minutes</p></div>
                </div>
                <div class="cta-info-card">
                    <div class="cta-info-icon blue"><i class="fas fa-file-contract"></i></div>
                    <div><h5>Free Quotation</h5><p>No obligation, no hidden charges</p></div>
                </div>
                <div class="cta-info-card">
                    <div class="cta-info-icon teal"><i class="fas fa-headset"></i></div>
                    <div><h5>Expert Advice</h5><p>20+ years of industry experience</p></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="footer-brand">
                <img src="Insura360 logo.webp" alt="Insura360">
                <p>Your trusted partner for comprehensive general insurance solutions across Malaysia. Expert advisory, competitive rates, and genuine care.</p>
                <div class="footer-socials">
                    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
                </div>
            </div>
            <div>
                <h4>Company</h4>
                <ul class="footer-links">
                    <li><a href="#services">Our Services</a></li>
                    <li><a href="#why-us">Why Choose Us</a></li>
                    <li><a href="#products">Insurance Plans</a></li>
                    <li><a href="#process">How It Works</a></li>
                    <li><a href="#testimonials">Testimonials</a></li>
                </ul>
            </div>
            <div>
                <h4>Insurance</h4>
                <ul class="footer-links">
                    <li><a href="#">Motor Insurance</a></li>
                    <li><a href="#">Fire &amp; Property</a></li>
                    <li><a href="#">Health &amp; PA</a></li>
                    <li><a href="#">Travel Insurance</a></li>
                    <li><a href="#">Business Insurance</a></li>
                    <li><a href="#">Marine &amp; Cargo</a></li>
                </ul>
            </div>
            <div>
                <h4>Get In Touch</h4>
                <ul class="footer-links footer-contact">
                    <li><i class="fas fa-map-marker-alt"></i><span>Kuala Lumpur, Malaysia</span></li>
                    <li><i class="fas fa-phone"></i><span>+60 12-345 6789</span></li>
                    <li><i class="fas fa-envelope"></i><span>info@insura360.com</span></li>
                    <li><i class="fas fa-clock"></i><span>Mon – Fri: 9AM – 6PM<br>Sat: 9AM – 1PM</span></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <span>&copy; <?php echo date('Y'); ?> Insura360 Risk Advisory. All Rights Reserved.</span>
            <span>Kuala Lumpur, Malaysia</span>
        </div>
    </div>
</footer>

<!-- WHATSAPP FLOAT -->
<div class="wa-float">
    <span class="wa-label">Need help? Chat with us!</span>
    <a href="https://wa.me/60123456789?text=Hi%20Insura360%2C%20I%20would%20like%20to%20enquire%20about%20insurance." class="wa-float-btn" target="_blank" rel="noopener" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
</div>

<!-- SCROLL TOP -->
<button class="scroll-top" id="scrollTop" aria-label="Scroll to top"><i class="fas fa-arrow-up"></i></button>

<script>
// Navbar shadow on scroll
const navbar = document.getElementById('navbar');
const scrollBtn = document.getElementById('scrollTop');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('shadow', window.scrollY > 10);
    scrollBtn.classList.toggle('show', window.scrollY > 500);
});

// Scroll to top
scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

// Mobile menu
const toggle = document.getElementById('mobileToggle');
const links = document.getElementById('navLinks');
toggle.addEventListener('click', () => links.classList.toggle('active'));
links.querySelectorAll('a').forEach(a => a.addEventListener('click', () => links.classList.remove('active')));

// Smooth scroll
document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const t = document.querySelector(a.getAttribute('href'));
        if (t) t.scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
});

// Scroll reveal
const revealEls = document.querySelectorAll('.reveal');
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
revealEls.forEach(el => revealObserver.observe(el));

// Counter animation
const animateCounters = () => {
    document.querySelectorAll('.hero-metric h3').forEach(el => {
        const text = el.textContent;
        const match = text.match(/(\d+)/);
        if (!match) return;
        const target = parseInt(match[0]);
        const suffix = el.querySelector('span')?.textContent || '';
        const prefix = text.split(match[0])[0];
        let current = 0;
        const step = target / 50;
        const timer = setInterval(() => {
            current += step;
            if (current >= target) { current = target; clearInterval(timer); }
            el.innerHTML = prefix + Math.floor(current) + '<span>' + suffix + '</span>';
        }, 30);
    });
};
const metricsObs = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) { animateCounters(); metricsObs.disconnect(); }
    });
}, { threshold: 0.5 });
const metricsEl = document.querySelector('.hero-metrics');
if (metricsEl) metricsObs.observe(metricsEl);
</script>
</body>
</html>
