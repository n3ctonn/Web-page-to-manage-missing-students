$(document).ready(function () {
    $('.tab-link').click(function () {
        var target = $(this).data('target');
        $('.tab-content').hide();
        $('#' + target).show();
        $('.tab-link').removeClass('active');
        $(this).addClass('active');
    });
});
