
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Congratulations</title>
  <style>
    /* CSS styles for the Congratulations page */
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
      text-align: center;
      padding: 20px;
      position: relative;
    }

    h1 {
      margin-top: 0;
      color: #28a745;
      font-size: 32px;
    }

    p {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
    }

    /* Congratulations Party Paper Pops animation */
    @keyframes rotate {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    .party-paper-pop {
      display: inline-block;
      width: 10px;
      height: 10px;
      background-color: #ffbe0b;
      position: absolute;
      animation: rotate 1s linear infinite;
      transform-origin: bottom;
      border-radius: 50%;
    }

    .pop-1 {
      left: 10%;
      animation-delay: 0s;
    }

    .pop-2 {
      left: 25%;
      animation-delay: 0.3s;
    }

    .pop-3 {
      left: 40%;
      animation-delay: 0.7s;
    }

    .pop-4 {
      left: 55%;
      animation-delay: 0.4s;
    }

    .pop-5 {
      left: 70%;
      animation-delay: 0.9s;
    }

    .pop-6 {
      left: 85%;
      animation-delay: 0.2s;
    }

    /* Burst confetti animation */
    @keyframes burstConfettiAnimation {
      0% {
        opacity: 0;
        transform: translateY(0) scale(0);
      }
      100% {
        opacity: 1;
        transform: translateY(-100px) scale(1);
      }
    }
    .confetti {
      width: 10px;
      height: 10px;
      background-color: #f00;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 50%;
      z-index: 1;
      animation: confettiAnimation 2s ease-out forwards;
      animation: burstConfettiAnimation 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards,
                 fadeOutAnimation 1s ease-in-out forwards 0.5s;
    }
    
    @keyframes fadeOutAnimation {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
      }
    }

    
    /* Logo styles */
    .logo {
      position: absolute;
      top: -316px;
    left: 86px;
    width: 168px /* Adjust the width as needed */
    }
  </style>
</head>
<body>
  <div class="container">
  <img class="logo" src="logo.png" alt="Logo">
    <h1>Congratulations!</h1>
    <p>You found the secret word! Great job!</p>
    <div class="party-paper-pop pop-1"></div>
    <div class="party-paper-pop pop-2"></div>
    <div class="party-paper-pop pop-3"></div>
    <div class="party-paper-pop pop-4"></div>
    <div class="party-paper-pop pop-5"></div>
    <div class="party-paper-pop pop-6"></div>
    <!-- Burst confetti -->
    <?php
      $numConfetti = 100;
      for ($i = 0; $i < $numConfetti; $i++) {
        $randomSize = rand(6, 12);
        $randomColor = sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        $randomPositionX = rand(0, 100);
        $randomPositionY = rand(-50, 100);
        echo "<div class='confetti' style='width: {$randomSize}px; height: {$randomSize}px; background-color: {$randomColor}; top: {$randomPositionY}%; left: {$randomPositionX}%'></div>";
      }
    ?>
  </div>
</body>
</html>
