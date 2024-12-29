<?php
header('Content-Type: application/json');

require_once '../contact.php';

$response = array('status' => 'success', 'message' => 'Email sent successfully!');
echo json_encode($response);
?>
