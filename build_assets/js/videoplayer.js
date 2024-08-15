$(document).ready(function() {
    // Function to show pause button
    var showPauseButton = function(pauseBtn) {
        pauseBtn.css('display', 'block');
    };

    // Function to hide pause button
    var hidePauseButton = function(pauseBtn) {
        pauseBtn.css('display', 'none');
    };

    // Play/Pause functionality
    function playPause(video, playBtn, pauseBtn) {
        if (video.length && video[0].paused) {
            console.log('Playing video');
            video.trigger('play');
            playBtn.css('display', 'none');
            pauseBtn.css('display', 'block');

            video.on('mouseover', function() { showPauseButton(pauseBtn); });
            video.on('mouseout', function() { hidePauseButton(pauseBtn); });
            pauseBtn.on('mouseover', function() { showPauseButton(pauseBtn); });
            pauseBtn.on('mouseout', function() { hidePauseButton(pauseBtn); });

            video.on('pause', function() {
                console.log('Video paused');
                playBtn.css('display', 'block');
                pauseBtn.css('display', 'none');

                video.off('mouseover mouseout');
                pauseBtn.off('mouseover mouseout');
            });
        } else {
            console.log('Pausing video');
            video.trigger('pause');
        }
    }

    // Event delegation for play buttons in video sections
    $('.video-gallery, .videography__video, .video-play__video').on('click', '.PlayButton', function() {
        var playBtn = $(this);
        var pauseBtn = playBtn.siblings('.PauseButton');
        var video = playBtn.closest('.video-gallery__slider__item, .videography__video, .video-play__video').find('video');

        // Ensure the video element was found
        if (video.length === 0) {
            console.log('No video element found');
            return;
        }

        // Pause all videos except the one to be played
        $('video').each(function() {
            if (!$(this).is(video)) {
                console.log('Pausing other video');
                $(this).trigger('pause');
                this.currentTime = 0; // Reset the video to the beginning
            }
        });

        playPause(video, playBtn, pauseBtn);
    });

    // Event delegation for pause buttons in video sections
    $('.video-gallery, .videography__video, .video-play__video').on('click', '.PauseButton', function() {
        var pauseBtn = $(this);
        var playBtn = pauseBtn.siblings('.PlayButton');
        var video = pauseBtn.closest('.video-gallery__slider__item, .videography__video, .video-play__video').find('video');

        // Ensure the video element was found
        if (video.length === 0) {
            console.log('No video element found');
            return;
        }

        playPause(video, playBtn, pauseBtn);
    });

    // Initial state setup for all videos
    $('.video-gallery__slider__item, .videography__video, .video-play__video').each(function() {
        var playBtn = $(this).find('.PlayButton');
        var pauseBtn = $(this).find('.PauseButton');
        hidePauseButton(pauseBtn);
        playBtn.css('display', 'block');
    });

    // Slider initialization (assuming Slick)
    $('.video-gallery__slider').slick({
        // Your Slick slider settings here
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: true,
    });

    // Reset and pause videos on slide change
    $('.video-gallery__slider').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        console.log('Slide is changing, pausing all videos');
        $('.video-gallery__slider__item video').each(function() {
            $(this).trigger('pause');
            this.currentTime = 0; // Reset the video to the beginning
        });

        $('.video-gallery__slider__item .PlayButton').css('display', 'block');
        $('.video-gallery__slider__item .PauseButton').css('display', 'none');
    });
});
