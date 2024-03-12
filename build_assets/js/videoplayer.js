$(document).ready(function() {
   // video playing 
    var video = document.querySelector('video');
    var playBtn = document.querySelector('.PlayButton'); // Adjust if needed
    var pauseBtn = document.querySelector('.PauseButton'); // Adjust if needed
    
    var played = false;
    
    // Function to show pause button
    var showPauseButton = function() {
        if (played) { // Only show if the video is in the played state
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
    
        // Show pause button when video or pause button is hovered
        video.addEventListener('mouseover', showPauseButton);
        pauseBtn.addEventListener('mouseover', showPauseButton);
    
        // Hide pause button when mouse leaves video or pause button
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
    
    // Assuming your play and pause buttons are clickable elements
    playBtn.addEventListener('click', playPause);
    pauseBtn.addEventListener('click', playPause);

    // hide controls except on hover
    
    // Function to toggle video controls
    function toggleVideoControls() {
        if (video.attr("controls")) {
            video.removeAttr("controls");
        } else {
            video.attr("controls", "controls");
        }
    }
    
    // Apply hover event to both the video and the pause button
    video.hover(toggleVideoControls);
    pauseBtn.hover(toggleVideoControls);
});