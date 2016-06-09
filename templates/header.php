<header class="banner">
  <nav class='nav-primary'>
  <div class="greedy container flex-nav">
    <img src="<?php bloginfo('template_directory');?>/assets/images/logo.svg">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation']);
      endif;
      ?>
    <button>More
      <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
    </button>
    <ul class='hidden-links hidden'></ul>
  </div>
</nav>

  <div class="slider">
    <?php if( have_rows('slider') ): ?>
    <ul>
      <?php while( have_rows('slider') ): the_row(); 
        // vars
        $image = get_sub_field('image');
        $headline = get_sub_field('headline');
        $ctatext = get_sub_field('cta_text');
        $ctaurl = get_sub_field('cta_url'); 
      ?>

      <?php if( is_page ( 'home' ) ) { ?>

        <li style="background: url(<?php echo $image; ?>), linear-gradient(-212deg, #68D1B6 60%, #3F92E8 83%, #FF3D65 100%); background-size: cover;">
            <div class="container">
              <div class="right-align-slider">
                <?php if($headline): ?>
                  <p>Paul provides</p>
                  <h1><?php echo $headline; ?></h1>
                <?php endif; ?>
                <?php if($ctatext): ?>
                  <a href="<?php echo $ctaurl; ?>"><?php echo $ctatext; ?></a>
                <?php endif; ?>
              </div><!--right-align-slider-->
            </div>
          </li>

      <?php } else { ?>   

        <li style="background: url(<?php echo $image; ?>); background-size: cover;">
          <div class="container">
            <div class="right-align-slider">
              <?php if($headline): ?>
                <h1><?php echo $headline; ?></h1>
              <?php endif; ?>
              <?php if($ctatext): ?>
                <p style="text-align: right;"><?php echo $ctatext; ?></p>
              <?php endif; ?>
            </div><!--right-align-slider-->
          </div>
        </li>

      <?php } ?>

      <?php endwhile; ?>
    </ul>
    <?php endif; ?>
  </div>
</div>
</header>
