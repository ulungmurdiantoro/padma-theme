<footer class="foot">
  <div class="wrap">
    <div class="foot__top">
      <div>
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="brand__logo"
               src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/padma-mark-white.png' ); ?>"
               width="63" height="48" alt="" aria-hidden="true" />
          <span><?php bloginfo( 'name' ); ?><small><?php bloginfo( 'description' ); ?></small></span>
        </a>
        <p class="foot__p">Pelatihan, pendampingan, dan sertifikasi kompetensi berstandar internasional untuk perguruan tinggi, laboratorium, dan industri di Indonesia.</p>
      </div>

      <div>
        <h4>Platform</h4>
        <ul>
          <li><a href="https://mutuperguruantinggi.id" target="_blank" rel="noopener">mutuperguruantinggi.id</a></li>
          <li><a href="https://labnesia.id" target="_blank" rel="noopener">labnesia.id</a></li>
        </ul>
      </div>

      <div>
        <h4>Navigasi</h4>
        <ul>
          <li><a href="#tentang">Tentang</a></li>
          <li><a href="#ekosistem">Ekosistem</a></li>
          <li><a href="#portofolio">Portofolio</a></li>
          <li><a href="#kredibilitas">Kredibilitas</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>
    </div>

    <div class="foot__legal">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> PT Padma Global Nusatama. Seluruh hak cipta dilindungi.</span>
      <span>Pelatihan &middot; Pendampingan &middot; Sertifikasi Kompetensi</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
