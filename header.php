<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="theme-color" content="#18152E" />
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
           width="55" height="42" alt="" aria-hidden="true" />
      <span><?php bloginfo( 'name' ); ?><small><?php bloginfo( 'description' ); ?></small></span>
    </a>

    <nav class="nav" id="nav" aria-label="Navigasi utama">
      <a href="#tentang">Tentang</a>
      <a href="#ekosistem">Ekosistem</a>
      <a href="#portofolio">Portofolio</a>
      <a href="#kredibilitas">Kredibilitas</a>
      <a href="#kontak">Kontak</a>
      <a class="btn btn--ink" href="#ekosistem">Jelajahi platform</a>
    </nav>

    <button class="menu-toggle" id="menuToggle"
            aria-label="Buka menu" aria-expanded="false" aria-controls="nav">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>
