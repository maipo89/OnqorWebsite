$(document).ready(function() {
    // Function to show pause button
    var showPauseButton = function(pauseBtn) {
        pauseBtn.css('opacity', '1');
    };

    // Function to hide pause button with a delay
    var hidePauseButton = function(pauseBtn) {
        setTimeout(function() {
            pauseBtn.css('opacity', '0');
        }, 4000); // 2000 milliseconds = 2 seconds
    };

    // Play/Pause functionality
    function playPause(video, playBtn, pauseBtn) {
        if (video.length && video[0].paused) {
            console.log('Playing video');
            video[0].play(); // Using native play method
            playBtn.css('display', 'none');
            pauseBtn.css('display', 'block');
            pauseBtn.css('opacity', '1'); // Ensure opacity is visible initially

            // Event listeners for mouseover and mouseout
            video.on('mouseover touchstart', function() { showPauseButton(pauseBtn); });
            video.on('mouseout touchend', function() { hidePauseButton(pauseBtn); });
            pauseBtn.on('mouseover touchstart', function() { showPauseButton(pauseBtn); });
            pauseBtn.on('mouseout touchend', function() { hidePauseButton(pauseBtn); });

            video.on('pause', function() {
                console.log('Video paused');
                playBtn.css('display', 'block');
                pauseBtn.css('display', 'none');
                pauseBtn.css('opacity', '0'); // Ensure opacity is zero when paused

                // Clear all event handlers
                video.off('mouseover touchstart mouseout touchend');
                pauseBtn.off('mouseover touchstart mouseout touchend');
            });
        } else {
            console.log('Pausing video');
            video[0].pause(); // Using native pause method
        }
    }

    // Event delegation for play buttons
    $('.video-gallery, .videography__video, .video-play__video, .video__media').on('click', '.PlayButton', function() {
        var playBtn = $(this);
        var pauseBtn = playBtn.siblings('.PauseButton');
        var video = playBtn.closest('.video-gallery__slider__item, .videography__video, .video-play__video, .video__media').find('video');

        if (video.length === 0) {
            console.log('No video element found');
            return;
        }

        // Pause all videos except the one to be played
        $('video').each(function() {
            if (!$(this).is(video)) {
                console.log('Pausing other video');
                $(this)[0].pause();
                this.currentTime = 0; // Reset the video to the beginning
            }
        });

        playPause(video, playBtn, pauseBtn);
    });

    // Event delegation for pause buttons
    $('.video-gallery, .videography__video, .video-play__video, .video__media').on('click', '.PauseButton', function() {
        var pauseBtn = $(this);
        var playBtn = pauseBtn.siblings('.PlayButton');
        var video = pauseBtn.closest('.video-gallery__slider__item, .videography__video, .video-play__video, .video__media').find('video');

        if (video.length === 0) {
            console.log('No video element found');
            return;
        }

        playPause(video, playBtn, pauseBtn);
    });

    // Initial state setup for all videos
    $('.video-gallery__slider__item, .videography__video, .video-play__video, .video__media').each(function() {
        var playBtn = $(this).find('.PlayButton');
        var pauseBtn = $(this).find('.PauseButton');
        hidePauseButton(pauseBtn);
        playBtn.css('display', 'block');
    });

    // Slick slider initialization
    $('.video-gallery__slider').slick({
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
            $(this)[0].pause();
            this.currentTime = 0; // Reset the video to the beginning
        });

        $('.video-gallery__slider__item .PlayButton').css('display', 'block');
        $('.video-gallery__slider__item .PauseButton').css('display', 'none');
    });
});
