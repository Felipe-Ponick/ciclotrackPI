<?php
session_start();
$aptitude_percentage = isset($_GET['percentage']) ? $_GET['percentage'] : 0;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Final</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8f5;
            margin: 50px;
            margin-top: 250px;
        }
        .result {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
        }
        .percentage {
            font-size: 24px;
            color: #4CAF50;
            font-weight: bold;
        }
        input[type="button"] {
            background-color: #007BFF; /* Cor do botão */
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 20px; /* Espaçamento acima do botão */
        }
        input[type="button"]:hover {
            background-color: #0056b3; /* Cor ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="result">
        <h1>Resultado da Avaliação</h1>
        <p>Sua aptidão para iniciar atividades físicas como andar de bicicleta é de:</p>
        <p class="percentage"><?php echo round($aptitude_percentage); ?>%</p>

        <?php if ($aptitude_percentage < 50): ?>
            <p>Recomendamos que você consulte um médico antes de começar atividades físicas.</p>
        <?php elseif ($aptitude_percentage < 75): ?>
            <p>Você está em condições razoáveis, mas sugerimos acompanhamento médico para melhor segurança.</p>
        <?php else: ?>
            <p>Parabéns! Você está apto para iniciar atividades físicas leves como andar de bicicleta.</p>
        <?php endif; ?>

        <input type="button" value="Refazer o Quiz" onclick="window.location.href='quiz.php'">
        <input type="button" value="Fazer Login" onclick="window.location.href='login.php'"> <!-- Substitua pela URL real -->
    </div>
</body>
</html>
