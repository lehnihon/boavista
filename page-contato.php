<?php
get_header(); ?>

<div id="content">
	<section id="contato">
		<h1 class="title-full small wow fadeIn">Contato</h1><br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<?php echo do_shortcode('[contact-form-7 id="26" title="Contato"]') ?>
				</div>
				<div class="col-md-6 text-left ">
					<div class="videoWrapperb">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.6419297870452!2d-46.635697884529336!3d-23.545377784690857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5855a7164063%3A0x3c3a4824dc7537be!2sR.+Boa+Vista%2C+274+-+Centro%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1504028653712" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="quadro">
						<p>
							<strong>Email</strong><br>
							atendimento@boavistaspa.com.br
						</p>
						<p>
							<strong>Telefone</strong>
							<br>11 3101-1795  |  11 97696-9630
						</p>
						<p>
							<strong>Endereço</strong><br>
							Rua Boa Vista, 274 - Loja 29<br>
						Galeria Boa Vista - Centro - SP
						</p>
						
					</div>
				</div>
			</div>	
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
