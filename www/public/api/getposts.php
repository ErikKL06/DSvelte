<?php
/**
 * Hämtar inlägg (och kommentarer) för en specifik användare om användaren är inloggad
 * 
 * @return array $result Innehåller inlägg för den specifika användaren om användaren är inloggad och användar-ID är giltigt, annars tom array
 */
session_start();
$result= [];

// Egen kod!
// $_SESSION['uid'] skall kontrolleras

header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE);