<?php
/**
 * The main template file — fallback for all unmatched queries.
 * Front page is handled by front-page.php.
 */
get_header();
?>

<main id="main" style="padding-block: clamp(64px,8vw,108px)">
  <div class="wrap" style="max-width: 760px">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article style="border:1px solid var(--line);border-radius:var(--rad);padding:32px;margin-bottom:24px;background:#fff">
          <h2 style="font-family:var(--f-display);font-size:clamp(22px,2.4vw,30px);margin-bottom:12px">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h2>
          <div style="color:var(--ink-soft);font-size:14px;margin-bottom:16px">
            <?php echo esc_html( get_the_date() ); ?>
          </div>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink(); ?>" style="display:inline-flex;align-items:center;gap:8px;margin-top:16px;font-weight:600;color:var(--plum)">
            Baca selengkapnya
            <svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.4"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
          </a>
        </article>
      <?php endwhile; ?>
      <div style="margin-top:30px">
        <?php the_posts_pagination(); ?>
      </div>
    <?php else : ?>
      <p style="color:var(--ink-soft)">Belum ada konten yang ditemukan.</p>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
