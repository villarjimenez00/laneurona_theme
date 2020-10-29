<header>
    <div class="menu_bar nav-down menu_height">
      
        <div class="hamburger hamburger--spin bt-menu-izq">
            <div class="hamburger-box">
              <div class="hamburger-inner"></div>
            </div>
        </div>
        


        <div class="logo">
            <a href="<?php bloginfo('url'); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/logo.png" alt="LaNeuronaLogo" class="normal-menu-logo img-responsive">
            </a>
        </div>


        <!-- searchform -->
        <div class="search-form-container" style="">
            
            <?php get_search_form() ?>

        </div>

        
        <div class="bt-menu-dcha" id="bt-menu-dcha">
          <img src="<?php bloginfo('template_url') ?>/img/perfiles-off.png" alt="" class="btnperfil">
          </div>

    </div>

  <div class="menu-izq">


        <?php 

        $args = array(
        
        'theme_location' => 'left-nav-menu',
        'menu'            => '',

        'container' => 'nav',
        'container_class' => 'menu-tipos',
        'container_id'    => '',

        'menu_class'      => '', // Clase que le daremos al menú
        'menu_id'         => '',

        'echo'            => true, // Sí, queremos que lo pinte
        'fallback_cb'     => false, // No, no queremos un fallback
        'before'          => '', // Sin elemento antes
        'after'           => '', // Sin elemento después
        'link_before'     => '<span class="dorado"> &bull; </span>', // Sin link antes
        'link_after'      => '', // Sin link después
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // La forma que adoptará
        'depth'           => 0, // Sin profundidad definida
        'walker'          => '' // Si el menú es un objeto tipo walker
      
      );


        wp_nav_menu( $args );
       
       ?>


        <div class="form-menu">
<!--             <p class="smalltext" style="color: #999999;">Suscribete a nuestra <span style="font-style:italic; color: #eeeeee;">Newsletter</span></p> -->

            <a href="https://interbanservices.com/formularios/newsletter_neurona/a000X000013DEnB" class="news-button btn" style="margin-left: 2.5em;color: #ffffff !important">Únete a La Neurona</a>

        </div>

        <div class="clearboth"></div>

        <div class="menu_search text-center" style="margin-top: 1.5em;">
             <?php get_search_form() ?>
        </div>

    <!-- rrss icons -->

        <nav class="rrss-menu rrss-icons">
          <ul class="menuredes">
            <li>
                <a href="https://www.youtube.com/channel/UCnsswyWWJGz8kjRlnTqlcig ">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-youtube-off.png" alt="" data-imagen="youtube">
                </a>
            <li>
            <li>
                <a href="https://twitter.com/LaNeurona_com">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-twitter-off.png" alt="" data-imagen="twitter">
                </a>
            <li>
            <li>
                <a href="https://www.instagram.com/laneurona_com/">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-instagram-off.png" alt="" data-imagen="instagram">
                </a>
            <li>
            <li>
                <a href="https://www.facebook.com/LaNeuronacom">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-facebook-off.png" alt="" data-imagen="facebook">
                </a>
            <li>
            <li>
                <a href="https://www.linkedin.com/company/la-neurona-digital/">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-linkedin-off.png" alt="" data-imagen="linkedin">
                </a>
            <li>
            <li>
                <a href="mailto:info@laneurona.com">
                    <img src="<?php bloginfo('template_url') ?>/img/icon-email-off.png" alt="" data-imagen="email">
                </a>
            <li>
          </ul>
        </nav>

    <!-- fin rrss icons -->

  </div><!-- fin menu izq -->


  <div class="menu-dcha">


        <?php 

        $args = array(
            'theme_location' => 'rightup-nav-menu',
        'menu'            => '',

            'container'   => 'nav',
        'container_class' => 'menu-perfiles-up',
        'container_id'    => '',

        'menu_class'      => '', // Clase que le daremos al menú
        'menu_id'         => '',

        'echo'            => true, // Sí, queremos que lo pinte
        'fallback_cb'     => false, // No, no queremos un fallback
        'before'          => '', // Sin elemento antes
        'after'           => '', // Sin elemento después
        'link_before'     => '', // Sin link antes
        'link_after'      => '', // Sin link después
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // La forma que adoptará
        'depth'           => 0, // Sin profundidad definida
        'walker'          => '' // Si el menú es un objeto tipo walker
      );


        wp_nav_menu( $args );
       
       ?>

        <?php 

        $args = array(
            'theme_location' => 'rightdown-nav-menu',
        'menu'            => '',

            'container'   => 'nav',
        'container_class' => 'menu-perfiles-down',
        'container_id'    => '',

        'menu_class'      => '', // Clase que le daremos al menú
        'menu_id'         => '',

        'echo'            => true, // Sí, queremos que lo pinte
        'fallback_cb'     => false, // No, no queremos un fallback
        'before'          => '', // Sin elemento antes
        'after'           => '', // Sin elemento después
        'link_before'     => '', // Sin link antes
        'link_after'      => '', // Sin link después
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>', // La forma que adoptará
        'depth'           => 0, // Sin profundidad definida
        'walker'          => '' // Si el menú es un objeto tipo walker
      );


        wp_nav_menu( $args );
       
       ?>

  </div><!-- fin menu dcha -->  


  </header>	