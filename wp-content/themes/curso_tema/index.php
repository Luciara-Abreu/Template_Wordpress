   <!--
    Area dinamica ou seja nossa área de conteúdo.
    vamos chamar nosso header e tbm nosso  footer
    -->
<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


	<div class="content-area">
		<main>
			<!-- middle-area = area central --> 
			<section class="middle-area"> 
				<div class="container">
					<div class="row">
             <!-- Aqui seria o local da sidebar do lado esquerdo... -->
			 
					<div class="news col-md-8">
							<!--Aqui começa o Loop - O loop é uma estrutura que será comum ao 
							container de postes mudando apenas os dados conforme os dados salvos em banco de dados-->
							<?php 
							
							if( have_posts()):
								// Se tiver algum post, 
								//Enquanto tiver post mostre o post
								while( have_posts()): the_post();					
							?> 

							<!-- Aqui tinha nosso article dos posts
							O article foi para a pasta template-parts para o arquivo content.php
							e a cada post do banco de dados irá aparecer no site pag blog com todos os dados do post.
							data, quem criou etc... então no lugar do article iremos chamar a função
						   get_template_part e dentro do metodo demos chamar o arquivo que está dentro da pasta porém sem a
						   extensão .php-->

						   <?php get_template_part( 'template-parts/content', get_post_format() ); ?>


							<?php
								endwhile;
							else:/* Caso não tenha posts para mostrar */
							?> 
							<p>Theres´s nothing yet to be displayed ...</p>
							<?php endif;?> <!-- Aqui termina o loop --> 

						</div>
						<?php get_sidebar('blog') ?> <!-- retiramos aside daqui e colocamos dentro de sidebar-blog.php dentro da função -->
					</div>					
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>

