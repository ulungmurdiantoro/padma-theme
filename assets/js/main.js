/* Padma Global Nusatama — main.js */

(function () {
  'use strict';

  /* ── Mobile menu ── */
  var toggle = document.getElementById('menuToggle');
  var nav    = document.getElementById('nav');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var isOpen = nav.classList.toggle('open');
      toggle.setAttribute('aria-expanded', isOpen);
      toggle.setAttribute('aria-label', isOpen ? 'Tutup menu' : 'Buka menu');
    });

    nav.addEventListener('click', function (e) {
      if (e.target.tagName === 'A') {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && nav.classList.contains('open')) {
        nav.classList.remove('open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', 'Buka menu');
        toggle.focus();
      }
    });
  }

  var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ── Nav scroll behavior (hide on scroll down, solidify after threshold) ── */
  var headEl = document.querySelector('.head');

  if (headEl) {
    var lastScrollY    = window.scrollY;
    var ticking        = false;
    var HIDE_THRESHOLD = 80;

    var updateHead = function () {
      var currentY = window.scrollY;

      headEl.classList.toggle('head--scrolled', currentY > HIDE_THRESHOLD);

      var navIsOpen = nav && nav.classList.contains('open');
      if (currentY > lastScrollY && currentY > HIDE_THRESHOLD && !navIsOpen) {
        headEl.classList.add('head--hidden');
      } else {
        headEl.classList.remove('head--hidden');
      }

      lastScrollY = currentY;
      ticking = false;
    };

    window.addEventListener('scroll', function () {
      if (!ticking) {
        requestAnimationFrame(updateHead);
        ticking = true;
      }
    }, { passive: true });
  }

  /* ── Custom cursor (desktop / fine-pointer only) ── */
  if (!prefersReduced && window.matchMedia('(pointer: fine)').matches) {
    var cursorEl = document.createElement('div');
    cursorEl.className = 'cursor';
    cursorEl.setAttribute('aria-hidden', 'true');

    var ringEl = document.createElement('span');
    ringEl.className = 'cursor__ring';
    cursorEl.appendChild(ringEl);
    document.body.appendChild(cursorEl);

    var mouseX         = window.innerWidth / 2;
    var mouseY         = window.innerHeight / 2;
    var curX           = mouseX;
    var curY           = mouseY;
    var cursorVisible  = false;
    var HOVER_SELECTOR = 'a, button, .btn, [role="button"]';

    window.addEventListener('mousemove', function (e) {
      mouseX = e.clientX;
      mouseY = e.clientY;
      if (!cursorVisible) {
        cursorVisible = true;
        cursorEl.style.opacity = '1';
      }
    });

    document.addEventListener('mouseleave', function () {
      cursorEl.style.opacity = '0';
    });

    document.addEventListener('mouseover', function (e) {
      if (e.target.closest && e.target.closest(HOVER_SELECTOR)) {
        cursorEl.classList.add('is-hover');
      }
    });

    document.addEventListener('mouseout', function (e) {
      if (!e.target.closest) return;
      var stillOnHoverTarget = e.relatedTarget && e.relatedTarget.closest && e.relatedTarget.closest(HOVER_SELECTOR);
      if (e.target.closest(HOVER_SELECTOR) && !stillOnHoverTarget) {
        cursorEl.classList.remove('is-hover');
      }
    });

    var CURSOR_LERP = 0.15;
    var tickCursor  = function () {
      curX += (mouseX - curX) * CURSOR_LERP;
      curY += (mouseY - curY) * CURSOR_LERP;
      cursorEl.style.transform = 'translate3d(' + (curX - 4) + 'px,' + (curY - 4) + 'px,0)';
      requestAnimationFrame(tickCursor);
    };
    requestAnimationFrame(tickCursor);
  }

  /* ── Hero globe (3D wireframe sphere, canvas) ── */
  var globeCanvas = document.querySelector('.hero-globe__canvas');

  if (globeCanvas && globeCanvas.getContext && !window.matchMedia('(max-width: 860px)').matches) {
    var gCtx = globeCanvas.getContext('2d');
    var gDpr = window.devicePixelRatio || 1;
    var gSize = 0;

    var resizeGlobe = function () {
      gSize = globeCanvas.clientWidth;
      globeCanvas.width  = gSize * gDpr;
      globeCanvas.height = gSize * gDpr;
      gCtx.setTransform(gDpr, 0, 0, gDpr, 0, 0);
    };
    resizeGlobe();
    window.addEventListener('resize', resizeGlobe);

    var GLOBE_LAT_LINES = 6;
    var GLOBE_LON_LINES = 9;
    var GLOBE_SEGMENTS  = 72;
    var GLOBE_TILT      = -0.4;
    var cosTilt = Math.cos(GLOBE_TILT);
    var sinTilt = Math.sin(GLOBE_TILT);

    var projectGlobePoint = function (x, y, z, theta) {
      var cosT = Math.cos(theta), sinT = Math.sin(theta);
      var x1 = x * cosT + z * sinT;
      var z1 = -x * sinT + z * cosT;
      var y1 = y * cosTilt - z1 * sinTilt;
      var z2 = y * sinTilt + z1 * cosTilt;
      return { x: x1, y: y1, z: z2 };
    };

    var strokeGlobeLine = function (pts) {
      var k, a, b, t, alpha;
      for (k = 1; k < pts.length; k++) {
        a = pts[k - 1];
        b = pts[k];
        t = ((a.z + b.z) / 2 + 1) / 2;
        alpha = .12 + .58 * t;
        gCtx.strokeStyle = 'rgba(196,171,255,' + alpha.toFixed(3) + ')';
        gCtx.beginPath();
        gCtx.moveTo(a.x, a.y);
        gCtx.lineTo(b.x, b.y);
        gCtx.stroke();
      }
    };

    var drawGlobe = function (theta) {
      var r  = gSize / 2 * 0.86;
      var cx = gSize / 2;
      var cy = gSize / 2;
      var i, j, u, v, pts, p, sinV, cosV, sinU, cosU;

      gCtx.clearRect(0, 0, gSize, gSize);
      gCtx.lineWidth = 1.1;

      for (i = 0; i < GLOBE_LAT_LINES; i++) {
        v = Math.PI * (i + 1) / (GLOBE_LAT_LINES + 1);
        sinV = Math.sin(v);
        cosV = Math.cos(v);
        pts = [];
        for (j = 0; j <= GLOBE_SEGMENTS; j++) {
          u = (j / GLOBE_SEGMENTS) * Math.PI * 2;
          p = projectGlobePoint(sinV * Math.cos(u), cosV, sinV * Math.sin(u), theta);
          pts.push({ x: cx + p.x * r, y: cy - p.y * r, z: p.z });
        }
        strokeGlobeLine(pts);
      }

      for (i = 0; i < GLOBE_LON_LINES; i++) {
        u = (Math.PI * 2 * i) / GLOBE_LON_LINES;
        cosU = Math.cos(u);
        sinU = Math.sin(u);
        pts = [];
        for (j = 0; j <= GLOBE_SEGMENTS; j++) {
          v = (j / GLOBE_SEGMENTS) * Math.PI;
          p = projectGlobePoint(Math.sin(v) * cosU, Math.cos(v), Math.sin(v) * sinU, theta);
          pts.push({ x: cx + p.x * r, y: cy - p.y * r, z: p.z });
        }
        strokeGlobeLine(pts);
      }
    };

    if (prefersReduced) {
      drawGlobe(0);
    } else {
      var GLOBE_PERIOD = 55000;
      var globeStart   = null;
      var tickGlobe    = function (ts) {
        if (globeStart === null) globeStart = ts;
        drawGlobe(((ts - globeStart) / GLOBE_PERIOD) * Math.PI * 2);
        requestAnimationFrame(tickGlobe);
      };
      requestAnimationFrame(tickGlobe);
    }
  }

  /* ── Scroll reveal ── */
  var revealEls = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');

  if (prefersReduced || !('IntersectionObserver' in window)) {
    revealEls.forEach(function (el) { el.classList.add('is-in'); });
    return;
  }

  var revealObserver = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-in');
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.14, rootMargin: '0px 0px -8% 0px' });

  revealEls.forEach(function (el) { revealObserver.observe(el); });

  /* ── Stat counters (count-up on scroll into view) ── */
  var counters = document.querySelectorAll('[data-count-to]');

  if (counters.length) {
    var formatNumber = function (n) {
      return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
    };

    var easeOutExpo = function (t) {
      return t === 1 ? 1 : 1 - Math.pow(2, -10 * t);
    };

    var animateCount = function (el) {
      var target = parseInt(el.getAttribute('data-count-to'), 10);
      var valEl  = el.querySelector('.count-val');
      if (!valEl || isNaN(target)) return;

      var duration = 1200;
      var start    = null;

      function step(ts) {
        if (start === null) start = ts;
        var progress = Math.min((ts - start) / duration, 1);
        var eased    = easeOutExpo(progress);
        valEl.textContent = formatNumber(Math.round(eased * target));
        if (progress < 1) requestAnimationFrame(step);
      }

      requestAnimationFrame(step);
    };

    var countObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCount(entry.target);
          countObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach(function (el) { countObserver.observe(el); });
  }
})();
