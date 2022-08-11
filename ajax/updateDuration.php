<?php
require_once("../includes/config.php");

if(isset($_POST["videoId"])  && isset($_POST["username"]) && isset($_POST["progress"])) {
    $query = $con->prepare("UPDATE videoprogress SET progress=:progress, dateModified=NOW() WHERE username=:username AND videoId=:videoId");
    $query->bindvalue(":username", $_POST["username"]);
    $query->bindvalue(":videoId", $_POST["videoId"]);   
    $query->bindvalue(":progress", $_POST["progress"]);   

    $query->execute();



}
else {
    echo "No id or username has been passed into the file";
}
?>