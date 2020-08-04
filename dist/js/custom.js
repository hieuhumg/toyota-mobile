$(document).ready(function () {
    // end banner home
    $('#open-menu').on('click', function () {
        $('.header-body').toggleClass('active');
    });

    $('ul.tabs li').click(function () {
        var tab_id = $(this).attr('data-tab');

        $('ul.tabs li').removeClass('current');
        $('.tab-content').removeClass('current');

        $(this).addClass('current');
        $("#" + tab_id).addClass('current');
    });

    $('.sale-slide').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 7000,
        arrows: false,
        dots: true,
        speed: 500,
        // infinite: true,
        // cssEase: 'ease-in-out',
        // touchThreshold: 100,
        prevArrow:"<img class='left' src=\"dist/images/left.png\" alt=\"\">",
        nextArrow:"<img class='right' src=\"dist/images/right.png\" alt=\"\">",

    });

    $('.slider-single').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        adaptiveHeight: true,
        infinite: false,
        useTransform: true,
        speed: 400,
        cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
    });


    $('.slider-nav-4')
        .on('init', function(event, slick) {
            $('.slider-nav-4 .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: false,
            infinite: false,
            prevArrow:"<img class='left' src=\"dist/images/left.png\" alt=\"\">",
            nextArrow:"<img class='right' src=\"dist/images/right.png\" alt=\"\">",
            // responsive: [{
            //     breakpoint: 1024,
            //     settings: {
            //         slidesToShow: 5,
            //         slidesToScroll: 5,
            //     }
            // }, {
            //     breakpoint: 640,
            //     settings: {
            //         slidesToShow: 4,
            //         slidesToScroll: 4,
            //     }
            // }, {
            //     breakpoint: 420,
            //     settings: {
            //         slidesToShow: 3,
            //         slidesToScroll: 3,
            //     }
            // }]
        });
    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-nav-4').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav-4 .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav-4 .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });

    $('.slider-nav-4').on('click', '.slick-slide', function(event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');

        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });

    $('.slider-nav-3')
        .on('init', function(event, slick) {
            $('.slider-nav-3 .slick-slide.slick-current').addClass('is-active');
        })
        .slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: false,
            focusOnSelect: false,
            infinite: false,
            prevArrow:"<img class='left' src=\"dist/images/left.png\" alt=\"\">",
            nextArrow:"<img class='right' src=\"dist/images/right.png\" alt=\"\">",
            // responsive: [{
            //     breakpoint: 1024,
            //     settings: {
            //         slidesToShow: 5,
            //         slidesToScroll: 5,
            //     }
            // }, {
            //     breakpoint: 640,
            //     settings: {
            //         slidesToShow: 4,
            //         slidesToScroll: 4,
            //     }
            // }, {
            //     breakpoint: 420,
            //     settings: {
            //         slidesToShow: 3,
            //         slidesToScroll: 3,
            //     }
            // }]
        });
    $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
        $('.slider-nav-3').slick('slickGoTo', currentSlide);
        var currrentNavSlideElem = '.slider-nav-3 .slick-slide[data-slick-index="' + currentSlide + '"]';
        $('.slider-nav-3 .slick-slide.is-active').removeClass('is-active');
        $(currrentNavSlideElem).addClass('is-active');
    });

    $('.slider-nav-3').on('click', '.slick-slide', function(event) {
        event.preventDefault();
        var goToSingleSlide = $(this).data('slick-index');

        $('.slider-single').slick('slickGoTo', goToSingleSlide);
    });
    //menu fixed
    // $(window).bind('scroll', function() {
    //     var navHeight = 68;
    //     console.log(navHeight);
    //     if ($(window).scrollTop() > navHeight) {
    //         $('.main-menu').addClass('fixed');
    //         $('.form-search-mobile').css('top','0');
    //     }
    //     else {
    //         $('.main-menu').removeClass('fixed');
    //         $('.form-search-mobile').css('top','inherit');
    //     }
    // });

    //search

    $('#toggle-search').click(function () {
        $('.box-form').toggleClass('active');
    });

    //search-mobile
    $('#toggle-search').click(function () {
        if($(this).hasClass('fa fa-search')){
            $(this).attr('class','fa fa-times');
        }else{
            $(this).attr('class','fa fa-search');
        }
        $('body').toggleClass('hide-scroll');
        $('.form-search-mobile').toggle(500);
    });



    // modal video
    function toggle_video_modal() {

        // Click on video thumbnail or link
        $(".js-trigger-video-modal").on("click", function(e){

            // prevent default behavior for a-tags, button tags, etc.
            e.preventDefault();

            // Grab the video ID from the element clicked
            // var id = $(this).attr('data-youtube-id');
            //
            // // Autoplay when the modal appears
            // // Note: this is intetnionally disabled on most mobile devices
            // // If critical on mobile, then some alternate method is needed
            // var autoplay = '?autoplay=1';
            //
            // // Don't show the 'Related Videos' view when the video ends
            // var related_no = '&rel=0';
            //
            // // String the ID and param variables together
            // var src = '//www.youtube.com/embed/'+id+autoplay+related_no;
            //
            // // Pass the YouTube video ID into the iframe template...
            // // Set the source on the iframe to match the video ID
            // $("#youtube").attr('src', src);

            // Add class to the body to visually reveal the modal
            $("body").addClass("show-video-modal noscroll");

        });

        // Close and Reset the Video Modal
        function close_video_modal() {

            event.preventDefault();

            // re-hide the video modal
            $("body").removeClass("show-video-modal noscroll");

            // reset the source attribute for the iframe template, kills the video
            $("#youtube").attr('src', '');

        }
        // if the 'close' button/element, or the overlay are clicked
        $('body').on('click', '.close-video-modal, .video-modal .overlay', function(event) {

            // call the close and reset function
            close_video_modal();

        });
        // if the ESC key is tapped
        $('body').keyup(function(e) {
            // ESC key maps to keycode `27`
            if (e.keyCode == 27) {

                // call the close and reset function
                close_video_modal();
            }
        });
    }
    toggle_video_modal();

    //datepicker year
    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years"
    });

    //resize banner
    var width = $('.banner-index').width();
    $(window).resize(function(){
        var height = width/2.298;
        $('.banner-index').css({
            'height': height,
        });
    }).resize();

    // $('.item-papi .sub').slideUp();
    $('.toggle-index').on('click', function (e) {
        e.preventDefault();
        // $('.item-papi .sub').toggle(400);
    });

    $('.item-papi').click(function(){
        $('.toggle-index i').attr('class','fa fa-angle-right');
        if($(this).hasClass('active-faq')){
            $(this).children('.sub').slideUp();
            $(this).removeClass('active-faq');
            $(this).find('.toggle-index i').attr('class','fa fa-angle-right');
        }else{
            $('.sub').slideUp();
            $(this).children('.sub').slideDown();
            $('.item-papi').removeClass('active-faq');
            $(this).addClass('active-faq');
            $(this).find('.toggle-index i').attr('class','fa fa-angle-down');
        }
    });

    var width_iframe = $('.notify-des iframe').width();
    var ratio = 1.778;

    var width_slide_single = $('.slider-single').width();
    var ratio_slide_single  = 1.72;

    function resize_img(freme, int) {
        var width_iframe = $(freme).width();
        $(window).resize(function(){
            var height_iframe = width_iframe/int;
            $(freme).css({
                'height': height_iframe,
            });
        }).resize();
    }
    resize_img(width_iframe, ratio);
    resize_img(width_slide_single, ratio_slide_single);

    //modal sale car
    $('a[href$="#modalsalecar"]').on( "click", function() {
        $('#modalsalecar').modal('show');
    });

    //search more
    $('.btn_more').on('click', function (e) {
        e.preventDefault();
    });

    $('.double-slider input[type="range"]').on('input', function(e){
        // Split the elements From/To Slider and From/To values so you can handle them separtely
        const fromSlider = $(this).parent().children('input[type="range"].from'),
            toSlider = $(this).parent().children('input[type="range"].to'),
            fromValue = parseInt($(this).parent().children('input[type="range"].from').val()),
            toValue = parseInt($(this).parent().children('input[type="range"].to').val()),
            currentlySliding = $(this).hasClass('from') ? 'from' : 'to',
            outputElemFrom = $(this).parent().children('.value-output.from'),
            outputElemTo = $(this).parent().children('.value-output.to');

        // Check which slider has been adjusted and prevent them from crossing each other
        if(currentlySliding == 'from' && fromValue >= toValue){
            fromSlider.val((toValue - 1));
            fromValue = (toValue - 1);
        } else if(currentlySliding == 'to' && toValue <= fromValue){
            toSlider.val((fromValue + 1));
            toValue = (fromValue + 1);
        }

        // Updating the output values so they mirror the current slider's value
        outputElemFrom.html(fromValue);
        outputElemTo.html(toValue);

        // Caluculating and setting the progressbar widths
        $('.progressbar_from').css('width', ((fromSlider.width() / parseInt(fromSlider[0].max)) * fromSlider[0].value)  + "px");
        $('.progressbar_to').css('width', (toSlider.width() - ((toSlider.width() / parseInt(toSlider[0].max)) * toSlider[0].value))  + "px");

    });


});


