<?php get_header(); ?>

<main id="main">
<span id="top"></span>

<!-- ============================== HERO ============================== -->
<section class="hero" aria-labelledby="hero-h">
  <div class="wrap hero__grid">
    <div class="hero__intro">
      <span class="eyebrow">PT Padma Global Nusatama &middot; berakar pada implementasi ISO</span>
      <h1 id="hero-h">Satu ekosistem untuk <span class="em">mutu</span>, <span class="em">kompetensi</span>, dan <span class="em-2">akreditasi</span> berstandar internasional.</h1>
      <p class="hero__lede">Kami menaungi dua platform — perguruan tinggi dan laboratorium — yang membantu institusi dan SDM di Indonesia mencapai standar terbaiknya: <strong style="color:#fff;font-weight:600">terlatih, terdampingi, dan tersertifikasi</strong>.</p>
      <div class="hero__cta">
        <a class="btn btn--ink" href="#ekosistem">Lihat dua platform
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </a>
        <a class="btn btn--ghost" href="#kontak">Konsultasi &amp; kemitraan</a>
      </div>

      <div class="ledger" aria-label="Kredensial dan standar">
        <div class="ledger__track" aria-hidden="true">
          <span class="ledger__item">ISO/IEC 17025:2017</span>
          <span class="ledger__item">ISO 21001:2018</span>
          <span class="ledger__item">Permendiktisaintek 39 &amp; 40/2025</span>
          <span class="ledger__item">Pelatihan 40 JP</span>
          <span class="ledger__item">Pendampingan Akreditasi</span>
          <span class="ledger__item">ISO/IEC 17025:2017</span>
          <span class="ledger__item">ISO 21001:2018</span>
          <span class="ledger__item">Permendiktisaintek 39 &amp; 40/2025</span>
          <span class="ledger__item">Pelatihan 40 JP</span>
          <span class="ledger__item">Pendampingan Akreditasi</span>
        </div>
      </div>
    </div>

    <div class="diagram-wrap" aria-hidden="true">
      <svg class="diagram" viewBox="0 0 520 440" role="img" aria-label="Diagram: Padma Global Nusatama menaungi dua platform">
        <path class="conn c1" d="M150 220 C 250 200, 300 170, 372 158" fill="none" stroke="#4080FF" stroke-width="1.8"/>
        <path class="conn c2" d="M150 220 C 250 240, 300 270, 372 282" fill="none" stroke="#22C78A" stroke-width="1.8"/>
        <!-- center node -->
        <g>
          <circle cx="96" cy="220" r="78" fill="#161616"/>
          <circle cx="96" cy="220" r="78" fill="none" stroke="#9B6DFF" stroke-width="1.5"/>
          <image href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/padma-mark-white.png' ); ?>" x="46" y="182" width="100" height="76" preserveAspectRatio="xMidYMid meet"/>
        </g>
        <!-- MUTU PT node -->
        <g>
          <rect x="293" y="120" width="225" height="76" rx="14" fill="#4080FF" fill-opacity=".12"/>
          <rect x="293" y="120" width="225" height="76" rx="14" fill="none" stroke="#4080FF" stroke-width="1.2"/>
          <rect x="305" y="134" width="48" height="48" rx="10" fill="rgba(64,128,255,.18)"/>
          <image href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mutupt-mark.png' ); ?>" x="307" y="136" width="44" height="44" preserveAspectRatio="xMidYMid meet"/>
          <text class="node-label" x="367" y="152" fill="#4080FF">MUTU PT</text>
          <text class="node-sub"  x="367" y="172">mutuperguruantinggi.id</text>
        </g>
        <!-- LABNESIA node -->
        <g>
          <rect x="293" y="244" width="225" height="76" rx="14" fill="#22C78A" fill-opacity=".10"/>
          <rect x="293" y="244" width="225" height="76" rx="14" fill="none" stroke="#22C78A" stroke-width="1.2"/>
          <rect x="305" y="258" width="48" height="48" rx="10" fill="rgba(34,199,138,.16)"/>
          <image href="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-labnesia.gif' ); ?>" x="307" y="260" width="44" height="44" preserveAspectRatio="xMidYMid meet"/>
          <text class="node-label" x="367" y="276" fill="#22C78A">LABNESIA</text>
          <text class="node-sub"  x="367" y="296">labnesia.id</text>
        </g>
      </svg>
    </div>
  </div>
</section>

<!-- ============================== §01 TENTANG ============================== -->
<section class="sec sec--alt" id="tentang" aria-labelledby="ab-h">
  <div class="wrap">
    <div class="about__grid">
      <aside class="about__aside reveal">
        <span class="clause">&sect; 01 &mdash; Tentang</span>
        <p class="quote">Kualitas unggul <span>tidak harus rumit.</span></p>
        <p style="margin-top:16px;color:var(--ink-soft)">PT Padma Global Nusatama lahir dari pengalaman panjang mengimplementasikan standar ISO. Kami percaya mutu yang baik adalah mutu yang bisa diukur, dijalankan secara konsisten, dan berdampak nyata bagi institusi maupun individu.</p>
      </aside>
      <div class="about__main">
        <div class="sec__head reveal d1" style="margin-bottom:30px">
          <h2 id="ab-h">Mitra terpercaya membangun SDM dan tata kelola yang berstandar.</h2>
          <p class="lede">Melalui pelatihan, pendampingan, dan sertifikasi kompetensi, kami melayani sektor pendidikan tinggi, laboratorium, industri, dan pemerintahan &mdash; dengan proses yang mudah, efisien, dan terjangkau.</p>
        </div>
        <div class="pillars">
          <div class="pillar reveal d1">
            <span class="pillar__no">01</span>
            <div>
              <h3>Kompetensi SDM</h3>
              <p>Pelatihan dan sertifikasi berstandar nasional dan internasional yang melahirkan praktisi kompeten dan diakui.</p>
            </div>
          </div>
          <div class="pillar reveal d2">
            <span class="pillar__no">02</span>
            <div>
              <h3>Tata kelola &amp; sistem mutu</h3>
              <p>Pendampingan penerapan sistem manajemen mutu yang konsisten untuk meraih dan mempertahankan akreditasi.</p>
            </div>
          </div>
          <div class="pillar reveal d3">
            <span class="pillar__no">03</span>
            <div>
              <h3>Dampak berkelanjutan</h3>
              <p>Output jelas dan outcome berdampak &mdash; institusi naik kelas, SDM naik level, mutu terjaga sepanjang waktu.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================== §02 EKOSISTEM ============================== -->
<section class="sec" id="ekosistem" aria-labelledby="ek-h">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">&sect; 02 &mdash; Ekosistem</span>
      <h2 id="ek-h">Dua platform, satu standar mutu.</h2>
      <p class="lede">Masing-masing fokus pada bidangnya, terhubung oleh satu standar mutu: pelatihan, pendampingan, dan sertifikasi kompetensi.</p>
    </div>

    <div class="plats">

      <!-- MUTUPERGURUANTINGGI -->
      <article class="plat reveal" style="--accent:var(--c-mpt)">
        <div class="plat__top">
          <span class="plat__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mutupt-mark.png' ); ?>"
                 alt="Logo mutuperguruantinggi.id" />
          </span>
          <div>
            <span class="plat__code">PT-EDU &middot; Perguruan Tinggi</span>
            <h3 class="plat__name">mutuperguruantinggi.id</h3>
            <p class="plat__role">Peningkatan mutu &amp; tata kelola perguruan tinggi</p>
          </div>
        </div>
        <div class="plat__body">
          <div>
            <p class="plat__desc">Platform pionir peningkatan mutu dan tata kelola perguruan tinggi sejak 2022. Menyediakan Pelatihan 40 JP dengan sertifikasi kompetensi, pendampingan implementasi, serta Sistem AMI Digital &mdash; selaras dengan Permendiktisaintek No. 39 &amp; 40 Tahun 2025.</p>
            <div class="chips">
              <span class="chip">SPMI</span>
              <span class="chip">AMI</span>
              <span class="chip">OBE</span>
              <span class="chip">Tata Kelola PT</span>
              <span class="chip">ISO 21001:2018</span>
              <span class="chip">Akreditasi</span>
            </div>
          </div>
          <div class="plat__side">
            <div class="plat__metrics">
              <div class="metric"><b>600+</b><span>perguruan tinggi &amp; instansi dilayani</span></div>
              <div class="metric"><b>4.500+</b><span>sivitas akademika</span></div>
              <div class="metric"><b>550+</b><span>SDM tersertifikasi</span></div>
            </div>
            <a class="plat__link" href="https://mutuperguruantinggi.id" target="_blank" rel="noopener">
              Kunjungi mutuperguruantinggi.id
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </a>
          </div>
        </div>
      </article>

      <!-- LABNESIA -->
      <article class="plat reveal d1" style="--accent:var(--c-lab)">
        <div class="plat__top">
          <span class="plat__badge">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-labnesia.gif' ); ?>"
                 alt="Logo labnesia.id" />
          </span>
          <div>
            <span class="plat__code">PT-LAB &middot; Laboratorium</span>
            <h3 class="plat__name">labnesia.id</h3>
            <p class="plat__role">Mitra pengembangan laboratorium unggul</p>
          </div>
        </div>
        <div class="plat__body">
          <div>
            <p class="plat__desc">Mitra pengembangan laboratorium untuk sektor pendidikan, industri, dan pemerintah. Fokus pada pendampingan akreditasi ISO/IEC 17025:2017, pelatihan teknis &amp; manajerial, serta sertifikasi kompetensi SDM laboratorium hingga lab siap asesmen.</p>
            <div class="chips">
              <span class="chip">ISO/IEC 17025:2017</span>
              <span class="chip">GLP</span>
              <span class="chip">Akreditasi Lab</span>
              <span class="chip">Validasi Metode</span>
              <span class="chip">Uji Profisiensi</span>
            </div>
          </div>
          <div class="plat__side">
            <div class="plat__metrics">
              <div class="metric"><b>30+</b><span>laboratorium terakreditasi</span></div>
              <div class="metric"><b>100+</b><span>personel lab tersertifikasi</span></div>
              <div class="metric"><b>8</b><span>bidang lab didampingi</span></div>
            </div>
            <a class="plat__link" href="https://labnesia.id" target="_blank" rel="noopener">
              Kunjungi labnesia.id
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" aria-hidden="true"><path d="M7 17 17 7M9 7h8v8"/></svg>
            </a>
          </div>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ============================== §03 PORTOFOLIO ============================== -->
<section class="sec sec--alt" id="portofolio" aria-labelledby="pt-h">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">&sect; 03 &mdash; Portofolio</span>
      <h2 id="pt-h">Platform &amp; identitas ekosistem kami.</h2>
      <p class="lede">Produk dan platform yang telah kami bangun untuk ekosistem mutu nasional &mdash; masing-masing dengan standar, layanan, dan dampak tersendiri.</p>
    </div>

    <?php
    $portfolio_query = new WP_Query( [
        'post_type'      => 'portfolio',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order',
        'order'          => 'ASC',
    ] );

    if ( $portfolio_query->have_posts() ) :
        echo '<div class="portfolio-grid reveal d1">';
        while ( $portfolio_query->have_posts() ) :
            $portfolio_query->the_post();
            ?>
            <div class="portfolio-wp-item">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'portfolio-thumb', [ 'class' => 'portfolio-wp-thumb', 'loading' => 'lazy', 'alt' => get_the_title() ] ); ?>
              <?php endif; ?>
              <div class="portfolio-wp-body">
                <h3><?php the_title(); ?></h3>
                <?php if ( get_the_excerpt() ) : ?>
                  <p><?php the_excerpt(); ?></p>
                <?php endif; ?>
              </div>
            </div>
            <?php
        endwhile;
        wp_reset_postdata();
        echo '</div>';
    else :
        /* One logo per platform — GDP Venture card style */
        $img_base  = get_template_directory_uri() . '/assets/images/platform/';
        $platforms = padma_get_portfolio_brands();
        echo '<div class="portfolio-grid reveal d1">';
        foreach ( $platforms as $p ) {
            $img_url = esc_url( $img_base . $p['logo'] );
            echo '<div class="portfolio-item">';
            echo '<img src="' . $img_url . '" alt="' . esc_attr( $p['name'] ) . '" loading="lazy" />';
            echo '<span class="plat-label">' . esc_html( $p['name'] ) . '</span>';
            echo '</div>';
        }
        echo '</div>';
    endif;
    ?>

  </div>
</section>

<!-- ============================== §04 KREDIBILITAS ============================== -->
<section class="sec" id="kredibilitas" aria-labelledby="kr-h">
  <div class="wrap">
    <div class="cred__grid">
      <div class="reveal">
        <div class="sec__head" style="margin-bottom:30px">
          <span class="clause sec--ink .clause" style="color:var(--brass)">&sect; 04 &mdash; Kredibilitas</span>
          <h2 id="kr-h">Pengalaman dan standar yang teruji.</h2>
          <p class="lede">Berakar pada implementasi standar ISO sejak 2017, kami mendampingi institusi dengan trainer dan asesor berpengalaman lintas perguruan tinggi, laboratorium, dan industri.</p>
        </div>
        <div class="seals">
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
            <span class="k">Pengalaman</span>
            <h3>Sejak 2017</h3>
            <p>Berakar pada implementasi standar ISO di berbagai sektor.</p>
          </div>
          <div class="seal-card">
            <span class="k">Pakar</span>
            <h3>Praktisi berpengalaman</h3>
            <p>Dibimbing trainer &amp; asesor lintas perguruan tinggi dan industri.</p>
          </div>
        </div>
      </div>
      <div class="stats reveal d1" aria-label="Capaian ekosistem">
        <div class="stat"><b>600<em>+</em></b><span>Instansi &amp; perguruan tinggi dilayani</span></div>
        <div class="stat"><b>4.500<em>+</em></b><span>Peserta &amp; sivitas akademika</span></div>
        <div class="stat"><b>550<em>+</em></b><span>SDM terlatih &amp; tersertifikasi</span></div>
        <div class="stat"><b>30<em>+</em></b><span>Laboratorium terakreditasi</span></div>
        <div class="stat"><b>60<em>+</em></b><span>Event nasional terselenggara</span></div>
        <div class="stat"><b>2017</b><span>Berakar implementasi ISO</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================== §05 TANYA JAWAB ============================== -->
<section class="sec sec--alt" id="faq" aria-labelledby="fq-h">
  <div class="wrap" style="max-width:900px">
    <div class="sec__head reveal">
      <span class="clause">&sect; 05 &mdash; Tanya Jawab</span>
      <h2 id="fq-h">Pertanyaan yang sering diajukan.</h2>
    </div>
    <div class="faq reveal d1">
      <details open>
        <summary>Apa itu Padma Global Nusatama?
          <span class="ic" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
          </span>
        </summary>
        <p>PT Padma Global Nusatama adalah perusahaan pelatihan, pendampingan, dan sertifikasi kompetensi mutu yang berakar pada implementasi standar ISO. Kami menaungi dua platform: mutuperguruantinggi.id (mutu perguruan tinggi) dan labnesia.id (laboratorium).</p>
      </details>
      <details>
        <summary>Apa perbedaan kedua platform?
          <span class="ic" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
          </span>
        </summary>
        <p>mutuperguruantinggi.id fokus pada SPMI, AMI, OBE, dan tata kelola perguruan tinggi. labnesia.id fokus pada pengembangan dan akreditasi laboratorium berbasis ISO/IEC 17025:2017. Keduanya didukung pelatihan, pendampingan, dan sertifikasi kompetensi SDM.</p>
      </details>
      <details>
        <summary>Sektor apa saja yang dilayani?
          <span class="ic" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
          </span>
        </summary>
        <p>Perguruan tinggi, laboratorium di sektor pendidikan, industri, dan pemerintahan, serta institusi yang membutuhkan penguatan sistem manajemen mutu dan sertifikasi kompetensi SDM.</p>
      </details>
      <details>
        <summary>Bagaimana cara memulai kerja sama?
          <span class="ic" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
          </span>
        </summary>
        <p>Hubungi platform yang paling sesuai dengan kebutuhan Anda melalui kontak di bawah. Layanan kemitraan diawali dengan analisis kondisi awal (free pre gap analysis) untuk memetakan kebutuhan institusi Anda.</p>
      </details>
    </div>
  </div>
</section>

<!-- ============================== §06 KONTAK ============================== -->
<section class="sec" id="kontak" aria-labelledby="kt-h">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">&sect; 06 &mdash; Kontak</span>
      <h2 id="kt-h">Mulai dari platform yang tepat.</h2>
      <p class="lede">Pilih kanal sesuai kebutuhan Anda &mdash; tim kami siap membantu dari diagnosis awal hingga sertifikasi.</p>
    </div>

    <div class="contact__grid">
      <div class="con-card reveal" style="--accent:var(--c-mpt)">
        <span class="dot">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/mutupt-mark.png' ); ?>"
               alt="Logo mutuperguruantinggi.id" />
        </span>
        <h3>mutuperguruantinggi.id</h3>
        <a class="url" href="https://mutuperguruantinggi.id" target="_blank" rel="noopener">mutuperguruantinggi.id</a>
        <div class="con-list">
          <a href="tel:+6281286563234">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A18 18 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>
            +62 812-8656-3234 (Rosi)
          </a>
          <a href="tel:+628895213007">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A18 18 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>
            +62 889-5213-007 (Althaaf)
          </a>
          <a href="mailto:info@mutu-perguruantinggi.id">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            info@mutu-perguruantinggi.id
          </a>
        </div>
      </div>

      <div class="con-card reveal d1" style="--accent:var(--c-lab)">
        <span class="dot">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/logo-labnesia.gif' ); ?>"
               alt="Logo labnesia.id" />
        </span>
        <h3>labnesia.id</h3>
        <a class="url" href="https://labnesia.id" target="_blank" rel="noopener">labnesia.id</a>
        <div class="con-list">
          <a href="tel:+6282172221567">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A18 18 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>
            +62 821-7222-1567 (Endang)
          </a>
          <a href="tel:+6285185000367">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 4h4l2 5-3 2a14 14 0 0 0 6 6l2-3 5 2v4a2 2 0 0 1-2 2A18 18 0 0 1 3 6a2 2 0 0 1 2-2"/></svg>
            +62 851-8500-0367 (Atikah)
          </a>
          <a href="mailto:info@labnesia.id">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
            info@labnesia.id
          </a>
        </div>
      </div>
    </div>

    <div class="hq reveal d1">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s-7-5.2-7-11a7 7 0 0 1 14 0c0 5.8-7 11-7 11"/><circle cx="12" cy="10" r="2.6"/></svg>
      <div><b>Kantor Pusat &mdash;</b> Kompleks Ruko Teras Bali No. 12, Bubakan, Kec. Mijen, Kota Semarang, Jawa Tengah 50216</div>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
