<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>
    <footer id='primary-footer'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-2'>
            <img class='half-margin-bottom' src='<?php the_field('logo_icon', 'option'); ?>' width='68px'>
            <h6 class='white-text-color'>
              © SPR <?php echo date("Y"); ?>
            </h6>
          </div>
          <div class='col-md-2'>
            <h5 class='bold-font white-text-color'>
              Company
            </h5>
            <?php wp_nav_menu( array( 
            'theme_location' => 'menu-company',  
            'menu_class' => 'list-unstyled footer-list',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
            )); ?>
          </div>
          <div class='col-md-2'>
            <h5 class='bold-font white-text-color'>
              Practice areas
            </h5>
            <?php wp_nav_menu( array( 
            'theme_location' => 'menu-practice',  
            'menu_class' => 'list-unstyled footer-list',
            'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
            )); ?>
          </div>
          <div class='col-md-3'>
            <h5 class='bold-font white-text-color'>
              Visit
            </h5>
            <ul class='list-unstyled footer-list'>
              <li>
              <?php the_field('address', 'option'); ?>
              </li>
            </ul>
          </div>
          <div class='col-md-3'>
            <h5 class='bold-font white-text-color'>
              Contact us
            </h5>
            <ul class='list-unstyled footer-list'>
              <li>
                P <?php the_field('phone', 'option'); ?>
              </li>
              <li>
                F <?php the_field('fax', 'option'); ?>
              </li>
              <li>
                E
                <a href='mailto:<?php the_field('email', 'option'); ?>'>
                  <?php the_field('email', 'option'); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <script src="<?php bloginfo('template_url'); ?>/js/lib/menu_button.js"></script>
    <script>
      transformicons.add('.tcon')
    </script>
    <?php wp_footer(); ?>
  </body>
</head>
</html>