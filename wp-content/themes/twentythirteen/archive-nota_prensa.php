<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Thirteen
 * already has tag.php for Tag archives, category.php for Category archives,
 * and author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<header class="titulo prensa">
				<h1 class="titulo-interno">
				      <?php
				      _e( 'Prensa', 'kells' );?>
				</h1>
			</header><!-- .archive-header -->
		<?php if ( have_posts() ) : ?>
		<?php $posts_count = wp_count_posts(get_post_type()); ?>
			<div class="contenido">
				<div class="contenido-interno">
					<div class="prensa">
						<ul>
						<?php while ( have_posts() ) : the_post(); ?>
								<li>
									<a href="<?php echo the_permalink() ?>">
										<strong class="prensa-fecha"><?php echo the_time('d.m.Y')?></strong><br/><br/>
                    					<?php echo the_title()?>
                    				</a>
		                		</li>
						<?php endwhile; ?>
						</ul>
					</div>
					<?php if(!isset($_REQUEST['show_all']) && $posts_count->publish > COMERCIALES_VIDEOS_PAGE_SIZE ) : ?>
					<div class="ver-mas"><a href="?show_all"><?php echo __('Ver más')?></a></div>
					<?php endif;?>
				</div>
			</div>
		<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>