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

jQuery(document).ready(function($) {
    __include_form_tips();
    moveAfterContent();
    $(window).resize(function() {
        moveAfterContent();
    })
});
