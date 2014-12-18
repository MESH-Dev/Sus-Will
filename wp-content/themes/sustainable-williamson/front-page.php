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

      $i = 0;

     	// loop through the rows of data
        while ( have_rows('textboxes') ) : the_row();

            // display a sub field value
            ?>

            <div class="four columns <?php if ($i == 0) { echo 'offset-by-two'; } ?>">
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

            $i = $i + 1;

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
      <h3>Participants</h3>
      <?php

      // check if the repeater field has rows of data
      if( have_rows('participants') ):

        // loop through the rows of data
        while ( have_rows('participants') ) : the_row();

        ?>

        <div class="participant">
          <a href=""><img src="<?php the_sub_field('participant'); ?>" /></a>
        </div>

        <?php

      endwhile;

      else :

        // no rows found

      endif;

      ?>
    </div>
  </div>
</section>

<section id="video" style="background: url(<?php the_field('background_image_2'); ?>) no-repeat top center fixed; background-size: cover; background-attachment: scroll;">
  <div class="container">
    <div class="video-callout">
      <iframe width="770" height="463" src="//www.youtube.com/embed/HwZ_MNT6C1k" frameborder="0" allowfullscreen></iframe>
    </div>
  </div>
</section>

<section id="testimonial">
  <div class="container">
    <?php if (get_field('testimonial')) { ?>
    <div class="testimonial-callout">
      <blockquote><?php the_field('testimonial'); ?></blockquote>
      <br/>
      <span>&mdash; <?php the_field('testimonial_author'); ?></span>
    </div>
    <?php } ?>
  </div>
</section>

<section id="video-thumbnails">
  <div class="container">
    <h3>Watch the six components of sustainable communities</h3>

    <?php

    // check if the repeater field has rows of data
    if( have_rows('videos') ):

      // loop through the rows of data
      while ( have_rows('videos') ) : the_row();

      ?>

      <div class="four columns">
        <div class="video-holder" style="background: url(<?php the_sub_field('video_thumbnail'); ?>) no-repeat top center fixed; background-size: cover; background-attachment: scroll;">
          <span><?php the_sub_field('video_title'); ?></span>
        </div>
      </div>

      <?php

    endwhile;

    else :

      // no rows found

    endif;

    ?>

  </div>
</section>

<section id="case-studies" style="background: url(<?php the_field('background_image_3'); ?>) no-repeat top center fixed; background-size: cover; background-attachment: scroll;">
  <div class="container">
    <h3>Download our case studies</h3>

    <?php

    // check if the repeater field has rows of data
    if( have_rows('case_studies') ):

      // loop through the rows of data
      while ( have_rows('case_studies') ) : the_row();

      ?>

      <div class="three columns">
        <div class="case-study">
          <div class="case-study-image">
            <img src="<?php the_sub_field('case_study_image'); ?>" />
          </div>
          <div class="case-study-title">
            <div class="case-study-title-text">
              <span><?php the_sub_field('case_study_title'); ?></span>
            </div>
          </div>
        </div>
      </div>

      <?php

    endwhile;

    else :

      // no rows found

    endif;

    ?>

  </div>

</section>

<?php get_footer(); ?>
