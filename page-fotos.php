<?php
get_header(); ?>

<div id="content">
	<h1 class="title-full small wow fadeIn">Fotos</h1>
	<div id="paginas">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php 
					$args = array('posts_per_page' => 1,'post_type' => 'fotos');
					$query = new WP_Query( $args ); 
					?>	

					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>	
		</div>
	</div>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
