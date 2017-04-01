function moveAfterContent() {
    if (jQuery(window).width() <= 767) {
        var content = jQuery('#content');
        jQuery('#sidebar-first').insertAfter(content);
        jQuery('#sidebar-second').insertAfter(content);
    }
}

jQuery(document).ready(function($) {
    moveAfterContent();
    $(window).resize(function() {
        moveAfterContent();
    })
});
