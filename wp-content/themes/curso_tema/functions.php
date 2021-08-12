<?php 
/* Todas as funões dentro do WordPress devem ser acossiadas a um gancho a instrução abaixo é uma que iremos usar muito.
Então aqui estamos carregando nossos scripts e folhas de estilo.
*/

function load_scripts(){
 wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js', 
 array( 'jquery' ), '5.1.0', true );
 
 wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css', 
 array(), '5.1.0', 'all' );
 
wp_enqueue_style( 'template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'load_scripts' );
/* Nenhuma folha de estilho é carregada se não chamar a função <?php wp_head(); ?> antes da tag </head> no header  */
/*---------------------------------------------------------------------------------------------------------------- */
/* REGISTRANDO NOSS MENU JUNTAMENTE COM A FUNÇÃO DE CONFIGURAÇÃO DO TEMA*/



/*----------------------------------------------------------------------------------------------------------------
/* Aqui iremos criar as facilidades para usuários com a função do WordPress - 
Os usuáirios poderam alterar a imagem do cabeçalho thema sem precisar mexer no código
Existem outras opções de Suport como essa... */


// Função de Configuração do Tema
function curso_wp_config(){ // aqui tinha wpcurso_config... 
	// Registrando nossos menus
	register_nav_menus(
		array(
			'my_main_menu' => 'Main Menu',
			'footer_menu' => 'Footer Menu'
		)
	);	

	$args = array(
		'height'	=> 225,
		'width'		=> 1920
	);
	// a cada item que adicionamos estamos add metabox 
	add_theme_support( 'custom-header', $args ); // Suporte para add imagens no header... para a mágica acontecer deve ser add essa instrução ( <img class="img-fluid" src="<?php header_image(); ... 
	//) no header das páginas onde queremos que o bloco apareça 
	add_theme_support( 'post-thumbnails'); // Suporte para add miniaturas de imagens nos nossos posts ou thumbnails
	// Da mesma forma que acima para que a mágia apareça devemos add o metodo que chama esse no local onde queremos que ele apareça que no caso é 
	// antes de aparecer a data do post.
	add_theme_support( 'post-formats', array('image', 'video','audio','chat')); // Aqui podemos mudar os formatos de postagens. No wordPress tem 10 possibilidades de fomatação
	// para Nota, galeria, Link, imagem, Citação, Status, Video, Audio, chat e o padrão.

}
add_action( 'after_setup_theme', 'curso_wp_config', 0 ); // 'wpcurso_config'

/*---------------------------------------------------------------------------------------------------------------- */
/* AQUI VAMOS REGISTRAR NOSSA SIDEBAR OU NOSSAS BARRAS LATERAIS OU NOSSAS WIDGETs
primeiro vamos criar um gancho para o wordPress carregar nossa sidebar e depois vamos criar a função
/*---------------------------------------------------------------------------------------------------------------- */

add_action( 'widgets_init', 'curso_wp_sidebars' );
function curso_wp_sidebars(){
	register_sidebar( // Nossa primeira Sidebar ou widget
		array(
			'name'=> 'Home Sidebar',
			'id'=> 'sidebar_1',
			'description'=> 'Sidebar to be used on Home Page',
			'before_widget'=> '<div class="widget-wrapper">',
			'after_widget'=> '</div>',
			'before_title'=> '<h2 class="widget-title">',
			'after_title'=> '</h2>'
		)
	);
	register_sidebar( // Nossa segunda Sidebar ou widget
		array(
			'name'=> 'Blog Sidebar',
			'id'=> 'sidebar_2',
			'description'=> 'Sidebar to be used on Home Page',
			'before_widget'=> '<div class="widget-wrapper">',
			'after_widget'=> '</div>',
			'before_title'=> '<h2 class="widget-title">',
			'after_title'=> '</h2>'
		)
	);
}