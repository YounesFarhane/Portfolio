<section class="section-about hideme">
                <div class="u-center-text u-margin-bottom-big">
                    <h2 class="heading-secondary"><?php the_field( 'title_about' ); ?></h2>
                    <div class="hr"></div>
                </div>
                <div class="row">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small">You're going to fall in love with nature</h3>
                        <?php the_field('content_about'); ?></div>
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img srcset="<?php the_field( 'image_about' ); ?>" alt="Photo 1" class="composition__photo composition__photo--p1"
                                 src="<?php the_field( 'image_about' ); ?>">
                        </div>
                    </div>
                </div>

</section>