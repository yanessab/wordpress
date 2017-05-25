<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>

				<div class="social-btns">
				    <a href="https://github.com/yanessab" class="soc-icon gh"></a>
				    <a href="https://www.instagram.com/thejoyfulfig/" class="soc-icon in"></a>
				    <a href="https://www.linkedin.com/in/yanessaa/" class="soc-icon ln"></a>
				</div>

				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
