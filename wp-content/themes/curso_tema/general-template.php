<!-- Modelo que pode ser eutilizado -- >

<?php 
/*
 Template Name: General Template
 */
?>
   <!-- Area dinamica ou seja nossa área de conteúdo. vamos chamar nosso header e tbm nosso  footer -->
    <?php get_header(); ?>

	<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />


	<div class="content-area">
		<main>

			<!-- middle-area = area central --> 
			<section class="middle-area"> 
				<div class="container">
						<div class="general-template">
							<!--Aqui começa o Loop - O loop é uma estrutura que será comum ao 
							container de postes mudando apenas os dados conforme os dados salvos em banco de dados-->
							<?php 
							
							if( have_posts()):
								// Se tiver algum post, 
								//Enquanto tiver post mostre o post
								while( have_posts()): the_post();					
							?> 
							<!-- Aqui iremos chamar umas funções do WordPress que vai trazer o conteúdo dos posts
							de forma dinamica Essas funções são chamadas de Templete Tags-->

							<!--Para chamar de forma dinamica o título dos posts usamos a função the_title(); ?> 
								para data usamos get_the_date
							
							*Dica... para toas as funções do WordPress que iniciam com get devemos dar um echo na frente--> 

							<article>
								<h2><?php the_title(); ?></h2> 
								<?php the_content();?>
							</article>

                            <p>Este modelo será igual para a todas as páginas que usar esse templete</p>

							<?php
								endwhile;
							else:/* Caso não tenha posts para mostrar */
							?> 
							<p>Theres´s nothing yet to be displayed ...</p>
							<?php endif;?> <!-- Aqui termina o loop --> 
						</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>