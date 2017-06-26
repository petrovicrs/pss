var $ = jQuery;
jQuery(document).ready(function ($) {
    __fix_tablet_landscape();
    $(window).resize(__fix_tablet_landscape());
});

function __fix_tablet_landscape() {
    var win_width = $(window).width();
    if (win_width < 1300 && win_width > 960) {
        // __fix_news_type_images();
        // __fix_most_read();
    }
}

function __fix_news_type_images() {
    var height = 999,
        image_selector = '#news-type-block .view-content .views-row .views-field-image IMG';
    $(image_selector).each(function () {
        var image = new Image();
        image.src = $(this).attr("src");
        var current_height = image.naturalHeight;
        if (current_height < height) {
            height = current_height;
        }
    });
    $(image_selector).height(height);
}

function __fix_most_read() {
    var selector = '.front .most-read-block .view .view-content .views-row .field-content .news-content';
    $(selector).each(function () {
       var parent = $(this).parent();
       var image_width = parent.find('.news-image').width();
       var el_width = parent.width() - image_width - 10;
       $(this).width(el_width);
    });
}