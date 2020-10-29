<!-- ------------------------------------------------------------------------------------------- -->
<form role="search" method="get" class="search-form inline-form" action="<?php echo home_url( '/' ); ?>" style="">
  
  <label>
  
    <span class="screen-reader-text"><?//php echo _x( 'Search for:', 'label' ) ?></span>
    <input style="font-weight: lighter;" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  
  </label>
 
  <button type="submit" class="search-submit" style=""><span class='fa fa-search' style=""></span></button> 
  
</form>


<!-- <form role="search" method="get" class="search-form big-search-form inline-form" action="<?php echo home_url( '/' ); ?>" style="display: none">
  <label>
    <span class="screen-reader-text"><?//php echo _x( 'Search for:', 'label' ) ?></span>
    <input style="font-weight: lighter;" type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Buscar...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
  </label>
 
  <button type="submit" class="search-submit" style=""><span class='fa fa-search' style=""></span></button> 


</form> -->