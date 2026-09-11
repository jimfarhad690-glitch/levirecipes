<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Levi Recipes - Authentic German Food, Heritage Recipes & Culinary Guides</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Discover authentic German recipes, traditional Bavarian classics, artisanal breads, hearty stews, and decadent desserts. Tested step-by-step guides with nutrition facts, ingredient scalers, and cultural heritage tips.">
    <meta name="keywords" content="German recipes, authentic German food, Bavarian cooking, Wiener Schnitzel, Käsespätzle, Black Forest Cake, Brezeln, Sauerbraten, German baking, Oktoberfest food">
    <meta name="author" content="Levi Recipes Culinary Team">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://levirecipes-3a4d6a324731.herokuapp.com/">

    <!-- Open Graph / Social Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://levirecipes-3a4d6a324731.herokuapp.com/">
    <meta property="og:title" content="Levi Recipes | Authentic German Food & Heritage Recipes">
    <meta property="og:description" content="Master traditional German cooking with time-tested family recipes, step-by-step photos, portion scaling, and authentic culinary techniques.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1200&q=80">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Levi Recipes - Authentic German Food & Heritage Recipes">
    <meta name="twitter:description" content="Traditional German cuisine made simple: Schnitzel, Spätzle, Sauerbraten, Pretzels, Strudels, and more.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1200&q=80">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,700;0,900;1,400;1,700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- JSON-LD Structured Data for Google AdSense & SEO compliance -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "https://levirecipes-3a4d6a324731.herokuapp.com/#website",
          "url": "https://levirecipes-3a4d6a324731.herokuapp.com/",
          "name": "Levi Recipes - German Culinary Heritage",
          "description": "Authentic, tested German recipes and culinary techniques from Bavaria, Swabia, Rhineland, and the Black Forest.",
          "publisher": {
            "@type": "Organization",
            "name": "Levi Recipes",
            "url": "https://levirecipes-3a4d6a324731.herokuapp.com/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://levirecipes-3a4d6a324731.herokuapp.com/logo.png"
            }
          }
        },
        {
          "@type": "Organization",
          "@id": "https://levirecipes-3a4d6a324731.herokuapp.com/#organization",
          "name": "Levi Recipes",
          "url": "https://levirecipes-3a4d6a324731.herokuapp.com/",
          "sameAs": [
            "https://facebook.com/levirecipes",
            "https://pinterest.com/levirecipes",
            "https://instagram.com/levirecipes"
          ]
        },
        {
          "@type": "Recipe",
          "name": "Authentic Wiener Schnitzel vom Kalb",
          "image": "https://images.unsplash.com/photo-1599921841143-819065a55cc6?auto=format&fit=crop&w=1000&q=80",
          "author": {
            "@type": "Person",
            "name": "Chef Levi Becker"
          },
          "datePublished": "2025-01-15",
          "description": "Crispy, golden-brown pan-fried veal cutlet souffléd to perfection according to traditional Viennese and Bavarian culinary heritage.",
          "prepTime": "PT20M",
          "cookTime": "PT15M",
          "totalTime": "PT35M",
          "recipeYield": "4 servings",
          "recipeCategory": "Main Course",
          "recipeCuisine": "German",
          "nutrition": {
            "@type": "NutritionInformation",
            "calories": "580 calories",
            "proteinContent": "42g",
            "fatContent": "28g",
            "carbohydrateContent": "38g"
          }
        }
      ]
    }
    </script>




    <style>
        :root {
            --primary: #9b2226;
            --primary-dark: #671417;
            --primary-light: #ae2012;
            --secondary: #bb3e03;
            --amber: #ee9b00;
            --amber-light: #ca6702;
            --dark: #0a0908;
            --dark-surface: #14120f;
            --slate-800: #1e1b18;
            --slate-700: #2d2925;
            --border-color: #38332d;
            --text-main: #f4ede4;
            --text-muted: #b5a99a;
            --cream-bg: #0d0c0b;
            --card-bg: #191613;
            --card-hover: #221e1a;
            --accent-green: #2d6a4f;
            --shadow-sm: 0 2px 8px rgba(0, 0, 0, 0.4);
            --shadow-md: 0 8px 24px rgba(0, 0, 0, 0.55);
            --shadow-lg: 0 16px 40px rgba(0, 0, 0, 0.7);
            --radius-sm: 8px;
            --radius-md: 14px;
            --radius-lg: 20px;
            --radius-full: 9999px;
            --font-heading: 'Playfair Display', Georgia, serif;
            --font-body: 'Plus Jakarta Sans', system-ui, -apple-system, sans-serif;
            --transition: all 0.28s cubic-bezier(0.4, 0, 0.2, 1);
        }

        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            font-family: var(--font-body);
            background-color: var(--cream-bg);
            color: var(--text-main);
            line-height: 1.65;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
        }

        /* Container */
        .container {
            width: 100%;
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 1.5rem;
        }

        /* Typography */
        h1, h2, h3, h4, h5, h6 {
            font-family: var(--font-heading);
            color: #ffffff;
            line-height: 1.25;
            font-weight: 700;
        }

        p {
            margin-bottom: 1rem;
            color: var(--text-muted);
        }

        a {
            color: var(--amber);
            text-decoration: none;
            transition: var(--transition);
        }

        a:hover {
            color: #ffb703;
        }

        img {
            max-width: 100%;
            height: auto;
            display: block;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.6rem;
            font-family: var(--font-body);
            font-weight: 600;
            font-size: 0.95rem;
            border-radius: var(--radius-full);
            cursor: pointer;
            transition: var(--transition);
            border: none;
            outline: none;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            color: #ffffff;
            box-shadow: 0 4px 15px rgba(155, 34, 38, 0.4);
        }

        .btn-primary:hover {
            background: linear-gradient(135deg, var(--primary-light) 0%, var(--amber-light) 100%);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(155, 34, 38, 0.6);
            color: #ffffff;
        }

        .btn-outline {
            background: transparent;
            color: var(--text-main);
            border: 1.5px solid var(--border-color);
        }

        .btn-outline:hover {
            background: var(--slate-700);
            border-color: var(--amber);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-sm {
            padding: 0.45rem 1rem;
            font-size: 0.85rem;
        }

        /* Badges */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.3rem 0.75rem;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border-radius: var(--radius-full);
        }

        .badge-bavaria {
            background: rgba(238, 155, 0, 0.15);
            color: #ffb703;
            border: 1px solid rgba(238, 155, 0, 0.3);
        }

        .badge-traditional {
            background: rgba(155, 34, 38, 0.2);
            color: #ff6b6b;
            border: 1px solid rgba(155, 34, 38, 0.4);
        }

        .badge-time {
            background: rgba(45, 106, 79, 0.2);
            color: #52b788;
            border: 1px solid rgba(45, 106, 79, 0.4);
        }



        /* Sticky Header */
        .header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(13, 12, 11, 0.92);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid var(--border-color);
            transition: var(--transition);
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 4.5rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-family: var(--font-heading);
            font-size: 1.5rem;
            font-weight: 800;
            color: #ffffff;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--amber) 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: 900;
            box-shadow: 0 4px 10px rgba(155, 34, 38, 0.4);
        }

        .logo span {
            color: var(--amber);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 1.8rem;
            list-style: none;
        }

        .nav-links a {
            font-weight: 600;
            font-size: 0.95rem;
            color: var(--text-main);
            position: relative;
            padding: 0.3rem 0;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--amber);
            transition: var(--transition);
            border-radius: 2px;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .nav-links a:hover {
            color: #ffffff;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .mobile-menu-btn {
            display: none;
            background: transparent;
            border: 1px solid var(--border-color);
            color: var(--text-main);
            padding: 0.5rem;
            border-radius: var(--radius-sm);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            position: relative;
            padding: 5rem 0 4rem;
            background: radial-gradient(circle at 80% 20%, rgba(155, 34, 38, 0.25) 0%, transparent 60%),
                        radial-gradient(circle at 10% 80%, rgba(238, 155, 0, 0.15) 0%, transparent 50%),
                        var(--cream-bg);
            border-bottom: 1px solid var(--border-color);
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.15fr 0.85fr;
            gap: 3.5rem;
            align-items: center;
        }

        .hero-badge-wrap {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: rgba(238, 155, 0, 0.12);
            border: 1px solid rgba(238, 155, 0, 0.35);
            padding: 0.4rem 1.1rem;
            border-radius: var(--radius-full);
            color: #ffb703;
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-title {
            font-size: 3.25rem;
            letter-spacing: -0.02em;
            margin-bottom: 1.25rem;
            line-height: 1.15;
        }

        .hero-title span {
            background: linear-gradient(135deg, #ffffff 0%, var(--amber) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-lead {
            font-size: 1.15rem;
            color: #cfc2b2;
            margin-bottom: 2rem;
            max-width: 580px;
        }

        .hero-stats {
            display: flex;
            align-items: center;
            gap: 2.5rem;
            margin-top: 2.5rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border-color);
        }

        .stat-item h4 {
            font-size: 1.75rem;
            color: #ffffff;
            margin-bottom: 0.2rem;
        }

        .stat-item p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .hero-image-card {
            position: relative;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border-color);
        }

        .hero-image-card img {
            width: 100%;
            height: 480px;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .hero-image-card:hover img {
            transform: scale(1.03);
        }

        .hero-floating-tag {
            position: absolute;
            bottom: 1.5rem;
            left: 1.5rem;
            right: 1.5rem;
            background: rgba(14, 12, 10, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.12);
            padding: 1.25rem;
            border-radius: var(--radius-md);
        }

        .hero-floating-tag h4 {
            font-size: 1.15rem;
            margin-bottom: 0.25rem;
        }

        .hero-floating-tag p {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin: 0;
        }

        /* Search & Filter Bar */
        .filter-section {
            padding: 2.5rem 0 1rem;
        }

        .search-bar-wrap {
            display: flex;
            gap: 1rem;
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            padding: 0.6rem;
            border-radius: var(--radius-full);
            box-shadow: var(--shadow-sm);
            max-width: 680px;
            margin: 0 auto 2rem;
        }

        .search-input {
            flex: 1;
            background: transparent;
            border: none;
            outline: none;
            padding: 0.5rem 1.25rem;
            color: #ffffff;
            font-family: var(--font-body);
            font-size: 1rem;
        }

        .search-input::placeholder {
            color: #7a7063;
        }

        .category-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
            justify-content: center;
            margin-bottom: 2.5rem;
        }

        .cat-pill {
            padding: 0.55rem 1.25rem;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: var(--radius-full);
            background: var(--card-bg);
            color: var(--text-muted);
            border: 1px solid var(--border-color);
            cursor: pointer;
            transition: var(--transition);
        }

        .cat-pill:hover,
        .cat-pill.active {
            background: var(--amber);
            color: #000000;
            border-color: var(--amber);
            font-weight: 700;
            transform: translateY(-1px);
        }

        /* Section Headings */
        .section-header {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 3rem;
        }

        .section-sub {
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--amber);
            font-size: 0.85rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            display: block;
        }

        .section-title {
            font-size: 2.35rem;
            margin-bottom: 0.85rem;
        }

        /* Recipe Grid */
        .recipe-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3.5rem;
        }

        .recipe-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            cursor: pointer;
        }

        .recipe-card:hover {
            transform: translateY(-6px);
            border-color: rgba(238, 155, 0, 0.4);
            box-shadow: var(--shadow-md);
            background: var(--card-hover);
        }

        .recipe-card-img-wrap {
            position: relative;
            height: 230px;
            overflow: hidden;
        }

        .recipe-card-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .recipe-card:hover .recipe-card-img {
            transform: scale(1.05);
        }

        .recipe-badge-top {
            position: absolute;
            top: 1rem;
            left: 1rem;
            z-index: 2;
        }

        .recipe-difficulty {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: rgba(10, 9, 8, 0.85);
            backdrop-filter: blur(8px);
            color: #ffffff;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 0.25rem 0.65rem;
            border-radius: var(--radius-full);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .recipe-card-body {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .recipe-meta-row {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            font-size: 0.85rem;
            color: #9d9284;
            margin-bottom: 0.85rem;
        }

        .recipe-meta-row span {
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .recipe-card-title {
            font-size: 1.35rem;
            margin-bottom: 0.6rem;
            color: #ffffff;
            transition: var(--transition);
        }

        .recipe-card:hover .recipe-card-title {
            color: var(--amber);
        }

        .recipe-card-excerpt {
            font-size: 0.92rem;
            color: var(--text-muted);
            margin-bottom: 1.25rem;
            flex-grow: 1;
        }

        .recipe-card-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.07);
        }

        .recipe-region {
            font-size: 0.8rem;
            font-weight: 600;
            color: #bfa17a;
            display: flex;
            align-items: center;
            gap: 0.35rem;
        }

        .recipe-cta-link {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--amber);
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        /* Culinary Heritage & Articles Section */
        .heritage-section {
            padding: 5rem 0;
            background: linear-gradient(180deg, var(--cream-bg) 0%, #12100d 100%);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
        }

        .heritage-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .heritage-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-md);
            padding: 2rem;
            transition: var(--transition);
        }

        .heritage-card:hover {
            border-color: var(--amber);
            transform: translateY(-4px);
        }

        .heritage-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: rgba(238, 155, 0, 0.15);
            color: var(--amber);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.25rem;
            font-size: 1.4rem;
        }

        .heritage-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
        }

        .heritage-card p {
            font-size: 0.92rem;
            margin-bottom: 0;
        }

        /* Interactive Tools Section: Unit Converter & Cooking Timer */
        .tools-section {
            padding: 4.5rem 0;
        }

        .tools-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }

        .tool-card {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            padding: 2.25rem;
            box-shadow: var(--shadow-sm);
        }

        .tool-card h3 {
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .converter-form, .timer-box {
            margin-top: 1.5rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.4rem;
        }

        .form-group label {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
        }

        .form-control {
            background: #110f0d;
            border: 1px solid var(--border-color);
            border-radius: var(--radius-sm);
            padding: 0.7rem 1rem;
            color: #ffffff;
            font-family: var(--font-body);
            font-size: 0.95rem;
            outline: none;
            transition: var(--transition);
        }

        .form-control:focus {
            border-color: var(--amber);
        }

        .converter-result {
            background: rgba(238, 155, 0, 0.08);
            border: 1px dashed rgba(238, 155, 0, 0.4);
            border-radius: var(--radius-sm);
            padding: 1rem;
            text-align: center;
            font-size: 1.1rem;
            font-weight: 700;
            color: #ffb703;
            margin-top: 1rem;
        }

        .timer-display {
            font-family: var(--font-heading);
            font-size: 3.25rem;
            font-weight: 700;
            text-align: center;
            color: #ffffff;
            letter-spacing: 0.05em;
            margin: 1.25rem 0;
            background: #0e0c0b;
            padding: 1rem;
            border-radius: var(--radius-md);
            border: 1px solid var(--border-color);
        }

        .timer-presets {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            margin-bottom: 1.5rem;
        }

        .timer-btn-group {
            display: flex;
            gap: 0.75rem;
            justify-content: center;
        }

        /* Newsletter & Ad Bar */
        .newsletter-section {
            padding: 4.5rem 0;
            background: radial-gradient(circle at center, rgba(155, 34, 38, 0.2) 0%, #110e0c 80%);
            border-top: 1px solid var(--border-color);
            border-bottom: 1px solid var(--border-color);
            text-align: center;
        }

        .newsletter-box {
            max-width: 640px;
            margin: 0 auto;
        }

        .newsletter-box h2 {
            font-size: 2.2rem;
            margin-bottom: 0.8rem;
        }

        .newsletter-form {
            display: flex;
            gap: 0.75rem;
            margin-top: 1.75rem;
        }

        .newsletter-input {
            flex: 1;
            background: #181512;
            border: 1px solid var(--border-color);
            padding: 0.85rem 1.25rem;
            border-radius: var(--radius-full);
            color: #ffffff;
            font-family: var(--font-body);
            outline: none;
        }

        .newsletter-input:focus {
            border-color: var(--amber);
        }

        .newsletter-disclaimer {
            font-size: 0.75rem;
            color: #8c8172;
            margin-top: 0.85rem;
        }

        /* Modal Overlays (Recipe View & Policy Pages) */
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(0, 0, 0, 0.82);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            z-index: 1000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            overflow-y: auto;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-container {
            background: var(--card-bg);
            border: 1px solid var(--border-color);
            border-radius: var(--radius-lg);
            width: 100%;
            max-width: 860px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
            box-shadow: var(--shadow-lg);
            animation: modalFadeIn 0.3s ease-out;
        }

        @keyframes modalFadeIn {
            from { opacity: 0; transform: translateY(20px) scale(0.98); }
            to { opacity: 1; transform: translateY(0) scale(1); }
        }

        .modal-header {
            padding: 1.5rem 2rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: sticky;
            top: 0;
            background: var(--card-bg);
            z-index: 10;
        }

        .modal-header h3 {
            font-size: 1.5rem;
            margin: 0;
        }

        .modal-close-btn {
            background: rgba(255, 255, 255, 0.08);
            border: none;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 1.25rem;
            transition: var(--transition);
        }

        .modal-close-btn:hover {
            background: var(--primary);
            transform: rotate(90deg);
        }

        .modal-body {
            padding: 2rem;
        }

        .modal-body h4 {
            font-size: 1.25rem;
            margin: 1.5rem 0 0.75rem;
            color: var(--amber);
        }

        .modal-body ul, .modal-body ol {
            margin-left: 1.5rem;
            margin-bottom: 1.25rem;
            color: var(--text-muted);
        }

        .modal-body li {
            margin-bottom: 0.5rem;
        }

        /* Recipe Details View Custom Styles */
        .recipe-detail-hero {
            position: relative;
            height: 340px;
            border-radius: var(--radius-md);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .recipe-detail-hero img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .recipe-detail-hero-overlay {
            position: absolute;
            inset: 0;
            background: linear-gradient(180deg, transparent 40%, rgba(10, 9, 8, 0.95) 100%);
            display: flex;
            align-items: flex-end;
            padding: 2rem;
        }

        .recipe-specs-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
            background: #110f0d;
            border: 1px solid var(--border-color);
            padding: 1.25rem;
            border-radius: var(--radius-md);
            margin-bottom: 2rem;
            text-align: center;
        }

        .spec-box span {
            font-size: 0.75rem;
            color: var(--text-muted);
            text-transform: uppercase;
            letter-spacing: 0.05em;
            display: block;
            margin-bottom: 0.25rem;
        }

        .spec-box strong {
            font-size: 1.1rem;
            color: #ffffff;
        }

        .scaler-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #151310;
            border: 1px solid var(--border-color);
            padding: 0.85rem 1.25rem;
            border-radius: var(--radius-md);
            margin-bottom: 1.5rem;
        }

        .serving-btn-group {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .serv-btn {
            background: var(--slate-700);
            border: 1px solid var(--border-color);
            color: #ffffff;
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            cursor: pointer;
            transition: var(--transition);
        }

        .serv-btn:hover {
            background: var(--amber);
            color: #000000;
        }

        .serv-count {
            font-weight: 800;
            color: var(--amber);
            padding: 0 0.5rem;
        }

        .ingredients-list {
            list-style: none;
            margin-left: 0 !important;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0.75rem;
        }

        .ingredient-item {
            background: #12100e;
            border: 1px solid var(--border-color);
            padding: 0.75rem 1rem;
            border-radius: var(--radius-sm);
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.92rem;
        }

        .ingredient-checkbox {
            accent-color: var(--amber);
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        .instructions-list {
            list-style: none !important;
            margin-left: 0 !important;
            counter-reset: step-counter;
        }

        .instruction-step {
            position: relative;
            padding-left: 3.5rem;
            margin-bottom: 1.75rem;
        }

        .step-num {
            position: absolute;
            left: 0;
            top: 0;
            width: 2.5rem;
            height: 2.5rem;
            background: var(--primary);
            color: #ffffff;
            font-weight: 800;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
        }

        .nutrition-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        .nutrition-table th, .nutrition-table td {
            padding: 0.65rem 1rem;
            border-bottom: 1px solid var(--border-color);
            text-align: left;
            font-size: 0.9rem;
        }

        .nutrition-table th {
            color: var(--amber);
        }



        /* Cookie Consent Banner (GDPR / Google Ads Compliant) */
        .cookie-consent-bar {
            position: fixed;
            bottom: 2rem;
            left: 2rem;
            right: 2rem;
            max-width: 580px;
            background: #181512;
            border: 1px solid var(--amber);
            border-radius: var(--radius-lg);
            padding: 1.5rem 1.75rem;
            box-shadow: var(--shadow-lg);
            z-index: 1050;
            display: none;
            animation: slideUp 0.4s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        .cookie-consent-bar.show {
            display: block;
        }

        .cookie-consent-bar h4 {
            font-size: 1.15rem;
            margin-bottom: 0.4rem;
            color: #ffffff;
        }

        .cookie-consent-bar p {
            font-size: 0.84rem;
            color: var(--text-muted);
            margin-bottom: 1.25rem;
            line-height: 1.5;
        }

        .cookie-btn-group {
            display: flex;
            gap: 0.65rem;
            flex-wrap: wrap;
        }

        /* Footer */
        .footer {
            background: #080706;
            border-top: 1px solid var(--border-color);
            padding: 4.5rem 0 6.5rem;
            color: var(--text-muted);
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 3rem;
            margin-bottom: 3.5rem;
        }

        .footer-col h4 {
            font-size: 1.1rem;
            color: #ffffff;
            margin-bottom: 1.25rem;
            position: relative;
        }

        .footer-links {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 0.7rem;
        }

        .footer-links a {
            color: #9d9284;
            font-size: 0.92rem;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--amber);
            transform: translateX(3px);
        }

        .footer-bottom {
            padding-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 0.85rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .compliance-disclaimer {
            font-size: 0.8rem;
            color: #70685e;
            margin-top: 1.5rem;
            line-height: 1.5;
            background: #0f0d0b;
            padding: 1rem;
            border-radius: var(--radius-sm);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        /* Print Styles */
        @media print {
            .header, .footer, .cookie-consent-bar, .filter-section, .tools-section, .newsletter-section {
                display: none !important;
            }
            body {
                background: #ffffff !important;
                color: #000000 !important;
            }
            .modal-container {
                box-shadow: none !important;
                border: none !important;
                max-height: none !important;
            }
        }

        /* Responsive Media Queries */
        @media (max-width: 1024px) {
            .hero-grid {
                grid-template-columns: 1fr;
                gap: 2.5rem;
            }
            .hero-image-card {
                max-width: 600px;
                margin: 0 auto;
            }
            .heritage-grid {
                grid-template-columns: 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }
            .tools-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .mobile-menu-btn {
                display: block;
            }
            .hero-title {
                font-size: 2.4rem;
            }
            .recipe-grid {
                grid-template-columns: 1fr;
            }
            .ingredients-list {
                grid-template-columns: 1fr;
            }
            .recipe-specs-grid {
                grid-template-columns: 1fr 1fr;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .newsletter-form {
                flex-direction: column;
            }
            .cookie-consent-bar {
                left: 1rem;
                right: 1rem;
                bottom: 1rem;
            }
        }
    </style>
</head>
<body>

    <!-- Header Navigation -->
    <header class="header">
        <div class="container header-inner">
            <a href="#" class="logo" onclick="window.scrollTo({top:0, behavior:'smooth'}); return false;">
                <div class="logo-icon">L</div>
                <div>Levi<span>Recipes</span></div>
            </a>

            <nav>
                <ul class="nav-links">
                    <li><a href="#recipes" class="active">Recipes</a></li>
                    <li><a href="#heritage">Culinary Heritage</a></li>
                    <li><a href="#tools">Cooking Tools</a></li>
                    <li><a href="javascript:void(0)" onclick="openPolicyModal('about')">About Us</a></li>
                    <li><a href="javascript:void(0)" onclick="openPolicyModal('editorial')">Editorial Standards</a></li>
                    <li><a href="javascript:void(0)" onclick="openPolicyModal('contact')">Contact</a></li>
                </ul>
            </nav>

            <div class="header-actions">
                <button class="btn btn-primary btn-sm" onclick="document.getElementById('recipes').scrollIntoView({behavior: 'smooth'})">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/></svg>
                    Explore Recipes
                </button>
                <button class="mobile-menu-btn" onclick="toggleMobileNav()" aria-label="Open menu">
                    <svg width="22" height="22" fill="currentColor" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
                </button>
            </div>
        </div>
    </header>



    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-text">
                <div class="hero-badge-wrap">
                    <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 21h22L12 2zm0 3.84L19.46 19H4.54L12 5.84zM11 10h2v4h-2zm0 6h2v2h-2z"/></svg>
                    <span>100% Authentic German Culinary Heritage</span>
                </div>
                <h1 class="hero-title">Timeless Flavors of <span>Old-World Germany</span></h1>
                <p class="hero-lead">From crispy golden Wiener Schnitzel and bubbling Swabian Käsespätzle to fragrant lye-dipped Bavarian Pretzels and decadent Black Forest Gateau. Master authentic heritage recipes with verified testing, exact ingredient scalers, and cultural stories.</p>
                
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="#recipes" class="btn btn-primary">
                        Browse 10 Classic Recipes
                    </a>
                    <a href="#tools" class="btn btn-outline">
                        Interactive Kitchen Tools
                    </a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <h4>100%</h4>
                        <p>Kitchen Tested</p>
                    </div>
                    <div class="stat-item">
                        <h4>Bavaria & Beyond</h4>
                        <p>Regional Authenticity</p>
                    </div>
                    <div class="stat-item">
                        <h4>4.9 ★</h4>
                        <p>Reader Rating</p>
                    </div>
                </div>
            </div>

            <div class="hero-image-card">
                <img src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1000&q=80" alt="Authentic Bavarian Roast Pork and Knödel Feast" loading="eager">
                <div class="hero-floating-tag">
                    <h4>Featured Bavarian Specialty</h4>
                    <p>Bayerischer Schweinebraten with Dark Beer Gravy & Semmelknödel</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Recipe Search & Category Filters -->
    <section class="filter-section" id="recipes">
        <div class="container">
            <div class="section-header">
                <span class="section-sub">Tested Heritage Catalog</span>
                <h2 class="section-title">Explore Authentic German Recipes</h2>
                <p>Select a regional cuisine category or search by authentic German dish name, cooking time, or ingredient.</p>
            </div>

            <div class="search-bar-wrap">
                <svg width="20" height="20" fill="#8c8275" viewBox="0 0 24 24" style="margin-left: 0.75rem; align-self: center;"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
                <input type="text" id="recipeSearchInput" class="search-input" placeholder="Search recipes (e.g. Schnitzel, Spätzle, Sauerbraten, Pretzels)..." oninput="filterRecipes()">
            </div>

            <div class="category-pills">
                <button class="cat-pill active" onclick="setCategoryFilter('all', this)">All Recipes (10)</button>
                <button class="cat-pill" onclick="setCategoryFilter('mains', this)">Hearty Mains</button>
                <button class="cat-pill" onclick="setCategoryFilter('baking', this)">Breads & Baking</button>
                <button class="cat-pill" onclick="setCategoryFilter('desserts', this)">Pastries & Desserts</button>
                <button class="cat-pill" onclick="setCategoryFilter('soups', this)">Soups & Sides</button>
                <button class="cat-pill" onclick="setCategoryFilter('oktoberfest', this)">Oktoberfest Specials</button>
            </div>

            <!-- Dynamic Recipe Card Grid -->
            <div class="recipe-grid" id="recipeGrid">
                <!-- Injected via JavaScript -->
            </div>
        </div>
    </section>



    <!-- Culinary Heritage & German Food Culture -->
    <section class="heritage-section" id="heritage">
        <div class="container">
            <div class="section-header">
                <span class="section-sub">Tradition & Technique</span>
                <h2 class="section-title">The Art of German Regional Cooking</h2>
                <p>German cuisine is rooted in regional geography, micro-climates, and centuries-old artisan guilds. Learn the bedrock secrets of German culinary masters.</p>
            </div>

            <div class="heritage-grid">
                <div class="heritage-card">
                    <div class="heritage-icon">🥨</div>
                    <h3>The Lye Dip (Lauge) Secret</h3>
                    <p>Authentic German pretzels and pretzel rolls achieve their deep mahogany crust and distinct earthy aroma through a brief dip in food-grade sodium hydroxide (lye) solution or baked baking soda prior to baking.</p>
                </div>

                <div class="heritage-card">
                    <div class="heritage-icon">🥩</div>
                    <h3>The Souffléed Schnitzel Crust</h3>
                    <p>A true Wiener Schnitzel must have a light, undulating crust that puffs away from the tender meat during pan-frying in clarified butter (Butterschmalz), swimming freely with continuous gentle swirling.</p>
                </div>

                <div class="heritage-card">
                    <div class="heritage-icon">🧅</div>
                    <h3>Gemütlichkeit & Hearty Braises</h3>
                    <p>From slow-marinated Sauerbraten steeped for days in spiced vinegar wine to dark beer braised Schweinebraten, slow culinary transformation is the soul of German family warmth.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Cooking Tools (Unit Converter & Cooking Timer) -->
    <section class="tools-section" id="tools">
        <div class="container">
            <div class="section-header">
                <span class="section-sub">Interactive Kitchen Utility</span>
                <h2 class="section-title">German Recipe Kitchen Tools</h2>
                <p>Seamlessly convert European metric measurements (grams, milliliters) to US customary units, and time your simmering roasts and boiling spätzle.</p>
            </div>

            <div class="tools-grid">
                <!-- Tool 1: Metric to US Imperial Converter -->
                <div class="tool-card">
                    <h3>
                        <svg width="22" height="22" fill="var(--amber)" viewBox="0 0 24 24"><path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 2h1.5v3H12V5zm0 5h1.5v3H12v-3zm-3-5h1.5v3H9V5zm0 5h1.5v3H9v-3zM6 5h1.5v3H6V5zm0 5h1.5v3H6v-3zm13 9H5V5h1v5h12V5h1v14z"/></svg>
                        Metric & German Culinary Converter
                    </h3>
                    <p style="font-size: 0.88rem;">German recipes strictly utilize weight (grams) rather than volume for bakery accuracy.</p>

                    <div class="converter-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="convValue">Amount</label>
                                <input type="number" id="convValue" class="form-control" value="250" oninput="runConversion()">
                            </div>
                            <div class="form-group">
                                <label for="convType">Conversion Type</label>
                                <select id="convType" class="form-control" onchange="runConversion()">
                                    <option value="g_to_oz">Grams (g) ➔ Ounces (oz)</option>
                                    <option value="g_flour_to_cup">Grams Flour ➔ US Cups</option>
                                    <option value="g_sugar_to_cup">Grams Sugar ➔ US Cups</option>
                                    <option value="g_butter_to_tbsp">Grams Butter ➔ Tablespoons</option>
                                    <option value="ml_to_cup">Milliliters (ml) ➔ US Cups</option>
                                    <option value="c_to_f">Celsius (°C) ➔ Fahrenheit (°F)</option>
                                </select>
                            </div>
                        </div>
                        <div class="converter-result" id="converterOutput">
                            250 g = 8.82 oz
                        </div>
                    </div>
                </div>

                <!-- Tool 2: Kitchen Cooking Timer -->
                <div class="tool-card">
                    <h3>
                        <svg width="22" height="22" fill="var(--amber)" viewBox="0 0 24 24"><path d="M15 1H9v2h6V1zm-4 13h2V8h-2v6zm8.03-6.61l1.42-1.42c-.43-.51-.9-.99-1.41-1.41l-1.42 1.42C16.07 4.74 14.12 4 12 4c-4.97 0-9 4.03-9 9s4.02 9 9 9 9-4.03 9-9c0-2.12-.74-4.07-1.97-5.61zM12 20c-3.87 0-7-3.13-7-7s3.13-7 7-7 7 3.13 7 7-3.13 7-7 7z"/></svg>
                        German Cooking & Baking Timer
                    </h3>
                    <p style="font-size: 0.88rem;">Select a preset or start your custom cooking timer with acoustic chime reminder.</p>

                    <div class="timer-box">
                        <div class="timer-presets">
                            <button class="btn btn-outline btn-sm" onclick="setTimerPreset(180, 'Boiling Spätzle (3 min)')">Spätzle (3m)</button>
                            <button class="btn btn-outline btn-sm" onclick="setTimerPreset(300, 'Pan-Frying Schnitzel (5 min)')">Schnitzel (5m)</button>
                            <button class="btn btn-outline btn-sm" onclick="setTimerPreset(900, 'Baking Pretzels (15 min)')">Pretzels (15m)</button>
                            <button class="btn btn-outline btn-sm" onclick="setTimerPreset(2700, 'Baking Strudel (45 min)')">Strudel (45m)</button>
                        </div>

                        <div class="timer-display" id="timerDisplay">05:00</div>

                        <div class="timer-btn-group">
                            <button class="btn btn-primary btn-sm" id="timerStartBtn" onclick="toggleTimer()">Start Timer</button>
                            <button class="btn btn-outline btn-sm" onclick="resetTimer()">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter & Cultural Club -->
    <section class="newsletter-section">
        <div class="container newsletter-box">
            <div class="badge badge-bavaria" style="margin-bottom: 1rem;">Free Weekly German Recipe Letter</div>
            <h2>Join the Bavarian Table Guild</h2>
            <p>Receive authentic, seasonal recipes from Munich, Stuttgart, and Berlin delivered every Sunday morning. No spam, ever. Unsubscribe anytime.</p>

            <form class="newsletter-form" onsubmit="handleNewsletterSubmit(event)">
                <input type="email" class="newsletter-input" placeholder="Enter your email address..." required id="newsletterEmail">
                <button type="submit" class="btn btn-primary">Subscribe Free</button>
            </form>
            <p class="newsletter-disclaimer">By subscribing you agree to our <a href="javascript:void(0)" onclick="openPolicyModal('privacy')">Privacy Policy</a> and receiving recipe newsletters.</p>
        </div>
    </section>

    <!-- Footer with Full Google AdSense Compliance Links -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Col 1: Brand Info -->
                <div class="footer-col">
                    <div class="logo" style="margin-bottom: 1rem;">
                        <div class="logo-icon">L</div>
                        <div>Levi<span>Recipes</span></div>
                    </div>
                    <p style="font-size: 0.9rem; line-height: 1.6;">Levi Recipes is an independent culinary publication dedicated to preserving, documenting, and teaching authentic German and Central European heritage gastronomy. Every recipe is meticulously tested for home cooks worldwide.</p>
                    <div style="display: flex; gap: 0.75rem; margin-top: 1.25rem;">
                        <a href="https://pinterest.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" aria-label="Pinterest">Pinterest</a>
                        <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" aria-label="Facebook">Facebook</a>
                        <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="btn btn-outline btn-sm" aria-label="Instagram">Instagram</a>
                    </div>
                </div>

                <!-- Col 2: Recipe Categories -->
                <div class="footer-col">
                    <h4>Regional Cuisines</h4>
                    <ul class="footer-links">
                        <li><a href="#recipes" onclick="setCategoryFilter('mains')">Bavarian Braises & Roasts</a></li>
                        <li><a href="#recipes" onclick="setCategoryFilter('baking')">Artisanal German Breads</a></li>
                        <li><a href="#recipes" onclick="setCategoryFilter('desserts')">Black Forest & Alpine Pastries</a></li>
                        <li><a href="#recipes" onclick="setCategoryFilter('soups')">Hearty Autumn Potato Soups</a></li>
                        <li><a href="#recipes" onclick="setCategoryFilter('oktoberfest')">Oktoberfest Feast Classics</a></li>
                    </ul>
                </div>

                <!-- Col 3: Legal & Editorial -->
                <div class="footer-col">
                    <h4>Trust & Legal</h4>
                    <ul class="footer-links">
                        <li><a href="javascript:void(0)" onclick="openPolicyModal('privacy')">Privacy Policy</a></li>
                        <li><a href="javascript:void(0)" onclick="openPolicyModal('terms')">Terms of Service</a></li>
                        <li><a href="javascript:void(0)" onclick="openPolicyModal('disclaimer')">Culinary & Testing Disclosure</a></li>
                        <li><a href="javascript:void(0)" onclick="openPolicyModal('cookies')">Cookie Preferences</a></li>
                        <li><a href="javascript:void(0)" onclick="openPolicyModal('editorial')">Editorial & Testing Process</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact & Publisher -->
                <div class="footer-col">
                    <h4>Publisher Transparency</h4>
                    <p style="font-size: 0.88rem; margin-bottom: 0.75rem;"><strong>Levi Recipes Online Editorial</strong><br>
                    Website: levirecipes.online<br>
                    Inquiries: editorial@levirecipes.online<br>
                    Munich / International Culinary Bureau</p>
                    <button class="btn btn-outline btn-sm" onclick="openPolicyModal('contact')">
                        Send Direct Inquiry
                    </button>
                </div>
            </div>

            <!-- Culinary Notice -->
            <div class="compliance-disclaimer">
                <strong>Culinary & Heritage Notice:</strong> Levi Recipes is an independent publication dedicated to documenting and teaching authentic German and Central European heritage gastronomy. Every recipe is meticulously tested for home cooks. Nutritional calculations provided are automated estimations for educational and culinary planning purposes.
            </div>

            <div class="footer-bottom">
                <div>© <span id="currentYear">2025</span> Levi Recipes (levirecipes.online). All Rights Reserved.</div>
                <div style="display: flex; gap: 1.5rem;">
                    <a href="javascript:void(0)" onclick="openPolicyModal('privacy')">Privacy</a>
                    <a href="javascript:void(0)" onclick="openPolicyModal('terms')">Terms</a>
                    <a href="javascript:void(0)" onclick="openPolicyModal('contact')">Contact</a>
                    <a href="javascript:void(0)" onclick="openPolicyModal('cookies')">Cookies</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Recipe Detail Interactive Modal -->
    <div class="modal-overlay" id="recipeModalOverlay" onclick="handleModalBackdropClick(event, 'recipeModalOverlay')">
        <div class="modal-container" id="recipeModalContainer">
            <div class="modal-header">
                <h3 id="modalRecipeTitle">Recipe Title</h3>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    <button class="btn btn-outline btn-sm" onclick="window.print()" title="Print Recipe">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 24 24"><path d="M19 8H5c-1.66 0-3 1.34-3 3v6h4v4h12v-4h4v-6c0-1.66-1.34-3-3-3zm-3 11H8v-5h8v5zm3-7c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm-1-9H6v4h12V3z"/></svg>
                        Print
                    </button>
                    <button class="modal-close-btn" onclick="closeRecipeModal()" aria-label="Close modal">&times;</button>
                </div>
            </div>
            <div class="modal-body" id="modalRecipeContent">
                <!-- Injected via JavaScript -->
            </div>
        </div>
    </div>

    <!-- Policy / Legal Pages Modal (Privacy, Terms, Disclosure, About, Editorial, Contact) -->
    <div class="modal-overlay" id="policyModalOverlay" onclick="handleModalBackdropClick(event, 'policyModalOverlay')">
        <div class="modal-container" id="policyModalContainer" style="max-width: 780px;">
            <div class="modal-header">
                <h3 id="policyModalTitle">Policy Document</h3>
                <button class="modal-close-btn" onclick="closePolicyModal()" aria-label="Close modal">&times;</button>
            </div>
            <div class="modal-body" id="policyModalBody">
                <!-- Injected via JavaScript -->
            </div>
        </div>
    </div>

    <!-- GDPR / CCPA Cookie Consent Floating Bar -->
    <div class="cookie-consent-bar" id="cookieConsentBar">
        <h4>🍪 Cookie & Privacy Preferences</h4>
        <p>We use essential cookies for site functionality and Google AdSense partners to serve non-intrusive, relevant advertisements and analyze site traffic in compliance with GDPR and Google Publisher Policies.</p>
        <div class="cookie-btn-group">
            <button class="btn btn-primary btn-sm" onclick="acceptCookies('all')">Accept All Cookies</button>
            <button class="btn btn-outline btn-sm" onclick="acceptCookies('essential')">Essential Only</button>
            <button class="btn btn-outline btn-sm" onclick="openPolicyModal('cookies')">Customize</button>
        </div>
    </div>



    <!-- JavaScript Data & Logic -->
    <script>
        // Recipe Database (10 Authentic German Recipes with Detailed Scalable Ingredients & Step-by-Step Instructions)
        const recipesData = [
            {
                id: "wiener-schnitzel",
                title: "Authentic Wiener Schnitzel vom Kalb",
                germanName: "Klassisches Wiener Schnitzel",
                category: "mains",
                region: "Bavaria & Austria",
                prepTime: "20 mins",
                cookTime: "15 mins",
                totalTime: "35 mins",
                difficulty: "Intermediate",
                defaultServings: 4,
                calories: "580 kcal",
                protein: "42g",
                carbs: "38g",
                fat: "28g",
                image: "https://images.unsplash.com/photo-1599921841143-819065a55cc6?auto=format&fit=crop&w=1000&q=80",
                badge: "Oktoberfest Classic",
                summary: "Tender milk-fed veal cutlets pounded ultra-thin, coated in fresh breadcrumbs, and pan-fried in clarified butter until crisp and puffed (souffléed).",
                ingredients: [
                    { amount: 4, unit: "cutlets (approx. 150g each)", item: "Veal topside / cutlets (Kalbsoberschale)" },
                    { amount: 100, unit: "g", item: "All-purpose flour (Type 405)" },
                    { amount: 3, unit: "large", item: "Farm-fresh eggs, beaten lightly with a pinch of cream" },
                    { amount: 180, unit: "g", item: "Fresh fine breadcrumbs (Semmelbrösel, not pre-toasted)" },
                    { amount: 200, unit: "g", item: "Clarified butter (Butterschmalz) or lard for frying" },
                    { amount: 1, unit: "tsp", item: "Fine sea salt & freshly ground black pepper" },
                    { amount: 1, unit: "whole", item: "Fresh lemon cut into wedges" },
                    { amount: 4, unit: "tbsp", item: "Preiselbeeren (wild lingonberry preserve) for serving" }
                ],
                instructions: [
                    "Place the veal cutlets between two sheets of cling film and pound gently with a flat meat mallet to an even thickness of 4mm (1/8 inch).",
                    "Season both sides of each cutlet evenly with fine sea salt and freshly cracked black pepper.",
                    "Set up three shallow bowls in a row: Bowl 1 with all-purpose flour; Bowl 2 with eggs whisked with 1 tbsp heavy cream; Bowl 3 with fresh Semmelbrösel breadcrumbs.",
                    "Dredge each cutlet in flour (shaking off excess), dip completely into the egg mixture, and finally lay gently in breadcrumbs without pressing down firmly (this ensures the famous soufflé crust).",
                    "Heat 1.5 inches of clarified butter (Butterschmalz) in a wide skillet to 170°C (340°F). The schnitzel must float freely in the fat.",
                    "Carefully lay cutlets into the hot butter and swirl the pan constantly in circular motions so hot fat washes continuously over the top. Fry for 2-3 minutes per side until golden brown.",
                    "Transfer to paper towels for 30 seconds to drain, then serve immediately with fresh lemon crowns, lingonberry compote, and warm Austrian potato salad (Erdäpfelsalat)."
                ],
                chefTip: "Never press the breadcrumbs into the meat! Gentle coating allows steam to expand during frying, creating the airy, rippled signature crust."
            },
            {
                id: "black-forest-cake",
                title: "Traditional Black Forest Gateau",
                germanName: "Schwarzwälder Kirschtorte",
                category: "desserts",
                region: "Baden-Württemberg",
                prepTime: "45 mins",
                cookTime: "35 mins",
                totalTime: "1 hr 20 mins",
                difficulty: "Advanced",
                defaultServings: 12,
                calories: "420 kcal",
                protein: "6g",
                carbs: "52g",
                fat: "22g",
                image: "https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62?auto=format&fit=crop&w=1000&q=80",
                badge: "Heritage Masterpiece",
                summary: "Layers of airy Dutch-cocoa sponge soaked in authentic Black Forest Kirschwasser (cherry brandy), filled with tart sour cherries and whipped Bavarian cream.",
                ingredients: [
                    { amount: 6, unit: "large", item: "Eggs, separated at room temperature" },
                    { amount: 180, unit: "g", item: "Granulated sugar" },
                    { amount: 150, unit: "g", item: "All-purpose flour sifted with 50g Dutch cocoa powder" },
                    { amount: 1, unit: "tsp", item: "Baking powder and pinch of salt" },
                    { amount: 700, unit: "g", item: "Jarred tart sour cherries (Schattenmorellen), drained and juice reserved" },
                    { amount: 4, unit: "tbsp", item: "Cornstarch (for thickening cherry filling)" },
                    { amount: 80, unit: "ml", item: "Authentic Black Forest Kirschwasser (Cherry Schnapps)" },
                    { amount: 800, unit: "ml", item: "Heavy whipping cream (Schlagsahne)" },
                    { amount: 3, unit: "packets", item: "Whipping cream stabilizer (Sahnesteif) & vanilla sugar" },
                    { amount: 100, unit: "g", item: "Dark chocolate shavings (Bitterschokolade) for garnish" }
                ],
                instructions: [
                    "Whip egg whites with half the sugar until stiff peaks form. In a separate bowl, beat egg yolks with remaining sugar and 2 tbsp warm water until pale and fluffy.",
                    "Gently fold the sifted cocoa-flour mixture and whipped egg whites into the yolks in alternating batches.",
                    "Bake in a greased 26cm (10-inch) springform pan at 175°C (350°F) for 30-35 minutes. Cool completely, then slice horizontally into 3 even layers.",
                    "Simmer reserved cherry juice with cornstarch and 2 tbsp sugar until thickened. Stir in sour cherries and 2 tbsp Kirschwasser; cool.",
                    "Whip heavy cream with vanilla sugar and stabilizer until firm. Mix 50ml Kirschwasser with 3 tbsp cherry syrup to brush the cake layers.",
                    "Assemble: Place bottom sponge on platter, brush with Kirsch, pipe rings of whipped cream, and spoon cherry filling in between. Top with second sponge, brush with Kirsch, and spread whipped cream.",
                    "Top with third sponge, cover entire cake in whipped cream, pipe decorative rosettes, place whole cherries on top, and coat sides with dark chocolate curls. Chill 4 hours before slicing."
                ],
                chefTip: "According to German confectionary law, authentic Schwarzwälder Kirschtorte must contain perceptible Kirschwasser cherry schnapps!"
            },
            {
                id: "schweinebraten",
                title: "Bavarian Roast Pork with Dark Beer Gravy",
                germanName: "Bayerischer Schweinebraten",
                category: "mains",
                region: "Bavaria (München)",
                prepTime: "30 mins",
                cookTime: "2 hrs 30 mins",
                totalTime: "3 hrs",
                difficulty: "Intermediate",
                defaultServings: 6,
                calories: "690 kcal",
                protein: "54g",
                carbs: "14g",
                fat: "46g",
                image: "https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1000&q=80",
                badge: "Oktoberfest Classic",
                summary: "Succulent pork shoulder with shatteringly crisp crackling, roasted over root vegetables and braised in rich Munich Dunkel dark beer.",
                ingredients: [
                    { amount: 1800, unit: "g", item: "Pork shoulder with skin on (Schweineschulter mit Schwarte)" },
                    { amount: 500, unit: "ml", item: "Bavarian Dark Beer (Münchner Dunkel or Doppelbock)" },
                    { amount: 400, unit: "ml", item: "Rich beef or pork bone broth" },
                    { amount: 2, unit: "medium", item: "Yellow onions, chopped with skins" },
                    { amount: 2, unit: "large", item: "Carrots and 1/4 celery root (Knollensellerie), diced" },
                    { amount: 4, unit: "cloves", item: "Garlic, crushed" },
                    { amount: 1.5, unit: "tbsp", item: "Whole caraway seeds (Kümmel), coarsely crushed" },
                    { amount: 1, unit: "tbsp", item: "Coarse sea salt & black pepper" }
                ],
                instructions: [
                    "Score the pork skin in a diamond pattern with a razor-sharp blade, cutting through the rind and fat without piercing into the meat.",
                    "Rub the meat sides generously with crushed garlic, caraway seeds, salt, and pepper (leave the skin with only coarse salt).",
                    "Place onions, carrots, and celery root into a heavy roasting pan. Pour in 250ml dark beer and 200ml broth. Rest pork skin-side-up on the bed of vegetables.",
                    "Roast at 160°C (320°F) for 2 hours, basting the meat occasionally (avoiding the skin) and adding remaining dark beer.",
                    "To pop the crackling (Kruste): Crank the oven to 230°C (450°F) for the final 20 minutes until the skin puffs into golden, crispy blisters.",
                    "Remove roast to rest. Strain pan drippings through a sieve, pressing vegetable juices through. Simmer gravy until glossy and rich.",
                    "Carve into thick slices and serve with warm gravy, Bavarian potato dumplings (Kartoffelknödel), and braised red cabbage (Rotkohl)."
                ],
                chefTip: "Do not baste the skin during the final high-heat crackling stage, as moisture prevents the rind from blistering into glass-crisp perfection."
            },
            {
                id: "kaesespaetzle",
                title: "Swabian Alpine Cheese Spätzle",
                germanName: "Schwäbische Käsespätzle",
                category: "mains",
                region: "Swabia & Allgäu",
                prepTime: "25 mins",
                cookTime: "20 mins",
                totalTime: "45 mins",
                difficulty: "Easy",
                defaultServings: 4,
                calories: "610 kcal",
                protein: "29g",
                carbs: "64g",
                fat: "27g",
                image: "https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1000&q=80",
                badge: "Vegetarian Comfort",
                summary: "Hand-scraped fresh egg noodles layered with molten aged Allgäuer Bergkäse and Emmentaler cheese, crowned with golden slow-caramelized onions (Röstzwiebeln).",
                ingredients: [
                    { amount: 400, unit: "g", item: "Spätzle flour (coarsely ground 'Dunst' or high-protein wheat flour)" },
                    { amount: 4, unit: "large", item: "Eggs" },
                    { amount: 150, unit: "ml", item: "Sparkling mineral water (gives noodles lightness)" },
                    { amount: 1, unit: "tsp", item: "Fine salt & freshly grated nutmeg" },
                    { amount: 180, unit: "g", item: "Aged Allgäuer Bergkäse (mountain cheese), freshly grated" },
                    { amount: 120, unit: "g", item: "German Emmentaler cheese, freshly grated" },
                    { amount: 3, unit: "large", item: "Yellow onions, thinly sliced" },
                    { amount: 3, unit: "tbsp", item: "Butter and chopped fresh chives for garnish" }
                ],
                instructions: [
                    "In a bowl, beat flour, eggs, sparkling water, salt, and nutmeg with a wooden spoon with a hole until the dough bubbles and falls heavily from the spoon.",
                    "In a wide skillet, slowly caramelize sliced onions in butter over medium-low heat for 20 minutes until deeply golden brown.",
                    "Bring a large pot of salted water to a rolling boil. Using a Spätzle-board (Spätzlesbrett) and scraper, scrape thin ribbons directly into boiling water (or use a Spätzle press).",
                    "Once the Spätzle float to the surface (approx. 90 seconds), scoop them out immediately with a slotted spoon.",
                    "Layer steaming hot Spätzle and mixed grated cheeses in a warmed casserole dish so the residual heat melts the cheese into luscious strings.",
                    "Top with golden caramelized butter onions and freshly snipped chives. Serve immediately with a crisp green salad."
                ],
                chefTip: "Always grate your own Bergkäse and Emmentaler; pre-packaged shredded cheese contains anti-caking starches that ruin the cheese-pull."
            },
            {
                id: "bavarian-pretzels",
                title: "Authentic Bavarian Lye Pretzels",
                germanName: "Traditionelle Bayerische Brezeln",
                category: "baking",
                region: "Bavaria",
                prepTime: "40 mins",
                cookTime: "18 mins",
                totalTime: "1 hr 30 mins",
                difficulty: "Intermediate",
                defaultServings: 8,
                calories: "280 kcal",
                protein: "8g",
                carbs: "54g",
                fat: "3g",
                image: "https://images.unsplash.com/photo-1579954115545-a95591f28bfc?auto=format&fit=crop&w=1000&q=80",
                badge: "Artisanal Baker",
                summary: "Iconic Bavarian pretzels with deep chestnut crust, coarse salt crystals, chewy slender arms, and soft, pillowy thick belly.",
                ingredients: [
                    { amount: 500, unit: "g", item: "German Bread Flour (Type 550) or Unbleached Bread Flour" },
                    { amount: 260, unit: "ml", item: "Lukewarm water or whole milk" },
                    { amount: 7, unit: "g", item: "Instant dry yeast (1 packet)" },
                    { amount: 10, unit: "g", item: "Fine sea salt" },
                    { amount: 1, unit: "tsp", item: "Barley malt syrup (Backmalz) or brown sugar" },
                    { amount: 40, unit: "g", item: "Unsalted butter or traditional lard, softened" },
                    { amount: 50, unit: "g", item: "Baked baking soda (or food-grade lye for authentic bakeries)" },
                    { amount: 2, unit: "tbsp", item: "Coarse pretzel salt (Hagelzucker / Brezelsalz)" }
                ],
                instructions: [
                    "Knead flour, yeast, malt syrup, butter, salt, and water in a stand mixer for 8-10 minutes until a firm, silky dough forms. Rest covered for 30 minutes.",
                    "Divide into 8 equal balls (approx. 100g each). Roll each into a 60cm rope tapered at both ends, leaving a thick belly in the middle.",
                    "Cross the thin ends over each other twice to twist, then fold back and press tips onto the sides of the belly to form the pretzel shape.",
                    "Place pretzels on a parchment-lined tray and chill uncovered in the refrigerator for 45 minutes to develop a skin.",
                    "Dissolve baked baking soda in 1 liter boiling water (or use 3.5% food grade lye solution at room temperature wearing gloves). Dip each chilled pretzel for 20 seconds.",
                    "Place on baking sheet, slash the thick belly horizontally with a razor blade, and sprinkle with coarse pretzel salt.",
                    "Bake at 210°C (410°F) for 16-18 minutes until deep chestnut brown. Cool on wire rack and serve with sweet Bavarian mustard (Obatzda)."
                ],
                chefTip: "Chilling the shaped pretzels uncovered before the dip is the bakery secret that gives pretzels their smooth, blistered, glossy crust."
            },
            {
                id: "sauerbraten",
                title: "Rhineland Marinated Beef Sauerbraten",
                germanName: "Rheinischer Sauerbraten",
                category: "mains",
                region: "Rhineland",
                prepTime: "30 mins",
                cookTime: "3 hrs",
                totalTime: "3 hrs 30 mins (+ 3 days marinating)",
                difficulty: "Advanced",
                defaultServings: 6,
                calories: "620 kcal",
                protein: "48g",
                carbs: "32g",
                fat: "24g",
                image: "https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1000&q=80",
                badge: "Heritage Masterpiece",
                summary: "Classic German pot roast steeped for 3 days in spiced red wine marinade, braised until spoon-tender and finished with gingersnap gravy (Printen).",
                ingredients: [
                    { amount: 1500, unit: "g", item: "Beef chuck roast or bottom round (Rinderbraten)" },
                    { amount: 350, unit: "ml", item: "Dry red wine (Pinot Noir or Spätburgunder)" },
                    { amount: 200, unit: "ml", item: "Red wine vinegar & 200ml water" },
                    { amount: 2, unit: "medium", item: "Yellow onions and 2 carrots, chopped" },
                    { amount: 8, unit: "whole", item: "Juniper berries, allspice berries & cloves" },
                    { amount: 2, unit: "whole", item: "Bay leaves and black peppercorns" },
                    { amount: 80, unit: "g", item: "German Aachener Printen or spiced gingersnap cookies, crushed" },
                    { amount: 2, unit: "tbsp", item: "Raisins (Sultaninen) and 1 tbsp sugar beet syrup (Zuckerrübensirup)" }
                ],
                instructions: [
                    "Combine red wine, vinegar, water, onions, carrots, and whole spices in a saucepan; simmer for 5 minutes, then cool completely.",
                    "Place beef in a glass or ceramic container, pour marinade over to submerge completely, cover, and refrigerate for 3 to 4 days, turning once daily.",
                    "Remove beef, pat thoroughly dry with paper towels, and strain marinade (reserving liquid and vegetables separately).",
                    "Sear beef in clarified butter in a Dutch oven over high heat until deeply browned on all sides. Remove meat, brown marinade vegetables.",
                    "Return beef, pour in reserved marinade liquid, cover, and braise on low heat for 2.5 to 3 hours until meltingly tender.",
                    "Remove meat to rest. Puree cooking juices with crushed Printen/gingersnaps and sugar beet syrup to create a thick, glossy sweet-and-sour gravy. Stir in raisins.",
                    "Carve beef across grain into slices and serve smothered in spiced gravy alongside potato dumplings and warm spiced red cabbage."
                ],
                chefTip: "The acidity in the 3-day wine vinegar marinade tenderizes tough connective tissues, turning economic beef cuts into luxurious silk."
            },
            {
                id: "rinderrouladen",
                title: "Classic German Stuffed Beef Roulades",
                germanName: "Traditionelle Rinderrouladen",
                category: "mains",
                region: "Thuringia & Saxony",
                prepTime: "30 mins",
                cookTime: "1 hr 45 mins",
                totalTime: "2 hrs 15 mins",
                difficulty: "Intermediate",
                defaultServings: 4,
                calories: "590 kcal",
                protein: "51g",
                carbs: "12g",
                fat: "36g",
                image: "https://images.unsplash.com/photo-1599921841143-819065a55cc6?auto=format&fit=crop&w=1000&q=80",
                badge: "Sunday Roast",
                summary: "Thinly sliced beef topside slathered in spicy German mustard, rolled around smoked bacon, tangy German gherkins, and caramelized onions.",
                ingredients: [
                    { amount: 4, unit: "large slices", item: "Beef top round cutlets (Rinderrouladen), approx. 180g each" },
                    { amount: 4, unit: "tbsp", item: "Spicy German mustard (Mittelscharfer Senf)" },
                    { amount: 8, unit: "strips", item: "German smoked bacon (Räucherspeck)" },
                    { amount: 4, unit: "whole", item: "German dill pickles (Gewürzgurken), sliced lengthwise" },
                    { amount: 2, unit: "medium", item: "Yellow onions, finely diced" },
                    { amount: 500, unit: "ml", item: "Beef stock & 150ml dry red wine" },
                    { amount: 2, unit: "tbsp", item: "Tomato paste and butter for searing" },
                    { amount: 1, unit: "splash", item: "Pickle brine (Gurkenwasser) to deglaze gravy" }
                ],
                instructions: [
                    "Lay beef slices flat on a cutting board, pat dry, and season lightly with salt and pepper.",
                    "Spread 1 generous tablespoon of German mustard over the top surface of each beef slice.",
                    "Layer two slices of smoked bacon, diced onions, and gherkin spear strips across each cutlet.",
                    "Fold the long side edges inward to seal filling, then roll tightly into a cylinder. Secure tightly with kitchen butcher twine or metal roulade skewers.",
                    "Heat butter in a Dutch oven and sear roulades over high heat until deeply browned on all sides. Remove briefly.",
                    "Saute remaining onions and tomato paste in the pan drippings, deglaze with red wine and pickle brine, then pour in beef stock.",
                    "Return roulades, cover, and gently braise over low heat for 90 minutes until fork-tender. Thicken gravy with a cornstarch slurry."
                ],
                chefTip: "Adding a splash of the gherkin jar brine into the braising gravy delivers the quintessential tangy German balance."
            },
            {
                id: "kartoffelpuffer",
                title: "Crispy German Potato Pancakes",
                germanName: "Reibekuchen / Kartoffelpuffer",
                category: "soups",
                region: "Rhineland & Bavaria",
                prepTime: "20 mins",
                cookTime: "15 mins",
                totalTime: "35 mins",
                difficulty: "Easy",
                defaultServings: 4,
                calories: "340 kcal",
                protein: "6g",
                carbs: "44g",
                fat: "16g",
                image: "https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=1000&q=80",
                badge: "Street Market Favorite",
                summary: "Golden lace-edged shredded potato fritters pan-fried until crisp, traditionally served with homemade cinnamon spiced apple compote (Apfelmus).",
                ingredients: [
                    { amount: 1000, unit: "g", item: "Starchy potatoes (such as Russet or German Mehligkochende)" },
                    { amount: 1, unit: "medium", item: "Yellow onion, finely grated" },
                    { amount: 2, unit: "large", item: "Eggs" },
                    { amount: 3, unit: "tbsp", item: "All-purpose flour or potato starch" },
                    { amount: 1, unit: "tsp", item: "Sea salt & fresh nutmeg pinch" },
                    { amount: 100, unit: "ml", item: "Vegetable oil or clarified butter for shallow frying" },
                    { amount: 300, unit: "g", item: "Chunky spiced applesauce (Apfelmus) for serving" }
                ],
                instructions: [
                    "Peel potatoes and grate them finely using a box grater. Grate the onion along with potatoes.",
                    "Place grated potato mixture into a clean kitchen towel and wring out vigorously over a bowl to extract maximum liquid.",
                    "Let liquid settle for 5 minutes, pour off water, and keep the white potato starch that settles at the bottom of the bowl.",
                    "Combine wrung-out potatoes, grated onion, settled starch, eggs, flour, salt, and nutmeg in a large bowl.",
                    "Heat oil in a wide cast-iron skillet over medium-high heat. Drop 2-3 tablespoons of batter per pancake, flattening slightly with the back of a spoon.",
                    "Fry for 3-4 minutes per side until deeply golden and crispy on the lacy edges. Drain on paper towels and serve piping hot with cold spiced applesauce."
                ],
                chefTip: "Wringing out all excess moisture is crucial! Dry potato strands fry up crisp rather than steaming in the pan."
            },
            {
                id: "apfelstrudel",
                title: "Viennese & Bavarian Hand-Stretched Apple Strudel",
                germanName: "Traditioneller Apfelstrudel",
                category: "desserts",
                region: "Bavaria & Austria",
                prepTime: "45 mins",
                cookTime: "40 mins",
                totalTime: "1 hr 25 mins",
                difficulty: "Advanced",
                defaultServings: 8,
                calories: "380 kcal",
                protein: "5g",
                carbs: "58g",
                fat: "15g",
                image: "https://images.unsplash.com/photo-1606890737304-57a1ca8a5b62?auto=format&fit=crop&w=1000&q=80",
                badge: "Pastry Guild Classic",
                summary: "Paper-thin stretched strudel pastry wrapped around tart spiced apples, rum-soaked raisins, toasted buttery breadcrumbs, and warm vanilla bean custard.",
                ingredients: [
                    { amount: 250, unit: "g", item: "High-gluten wheat flour (Type 550 or bread flour)" },
                    { amount: 1, unit: "pinch", item: "Salt and 1 tbsp neutral sunflower oil" },
                    { amount: 130, unit: "ml", item: "Warm water (approx. 40°C)" },
                    { amount: 1000, unit: "g", item: "Tart crisp apples (Boskop, Elstar or Granny Smith), peeled and thinly sliced" },
                    { amount: 70, unit: "g", item: "Golden raisins soaked in 2 tbsp dark rum" },
                    { amount: 80, unit: "g", item: "Fine breadcrumbs toasted in 40g butter until golden" },
                    { amount: 80, unit: "g", item: "Granulated sugar mixed with 1 tsp Ceylon cinnamon" },
                    { amount: 100, unit: "g", item: "Melted butter for brushing dough" },
                    { amount: 2, unit: "tbsp", item: "Powdered sugar for dusting" }
                ],
                instructions: [
                    "Knead flour, warm water, oil, and salt for 10 minutes until smooth and elastic. Shape into a ball, brush with oil, and let rest under a warm inverted bowl for 45 minutes.",
                    "Toast breadcrumbs in melted butter in a pan until golden and fragrant; cool.",
                    "Toss sliced apples with lemon juice, cinnamon sugar, and rum-soaked raisins.",
                    "Place a large floured tablecloth on your work surface. Roll dough out, then using the floured backs of your hands, gently stretch the dough from the center outwards until paper-thin and translucent (so thin you can read a newspaper through it!).",
                    "Brush entire stretched dough sheet with melted butter. Scatter toasted breadcrumbs over the bottom two-thirds of the sheet, and pile the apple filling on top.",
                    "Using the tablecloth to lift and roll, roll the strudel tightly into a long log. Tuck ends underneath.",
                    "Transfer to a parchment-lined baking sheet, brush generously with melted butter, and bake at 190°C (375°F) for 35-40 minutes until golden crisp.",
                    "Dust with powdered sugar and serve warm with vanilla bean ice cream or warm homemade vanilla sauce (Vanillesoße)."
                ],
                chefTip: "The layer of buttery toasted breadcrumbs absorbs excess juices from the baking apples, preventing the bottom pastry layer from becoming soggy."
            },
            {
                id: "kartoffelsuppe",
                title: "Hearty German Potato Soup with Mettwurst",
                germanName: "Deutsche Kartoffelsuppe mit Würstchen",
                category: "soups",
                region: "Central Germany",
                prepTime: "20 mins",
                cookTime: "35 mins",
                totalTime: "55 mins",
                difficulty: "Easy",
                defaultServings: 4,
                calories: "460 kcal",
                protein: "22g",
                carbs: "48g",
                fat: "20g",
                image: "https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=1000&q=80",
                badge: "Winter Comfort",
                summary: "Velvety, rustic potato and leek soup seasoned with German marjoram, diced smoked bacon, and sliced Frankfurters or smoked Mettwurst.",
                ingredients: [
                    { amount: 800, unit: "g", item: "Floury potatoes, peeled and diced" },
                    { amount: 2, unit: "medium", item: "Leeks (white and pale green parts), washed and sliced" },
                    { amount: 2, unit: "medium", item: "Carrots and 1 parsley root (or parsnip), diced" },
                    { amount: 80, unit: "g", item: "German smoked bacon (Speck), diced" },
                    { amount: 1000, unit: "ml", item: "Rich vegetable or beef broth" },
                    { amount: 1, unit: "tbsp", item: "Dried German marjoram (Majoran) & pinch of nutmeg" },
                    { amount: 4, unit: "links", item: "German Frankfurters, Wiener Würstchen or smoked Mettwurst, sliced" },
                    { amount: 100, unit: "ml", item: "Heavy cream or sour cream (Schmand)" },
                    { amount: 2, unit: "tbsp", item: "Fresh parsley, chopped" }
                ],
                instructions: [
                    "In a large soup pot, fry diced bacon over medium heat until crispy. Add sliced leeks, carrots, and parsley root; saute for 5 minutes.",
                    "Add diced potatoes, broth, dried marjoram, salt, and black pepper. Bring to a boil, then reduce heat and simmer covered for 25 minutes until potatoes are soft.",
                    "Using an immersion blender or potato masher, partially puree the soup, leaving some potato chunks for traditional rustic texture.",
                    "Stir in heavy cream/Schmand and freshly grated nutmeg.",
                    "Add sliced Frankfurters/Mettwurst and simmer gently for 5 minutes until sausages are heated through.",
                    "Ladle into bowls and garnish with chopped fresh parsley and crispy croutons. Serve with dark crusty German sourdough bread (Roggenbrot)."
                ],
                chefTip: "Dried German marjoram (Majoran) is the essential herb that gives authentic potato soup its unmistakable comforting aroma."
            }
        ];

        // State Management
        let currentFilter = 'all';
        let currentRecipe = null;
        let currentServings = 4;
        let timerInterval = null;
        let timerSecondsLeft = 300;
        let timerRunning = false;

        // Initialize Page
        document.addEventListener('DOMContentLoaded', () => {
            renderRecipes(recipesData);
            document.getElementById('currentYear').textContent = new Date().getFullYear();
            runConversion();
            checkCookieConsent();
        });

        // Render Recipe Cards
        function renderRecipes(recipes) {
            const grid = document.getElementById('recipeGrid');
            if (recipes.length === 0) {
                grid.innerHTML = `
                    <div style="grid-column: 1/-1; text-align: center; padding: 3rem; background: var(--card-bg); border-radius: var(--radius-md); border: 1px solid var(--border-color);">
                        <p style="font-size: 1.2rem; color: #fff; margin-bottom: 0.5rem;">No recipes match your search.</p>
                        <p>Try searching for 'Schnitzel', 'Spätzle', 'Baking', or select 'All Recipes'.</p>
                        <button class="btn btn-primary btn-sm" onclick="resetSearch()">View All Recipes</button>
                    </div>
                `;
                return;
            }

            grid.innerHTML = recipes.map(r => `
                <article class="recipe-card" onclick="openRecipeModal('${r.id}')" tabindex="0" role="button" aria-label="View recipe for ${r.title}">
                    <div class="recipe-card-img-wrap">
                        <img src="${r.image}" alt="${r.title}" class="recipe-card-img" loading="lazy">
                        <div class="recipe-badge-top">
                            <span class="badge badge-bavaria">${r.badge}</span>
                        </div>
                        <div class="recipe-difficulty">${r.difficulty}</div>
                    </div>
                    <div class="recipe-card-body">
                        <div class="recipe-meta-row">
                            <span>
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
                                ${r.totalTime}
                            </span>
                            <span>
                                <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
                                ${r.defaultServings} Servings
                            </span>
                            <span>🔥 ${r.calories}</span>
                        </div>
                        <h3 class="recipe-card-title">${r.title}</h3>
                        <p class="recipe-card-excerpt">${r.summary}</p>
                        <div class="recipe-card-footer">
                            <span class="recipe-region">📍 ${r.region}</span>
                            <span class="recipe-cta-link">
                                View Full Recipe
                                <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                            </span>
                        </div>
                    </div>
                </article>
            `).join('');
        }

        // Filter Logic
        function setCategoryFilter(category, btnElement) {
            currentFilter = category;
            document.querySelectorAll('.cat-pill').forEach(btn => btn.classList.remove('active'));
            if (btnElement) {
                btnElement.classList.add('active');
            }
            filterRecipes();
        }

        function filterRecipes() {
            const query = document.getElementById('recipeSearchInput').value.toLowerCase().trim();
            const filtered = recipesData.filter(r => {
                const matchesCat = (currentFilter === 'all') || 
                                   (currentFilter === 'oktoberfest' && (r.badge.includes('Oktoberfest') || r.category === 'mains')) ||
                                   (r.category === currentFilter);
                const matchesSearch = r.title.toLowerCase().includes(query) ||
                                      r.germanName.toLowerCase().includes(query) ||
                                      r.summary.toLowerCase().includes(query) ||
                                      r.region.toLowerCase().includes(query) ||
                                      r.ingredients.some(ing => ing.item.toLowerCase().includes(query));
                return matchesCat && matchesSearch;
            });
            renderRecipes(filtered);
        }

        function resetSearch() {
            document.getElementById('recipeSearchInput').value = '';
            setCategoryFilter('all', document.querySelector('.cat-pill'));
        }

        // Modal View Management
        function openRecipeModal(recipeId) {
            const recipe = recipesData.find(r => r.id === recipeId);
            if (!recipe) return;
            currentRecipe = recipe;
            currentServings = recipe.defaultServings;

            document.getElementById('modalRecipeTitle').textContent = recipe.title;
            renderModalRecipeBody();

            const overlay = document.getElementById('recipeModalOverlay');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function renderModalRecipeBody() {
            const r = currentRecipe;
            const multiplier = currentServings / r.defaultServings;

            document.getElementById('modalRecipeContent').innerHTML = `
                <div class="recipe-detail-hero">
                    <img src="${r.image}" alt="${r.title}">
                    <div class="recipe-detail-hero-overlay">
                        <div>
                            <span class="badge badge-bavaria" style="margin-bottom: 0.5rem;">${r.germanName}</span>
                            <h2 style="font-size: 1.8rem; margin: 0; color: #fff;">${r.title}</h2>
                        </div>
                    </div>
                </div>

                <div class="recipe-specs-grid">
                    <div class="spec-box">
                        <span>Prep Time</span>
                        <strong>${r.prepTime}</strong>
                    </div>
                    <div class="spec-box">
                        <span>Cook Time</span>
                        <strong>${r.cookTime}</strong>
                    </div>
                    <div class="spec-box">
                        <span>Origin</span>
                        <strong>${r.region}</strong>
                    </div>
                    <div class="spec-box">
                        <span>Difficulty</span>
                        <strong>${r.difficulty}</strong>
                    </div>
                </div>

                <p style="font-size: 1.05rem; color: #dfd7cc; line-height: 1.6; margin-bottom: 2rem;">${r.summary}</p>

                <!-- Interactive Portion Scaler -->
                <div class="scaler-controls">
                    <div>
                        <strong style="color: #fff; display: block; font-size: 0.95rem;">Interactive Portion Scaler</strong>
                        <span style="font-size: 0.8rem; color: var(--text-muted);">Adjust portions to automatically scale ingredients</span>
                    </div>
                    <div class="serving-btn-group">
                        <button class="serv-btn" onclick="adjustServings(-1)" aria-label="Decrease servings">-</button>
                        <span class="serv-count" id="servingsDisplay">${currentServings} Servings</span>
                        <button class="serv-btn" onclick="adjustServings(1)" aria-label="Increase servings">+</button>
                    </div>
                </div>

                <h4 style="display: flex; align-items: center; justify-content: space-between;">
                    <span>Ingredients Checklist</span>
                    <span style="font-size: 0.8rem; color: var(--text-muted); font-weight: normal;">Tick items as you prep</span>
                </h4>
                <ul class="ingredients-list">
                    ${r.ingredients.map(ing => {
                        let scaledAmount = (ing.amount * multiplier);
                        // format fractions or decimals cleanly
                        let displayAmount = Number.isInteger(scaledAmount) ? scaledAmount : scaledAmount.toFixed(1).replace(/\.0$/, '');
                        return `
                            <li class="ingredient-item">
                                <input type="checkbox" class="ingredient-checkbox">
                                <div>
                                    <strong>${displayAmount} ${ing.unit}</strong> ${ing.item}
                                </div>
                            </li>
                        `;
                    }).join('')}
                </ul>

                <h4 style="margin-top: 2rem;">Step-by-Step Heritage Instructions</h4>
                <ol class="instructions-list">
                    ${r.instructions.map((step, idx) => `
                        <li class="instruction-step">
                            <div class="step-num">${idx + 1}</div>
                            <p style="margin: 0; color: #d6cbbe; font-size: 0.96rem;">${step}</p>
                        </li>
                    `).join('')}
                </ol>

                <div style="background: rgba(238, 155, 0, 0.09); border-left: 4px solid var(--amber); padding: 1.25rem; border-radius: var(--radius-sm); margin: 2rem 0;">
                    <strong style="color: #ffb703; display: block; margin-bottom: 0.25rem;">👨‍🍳 Master Chef's Authenticity Tip:</strong>
                    <span style="color: #e5dacd; font-size: 0.92rem;">${r.chefTip}</span>
                </div>

                <h4 style="margin-top: 2rem;">Nutritional Breakdown (Per Serving)</h4>
                <table class="nutrition-table">
                    <thead>
                        <tr>
                            <th>Calories</th>
                            <th>Protein</th>
                            <th>Carbohydrates</th>
                            <th>Fat</th>
                            <th>Dietary Standards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>${r.calories}</strong></td>
                            <td>${r.protein}</td>
                            <td>${r.carbs}</td>
                            <td>${r.fat}</td>
                            <td>Tested Traditional</td>
                        </tr>
                    </tbody>
                </table>
            `;
        }

        function adjustServings(delta) {
            const newServ = currentServings + delta;
            if (newServ >= 1 && newServ <= 30) {
                currentServings = newServ;
                renderModalRecipeBody();
            }
        }

        function closeRecipeModal() {
            document.getElementById('recipeModalOverlay').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Policy / Google AdSense Compliance Modals
        function openPolicyModal(type) {
            const overlay = document.getElementById('policyModalOverlay');
            const titleEl = document.getElementById('policyModalTitle');
            const bodyEl = document.getElementById('policyModalBody');

            if (type === 'privacy') {
                titleEl.textContent = "Privacy Policy";
                bodyEl.innerHTML = `
                    <p><strong>Last Updated: January 2025</strong></p>
                    <p>At <strong>Levi Recipes</strong> (accessible from https://levirecipes.online), one of our main priorities is the privacy of our visitors. This Privacy Policy document outlines the types of information collected and recorded by Levi Recipes and how we use it in full compliance with the <strong>Google AdSense Publisher Policies</strong>, General Data Protection Regulation (<strong>GDPR</strong>), and California Consumer Privacy Act (<strong>CCPA/CPRA</strong>).</p>
                    
                    <h4>1. Google AdSense & DoubleClick DART Cookies</h4>
                    <p>Google is a third-party vendor on our site. It uses cookies, known as DART cookies, to serve ads to our site visitors based upon their visit to levirecipes.online and other sites on the internet. However, visitors may choose to decline the use of DART cookies by visiting the Google Ad and Content Network Privacy Policy at the following URL: <a href="https://policies.google.com/technologies/ads" target="_blank" rel="noopener noreferrer">https://policies.google.com/technologies/ads</a>.</p>

                    <h4>2. Advertising Partners & Third-Party Ad Servers</h4>
                    <p>Some of our advertisers on our site may use cookies and web beacons. Our advertising partners include Google AdSense. Third-party ad servers or ad networks use technology in their respective advertisements and links that appear on Levi Recipes, which are sent directly to users' browsers. They automatically receive your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or to personalize the advertising content that you see.</p>

                    <h4>3. Information We Collect</h4>
                    <p>When you subscribe to our newsletter or submit an inquiry, we collect your email address and submitted name solely to provide requested services. We will never sell, rent, or trade your personal email address to third parties.</p>

                    <h4>4. Log Files</h4>
                    <p>Levi Recipes follows a standard procedure of using log files. These files log visitors when they visit websites. The information collected by log files include internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable.</p>

                    <h4>5. CCPA Privacy Rights (Do Not Sell My Personal Information)</h4>
                    <p>Under the CCPA, among other rights, California consumers have the right to request that a business disclose the categories and specific pieces of personal data that a business has collected, delete personal data, and not sell the consumer's personal data. If you make a request, we have one month to respond to you.</p>

                    <h4>6. GDPR Data Protection Rights</h4>
                    <p>Every user is entitled to the following: the right to access, the right to rectification, the right to erasure, the right to restrict processing, the right to object to processing, and the right to data portability. To exercise any of these rights, contact us at <strong>privacy@levirecipes.online</strong>.</p>
                `;
            } else if (type === 'terms') {
                titleEl.textContent = "Terms of Service";
                bodyEl.innerHTML = `
                    <p><strong>Effective Date: January 1, 2025</strong></p>
                    <h4>1. Acceptance of Terms</h4>
                    <p>By accessing and using <strong>Levi Recipes (levirecipes.online)</strong>, you accept and agree to be bound by the terms and provisions of this agreement.</p>

                    <h4>2. Intellectual Property & Recipe Usage</h4>
                    <p>All written culinary recipes, culinary history texts, website design code, and structured guides are the intellectual property of Levi Recipes. You are welcome to print and prepare recipes for personal, non-commercial home cooking. Republication or redistribution of entire articles without written permission and canonical attribution is strictly prohibited.</p>

                    <h4>3. Culinary & Nutritional Disclaimer</h4>
                    <p>Recipes on this website are provided for culinary enjoyment and educational purposes. While every recipe is tested, results may vary based on ingredient quality, altitude, and oven variations. Nutritional calculations are automated approximations and should not be used as medical advice.</p>
                `;
            } else if (type === 'disclaimer') {
                titleEl.textContent = "Advertising & Affiliate Disclosure";
                bodyEl.innerHTML = `
                    <h4>FTC & Google Advertising Compliance Disclosure</h4>
                    <p>In accordance with the Federal Trade Commission (FTC) guidelines and Google Publisher Policies, please note that <strong>Levi Recipes</strong> displays online advertisements (including Google AdSense) and may include affiliate links to culinary supplies and kitchen tools.</p>
                    <p>When you click on an advertisement or an affiliate link and make a purchase, we may receive a small commission at no additional cost to you. This support helps fund our independent recipe testing, kitchen ingredients, photography, and maintenance of our free heritage cooking guides.</p>
                    <p>We maintain strict editorial independence: advertising partnerships never influence our recipe ratings, reviews, or cooking instructions.</p>
                `;
            } else if (type === 'about') {
                titleEl.textContent = "About Levi Recipes";
                bodyEl.innerHTML = `
                    <h4>Preserving German Culinary Heritage</h4>
                    <p>Welcome to <strong>Levi Recipes</strong>, your premier digital archive for authentic German, Bavarian, Swabian, and Central European cooking. Founded by culinary researchers and passionate heritage cooks, our mission is to ensure that time-honored German recipes remain accessible, precise, and delicious for home kitchens around the globe.</p>
                    <p>From the delicate chemistry of Bavarian lye dipping to the 3-day marinating science of Rhineland Sauerbraten, we believe great cooking bridges history and modern family tables.</p>
                    <h4>Our Core Pillars:</h4>
                    <ul>
                        <li><strong>100% Kitchen Tested:</strong> Every single recipe is prepared and refined multiple times before publication.</li>
                        <li><strong>Dual Measuring Standard:</strong> We provide exact metric weights alongside US measurements.</li>
                        <li><strong>Cultural Authenticity:</strong> We highlight the regional histories behind iconic dishes.</li>
                    </ul>
                `;
            } else if (type === 'editorial') {
                titleEl.textContent = "Editorial & Recipe Testing Standards";
                bodyEl.innerHTML = `
                    <h4>Our Recipe Testing Protocol (E-E-A-T Compliance)</h4>
                    <p>At Levi Recipes, we adhere to strict editorial and culinary verification standards:</p>
                    <ol>
                        <li><strong>Historical Source Verification:</strong> We cross-reference historical Bavarian, Austrian, and German regional cookbooks (Kochbücher).</li>
                        <li><strong>Multiple Batch Testing:</strong> Recipes are tested with both European flours (Type 405/550) and standard US unbleached flours to guarantee consistent outcomes.</li>
                        <li><strong>Step-by-Step Clarity:</strong> We avoid ambiguous culinary jargon, offering exact visual cues (e.g. crust color, temperature indicators).</li>
                        <li><strong>Nutritional Transparency:</strong> Nutritional values are calculated using certified food databases.</li>
                    </ol>
                `;
            } else if (type === 'contact') {
                titleEl.textContent = "Contact Our Culinary Bureau";
                bodyEl.innerHTML = `
                    <p>Have questions about a German recipe, want to share a family variation, or have an advertising inquiry? We'd love to hear from you!</p>
                    <form onsubmit="handleContactSubmit(event)" style="display: flex; flex-direction: column; gap: 1rem; margin-top: 1.5rem;">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" required placeholder="Chef / Home Cook Name">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" required placeholder="your.name@example.com">
                        </div>
                        <div class="form-group">
                            <label>Subject / Topic</label>
                            <select class="form-control">
                                <option>Recipe Question or Feedback</option>
                                <option>Editorial Correction</option>
                                <option>Advertising & Sponsorship Inquiry</option>
                                <option>Privacy / Data Request</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="4" required placeholder="Write your message here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="align-self: flex-start;">Send Message</button>
                    </form>
                `;
            } else if (type === 'cookies') {
                titleEl.textContent = "Cookie & Tracking Preferences";
                bodyEl.innerHTML = `
                    <p>Manage how cookies are used on Levi Recipes. You can adjust your consent at any time.</p>
                    <div style="display: flex; flex-direction: column; gap: 1rem; margin: 1.5rem 0;">
                        <div style="background: #12100e; padding: 1rem; border-radius: var(--radius-sm); border: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <strong style="color: #fff;">Strictly Necessary Cookies</strong>
                                <p style="font-size: 0.8rem; margin: 0; color: var(--text-muted);">Required for page navigation, search state, and scaler tools.</p>
                            </div>
                            <span style="color: #52b788; font-weight: 700; font-size: 0.85rem;">Always Active</span>
                        </div>

                        <div style="background: #12100e; padding: 1rem; border-radius: var(--radius-sm); border: 1px solid var(--border-color); display: flex; justify-content: space-between; align-items: center;">
                            <div>
                                <strong style="color: #fff;">Google AdSense & Personalization Cookies</strong>
                                <p style="font-size: 0.8rem; margin: 0; color: var(--text-muted);">Enables Google AdSense partners to serve relevant advertisements.</p>
                            </div>
                            <input type="checkbox" checked id="cookieAdsToggle" style="accent-color: var(--amber); width: 20px; height: 20px;">
                        </div>
                    </div>
                    <button class="btn btn-primary" onclick="saveCustomCookies()">Save Preferences</button>
                `;
            }

            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closePolicyModal() {
            document.getElementById('policyModalOverlay').classList.remove('active');
            document.body.style.overflow = '';
        }

        function handleModalBackdropClick(e, overlayId) {
            if (e.target.id === overlayId) {
                if (overlayId === 'recipeModalOverlay') closeRecipeModal();
                if (overlayId === 'policyModalOverlay') closePolicyModal();
            }
        }

        // Kitchen Unit Converter Logic
        function runConversion() {
            const val = parseFloat(document.getElementById('convValue').value) || 0;
            const type = document.getElementById('convType').value;
            const out = document.getElementById('converterOutput');

            let res = '';
            if (type === 'g_to_oz') {
                res = `${val} g = ${(val * 0.035274).toFixed(2)} oz`;
            } else if (type === 'g_flour_to_cup') {
                res = `${val} g flour ≈ ${(val / 125).toFixed(2)} US Cups (sifted)`;
            } else if (type === 'g_sugar_to_cup') {
                res = `${val} g granulated sugar ≈ ${(val / 200).toFixed(2)} US Cups`;
            } else if (type === 'g_butter_to_tbsp') {
                res = `${val} g butter ≈ ${(val / 14.2).toFixed(1)} Tablespoons (${(val / 113.4).toFixed(2)} Sticks)`;
            } else if (type === 'ml_to_cup') {
                res = `${val} ml = ${(val / 236.588).toFixed(2)} US Cups (${(val * 0.033814).toFixed(1)} fl oz)`;
            } else if (type === 'c_to_f') {
                res = `${val}°C = ${Math.round((val * 9/5) + 32)}°F`;
            }
            out.textContent = res;
        }

        // Cooking Timer Logic
        function setTimerPreset(seconds, label) {
            clearInterval(timerInterval);
            timerRunning = false;
            timerSecondsLeft = seconds;
            updateTimerDisplay();
            document.getElementById('timerStartBtn').textContent = "Start Timer";
        }

        function toggleTimer() {
            const btn = document.getElementById('timerStartBtn');
            if (timerRunning) {
                clearInterval(timerInterval);
                timerRunning = false;
                btn.textContent = "Resume Timer";
            } else {
                if (timerSecondsLeft <= 0) timerSecondsLeft = 300;
                timerRunning = true;
                btn.textContent = "Pause Timer";
                timerInterval = setInterval(() => {
                    timerSecondsLeft--;
                    updateTimerDisplay();
                    if (timerSecondsLeft <= 0) {
                        clearInterval(timerInterval);
                        timerRunning = false;
                        btn.textContent = "Start Timer";
                        playChime();
                        alert("⏰ German Kitchen Timer Finished! Check your dish.");
                    }
                }, 1000);
            }
        }

        function resetTimer() {
            clearInterval(timerInterval);
            timerRunning = false;
            timerSecondsLeft = 300;
            updateTimerDisplay();
            document.getElementById('timerStartBtn').textContent = "Start Timer";
        }

        function updateTimerDisplay() {
            const m = Math.floor(timerSecondsLeft / 60);
            const s = timerSecondsLeft % 60;
            document.getElementById('timerDisplay').textContent = 
                `${m.toString().padStart(2, '0')}:${s.toString().padStart(2, '0')}`;
        }

        function playChime() {
            try {
                const ctx = new (window.AudioContext || window.webkitAudioContext)();
                const osc = ctx.createOscillator();
                const gain = ctx.createGain();
                osc.type = 'sine';
                osc.frequency.setValueAtTime(587.33, ctx.currentTime); // D5
                osc.frequency.setValueAtTime(880, ctx.currentTime + 0.15); // A5
                gain.gain.setValueAtTime(0.3, ctx.currentTime);
                gain.gain.exponentialRampToValueAtTime(0.001, ctx.currentTime + 0.8);
                osc.connect(gain);
                gain.connect(ctx.destination);
                osc.start();
                osc.stop(ctx.currentTime + 0.8);
            } catch (e) {
                // AudioContext fallback
            }
        }

        // Cookie Consent Banner Handling (GDPR / Google Ads)
        function checkCookieConsent() {
            if (!localStorage.getItem('levi_cookie_consent')) {
                setTimeout(() => {
                    document.getElementById('cookieConsentBar').classList.add('show');
                }, 1200);
            }
        }

        function acceptCookies(preference) {
            localStorage.setItem('levi_cookie_consent', preference);
            document.getElementById('cookieConsentBar').classList.remove('show');
        }

        function saveCustomCookies() {
            const adsConsent = document.getElementById('cookieAdsToggle') ? document.getElementById('cookieAdsToggle').checked : true;
            localStorage.setItem('levi_cookie_consent', adsConsent ? 'all' : 'essential');
            closePolicyModal();
            document.getElementById('cookieConsentBar').classList.remove('show');
        }



        // Form Handlers
        function handleNewsletterSubmit(e) {
            e.preventDefault();
            const email = document.getElementById('newsletterEmail').value;
            alert(`Danke schön! We have sent a confirmation email to ${email}. Check your inbox for your free Bavarian Recipe Starter Kit!`);
            document.getElementById('newsletterEmail').value = '';
        }

        function handleContactSubmit(e) {
            e.preventDefault();
            alert("Vielen Dank! Your message has been transmitted to our editorial desk. We respond to all culinary inquiries within 24-48 business hours.");
            closePolicyModal();
        }

        function toggleMobileNav() {
            const links = document.querySelector('.nav-links');
            if (links.style.display === 'flex') {
                links.style.display = 'none';
            } else {
                links.style.display = 'flex';
                links.style.flexDirection = 'column';
                links.style.position = 'absolute';
                links.style.top = '4.5rem';
                links.style.left = '0';
                links.style.width = '100%';
                links.style.background = '#12100e';
                links.style.padding = '1.5rem';
                links.style.borderBottom = '1px solid var(--border-color)';
            }
        }

        // Escape Key Closes Modals
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeRecipeModal();
                closePolicyModal();
            }
        });
    </script>
</body>
</html>
