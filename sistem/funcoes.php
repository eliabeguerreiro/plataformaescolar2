<?php
function Aulas ($id){

    $sql = "SELECT video1, video2, video3, video4 FROM aulas WHERE id ='" .$id. "'";
    $videos = mysqli_fetch_array(mysqli_query($conn, $sql)); 
    return($videos);
}