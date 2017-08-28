<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container-fluid">
			<div class="row">		
				<?php 
				    echo do_shortcode("[metaslider id=28]"); 
				?>
			</div>
		</div>
	</section>
	<section id="atelie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small title-restaurante"><span class="cor-base">Restaurante</span> Aroma e Sabor</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 fadeInLeft wow">
					<a href="<?php echo esc_url( home_url( '/' )."atelie-culinario" ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria1.jpg"; ?>"/></a>
				</div>
				<div class="col-md-4 fadeInUp wow">
					<a href="<?php echo esc_url( home_url( '/' )."eventos" ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria2.jpg"; ?>"/></a>
				</div>
				<div class="col-md-4 fadeInRight wow">
					<a href="<?php echo esc_url( home_url( '/' )."fotos" ); ?>"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/categoria3.jpg"; ?>"/></a>
				</div>
			</div>
		</div>
	</section>
	<section id="detalhes">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left wow fadeInUp">
					<h4>Restaurante Aroma e Sabor</h4>
					<p class="">Somos pioneiros no sistema de refeição a quilo na cidade de São Paulo.
						Atuamos há 26 anos, fornecendo comida caseira, num ambiente mais do que familiar.
						<br>Tudo começou com Mama Odete e agora, já na segunda geração, o restaurante 
						Aroma e Sabor procura manter o mesmo espírito e a mesma ideia: alimentar com 
						qualidade a todos que nos procuram.

					</p>
					<ul>
						<li>Visão Panorâmica para o Mosteiro São Bento e Viaduto Santa Ifigênia</li>
						<li>Cardápio variado com sobremesas especiais todos os dias</li>
						<li>Sistema buffet por quilo, comida brasileira, caseira</li>
						<li>Sexta-feira o cardápio é temático, com comida japonesa e árabe</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-saiba-mais">Confira as fotos</a>
				</div>
				<div class="col-md-5 text-left fadeInUp wow">
					<h4>Fotos</h4>
					
					<div class="fotos-sobre row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 01.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 02.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 03.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Galeria Aroma e Sabor 04.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>
		</div>		
	</section>

	<section id="maps">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467814.9804093564!2d-47.041120950597595!3d-23.64717016917304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855caa088ef%3A0xee3fef7424d63dfc!2sR.+S%C3%A3o+Bento%2C+545+-+Centro%2C+S%C3%A3o+Paulo+-+SP%2C+01011-100!5e0!3m2!1spt-BR!2sbr!4v1449080600451" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
