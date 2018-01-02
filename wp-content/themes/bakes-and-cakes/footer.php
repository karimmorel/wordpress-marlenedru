<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bakes_And_Cakes
 */
$enabled_sections = bakes_and_cakes_get_sections();  

if( is_home() || ! $enabled_sections || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){ echo '</div></div>'; } ?>

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="container">
		<div class="footer-t">
			<div class="row">
				<div class="col">
					<b>L'Univers</b>
					<hr/>
					<a href="http://jardindesmalices.com/nos-malices/nos-sirops/">Nos Sirops</a><br/>
					<a href="http://jardindesmalices.com/nos-malices/nos-aperitifs/">Nos Apéritifs</a><br/>
					<a href="http://jardindesmalices.com/nos-malices/idee-cadeau/">Idée Cadeau</a><br/>
				</div>
				<div class="col">
					<b>Informations pratiques</b>
					<hr/>
					<a href="http://jardindesmalices.com/nos-malices/nos-valeurs/">Nos Valeurs</a><br/>
					<a href="http://jardindesmalices.com/notre-histoire/">Notre Histoire</a><br/>
					<a href="http://jardindesmalices.com/nos-malices/ou-nous-trouver/">Où nous trouver</a><br/>
					<a href="http://jardindesmalices.com/nos-malices/commande/">Envie de commander</a><br/>
				</div>
				<div class="col">
					<b>Suivez-nous</b>
					<hr/>
					<a href="https://www.facebook.com/jardin.des.malices/?ref=aymt_homepage_panel" target="_blank">La Page Facebook</a>
				</div>
				<div class="col">
					<b>Contactez-nous</b>
					<hr/>
					<span>Du Lundi au Vendredi 9h - 18h</span><br/>
					<span>Appelez nous au <b>06 16 03 64 77</b></span><br/>
					<a href="mailto:jardindesmalices.contact@gmail.com"><b>jardindesmalices.contact@gmail.com</b></span>
				</div>
			</div>
		</div>
	</div>
	<div class="site-info"><b>LA LIQUORISTERIE JARDIN DES MALICES</b><br/><small>L'abus d'alcool est dangereux pour la santé, à consommer avec modération.</small></div>

	
</footer><!-- #colophon -->
<a href="javascript:void(0);" class="btn-top"><span><?php _e('Top','bakes-and-cakes'); ?></span></a>

</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
