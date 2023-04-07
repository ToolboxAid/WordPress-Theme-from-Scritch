		
	<?php
		if ( is_search() OR is_archive() or is_home() ) { ?>
			<!-- post-thumbnail -->
			<?php if ( has_post_thumbnail() ) { ?>
			<article class="post image-container has-thumbnail">
				<div class="post-thumbnail">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('small-thumbnail'); ?></a>
				</div><!-- /post-thumbnail --> 
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php } else { ?>
			<article class="post image-container">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php } ?>
		<?php } else { ?>
			<!-- post-banner is_single() -->
			<?php if ( has_post_thumbnail() ) { ?>
			<article class="post image-banner has-thumbnail">
				<?php 
					$image_id = get_post_thumbnail_id();
					$image_url = wp_get_attachment_image_src($image_id, 'banner-image')[0];
				?>
				<div class="post-banner" style="background-image: url('<?php echo $image_url; ?>')">		
					<?php debug_location("______ - B");?>
				</div><!-- /post-banner -->
				<h2><?php the_title(); ?></h2>
			<?php } else { ?>
			<article class="post image-banner">
				<h2><?php the_title(); ?></h2>
			<?php } ?>
		<?php } ?>


		<p class="post-info">Posted <?php the_time('F jS, Y @ g:i A'); ?> by <?php
			if (get_the_author_meta('display_name')) {
				$display_name = get_the_author_meta('display_name');
				echo $display_name; 
			} else {
				$current_user = wp_get_current_user();
				$user_nickname = get_user_meta($current_user->ID, 'nickname', true);
				echo $user_nickname;
			}		

			?> | Categories: <?php
			$categories = get_the_category();
			$separator = ", ";
			$output = '';
			
			if ($categories) {				
				foreach ($categories as $category) {				
					$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
				}				
				echo trim($output, $separator);
			}
			?>		
		</p><?php 
		
		if ( is_search() OR is_archive() ) { 
debug_location("______ - __1");?>
			<p>
				<?php echo get_the_excerpt(); 
				if (has_excerpt()){
					echo "[....]";
				}
				?>

				<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
			</p><?php 
		} else {
			if (is_home()) { // The blog page (index.php)
debug_location("______ - __2");?>
					<p>
						<?php echo get_the_excerpt(); 
										if (has_excerpt()){
											echo "[....]";
										}
										?>
						<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
					</p><?php 
			} else {
debug_location("______ - __3");
				the_content();
			}
		} ?>

	</article>
