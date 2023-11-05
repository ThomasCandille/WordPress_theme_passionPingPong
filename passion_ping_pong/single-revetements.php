<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Passion_ping_pong
 */

 $dataRevetemment = get_fields();

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			?>

			<section>
				<h2>Caracteristiques du revetement</h2>
				<p>rapidité : <?= $dataRevetemment['rapidite'] ?></p>
				<p>contrôle : <?= $dataRevetemment['controle'] ?></p>
				<p>adherence : <?= $dataRevetemment['adherence'] ?></p>
				<p>épaisseur : <?= $dataRevetemment['epaisseur'] ?></p>
			</section>



			<?php

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
