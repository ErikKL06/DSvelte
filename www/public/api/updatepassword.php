<?php
/**
 * Ändrar lösenordet för den inloggade användaren
 * 
 * @param string $_POST['pwd']    Det nya lösenordet
 * @param string $_POST['oldpwd'] Det gamla lösenordet
 * @return array {"success": true/false}
 */
session_start();
$result['success'] = false;

// Egen kod!
// $_SESSION['uid'] skall kontrolleras

header('Content-Type: application/json');
echo json_encode($result, JSON_UNESCAPED_UNICODE); 