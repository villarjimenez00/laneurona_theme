<?php 
//current url
global $wp;
$current_url = home_url( add_query_arg( $_GET, $wp->request ) );
var_dump($current_url);
?>	
<?php echo "<br>numero de post desde la consulta<br>"; ?>
<?php var_dump(count($posts)) ?>
<?php echo "<br>post<br>"; ?>
<?php var_dump($_POST['num_post_per_page']); ?>
<?php echo "<br>valor paginacion session<br>"; ?>
<?php var_dump($_SESSION['num_post_per_page']); ?>

<!-- comprobar el numero de post totales q recoge la busqueda -->

<!-- evaluar aparicion del form y la cantidad de options del select -->

		<div class="row">
			<div class="col-xs-4">

				<form action="<?php echo $current_url ?>" class="form-inline" method="POST" >
									
					<select name="num_post_per_page" id="num_post_per_page">
				
						<option value="24" <?php echo isset($_SESSION['num_post_per_page']) && $_SESSION['num_post_per_page'] == 24 ? 'selected' : ''; ?> >24</option>
						<option value="48" <?php echo isset($_SESSION['num_post_per_page']) && $_SESSION['num_post_per_page'] == 48 ? 'selected' : '';  ?> >48</option>
						<option value="-1" <?php echo isset($_SESSION['num_post_per_page']) && $_SESSION['num_post_per_page'] == -1 ? 'selected' : ''; ?> >All</option>
				
					</select>

					<input type="submit" value="Ver">
				</form>

			</div>
		</div>