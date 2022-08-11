<?php
require_once("../includes/config.php");

if(isset($_POST["videoId"])  && isset($_POST["username"])) {
    $query = $con->prepare("UPDATE videoprogress SET finished=1, progress=0 WHERE username=:username AND videoId=:videoId");
    $query->bindvalue(":username", $_POST["username"]);
    $query->bindvalue(":videoId", $_POST["videoId"]);   
       

    $query->execute();



}
else {
    echo "No id or username has been passed into the file";
}
?>