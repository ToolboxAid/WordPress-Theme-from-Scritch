
			</section>
		</main>

		<footer>
		<div class="ball">
				<i class="fa-solid fa-circle-up"></i>
			</div>
			<!-- footer-widgets -->
			<div class="footer-row">
				<div class="footer-col menu"><?php
					$footer_menu_name = wp_get_nav_menu_name('footer1');// Get the menu name for 'footer1'
					echo '<h4>' . $footer_menu_name . '</h4>';// Echo the menu name to an H4 tag
					 ?>
								
						<?php				
						$args = array( 'theme_location' => 'footer1' ); 
						wp_nav_menu(  $args );
						?>
					
				</div>	<!-- site-nav end -->

				<div class="footer-col menu"><?php
					$footer_menu_name = wp_get_nav_menu_name('footer2');// Get the menu name for 'footer1'
					echo '<h4>' . $footer_menu_name . '</h4>';// Echo the menu name to an H4 tag
					 ?>
					
						<?php				
						$args = array( 'theme_location' => 'footer2' ); 
						wp_nav_menu(  $args );
						?>
					
				</div>	<!-- site-nav end -->

				<div class="footer-col menu"><?php
					$footer_menu_name = wp_get_nav_menu_name('footer3');// Get the menu name for 'footer1'
					echo '<h4>' . $footer_menu_name . '</h4>';// Echo the menu name to an H4 tag
					 ?>
					
						<?php				
						$args = array( 'theme_location' => 'footer3' ); 
						wp_nav_menu(  $args );
						?>
					
				</div>	<!-- site-nav end -->

				<div class="footer-col menu "><?php
					$footer_menu_name = wp_get_nav_menu_name('footer4');// Get the menu name for 'footer1'
					echo '<h4>' . $footer_menu_name . '</h4>';// Echo the menu name to an H4 tag
					 ?>
					
						<?php				
						$args = array( 'theme_location' => 'footer4' ); 
						wp_nav_menu(  $args );
						?>
					
				</div>	<!-- site-nav end -->
					
			</div><!-- /footer-widgets -->

			<div class="footer-row">
				<div class="footer-col">
					<div  class="star">
						<hr/>
						<i class="fa fa-star"></i>
						<hr/>
					</div>
				</div>
			</div>
			<div class="footer-row ">
				<div class="footer-col align-center copyright">
					<p>&copy;  
					<?php
					echo get_theme_mod('footer_copyright_established');
					$year = date('Y');
					echo " - $year ";
					bloginfo('name'); ?>. All rights reserved.</p>
				</div>
			</div>
		</footer>
		<div>

<div class="ball-loc">  
  <div class="ball static-ball"></div>
  <div class="ball wave1"></div>
  <div class="ball wave2"></div>
  <div class="ball wave3"></div>
  <div class="ball">
    <i class="fa fa-arrow-up"></i>
  </div>
</div>

	</body>
</html>		
