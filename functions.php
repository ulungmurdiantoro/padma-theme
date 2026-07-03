<?php
/**
 * Padma Global Nusatama Theme Functions
 */

function padma_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ] );
    add_theme_support( 'responsive-embeds' );
    add_image_size( 'portfolio-thumb', 600, 450, true );

    register_nav_menus( [
        'primary' => __( 'Navigasi Utama', 'padma-global' ),
        'footer'  => __( 'Footer', 'padma-global' ),
    ] );

    load_theme_textdomain( 'padma-global', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'padma_setup' );

function padma_enqueue_scripts() {
    wp_enqueue_style(
        'padma-fonts',
        'https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,600;12..96,700;12..96,800&family=Plus+Jakarta+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'padma-style',
        get_stylesheet_uri(),
        [ 'padma-fonts' ],
        '3.4.0'
    );
    wp_enqueue_script(
        'padma-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '3.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'padma_enqueue_scripts' );

function padma_register_portfolio_cpt() {
    $labels = [
        'name'               => _x( 'Portofolio', 'post type general name', 'padma-global' ),
        'singular_name'      => _x( 'Portofolio', 'post type singular name', 'padma-global' ),
        'menu_name'          => _x( 'Portofolio', 'admin menu', 'padma-global' ),
        'name_admin_bar'     => _x( 'Portofolio', 'add new on admin bar', 'padma-global' ),
        'add_new'            => __( 'Tambah Baru', 'padma-global' ),
        'add_new_item'       => __( 'Tambah Portofolio Baru', 'padma-global' ),
        'new_item'           => __( 'Portofolio Baru', 'padma-global' ),
        'edit_item'          => __( 'Edit Portofolio', 'padma-global' ),
        'view_item'          => __( 'Lihat Portofolio', 'padma-global' ),
        'all_items'          => __( 'Semua Portofolio', 'padma-global' ),
        'search_items'       => __( 'Cari Portofolio', 'padma-global' ),
        'not_found'          => __( 'Tidak ada portofolio ditemukan.', 'padma-global' ),
        'not_found_in_trash' => __( 'Tidak ada portofolio di tempat sampah.', 'padma-global' ),
    ];

    register_post_type( 'portfolio', [
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => [ 'slug' => 'portofolio' ],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-portfolio',
        'supports'           => [ 'title', 'thumbnail', 'editor', 'excerpt' ],
        'show_in_rest'       => true,
    ] );
}
add_action( 'init', 'padma_register_portfolio_cpt' );

function padma_add_preconnect_links() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" />' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />' . "\n";
}
add_action( 'wp_head', 'padma_add_preconnect_links', 1 );

function padma_structured_data() {
    $schema_org = [
        '@context'       => 'https://schema.org',
        '@type'          => 'Organization',
        'name'           => 'PT Padma Global Nusatama',
        'alternateName'  => 'Padma Global Nusatama',
        'url'            => home_url( '/' ),
        'logo'           => get_template_directory_uri() . '/assets/images/padma-mark.png',
        'description'    => 'Perusahaan pelatihan, pendampingan, dan sertifikasi kompetensi mutu yang menaungi dua platform: mutuperguruantinggi.id dan labnesia.id.',
        'foundingDate'   => '2017',
        'address'        => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Kompleks Ruko Teras Bali No. 12, Bubakan, Kec. Mijen',
            'addressLocality' => 'Kota Semarang',
            'addressRegion'   => 'Jawa Tengah',
            'postalCode'      => '50216',
            'addressCountry'  => 'ID',
        ],
        'contactPoint'   => [
            [
                '@type'             => 'ContactPoint',
                'telephone'         => '+62-812-8656-3234',
                'contactType'       => 'customer service',
                'areaServed'        => 'ID',
                'availableLanguage' => 'id',
            ],
        ],
    ];
    echo '<script type="application/ld+json">' . wp_json_encode( $schema_org ) . '</script>' . "\n";
}
add_action( 'wp_head', 'padma_structured_data' );

/**
 * One representative logo per brand for the portfolio grid.
 * Returns an array of [ 'logo' => filename, 'name' => display label ].
 */
function padma_get_portfolio_brands() {
    return [
        [
            'logo'   => 'LOGO-MUTU-PT-ICON.png',
            'name'   => 'Mutu Perguruan Tinggi',
            'url'    => 'https://mutuperguruantinggi.id',
            'tag'    => 'Perguruan Tinggi &middot; Akreditasi',
            'accent' => 'var(--c-mpt)',
        ],
        [
            'logo'   => 'LOGO-LABNESIA-TR.png',
            'name'   => 'Labnesia',
            'url'    => 'https://labnesia.id',
            'tag'    => 'Laboratorium &middot; ISO 17025',
            'accent' => 'var(--c-lab)',
        ],
        [
            'logo'   => 'LOGO-EXPERTIA-ICON.png',
            'name'   => 'Expertia',
            'url'    => 'https://expertia.id/',
            'tag'    => 'Kompetensi &middot; Sertifikasi',
            'accent' => '#9B6DFF',
        ],
        [
            'logo'   => 'MUTULULUSAN-ICON.png',
            'name'   => 'Mutu Lulusan',
            'url'    => 'https://mutululusan.id/',
            'tag'    => 'Pendidikan &middot; SDM',
            'accent' => '#E8A730',
        ],
    ];
}

/** @deprecated Use padma_get_portfolio_brands() instead. */
function padma_get_portfolio_images() {
    return array_column( padma_get_portfolio_brands(), 'logo' );
}

/**
 * Demo leader data — replace with real data when ready.
 */
function padma_get_demo_leaders() {
    return [
        [
            'name'  => 'Nama Pemimpin',
            'title' => 'Direktur Utama',
            'bio'   => 'Praktisi mutu dan ISO berpengalaman lebih dari 15 tahun di sektor pendidikan tinggi dan industri.',
        ],
        [
            'name'  => 'Nama Pemimpin',
            'title' => 'Direktur Operasional',
            'bio'   => 'Bertanggung jawab atas operasional dan pengembangan layanan di kedua platform ekosistem.',
        ],
        [
            'name'  => 'Nama Pemimpin',
            'title' => 'Manajer Platform Mutu PT',
            'bio'   => 'Spesialis SPMI, AMI, dan tata kelola perguruan tinggi dengan pengalaman mendampingi 200+ PT.',
        ],
        [
            'name'  => 'Nama Pemimpin',
            'title' => 'Manajer Platform Labnesia',
            'bio'   => 'Lead consultant akreditasi lab ISO/IEC 17025:2017 untuk sektor pendidikan, industri, dan pemerintah.',
        ],
    ];
}

/**
 * Generate 2-letter initials from a name string.
 */
function padma_get_initials( string $name ): string {
    $parts = array_filter( explode( ' ', $name ) );
    if ( count( $parts ) >= 2 ) {
        return strtoupper( mb_substr( $parts[0], 0, 1 ) . mb_substr( end( $parts ), 0, 1 ) );
    }
    return strtoupper( mb_substr( $name, 0, 2 ) );
}

/**
 * Enqueue script version bump on changes.
 */
function padma_theme_version() {
    return '3.0.0';
}
