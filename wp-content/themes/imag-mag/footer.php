  </div><!--/#blocks-wrapper--></div> <!--/#Wrapper --><?php global $data; if($data['shw_footer_widg'] == 'yes'){ ?><!--#footer-blocks--><div id="footer-blocks" class="container clearfix"> 	<div class="fb-container clearfix">		<div class="footer-block1"> 				<?php 				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 1')):  				endif; 				?> 		</div>				 		<div class="footer-block2">  				<?php 				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 2')):  				endif; 				?>   		</div> 		<div class="footer-block3"> 				<?php 				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 3')):  				endif; 				?>		</div>		<div class="footer-block4"> 				<?php 				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Block 4')):  				endif; 				?>		</div>     </div> 			</div><!--/#footer-blocks--><?php } ?>  <!-- #footer--> <div id="footer" class="container clearfix">  <div class="foot-wrap container">  	  <p class="copyright"><?php echo bloginfo( 'name' ); ?>&nbsp; &copy;&nbsp;<?php echo date("Y");?></p>	  <p class="credit">Designed by <a title="ThemePacific" href="http://themepacific.com">ThemePacific</a></p>  </div></div><!--/#Footer --> <?php if($data['google_analytics']) { 		/*--  Google Analytics --*/  		echo $data['google_analytics'];  	} ?>   <?php wp_footer(); ?> </body> </html>