
			<nav class="post-socialbox">
				<p class="text-center"><strong>Comparte </strong>con otros profesionales</p>
				<ul>
					<li>
						<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php echo urlencode( the_title() ); ?>" target="_blank" onclick="window.open(this.href, 'mywin','left=20,top=20,width=600,height=500,toolbar=1,resizable=0'); return false;">

							<img src="<?php bloginfo('template_url') ?>/img/icon-twitter-color-off.png" alt="" data-imagen="twitter">
						</a>
					</li>
					<li>
						<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-facebook-color-off.png" alt="" data-imagen="facebook">
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php echo (get_the_excerpt() ? urlencode(get_the_excerpt()) : ''); ?>&source=LinkedIn">
							<img src="<?php bloginfo('template_url') ?>/img/icon-linkedin-color-off.png" alt="" data-imagen="linkedin">
						</a>
					</li>
					<li>
						<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-google-color-off.png" alt="" data-imagen="google">
						</a>
					</li>
					<li>
						<a href="mailto:?subject=Creo que te interesará este contenido&body=<?php the_title() ?> <?php the_permalink() ?>">
							<img src="<?php bloginfo('template_url') ?>/img/icon-email-color-off.png" alt="" data-imagen="email">
						</a>
					</li>
				</ul>
			</nav>
			
			<div class="clearboth"></div>
			<div class="separator"></div>