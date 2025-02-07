<?php
/**
 * Lägger till en kommentar
 * 
 * @param $_POST['pid']  pid för post som skall kommenteras
 * @param $_POST['comment_txt']  pid för post som skall kommenteras
 * @return {"success": true/false} beroende på om det gick att lägga till en post
 */
session_start();
include('../../model/DbEgyTalk.php');
$db = new DbEgyTalk();

$success = false;

// Egen kod!
// $_SESSION['uid'] skall kontrolleras

$result['success'] =  $success;

header('Content-Type: application/json');

echo json_encode($result, JSON_UNESCAPED_UNICODE);