<style>
/*antes del corte*/

/* Para 960px */  
@media only screen and (max-width: 7000px) and (min-width: 1051px) {  

	.logo-container{display: block;max-width: 70%}
  
}  
  
/* Para 800px */  
@media only screen and (max-width: 1050px) and (min-width: 769px) {  

	.logo-container{display: none;}
  
}  
  
  
@media only screen and (max-width: 768px) and (min-width: 5px) {  

	.logo-container{display: block;max-width: 70%;margin: .5em auto}
  
}  
  
/*tamaño fuentes*/

/* a partir de 769px */  
@media only screen and (max-width: 7000px) and (min-width: 769px) {  
	.header-left-row h1{		
		max-width: 30vw;
		font-size: 3.125vw !important
	}
	.header-left-row h3{
		font-size: 1.6875vw !important;
		max-width: 25vw;
	}

	.header-left-row{
		margin-left: 8.75em; 
		padding-top: 5.125em;
		padding-bottom: 5.125em;
	}
}  
  
/* Para menos de 768px */  
@media only screen and (max-width: 768px) and (min-width: 5px)  {  
	.header-left-row h1{
		font-size: 5.125vw !important;
		max-width: 70%;
		margin: .5em auto;
	}
	.header-left-row h3{
		font-size: 3.6875vw !important;
		max-width: 70%;
		margin: .5em auto;
	}
	.header-left-row{
		margin:2em ; 
		padding-top: 5.125em;
		padding-bottom: 0em;
	}  
} 


</style>
<div class="container-fluid" style="background-color: #000000;"> <!--  margin-top: -3.7vw | margin-top: 83px -->

	<div class="row vertical-align">
		
		<div class="col-sm-12 col-md-6 header-left">
		
			<div class="row header-left-row" style="">
			
					<div class="logo-container" style="">
						<img src="<?php echo bloginfo('template_url') ?>/img/La-Neurona-horizontal-negativo.png" alt="" class="img-responsive">	
					</div>
				
					<h1 style="color: #ffffff;">Participamos en Open Expo 19, el mayor encuentro de Open Source del sur de europa</h1>
					<h3 class="dorado">El congreso, celebrado el 20 de junio en Madrid, congregó a cientos de  asistentes y La Neurona formó parte de ello.</h3>
				
				</div>
					
		
		</div>
		
		<div class="col-sm-12 col-md-6 header-right">
			<img src="<?php echo bloginfo('template_url') ?>/img/post-evento-open/presentacion.jpg" alt="" class="img-responsive">
		</div>

	</div>
</div>



