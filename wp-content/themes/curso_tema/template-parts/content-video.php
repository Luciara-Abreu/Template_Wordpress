	<!-- Aqui iremos chamar umas funções do WordPress que vai trazer o conteúdo dos posts
		de forma dinamica Essas funções são chamadas de Templete Tags-->
	<!--Para chamar de forma dinamica o título dos posts usamos a função the_title(); ?> ra data usamos get_the_date
	Dica... para toas as funções do WordPress que iniciam com get devemos dar um echo na frente--> 



    <article <?php post_class()?>>
    <!--     <?php echo get_post_format();  // aqui mostra lá na página o formato dos posts se são videos ou imagens ... ?>
-->
    <h2><?php the_title(); ?></h2> 
	<?php the_post_thumbnail( array( 275,275) );  // método que add imagem antes da data no post.?> 
    <div class="meta-info">
    <p>Published in <?php echo get_the_date(); ?>
	<p>Categories: <?php the_category( ' ' ); ?> </p>
	<p><?php the_tags( 'Tags: ', ', ');?></p>
    </div>
	<?php the_content();?>
</article>

<!-- Após criar esse arquivo deve-se add no index o parametro no get_template_part como parametro. 