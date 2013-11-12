<?php 

	wp_enqueue_script( 'globals', get_template_directory_uri() . '/js/globals.js');
	wp_enqueue_script( 'jquery.jcarousel.min', get_template_directory_uri() . '/js/jquery.jcarousel.min.js');
	wp_enqueue_script( 'documental_ficcion', get_template_directory_uri() . '/js/documental_ficcion.js');
	wp_enqueue_style('skin',get_template_directory_uri().'/css/skin.css');
	

?>
<script type="text/javascript">

</script>
<?php if ( have_posts() ) : ?>
	<header class="titulo">
		<h1 class="titulo-interno"><?php
				_e( $title, 'kells' );
			
		?></h1>
	</header><!-- .archive-header -->
	<div class="contenido">
		<div class="contenido-interno">
			<div class="trabajos-carrousel">
				<ul id="mycarousel" class="jcarousel-skin-tango">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<li><a href="<?php echo the_permalink() ?>"> <?php the_post_thumbnail('documetal_ficcion_thumb'); ?></a></li>
					<?php endif; ?>
				<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</div>
<?php endif; ?>