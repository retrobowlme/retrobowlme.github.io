jQuery((function(e){if("undefined"!=typeof ezTOC){function t(){if(0!==e(".ez-toc-widget-container.ez-toc-affix").length){var t=30;void 0!==ezTOC.scroll_offset&&(t=parseInt(ezTOC.scroll_offset)),e(ezTOC.affixSelector).stick_in_parent({inner_scrolling:!1,offset_top:t})}if(e.fn.shrinkTOCWidth=function(){e(this).css({width:"auto",display:"table"}),/MSIE 7\./.test(navigator.userAgent)&&e(this).css("width","")},void 0!==ezTOC.visibility_hide_by_default){var o=e(".ez-toc-toggle:not(.ez-toc-loaded),.ez-toc-widget-sticky-toggle:not(.ez-toc-loaded)"),i=ezTOC.visibility_hide_by_default;e.each(o,(function(t,o){var n=e(this);e(n).addClass("ez-toc-loaded");var c=e(n).parents("#ez-toc-container,#ez-toc-widget-container,#ez-toc-widget-sticky-container").find("ul.ez-toc-list,ul.ez-toc-widget-sticky-list");e(c).hasClass("eztoc-toggle-hide-by-default")&&(i=1),"undefined"!=typeof Cookies&&(Cookies?(1==Cookies.get("ezTOC_hidetoc-"+t)?e(n).data("visible",!1):e(n).data("visible",!0),Cookies.remove("ezTOC_hidetoc-"+t)):(e(n).data("visible",!0),Cookies.remove("ezTOC_hidetoc-"+t))),i&&e(n).data("visible",!1),e(n).data("visible")||c.hide(),e(n).on("click",(function(o){o.preventDefault();const n=document.querySelector("#ez-toc-container");if(n)n.classList.toggle("toc_close");else{document.querySelector(".ez-toc-widget-container,.ez-toc-widget-sticky-container").classList.toggle("toc_close")}e(this).data("visible")?(e(this).data("visible",!1),"undefined"!=typeof Cookies&&Cookies&&(i?Cookies.set("ezTOC_hidetoc-"+t,null,{path:"/"}):Cookies.set("ezTOC_hidetoc-"+t,"1",{expires:30,path:"/"})),c.hide("fast")):(e(this).data("visible",!0),"undefined"!=typeof Cookies&&Cookies&&(i?Cookies.set("ezTOC_hidetoc-"+t,"1",{expires:30,path:"/"}):Cookies.set("ezTOC_hidetoc-"+t,null,{path:"/"})),c.show("fast"))}))}))}var n=e("span.ez-toc-section").toArray(),c=function(t){return t.reduce((function(t,o){return t[o.id]=function(t){return e('.ez-toc-widget-container .ez-toc-list a[href="#'+e(t).attr("id")+'"]')}(o),t}),{})}(n),s=e.map(c,(function(e,t){return e})),a=function(){var t=5;void 0!==ezTOC.smooth_scroll&&1===parseInt(ezTOC.smooth_scroll)&&(t=void 0!==ezTOC.scroll_offset?parseInt(ezTOC.scroll_offset):30);var o=e("#wpadminbar");o.length&&(t+=o.height());return t}();function l(){var t=function(t,o){var i=e(window).scrollTop()+t+1,n=o[0],c=i-e(n).offset().top;return o.forEach((function(t){var o=i-e(t).offset().top;o>0&&o<c&&(c=o,n=t)})),n}(a,n);if(t){var o=c[t.id];!function(e,t){t.forEach((function(t){e!==t&&t.parent().hasClass("active")&&t.parent().removeClass("active")}))}(o,s),function(t){var o=t.parent();o.hasClass("active")||o.addClass("active");!function(t){var o=function(t){var o=e(t),i=o.html();o.parent().append('<li id="ez-toc-height-test" class="active">'+i+"</li>");var n=e("#ez-toc-height-test"),c=n.height();return n.remove(),c-(o.children("ul").first().height()||0)}(t);!function(t){e(".ez-toc-widget-container ul.ez-toc-list li.active").css("height",t+"px")}(o)}(o)}(o)}}n.length>0&&e(".ez-toc-widget-container").length&&e(window).on("load resize scroll",l)}e("#ez-toc-container").length&&(e("#ez-toc-container .ez-toc-toggle label span").html()||e("#ez-toc-container .ez-toc-toggle label").html(ezTOC.fallbackIcon)),ezTOC.init=function(){t()},t(),void 0!==ezTOC.ajax_toggle&&1===parseInt(ezTOC.ajax_toggle)&&e(document).ajaxComplete((function(){t()}))}e(document).on("click","#ez-toc-open-sub-hd",(function(t){e(this).attr("id","ez-toc-open-sub-hd-active"),t.preventDefault()})),e(document).on("click","#ez-toc-open-sub-hd-active",(function(t){e(this).attr("id","ez-toc-open-sub-hd"),t.preventDefault()})),e("#ez-toc-more-links-enabler").click((function(){e(".ez-toc-more-link").show(),e("#ez-toc-more-links-enabler").hide(),e("#ez-toc-more-links-disabler").attr("style","display:inline-block")})),e("#ez-toc-more-links-disabler").click((function(){e(".ez-toc-more-link").hide(),e("#ez-toc-more-links-enabler").show(),e("#ez-toc-more-links-disabler").hide()}))}));
;