  

// Navbar hover animatio
$(function(){

    setTimeout(function() {
        $('.tab-pane.active .initial_content').fadeOut('fast');
    }, 2000);




     

    var lastScrollTop = 0;
    $(window).on('scroll', function() {
        ss = $(this).scrollTop();
        if(ss < lastScrollTop) {
             $(".header").removeClass("not-visible");
        }
        else {
             $(".header").addClass("not-visible");
        }
        lastScrollTop = ss;
    });

});



$(document).ready(function(){
      $(window).scroll( function() { 
        var sc = $(window).scrollTop();
        if (sc > 94) {
          $(".header").addClass("fixed-header");
          $(".planitinerary-cnt").addClass("show-form");  
        }else{
          $(".header").removeClass("fixed-header");
          $(".planitinerary-cnt").removeClass("show-form");
        }
      });
      
    });
// range slider

$(document).ready(function() {
  var range = $("#cowbell").val();
  $(".rangevalu span").text(range);
$('input').mousemove(function() {
var range = $("#cowbell").val();
var percent = "%";

  $(".rangevalu span").text(range);

   });
   
});

// close Notification

$(document).ready(function() {
 
  $(".close-notification").click(function(){
    $(".notification").hide("slide", { direction: "right" }, 1000);
    $(".noti-icon").addClass("active-icon");
  });
  $(".noti-icon").click(function(){
    $(".notification").show("slide", { direction: "right" }, 1000);
    $(".noti-icon").removeClass("active-icon");
  });
   
});


// Search popup
$(document).ready(function() {

  $(".search-item").click(function(){
    $(".serch-pop").addClass("active-ser-pop");
  });

  $(".close-pop").click(function(){
    $(".serch-pop").removeClass("active-ser-pop");
  });

});
// select box

$(document).ready(function() {
$('select').niceSelect();
});

// Scrolling animation
$('.animate').scrolla({
  mobile: true,
  once: true
});

// owl carousel
var owl = $('.event-slider');
owl.owlCarousel({
  stagePadding: 120,
  loop:true,
  margin:20,
  nav:false,
  items:1,
  smartSpeed : 800,
  touchDrag: false,
  mouseDrag: false,
  responsiveClass: true,
  responsive:{
      0:{
          items:1,
          stagePadding: 0,
      },
      400:{
          items:1,
          stagePadding: 0,
          margin:0
      },
      1000:{
          items:1,
      }
  }
});
$('.customNextBtn').click(function() {
  owl.trigger('next.owl.carousel');
});
$('.customPreviousBtn').click(function() {
  owl.trigger('prev.owl.carousel');
});



$(document).ready(function() {
  var $events_txt = $('.owl-item.active .eventsslide-item .overly-txt').clone();
  $('.events-slide-txt').html($events_txt);
  $('.customNextBtn, .customPreviousBtn').click(function() {
    var $events_txt = $('.owl-item.active .eventsslide-item .overly-txt').clone();
    $('.events-slide-txt').html($events_txt);
  });
 
});



// Related owl carousel
var related_owl = $('.related-slider');
related_owl.owlCarousel({
  loop:true,
  margin:0,
  items:1,
  autoplay: true,
  nav:true,
  navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
  smartSpeed : 800,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1,
      }
  }
});
$('.relatedNextBtn').click(function() {
  related_owl.trigger('next.owl.carousel');
});
$('.relatedPreviousBtn').click(function() {
  related_owl.trigger('prev.owl.carousel');
});





// Notification Scrolltop
$(document).ready(function() {
  $( ".notification-click" ).click(function( event ) {
    event.preventDefault();
    $("html, body").animate({ 
      scrollTop: $($(this).attr("href")).offset().top - 110
    }, 800);
  });
});





$.simpleTicker($("#ticker-fade"),{
  speed : 1000,
  delay : 3000,
  easing : 'swing',
  effectType : 'slide'
});



// $(function() {
//   $("#video-tabs").tabs({
//     hide:{effect:"slide", direction:"left"},
//     show:{effect:"slide", direction:"right"}
//   });
// });

$(function() {
  // $("#heritage-tabs").tabs({
  //   hide:{effect:"slide", direction:"left"},
  //   show:{effect:"slide", direction:"right"}
  // });

  $("#heritage-tabs .js-tabs-nav .nav-tabs-link").aniTabs({animation:"slide", animationSpeed:800, slideDirection:"left", drag:false,autoHeight:false});
});

// Custom video button

/*$('.video').parent().click(function () {
  if($(this).children(".video").get(0).paused){$(this).children(".video").get(0).play();   $(this).children(".playpause").fadeOut();
    }else{       $(this).children(".video").get(0).pause();
  $(this).children(".playpause").fadeIn();
    }
});*/



  jQuery(function($){
    $(".rvs-container").rvslider();
    
    $(".story-carousel").owlCarousel({
                  loop:true,
                  margin:10,
                  items:3,
                  dots:false,
                  nav:true,
                  navText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                  smartSpeed : 800,
                  responsive:{
                      0:{
                          items:1
                      },
                      401:{
                          items:1
                      },
                      600:{
                          items:2
                      },
                      1000:{
                          items:3,
                      }
                  }
                });
    

  });

jQuery(window).load(function() {
  // Animate loader off screen
  jQuery(".se-pre-con").fadeOut("slow");
});

$(document).ready(function(){
  $(".header .menu-icon").click(function(){
    $(".collapse-menu").addClass("show-hide-menu");
  });

  $(".close-rt-pnl").click(function(){
    $(".collapse-menu").removeClass("show-hide-menu");
  });
  
  $('.header .nav-item').click(function(){
      
      if($(window).width() < 768){
        $(this).toggleClass("active-toggle");
      }
  });

  $('.header .nav-link').click(function(){
    if($(window).width() < 768){
    $(this).toggleClass("active");
    }
  });

});







$(document).ready(function() {

  var sync1 = $("#sync1");
  var sync2 = $("#sync2");
  var slidesPerPage = 12; //globaly define number of elements per page
  var syncedSecondary = true;

  sync1.owlCarousel({
    items : 1,
    slideSpeed : 2000,
    nav: true,
    navText: ['<div class="owl-arrows"><i class="fa fa-angle-left" aria-hidden="true"></i></div>','<div class="owl-arrows"><i class="fa fa-angle-right" aria-hidden="true"></i></div>'],
    autoplay: false,
    dots: false,
    loop: true,
    responsiveRefreshRate : 200,
   
  }).on('changed.owl.carousel', syncPosition);

  sync2
    .on('initialized.owl.carousel', function () {
      sync2.find(".owl-item").eq(0).addClass("current");
    })
    .owlCarousel({
    items : slidesPerPage,
    dots: false,
    margin: 10,
    nav: true,
    navText: ['<div class="owl-arrows"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>','<div class="owl-arrows"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>'],
    smartSpeed: 200,
    slideSpeed : 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate : 100,
    responsiveClass: true,
    responsive: {
        0:{
          items: 3
        },
        480:{
          items: 3
        },
        769:{
          items: slidesPerPage,
        }
    }
  }).on('changed.owl.carousel', syncPosition2);

  function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;
    
    //if you disable loop you have to comment this block
    var count = el.item.count-1;
    var current = Math.round(el.item.index - (el.item.count/2) - .5);
    
    if(current < 0) {
      current = count;
    }
    if(current > count) {
      current = 0;
    }
    
    //end block

    sync2
      .find(".owl-item")
      .removeClass("current")
      .eq(current)
      .addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();
    
    if (current > end) {
      sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
      sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
  }
  
  function syncPosition2(el) {
    if(syncedSecondary) {
      var number = el.item.index;
      sync1.data('owl.carousel').to(number, 100, true);
    }
  }
  
  sync2.on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
  });







$(".open-lightbox").click(function(){
  $(".custom-lightbox").addClass("lightbox-opend");
});
$(".lightbox-close").click(function(){
  $(".custom-lightbox").removeClass("lightbox-opend");
});

});