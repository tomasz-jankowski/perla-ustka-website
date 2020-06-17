jQuery(document).ready(function() {
    var btn = $('#button');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, '300');
    });
});

$('a[href*="#"]').on('click', function(e) {
    e.preventDefault()

    $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top,
        },
        500,
        'linear'
    )
})