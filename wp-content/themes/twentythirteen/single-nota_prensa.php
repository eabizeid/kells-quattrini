<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="contenido">
			<div class="contenido-interno">
			<div class="prensa-ver anterior"><?php
			echo previous_post_link('%link', __('Anterior','kells'))?></div>
			<div class="prensa-central">
				<div class="prensa-detalle-fecha"><strong class="prensa-fecha"><?php echo the_date('d.m.Y')?></strong></div>
				<div class="prensa-detalle-titulo"><?php echo the_title();?></div>
				<div class="prensa-detalle-texto">
					<?php echo the_content();?>
				</div>
			</div>
			<div class="prensa-ver siguiente">
			  <?php
			  echo next_post_link('%link', __('Siguiente','kells'))?>
			 </div>
			</div>
			</div>
			
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>