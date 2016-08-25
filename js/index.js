// JavaScript Document

//Highlight Selected Nav Item
$(".navbar__anchor").click( function() {
	"use strict";
    if($(".navbar--selected").length > 0) {
        $(".navbar--selected").removeClass("navbar--selected");
    }
    $(this).addClass("navbar--selected");
});


//Tooltip
$(function () {
	"use strict";
  	$('[data-toggle="tooltip"]').tooltip();
});