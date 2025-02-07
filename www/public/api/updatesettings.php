<?php
/**
 * Uppdaterar inställningar för den inloggade användaren.
 * Förutsätter att tabellen user utökats med mail och phone.
 * 
 * @param string $_POST['phone'] (valfritt) Det nya telefonnumret
 * @param string $_POST['mail']  (valfritt) Den nya e-postadressen
 * @return array $result['success'] Innehåller true om inställningarna uppdaterades framgångsrikt, annars false
 */
session_start();
$result['success'] = false;
$settings = [];

if (isset($_SESSION['uid'])) {
   // Egen kod! 
   
}

header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE);
