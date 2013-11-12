<?php 

	wp_enqueue_script( 'globals', get_template_directory_uri() . '/js/globals.js');
	wp_enqueue_style('skin',get_template_directory_uri().'/css/skin.css');
?>
<script type="text/javascript">

</script>
	<header class="titulo">
		<h1 class="titulo-interno">
		       <?php
				 $labels =  get_post_type_object(get_post_type())->labels; 
				 _e( $labels->name, 'kells' );
			?>
		</h1>
	</header><!-- .archive-header -->
<?php if ( have_posts() ) : ?>
<?php $posts_count = wp_count_posts(get_post_type()); ?>
	<div class="contenido">
		<div class="contenido-interno">
			<div class="trabajos">
				<ul>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<li>
                			<div class="trabajos-imagen"><a  href="<?php echo the_permalink() ?>"><?php the_post_thumbnail('comercial_video_thumb'); ?></a></div>
                			<div class="trabajos-texto"><a  href="<?php echo the_permalink() ?>"><strong><?php echo the_title() ?></strong><?php echo the_excerpt()?></a></div>
                		</li>
					<?php endif; ?>
				<?php endwhile; ?>
				</ul>
			</div>
			<?php if(!isset($_REQUEST['show_all']) && $posts_count->publish > COMERCIALES_VIDEOS_PAGE_SIZE ) : ?>
			<div class="ver-mas"><a href="?show_all"><?php echo __('Ver más')?></a></div>
			<?php endif;?>
		</div>
	</div>
<?php endif; ?>