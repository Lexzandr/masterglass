<?php if ( is_active_sidebar( 'left_sidebar' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'left_sidebar' ); ?>
	</aside>
<?php endif; ?>
