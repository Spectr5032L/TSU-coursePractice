$(document).on('keyup', '.js-input', function() {
    if ($(this).val()) {
        $(this).addClass('not-empty');
    } else {
        $(this).removeClass('not-empty');
    }
});

$(document).on('focus', '.js-input', function() {
    $(this).siblings('.label').addClass('focused');
});

$(document).on('blur', '.js-input', function() {
    if (!$(this).val()) {
        $(this).siblings('.label').removeClass('focused');
    }
});

$(document).ready(function() {
    $('.js-input').each(function() {
        if ($(this).val()) {
            $(this).addClass('not-empty');
        }
    });
});