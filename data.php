<?php
require 'config.php';

$q = $_REQUEST['query'] ?? null;
$id = $_GET['id'] ?? null;
if ($q == 'questions' && isset($id)) {
    $questionQuery = mysqli_query($con, "SELECT * FROM quiz WHERE id = $id LIMIT 1");
    $question = $questionQuery->fetch_assoc();
    return json_response($question);
}else{
    header('Location: /');
}

function json_response($data = null, $httpStatus = 200)
{
    header_remove();

    header("Content-Type: application/json");

    http_response_code($httpStatus);

    echo json_encode($data);

    exit();
}
