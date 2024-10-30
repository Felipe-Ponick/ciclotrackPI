<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['section3'] = $_POST;

    // Lógica para calcular a aptidão
    $total_questions = 9;
    $total_yes_answers = 0;

    // Seção 1
    if ($_SESSION['section1']['chest_pain'] == 'yes') $total_yes_answers++;
    if ($_SESSION['section1']['heart_issue'] != 'no_no') $total_yes_answers++;
    if ($_SESSION['section1']['dizziness'] == 'yes') $total_yes_answers++;
    if ($_SESSION['section1']['medication'] == 'yes') $total_yes_answers++;

    // Seção 2
    if ($_SESSION['section2']['stairs'] == 'no') $total_yes_answers++;
    if ($_SESSION['section2']['walking'] == 'no') $total_yes_answers++;
    if ($_SESSION['section2']['simple_tasks'] == 'no') $total_yes_answers++;

    // Seção 3
    if ($_POST['joint_pain'] == 'yes') $total_yes_answers++;
    if ($_POST['limb_pain'] == 'yes') $total_yes_answers++;

    // Calcula a porcentagem de aptidão
    $aptitude_percentage = 100 - (($total_yes_answers / $total_questions) * 100);

    header('Location: result.php?percentage=' . $aptitude_percentage);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Avaliação de Saúde - Seção 3</title>
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
        font-size: 2.5em;
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
        <h1>Seção 3 - Avaliação de Mobilidade e Condições Físicas</h1>
    <form action="quiz3.php" method="POST">
        <div class="question">
            <label for="joint_pain">Possui algum problema nas articulações que causa dor?</label><br>
            <input type="radio" name="joint_pain" value="yes" required> Sim<br>
            <input type="radio" name="joint_pain" value="no"> Não
        </div>

        <div class="question">
            <label for="limb_pain">Sente dor nos membros ao praticar atividades físicas?</label><br>
            <input type="radio" name="limb_pain" value="yes" required> Sim<br>
            <input type="radio" name="limb_pain" value="no"> Não
        </div>

        <input type="submit" value="Finalizar Quiz">
    </form>
</body>
</html>
