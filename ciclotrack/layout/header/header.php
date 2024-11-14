<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
?>
<header class="header">
  <div class="header__content">
    <div class="header__logo-container">
      <span class="header__logo-sub">CicloTrack</span>
    </div>
    <div class="header__main">
      <ul class="header__links">
        <li class="header__link-wrapper">
          <a href="index.php" class="header__link">Inicio</a>
        </li>
        <li class="header__link-wrapper">
          <a href="quiz.php" class="header__link">Quiz</a>
        </li>
        <?php if (isset($_SESSION['logado'])): ?>
          <li class="header__link-wrapper">
            <a href="rotasTeste.php" class="header__link">Rotas</a>
          </li>
          <li class="header__link-wrapper">
            <a href="oficinas.php" class="header__link">ODS</a>
          </li>
        <?php endif; ?>
        <li class="header__link-wrapper">
          <?php
          if (isset($_SESSION['logado'])) {
            echo '<div class="dropdown">';
            echo '<a href="#" class="header__link dropdown-toggle" onclick="toggleDropdown()">Olá, ' . htmlspecialchars($_SESSION['nmUsuario']) . '</a>';
            echo '<div class="dropdown-menu" id="dropdownMenu">';
            // Botão de logout com confirmação
            echo '<a href="#" class="dropdown-item" onclick="confirmLogout()">Sair</a>';
            echo '</div></div>';
          } else {
            echo '<a href="./cadastro.php" id="minhaContaBtn" class="header__link">Minha conta</a>';
            echo '</div></div>';
          }
          ?>
        </li>
      </ul>
      <div class="header__main-ham-menu-cont">
        <img src="./assets/svg/ham-menu.svg" alt="hamburger menu" class="header__main-ham-menu" />
        <img src="./assets/svg/ham-menu-close.svg" alt="hamburger menu close" class="header__main-ham-menu-close d-none" />
      </div>
    </div>
  </div>
  <div id="sidebar" class="sidebar">
    <a href="#" class="closebtn" id="closeSidebar">&times;</a>
    <a href="login.php">Fazer login</a>
    <a href="cadastro.php">Cadastre-se</a>
    <a href="logout.php" id="sairBtn" class="sairBtn">Sair</a>
  </div>
</header>

<script src="../../assets/js/index.js"></script>

<script>
  function toggleDropdown() {
    const dropdownMenu = document.getElementById("dropdownMenu");
    dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
  }

  function confirmLogout() {
    const confirmation = confirm("Tem certeza que deseja sair da sua conta?");
    if (confirmation) {
      window.location.href = "../ciclotrack/logout.php";
    }
  }

  // Fecha o menu ao clicar fora
  window.onclick = function(event) {
    if (!event.target.matches('.dropdown-toggle')) {
      const dropdowns = document.getElementsByClassName("dropdown-menu");
      for (let i = 0; i < dropdowns.length; i++) {
        const openDropdown = dropdowns[i];
        if (openDropdown.style.display === "block") {
          openDropdown.style.display = "none";
        }
      }
    }
  }
</script>

 <style> 
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 1;
    border-radius: 5px;
  }

  .dropdown-item {
    padding: 15px 20px;
    text-decoration: none;
    display: block;
    color: white;
    background-color: green;
    border-radius: 5px;
    cursor: pointer;
  }

  .dropdown-item:hover {
    background-color: white;
    color: green;
    border: 1px solid green;
  }
</style> 
