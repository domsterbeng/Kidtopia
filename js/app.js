$(document).ready(function() {
    $('#questions').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        infinite: false,
        fade: true,
        dots: true,
        // adaptiveHeight: true
    });

    $('.selections .selection-card').on('click', function() {
        $(this).addClass('active');
        $(this).siblings('.selection-card').removeClass('active');
        var selectedAnswer = $(this).attr('data-selection');
        $(this).parents('.question').attr('data-answer', selectedAnswer);
        $(this).parents('.question').find('.question-input').val(selectedAnswer);
        $('#questions').slick('slickNext');

        var completed = true;
        $('#questions .question').each(function() {
            if (!$(this).attr('data-answer')){
                completed = false;
            }
        })

        if (completed) {
            $('#submit-answer').removeClass('hidden');
        } else {
            $('#submit-answer').addClass('hidden');
        }
    })

    $('#questions').on('afterChange', function(event, slick, currentSlide){
        $('#current-question-no').text((currentSlide + 1));
    });
})