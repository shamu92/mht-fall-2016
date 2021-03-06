<?php
/**
 * The template for displaying all pages.
 * Template Name: Treatments Page
 * @package Mountain_Heath_Theme
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main treatments-main" role="main">
		<div class="content">
			<section class="treatment-hero-image">
				<h1>Treatments</h1>
				<p>We offer a variety of treatments custom tailored to your needs to help your body heal in the best way for you.</p>
			</section>

			<section class="nav-links article-nav-links-archive bread-crumb-general container">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Homepage &gt; </a>
				<a href="<?php echo get_page_link(23); ?>">&nbsp;What We Do &gt; </a>
				<p> &nbsp;<?php wp_title( '' ); ?></p>
			</section>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php $fields = CFS()->get( 'treatment'); ?>
<div class="test">
				<div class="treatments-wrapper">

				<?php   foreach ( $fields as $field ) : ?>

					<div class="treatment-btn-off">
						<button class="treatment-buttons"> <?php   echo $field['treatment_title']; ?> </button>
					</div>

					<div class="treatment-description-single-active treatment-description "
					style="display:none;
					background-image: linear-gradient(90deg,rgba(0, 53, 87, 0.76),rgba(0, 155, 132, 0.73)),url(<?php  echo $field['treatment_img']; ?>);
					background-size:cover;
					display: flex;
     			flex-direction: column;
    			justify-content: center;
    			align-items: center;">
							<h3> <?php   echo $field['treatment_title']; ?> </h3>
							<p>  <?php   echo $field['treatment_text']; ?> </p>
							<p class="treatment-price">  <?php   echo $field['treatment_price']; ?> </p>
					</div>
				<?php endforeach; ?>
			</div>
</div>
			<?php endwhile; // End of the loop. ?>

		<div class="treatment-book">
				<img class="" src="<?php echo get_template_directory_uri()?>/MTH-Assets/amanda_photos/20161115_ACheadshots_frontpage_diduknow.jpg" alt="logo">
			<div class="treatment-list">
				<h3>Learn more about our treatments</h3>
				<p>See more details about treatments and how they can help you.</p>

				<a class="discover-more-btn"href="<?php echo get_page_link(138); ?>">
				<button type="button" name="button">Discover More</button></a>
			<!--Button links to 2.4 Appointments-->
			</div>
		</div>



		<section>
			<h5 class="how-can-we-help-you">Want to know how we can help you?</h5>
    	    <div class="primary-button book-appointment"><a href="<?php echo get_page_link(48); ?>">Book an appointment</a></div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->

</div>
		<div class="mountains">
			<img class="mountain2" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain2-2@3x.png" alt="Phone logo">
			<img class="mountain1" src="<?php echo get_template_directory_uri()?>/MTH-Assets/logos/mountain-1@3x.png" alt="Phone logo">
		</div>
<?php get_footer(); ?>
</div>
