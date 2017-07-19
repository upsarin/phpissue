var maps = [];
$(document).ready(function() {
	
	// $("a[href='/services/detail/rent/'] img")
	
	
	// $("a[href='/services/detail/rent/']")
	// .mouseover(function() {
		// console.log("mouseover");
	// })
	// .mouseout(function() {
		// console.log("mouseout");
	// })
	
	
	console.log("hello");
	
	$(".form-horizontal").submit(function(){
		
		
		var data = $(".form-horizontal").serialize();
		data = data + "&city=" + $("#city_form").val() + "&course=" + $("#course_form").val();
		$.ajax({
			  url: "/callback/ajax_mail.php",
			  type: "POST",
			  data: data, 
			  success: function(html){
				$(".form-horizontal .row").html("<div>"+ html +"</div>");
			  }
		});
		return false;
	});
	
	
	$(".cityChoise").click(function(){
		console.log(this);
		data = "city=" + this.id + "&manualy=Y";
		$.ajax({
			  url: "/callback/city_session.php",
			  type: "POST",
			  data: data, 
			  success: function(html){
				if(html == "ok"){
					location.reload();
				}
			  }
		});
		return false;
	});
	
//geolocation
	
	var route,geocode;
	ymaps.ready(init);
	
	function degreesToRadians (degrees) {
			var radians = (degrees * Math.PI)/180;
			return radians;
	}
	
	function computeDistance (startCoords, destCoords) {
		var startLatRads = degreesToRadians(startCoords.latitude);
		var startLongRads = degreesToRadians(startCoords.longitude);
		var destLatRads = degreesToRadians(destCoords.latitude);
		var destLongRads = degreesToRadians(destCoords.longitude);
	 
		var Radius = 6371; //радиус Земли в километрах
		var distance = Math.acos(Math.sin(startLatRads) * Math.sin(destLatRads) + Math.cos(startLatRads) * Math.cos(destLatRads) * Math.cos(startLongRads - destLongRads)) * Radius;
	 
		return distance;
	}
	
	function init() {
		var geolocation = ymaps.geolocation;
		var lat = geolocation.latitude;
		var lon = geolocation.longitude;
		var current = {  
			latitude: lat,
			longitude: lon
		};
		var ourCoordsPeter = {  
			latitude: 59.934985,
			longitude: 30.282161
		};
		var ourCoordsMoscow = {  
			latitude: 55.720843,
			longitude: 37.577083
		};
		var ourCoordsNsk = {
			latitude: 55.014367,
			longitude: 82.916654
		};
		var ourCoordsAlmati = {
			latitude: 43.202242,
			longitude: 76.900278
		};
	
		var peter = computeDistance(current, ourCoordsPeter);
		var moscow = computeDistance(current, ourCoordsMoscow);
		var nsk = computeDistance(current, ourCoordsNsk);
		var almati = computeDistance(current, ourCoordsAlmati);
		
	 
		var min = Math.min(peter, moscow, nsk, almati);
		var cityId;
		if(peter == min){
			cityId = "peter";
		} else if(moscow == min){
			cityId = "moscow";
		} else if(nsk == min){
			cityId = "nsk";
		} else if(almati == min){
			cityId = "almati";
		}
		var data = "city=" + cityId + "&manualy=N";
		$.ajax({
			  url: "/callback/city_session.php",
			  type: "POST",
			  data: data, 
			  success: function(html){
				if(html == "ok"){
					location.reload();
				}
			  }
		});
		
		console.log(min, peter, moscow, nsk, almati);
	}
	
//end geolocation
	
	

	
    var i = 0;
    $(".map").each(function(){
        $(this).prop('id', 'map' + (i + 1));
        initMap(i++);
    });
    checkSlick();
        $(".course-feature-image").css("height", $(".course-feature-image").css("width"))
    $(window).resize(function () {
        checkSlick();
        $(".course-feature-image").css("height", $(".course-feature-image").css("width"))
    }); 
    
    // $(".call-us .round_button").click(function (){
        // jivo_api.open({start : 'call'});
        // return false;
    // });
    $(".button-expand").click(function (ev){
        $(this).parents("li.categories").find('ul').slideToggle();
    });
    $(".show-social-buttons").click(function (ev){
        $(this).parents(".social-buttons-container").find('ul').slideToggle();
    });
    
    $(".toogle-address-list").click(function (ev){
        var content = $(this).parents(".spoiler-block").find('.spoiler-content');
        $(".spoiler-content").each(function(){
            if ($(this).get(0) === content.get(0)) {
                if (!content.hasClass("expanded")) {
                    content.removeClass("collapsed");
                    content.addClass("expanded");  
                } else {
                    content.addClass("collapsed");
                    content.removeClass("expanded");    
                }
            } else {
                 //$(this).addClass("collapsed");
                // $(this).removeClass("expanded");  
            }
        });
        return false;
    });
    $(".signup-course a.square-button").click(function (ev){
        $(".signup-for-lesson-shadow").css("display", "block")
       // return false;
    });
    $(".franchise .square-button").click(function (ev){
        $(".signup-for-lesson-shadow").css("display", "block")
        $(".franchise .square-button").attr("href", "#");
       // return false;
    });
    $(".main-menu ul li:nth-child(4) a").click(function (ev){
        $(".signup-for-lesson-shadow").css("display", "block")
        $(".main-menu ul li:nth-child(4) a").attr("href", "#");
       // return false;
    });
    $(".sign_for_lesson .button-apply").click(function (ev){
        $(".signup-for-lesson-shadow").css("display", "block")
       // return false;
    });
    $(".signup-for-lesson a.close").click(function (ev){
        $(".signup-for-lesson-shadow").css("display", "none");
        return false;
    });
    $( ".container" ).append( $( "h2" ) );
    function checkSlick() {
        if ($(document.body).width() >= 768) {
            if ($('.responsive').hasClass("slick-slider")) {
                $('.responsive').slick("unslick");
            }
        } else {

            if (!$('.responsive').hasClass("slick-slider")) {
               $('.responsive').slick({
                    infinite: false,
                    swipeToSlide: true,
                    touchMove: true,
                    touchThreshold: 10,
                    arrows: false,
                    dots:true,
                    variableWidth: true,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    focusOnSelect: false,

                    responsive: [
                    {
                      breakpoint: 768,
                      settings: {
                        infinite: false,
                        dots: true,
                      }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                  ]
                });
            }
        }
    }
    
    // $.getScript( "//vk.com/js/api/openapi.js?127" ).done(function( script, textStatus ){
        // var $newdiv1 = $( "<div id='vk_community_messages'></div>" );
        // $('body').append($newdiv1)
        // VK.Widgets.CommunityMessages("vk_community_messages", 123681111, {});
      // }).fail(function( jqxhr, settings, exception ) {
      // });
    
    $('.short-description').matchHeight();
    $('.courses section a .image-container').matchHeight();
    $('.related-products section a .image-container').matchHeight();
    setNavigation();

    function setNavigation() {
        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);
        $(".header .menu ul li a").each(function () {
            var href = $(this).attr('href');
//            console.log(path.substring(0, href.length))
            if (href.indexOf(path.substring(0, href.length - 1)) != -1 && path.length > 0 ) {
                $(this).closest('li').addClass('active');
            }
        });
    };
    setActiveCons ($(".course-feature").first());
    $(".course-feature").click(function (){
        setActiveCons($(this));
    });
    
    $(".language-select .selectpicker").on("change", onCityChange)
    $(".contacts-block .selectpicker").on("change", onCityChange)
});
var onCityChange = function (){
    var selected = $(this).find("option:selected").val();
    location = selected; // this.options[this.selectedIndex].value;
}

var setActiveCons = function (el){
    var lastIndex = 0;
    $(".course-feature").each(function(){
        $(this).removeClass("active");
        lastIndex =  $(this).index("section");
    })
    el.addClass("active");
    $(".course-feature-image img").attr("src",  "/css/images/content/courses/moscow/add/cons"+($(".course-feature").index(el) + 1)+".jpg");
    if (el.position()) {
        if (el.index("section") == lastIndex) {
            $(".course-feature-image").css("top", el.position().top - 150);
        } else {
            $(".course-feature-image").css("top", el.position().top - 50);
        }
    }
}

var handler = function() {
    var needChange = false;
    var desiredPosition = $(window).height() / 4;
    var closest = $(".course-feature").first();
    $(".course-feature").each(function (){
        var diff = Math.abs($(this)[0].getBoundingClientRect().top  - desiredPosition);
        var diff2 = Math.abs(closest[0].getBoundingClientRect().top  -           desiredPosition)
        if (diff < diff2) {
            closest = $(this);
        }
        setActiveCons(closest);
    });
};

//jQuery
$(window).on('DOMContentLoaded load resize scroll', handler); 

function initMap(id){
    YMaps.jQuery(function () {
        // Создает экземпляр карты и привязывает его к созданному контейнеру
        var map = new YMaps.Map(YMaps.jQuery("#map" + (id+1))[0]);
            
        map.enableScrollZoom();
        // Устанавливает начальные параметры отображения карты: центр карты и коэффициент масштабирования
        console.log( maps[id].markers[0].position.latitude)
        console.log( maps[id].markers[0].position.longitude)
        map.setCenter(new YMaps.GeoPoint( maps[id].markers[0].position.longitude, maps[id].markers[0].position.latitude), 16);
        
        
        var s = new YMaps.Style();
        s.iconStyle = new YMaps.IconStyle();
        s.iconStyle.href = "css/images/location.png";
        s.iconStyle.size = new YMaps.Point(59, 92);
        s.iconStyle.offset = new YMaps.Point(-30, -92);
        for (var i = 0; i < maps[id].markers.length; i++) {
            var markerInfo = maps[id].markers[i]
            var point = new YMaps.GeoPoint( markerInfo.position.longitude, markerInfo.position.latitude);
            var placemark = new YMaps.Placemark(point, {style: s});
            placemark.name = markerInfo.title;
            placemark.description = markerInfo.address;
            map.addOverlay(placemark); 
        }
    })
}


// function jivo_onLoadCallback(){
	// // Создаем элемент DIV для ярлыка
	// window.jivo_cstm_widget = document.createElement('div');
	// jivo_cstm_widget.setAttribute('id', 'jivo_custom_widget');
	// document.body.appendChild(jivo_cstm_widget);
	
	// // Добавляем обработчик клика по ярлыку - чтобы при клике разворачивалось окно
	// jivo_cstm_widget.onclick = function(){
		// jivo_api.open();
	// }
	
	// // Изменяем CSS класс, если есть операторы в онлайне
	// if (jivo_config.chat_mode == "online"){
		// jivo_cstm_widget.setAttribute("class", "jivo_online");
	// }
	
	// // Теперь можно показать ярлык пользователю
	// window.jivo_cstm_widget.style.display='block';
    // $("header .call-us").css("display", "block");
// }


// function jivo_onOpen(){
	// // Если чат развернут - скрываем ярлык
	// if (jivo_cstm_widget)
		// jivo_cstm_widget.style.display = 'none';
// }
// function jivo_onClose(){
	// // Если чат свернут - показываем ярлык
	// if (jivo_cstm_widget)
		// jivo_cstm_widget.style.display = 'block';
// }


// (function(){ var widget_id = 'dlZ09KkueF';var d=document;var w=window;function l(){
// var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();




!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery"],t):"undefined"!=typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){var e=-1,o=-1,i=function(t){return parseFloat(t)||0},a=function(e){var o=1,a=t(e),n=null,r=[];return a.each(function(){var e=t(this),a=e.offset().top-i(e.css("margin-top")),s=r.length>0?r[r.length-1]:null;null===s?r.push(e):Math.floor(Math.abs(n-a))<=o?r[r.length-1]=s.add(e):r.push(e),n=a}),r},n=function(e){var o={
byRow:!0,property:"height",target:null,remove:!1};return"object"==typeof e?t.extend(o,e):("boolean"==typeof e?o.byRow=e:"remove"===e&&(o.remove=!0),o)},r=t.fn.matchHeight=function(e){var o=n(e);if(o.remove){var i=this;return this.css(o.property,""),t.each(r._groups,function(t,e){e.elements=e.elements.not(i)}),this}return this.length<=1&&!o.target?this:(r._groups.push({elements:this,options:o}),r._apply(this,o),this)};r.version="0.7.0",r._groups=[],r._throttle=80,r._maintainScroll=!1,r._beforeUpdate=null,
r._afterUpdate=null,r._rows=a,r._parse=i,r._parseOptions=n,r._apply=function(e,o){var s=n(o),h=t(e),l=[h],c=t(window).scrollTop(),p=t("html").outerHeight(!0),d=h.parents().filter(":hidden");return d.each(function(){var e=t(this);e.data("style-cache",e.attr("style"))}),d.css("display","block"),s.byRow&&!s.target&&(h.each(function(){var e=t(this),o=e.css("display");"inline-block"!==o&&"flex"!==o&&"inline-flex"!==o&&(o="block"),e.data("style-cache",e.attr("style")),e.css({display:o,"padding-top":"0",
"padding-bottom":"0","margin-top":"0","margin-bottom":"0","border-top-width":"0","border-bottom-width":"0",height:"100px",overflow:"hidden"})}),l=a(h),h.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||"")})),t.each(l,function(e,o){var a=t(o),n=0;if(s.target)n=s.target.outerHeight(!1);else{if(s.byRow&&a.length<=1)return void a.css(s.property,"");a.each(function(){var e=t(this),o=e.attr("style"),i=e.css("display");"inline-block"!==i&&"flex"!==i&&"inline-flex"!==i&&(i="block");var a={
display:i};a[s.property]="",e.css(a),e.outerHeight(!1)>n&&(n=e.outerHeight(!1)),o?e.attr("style",o):e.css("display","")})}a.each(function(){var e=t(this),o=0;s.target&&e.is(s.target)||("border-box"!==e.css("box-sizing")&&(o+=i(e.css("border-top-width"))+i(e.css("border-bottom-width")),o+=i(e.css("padding-top"))+i(e.css("padding-bottom"))),e.css(s.property,n-o+"px"))})}),d.each(function(){var e=t(this);e.attr("style",e.data("style-cache")||null)}),r._maintainScroll&&t(window).scrollTop(c/p*t("html").outerHeight(!0)),
this},r._applyDataApi=function(){var e={};t("[data-match-height], [data-mh]").each(function(){var o=t(this),i=o.attr("data-mh")||o.attr("data-match-height");i in e?e[i]=e[i].add(o):e[i]=o}),t.each(e,function(){this.matchHeight(!0)})};var s=function(e){r._beforeUpdate&&r._beforeUpdate(e,r._groups),t.each(r._groups,function(){r._apply(this.elements,this.options)}),r._afterUpdate&&r._afterUpdate(e,r._groups)};r._update=function(i,a){if(a&&"resize"===a.type){var n=t(window).width();if(n===e)return;e=n;
}i?-1===o&&(o=setTimeout(function(){s(a),o=-1},r._throttle)):s(a)},t(r._applyDataApi),t(window).bind("load",function(t){r._update(!1,t)}),t(window).bind("resize orientationchange",function(t){r._update(!0,t)})});






