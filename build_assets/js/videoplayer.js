$(document).ready(function() {
    // video playing 
    var video = $('video');
    var playBtn = $('.PlayButton'); 
    var pauseBtn = $('.PauseButton'); 
    
    var played = false;
    
    // Function to show pause button
    var showPauseButton = function() {
        if (played) {
            pauseBtn.css('display', 'block');
        }
    };
    
    // Function to hide pause button
    var hidePauseButton = function() {
        pauseBtn.css('display', 'none');
    };
    
    // Event listeners for the video
    video.on('playing', function() {
        played = true;
        playBtn.css('display', 'none');
        pauseBtn.css('display', 'none');
    
        video.on('mouseover', showPauseButton);
        pauseBtn.on('mouseover', showPauseButton);

        video.on('mouseout', hidePauseButton);
        pauseBtn.on('mouseout', hidePauseButton);
    });
    
    video.on('pause', function() {
        played = false;
        playBtn.css('display', 'block');
        pauseBtn.css('display', 'none');
    });
    
    // Play/Pause functionality
    function playPause() {
        if (!played) {
            video.trigger('play');
        } else {
            video.trigger('pause');
        }
    }
    playBtn.on('click', playPause);
    pauseBtn.on('click', playPause);
});
