<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['section2'] = $_POST;
    header('Location: quiz3.php');  // Caminho relativo
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Avaliação de Saúde - Seção 2</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8f5;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    h1 {
        color: #4CAF50;
        text-align: center;
        font-size: 2.0em;
        margin-bottom: 20px;
    }

    form {
        max-width: 600px;
        width: 100%;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    label {
        color: #333;
        font-size: 1.1em;
    }

    .question {
        margin-bottom: 20px;
    }

    input[type="radio"] {
        transform: scale(1.3);
        margin-right: 10px;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 15px 30px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1.2em;
        display: block;
        margin: 0 auto;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>


</head>
<body>
        <h1>Seção 2 - Avaliação de Capacidade Física</h1>
    <form action="quiz2.php" method="POST">
        <div class="question">
            <label for="stairs">Você consegue subir dois lances de escadas sem sentir fadiga?</label><br>
            <input type="radio" name="stairs" value="yes" required> Sim<br>
            <input type="radio" name="stairs" value="no"> Não
        </div>

        <div class="question">
            <label for="walking">Você anda por mais ou menos 30 minutos frequentemente?</label><br>
            <input type="radio" name="walking" value="yes" required> Sim<br>
            <input type="radio" name="walking" value="no"> Não
        </div>

        <div class="question">
            <label for="simple_tasks">Consegue realizar atividades simples do dia a dia sem dor?</label><br>
            <input type="radio" name="simple_tasks" value="yes" required> Sim<br>
            <input type="radio" name="simple_tasks" value="no"> Não
        </div>

        <input type="submit" value="Próxima Seção">
    </form>
</body>
</html>
