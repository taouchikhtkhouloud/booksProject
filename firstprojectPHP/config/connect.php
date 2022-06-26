<?php 
$conn = mysqli_connect('localhost', 'khouloud', 'khouloud123', 'bookproject');
if(!$conn){
    echo 'connection error:' . mysqli_connect_error();
}
?>