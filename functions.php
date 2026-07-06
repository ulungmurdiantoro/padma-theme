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
        '4.4.0'
    );
    wp_enqueue_script(
        'padma-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '3.5.0',
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
            [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Komplek Perkantoran Lt. 3 UNISBANK, Jl. Tri Lomba Juang No. 1, Mugassari, Semarang Selatan',
                'addressLocality' => 'Semarang',
                'addressRegion'   => 'Jawa Tengah',
                'postalCode'      => '50241',
                'addressCountry'  => 'ID',
            ],
            [
                '@type'           => 'PostalAddress',
                'streetAddress'   => 'Perum The Paradise H-1, Jatirejo, Sendangadi, Kec. Mlati, Kab. Sleman',
                'addressLocality' => 'Sleman',
                'addressRegion'   => 'Daerah Istimewa Yogyakarta',
                'addressCountry'  => 'ID',
            ],
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
            'logo'   => 'LOGO-LABNESIA-ICON.png',
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
 * Leadership team — name, title, and photo filename (in /assets/images/pimpinan/).
 */
function padma_get_leaders() {
    return [
        [
            'name'  => 'Raninda Wahyudianti',
            'title' => 'Direktur Utama',
            'photo' => 'raninda.png',
        ],
        [
            'name'  => 'Andika',
            'title' => 'Direktur',
            'photo' => 'andika.png',
        ],
        [
            'name'  => 'Althaaf Muhammad',
            'title' => 'Komisaris',
            'photo' => 'althaf.png',
        ],
        [
            'name'  => 'Bela Lestari Dwireja',
            'title' => '',
            'photo' => 'bela.png',
        ],
    ];
}

/**
 * Enqueue script version bump on changes.
 */
function padma_theme_version() {
    return '3.0.0';
}
