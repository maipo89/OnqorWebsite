$(document).ready(function() {
   // video playing 
    var video = $('video');
    var playBtn = $('.PlayButton'); 
    var pauseBtn = $('.PauseButton'); 
    
    var played = false;
    
    // Function to show pause button
    var showPauseButton = function() {
        if (played) {
            pauseBtn.style.display = 'block';
        }
    };
    
    // Function to hide pause button
    var hidePauseButton = function() {
        pauseBtn.style.display = 'none';
    };
    
    // Event listeners for the video
    video.addEventListener('playing', function() {
        played = true;
        playBtn.style.display = 'none';
        pauseBtn.style.display = 'none';
    
        video.addEventListener('mouseover', showPauseButton);
        pauseBtn.addEventListener('mouseover', showPauseButton);

        video.addEventListener('mouseout', hidePauseButton);
        pauseBtn.addEventListener('mouseout', hidePauseButton);
    });
    
    video.addEventListener('pause', function() {
        played = false;
        playBtn.style.display = 'block';
        pauseBtn.style.display = 'none';
    });
    
    // Play/Pause functionality
    function playPause() {
        if (!played) {
            video.play();
        } else {
            video.pause();
        }
    }
    playBtn.addEventListener('click', playPause);
    pauseBtn.addEventListener('click', playPause);
});