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
					<a href="http://twitter.com/stonedpeaches/" class="soc-icon tw" target="_blank"></a>
					<a href="http://facebook.com/Stonedpeaches/" class="soc-icon fb" target="_blank"></a>
					<a href="#" class="soc-icon ln" target="_blank"></a>
					<!-- <a href="#" class="soc-icon db" target="_blank"></a> -->
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>