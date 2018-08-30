<?php get_header(); ?>
<div class="hero-header single-building">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center block-title">
					BUILDING FEATURES
				</h1>
			</div>
		</div>
	</div>
</div>
<section id="photo-building">
	<div class="slide text-center">
		<div class="container">
			<h1><?php echo the_title(); ?></h1>
			<div class="image-static">
				<?php echo the_post_thumbnail($post_id,"full"); ?>
			</div>
		</div>
	</div>
</section>
<section id="spesification">
  <div class="container">
		<div class="item-spec">
			<div class="row">
				<div class="col-md-6 col-xs-12">
					<ul>
						<li><i class="icon-list"></i><?php the_field('building_list_item_1')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_2')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_3')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_4')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_5')?></li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-12">
					<ul>
						<li><i class="icon-list"></i><?php the_field('building_list_item_6')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_7')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_8')?></li>
						<li><i class="icon-list"></i><?php the_field('building_list_item_9')?></li>
					</ul>
				</div>
		</div>
	</div>
</section>
<section id="related-post">
	<div class="container">
		<div class="inner-related">
			<div class="row">
				<div class="col-md-6 col-xs-6">
					<div class="prev">
						<?php if ( $prev = get_previous_post() ) {
							$prev_text = "<span>PREV</span>";
						} ?>
						<div class="thumb prev">
							<?php $prevThumbnail = get_the_post_thumbnail( $prevPost->ID, "medium" );
							previous_post_link( '%link', $prevThumbnail );
							?>
						</div>
						<div class="title">
							<?php echo $prev_text; ?>
							<?php $prevPost = previous_post_link('%link'); ?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-xs-6">
					<div class="next">
						<?php if ( $next = get_next_post() ) {
							$next_text = "<span>NEXT</span>";
						} ?>
						<div class="title">
							<?php echo $next_text; ?>
							<?php $nextPost = next_post_link('%link');?>
						</div>
						<div class="thumb next">
							<?php $nextThumbnail = get_the_post_thumbnail( $nextPost->ID, "medium" );
							next_post_link( '%link', $nextThumbnail ); ?>
						</div>
					</div>
				</div>
		</div>
	</div>
</section>
<section id="download-brochure">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<div class="left-side">
					<p class="inn">DOWNLOAD BROCHURE</p>
					<p class="botm">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="right-side">
					<?php $file = get_field('download_brochure');
					if( $file ): ?>
						<a href="<?php echo $file['url']; ?>" target="_blank" download class="btn-download">DOWNLOAD BROCHURE</a>
					<?php else: ?>
						<a href="#" target="_self" download class="btn-download">DOWNLOAD BROCHURE</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="footer-contact">
	<div class="container">
		<h2>THE COMMERCE CENTER</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam hendrerit consectetur orci at tincidunt.</p>
		<div class="bottom-side">
			<a href="#" target="_blank" download class="btn-contact">CONTACT US</a>
		</div>
	</div>
</section>
<?php get_footer(); ?>
