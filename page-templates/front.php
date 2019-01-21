<?php
/*
Template Name: Front
*/
get_header(); ?>

<header class="front-hero" role="banner">
	<div class="marketing">
	<div class="wwfp_col1">
	<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo('description'); ?></h4>
			<div class="responsive-embed">
 				 <iframe width="420" height="315" src="https://www.youtube.com/embed/JCqERKbKbNs" frameborder="0" allowfullscreen></iframe>
			</div>
	</div>
		</div>
	<div class="wwfp_col2">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/wwfp-logo-web-01.svg" alt="semantic">
	</div>
	</div>
</header>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile; ?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>


<section class="benefits">
	<div class="semantic">
		<h3>Helpful</h3>
		<p>Our team is helpful. Whatever you need, just call and we will do our best to handle your needs or suggest someone who can.</p>
	</div>

	<div class="responsive">
		<h3>Fast</h3>
		<p>Sometimes you have an emergency, and just need someone fast. We can respond to most calls within a day. Give us a call.</p>

	</div>

	<div class="customizable">
		<h3>Experienced</h3>
		<p>Craig is one of the most experienced fire techs in the Salt Lake City and Wendover areas. He has worked with customers large and small. His experience is your solution.</p>

	</div>

	<div class="professional">
		<h3>Compliant</h3>
		<p>Remaining compliant with government regulation is difficult. We can take a look at your situation and determine how to bring your equipment back into regulation.</p>
	</div>

	<div class="why-foundation">
		<a href="/contact-us">See what we can do for you today →</a>
	</div>

</section>

<?php get_footer();
