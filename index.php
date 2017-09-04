<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container-fluid">
			<div class="row">		
				<?php 
				    echo do_shortcode("[metaslider id=4]"); 
				?>
			</div>
		</div>
	</section>
	<section id="atelie">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="small">SPA BOA VISTA</h1>
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
					<h2>SPA Boa Vista</h2>
					<p>O SPA Boa Vista foi planejada visando atender as necessidades dos 
					clientes em cada detalhe. Aqui você encontra o melhor atendimento 
					não só na massagem, na estética e na acupuntura, mas todos os 
					momentos desde sua chegada.

					</p>
					<p>
						Todos os nossos terapeutas e esteticistas são devidamente 
qualificados para que você possa desfrutar da melhor massagem e 
dos melhor serviço estético oferecidos no melhor SPA de massagem 
e estética de São Paulo.
					</p>
					<p>
						No SPA Boa Vista, você encontra terapeutas devidamente especializadas 
em variadas técnicas de massagem e esteticistas qualificados, que com 
certeza irão proporcionar um atendimento de alto nível.
					</p>
					<p>
						Qualidades, ótimo atendimento a preço justo vão surpreender. 
					</p><br>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-saiba-mais">Confira as fotos</a>
				</div>
				<div class="col-md-5 text-left fadeInUp wow">
					<h2>Fotos</h2>
					
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
				<div class="col-md-12 videoWrapper fadeIn wow">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6419297870452!2d-46.635697884529336!3d-23.545377784690857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855a7164063%3A0x3c3a4824dc7537be!2sR.+Boa+Vista%2C+274+-+Centro%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1504028653712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
