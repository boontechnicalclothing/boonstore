jQuery(document).ready(function(){
 
	jQuery('#gadwp-content').hide();
 
	jQuery('#gadwp-title').click(function(){
		jQuery('#gadwp-content').slideToggle();
		jQuery('#gadwp-title #gadwp-arrow').html( jQuery('#gadwp-title #gadwp-arrow').html() == '▲' ? '▼' : '▲');
    });
	
	jQuery("#gadwp-title a").click(function(event) {
		 event.preventDefault(); 
	});
});

jQuery(window).resize(function(){
	if(typeof ga_dash_drawpagesessions == "function" && typeof gadash_pagesessions!=='undefined' && !jQuery.isNumeric(gadash_pagesessions)){
		ga_dash_drawpagesessions(gadash_pagesessions);
	}
	if(typeof ga_dash_drawpagesearches == "function" && typeof gadash_pagesearches!=='undefined' && !jQuery.isNumeric(gadash_pagesearches)){
		ga_dash_drawpagesearches(gadash_pagesearches);
	}
	if(typeof ga_dash_drawfwidgetsessions == "function" && typeof gadash_widgetsessions!=='undefined' && !jQuery.isNumeric(gadash_widgetsessions)){
		ga_dash_drawfwidgetsessions(gadash_widgetsessions);
	}
});