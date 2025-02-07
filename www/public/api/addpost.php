<?php
/**
 * Lägger till en post
 * 
 * @param $_POST['post_txt']  Postade texten
 * @return {"success": true/false} beroende på om det gick att lägga till en post
 */
session_start();
$success = false;

// Egen kod!
// $_SESSION['uid'] skall kontrolleras

$result['success'] =  $success;

header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE);
