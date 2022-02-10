$(document).ready(function () {
    $('select').niceSelect();

    $('.image-post-left').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        infinite: true,
        focusOnSelect: true,
        fade: false,
        // cssEase: 'linear',
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.image-post-right',
        nextArrow: '<button class="slick-next slick-arrow next-list-image" aria-label="Next" type="button"><i class="fas fa-chevron-right"></i></button>',
        prevArrow: '<button class="slick-prev slick-arrow prev-list-image" aria-label="Previous" type="button"><i class="fas fa-chevron-left"></i></button>',
    });
    $('.image-post-right').slick({
        slidesToShow: 4,
        slidesToScroll: -4,
        arrows: true,
        dots: false,
        infinite: true,
        asNavFor: '.image-post-left',
        focusOnSelect: true,
        centerMode: true,
        focusOnSelect: true,
        vertical: true,
        prevArrow: false,
        responsive: [
            {
                breakpoint: 500,
                settings: {
                    arrows: false,
                    vertical: true,
                }
            }
        ]
    });

    (function () {

        var parent = document.querySelector(".price-slider");
        if (!parent) return;
    
        var
            rangeS = parent.querySelectorAll("input[type=range]"),
            numberS = parent.querySelectorAll("input[type=number]");
    
        rangeS.forEach(function (el) {
            el.oninput = function () {
                var slide1 = parseFloat(rangeS[0].value),
                    slide2 = parseFloat(rangeS[1].value);
    
                if (slide1 > slide2) {
                    [slide1, slide2] = [slide2, slide1];
                }
    
                // numberS[0].value = slide1;
                // numberS[1].value = slide2;
                $("#startPrice").text(slide1);
                $("#endPrice").text(slide2);
            }
        });
    
        numberS.forEach(function (el) {
            el.oninput = function () {
                var number1 = parseFloat(numberS[0].value),
                    number2 = parseFloat(numberS[1].value);
    
                if (number1 > number2) {
                    var tmp = number1;
                    numberS[0].value = number2;
                    numberS[1].value = tmp;
                }
    
                rangeS[0].value = number1;
                rangeS[1].value = number2;
    
            }
        });
    
    })();

});

