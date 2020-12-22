<?php 
$pageTitle = 'Verse of the Day';
$pageDescription = 'My name is Nick Garcia and I am a Web Developer based out of Austin, TX. I primarily do front-end development for Non-Profits, Churches, Small Businesses, and musicians.';
$OGpageTitle = 'Verse of the Day';
$OGpageUrl = $_SERVER['REQUEST_URI'];
$OGpageImage = 'http://nickagarcia.com/images/verse.jpg';
$OGpageDescription = 'Using the YouVersion Bible app, I make a daily video discussing the verse of the day.';
?>

<?php
include 'header.php';
?>


<?php
$api_key = 'AIzaSyCyiNh90YLET9IW5Mzv5rnVa3QwC87XtO4';
$playlist_id =  'PLuOLDLJB-pFKhxWw-wELFnjRdooyWVaqH'; 
$api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=10&playlistId='. $playlist_id . '&key=' . $api_key;
      
$playlist = json_decode(file_get_contents($api_url));

?>



<div class="videos">
<h2 class="page-title">Verse of the Day</h2>
<div class="latest-video">
<?php foreach($playlist->items AS $item): ?>




<?php if ($item->snippet->position == 0): ?>
  
<h4><?php echo $item->snippet->title;  ?></h4>
  <div class="embed-responsive embed-responsive-16by9 video-container">
   <div data-id="<?php echo $item->snippet->resourceId->videoId; ?>"></div>

  </div>
  <div class="video-description"><?php echo $item->snippet->description;  ?></div>

<?php else: ?>
  <?php endif; ?>
<?php endforeach; ?>

<div class="show-more">
For more Verse of the Day videos,<br> check out my <a href="https://www.youtube.com/playlist?list=PLuOLDLJB-pFKhxWw-wELFnjRdooyWVaqH" target="_blank">YouTube channel</a>.</div>
<div class="fb-comments" data-href="http://nickagarcia.com/?page=playlist" data-width="100%" data-numposts="10"></div>
</div>



<div class="video-sidebar">
  <?php foreach($playlist->items AS $item): ?>
  <?php if ($item->snippet->position == 0): ?>
    <div class="all-videos hide" id="current-video">
<h4><?php echo $item->snippet->title;  ?></h4>
    <a href="javascript:void(0)">
   <img src="https://img.youtube.com/vi/<?php echo $item->snippet->resourceId->videoId; ?>/mqdefault.jpg" alt="<?php echo $item->snippet->title;  ?>" data-video-id="<?php echo $item->snippet->resourceId->videoId; ?>">
   <i class="play-icon"></i>

   </a>
</div>
  <?php else: ?>
  <div class="all-videos">
<h4><?php echo $item->snippet->title;  ?></h4>
  <!--<a href="https://youtu.be/<?php echo $item->snippet->resourceId->videoId; ?>?list=<?php echo $playlist_id; ?>" target="_blank">-->
    <a href="javascript:void(0)">
   <img src="https://img.youtube.com/vi/<?php echo $item->snippet->resourceId->videoId; ?>/mqdefault.jpg" alt="<?php echo $item->snippet->title;  ?>" data-video-id="<?php echo $item->snippet->resourceId->videoId; ?>">
   <i class="play-icon"></i>

   </a>
</div>
<?php endif; ?>
<?php endforeach; ?>
<div class="clearfix"></div>
</div>







</div>

<script>
// 2. This code loads the IFrame Player API code asynchronously.
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player, iframe, ifram2;
//var $ = document.querySelector.bind(document);

function onYouTubePlayerAPIReady() {
    var players = document.querySelectorAll('.video-container div')
    for (var i = 0; i < players.length; i++) {
        new YT.Player(players[i], {
            events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        },
            playerVars: {
                'autoplay': 0,
                'modestbranding': 1,
                'showinfo': 0,
                'rel': 0
            },
            videoId: players[i].dataset.id
        });
    }
}

// 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
    //event.target.playVideo();
    var player = event.target;
    iframe = document.getElementById('player');
    //iframe2 = document.getElementById('player2');
    setupListener();
}

function setupListener() {
}

function playVideo() {
    player.playVideo();
    //player2.playVideo();
}


// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.
var done = false;

function onPlayerStateChange(event) {
    /*if (event.data == YT.PlayerState.PLAYING && !done) {
        setTimeout(stopVideo, 6000);
        done = true;
    }*/
}

function stopVideo() {
    player.stopVideo();
    //player2.stopVideo();
}
</script>



