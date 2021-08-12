
<?php /* Aqui estamos verificando se tem algum widget criado em nosso site.
Ou seja, se colocamos alguma sidebar ou barra lateral em nosso site...  */?>


<?php if( is_active_sidebar( 'sidebar_1')): ?>
    <aside class="sidebar col-md-4">
    <?php dynamic_sidebar('sidebar_1'); ?>
    </aside> 
<?php endif; ?>


<!--Para a mágica acontecer, vamos ter que add uma chamada onde criamos as Barras laterais
lá na Page Home,  usando uma função do wordPress chamada de get_sidebar() 
Tiramos a aside da home pade e trazemos para cá na home deixamos apenas a função que chama a sidebar -->