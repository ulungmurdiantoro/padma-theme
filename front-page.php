<?php get_header(); ?>
<main id="main">

<!-- ============================== HERO ============================== -->
<section class="hero">
  <div class="hero-orb hero-orb--plum" aria-hidden="true"></div>
  <div class="hero-orb hero-orb--brass" aria-hidden="true"></div>
  <div class="wrap">
    <div class="hero__inner">
      <span class="eyebrow hero-eyebrow">PT Padma Global Nusatama &middot; Ekosistem Mutu Nasional</span>
      <h1>
        <span class="hero-line">Kami membangun</span>
        <span class="hero-line">ekosistem <em>mutu</em></span>
        <span class="hero-line">Indonesia.</span>
      </h1>
      <p class="hero__sub hero-sub">Dari perguruan tinggi hingga laboratorium — kami hadir dengan pelatihan, pendampingan, dan sertifikasi kompetensi berstandar internasional.</p>
      <div class="hero__cta hero-cta">
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
    <div class="stats-row__num" data-count-to="600"><span class="count-val">600</span><em>+</em></div>
    <div class="stats-row__label">Instansi &amp; perguruan tinggi dilayani</div>
  </div>
  <div class="stats-row__item reveal d1">
    <div class="stats-row__num" data-count-to="4500"><span class="count-val">4.500</span><em>+</em></div>
    <div class="stats-row__label">Peserta &amp; sivitas akademika</div>
  </div>
  <div class="stats-row__item reveal d2">
    <div class="stats-row__num" data-count-to="550"><span class="count-val">550</span><em>+</em></div>
    <div class="stats-row__label">SDM terlatih &amp; tersertifikasi</div>
  </div>
  <div class="stats-row__item reveal d3">
    <div class="stats-row__num" data-count-to="30"><span class="count-val">30</span><em>+</em></div>
    <div class="stats-row__label">Laboratorium terakreditasi</div>
  </div>
  <div class="stats-row__item reveal d4">
    <div class="stats-row__num" data-count-to="2017"><span class="count-val">2017</span></div>
    <div class="stats-row__label">Berakar implementasi ISO</div>
  </div>
</div>

<!-- ============================== PLATFORM STRIP ============================== -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="sec__head reveal" style="margin-bottom:24px">
      <span class="clause">&sect; Platform</span>
      <h2>Ekosistem yang kami bangun.</h2>
    </div>

    <?php
    $img_base = get_template_directory_uri() . '/assets/images/platform/';
    $brands   = padma_get_portfolio_brands();
    echo '<div class="port-strip__logos reveal d1">';
    foreach ( $brands as $b ) {
      echo '<a class="port-strip__logo-tile" href="' . esc_url( $b['url'] ) . '" target="_blank" rel="noopener" title="' . esc_attr( $b['name'] ) . '">';
      if ( ! empty( $b['clip'] ) ) {
        echo '<div class="logo-clip logo-clip--strip">';
        echo '<img src="' . esc_url( $img_base . $b['logo'] ) . '" alt="' . esc_attr( $b['name'] ) . '" loading="lazy">';
        echo '</div>';
      } else {
        echo '<img src="' . esc_url( $img_base . $b['logo'] ) . '" alt="' . esc_attr( $b['name'] ) . '" loading="lazy">';
      }
      echo '</a>';
    }
    echo '</div>';
    ?>

    <a class="port-strip__link reveal d2" href="<?php echo esc_url( home_url('/platform/') ); ?>">
      Lihat semua platform
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
      <span class="clause">&sect; Platform Unggulan</span>
      <h2>Satu standar, empat spesialisasi.</h2>
      <p class="lede">Setiap platform kami fokus pada bidangnya, terhubung melalui satu standar mutu yang sama.</p>
    </div>

    <div class="plats-home">
      <!-- MUTU PT -->
      <article class="plat-home reveal" style="--accent:var(--c-mpt)">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/platform/LOGO-MUTU-PT-ICON.png' ); ?>" alt="Mutu Perguruan Tinggi">
          </div>
        </div>
        <div>
          <div class="plat-home__code">Perguruan Tinggi &middot; Akreditasi</div>
          <h3>mutuperguruantinggi.id</h3>
          <p>Peningkatan mutu dan tata kelola perguruan tinggi — SPMI, AMI Digital, OBE, selaras Permendiktisaintek 39 &amp; 40/2025.</p>
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
          <a class="plat-home__link" href="https://mutuperguruantinggi.id" target="_blank" rel="noopener">
            Kunjungi
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>

      <!-- LABNESIA -->
      <article class="plat-home reveal d1" style="--accent:var(--c-lab)">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/platform/LOGO-LABNESIA-ICON.png' ); ?>" alt="Labnesia">
          </div>
        </div>
        <div>
          <div class="plat-home__code">Laboratorium &middot; ISO 17025</div>
          <h3>labnesia.id</h3>
          <p>Mitra pengembangan laboratorium untuk pendidikan, industri, dan pemerintah — pendampingan akreditasi ISO/IEC 17025:2017.</p>
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
          <a class="plat-home__link" href="https://labnesia.id" target="_blank" rel="noopener">
            Kunjungi
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>

      <!-- EXPERTIA -->
      <article class="plat-home reveal d2" style="--accent:#9B6DFF">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/platform/LOGO-EXPERTIA-ICON.png' ); ?>" alt="Expertia">
          </div>
        </div>
        <div>
          <div class="plat-home__code">Kompetensi &middot; Sertifikasi</div>
          <h3>expertia.id</h3>
          <p>Platform sertifikasi kompetensi SDM yang mengakui keahlian secara formal sesuai KKNI dan standar internasional.</p>
        </div>
        <div class="plat-home__footer">
          <div class="plat-home__metrics">
            <div class="plat-home__metric">
              <b>KKNI</b>
              <span>Skema sertifikasi</span>
            </div>
          </div>
          <a class="plat-home__link" href="https://expertia.id/" target="_blank" rel="noopener">
            Kunjungi
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>

      <!-- MUTU LULUSAN -->
      <article class="plat-home reveal d3" style="--accent:#E8A730">
        <div>
          <div class="plat-home__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/platform/MUTULULUSAN-ICON.png' ); ?>" alt="Mutu Lulusan">
          </div>
        </div>
        <div>
          <div class="plat-home__code">Pendidikan &middot; SDM</div>
          <h3>mutululusan.id</h3>
          <p>Platform peningkatan kualitas lulusan perguruan tinggi — memastikan SDM siap kerja dengan kompetensi terukur.</p>
        </div>
        <div class="plat-home__footer">
          <div class="plat-home__metrics">
            <div class="plat-home__metric">
              <b>SDM</b>
              <span>Siap kerja</span>
            </div>
          </div>
          <a class="plat-home__link" href="https://mutululusan.id/" target="_blank" rel="noopener">
            Kunjungi
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
          </a>
        </div>
      </article>
    </div>

    <div style="margin-top:32px" class="reveal d4">
      <a class="port-strip__link" href="<?php echo esc_url( home_url('/platform/') ); ?>">
        Lihat detail semua platform
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
      </a>
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
