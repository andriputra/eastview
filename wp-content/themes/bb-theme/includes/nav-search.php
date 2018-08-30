<div class="fl-page-nav-search">
	<a href="javascript:void(0);" class="fa fa-search"></a>
	<form method="get" role="search" action="<?php echo home_url(); ?>" title="<?php echo esc_attr_x( 'Type and press Enter to search.', 'Search form mouse hover title.', 'fl-automator' ); ?>">
		<input type="text" class="fl-search-input" name="s" class="form-control" value="<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>" onfocus="if (this.value == '<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>') { this.value = ''; }" onblur="if (this.value == '') this.value='<?php echo esc_attr_x( 'Search', 'Search form field placeholder text.', 'fl-automator' ); ?>';">
	</form>
	<a href="http://localhost/real-miami/contact-us/" class="menu-contact">Contact Us</a>
</div>