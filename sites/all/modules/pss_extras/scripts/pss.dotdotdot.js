var $ = jQuery;
jQuery(document).ready(function () {
    __pss_fit_news_block_height();
    __pss_fit_most_read_block_height();
    // __pss_fit_video_block_height();
    __pss_setup_dotdotdot();
});

function __pss_fit_news_block_height() {
    var prefix = '.view.news-by-type-block-view .view-content .views-row .field-content .news-content ';
    $(prefix).each(function () {
        var wrapper_height = $(this).find('.title-and-body').height();
        var title_height = $(this).find('.title-and-body .news-title').height();
        var tagline_height = $(this).find('.title-and-body .news-tagline').height();
        var height =  wrapper_height - title_height - tagline_height - 20;
        $(this).find('.title-and-body .news-body').height(height);
    });
}
function __pss_fit_most_read_block_height() {
    var prefix = '.most-read-block .view .view-content .views-row .field-content .news-content ';
    $(prefix).each(function () {
        var wrapper_height = $(this).height();
        var title_height = $(this).find('.news-title').height();
        var tagline_height = $(this).find('.news-tagline').height();
        var height =  wrapper_height - title_height - tagline_height - 70;
        $(this).find('.news-body').height(height);
    });
}
function __pss_fit_video_block_height() {
 var prefix = '.front .video-material .view .view-content .views-row .field-content .body-wrapper ';
    $(prefix).each(function () {
        var wrapper_height = $(this).height();
        var title_height = $(this).find('.title').height();
        var height =  wrapper_height - title_height - 30;
        $(this).find('.body').height(height);
    });   
}
function __pss_setup_dotdotdot() {
    var selectors = [
        '.view.news-by-type-block-view .view-content .views-row .field-content .news-content .title-and-body .news-body',
        '.most-read-block .view .view-content .views-row .field-content  .news-content .news-body',
        '#block-views-author-recommendation-block .view-author-recommendation .view-content .views-row .recommendation-body'
        // '.front .video-material .view .view-content .views-row .field-content .body-wrapper .body'
    ];
    $.each(selectors, function (index, selector) {
        $(selector).each(function() {
            $(this).dotdotdot({
            });
        });
    });
}