function zerif_lite_scrolled(){if(jQuery(window).width()>=751){var e=jQuery(window).scrollTop(),i=jQuery("#main-nav").outerHeight(),t="no";jQuery("section, header").each(function(){var n="#"+jQuery(this).attr("id"),r=jQuery(this).offset().top,a=jQuery(this).outerHeight(),o=r-i,s=r+a-i;return e>=o&&s>=e?(t="yes",jQuery("#site-navigation .current").removeClass("current"),jQuery('#site-navigation a[href$="'+n+'"]').parent("li").addClass("current"),!1):void("no"==t&&jQuery("#site-navigation .current").removeClass("current"))})}}function setminHeightHeader(){jQuery("#main-nav").css("min-height","75px"),jQuery(".header").css("min-height","75px");var e=parseInt(jQuery("#main-nav").height());jQuery("#main-nav").css("min-height",e),jQuery(".header").css("min-height",e)}function fixFooterBottom(){var e=jQuery("header.header"),i=jQuery("footer#footer"),t=jQuery(".site-content > .container");t.css("min-height","1px");var n=e.outerHeight(),r=i.outerHeight(),a=t.outerHeight(),o=jQuery(window).height(),s=n+r+a;o>s?t.css("min-height",o-n-r):t.css("min-height","1px")}function mobile_bg_fix(){if(isMobile.any()&&jQuery("body.custom-background")){var e=type_view();(initViewMode!=e||1==onlyInit)&&(jQuery(".mobile-bg-fix-img").css({width:window.innerWidth,height:window.innerHeight+100}),initViewMode=e,1==onlyInit&&(onlyInit=!1,bodyClass=jQuery("body.custom-background"),imgURL=bodyClass.css("background-image"),imgSize=bodyClass.css("background-size"),imgPosition=bodyClass.css("background-position"),imgRepeat=bodyClass.css("background-repeat"),jQuery("#mobilebgfix").addClass("mobile-bg-fix-wrap").find(".mobile-bg-fix-img").css({"background-size":imgSize,"background-position":imgPosition,"background-repeat":imgRepeat,"background-image":imgURL}),imgURL||jQuery(".mobile-bg-fix-wrap .mobile-bg-fix-img-wrap").css("display","none")))}}function type_view(){var e=window.innerHeight,i=window.innerWidth;return e>=i?"portrait":"landscape"}var callback_mobile_dropdown=function(){if(jQuery(".wr-megamenu-container").length<=0&&jQuery(".mega-menu-wrap").length<=0){var e=jQuery("#site-navigation li");e.each(function(){jQuery(this).find("ul").length>0&&!jQuery(this).hasClass("has_children")&&(jQuery(this).addClass("has_children"),jQuery(this).find("a").first().after('<p class="dropdownmenu"></p>'))}),jQuery(".dropdownmenu").click(function(){jQuery(this).parent("li").hasClass("this-open")?jQuery(this).parent("li").removeClass("this-open"):jQuery(this).parent("li").addClass("this-open")}),e.find("a").click(function(){jQuery(".navbar-toggle").addClass("collapsed"),jQuery("#site-navigation .collapse").removeClass("in")})}};if(jQuery(document).ready(callback_mobile_dropdown),jQuery(document).ready(function(){var e=jQuery(".header .container").height();jQuery(".header").css("min-height",e)}),navigator.userAgent.match(/IEMobile\/10\.0/)){var msViewportStyle=document.createElement("style");msViewportStyle.appendChild(document.createTextNode("@-ms-viewport{width:auto!important}")),document.querySelector("head").appendChild(msViewportStyle)}jQuery(document).ready(function(){if("undefined"!=typeof jQuery("#main-nav")&&"undefined"!=typeof jQuery("#main-nav").offset())var e=jQuery("#main-nav").offset().top-parseFloat(jQuery("#main-nav").css("margin-top").replace(/auto/,0));jQuery(window).scroll(function(i){var t=jQuery(this).scrollTop();t>=e?jQuery("#main-nav").addClass("fixed"):jQuery("#main-nav").removeClass("fixed")})}),jQuery(document).ready(function(){jQuery('#site-navigation a[href*="#"]:not([href="#"]), header.header a[href*="#"]:not([href="#"])').bind("click",function(){var e,i=this.hash,t=i.substring(1),n=this;if(jQuery("section [id*="+t+"]").length>0&&jQuery(window).width()>=751?(jQuery("#site-navigation .current").removeClass("current"),jQuery(n).parent("li").addClass("current")):jQuery("#site-navigation .current").removeClass("current"),e=jQuery(window).width()>=751?jQuery("#main-nav").height():0,location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var r=jQuery(this.hash);if(r=r.length?r:jQuery("[name="+this.hash.slice(1)+"]"),r.length)return jQuery("html,body").animate({scrollTop:r.offset().top-e+10},1200),!1}})}),jQuery(document).ready(function(){var e;if(jQuery("#site-navigation .current").removeClass("current"),jQuery('#site-navigation a[href$="'+window.location.hash+'"]').parent("li").addClass("current"),e=jQuery(window).width()>=751?jQuery("#main-nav").height():0,location.pathname.replace(/^\//,"")==window.location.pathname.replace(/^\//,"")&&location.hostname==window.location.hostname){var i=jQuery(window.location.hash);if(i.length)return jQuery("html,body").animate({scrollTop:i.offset().top-e+10},1200),!1}}),jQuery(window).on("scroll",zerif_lite_scrolled),jQuery(".navbar-toggle").on("click",function(){jQuery(this).toggleClass("active")}),jQuery(window).load(function(){setminHeightHeader()}),jQuery(window).resize(function(){setminHeightHeader()}),jQuery(window).load(fixFooterBottom),jQuery(window).resize(fixFooterBottom);var callback_menu_align=function(){var e=jQuery(".header"),i=jQuery("#site-navigation"),t=jQuery(".responsive-logo"),n=jQuery(".container"),r="menu-align-center";e.hasClass(r)&&e.removeClass(r);var a=t.outerWidth(),o=i.outerWidth(),s=n.width();o+a>s?e.addClass(r):e.hasClass(r)&&e.removeClass(r)};jQuery(window).load(callback_menu_align),jQuery(window).resize(callback_menu_align);var isMobile={Android:function(){return navigator.userAgent.match(/Android/i)},BlackBerry:function(){return navigator.userAgent.match(/BlackBerry/i)},iOS:function(){return navigator.userAgent.match(/iPhone|iPad|iPod/i)},Opera:function(){return navigator.userAgent.match(/Opera Mini/i)},Windows:function(){return navigator.userAgent.match(/IEMobile/i)},any:function(){return isMobile.Android()||isMobile.BlackBerry()||isMobile.iOS()||isMobile.Opera()||isMobile.Windows()}};isMobile.any()&&(jQuery(".team-member").on("click",function(){jQuery(".team-member-open").removeClass("team-member-open"),jQuery(this).addClass("team-member-open"),event.stopPropagation()}),jQuery("html").click(function(){jQuery(".team-member-open").removeClass("team-member-open")}),jQuery(document).ready(function(){jQuery(".cbp-rfgrid li").prepend('<p class="cbp-rfgrid-tr"></p>')}),jQuery(".cbp-rfgrid li").on("click",function(){jQuery(this).hasClass("cbp-rfgrid-open")||(jQuery(".cbp-rfgrid-tr").css("display","block"),jQuery(".cbp-rfgrid-open").removeClass("cbp-rfgrid-open"),jQuery(this).addClass("cbp-rfgrid-open"),jQuery(this).find(".cbp-rfgrid-tr").css("display","none"),event.stopPropagation())}),jQuery("html").click(function(){jQuery(".cbp-rfgrid-tr").css("display","block"),jQuery(".cbp-rfgrid-open").removeClass("cbp-rfgrid-open")})),jQuery(document).ready(function(){void 0==document.createElement("input").placeholder&&(jQuery(".contact-form input, .contact-form textarea").focus(function(){""!=jQuery(this).attr("placeholder")&&jQuery(this).val()==jQuery(this).attr("placeholder")&&jQuery(this).val("").removeClass("zerif-hasPlaceholder")}).blur(function(){""==jQuery(this).attr("placeholder")||""!=jQuery(this).val()&&jQuery(this).val()!=jQuery(this).attr("placeholder")||jQuery(this).val(jQuery(this).attr("placeholder")).addClass("zerif-hasPlaceholder")}),jQuery(".contact-form input").blur(),jQuery(".contact-form textarea").blur(),jQuery("form.contact-form").submit(function(){jQuery(this).find(".zerif-hasPlaceholder").each(function(){jQuery(this).val("")})}))});var initHeight=0,initWidth=0,initViewMode,onlyInit=!0;jQuery(document).ready(function(){initViewMode=type_view(),mobile_bg_fix()}),jQuery(window).resize(mobile_bg_fix),jQuery(document).ready(function(){jQuery("#site-navigation").zerifsubmenuorientation()}),function(e,i){function t(i,t){this.element=i,this.options=e.extend({},n,t),this.defaults=n,this.init()}var n={allItems:!1};t.prototype.init=function(){var t,n=this,r=e(this.element),a=e(this.element).children();n.options.allItems!==!0&&e(i).resize(function(){clearTimeout(t),t=setTimeout(function(){n.make_magic(r,a)},11)}),n.make_magic(r,a),n.options.allItems!==!0&&setTimeout(function(){e(i).resize()},500)},t.prototype.make_magic=function(t,n){var r,a=this,o=e(t);e(n);r="UL"==o[0].tagName?o[0]:o.find("ul")[0];var s=i.innerWidth;if("undefined"!=typeof r){var u="#"+r.id;e(u).children("li").each(function(){if(""!=this.id){var i=a.max_deep("#"+this.id),t=e("#"+this.id).offset().left,n=e("#"+this.id).find("ul").width(),o=i*n;if(o>0&&t+o>s){if(a.options.allItems===!0)return e("#"+r.id).addClass("menu-item-open-left-all"),!1;e("#"+this.id).addClass("menu-item-open-left")}else e("#"+this.id).hasClass("menu-item-open-left")&&e("#"+this.id).removeClass("menu-item-open-left")}})}},t.prototype.max_deep=function(i){var t=-1,n=-1;return e(i+" li:not(:has(ul))").each(function(){n=e(this).parents("ul").length,n>t&&(t=n)}),t-1},e.fn.zerifsubmenuorientation=function(i){return this.each(function(){var n="";e.data(this,n)||e.data(this,n,new t(this,i))})}}(jQuery,window);