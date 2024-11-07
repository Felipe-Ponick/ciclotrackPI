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
</head> 

<body class="fundo-branco">
<br> <br> <br> <br> <br>
    <section class="beneficios fundo-branco">
        <!-- <div class="titleODS">
            OBJETIVOS DE DESENVOLVIMENTO SUSTENTÁVEL
        </div> -->
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


