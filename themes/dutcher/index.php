<?php get_header();?>
    <?php echo Gafa\GafaTemplate::Imprimir( 'home/notaPrincipal.tpl.php'); ?>
    <div class="feed-posts text-center">
        <?php //echo do_shortcode('[Sassy_Social_Share type="floating"]'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/tendencia.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/musiquita.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/munchies.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/cultura.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/roadTrip.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/personajes.tpl.php'); ?>
        <?php echo Gafa\GafaTemplate::Imprimir( 'home/films.tpl.php'); ?>
    </div>
<?php get_footer();?>
