<div class="post__meta">

	<div class="meta--item meta--date">
		<?php echo get_the_date(); ?>
	</div>

	<?php if( is_single() ): ?>
		<div class="meta--item meta--author">

			<i class="icon-pencil"></i>
			<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>">
				<?php the_author_meta( 'display_name' ); ?>
			</a>

		</div>
	<?php endif; ?>

	<?php if( has_category() ): ?>
		<div class="meta--item meta--categories">

			<i class="icon-grid"></i>
			<?php the_category(', '); ?>

		</div>
	<?php endif; ?>

	<div class="meta--item meta--comments">

		<i class="icon-comments"></i>
		<?php comments_popup_link( __( '0', 'sleek' ), __( '1', 'sleek' ), __( '%', 'sleek' )); ?>

	</div>

</div>