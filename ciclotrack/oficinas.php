<?php 
include "layout/header/header.php";

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
  // Redireciona para a página de login
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CicloTrack | Oficinas</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        /* Estilos para centralizar o conteúdo da div display-ods */
        .display-ods {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            min-height: 100vh;
            background: linear-gradient(to right,rgb(178, 228, 161), rgb(109, 197, 118), rgb(178, 228, 161)), url(../../assets/svg/common-bg.svg);
        }

        /* Animação de fade-in para o título */
        .display-ods h1 {
            font-size: 4em;
            margin-bottom: 0.5em;
            color: #fff;
            opacity: 0;
            transform: translateY(-50px);
            animation: fadeInUp 1.5s ease-out forwards;
        }

        /* Animação de fade-in para o parágrafo */
        .display-ods p {
            font-size: 2em;
            max-width: 600px; /* Limita a largura do parágrafo para melhor leitura */
            margin-top: 0;
            color: #fff;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeInUp 2s ease-out forwards;
            animation-delay: 0.5s;
        }

        /* Definindo a animação de fade-in e movimento */
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Estilo original do botão */
        .home-hero__cta .btn {
            padding: 20px 30px;
            font-size: 1.8em;
            color: black;
            background-color: #fff; /* Cor para o botão */
            border-radius: 5px;
            text-decoration: none;
        }

        /* Sem efeito de hover adicional */
        .home-hero__cta .btn:hover {
            background-color: green;
            color: #fff; /* Cor de hover sem animação de escala */
        }
    </style>
</head> 

<body class="fundo-branco">

<div class="display-ods"> 
    <h1>Objetivos de Desenvolvimento Sustentável (ODS)</h1>
    <p>Os Objetivos de Desenvolvimento Sustentável (ODS) são 17 objetivos ambiciosos e interligados e 169 metas de ação global, para alcançar até o ano de 2030, que tratam dos principais desafios de desenvolvimento enfrentados pelas pessoas, no Brasil e no mundo.</p>
    <div class="home-hero__cta">
            <a href="./oficinas.php#beneficios fundo-branco" class="btn btn--bg">Venha conhecer</a>
    </div>
</div>
<br><br><br><br><br><br><br><br>
<section id="beneficios fundo-branco">
    <div class="container">
        <div class="topico">
            <p><strong>Redução da emissão de gases poluentes:</strong> A bicicleta não emite gases do efeito estufa, contribuindo diretamente para a melhoria da qualidade do ar e a mitigação das mudanças climáticas.</p>
        </div>
        <div class="topico">
            <p><strong>Melhora da saúde física:</strong> Pedalar regularmente fortalece o sistema cardiovascular, aumenta a resistência física, previne doenças crônicas e contribui para o controle do peso.</p>
        </div>
        <div class="topico">
            <p><strong>Saúde mental:</strong> A prática de atividades físicas ao ar livre, como pedalar, está associada à redução do estresse, ansiedade e depressão, além de promover o bem-estar mental.</p>
        </div>
        <div class="topico">
            <p><strong>Qualidade de vida:</strong> A bicicleta proporciona uma forma prazerosa e ativa de se locomover, contribuindo para uma melhor qualidade de vida e bem-estar geral.</p>
        </div>
        <div class="topico">
            <p><strong>Descongestionamento do trânsito:</strong> O uso da bicicleta reduz o número de veículos nas ruas, contribuindo para o desafogamento do trânsito e a diminuição dos congestionamentos.</p>
        </div>
        <div class="topico">
            <p><strong>Integração com outros modais:</strong> A bicicleta pode ser integrada a outros modos de transporte, como o transporte público, oferecendo uma solução multimodal para os deslocamentos urbanos.</p>
        </div>
        <div class="topico">
            <p><strong>Promoção da cultura ciclística:</strong> A criação de uma plataforma para planejamento de rotas de bicicleta contribui para a promoção da cultura ciclística, incentivando o uso da bicicleta como meio de transporte e lazer.</p>
        </div>
        <div class="topico">
            <p><strong>Fortalecimento da comunidade:</strong> O uso compartilhado de espaços públicos para ciclismo e a criação de comunidades online de ciclistas contribuem para o fortalecimento do senso de comunidade e a construção de cidades mais justas e equitativas.</p>
        </div>
    </div>
</section>

<!-- JavaScript -->
<script src="assets/js/index.js"></script>
</body>

<!-- Rodapé -->
<?php 
include "layout/footer/footer.php";
?>

</html>
