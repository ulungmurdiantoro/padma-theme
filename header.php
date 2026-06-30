<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#090909" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a href="#main" class="skip">Lewati ke konten utama</a>

<header class="head">
  <div class="wrap head__row">

    <a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="Padma Global Nusatama — beranda">
      <img class="brand__logo"
           src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/padma-mark-white.png' ); ?>"
           width="50" height="38" alt="" aria-hidden="true" />
      <span><?php bloginfo( 'name' ); ?><small><?php bloginfo( 'description' ); ?></small></span>
    </a>

    <nav class="nav" id="nav" aria-label="Navigasi utama">
      <?php
      $current = trailingslashit( get_permalink() );
      $home    = trailingslashit( home_url( '/' ) );

      $nav_items = [
        'Beranda'    => home_url( '/' ),
        'Platform'   => home_url( '/platform/' ),
        'Portofolio' => home_url( '/portofolio/' ),
        'Tentang'    => home_url( '/tentang/' ),
        'Kontak'     => home_url( '/kontak/' ),
      ];

      foreach ( $nav_items as $label => $url ) {
        $active = ( trailingslashit( $url ) === $current ) ? ' class="active"' : '';
        printf(
          '<a href="%s"%s>%s</a>',
          esc_url( $url ),
          $active,
          esc_html( $label )
        );
      }
      ?>
      <a class="btn btn--ink" href="<?php echo esc_url( home_url( '/kontak/' ) ); ?>">Hubungi Kami</a>
    </nav>

    <button class="menu-toggle" id="menuToggle"
            aria-label="Buka menu" aria-expanded="false" aria-controls="nav">
      <span></span><span></span><span></span>
    </button>

  </div>
</header>
