<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FieldOuterPond â€” Rugged Field Jackets & Weatherproof Outerwear</title>
  <meta name="description" content="Discover handcrafted weatherproof field jackets, waxed canvas utility coats, alpine waterproof shells, and heavy-duty insulated winter parkas.">
  <link rel="canonical" href="https://fieldouterpond.com/">
  
  <!-- Open Graph -->
  <meta property="og:title" content="FieldOuterPond â€” Rugged Field Jackets & Outerwear">
  <meta property="og:description" content="Handcrafted weatherproof field jackets, waxed canvas coats, and alpine stormproof shells.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://fieldouterpond.com/">
  <meta property="og:image" content="https://fieldouterpond.com/images/hero-field-jacket.jpg">

  <!-- Stylesheet -->
  <link rel="stylesheet" href="style.css">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>

  <div class="reading-progress-bar" aria-hidden="true"></div>

  <!-- Announcement Bar -->
  <aside class="top-bar">
    <div class="container top-bar-inner">
      <span>ðŸ§¥ FieldOuterPond Atelier â€” Handcrafted weatherproof field jackets, waxed canvas coats & alpine shells.</span>
      <div class="top-contact">
        <span>ðŸ“ 181 Mercer Street, New York, NY 10012</span>
        <a href="tel:+18887775845">ðŸ“ž +1-888-777-5845</a>
      </div>
    </div>
  </aside>

  <!-- Fixed Luxury Header -->
  <header class="site-header">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo" aria-label="FieldOuterPond Home">
          <div class="logo-badge">ðŸ§¥</div>
          <div class="brand-title-group">
            <span class="brand-name">FieldOuterPond</span>
            <span class="brand-sub">Weatherproof Field Jackets</span>
          </div>
        </a>

        <nav class="nav-menu" aria-label="Primary Navigation">
          <a href="index.php" class="nav-link active">Atelier</a>
          <a href="about.html" class="nav-link">Craft</a>
          <a href="blog.html" class="nav-link">Journal</a>
          <a href="#weather-configurator" class="nav-link">Weather Config</a>
          <a href="contact.html" class="nav-link">Concierge</a>
        </nav>

        <div class="nav-actions">
          <button class="theme-toggle-btn" aria-label="Toggle Lighting Theme" title="Toggle Theme">ðŸ§¥</button>
          <a href="contact.html" class="btn btn-gold" style="padding: 0.55rem 1.15rem; font-size: 0.82rem;">Inquire Atelier</a>
          <button class="mobile-toggle" aria-label="Open Mobile Menu">â˜°</button>
        </div>
      </div>
    </div>
  </header>

  <main id="main-content">

    <!-- Hero Section -->
    <section class="hero-section">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="hero-eyebrow">ðŸ§¥ Weatherproof Outerwear Guild</span>
            <h1 class="hero-title">Built for the Wild. Tailored for Lifelong Resilience.</h1>
            <p class="hero-lead">
              FieldOuterPond handcrafts rugged field jackets, heavy-duty waxed canvas utility coats, and expedition stormproof hardshells. Built to withstand torrential pond downpours, biting mountain gale winds, and decades of relentless backcountry exploration.
            </p>
            <div class="hero-btn-group">
              <a href="#weather-configurator" class="btn btn-gold">Configure Outerwear</a>
              <a href="blog.html" class="btn btn-outline">Explore Field Journal</a>
            </div>
            <div class="hero-stats-row">
              <div class="stat-item">
                <h4>12 oz</h4>
                <p>Martexin Waxed Duck Sailcloth</p>
              </div>
              <div class="stat-item">
                <h4>28,000 mm</h4>
                <p>Hydrostatic Stormproof Head</p>
              </div>
              <div class="stat-item">
                <h4>100%</h4>
                <p>Solid Brass Riveted Hardware</p>
              </div>
            </div>
          </div>

          <div>
            <div class="hero-card-media">
              <img src="images/hero-field-jacket.jpg" alt="Rugged waxed canvas field jacket worn in misty outdoor wilderness" width="1200" height="800">
              <div class="hero-card-badge">
                <p>"A true field jacket is not disposable fashionâ€”it is personal armor against torrential storms, developing richer character with every mountain traversed."</p>
                <span>â€” FieldOuterPond Master Outfitter</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Field Jacket Weather & Insulation Tool -->
    <section id="weather-configurator" class="tool-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Outerwear Thermal Engine</span>
          <h2 class="section-title">Field Jacket Weather & Insulation Configurator</h2>
          <p class="section-subtitle">Simulate ambient mountain temperatures, wind chill, and storm severity to identify your optimal jacket membrane and insulation rating.</p>
        </div>

        <div class="dial-tool-card">
          <div class="dial-slider-group">
            <div class="slider-control">
              <label for="jacket-temp-slider">
                <span>Ambient Mountain Temperature</span>
                <span id="jacket-temp-val" style="color: var(--accent-gold); font-family: var(--font-mono);">30Â°F (-1Â°C) Ambient Temp</span>
              </label>
              <input type="range" id="jacket-temp-slider" min="-20" max="65" step="5" value="30" aria-label="Temperature Slider">
            </div>

            <div class="slider-control">
              <label for="jacket-storm-slider">
                <span>Precipitation & Wind Severity</span>
                <span id="jacket-storm-val" style="color: var(--accent-gold); font-family: var(--font-mono);">Highland Fog & Light Drizzle</span>
              </label>
              <input type="range" id="jacket-storm-slider" min="0" max="3" step="1" value="1" aria-label="Storm Severity Slider">
            </div>
          </div>

          <div class="dial-result-grid">
            <div class="result-box">
              <h4>Recommended Shell Membrane</h4>
              <p id="calc-membrane">12oz Traditional Martexin Waxed Cotton</p>
            </div>

            <div class="result-box">
              <h4>Core Thermal Insulation</h4>
              <p id="calc-insulation">100g PrimaLoft Gold Synthetic Insulation</p>
            </div>

            <div class="result-box">
              <h4>Field Defense Index</h4>
              <p id="calc-weather-rating">87.0/100 Field Defense Index</p>
            </div>
          </div>

          <div style="margin-top: 1.5rem; padding: 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); font-size: 0.92rem; color: var(--text-muted);">
            <strong>Storm-Tested Seam Sealing:</strong> All our technical shells feature ultrasonic seam taping with 3-ply GORE-SEAM tape, ensuring zero water penetration even when standing under continuous alpine waterfalls.
          </div>
        </div>
      </div>
    </section>

    <!-- Three Pillars Section -->
    <section class="pillars-section">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Our Outerwear Philosophy</span>
          <h2 class="section-title">The Three Pillars of FieldOuterPond Jackets</h2>
          <p class="section-subtitle">Blending heritage sailcloth durability, modern microporous membranes, and lifetime repairable construction.</p>
        </div>

        <div class="pillars-grid">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">ðŸ›¡ï¸</div>
            <h3>1. Heavyweight Waxed Sailcloth</h3>
            <p>12-ounce high-density cotton duck infused with natural beeswax and paraffin, providing windproof, thorn-proof, and water-repellent armor that develops a distinctive vintage patina.</p>
            <a href="about.html" class="pillar-link">Discover Sailcloth &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">ðŸŒ§ï¸</div>
            <h3>2. 28,000mm Storm Membranes</h3>
            <p>3-layer microporous ePTFE membranes allow billions of perspiration vapor molecules to escape while permanently blocking driven rain and alpine gale-force winds.</p>
            <a href="about.html" class="pillar-link">Explore Membranes &rarr;</a>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">âš™ï¸</div>
            <h3>3. Solid Brass & Double-Needle Build</h3>
            <p>Antiqued solid brass YKK #10 zippers, storm flap horn buttons, reinforced copper pocket rivets, and heavy bonded nylon double-needle stitching for generational durability.</p>
            <a href="about.html" class="pillar-link">Learn Craftsmanship &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Visual Jacket Showcase Gallery -->
    <section class="tool-section" style="background: var(--bg-surface-alt); padding: 5rem 0;">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Outerwear Collection</span>
          <h2 class="section-title">The FieldOuterPond Master Jacket Collection</h2>
          <p class="section-subtitle">Engineered for mountain ridge traverses, heavy rains, deep winter blizzards, and rugged backcountry chores.</p>
        </div>

        <div class="pillars-grid">
          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-waterproof-shell.jpg" alt="Stormproof technical mountain shell jacket with waterproof zippers" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Alpine Pond Storm Hardshell</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">3-layer 28,000mm waterproof shell with pit zips, helmet-compatible hood, and welded storm flap pockets for extreme alpine rainstorms.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-insulated-parka.jpg" alt="Warm winter down-insulated mountain parka in freezing winter climate" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Sub-Zero Expedition Down Parka</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">800-fill power RDS European goose down encased in ripstop weather-resistant shell with fleece-lined handwarmer pockets for sub-zero cold.</p>
            </div>
          </div>

          <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow: hidden; box-shadow: var(--shadow-sm);">
            <div style="height: 250px; overflow: hidden;">
              <img src="images/feature-field-chore-coat.jpg" alt="Rugged utility canvas field chore coat with reinforced collar and brass buttons" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div style="padding: 1.5rem;">
              <h3 style="font-size: 1.2rem; margin-bottom: 0.5rem; color: var(--text-main);">The Highland Waxed Field Chore Coat</h3>
              <p style="font-size: 0.9rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Heavyweight 12oz waxed duck canvas chore jacket featuring corduroy collar, interior game pocket, and reinforced elbow patches.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- 4-Stage Outerwear Construction Lifecycle -->
    <section class="tool-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Fabrication Standards</span>
          <h2 class="section-title">The Four Stages of Field Jacket Construction</h2>
          <p class="section-subtitle">From raw heavy-twist organic cotton duck to storm-chamber testing.</p>
        </div>

        <div class="pillars-grid" style="grid-template-columns: repeat(4, 1fr); gap: 1.5rem;">
          <div class="pillar-card">
            <div class="pillar-icon-wrapper">1ï¸âƒ£</div>
            <h3 style="font-size: 1.15rem;">Sailcloth Weaving</h3>
            <p style="font-size: 0.88rem;">Weaving high-twist long-staple cotton into 12oz military-spec duck canvas with dense warp and weft counts for maximum puncture resistance.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">2ï¸âƒ£</div>
            <h3 style="font-size: 1.15rem;">Wax Infusion</h3>
            <p style="font-size: 0.88rem;">Deep hot-roller pressure impregnation of custom handcrafted beeswax and paraffin blends deep into the yarn core, achieving lifetime water repellency.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">3ï¸âƒ£</div>
            <h3 style="font-size: 1.15rem;">Articulated Cutting</h3>
            <p style="font-size: 0.88rem;">Precision cutting with anatomical shoulder gussets and bi-swing back pleats, allowing full range of arm motion without jacket ride-up.</p>
          </div>

          <div class="pillar-card">
            <div class="pillar-icon-wrapper">4ï¸âƒ£</div>
            <h3 style="font-size: 1.15rem;">Storm Verification</h3>
            <p style="font-size: 0.88rem;">Each production prototype undergoes 4 hours in our simulated hurricane rain chamber with 40-knot winds to guarantee zero moisture ingress.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Jacket Fabric & Hydrostatic Head Matrix -->
    <section class="tool-section" style="background: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Technical Performance Matrix</span>
          <h2 class="section-title">FieldOuterPond Fabric & Membrane Matrix</h2>
          <p class="section-subtitle">Compare hydrostatic head ratings, breathability scores, and fabric weights across our jackets.</p>
        </div>

        <div style="background: var(--bg-surface); border: 1px solid var(--border-subtle); border-radius: var(--radius-md); overflow-x: auto; box-shadow: var(--shadow-sm); padding: 1.5rem;">
          <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.92rem;">
            <thead>
              <tr style="border-bottom: 2px solid var(--border-subtle); color: var(--accent-gold);">
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Jacket Model</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Shell Material</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Waterproof Rating</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Breathability (MVTR)</th>
                <th style="padding: 1rem; font-family: var(--font-mono); font-size: 0.82rem; text-transform: uppercase;">Optimal Climate</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Alpine Storm Hardshell</td>
                <td style="padding: 1rem; color: var(--text-muted);">3-Layer 70D Ripstop Nylon</td>
                <td style="padding: 1rem; color: var(--text-muted);">28,000 mm Hydrostatic Head</td>
                <td style="padding: 1rem; color: var(--text-muted);">20,000 g/mÂ²/24hr</td>
                <td style="padding: 1rem; color: var(--text-muted);">Heavy rain, mountain ascents, and high-aerobic trekking</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Highland Waxed Field Coat</td>
                <td style="padding: 1rem; color: var(--text-muted);">12oz Martexin Waxed Duck Cotton</td>
                <td style="padding: 1rem; color: var(--text-muted);">12,000 mm Water Repellency</td>
                <td style="padding: 1rem; color: var(--text-muted);">14,000 g/mÂ²/24hr (Natural)</td>
                <td style="padding: 1rem; color: var(--text-muted);">Bushcraft, forest trekking, windstorms, and everyday field wear</td>
              </tr>
              <tr style="border-bottom: 1px solid var(--border-subtle);">
                <td style="padding: 1rem; font-weight: 700;">Sub-Zero Expedition Parka</td>
                <td style="padding: 1rem; color: var(--text-muted);">800-Fill Goose Down + DWR Cordura</td>
                <td style="padding: 1rem; color: var(--text-muted);">20,000 mm Storm Barrier</td>
                <td style="padding: 1rem; color: var(--text-muted);">15,000 g/mÂ²/24hr</td>
                <td style="padding: 1rem; color: var(--text-muted);">Sub-zero winter blizzards, Arctic travel, and alpine base camps</td>
              </tr>
              <tr>
                <td style="padding: 1rem; font-weight: 700;">Heritage Chore Utility Jacket</td>
                <td style="padding: 1rem; color: var(--text-muted);">10oz Unwaxed Heavy Duck Canvas</td>
                <td style="padding: 1rem; color: var(--text-muted);">DWR Wind-Resistant 5,000 mm</td>
                <td style="padding: 1rem; color: var(--text-muted);">25,000 g/mÂ²/24hr (Max Airflow)</td>
                <td style="padding: 1rem; color: var(--text-muted);">Mild spring/autumn chores, workshop, and campfire evenings</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div style="text-align: center; margin-top: 3rem;">
          <a href="about.html" class="btn btn-gold">Discover Our Outerwear Heritage</a>
          <a href="blog.html" class="btn btn-outline" style="margin-left: 0.75rem;">Explore Full Field Journal</a>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="pillars-section" style="background: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="section-eyebrow">Outfitter Advice</span>
          <h2 class="section-title">Waxed Jacket Care & Waterproofing FAQ</h2>
          <p class="section-subtitle">Guidance on wax re-proofing, membrane cleaning, and jacket fit.</p>
        </div>

        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 1.5rem; max-width: 1040px; margin: 0 auto;">
          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How often should I re-proof my waxed canvas field jacket?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Under normal seasonal use, applying a fresh coat of paraffin/beeswax dressing once a year (or whenever water stops beading on high-friction shoulders and sleeve creases) restores 100% water repellency and enhances the canvas patina.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">Can I machine wash a waxed canvas jacket?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">Never machine wash, dry clean, or use hot water on a waxed jacket, as detergents strip the protective wax barrier permanently. Simply wipe off dried mud with a cold water damp sponge and stiff bristle brush.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">What makes 3-layer hardshell jackets superior to 2.5-layer shells?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">A 3-layer jacket bonds a durable outer face fabric, the waterproof membrane, and a smooth internal tricot backer into a unified laminate. This protects the membrane from skin body oils and sweat salts, tripling the jacket's operational lifespan under heavy backpack straps.</p>
          </div>

          <div style="background: var(--bg-surface-alt); border: 1px solid var(--border-subtle); border-radius: var(--radius-sm); padding: 1.75rem;">
            <h4 style="font-size: 1.05rem; color: var(--accent-gold); margin-bottom: 0.5rem;">How should I layer under my FieldOuterPond jacket for winter?</h4>
            <p style="font-size: 0.92rem; color: var(--text-muted); line-height: 1.6; margin-bottom: 0;">We recommend our 3-tier layering system: a breathable merino wool base layer against the skin, an insulating fleece or lightweight down mid-layer, and our unlined storm hardshell or waxed coat as the outer wind/rain armor.</p>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <div class="brand-logo" style="color: var(--accent-gold); margin-bottom: 0.5rem;">
            <div class="logo-badge">ðŸ§¥</div>
            <div class="brand-title-group">
              <span class="brand-name">FieldOuterPond</span>
              <span class="brand-sub">Weatherproof Field Jackets</span>
            </div>
          </div>
          <p>
            An independent outerwear atelier dedicated to heavy-duty waxed canvas field jackets, stormproof alpine shells, and lifetime repairable backcountry utility coats.
          </p>
        </div>

        <div>
          <h4 class="footer-heading">Outerwear Links</h4>
          <ul class="footer-links">
            <li><a href="index.php">Atelier Home</a></li>
            <li><a href="about.html">Outerwear Heritage</a></li>
            <li><a href="blog.html">Field Journal</a></li>
            <li><a href="#weather-configurator">Weather Configurator</a></li>
            <li><a href="contact.html">Outfitter Concierge</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Trust & Governance</h4>
          <ul class="footer-links">
            <li><a href="privacy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms of Service</a></li>
            <li><a href="disclaimer.html">Outerwear & Weather Disclaimer</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
          </ul>
        </div>

        <div>
          <h4 class="footer-heading">Atelier Headquarters</h4>
          <p class="footer-contact-text">
            <strong>Atelier Desk:</strong><br>
            181 Mercer Street,<br>
            New York, NY 10012,<br>
            United States
          </p>
          <p class="footer-contact-text" style="margin-top: 0.75rem;">
            <strong>Inquiries:</strong><br>
            <a href="tel:+18887775845">+1-888-777-5845</a>
          </p>
        </div>
      </div>

      <div class="footer-bottom">
        <div>
          &copy; <?php echo date('Y'); ?> FieldOuterPond Atelier. All rights reserved. Unyielding protection in every storm.
        </div>
        <div class="footer-bottom-links">
          <a href="privacy.html">Privacy</a>
          <a href="terms.html">Terms</a>
          <a href="disclaimer.html">Disclaimer</a>
          <a href="cookies.html">Cookies</a>
        </div>
      </div>
    </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
