jQuery( document ).ready(function( $ ) {
  $(".icon-search").click(function(){
    $(".search-form,.header-bottom-box").addClass("active");
  });
  $(".mobile-menu-btn").click(function(){
    $(".mobile-menu-btn").toggleClass("active");
    $(".header-bottom-box").toggleClass("active-menu");
  });
  $(".btn-close").click(function(){
    $(".search-form,.header-bottom-box").removeClass("active");
  });
  $(".scientist-box .img-box").click(function(){
  	$index = $(".scientist-box .img-box").index(this);
  	$(".scientist-box .img-box").removeClass("active");
  	$(".scientist-box .img-box").eq($index).addClass("active");
  	$(".scientist-content .scientist-profile").removeClass("active");
  	$(".scientist-content .scientist-profile").eq($index).addClass("active");
  });

  $('.flexslider').flexslider({
    animation: "fade",
    animationSpeed: 200,

    directionNav: false,
    controlNav: true,
    slideshow: false
  });
  $('.product-flexslider').flexslider({
    animation: "fade",
    animationSpeed: 200,

    controlNav: "thumbnails",
    directionNav: false,
    slideshow: false

  });
  $(".index-banner .index-banner-wrapper").eq(0).addClass("active");
  
  $(function() {
    var n = $( ".index-banner-wrapper" ).length;
    var slide = $(".index-banner"), cur = 0;
    setInterval(function(){
    $('.active',slide).addClass('removing');
    setTimeout(function() {$('.removing',slide).removeClass('active removing');}, 1000);
    $('.index-banner-wrapper',slide).eq((++cur)%n).addClass('active');
    }, 6000 );//using 1000 just for demo purposes
  });
  $(".menu-item.menu-item-has-children").removeClass("menu-item");
  $("li.menu-item-has-children").append( "<div class='append'></div>" );
  $("li.menu-item-has-children .append").click(function(){  
    if ($(this).hasClass("changed")){
      $(this).removeClass("changed");
      $(this).parent().find( ".sub-menu li" ).slideUp();
    }else{
      $(".append").removeClass("changed");
      $(".sub-menu li" ).slideUp();
      $(this).addClass("changed");
      $(this).parent().find( ".sub-menu li" ).slideDown();
    }
  });
  $('.return-to-shop a').each(function(){ 
      $(this).hide();      
      $lang = $("html").attr("lang");
      if($lang == "zh-hant"){$(this).parent().append( "<a class='button wc-backward' href='/health-products-2/?lang=zh-hant'>回到商店</div>" );}
      else{$(this).parent().append( "<a class='button wc-backward' href='/health-products-2/'>Return to shop</div>" );}
  });
  $(".scroll-menu li a").click(function(){
      $index = $(".scroll-menu li").index($(this).parent());
      $(".scroll-menu li").removeClass("active");
      $(".scroll-menu li").eq($index).addClass("active");
      $(".hidden-content-box").removeClass("active");
      $(".hidden-content-box").eq($index).addClass("active");
  });
});

jQuery(window).load(function() {
   wow = new WOW(
	      {
	      boxClass:     'wow',      // default
	      animateClass: 'animated', // default
	      offset:       0,          // default
	      mobile:       false,       // default
	      live:         true        // default
	    }
    )
    wow.init();
});
