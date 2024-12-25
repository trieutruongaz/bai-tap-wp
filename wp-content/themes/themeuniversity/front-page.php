<?php
get_header();
?>

<div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo esc_url(get_theme_file_uri('images/library-hero.jpg')) ?>)"></div>
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?</h3>
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>

<div class="full-width-split group">
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
            <?php
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 2,
                'post_type' => 'event',
                'meta_key' => 'start_day',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'start_day',
                    )
                )
            ));

            if ($homepageEvents->have_posts()) :
                while ($homepageEvents->have_posts()) :
                    $homepageEvents->the_post();
            ?>
                    <div class="event-summary">
                        <?php
                        $date_event = new DateTime(get_field('start_day')); 
                        $month_event = $date_event->format('M');
                        $day_event = $date_event->format('d');
                        ?>

                        <a class="event-summary__date t-center" href="">
                            <span class="event-summary__month"><?php echo esc_html(get_the_date('M')); ?></span>
                            <span class="event-summary__day"><?php echo esc_html(get_the_date('d')); ?></span>  
                        </a>                   
                        <div class="event-summary__content">
                            <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                            <p><?php
                                if (has_excerpt())
                                    echo get_the_excerpt();
                                else
                                    echo wp_trim_words(get_the_content(), 18); ?>
                                <a href="<?php echo get_the_permalink(); ?>" class="nu gray">Learn more</a>
                            </p>
                        </div>
                    </div>
            <?php
                endwhile;
            else :
                echo '<p class="t-center">No upcoming events found.</p>';
            endif;
            wp_reset_postdata();
            ?>
            <p class="t-center no-margin"><a href="<?php echo site_url('/su-kiens'); ?>" class="btn btn--blue">View All Events</a></p>
        </div>
    </div>

    <div class="full-width-split__two">
    <div class="full-width-split__inner">
      <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 2,
        'orderby' => 'date',
        'order' => 'DESC',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="event-summary">
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
              <span class="event-summary__month"><?php the_time('M') ?></span>
              <span class="event-summary__day"><?php the_time('d') ?></span>
            </a>
            <div class="event-summary__content">
              <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
              <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?> <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a></p>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
      <p class="t-center no-margin"><a href="<?php echo site_url('/blog'); ?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>
</div>

<div class="hero-slider">
  <div data-glide-el="track" class="glide__track">
    <div class="glide__slides">
      <?php
      $args = array(
        'post_type' => 'post',
        'orderby' => 'date',
        'order' => 'DESC',
        'category_name' => 'slides',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
      ?>
          <div class="hero-slider__slide" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>');">
            <div class="hero-slider__interior container">
              <div class="hero-slider__overlay">
                <h2 class="headline headline--medium t-center"><?php the_title(); ?></h2>
                <h3 class="t-center"><?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?></h3>
                <p class="t-center no-margin"><a href="<?php the_permalink(); ?>" class="btn btn--blue">Learn more</a></p>
              </div>
            </div>
          </div>
      <?php
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
    <div class="glide__bullets slider__bullets" data-glide-el="controls[nav]"></div>
  </div>
</div>


<?php
get_footer();
?>