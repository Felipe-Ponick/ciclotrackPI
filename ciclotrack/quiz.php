<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['section1'] = $_POST;
    header('Location: quiz2.php');  // Caminho relativo
    exit;
}
include "layout/header/header.php";
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Avaliação de Saúde - Seção 1</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    /* Estilo principal */
    main {
        font-family: 'Arial', sans-serif;
        background-color: #f0f8f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        flex-direction: column;
        padding: 20px;
    }

    /* Estilo do título */
    h1 {
        color: #45a049;
        text-align: center;
        margin-bottom: 30px;
        font-size: 2.5rem;
        font-weight: bold;
    }

    /* Estilo do formulário */
    form {
        max-width: 600px;
        width: 100%;
        padding: 30px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Estilo das perguntas */
    .question {
        font-size: 1.7rem;
        color: #333;
    }

    .question label {
        margin-bottom: 10px;
        display: block;
        
    }

    /* Estilo dos inputs */
    .question input[type="radio"] {
        transform: scale(1.5);
        margin-right: 4px;
    }

    /* Botão de envio */
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 15px 30px;
        border: none;
        cursor: pointer;
        border-radius: 8px;
        font-size: 20px;
        display: block;
        width: 100%;
        margin-top: 20px;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Estilo para os inputs de radio */
    input[type="radio"]:checked {
        background-color: #4CAF50;
        border-color: #4CAF50;
    }
    </style>
</head>

<main>
    <h1>Seção 1 - Avaliação Geral de Saúde</h1>
    
    <form action="quiz.php" class="formularioquiz" method="POST">
        <div class="question">
            <label for="chest_pain">Você sente dor no peito quando realiza algum esforço físico?</label>
            <input type="radio" name="chest_pain" value="yes" required> Sim
            <input type="radio" name="chest_pain" value="no"> Não
        </div>

        <div class="question">
            <label for="heart_issue">Já foi diagnosticado com algum problema cardíaco?</label>
            <input type="radio" name="heart_issue" value="yes_yes" required> Sim
            <input type="radio" name="heart_issue" value="no_no"> Não
        </div>

        <div class="question">
            <label for="dizziness">Já teve episódios de tontura ou desmaios inesperados?</label>
            <input type="radio" name="dizziness" value="yes" required> Sim
            <input type="radio" name="dizziness" value="no"> Não
        </div>

        <div class="question">
            <label for="medication">Está utilizando algum medicamento que possa afetar funções vitais?</label>
            <input type="radio" name="medication" value="yes" required> Sim
            <input type="radio" name="medication" value="no"> Não
        </div>

        <input type="submit" value="Próxima Seção">
    </form>
</main>
</html>
