	<!-- paginacion -->
	<div class="row">

		<div class="col-xs-12 text-center">
			<div class="pagination">
		    <?php 
		        echo paginate_links( array(
		            'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		            //'total'        => 4, //numero total de paginas
		            'current'      => max( 1, get_query_var( 'paged' ) ),
		            'format'       => '?paged=%#%',
		            'show_all'     => false,
		            'type'         => 'plain',
		            'end_size'     => 2,
		            'mid_size'     => 1,
		            'prev_next'    => true,
		            'prev_text'    => sprintf( '<i></i> %1$s', __( 'Prev', 'text-domain' ) ),
		            'next_text'    => sprintf( '%1$s <i></i>', __( 'Next', 'text-domain' ) ),
		            'add_args'     => false,
		            'add_fragment' => '',
		        ) );
		    ?>
			</div>
		</div>
	</div> <!-- fin .row -->
	<!-- fin paginacion -->