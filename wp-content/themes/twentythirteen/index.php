
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */



get_header(); ?>
<?php 

	wp_enqueue_script( 'globals', get_template_directory_uri() . '/js/globals.js');
	wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/js/jquery.flexslider-min.js');
	wp_enqueue_script( 'index', get_template_directory_uri() . '/js/index.js');
	wp_enqueue_style('flexslider',get_template_directory_uri().'/css/flexslider.css');
	

?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="destacado">
				<div class="destacado-interno">
			    	<?php if ( have_posts() ) : ?>
			    	<div class="flexslider">
			        	 <ul class="slides">
			        	 <?php while ( have_posts() ) : the_post(); ?>
			        	    <?php
			        	    	$labels =  get_post_type_object(get_post_type())->labels; 
		    				?>
			                <li>
			                    <a href="trabajos-detalle.php">
			                   		<?php if ( has_post_thumbnail()) : ?>     
			                    		<?php the_post_thumbnail('home_thumb'); ?>
			                    	<?php endif?>
			                        <span class="flex-caption"><span><?php _e( $labels->name, 'kells' );?></span><br /><?php the_title() ?></span>
			                    </a>
			                </li>
			                <?php endwhile;?>
			            </ul>
			        </div>
			        <?php endif; ?>    
			    </div>
			</div>
			<div class="contenido">
				<div class="contenido-interno">
					<div class="home-separador">
			        	<div class="home-quien-soy">
			            	<div class="home-quien-soy-titulo"><a href="<?php echo get_permalink( get_page_by_path('quien-soy')); ?>"><?php _e('Qui&eacute;n Soy','kells')?></a></div>
			            	<div class="home-quien-soy-bajada"><a href="<?php echo get_permalink( get_page_by_path('quien-soy')); ?>"><?php _e('Director y productor cinematogr&aacute;fico','kells')?></a></div>
			            </div>
			            <div class="home-prensa">
			            	<div class="home-prensa-titulo"><a href="<?php echo get_post_type_archive_link('nota_prensa'); ?>"><?php _e('Prensa','kells')?></a></div>
			            	<div class="home-prensa-bajada"><a href="<?php echo get_post_type_archive_link('nota_prensa'); ?>"><?php echo __('art&iacute;culos y notas','kells')?></a></div>
			            </div>
			        </div>
			    </div>
			</div>
		

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>