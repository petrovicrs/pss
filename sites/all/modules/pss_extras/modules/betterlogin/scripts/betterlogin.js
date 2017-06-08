jQuery(document).ready(function($) {
    $('#auth_box form input').hover(function () {
        $(this).closest('.form-item').find('.description').toggle(300);
    });
});