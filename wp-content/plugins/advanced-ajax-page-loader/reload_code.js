function AAPL_reload_code() {
//This file is generated from the admin panel - dont edit here! 
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
}

function AAPL_click_code(thiss) {
//This file is generated from the admin panel - dont edit here! 
// highlight the current menu item
jQuery('ul.menu li').each(function() {
	jQuery(this).removeClass('current-menu-item');
	jQuery(this).removeClass('current_page_item');
	jQuery(this).removeClass('current_page_ancestor');
	jQuery(this).removeClass('current-menu-ancestor');
});

jQuery(thiss).parents('li').addClass('current-menu-item');












jQuery("#nav li a").siblings('ul.sub-menu').css('background','');

jQuery("#nav li a").parents('ul.sub-menu').css('background','');

jQuery("#nav li.current-menu-item a").siblings('ul.sub-menu').css('background','rgba(68, 68, 68, 0.9)');

jQuery("#nav li.current-menu-item a").parents('ul.sub-menu').css('background','rgba(68, 68, 68, 0.9)');





jQuery("li.current-menu-item").parents("ul.sub-menu").siblings("a").css('background','#444');

jQuery("li").parents("ul.sub-menu").siblings("a").css('background','').css('borderBottom','');

jQuery("#nav ul.sub-menu li a").css('background','').css('borderBottom','');

jQuery("#nav ul.sub-menu li.current-menu-item a").css('background','#444');




jQuery("ul.sub-menu").children("li").children("a").removeClass("shadCurr");

jQuery("ul.sub-menu").children("li.current-menu-item").children("a").removeClass("shad").addClass("shadCurr");

jQuery("ul.sub-menu").children("li").children("a").addClass("shad");
}

function AAPL_data_code(dataa) {
//This file is generated from the admin panel - dont edit here! 

}