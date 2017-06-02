jQuery(document).ready(function($) {
    $('#block-search-form .toggle-holder').on('click', function(ev) {
        var form = $(this).parent().find('form#search-block-form');
        if (form.find('div.close-button-holder').length == 0) {
            form.find('div.container-inline').prepend('<div class="close-button-holder"><span></span></div>')
            $(form.find('div.close-button-holder')).on('click', function() {
                form.toggle('fast');
            });
        }
        form.toggle('fast');
        form.find('input.form-text').attr('placeholder', Drupal.t('search'));
    });
});

