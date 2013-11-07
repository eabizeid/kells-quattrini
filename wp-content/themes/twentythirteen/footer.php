<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
global $opcionesPod;
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="pie">
				<div class="pie-interno">
			        <div class="pie-datos"><strong><?php echo $opcionesPod->field("descripcion_pie_de_pagina") ?></strong> &nbsp;/&nbsp; Contacto: <a href="mailto:<?php echo $opcionesPod->field("mail_de_contacto") ?>"><?php echo $opcionesPod->field("mail_de_contacto") ?></a></div>
			        <a href="http://www.kells.com.ar" target="_blank" class="pie-kells"></a>
			    </div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>
