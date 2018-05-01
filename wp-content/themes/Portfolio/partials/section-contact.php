<section class="section-book hideme">
    <div class="row">
        <div class="book">
            <div class="u-margin-bottom-medium">
                <h2 class="heading-secondary"> <?php the_field('title_contact', 'options'); ?></h2>
                <div class="hr hr--white"></div>
                <a href="mailto:<?php the_field('email_contact' , 'options'); ?>" class="heading-primary--main"><?php the_field('email_contact' , 'options'); ?></a>          
                <p class="paragraph"><?php the_field('content_contact' , 'options'); ?></p>
            </div>
        </div>
    </div>
</section>