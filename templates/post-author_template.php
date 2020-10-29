<?php $imagen_ponente = get_field('imagen_ponente') ?>
				<div class="row">
					<div class="col-xs-12 authorbox">
						<div class="col-sm-12 col-xs-3 authorphoto posrelative">
							<img src="<?php echo $imagen_ponente['url'] ?>" alt="<?php echo $imagen_ponente['title'] ?>" class="img-responsive posabsolute center-absolute" style="border-radius: 100px;">
							<h4 class="dorado" style="margin-left: .65em">AUTOR</h4>
						</div>
						<div class="col-sm-12 col-xs-9 author-data">
							<div class="author-name"><h4><?php the_field('nombre_ponente') ?></h4></div>
						
							<div class="author-description"><p><?php the_field('cargo_ponente') ?></p></div>
							<div class="author-rrss text-center" style="font-size: 1.125em;">
								<a href="<?php the_field('twitter_ponente') ?>" target="_blank"><span class="fa fa-twitter" aria-hidden="true"></span></a>
								<a href="<?php the_field('linkedin_ponente') ?>" target="_blank"><span class="fa fa-linkedin" aria-hidden="true"></span></a>
								<a href="mailto:<?php the_field('email_ponente') ?>"><span class="fa fa-envelope" aria-hidden="true"></span></a>
							</div>
						</div>
					</div>
				</div>