$(document).ready(function() {

    // open and close the mobile menu
    $('#open_menu').on('click', function(e) {
        e.preventDefault();
        $('ul#top_nav_menu').addClass('open');
        $('a#close_menu').addClass('open');
    });
    $('#close_menu').on('click', function(e) {
        e.preventDefault();
        $('ul#top_nav_menu').removeClass('open');
        $('a#close_menu').removeClass('open');
    });

    $('#heroCarousel').carousel({ interval: 12000 });
    $('#footerCarousel').carousel({ interval: 10000 });

    var currentPage;
    currentPage = 1;

    $(".btn.goforward").click(function() {

        var clickedLink = this.id;
        var nextPage;

        switch (currentPage) {
            case 2:
                {
                    nextPage = 4;
                    break;
                }
            case 3:
                {
                    nextPage = 4;
                    break;
                }
            case 4:
                {
                    nextPage = 5;
                    break;
                }
            case 5:
                {
                    nextPage = 7;
                    break;
                }
            case 6:
                {
                    nextPage = 7;
                    break;
                }
            case 7:
                {
                    nextPage = 8;
                    break;
                }
            case 8:
                {
                    nextPage = 10;
                    break;
                }
            case 9:
                {
                    nextPage = 10;
                    break;
                }
        }

        $("#quiz-content-" + currentPage).hide();
        $("#quiz-content-" + nextPage).fadeIn();

        currentPage = nextPage;

    });

    $(".btn.goback").click(function() {

        var clickedLink = this.id;
        var nextPage;

        switch (currentPage) {
            case 2:
                {
                    nextPage = 1;
                    break;
                }
            case 3:
                {
                    nextPage = 1;
                    break;
                }
            case 4:
                {
                    nextPage = 1;
                    break;
                }
            case 5:
                {
                    nextPage = 4;
                    break;
                }
            case 6:
                {
                    nextPage = 4;
                    break;
                }
            case 7:
                {
                    nextPage = 4;
                    break;
                }
            case 8:
                {
                    nextPage = 7;
                    break;
                }
            case 9:
                {
                    nextPage = 7;
                    break;
                }
        }

        $("#quiz-content-" + currentPage).hide();
        $("#quiz-content-" + nextPage).fadeIn();

        currentPage = nextPage;

    });

    $(".btn.quiz").click(function() {

        var clickedLink = this.id;
        var nextPage;

        switch (clickedLink) {
            case "btn-single":
                {
                    nextPage = 2;
                    break;
                }
            case "btn-hitched":
                {
                    nextPage = 3;
                    break;
                }
            case "btn-joined":
                {
                    nextPage = 3;
                    break;
                }
            case "btn-kids":
                {
                    nextPage = 5;
                    break;
                }
            case "btn-no-kids":
                {
                    nextPage = 6;
                    break;
                }
            case "btn-mortgage":
                {
                    nextPage = 8;
                    break;
                }
            case "btn-no-mortgage":
                {
                    nextPage = 9;
                    break;
                }
        }

        $("#quiz-content-" + currentPage).hide();
        $("#quiz-content-" + nextPage).fadeIn();

        currentPage = nextPage;

    });
});

// make the sliders stick to the bottom
// of the page on Multicarrier quote
function checkOffset() {
    var rangeSliders = $('#range_sliders');
    if (rangeSliders.length) {
        if (rangeSliders.offset().top + rangeSliders.height() >= $('footer').offset().top - 1) {
            rangeSliders.css('position', 'relative');
        }
        if ($(document).scrollTop() + window.innerHeight < $('footer').offset().top) {
            rangeSliders.css('position', 'fixed').css('width', '100%').css('bottom', '0').css('zIndex', '99');
        }
    }
}
$(document).scroll(function() {
    checkOffset();
});
