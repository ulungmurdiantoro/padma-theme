<?php get_header(); ?>
<main id="main">

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="wrap">
    <div class="page-hero__inner">
      <span class="clause">&sect; Portofolio</span>
      <h1>Platform &amp; identitas<br>ekosistem kami.</h1>
      <p class="lede">Produk dan platform yang telah kami bangun untuk ekosistem mutu nasional — masing-masing dengan standar, layanan, dan dampak tersendiri.</p>
    </div>
  </div>
</div>

<!-- PORTFOLIO GRID -->
<section class="sec">
  <div class="wrap">

    <?php
    $portfolio_query = new WP_Query( [
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ] );

    if ( $portfolio_query->have_posts() ) :
        echo '<div class="portfolio-full reveal d1">';
        while ( $portfolio_query->have_posts() ) :
            $portfolio_query->the_post();
            $thumb_url = has_post_thumbnail() ? get_the_post_thumbnail_url( null, 'portfolio-thumb' ) : '';
            ?>
            <div class="portfolio-card">
              <?php if ( $thumb_url ) : ?>
                <div class="portfolio-card__logo">
                  <img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php the_title_attribute(); ?>" loading="lazy">
                </div>
              <?php endif; ?>
              <div class="portfolio-card__name"><?php the_title(); ?></div>
              <?php if ( get_the_excerpt() ) : ?>
                <div class="portfolio-card__tag"><?php the_excerpt(); ?></div>
              <?php endif; ?>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        echo '</div>';
    else :
        /* Fallback: brands from functions.php */
        $img_base = get_template_directory_uri() . '/assets/images/platform/';

        $brands_extended = [
            [ 'logo' => 'LOGO-PADMA-WHITE.gif',                   'name' => 'Padma Global Nusatama', 'tag' => 'Holding &middot; Parent Company' ],
            [ 'logo' => 'LOGO-MUTU-PERGURUAN-TINGGI-17032025.png', 'name' => 'Mutu Perguruan Tinggi', 'tag' => 'Edukasi &middot; Perguruan Tinggi' ],
            [ 'logo' => 'LOGO-LABNESIA-001.gif',                  'name' => 'Labnesia',               'tag' => 'Laboratorium &middot; Akreditasi' ],
            [ 'logo' => 'LOGO-EXPERTIA-002.png',                  'name' => 'Expertia',               'tag' => 'Kompetensi &middot; Sertifikasi' ],
            [ 'logo' => 'MUTULULUSAN-LOGO-3.gif',                 'name' => 'Mutu Lulusan',           'tag' => 'Pendidikan &middot; SDM' ],
        ];

        echo '<div class="portfolio-full reveal d1">';
        foreach ( $brands_extended as $b ) {
            echo '<div class="portfolio-card">';
            echo '<div class="portfolio-card__logo">';
            echo '<img src="' . esc_url( $img_base . $b['logo'] ) . '" alt="' . esc_attr( $b['name'] ) . '" loading="lazy">';
            echo '</div>';
            echo '<div class="portfolio-card__name">' . esc_html( $b['name'] ) . '</div>';
            echo '<div class="portfolio-card__tag">' . wp_kses_post( $b['tag'] ) . '</div>';
            echo '</div>';
        }
        echo '</div>';
    endif;
    ?>

  </div>
</section>

<!-- CREDIBILITY -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="cred-grid">
      <div class="reveal">
        <div class="sec__head" style="margin-bottom:28px">
          <span class="clause">Standar &amp; Kredensial</span>
          <h2>Dibangun di atas standar internasional.</h2>
          <p class="lede">Setiap platform dan layanan kami mengacu pada standar internasional yang telah teruji.</p>
        </div>
        <div class="seals-grid">
          <div class="seal-card">
            <span class="k">Standar</span>
            <h3>ISO/IEC 17025:2017</h3>
            <p>Acuan kompetensi laboratorium pengujian dan kalibrasi.</p>
          </div>
          <div class="seal-card">
            <span class="k">Standar</span>
            <h3>ISO 21001:2018</h3>
            <p>Sistem manajemen organisasi pendidikan.</p>
          </div>
          <div class="seal-card">
            <span class="k">Regulasi</span>
            <h3>Permendiktisaintek</h3>
            <p>Selaras No. 39 &amp; 40 Tahun 2025 tentang mutu perguruan tinggi.</p>
          </div>
          <div class="seal-card">
            <span class="k">Pengalaman</span>
            <h3>Sejak 2017</h3>
            <p>Implementasi standar ISO lintas sektor sejak 2017.</p>
          </div>
        </div>
      </div>
      <div class="stats-grid reveal d1">
        <div class="stat-box"><b>600<em>+</em></b><span>Instansi &amp; perguruan tinggi dilayani</span></div>
        <div class="stat-box"><b>4.500<em>+</em></b><span>Peserta &amp; sivitas akademika</span></div>
        <div class="stat-box"><b>550<em>+</em></b><span>SDM terlatih &amp; tersertifikasi</span></div>
        <div class="stat-box"><b>30<em>+</em></b><span>Laboratorium terakreditasi</span></div>
        <div class="stat-box"><b>60<em>+</em></b><span>Event nasional terselenggara</span></div>
        <div class="stat-box"><b>8</b><span>Bidang laboratorium didampingi</span></div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap">
    <h2 class="reveal">Bergabung dengan ratusan<br>institusi yang telah kami layani.</h2>
    <div class="cta-band__actions reveal d1">
      <a class="btn btn--ink btn--lg" href="<?php echo esc_url( home_url('/kontak/') ); ?>">Mulai Konsultasi</a>
      <a class="btn btn--ghost btn--lg" href="<?php echo esc_url( home_url('/platform/') ); ?>">Lihat Platform</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
