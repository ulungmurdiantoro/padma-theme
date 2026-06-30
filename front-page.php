<?php get_header(); ?>
<main id="main">

<!-- ============================== HERO ============================== -->
<section class="hero">
  <div class="wrap">
    <div class="hero__inner reveal">
      <span class="eyebrow">PT Padma Global Nusatama &middot; Ekosistem Mutu Nasional</span>
      <h1>
        Kami membangun<br>
        ekosistem <em>mutu</em><br>
        Indonesia.
      </h1>
      <p class="hero__sub">Dari perguruan tinggi hingga laboratorium — kami hadir dengan pelatihan, pendampingan, dan sertifikasi kompetensi berstandar internasional.</p>
      <div class="hero__cta">
        <a class="btn btn--ink btn--lg" href="<?php echo esc_url( home_url('/platform/') ); ?>">
          Lihat Platform
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url('/tentang/') ); ?>">Tentang Kami</a>
      </div>
    </div>
  </div>
</section>

<!-- ============================== STATS ROW ============================== -->
<div class="stats-row">
  <div class="stats-row__item reveal">
    <div class="stats-row__num">600<em>+</em></div>
    <div class="stats-row__label">Instansi &amp; perguruan tinggi dilayani</div>
  </div>
  <div class="stats-row__item reveal d1">
    <div class="stats-row__num">4.500<em>+</em></div>
    <div class="stats-row__label">Peserta &amp; sivitas akademika</div>
  </div>
  <div class="stats-row__item reveal d2">
    <div class="stats-row__num">550<em>+</em></div>
    <div class="stats-row__label">SDM terlatih &amp; tersertifikasi</div>
  </div>
  <div class="stats-row__item reveal d3">
    <div class="stats-row__num">30<em>+</em></div>
    <div class="stats-row__label">Laboratorium terakreditasi</div>
  </div>
  <div class="stats-row__item reveal d4">
    <div class="stats-row__num">2017</div>
    <div class="stats-row__label">Berakar implementasi ISO</div>
  </div>
</div>

<!-- ============================== PORTFOLIO STRIP ============================== -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="sec__head reveal" style="margin-bottom:24px">
      <span class="clause">&sect; Platform &amp; Portofolio</span>
      <h2>Ekosistem yang kami bangun.</h2>
    </div>

    <?php
    $img_base  = get_template_directory_uri() . '/assets/images/platform/';
    $brands    = padma_get_portfolio_brands();
    echo '<div class="port-strip__logos reveal d1">';
    foreach ( $brands as $b ) {
      echo '<div class="port-strip__logo-tile">';
      echo '<img src="' . esc_url( $img_base . $b['logo'] ) . '" alt="' . esc_attr( $b['name'] ) . '" loading="lazy">';
      echo '</div>';
    }
    echo '</div>';
    ?>

    <a class="port-strip__link reveal d2" href="<?php echo esc_url( home_url('/portofolio/') ); ?>">
      Lihat semua portofolio
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
    </a>
  </div>
</section>

<!-- ============================== TENTANG ============================== -->
<section class="sec">
  <div class="wrap">
    <div class="split-about">
      <div class="split-about__quote reveal">
        Kualitas unggul <em>tidak harus rumit</em> — cukup terukur, konsisten, dan berdampak.
      </div>
      <div class="split-about__body reveal d1">
        <p>PT Padma Global Nusatama lahir dari pengalaman panjang mengimplementasikan standar ISO di berbagai institusi Indonesia. Kami percaya bahwa mutu yang baik adalah mutu yang dapat dijalankan secara konsisten oleh siapa saja.</p>
        <p>Dengan dua platform utama — <strong style="color:#fff">mutuperguruantinggi.id</strong> dan <strong style="color:#fff">labnesia.id</strong> — kami menjangkau dua sektor yang menjadi tulang punggung kualitas sumber daya manusia Indonesia: pendidikan tinggi dan laboratorium.</p>
        <p>Sejak 2017, kami telah mendampingi lebih dari 600 institusi dan melatih ribuan SDM untuk mencapai kompetensi dan akreditasi berstandar internasional.</p>
        <a class="btn btn--ghost" style="margin-top:8px" href="<?php echo esc_url( home_url('/tentang/') ); ?>">
          Pelajari lebih lanjut
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ============================== PLATFORM FEATURED ============================== -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">&sect; Dua Platform</span>
      <h2>Satu standar, dua spesialisasi.</h2>
      <p class="lede">Platform kami fokus pada bidang masing-masing namun terhubung satu sama lain melalui standar mutu yang sama.</p>
    </div>

    <div class="plats-home">
      <!-- MUTU PT -->
      <article class="plat-home reveal" style="--accent:var(--c-mpt)">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mutupt-mark.png' ); ?>" alt="Mutu Perguruan Tinggi">
          </div>
        </div>
        <div>
          <div class="plat-home__code">PT-EDU &middot; Perguruan Tinggi</div>
          <h3>mutuperguruantinggi.id</h3>
          <p>Platform peningkatan mutu dan tata kelola perguruan tinggi. Menyediakan Pelatihan 40 JP, pendampingan SPMI/AMI, dan Sistem AMI Digital selaras Permendiktisaintek 39 &amp; 40/2025.</p>
        </div>
        <div class="plat-home__footer">
          <div class="plat-home__metrics">
            <div class="plat-home__metric">
              <b>600<em style="color:var(--brass-2);font-style:normal">+</em></b>
              <span>Institusi</span>
            </div>
            <div class="plat-home__metric">
              <b>550<em style="color:var(--brass-2);font-style:normal">+</em></b>
              <span>SDM sertifikasi</span>
            </div>
          </div>
          <a class="plat-home__link" href="<?php echo esc_url( home_url('/platform/') ); ?>">
            Pelajari
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>

      <!-- LABNESIA -->
      <article class="plat-home reveal d1" style="--accent:var(--c-lab)">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-labnesia.gif' ); ?>" alt="Labnesia">
          </div>
        </div>
        <div>
          <div class="plat-home__code">PT-LAB &middot; Laboratorium</div>
          <h3>labnesia.id</h3>
          <p>Mitra pengembangan laboratorium untuk sektor pendidikan, industri, dan pemerintah. Fokus pada pendampingan akreditasi ISO/IEC 17025:2017 dan sertifikasi kompetensi SDM lab.</p>
        </div>
        <div class="plat-home__footer">
          <div class="plat-home__metrics">
            <div class="plat-home__metric">
              <b>30<em style="color:var(--brass-2);font-style:normal">+</em></b>
              <span>Lab terakreditasi</span>
            </div>
            <div class="plat-home__metric">
              <b>100<em style="color:var(--brass-2);font-style:normal">+</em></b>
              <span>Personel lab</span>
            </div>
          </div>
          <a class="plat-home__link" href="<?php echo esc_url( home_url('/platform/') ); ?>">
            Pelajari
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ============================== CTA BAND ============================== -->
<section class="cta-band">
  <div class="wrap">
    <h2 class="reveal">Siap membangun mutu<br>institusi Anda?</h2>
    <p class="reveal d1">Tim kami siap mendampingi dari diagnosis awal hingga sertifikasi &mdash; tanpa kerumitan yang tidak perlu.</p>
    <div class="cta-band__actions reveal d2">
      <a class="btn btn--ink btn--lg" href="<?php echo esc_url( home_url('/kontak/') ); ?>">Mulai Konsultasi</a>
      <a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url('/platform/') ); ?>">Lihat Platform</a>
    </div>
  </div>
</section>

<!-- ============================== MARQUEE ============================== -->
<div class="ledger" aria-hidden="true">
  <div class="ledger__track">
    <span class="ledger__item">ISO/IEC 17025:2017</span>
    <span class="ledger__item">ISO 21001:2018</span>
    <span class="ledger__item">Permendiktisaintek 39 &amp; 40/2025</span>
    <span class="ledger__item">Pelatihan 40 JP</span>
    <span class="ledger__item">Pendampingan Akreditasi</span>
    <span class="ledger__item">SPMI &amp; AMI</span>
    <span class="ledger__item">Sertifikasi Kompetensi</span>
    <span class="ledger__item">ISO/IEC 17025:2017</span>
    <span class="ledger__item">ISO 21001:2018</span>
    <span class="ledger__item">Permendiktisaintek 39 &amp; 40/2025</span>
    <span class="ledger__item">Pelatihan 40 JP</span>
    <span class="ledger__item">Pendampingan Akreditasi</span>
    <span class="ledger__item">SPMI &amp; AMI</span>
    <span class="ledger__item">Sertifikasi Kompetensi</span>
  </div>
</div>

</main>
<?php get_footer(); ?>
