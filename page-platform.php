<?php get_header(); ?>
<main id="main">

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="wrap">
    <div class="page-hero__inner">
      <span class="clause">&sect; Platform</span>
      <h1>Platform yang kami<br>bangun untuk Indonesia.</h1>
      <p class="lede">Empat platform yang saling melengkapi dalam satu ekosistem mutu — dari perguruan tinggi dan laboratorium hingga kompetensi SDM dan kualitas lulusan.</p>
    </div>
  </div>
</div>

<!-- PLATFORM GRID -->
<section class="sec">
  <div class="wrap">
    <?php
    $brands   = padma_get_portfolio_brands();
    $img_base = get_template_directory_uri() . '/assets/images/platform/';
    ?>

    <div class="platform-list">
      <?php foreach ( $brands as $i => $p ) :
        $delay = ( $i % 3 ) ? ' d' . ( $i % 3 ) : '';
      ?>
      <article class="platform-row reveal<?php echo $delay; ?>" style="--accent:<?php echo esc_attr( $p['accent'] ); ?>">
        <div class="platform-row__logo">
          <div class="logo-box">
            <img src="<?php echo esc_url( $img_base . $p['logo'] ); ?>"
                 alt="<?php echo esc_attr( $p['name'] ); ?>" loading="lazy">
          </div>
        </div>
        <div class="platform-row__body">
          <div class="platform-row__tag"><?php echo wp_kses_post( $p['tag'] ); ?></div>
          <h3 class="platform-row__name"><?php echo esc_html( $p['name'] ); ?></h3>
          <div class="platform-row__url"><?php echo esc_html( preg_replace('#^https?://#', '', rtrim( $p['url'], '/' ) ) ); ?></div>
        </div>
        <a class="platform-row__cta" href="<?php echo esc_url( $p['url'] ); ?>" target="_blank" rel="noopener">
          Kunjungi
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M7 17 17 7M9 7h8v8"/></svg>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- LAYANAN UTAMA -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">Layanan di Semua Platform</span>
      <h2>Tiga pilar layanan kami.</h2>
      <p class="lede">Setiap platform kami didukung oleh tiga layanan utama yang memastikan perjalanan mutu institusi dan SDM Anda berjalan tuntas.</p>
    </div>
    <div class="pillars reveal d1">
      <div class="pillar">
        <span class="pillar__no">01</span>
        <div>
          <h3>Pelatihan &amp; Workshop</h3>
          <p>Program terstruktur dengan modul sesuai standar — online, offline, dan hybrid — dilengkapi sertifikat kompetensi yang diakui secara nasional dan internasional.</p>
        </div>
      </div>
      <div class="pillar">
        <span class="pillar__no">02</span>
        <div>
          <h3>Pendampingan Implementasi</h3>
          <p>Konsultan berpengalaman mendampingi langsung dari gap analysis, penyusunan dokumen, internal audit, hingga institusi siap menghadapi asesmen eksternal.</p>
        </div>
      </div>
      <div class="pillar">
        <span class="pillar__no">03</span>
        <div>
          <h3>Sertifikasi Kompetensi</h3>
          <p>Pengakuan formal kompetensi SDM melalui skema sertifikasi sesuai KKNI dan standar internasional — bukti nyata bahwa SDM Anda memenuhi standar terbaik.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap">
    <h2 class="reveal">Mulai dari platform<br>yang tepat untuk Anda.</h2>
    <p class="reveal d1">Konsultasikan kebutuhan institusi Anda — gratis, tanpa komitmen awal.</p>
    <div class="cta-band__actions reveal d2">
      <a class="btn btn--ink btn--lg" href="<?php echo esc_url( home_url('/kontak/') ); ?>">Hubungi Kami</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
