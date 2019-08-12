$(function() {

  var win = $(window);
  var body = $('body');
  var isIE = document.all && !window.atob;

  var $header = $('#header'),
    $switch = $('.switch'),
    $menu = $('.menu'),
    $searchWrap = $('.search-wrap'),
    $lang = $('.lang-toggle'),
    $goTop = $('.go-top');


  // Mobile Detect
  var md = new MobileDetect(window.navigator.userAgent);
  if (md.mobile()) body.addClass('mb');
  else body.addClass('pc');


  // Plugin: Lazyload
  var lazyElem = $('.lazy');
  if (lazyElem.length > 0) {
    lazyElem.Lazy({
      effect: 'fadeIn',
      effectTime: 500,
      afterLoad: function(element) {
        $(element).attr('data-loaded', true);
        if($('.parallax').length > 0){
          win.trigger('resize.px.parallax');
        }
      },
    });
  }

  //Plugin: Parallax
  if($('.parallax').length > 0) {
    $('.parallax').parallax();
  }

  //Plugin: Scroll view
  showrole($('.showrole'));

  //ScrollTop
  $goTop.scrollView({
    start: 100,
    threshold: 0,
    repeat: true
  });
  $goTop.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, 800);
  });

  //language
  $lang.click(function(event) {
    $(this).toggleClass('open')
    $(this).next('ul').stop().fadeToggle(350);

  });

  //search
  $('.search-icon').click(function(e){
    e.preventDefault();
    if(!$(this).hasClass('on')){
      $(this).addClass('on');
      $('.search-outter').remove();
      var searchForm = $searchWrap.html();
      $header.append('<div class="search-outter"><a href="javascript:;" class="close"><i class="fas fa-times"></i></a>'+searchForm+'</div>')
      $('.search-outter').fadeToggle();
    } else {
      $(this).removeClass('on');
      $('.search-outter').remove();
    }
  });

  $(document).on('click', '.search-outter .close', function(){
    $('.search-icon').click();
  });


  //Header
  $header.scrollView({
    start: 100,
    threshold: 0,
    repeat: true
  });

  $('#header .menu > ul > li.on > a').scrollView({
    start: 100,
    threshold: 0,
    repeat: true
  });

  //Menu
  $switch.click(function (e) {
    e.preventDefault();
    if (!$switch.hasClass('on') && !$menu.parent().hasClass('active')) {
      $switch.addClass('on');
      $menu.addClass('active');
    } else {
      $switch.removeClass('on');
      $menu.removeClass('active');
    }
  });

  $menu.find('a').click(function (e) {
    if (body.hasClass('mb') && $(this).next('ul').length > 0) {
      e.preventDefault();
    }
    if ($switch.is(':visible')) {
      if ($(this).next('ul').length > 0) {
        e.preventDefault();
        $(this).parent().removeClass('on');
        if (!$(this).parent().hasClass('on')) {
          $(this).next('ul').slideToggle().parents('li').siblings().removeClass('on').find('ul').slideUp();
          $(this).parent().addClass('on');
        } else {
          $(this).next('ul').slideUp();
          $(this).parent().removeClass('on');
        }
      }

    }
  });

  // Page Banner
  win.scroll(function(){
    var x = $(this).scrollTop(),
      scale = 1 + (x * 0.0005),
      transform = 'scale('+scale+') translate3d(0,0,0)';
    $('.p-banner img').css({
      // opacity: 1 - (x * 0.0008),
      WebkitTransform: transform,
      MozTransform: transform,
      msTransform: transform,
      transform: transform
    });
  })


});



//FUNCTION - SCROLL-VIEW
var showrole = function (item) {
  item.each(function (i) {
    var $this = $(this);
    setTimeout(function () {
      $this.scrollView({
        threshold: 0,
        onAddClass: function (element) {
          if ($('.parallax').length > 0) {
            $(window).trigger('resize.px.parallax');
          }
        }
      });
    }, i * 80);
  });
};


// Plugin: Responsive Images
$.fn.responsiveImg = function(options) {

  var $selector = $(this);

  var defaults = {
    onCreated: function(element) {
      return false;
    } // callback(function) when element is created.
  };
  var settings = $.extend({}, defaults, options);

  if ($('[data-responsive-image-style]').length < 1) {
    var iteration = 1;
    $('head').append('<style type="text/css" id="responsive-image-style-1" data-responsive-image-style="1"></style>');
  } else {
    var iteration = $('[data-responsive-image-style]').length + 1;
    $('head').append('<style type="text/css" id="responsive-image-style-'+iteration+'" data-responsive-image-style="'+iteration+'"></style>');
  }

  $selector.each(function(i,element) {
    var elem = $(element);
    var addClassName = 'responsive-image-'+iteration+'-'+i;
    var image = elem.data('responsive-image');
    var appendRule = '';
    if (elem.data('responsive-display-max') != null && elem.data('responsive-display-max') != "" && elem.data('responsive-display-max') != "undefined") {
      var mediaQueryMax = elem.data('responsive-display-max');
      if (elem.data('responsive-display-min') != null && elem.data('responsive-display-min') != "" && elem.data('responsive-display-min') != "undefined") {
        var mediaQueryMin = elem.data('responsive-display-min');
        appendRule+= '@media (max-width: '+mediaQueryMax+'px) and (min-width: '+mediaQueryMin+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
        appendRule+= '@media (min-width: '+(mediaQueryMax+1)+'px) { .'+addClassName+' { display: none; } }';
        appendRule+= '@media (max-width: '+(mediaQueryMin-1)+'px) { .'+addClassName+' { display: none; } }';
      } else {
        appendRule+= '@media (max-width: '+mediaQueryMax+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
        appendRule+= '@media (min-width: '+(mediaQueryMax+1)+'px) { .'+addClassName+' { display: none; } }';
      }
    } else if (elem.data('responsive-display-min') != null && elem.data('responsive-display-min') != "" && elem.data('responsive-display-min') != "undefined") {
      var mediaQueryMin = elem.data('responsive-display-min');
      appendRule+= '@media (min-width: '+mediaQueryMin+'px) { .'+addClassName+' { background-image: url('+image+'); } }';
      appendRule+= '@media (max-width: '+(mediaQueryMin-1)+'px) { .'+addClassName+' { display: none; } }';
    }
    if (elem.data('responsive-display-ratio') != null && elem.data('responsive-display-ratio') != "" && elem.data('responsive-display-ratio') != "undefined") {
      var pb = 1/parseFloat(elem.data('responsive-display-ratio')) * 100 + '%';
      appendRule+= '.'+addClassName+' { height: 0; padding-bottom: '+pb+'; background-size: cover;}';
    } else if (elem.data('responsive-display-height') != null && elem.data('responsive-display-height') != "" && elem.data('responsive-display-height') != "undefined") {
      appendRule+= '.'+addClassName+' { height: '+elem.data('responsive-display-height')+'; background-position: center;}';
    }
    elem.addClass(addClassName);
    $('#responsive-image-style-'+iteration).append(appendRule);
    settings.onCreated.call(this,elem);
  });

}
