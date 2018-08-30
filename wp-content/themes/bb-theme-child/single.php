<?php get_header(); ?>
<div class="hero-header-post">
	<div class="container">
		<h1 class="text-center"><?php single_post_title() ?></h1>
	</div>
</div>
<div class="container">

		<?php FLTheme::sidebar('left'); ?>

		<div class="fl-content <?php FLTheme::content_class(); ?>">
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php get_template_part('content', 'single'); ?>
			<?php endwhile; endif; ?>
		</div>

		<?php FLTheme::sidebar('right'); ?>

</div>

<?php get_footer(); ?>
