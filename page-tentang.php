<?php get_header(); ?>
<main id="main">

<!-- PAGE HERO -->
<div class="page-hero">
  <div class="wrap">
    <div class="page-hero__inner">
      <span class="clause">&sect; Tentang Kami</span>
      <h1>Dibangun dari<br>pengalaman nyata.</h1>
      <p class="lede">PT Padma Global Nusatama lahir dari pengalaman panjang mengimplementasikan standar ISO di berbagai institusi Indonesia sejak 2017.</p>
    </div>
  </div>
</div>

<!-- STORY -->
<section class="sec">
  <div class="wrap">
    <div class="split-about">
      <div class="split-about__quote reveal">
        Kami percaya mutu yang baik adalah mutu yang bisa <em>diukur, dijalankan secara konsisten</em>, dan berdampak nyata.
      </div>
      <div class="split-about__body reveal d1">
        <p>PT Padma Global Nusatama adalah perusahaan pelatihan, pendampingan, dan sertifikasi kompetensi mutu yang berpusat di Semarang, Jawa Tengah. Berdiri sejak 2017, kami memiliki rekam jejak panjang dalam mendampingi institusi pendidikan dan laboratorium untuk memenuhi standar mutu nasional dan internasional.</p>
        <p>Kami hadir sebagai ekosistem — bukan sekadar vendor jasa. Melalui dua platform kami, <strong style="color:#fff">mutuperguruantinggi.id</strong> dan <strong style="color:#fff">labnesia.id</strong>, kami memastikan setiap institusi mendapatkan layanan yang tepat sasaran, terstruktur, dan berkelanjutan.</p>
        <p>Tim kami terdiri dari praktisi berpengalaman — trainer, konsultan, dan asesor yang telah terbukti mendampingi ratusan institusi dari seluruh Indonesia.</p>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">Nilai-Nilai</span>
      <h2>Prinsip yang mendasari cara kami bekerja.</h2>
    </div>
    <div class="values-grid">
      <div class="value-card reveal">
        <div class="value-card__num">01 &mdash; Integritas</div>
        <h3>Apa yang kami janjikan, kami lakukan.</h3>
        <p>Setiap komitmen layanan kami didukung oleh proses yang terstandar, transparan, dan dapat dipertanggungjawabkan.</p>
      </div>
      <div class="value-card reveal d1">
        <div class="value-card__num">02 &mdash; Kompetensi</div>
        <h3>Ahli di bidangnya, bukan generalis.</h3>
        <p>Kami fokus pada mutu, kompetensi, dan akreditasi. Kedalaman keahlian inilah yang menjadi keunggulan layanan kami.</p>
      </div>
      <div class="value-card reveal d2">
        <div class="value-card__num">03 &mdash; Dampak</div>
        <h3>Bukan hanya sertifikat — tapi perubahan nyata.</h3>
        <p>Ukuran keberhasilan kami bukan lembar sertifikat, melainkan institusi yang naik kelas dan SDM yang benar-benar kompeten.</p>
      </div>
      <div class="value-card reveal d3">
        <div class="value-card__num">04 &mdash; Efisiensi</div>
        <h3>Proses mudah, terjangkau, dan tepat sasaran.</h3>
        <p>Kami merancang setiap layanan agar dapat dijalankan tanpa kerumitan berlebih, namun tetap memenuhi standar tertinggi.</p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM / LEADERS — DEMO -->
<section class="sec">
  <div class="wrap">
    <div class="sec__head reveal">
      <span class="clause">Tim Kepemimpinan</span>
      <h2>Orang-orang di balik ekosistem ini.</h2>
      <p class="lede">Dipimpin oleh praktisi berpengalaman di bidang mutu, kompetensi, dan pengembangan institusi.</p>
    </div>

    <div class="team-grid">
      <?php
      $leaders  = padma_get_leaders();
      $img_base = get_template_directory_uri() . '/assets/images/pimpinan/';
      foreach ( $leaders as $i => $leader ) :
        $delay = $i % 4;
      ?>
      <div class="team-card reveal<?php echo $delay ? ' d' . $delay : ''; ?>">
        <div class="team-card__photo">
          <img src="<?php echo esc_url( $img_base . $leader['photo'] ); ?>" alt="<?php echo esc_attr( $leader['name'] ); ?>" loading="lazy">
        </div>
        <div class="team-card__body">
          <div class="team-card__name"><?php echo esc_html( $leader['name'] ); ?></div>
          <?php if ( ! empty( $leader['title'] ) ) : ?>
            <div class="team-card__title"><?php echo esc_html( $leader['title'] ); ?></div>
          <?php endif; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- STATS -->
<section class="sec sec--alt">
  <div class="wrap">
    <div class="cred-grid">
      <div class="reveal">
        <div class="sec__head" style="margin-bottom:28px">
          <span class="clause">Rekam Jejak</span>
          <h2>Pengalaman dan standar yang teruji.</h2>
          <p class="lede">Berakar pada implementasi standar ISO sejak 2017, kami mendampingi institusi dengan trainer dan asesor berpengalaman.</p>
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
            <span class="k">Pengalaman</span>
            <h3>Sejak 2017</h3>
            <p>Implementasi standar ISO di berbagai sektor.</p>
          </div>
          <div class="seal-card">
            <span class="k">Pakar</span>
            <h3>Praktisi berpengalaman</h3>
            <p>Trainer &amp; asesor lintas perguruan tinggi dan industri.</p>
          </div>
        </div>
      </div>
      <div class="stats-grid reveal d1">
        <div class="stat-box"><b>600<em>+</em></b><span>Instansi dilayani</span></div>
        <div class="stat-box"><b>4.500<em>+</em></b><span>Peserta terlatih</span></div>
        <div class="stat-box"><b>550<em>+</em></b><span>SDM tersertifikasi</span></div>
        <div class="stat-box"><b>30<em>+</em></b><span>Lab terakreditasi</span></div>
        <div class="stat-box"><b>60<em>+</em></b><span>Event nasional</span></div>
        <div class="stat-box"><b>2017</b><span>Berdiri sejak</span></div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="sec">
  <div class="wrap" style="max-width:860px">
    <div class="sec__head reveal">
      <span class="clause">FAQ</span>
      <h2>Pertanyaan yang sering diajukan.</h2>
    </div>
    <div class="faq reveal d1">
      <details open>
        <summary>Apa itu Padma Global Nusatama?
          <span class="ic"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg></span>
        </summary>
        <p>PT Padma Global Nusatama adalah perusahaan pelatihan, pendampingan, dan sertifikasi kompetensi mutu yang berakar pada implementasi standar ISO. Kami menaungi dua platform utama untuk perguruan tinggi dan laboratorium di Indonesia.</p>
      </details>
      <details>
        <summary>Sektor apa saja yang dilayani?
          <span class="ic"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg></span>
        </summary>
        <p>Perguruan tinggi, laboratorium di sektor pendidikan, industri, dan pemerintahan, serta institusi yang membutuhkan penguatan sistem manajemen mutu dan sertifikasi kompetensi SDM.</p>
      </details>
      <details>
        <summary>Bagaimana cara memulai kerja sama?
          <span class="ic"><svg viewBox="0 0 24 24" width="13" height="13" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg></span>
        </summary>
        <p>Hubungi kami melalui halaman Kontak. Layanan kemitraan diawali dengan analisis kondisi awal (free pre gap analysis) untuk memetakan kebutuhan institusi Anda secara tepat.</p>
      </details>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-band">
  <div class="wrap">
    <h2 class="reveal">Ingin bekerja sama dengan kami?</h2>
    <p class="reveal d1">Hubungi tim kami dan mulai perjalanan mutu institusi Anda hari ini.</p>
    <div class="cta-band__actions reveal d2">
      <a class="btn btn--ink btn--lg" href="<?php echo esc_url( home_url('/kontak/') ); ?>">Hubungi Kami</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
