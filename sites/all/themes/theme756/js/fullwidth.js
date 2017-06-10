jQuery(document).ready(function ($) {
    var image_selector = '#main-wrapper.full-width .image-holder img';
    var window_height = $(window).height();
    var menu_height = $('#header').height();
    var footer_height = $('#footer').height();
    var image_height = window_height - menu_height - footer_height;
    $(image_selector).height(image_height);
});