<section class="section-works section" id="section-works">
    <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary"><?php the_field('title_works'); ?></h2>
        <div class="hr"></div>
    </div>
<div class="row">
    <?php if( have_rows('block_project') ): ?>
    <div class="block__content">
        <?php while ( have_rows('block_project') ): the_row() ;?>
            <article class="column card has-image">
            <a href="<?php the_sub_field('link'); ?>" class="item_content" target="_blank">
                <div class="cover-image" style="background-image:url('<?php the_sub_field('image'); ?>');">
                </div>
                <div class="cover-body">
                    <h3 class="heading-tertiary"><?php the_sub_field('title'); ?></h3>
                    <p class="paragraph"><?php the_sub_field('sub_heading'); ?></p>
                </div>
            </a>
            </article>
        <?php endwhile; ?>
    </div>
    <?php endif; wp_reset_postdata();?>
        
</div>
</section>
