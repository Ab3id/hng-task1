<?php
//receiving json post
$postData = json_decode(file_get_contents('php://input'), true);
if($postData != null){
    $response = [];
    $response['slackUsername']  = 'Ab3id';
    switch ($postData['operation_type']) {
        case 'addition':
            $response['result']  = $postData['x'] + $postData['y'];
            $response['operation_type']  = 'addition';
            break;
        case 'subtraction':
            $response['result']  = $postData['x'] - $postData['y'];
            $response['operation_type']  = 'subtraction';
            break;
        case 'multiplication':
            $response['result']  = $postData['x'] * $postData['y'];
            $response['operation_type']  = 'multiplication';
            break;
    }
    http_response_code(200);

   echo json_encode($my_details); 
}