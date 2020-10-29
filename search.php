<?php
/**
 * The template for displaying search results pages.
 *
 * @package stackstar.
 */
 
get_header(); ?>

<div class="container-fluid">
    <div class="container" style="margin-top: 120px">
    



            <?php      
                       
                /* Contador de busqueda */ 
                $allsearch = new WP_Query("s=$s&showposts=-1"); 
                
                $key = esc_html($s, 1); 

                //$key = get_search_query();
                
                $count = $allsearch->post_count; 
                

            ?> 

        

  


        <?php if ( have_posts() ) : ?>

        <h2 class="pagetitle" style="text-align: center;"> 

        <?php 

                _e(''); 
                _e('<span class="search-terms">'); 


                // _e(' — '); 
                echo "<strong>";
                echo $count . ' ';
                 echo "</strong>"; 
                

                 _e('resultados para el término de busqueda: '); 
                echo "<strong>";
                echo $key;
                echo "</strong>";

                 _e('</span>'); 
                 wp_reset_query();




        ?>

        </h2>



        <!-- pagination form -->
        <?php //get_template_part('templates/pagination_form') ?>

        <!-- paginacion -->
            <?php echo neu_paint_pagination();?>
        <!-- fin paginacion -->


        <div class="search-container ">
            <section id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                    
                    <?php /* Start the Loop */ ?>
                 <?php while ( have_posts() ) : the_post(); ?>
                    <?php //identificamos el perfil y la accion del post ?>
                    <?php $perfil = wp_get_post_terms($post->ID, 'perfil', array("fields" => "names")); ?>
                    <?php $accion = wp_get_post_terms($post->ID, 'accion', array("fields" => "names")); ?>

                    <div class="result-container" style="border-bottom: 1px solid #ccc; padding-bottom: 1em">
                        <h2 class="search-post-title"><strong><?php the_title(); ?></strong></h2>
                        <p><span><?php echo $accion[0] ?></span> | <span><?php echo $perfil[0] ?></span></p>
                        <div class="search-post-excerpt"><p><?php neu_custom_excerpt(get_the_content(),30) ?></p></div>
                        <p><?php echo get_the_date() ?></p>
                        <div class="search-post-link"><a href="<?php the_permalink(); ?>" class="news-button btn" style="color: #ffffff !important;" >Ver +</a></div>
                    </div>
         
                <?php endwhile; ?>
         
                    <?php //the_posts_navigation(); ?>
         
                <?php else : ?>
                    
                    <h1 style="margin-bottom: 8em"> No hay resultados para el término de busqueda: <strong><?php echo $key; ?></strong></h1>

                    <?php //get_template_part( 'template-parts/content', 'none' ); ?>
         
                <?php endif; ?>
         
                </main><!-- #main -->
            </section><!-- #primary -->
        </div> <!-- fin .search-container -->

        <!-- paginacion -->
            <?php echo neu_paint_pagination();?>
        <!-- fin paginacion -->



    </div> <!-- fin .container -->
</div> <!-- fin .container-fluid -->
<?php get_footer(); ?>