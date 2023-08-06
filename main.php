<?php


$secretWordEncoded = base64_encode('secret');
$secretWord = base64_decode($secretWordEncoded);
function showCorrectMessage() {
    echo '<div class="message correct"><strong>Congratulations!</strong> You found the secret word!</div>';
    header('Location: congratulations.php');
    
    echo '<script>alert("Congratulations! You found the secret word!");</script>';
    exit();
  }
  
  function showWrongMessage() {
    echo '<div class="message wrong"><strong>Oops!</strong> Try again!</div>';
    echo '<script>alert("Oops! Try again!");</script>';
  }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $userInput = isset($_POST['userInput']) ? $_POST['userInput'] : '';
  $userInput = strtolower(trim($userInput));

  if ($userInput === $secretWord) {
    showCorrectMessage();
  } else {
    showWrongMessage();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Secret Word Game</title>
  <style>
body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-color: #f0f0f0;
      margin: 0;
    }

    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 320px;
    }

    h1 {
      margin-top: 0;
      color: #007bff;
    }

    .input-box {
      padding: 10px;
      font-size: 16px;
      border: 2px solid #007bff;
      border-radius: 4px;
      width: 95%;
      margin-bottom: 10px;
    }

    .message.correct, .message.wrong {
      display: none;
      font-size: 18px;
      color: #fff;
      margin-top: 10px;
      padding: 8px 16px;
      border-radius: 4px;
    }

    .message.correct {
      background-color: #28a745;
    }

    .message.wrong {
      background-color: #dc3545;
    }

    .submit-button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    .submit-button:hover {
      background-color: #0056b3;
    }
    .logo {
        position: absolute;
    top: 191px;
    left: 869px;
    width: 167px
} /* Adjust the width as needed */
    
        
  </style>
</head>
<body>
  <div class="container">
  <img class="logo" src="logo.png" alt="Logo">
    <h1>Secret Word Game</h1>
    <form method="post">
      <input type="text" class="input-box" name="userInput" placeholder="Enter the secret word">
      <button class="submit-button" type="submit">Submit</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if ($userInput === $secretWord) {
        showCorrectMessage();
      } else {
        showWrongMessage();
      }
    }
    
         
    ?>
  </div>
</body>
</html>
