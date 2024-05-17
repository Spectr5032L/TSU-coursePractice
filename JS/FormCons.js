$('.js-input').keyup(function () {
    if ($(this).val()) {
        $(this).addClass('not-empty');
    } else {
        $(this).removeClass('not-empty');
    }
});

$('.js-input').focus(function () {
    $(this).siblings('.label').addClass('focused');
});

$('.js-input').blur(function () {
    if (!$(this).val()) {
        $(this).siblings('.label').removeClass('focused');
    }
});