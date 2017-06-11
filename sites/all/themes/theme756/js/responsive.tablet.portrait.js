var $ = jQuery;
jQuery(document).ready(function ($) {
    __fix_tablet_portrait();
    $(window).resize(__fix_tablet_portrait());
});

function __fix_tablet_portrait() {
    var win_width = $(window).width();
    if (win_width < 960 && win_width > 768) {
        __fix_most_read();
    }
}

function __fix_most_read() {
    var selector = '.front .most-read-block .view .view-content .views-row .field-content .news-content';
    $(selector).each(function () {
       var parent = $(this).parent();
       var image_width = parent.find('.news-image').width();
       var el_width = parent.width() - image_width - 20;
       $(this).width(el_width);
    });
}