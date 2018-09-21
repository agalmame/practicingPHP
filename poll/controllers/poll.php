<?php
include_once "models/poll.class.php";
$poll = new Poll($db);
if(isset($_POST['user-answer'])){
    $answer=$_POST['user-answer'];
    $poll->updatePoll($answer);
}
$pollData = $poll->getPollData();
$pollView = include_once "views/poll.php";
return $pollView;
?>