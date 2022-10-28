<?php 
//headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

//response data
$my_details = array();
$my_details['slackUsername'] = 'Ab3id';
$my_details['backend'] = true;
$my_details['age'] = 23;
$my_details['bio'] = 'Software Engineer passionate automating and solving complex and simple tasks through technology.';

//response code
http_response_code(200);

echo json_encode($my_details);

?>