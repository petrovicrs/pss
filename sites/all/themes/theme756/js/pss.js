var $ = jQuery;
function moveAfterContent() {
    if (jQuery(window).width() <= 767) {
        var content = jQuery('#content');
        jQuery('#sidebar-first').insertAfter(content);
        jQuery('#sidebar-second').insertAfter(content);
    }
}

function __include_form_tips() {
    $('#auth_box form input').focus(function () {
        $(this).closest('.form-item').find('.description').toggle(300);
    });
    $('#auth_box form input').focusout(function () {
        $(this).closest('.form-item').find('.description').hide(300);
    });
}

function __fix_fp_news_type_block_height() {
    var block_row_selector = '#news-type-block .view-content .row';
    $(block_row_selector).each(function () {
        var block_height = 0;
        $(this).find('.views-row').each(function () {
            if($(this).height() > block_height) {
                block_height = $(this).height();
            }
        });
        $(this).find('.views-row').each(function () {
            $(this).height(block_height);
        });
    });
}

jQuery(document).ready(function($) {
    __include_form_tips();
    moveAfterContent();
    __fix_fp_news_type_block_height();
    $(window).resize(function() {
        moveAfterContent();
        __fix_fp_news_type_block_height();
    })
});
