jQuery(document).ready(function ($) {
    var selector = '#main-wrapper.full-width .background-image-holder';
    var image_selector = selector + ' .image-holder img';
    var window_height = $(window).height();
    var menu_height = $('#header').height();
    var footer_height = $('#footer').height();
    var image_height = window_height - menu_height - footer_height;
    $(image_selector).height(image_height);
});