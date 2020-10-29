<?php 
//recojemos los perfiles para pintarlos en el select
$terms = get_terms( array(
    'taxonomy' => 'perfil',
    'hide_empty' => false,
) );

//current url
global $wp;
$current_url = home_url( add_query_arg( array(), $wp->request ) );

global $post;

//recojemos los datos del termino en el que nos encontramos de la tax accion
//devulve array con objeto dentro
$term = wp_get_post_terms( $post->ID, 'accion' );

//base url
$url = get_bloginfo('url');
//summit del formulario controlado por js
?>


<div class="container-fluid">

    <div class="row" style="margin-top: 130px">
      <div class="col-xs-5 col-xs-offset-9 text-right">


        <form action=" <?php echo $url .'/'. $term[0]->taxonomy .'/'. $term[0]->slug ?>" method="POST" id="filter-form">
        

          <div class="form-group ">
            <select style="height: 3em;width: 60%;border-radius: .1px !important" class="form-control" id="perfil-filter" name="perfil-filter" >
              <option value="101">-- filtrar por perfil --</option>
              <?php foreach ($terms as $value) : ?>
                  <option style="height: 2em" value="<?php echo $value->slug ?>"  <?php echo ($_POST['perfil-filter'] == $value->slug ? 'selected' : '')  ?> ><?php echo $value->name ?></option>
              <?php endforeach; ?>
              <option value="any" <?php echo ($_POST['perfil-filter'] == 'any' ? 'selected' : '')  ?>>Todos los Perfiles</option>
            </select>
          </div>
        </form>        
      </div>
    </div>

</div>