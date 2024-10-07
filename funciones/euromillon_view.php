<?php
include 'euromillon.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Euromillón</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    .center-content {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .content-box {
      border: 3px solid #28a745;
      padding: 40px;
      border-radius: 10px;
      text-align: center;
      background-color: #f9f9f9;
    }
    .lottery-number {
      font-size: 3rem;
      font-weight: bold;
      color: #007bff;
    }
    .estrella {
      color: gold;
      font-size: 2rem;
    }
  </style>
</head>
<body>
    
<div class="center-content">
    <div class="content-box">
      <h3>Número ganador Euromillón</h3>
      <div class="lottery-number">
        <?php 
        echo euromillon(); 
        ?>
      </div>
    </div>
  </div>



</body>
</html>
