/* ==========================================================================
   FIELDOUTERPOND — JAVASCRIPT CONTROLLERS
   Outerwear Weather Configurator, Theme Switcher, Search & Typography
   ========================================================================== */

document.addEventListener('DOMContentLoaded', () => {

  // 1. Reading Progress Bar
  const progressBar = document.querySelector('.reading-progress-bar');
  if (progressBar) {
    window.addEventListener('scroll', () => {
      const winScroll = document.documentElement.scrollTop || document.body.scrollTop;
      const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      const scrolled = height > 0 ? (winScroll / height) * 100 : 0;
      progressBar.style.width = scrolled + '%';
    });
  }

  // 2. 3-Mode Theme Switcher (Highland Pine -> Alpine Snow -> Midnight Storm)
  const themeBtn = document.querySelector('.theme-toggle-btn');
  const themes = ['theme-pine', 'theme-alpine', 'theme-storm'];
  const themeIcons = ['🧥', '🏔️', '⛈️'];
  
  let currentThemeIndex = 0;
  const savedTheme = localStorage.getItem('fieldouterpond_jacket_theme');
  if (savedTheme) {
    const idx = themes.indexOf(savedTheme);
    if (idx !== -1) {
      currentThemeIndex = idx;
      if (savedTheme !== 'theme-pine') {
        document.body.classList.add(savedTheme);
      }
    }
  }

  if (themeBtn) {
    themeBtn.textContent = themeIcons[currentThemeIndex];
    themeBtn.addEventListener('click', () => {
      document.body.classList.remove('theme-alpine', 'theme-storm');
      currentThemeIndex = (currentThemeIndex + 1) % themes.length;
      const newTheme = themes[currentThemeIndex];
      
      if (newTheme !== 'theme-pine') {
        document.body.classList.add(newTheme);
      }
      themeBtn.textContent = themeIcons[currentThemeIndex];
      localStorage.setItem('fieldouterpond_jacket_theme', newTheme);
    });
  }

  // 3. Mobile Navigation Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');
  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      const isOpen = navMenu.style.display === 'flex';
      navMenu.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        navMenu.style.flexDirection = 'column';
        navMenu.style.position = 'absolute';
        navMenu.style.top = '100%';
        navMenu.style.left = '0';
        navMenu.style.right = '0';
        navMenu.style.backgroundColor = 'var(--bg-surface)';
        navMenu.style.padding = '1.5rem';
        navMenu.style.boxShadow = 'var(--shadow-md)';
        navMenu.style.borderBottom = '1px solid var(--border-subtle)';
      }
    });
  }

  // 4. Interactive Field Jacket Weather & Insulation Configurator
  const tempSlider = document.getElementById('jacket-temp-slider');
  const stormSlider = document.getElementById('jacket-storm-slider');
  const tempVal = document.getElementById('jacket-temp-val');
  const stormVal = document.getElementById('jacket-storm-val');

  const membraneDisplay = document.getElementById('calc-membrane');
  const insulationDisplay = document.getElementById('calc-insulation');
  const weatherRatingDisplay = document.getElementById('calc-weather-rating');

  function calculateOuterwearConfig() {
    if (!tempSlider || !stormSlider) return;

    const tempF = parseInt(tempSlider.value, 10);
    const stormLevel = parseInt(stormSlider.value, 10);

    const stormLabels = ['Crisp Clear Wind', 'Highland Fog & Light Drizzle', 'Sustained Heavy Downpour', 'Severe Sub-Zero Blizzard'];
    
    if (tempVal) tempVal.textContent = `${tempF}°F (${Math.round((tempF - 32) * 5 / 9)}°C) Ambient Temp`;
    if (stormVal) stormVal.textContent = stormLabels[stormLevel] || 'Highland Fog & Light Drizzle';

    // Calculate Membrane
    let membraneText = "10oz Paraffin Waxed Cotton Sailcloth";
    let hydroRating = "15,000mm Hydrostatic Shell";
    if (stormLevel === 0) {
      membraneText = "Unlined 8.5oz Field Duck Canvas (High Breathability)";
      hydroRating = "Wind-Resistant 5,000mm Barrier";
    } else if (stormLevel === 1) {
      membraneText = "12oz Traditional Martexin Waxed Cotton";
      hydroRating = "Water-Repellent 12,000mm Proof";
    } else if (stormLevel === 2) {
      membraneText = "3-Layer Micro-Porous eVent Hardshell";
      hydroRating = "Stormproof 28,000mm Hydrostatic Head";
    } else if (stormLevel === 3) {
      membraneText = "Rugged Cordura Ripstop + Dual Membrane Shell";
      hydroRating = "Expedition Grade 35,000mm Storm Barrier";
    }

    // Calculate Insulation
    let insText = "Unlined Breathable Shell";
    if (tempF > 50) {
      insText = "Breathable Tartan Cotton Lining (Zero Bulk)";
    } else if (tempF > 32) {
      insText = "100g PrimaLoft Gold Synthetic Insulation";
    } else if (tempF > 10) {
      insText = "650-Fill Power RDS European Goose Down";
    } else {
      insText = "850-Fill Power Box-Baffled Polar Down Core";
    }

    // Weather Defense Score
    const defenseScore = (75 + stormLevel * 6 + (50 - tempF) * 0.3).toFixed(1);

    if (membraneDisplay) membraneDisplay.textContent = membraneText;
    if (insulationDisplay) insulationDisplay.textContent = insText;
    if (weatherRatingDisplay) weatherRatingDisplay.textContent = `${Math.min(99.9, defenseScore)}/100 Field Defense Index`;
  }

  if (tempSlider && stormSlider) {
    tempSlider.addEventListener('input', calculateOuterwearConfig);
    stormSlider.addEventListener('input', calculateOuterwearConfig);
    calculateOuterwearConfig();
  }

  // 5. In-Article Typography Scaler
  const fontDec = document.querySelector('.font-dec');
  const fontReset = document.querySelector('.font-reset');
  const fontInc = document.querySelector('.font-inc');
  const articleBody = document.querySelector('.article-body');

  let currentFontSize = 1.125;

  if (articleBody) {
    if (fontDec) {
      fontDec.addEventListener('click', () => {
        if (currentFontSize > 0.95) {
          currentFontSize -= 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
    if (fontReset) {
      fontReset.addEventListener('click', () => {
        currentFontSize = 1.125;
        articleBody.style.fontSize = '1.125rem';
      });
    }
    if (fontInc) {
      fontInc.addEventListener('click', () => {
        if (currentFontSize < 1.45) {
          currentFontSize += 0.075;
          articleBody.style.fontSize = currentFontSize + 'rem';
        }
      });
    }
  }

  // 6. Blog Archive Search & Live Filter Chips
  const searchInput = document.getElementById('jacket-search-input');
  const filterChips = document.querySelectorAll('.filter-chip');
  const blogCards = document.querySelectorAll('.blog-card');

  function filterPosts() {
    const query = searchInput ? searchInput.value.toLowerCase().trim() : '';
    const activeChip = document.querySelector('.filter-chip.active');
    const selectedCategory = activeChip ? activeChip.getAttribute('data-category') : 'all';

    blogCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category') || '';
      const text = card.textContent.toLowerCase();
      
      const matchesCategory = (selectedCategory === 'all' || cardCategory === selectedCategory);
      const matchesQuery = query === '' || text.includes(query);

      if (matchesCategory && matchesQuery) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (searchInput) {
    searchInput.addEventListener('input', filterPosts);
  }

  if (filterChips.length > 0) {
    filterChips.forEach(chip => {
      chip.addEventListener('click', () => {
        filterChips.forEach(c => c.classList.remove('active'));
        chip.classList.add('active');
        filterPosts();
      });
    });
  }

});
