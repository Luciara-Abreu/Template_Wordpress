   <!--
    Area dinamica ou seja nossa área de conteúdo.
    vamos chamar nosso header e tbm nosso  footer
    -->
    <?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slide</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">Serviços</div>
				</div>
			</section>
			<!-- middle-area = area central --> 
			<section class="middle-area"> 
				<div class="container">
					<div class="row">
						<?php get_sidebar('home') ?> <!-- retiramos aside daqui e colocamos dentro de sidebar-home.php dentro da função --> 
						<div class="news col-md-8">
							<!--Aqui começa o Loop - O loop é uma estrutura que será comum ao 
							container de postes mudando apenas os dados conforme os dados salvos em banco de dados-->
							<?php 
							
							if( have_posts()):
								// Se tiver algum post, 
								//Enquanto tiver post mostre o post
								while( have_posts()): the_post();					
							?> 
							
                            <p>Conteúdo vindo do arquivo home.php </p>

							<?php
								endwhile;
							else:/* Caso não tenha posts para mostrar */
							?> 
							<p>Theres´s nothing yet to be displayed ...</p>
							<?php endif;?> <!-- Aqui termina o loop --> 
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>