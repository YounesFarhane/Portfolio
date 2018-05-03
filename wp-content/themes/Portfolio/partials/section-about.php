<section class="section-about">
                <div class="u-center-text u-margin-bottom-big fade">
                    <h2 class="heading-secondary"><?php the_field( 'title_about' ); ?></h2>
                    <div class="hr"></div>
                </div>
                <div class="row fade">
                    <div class="col-1-of-2">
                        <h3 class="heading-tertiary u-margin-bottom-small"><?php the_field( 'subheading_about' ); ?></h3>
                        <?php the_field('content_about'); ?>
                        <a href="<?php the_field( 'file_about' ); ?>" download target="_blank" class="btn  btn--animated">Télécharger mon CV</a>
                    </div>
                        
                    <div class="col-1-of-2">
                        <div class="composition">
                            <img srcset="<?php the_field( 'image_about' ); ?>" alt="Photo 1" class="composition__photo composition__photo--p1"
                                 src="<?php the_field( 'image_about' ); ?>">
                        </div>
                    </div>
                </div>

</section>