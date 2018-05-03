<section class="section-features section">
  <div class="u-center-text u-margin-bottom-big">
    <h2 class="heading-secondary">
      <?php the_field( 'title_skills' ) ; ?>
    </h2>
    <div class="hr "></div>
    <p class="paragraph"><?php the_field( 'content_skills' ) ;?></p>
  </div>
  <div class="row">
    <?php if( have_rows('block_skills') ): ?>
    <div class="flex skills">
    <?php while ( have_rows('block_skills') ) : the_row(); ?>
      <div class="feature-box">
        <img src="<?php the_sub_field( 'icon_skills' ); ?>" alt="" class="small-icon">
        <h3 class="heading-tertiary"><?php the_sub_field( 'title' ) ;?></h3>
      </div>
    <?php endwhile; ?>
    </div>
<?php endif; wp_reset_postdata(); ?>
  </div>
</section>