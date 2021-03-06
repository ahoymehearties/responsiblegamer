<?php get_header(); ?>

<div id="content" class="post-content">

	<?php get_template_part('/stacks/stack', 'title'); ?>

	<?php if ( have_posts() ) : the_post(); ?>

		<?php 
			$stacks = get_post_meta($post->ID, '_stack_builder_stacks', true);
			if( is_array( $stacks ) ) {
				foreach ($stacks as $stack) {
					$stack['id'] = 'stack-'.$post->ID.'-'.$stack['stack_id'];
					if( $stack['template_id'] == 'page_content' ) {
						$stack['template_id'] = 'single_portfolio';
						gen_stack( $stack );
					} else {
						gen_stack( $stack );
					}
				}
			} else { // In case no stack meta
				$stack = array( 'template_id' => 'single_portfolio' );
				$stack['id'] = 'stack-'.$post->ID;
				gen_stack( $stack );
			}
		?>

	<?php endif; ?>
	<div class="vspace-40"></div>
</div>

<?php get_footer(); ?>