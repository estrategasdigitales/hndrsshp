<?php
/**
 * Footer
 *
 * @package WordPress
 * @subpackage Visual Composer Starter
 * @since Visual Composer Starter 1.0
 */

if ( visualcomposerstarter_is_the_footer_displayed() ) : ?>
	<?php visualcomposerstarter_hook_before_footer(); ?>
	<footer id="footer">	
		<div class="row">
			<div class="container">
				<div class="col-md-8 text-center redesf footabajo">
					<?php echo date('Y'); ?> Todos los derechos reservados. Sitio desarrollado por <a href="https://estrategasdigitales.com/">Estrategas Digitales</a> | <a href="<?php echo site_url(); ?>/aviso-de-privacidad">Aviso de privacidad</a>
				</div>
				<div class="col-md-4 text-right redesf">
					 <i class="fab fa-facebook"></i><i class="fab fa-twitter"></i><i class="fab fa-linkedin"></i>
				</div>
				
				
				
			</div>
		</div>
		
	</footer>








<script type="text/javascript">

</script>

	<?php visualcomposerstarter_hook_after_footer(); ?>
<?php endif; ?>
<?php wp_footer(); ?>



</body>
</html>




