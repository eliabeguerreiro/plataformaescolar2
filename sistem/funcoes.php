<?php

function Aulas ($id){
    include_once("conexao.php");
    $sql = "SELECT video1, video2, video3, video4 FROM aulas WHERE id ='" .$id. "'";
    $videos = mysqli_fetch_array(mysqli_query($conn, $sql)); 
    return($videos);
}

function Video($video){
echo "<script>";
?>
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubePlayerAPIReady() {
  player = new YT.Player('ytplayer', {
    height: '600',
    width: '640',
    videoId: '<?php echo$video;?>'
  });
}
<?php
echo "</script>";
}