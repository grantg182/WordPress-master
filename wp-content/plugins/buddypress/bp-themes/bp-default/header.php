<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<?php if ( current_theme_supports( 'bp-default-responsive' ) ) : ?><meta name="viewport" content="width=device-width, initial-scale=1.0" /><?php endif; ?>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<?php do_action( 'bp_head' ); ?>
		<?php wp_head(); ?>
		

	
<script>

jQuery(document).ready(function () {

	//AJAX browser back button prevention 
    window.onload = function () {
        if (typeof history.pushState === "function") {
            history.pushState("jibberish", null, null);
            window.onpopstate = function () {
                history.pushState('newjibberish', null, null);
                // Handle the back (or forward) buttons here
                // Will NOT handle refresh, use onbeforeunload for this.
            };
        }
        else {
            var ignoreHashChange = true;
            window.onhashchange = function () {
                if (!ignoreHashChange) {
                    ignoreHashChange = true;
                    window.location.hash = Math.random();
                    // Detect and redirect change here
                    // Works in older FF and IE9
                    // * it does mess with your hash symbol (anchor?) pound sign
                    // delimiter on the end of the URL
                }
                else {
                    ignoreHashChange = false;   
                }
            };
        }
    }
	
	
	
	jQuery('.busSliderLoad').click(function() {
        location.reload();
    });

	jQuery('div#search-2').hide().css("display","inlineBlock").delay(500).fadeIn(6000);
	jQuery('div#header-features').hide().css("display","inlineBlock").delay(1250).fadeIn(6000);
	
		
	jQuery('div#intro').delay(1800).fadeOut(1000);
	jQuery('div#wrapper').delay(2000).fadeIn(1000).css("display","inlineBlock");
	
	//initial the menus
    jQuery("ul.menu > li").hover(
        function() {
            jQuery('ul.sub-menu').hide();
            jQuery(this).find("ul.sub-menu").stop().animate({ opacity: 'toggle' }, 900);
			jQuery("ul.sub-menu li a").css("display","");
            jQuery('div#header-features').delay(6000).fadeOut(6000);
        },
        function() {
            jQuery(this).find("ul.sub-menu").stop().animate({ opacity: 'toggle' }, 900);
			jQuery("ul.sub-menu li a").css("display","none");
            jQuery('div#header-features').delay(6000).fadeOut(6000);
        }
    );
	
    jQuery("#sidebarLoginToggler").click(
        function() {
            jQuery('#sidebarLogin').hide();
            jQuery('#sidebarLogin').stop().animate({ opacity: 'toggle' }, 900);
        },
        function() {
            jQuery('#sidebarLogin').stop().animate({ opacity: 'toggle' }, 900);
        }
    );
		
	
    jQuery("#nav li a").siblings('ul.sub-menu').css('background',' ');
    jQuery("#nav li a").parents('ul.sub-menu').css('background',' ');
    jQuery("#nav li.current-menu-item a").siblings('ul.sub-menu').css('background','rgba(68, 68, 68, 0.9)');
    jQuery("#nav li.current-menu-item a").parents('ul.sub-menu').css('background','rgba(68, 68, 68, 0.9)');

    // set the tooltip content
    jQuery('li#menu-item-75 a:hover:before').prop('tooltipText', 'w00t');
    jQuery('li#menu-item-75 a:hover:after').prop('tooltipText', 'w00t');
    jQuery("#nav ul.sub-menu li a").css('background','');
    jQuery("#nav ul.sub-menu li.current-menu-item a").css('background','#444');
	
    jQuery("ul.sub-menu").hover(function(){
        jQuery(this).parents("li.menu-item").children("a").css('background','#999').css('color','#fff').css('borderBottom','solid 1px #999');
        jQuery(this).parents("li.current-menu-item").children("a").css('background','#444').css('borderBottom','solid 1px #444');
        jQuery(this).children("li.current-menu-item").parents("ul").siblings("a").css('background','#444').css('borderBottom','solid 1px #444');
    },
    function(){
        jQuery(this).parents("li.menu-item").children("a").css('background','').css('color','').css('borderBottom','');
        jQuery(this).parents("li.current-menu-item").children("a").css('background','').css('borderBottom','');
        jQuery(this).children("li.current-menu-item").parents("ul").siblings("a").css('background','').css('borderBottom','');
    });
	
    jQuery("ul.sub-menu").children("li.menu-item").children("a").click(function(){
        jQuery(this).parents("li.menu-item").parents("ul.sub-menu").siblings("a").css('borderBottom','solid 1px #999');
        jQuery(this).parents("li.current-menu-item").parents("ul.sub-menu").siblings("a").css('borderBottom','dashed 1px #444');
    });


    jQuery("a#mainIcon").click(function(){
        jQuery('a').trigger('click');
    });
    jQuery("#miniId2").click(function(){
        jQuery('li#menu-item-40').addClass('current-menu-item');
        jQuery('li.current-menu-item#menu-item-40').children("a").trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });	
    jQuery("#miniId3").click(function(){
        jQuery('li#menu-item-74').addClass('current-menu-item');
        jQuery('li.current-menu-item#menu-item-74').children("a").trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });	
    jQuery("#miniId4").click(function(){
        jQuery('li#menu-item-73').addClass('current-menu-item');
        jQuery('li.current-menu-item#menu-item-73').children("a").trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
    jQuery("#miniId5").click(function(){
        jQuery('div#footerTab1 a').trigger('click');
    });
    jQuery("#miniId6").click(function(){
        jQuery('div#footerTab2 a').trigger('click');
    });
	
	

	
	
    jQuery("#bigSub1").click(function(){
        jQuery('li#menu-item-75 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
    jQuery("#bigSub2").click(function(){
        jQuery('li#menu-item-72 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });	
    jQuery("#bigSub3").click(function(){
        jQuery('li#menu-item-114 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-40").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
	
    jQuery("#bigSub4").click(function(){
        jQuery('li#menu-item-98 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
    jQuery("#bigSub5").click(function(){
        jQuery('li#menu-item-95 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-74").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
	
    jQuery("#bigSub6").click(function(){
        jQuery('li#menu-item-110 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
    jQuery("#bigSub7").click(function(){
        jQuery('li#menu-item-109 a').trigger('click');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").css('borderBottom','dashed 1px #fff');
        jQuery("div#navigation").children("ul#nav").children("li#menu-item-73").children("a").hover(function(){ 
            jQuery(this).css('borderBottom','');
        },
        function(){
            jQuery(this).css('borderBottom','');
        });
    });
	
	
	
	
	
	
	
    jQuery("ul.sub-menu").children("li.current-menu-item").children("a").addClass("shadCurr");
    jQuery("ul.sub-menu").children("li").children("a").addClass("shad");	
	
	
    jQuery("#menu-item-40").hover(function(){
        jQuery("div#navigation").animate({"border-bottom":"0"}, 1000);
		jQuery('div#navigation').addClass('hidden');
		jQuery('div#header-features').css('visibility','hidden');
    },
    function(){
        jQuery("div#navigation").stop().css("border-bottom",'36px solid rgba(153, 153, 153, 0.0)');
		jQuery('div#navigation').removeClass('hidden');
		jQuery('div#header-features').css('visibility','visible');
    });
    jQuery("#menu-item-74").hover(function(){
        jQuery("div#navigation").animate({"border-bottom":"0"}, 1000);
		jQuery('div#navigation').addClass('hidden');
		jQuery('div#header-features').css('visibility','hidden');
    },
    function(){
        jQuery("div#navigation").stop().css("border-bottom",'36px solid rgba(153, 153, 153, 0.0)');
		jQuery('div#navigation').removeClass('hidden');
		jQuery('div#header-features').css('visibility','visible');
    });
    jQuery("#menu-item-73").hover(function(){
        jQuery("div#navigation").animate({"border-bottom":"0"}, 1000);
		jQuery('div#navigation').addClass('hidden');
		jQuery('div#header-features').css('visibility','hidden');
    },
    function(){
        jQuery("div#navigation").stop().css("border-bottom",'36px solid rgba(153, 153, 153, 0.0)');
		jQuery('div#navigation').removeClass('hidden');
		jQuery('div#header-features').css('visibility','visible');
    });
	
	
	
});

</script>
<!--[if !IE]><!-->
	<link rel="stylesheet" type="text/css" href="http://localhost/wp-content/themes/jim/ie-upgrad.css" />
 <!--<![endif]-->
<!--[if gte IE 9]>
	<link rel="stylesheet" type="text/css" href="http://localhost/wp-content/themes/jim/ie-upgrad.css" />
<![endif]-->
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="http://localhost/wp-content/themes/jim/ie-degrad.css" />
<![endif]-->

	</head>

	<body <?php body_class(); ?> id="bp-default">
	
	<div id="intro">
	    <h1>West Caldwell Health Council</h1>
		<h2>Loading...</h2>
	</div>
		
	<div id="wrapper">
<?php if (function_exists('AWM_generate_linking_code'))AWM_generate_linking_code(); ?>

		<?php do_action( 'bp_before_header' ); ?>
		
		<div id="header">
		
		    <a href="http://localhost" id="mainIcon"><h1>West Caldwell Health Council</h1><h3>of</h3><h2>North Carolina</h2></a>
			
		    <ul id="headerAddressList">
			    <li>
					<h1>Happy Valley Medical Center</h1>
					<h2>PO Box 319</h2>
					<h2>1345 HWY 268</h2>
					<h2>Patterson, NC 28661</h2>
					<h2><span>828-754-6850</span></h2>
					<h2>828-757-3214(fax)</h2>
				</li>
				<li>
					<h1>Collettsville Medical Center</h1>
					<h2>PO Drawer 9</h2>
					<h2>4329 Collettsville RD</h2>
					<h2>Collettsville, NC 28611</h2>
					<h2><span>828-754-2409</span></h2>
					<h2>828-754-2418(fax)<h2>
				</li>
			</ul>
		    <div id="headerSearchBar"><?php dynamic_sidebar( 'sidebar-1' ); ?><?php do_action( 'bp_inside_after_sidebar' ); ?></div>

	
        <div id="header-features">
		    <h2>Drop-Down Menu</h2>
	    </div>
        <div id="header-features-toggle-hide">
		    <a id="header-hide">Hide</a>
	    </div>
        <div id="header-features-toggle-show">
		    <a id="header-show">Show</a>
	    </div>



			<div id="search-bar" role="search">
				<div class="padder">
					<h1 id="logo" role="banner"><a href="<?php echo home_url(); ?>" title="<?php _ex( 'Home', 'Home page banner link title', 'buddypress' ); ?>"><?php bp_site_name(); ?></a></h1>

						<form action="<?php echo bp_search_form_action(); ?>" method="post" id="search-form">
							<label for="search-terms" class="accessibly-hidden"><?php _e( 'Search for:', 'buddypress' ); ?></label>
							<input type="text" id="search-terms" name="search-terms" value="<?php echo isset( $_REQUEST['s'] ) ? esc_attr( $_REQUEST['s'] ) : ''; ?>" />

							<?php echo bp_search_form_type_select(); ?>

							<input type="submit" name="search-submit" id="search-submit" value="<?php _e( 'Search', 'buddypress' ); ?>" />

							<?php wp_nonce_field( 'bp_search_form' ); ?>

						</form><!-- #search-form -->

				<?php do_action( 'bp_search_login_bar' ); ?>

				</div><!-- .padder -->
			</div><!-- #search-bar -->

			<div id="navigation" role="navigation">
				<?php wp_nav_menu( array( 'container' => false, 'menu_id' => 'nav', 'theme_location' => 'primary', 'fallback_cb' => 'bp_dtheme_main_nav' ) ); ?>
			</div>

			<?php do_action( 'bp_header' ); ?>
		</div><!-- #header -->

		<?php do_action( 'bp_after_header'     ); ?>
		<?php do_action( 'bp_before_container' ); ?>

		<div id="container">
