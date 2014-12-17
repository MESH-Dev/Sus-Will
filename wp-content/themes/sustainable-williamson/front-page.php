<?php get_header(); ?>

<section id="content">

  <div class="container">
    <div class="content-callout">
      <span><?php the_field('first_callout') ?></span>
    </div>
  </div>

</section>

<section id="overview" style="background: url(<?php the_field('background_image_1'); ?>) no-repeat top center fixed; background-size: cover;">
  <div class="container">

    <?php

    // check if the repeater field has rows of data
    if( have_rows('textboxes') ):

     	// loop through the rows of data
        while ( have_rows('textboxes') ) : the_row();

            // display a sub field value
            ?>

            <div class="four columns">
              <a href="<?php the_sub_field('textbox_link'); ?>">
                <div class="overview-callout">
                  <div class="overview-callout-headline">
                    <span><?php the_sub_field('textbox_headline'); ?></span>
                  </div>
                  <div class="overview-callout-body">
                    <span><?php the_sub_field('textbox_body'); ?></span>
                  </div>
                </div>
              </a>
            </div>

            <?php

        endwhile;

    else :

        // no rows found

    endif;

    ?>

  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-callout">
      <p><?php the_field('second_callout'); ?></p>
    </div>

    <div class="four columns offset-by-four">
      <a href="<?php the_field('second_callout_button_link'); ?>">
        <div class="btn btn-home">
          <div class="btn-headline">
            <span><?php the_field('second_callout_button_text'); ?></span>
          </div>
        </div>
      </a>
    </div>

  </div>
</section>

<section id="testimonial">
  <div class="container">
    <div class="testimonial-callout">
      <blockquote><?php the_field('testimonial'); ?></blockquote>
      <br/>
      <span>&mdash; <?php the_field('testimonial_author'); ?></span>
    </div>
  </div>
</section>


<?php get_footer(); ?>
