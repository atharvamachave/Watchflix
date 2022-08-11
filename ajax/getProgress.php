<?php
require_once("../includes/config.php");

if(isset($_POST["videoId"])  && isset($_POST["username"])) {
    $query = $con->prepare("SELECT progress FROM videoprogress WHERE username=:username AND videoId=:videoId");
    $query->bindvalue(":username", $_POST["username"]);
    $query->bindvalue(":videoId", $_POST["videoId"]);   
       
    $query->execute();
    echo $query->fetchColumn();

}
else {
    echo "No id or username has been passed into the file";
}
?>