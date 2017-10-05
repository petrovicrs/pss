(function($){
    $(document).ready(function(){
        var accordion_selector = '#menu_accordion div.accordion-menu-wrapper',
            accordion_link_selector = '#menu_accordion .ui-accordion .ui-accordion-header .accordion-link',
            height = $(accordion_selector).show().height();
        $(accordion_selector).hide();
        $('#menu_accordion span.icon-show-accordion-menu').click(function(){
            if (!$(accordion_selector).is(":visible")) {
                var window_height = $(window).height();
                if (height > window_height) {
                    var all_el_height = 0,
                        el_number = 0;
                    $(accordion_link_selector).each(function() {
                        all_el_height += 20;
                        el_number++;
                    });
                    var padding = (window_height - all_el_height) / (2 * el_number);
                    $(accordion_link_selector).css({'padding-top' : padding / 2, 'padding-bottom' : padding / 2});
                } else {
                    $(accordion_link_selector).css({'padding-top' : 15, 'padding-bottom' : 15});
                }
            }
            $(accordion_selector).toggle('medium');
        });
    });
})(jQuery);