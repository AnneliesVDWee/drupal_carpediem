// jQuery(window).load(function () {
//     jQuery(window).resize(function () {
//         jQuery('#views_slideshow_cycle_main_slides-page img').each(function () {
//             var img_height = jQuery(this).height();
//             if (img_height !== 0) {
//                 jQuery('#views_slideshow_cycle_main_slides-page').height(img_height);
//                 return false;
//             }
//         });

//     });
// });

jQuery(window).load(function () {
    jQuery(window).resize(function () {
        jQuery('#views_slideshow_cycle_teaser_section_slides-block_1 img').each(function () {
            var img_height = jQuery(this).height();
            if (img_height !== 0) {
                jQuery('#views_slideshow_cycle_teaser_section_slides-block_1').height(img_height);
                return false;
            }
        });
        jQuery('#featured img').each(function () {
            var img_height = jQuery(this).height();
            if (img_height !== 0) {
                jQuery('#featured').height(img_height);
                return false;
            }
        });

    });
});

// $(window).resize(function(){
//   $('.views_slideshow_cycle_main').each(function(){
//     var cycleMain = $(this);
//     var img_width = 0,
//         img_height = 0;
//     var clearCSS = {width: "auto", height: "auto"};
//     var cycle = cycleMain.children('.views-slideshow-cycle-main-frame');
//     cycleElements = cycle.data("cycle.opts");
//     cycle.css(clearCSS);
//     cycleMain.find('.views-slideshow-cycle-main-frame-row').each(function(i){
//       $(this).css(clearCSS);
//       var tmp_img_width = $(this).width();
//       var tmp_img_height = $(this).height();
//       if(tmp_img_width > img_width)
//         img_width = tmp_img_width;
//       if(tmp_img_height > img_height)
//         img_height = tmp_img_height;
//       cycleElements.elements[i].cycleW = tmp_img_width;
//       cycleElements.elements[i].cycleH = tmp_img_height;
//       $(this).css({width: tmp_img_width, height: tmp_img_height});
//     });
//     cycleMain.height(img_height);
//     cycle.css({width: img_width, height: img_height});
//     cycle.data("cycle.opts.elements", cycleElements);
//   });
// });

