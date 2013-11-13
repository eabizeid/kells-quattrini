<?php
/**
 * The Template for displaying all single comercials.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div class="titulo">
					<div class="titulo-interno"><a href="<?php echo get_post_type_archive_link('documental'); ?>"><?php _e('Documentales','kells')?> / <?php _e('Trabajo','kells')?></a></div>
				</div>
				<div class="trabajo">
					<div class="trabajo-interno">
      					<div class="trabajo-titulo"><?php the_title(); ?></div>
        				<div class="trabajo-bajada"><?php the_excerpt(); ?></div>
        				<div class="trabajo-texto">
							<?php the_content(); ?>
						</div>
      					<div class="volver"><a href="<?php echo get_post_type_archive_link('documental'); ?>"><?php _e('Volver','kells')?></a></div>
      				</div>
      			</div>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>