<?php
/**
 * Hämtar inställningar för den inloggade användaren
 * Inställningarna kan var mail och phone om det är tillagt i tabellen user
 * 
 * @return  {mail, phone}|null
 */
session_start();
$result = null;

// Egen kod!
// $_SESSION['uid'] skall kontrolleras

header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE);
