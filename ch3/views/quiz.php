<?php
$output = include_once "quiz-form.php";

$quizIsSubmited = isset($_POST['quiz-submitted']);
if($quizIsSubmited){
    $answer = $_POST['answer'];
    // foreach($_POST as $key => $value){
    //     $post .= "<p>{$key}:{$value}</p>";
    // }
    return "<pre>". print_r($_POST,true)."</pre>". showQuiz($answer);
     

}

function showQuiz($a){
    $response = "<p> YOU CHOOSE $a";
    $response .= "<p><a href = 'index.php?page=quiz' >try agian</a></p> ";
    return $response;
}

return $output;
 ?>