<footer class="foot">
  <div class="wrap">
    <div class="foot__top">

      <!-- brand column -->
      <div>
        <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img class="brand__logo"
               src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/padma-mark-white.png' ); ?>"
               width="56" height="42" alt="" aria-hidden="true" />
          <span><?php bloginfo( 'name' ); ?><small><?php bloginfo( 'description' ); ?></small></span>
        </a>
        <p class="foot__about">Pelatihan, pendampingan, dan sertifikasi kompetensi berstandar internasional untuk perguruan tinggi, laboratorium, dan industri di Indonesia.</p>
        <div class="foot__social">
          <!-- LinkedIn -->
          <a href="#" aria-label="LinkedIn">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6zM2 9h4v12H2z"/><circle cx="4" cy="4" r="2"/></svg>
          </a>
          <!-- Instagram -->
          <a href="#" aria-label="Instagram">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
          </a>
          <!-- WhatsApp -->
          <a href="#" aria-label="WhatsApp">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20.52 3.48A12 12 0 0 0 2.07 18.8L0 24l5.37-2A12 12 0 1 0 20.52 3.48zM12 22a10 10 0 0 1-5.1-1.4l-.36-.22-3.19.95.9-3.1-.23-.38A10 10 0 1 1 12 22zm5.56-7.39c-.3-.15-1.79-.88-2.07-.98-.28-.1-.48-.15-.68.15-.2.3-.77.98-.95 1.18-.17.2-.35.22-.65.07-.3-.15-1.27-.47-2.41-1.5-.89-.79-1.49-1.77-1.67-2.07-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.18.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.68-1.64-.93-2.25-.25-.59-.5-.51-.68-.52h-.58c-.2 0-.52.07-.79.37-.27.3-1.04 1.02-1.04 2.48 0 1.47 1.07 2.88 1.22 3.08.15.2 2.1 3.2 5.1 4.49.71.31 1.27.49 1.7.63.72.23 1.37.2 1.89.12.58-.09 1.79-.73 2.04-1.43.25-.7.25-1.3.17-1.43-.07-.13-.28-.2-.58-.35z"/></svg>
          </a>
        </div>
      </div>

      <!-- platform links -->
      <div>
        <h4>Platform</h4>
        <ul>
          <li><a href="https://mutuperguruantinggi.id" target="_blank" rel="noopener">Mutu Perguruan Tinggi<svg class="ext-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2.5 9.5 9.5 2.5M5.5 2.5h4v4"/></svg></a></li>
          <li><a href="https://labnesia.id" target="_blank" rel="noopener">Labnesia<svg class="ext-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2.5 9.5 9.5 2.5M5.5 2.5h4v4"/></svg></a></li>
          <li><a href="https://expertia.id/" target="_blank" rel="noopener">Expertia<svg class="ext-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2.5 9.5 9.5 2.5M5.5 2.5h4v4"/></svg></a></li>
          <li><a href="https://mutululusan.id/" target="_blank" rel="noopener">Mutu Lulusan<svg class="ext-icon" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M2.5 9.5 9.5 2.5M5.5 2.5h4v4"/></svg></a></li>
        </ul>
      </div>

      <!-- navigation links -->
      <div>
        <h4>Navigasi</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url('/') ); ?>">Beranda</a></li>
          <li><a href="<?php echo esc_url( home_url('/platform/') ); ?>">Platform</a></li>
          <li><a href="<?php echo esc_url( home_url('/tentang/') ); ?>">Tentang Kami</a></li>
          <li><a href="<?php echo esc_url( home_url('/kontak/') ); ?>">Kontak</a></li>
        </ul>
      </div>

      <!-- info -->
      <div>
        <h4>Kantor</h4>
        <ul>
          <li><span style="color:var(--ink-2);font-size:13.5px;line-height:1.7">Kompleks Ruko Teras Bali No. 12, Bubakan, Kec. Mijen, Kota Semarang, Jawa Tengah 50216</span></li>
          <li style="margin-top:12px"><a href="mailto:info@padmaglobal.co.id">info@padmaglobal.co.id</a></li>
          <li><a href="tel:+6281286563234">+62 812-8656-3234</a></li>
        </ul>
      </div>

    </div>

    <div class="foot__legal">
      <span>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> PT Padma Global Nusatama. Seluruh hak cipta dilindungi.</span>
      <span>Pelatihan &middot; Pendampingan &middot; Sertifikasi Kompetensi</span>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
