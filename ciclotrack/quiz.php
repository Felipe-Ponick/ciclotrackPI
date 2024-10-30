<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['section1'] = $_POST;
    header('Location: quiz2.php');  // Caminho relativo
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Avaliação de Saúde - Seção 1</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f8f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column; /* Para alinhar o h1 e o form verticalmente */
    }
    h1 {
        color: #45a049;
        text-align: center; /* Centraliza o h1 */
        margin-bottom: 20px; /* Espaço entre o h1 e o formulário */
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
        transform: scale(1.5);
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
        <h1>Seção 1 - Avaliação Geral de Saúde</h1>
    
    <form action="quiz.php" method="POST">
        <div class="question">
            <label for="chest_pain">Você sente dor no peito quando realiza algum esforço físico?</label><br>
            <input type="radio" name="chest_pain" value="yes" required> Sim<br>
            <input type="radio" name="chest_pain" value="no"> Não
        </div>

        <div class="question">
            <label for="heart_issue">Já foi diagnosticado com algum problema cardíaco?</label><br>
            <input type="radio" name="heart_issue" value="yes_yes" required> Sim, Sim<br>
            <input type="radio" name="heart_issue" value="no_no"> Não, Não<br>
            <input type="radio" name="heart_issue" value="yes_no"> Sim, Não<br>
            <input type="radio" name="heart_issue" value="no_yes"> Não, Sim
        </div>

        <div class="question">
            <label for="dizziness">Já teve episódios de tontura ou desmaios inesperados?</label><br>
            <input type="radio" name="dizziness" value="yes" required> Sim<br>
            <input type="radio" name="dizziness" value="no"> Não
        </div>

        <div class="question">
            <label for="medication">Está utilizando algum medicamento que possa afetar funções vitais?</label><br>
            <input type="radio" name="medication" value="yes" required> Sim<br>
            <input type="radio" name="medication" value="no"> Não
        </div>

        <input type="submit" value="Próxima Seção">
    </form>
</body>
</html>
