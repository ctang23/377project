<?php

require "../login/dbinfo.php";
session_start();

$username = $_SESSION['usern']; //username pulled from login page
$video = $_POST['videoID']; //videoID (oneone, onetwo, etc) on the drop down menu
$status = "Complete"; //set the status to Complete when the user submits the video they finished

$sql = "UPDATE Progress SET Status='$status' WHERE User_Username='crystal' && videoID='$video'";

$result = mysqli_query($conn, $sql);

echo("<script>alert('Completion added!')</script>"); // notify user completion was successful
echo("<script>window.location = 'test.html';</script>"); // redirect user to video page again

mysqli_close($conn);

?>