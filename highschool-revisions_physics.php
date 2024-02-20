<!-- highschool-revisions_physics.php -->

<?php
// Function to fetch and display physics videos
function displayPhysicsVideos()
{
    $physicsVideosPath = 'highschool-revisions/physics_videos/';

    // Get all files in the directory
    $videos = glob($physicsVideosPath . '*.mp4');

    // Check if there are videos
    if ($videos) {
        echo '<div class="video-list">';
        foreach ($videos as $video) {
            // Extract video name from the path
            $videoName = pathinfo($video, PATHINFO_FIENAMEL);

            // Display video name and preview (modify as needed)
            echo '<p>' . $videoName . '</p>';
            echo '<video width="320" height="240" controls>';
            echo '<source src="' . $video . '" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
        }
        echo '</div>';
    } else {
        echo '<p>No videos available for Physics.</p>';
    }
}

// Display physics videos
displayPhysicsVideos();
?>
