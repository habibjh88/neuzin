(function ($) {
    "use strict";

    //function Load
    function neuzin_isotope_scripts_load() {
        var $ = jQuery;

        /*-------------------------------------
            Masonry
        -------------------------------------*/
        jQuery(document).ready(function($) {
          "use strict";

          var $container = $('.portfolio-items'),
          colWidth = function () {
            var w = $container.width(), 
            columnNum = 1,
            columnWidth = 0;
            if (w > 960) {
              columnNum  = 4;
            }  else if (w > 640) {
              columnNum  = 2;
            }
              else if (w > 480) {
              columnNum  = 1;
            }
            columnWidth = Math.floor(w/columnNum);
            $container.find('.item').each(function() {
              var $item = $(this),
              multiplier_w = $item.attr('class').match(/item-w(\d)/),
              multiplier_h = $item.attr('class').match(/item-h(\d)/),
              width = multiplier_w ? columnWidth*multiplier_w[1]-30 : columnWidth-30,
              height = multiplier_h ? columnWidth*multiplier_h[1]*0.95-30 : columnWidth*0.95-30;
              $item.css({
                width: width,
                height: height
              });
            });
            return columnWidth;
          },
          isotope = function () {
            $container.isotope({
              resizable: true,
              itemSelector: '.item',
              masonry: {
                columnWidth: colWidth(),
                // gutterWidth: 10
              }
            });
          };

           var $container2 = $('.portfolio-grid-items'),
          colWidth2 = function () {
            var w = $container2.width(), 
            columnNum = 1,
            columnWidth = 0;
            if (w > 991) {
              columnNum  = 3;
            }  else if (w > 640) {
              columnNum  = 2;
            }
              else if (w > 480) {
              columnNum  = 1;
            }
            columnWidth = Math.floor(w/columnNum);
            $container2.find('.item').each(function() {
              var $item = $(this),
              multiplier_w = $item.attr('class').match(/item-w(\d)/),
              multiplier_h = $item.attr('class').match(/item-h(\d)/),
              width = multiplier_w ? columnWidth*multiplier_w[1]-30 : columnWidth-30,
              height = multiplier_h ? columnWidth*multiplier_h[1]*0.80-30 : columnWidth*0.80-30;
              $item.css({
                width: width,
                height: height
              });
            });
            return columnWidth;
          },
          isotope2 = function () {
            $container2.isotope({
              resizable: true,
              itemSelector: '.item',
              masonry: {
                columnWidth: colWidth2(),
                // gutterWidth: 10
              }
            });
          };


          isotope();
          isotope2();

          $('.rt-isotope-tab a').click(function(){
            $('.rt-isotope-tab .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
              filter: selector,
              animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
              }
            });
            return false;
          }); 
        });

    }


    // Window Load+Resize
    $(window).on('load resize', function(){
        // Elementor Frontend Load
        $(window).on('elementor/frontend/init', function () {
            if (elementorFrontend.isEditMode()) {
                elementorFrontend.hooks.addAction('frontend/element_ready/widget', function () {
                    neuzin_isotope_scripts_load();
                });
            }
        });
    });

    $( document ).ready( function () {
        neuzin_isotope_scripts_load();
    });

})(jQuery);