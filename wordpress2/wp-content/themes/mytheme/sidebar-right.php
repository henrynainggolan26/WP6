<div class="col-sm-3 blog-sidebar" style="background:#f7f4f4">
	<?php if ( 1 == of_get_option('checkbox_sidebar') ) {
		if ( is_active_sidebar( 'sidebar-right' ) ) { dynamic_sidebar( 'sidebar-right' ); }
	 } else { } ?>
</div>