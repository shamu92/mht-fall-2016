<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="content">
			<section class="hero-article-image">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'original' ); ?>
				<?php endif; ?>
			</section>
			<section class="nav-links article-nav-links-archive">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home page &gt; </a>
				<a href="<?php echo get_page_link(10); ?>">&nbsp;Resources &gt; </a>
				<a href="<?php echo get_post_type_archive_link( 'article' ); ?>">&nbsp;Articles &#38; Research &gt; </a>
				<p><?php wp_title( '' ); ?></p>

			</section>
		<section class="single-article-content container-text">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'single-recipe' ); ?>
		<?php endwhile; // End of the loop. ?>
		<p><?php echo CFS()->get( 'servings' );?></p>
		<p><span class="thick-single">Ingredients: </span><?php echo CFS()->get( 'ingredients' );?></p>
		<p><span class="thick-single">Directions: </span><?php echo CFS()->get( 'directions' );?></p>
		<p><?php echo CFS()->get( 'source' );?></p>
	</section>
<section>
	<h2 class="entry-title-article">Recipes you might also like</h2>
<div class="related-posts-wrapper">
		<?php
$values = CFS()->get( 'recipes_related' );

foreach ( $values as $post_id ) {
		$the_post = get_post( $post_id ); ?>
		<div class="article-wrapper article-wrapper-related">
			<div class="article-single-image">
					<?php echo  get_the_post_thumbnail($post_id, 'large');?>
			</div>
				<div class="article-grid-content">
			<a class="related_posts" href="<?php echo get_post_permalink( $post_id );?>">
			<?php echo $the_post->post_title; ?>
			</a>
				</div>
			</div>


	<?php	;
} ?>
</div>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="mountains">
		<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
		<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo"></div>
<?php get_footer(); ?>
</div>
