<?php
// Replace 'secret' with your actual secret word
$secretWord = 'secret';

// Check if the secret matches
if (isset($_POST['secret']) && strtolower($_POST['secret']) === $secretWord) {
  $response = array('isValid' => true);
} else {
  $response = array('isValid' => false);
}

// Send the response back to the client-side
header('Content-Type: application/json');
echo json_encode($response);
?>
