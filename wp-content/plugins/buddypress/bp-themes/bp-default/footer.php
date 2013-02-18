

		</div> <!-- #container -->

		<?php do_action( 'bp_after_container' ); ?>
		<?php do_action( 'bp_before_footer'   ); ?>

		<div id="footer">
			<?php if ( is_active_sidebar( 'first-footer-widget-area' ) || is_active_sidebar( 'second-footer-widget-area' ) || is_active_sidebar( 'third-footer-widget-area' ) || is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
				<div id="footer-widgets">
					<?php get_sidebar( 'footer' ); ?>
				</div>
			<?php endif; ?>

			<div id="site-generator" role="contentinfo" style="display:none;">
				<?php do_action( 'bp_dtheme_credits' ); ?>
				<p><?php printf( __( 'Proudly powered by <a href="%1$s">WordPress</a> and <a href="%2$s">BuddyPress</a>.', 'buddypress' ), 'http://wordpress.org', 'http://buddypress.org' ); ?></p>
			</div>

			<?php do_action( 'bp_footer' ); ?>

		</div><!-- #footer -->
		<?php do_action( 'bp_after_footer' ); ?>

		<?php wp_footer(); ?>



		<div id="footerTabsOuter">
		<div id="footerTab1" class="footerTab">
		<a href="http://localhost/new-patient-form">
		<h1>Are you a new patient?</h1>
		<h2>Save time, download our form.</h2>
		<h3>Click here to fill one out now.</h3></div></a>
		<div id="footerTab2" class="footerTab">
		<a class="busSliderLoad" href="http://localhost/mobile-medical-bus">	
		<h1>We Are Mobile!</h1>
		<h2>A new mobile medical unit.</h2>
		<h3>Click here to learn more.</h3></div></a>
		</div>
		
		<div id="miniFooter">
			<div id="miniMap">
			    <ul class="menu">
			    	<li id="miniId1"><a href="http://localhost">Home</a></li>
					<li id="miniId2"><a href="/information">Information</a></li>
					<li id="miniId3"><a href="/our-services">Our Services</a></li>
					<li id="miniId4"><a href="/programs-we-offer">Programs We Offer</a></li>
					<li id="miniId5"><a href="/new-patient-form">New Patient Form</a></li>
					<li id="miniId6"><a class="busSliderLoad" href="/mobile-medical-bus">Mobile Medical Bus</a></li>
			    </ul>
			</div>
			<p id="miniCr">West Caldwell Health Council © 2013. All rights reserved.&nbsp;&nbsp;
			    <a onclick="window.open('http://localhost/login.php')">Site Admin</a>
			</p
		</div>		
	</div>

	</body>

</html>