// video_handler.js

document.addEventListener('DOMContentLoaded', function () {
    var videos = document.querySelectorAll('video');
    videos.forEach(function (video) {
        video.addEventListener('play', function () {
            setTimeout(function () {
                video.pause();
                alert('Preview time expired. Please unlock the video to continue watching.');
            }, 120000); // 2 minutes
        });
    });
});
