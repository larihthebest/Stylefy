<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Stylefy</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #FFFFFF;
      padding: 10px;
    }

    .logo {
      display: flex;
      align-items: center;
    }

    .logo_img {
      width: 200px;
      height: auto;
      margin-right: 5px;
    }

    .search-bar {
      background-color: #e0e0e0;
      padding: 5px 10px;
      border-radius: 20px;
      display: flex;
      align-items: center;
    }

    .search-bar input[type="text"] {
      border: none;
      background-color: transparent;
      outline: none;
      font-size: 16px;
      margin-left: 5px;
    }

    .search-icon {
      background-color: #ccc;
      border-radius: 50%;
      padding: 5px;
      margin-left: 5px;
    }

    .search-icon img {
      width: 25px;
      height: auto;
      filter: invert(1);
    }

    .account-button {
      display: flex;
      align-items: center;
      gap: 5px;
      padding: 8px 15px;
      background-color: #fff;
      border: 1px solid #000;
      border-radius: 20px;
    }

    .account-button img {
      width: 30px;
      height: auto;
    }

    .account-button-text {
      color: #000;
      font-weight: bold;
      font-size: 14px;
    }

    .nav-bar {
      background-color: #000;
      color: #fff;
      text-align: center;
      display: flex;
      justify-content: space-between;
      padding: 5px 0;
      margin-left: 10px;
      margin-right: 10px;
    }

    .nav-bar a {
      color: #fff;
      text-decoration: none;
      margin-left: 100px;
      margin-right: 100px;
    }

    .separator {
      height: 4px;
      background-color: #000;
      margin-top: 20px;
      margin-left: 10px;
      margin-right: 10px;
    }

    .section-title {
      text-align: left;
      margin-top: 20px;
      margin-left: 30px;
    }

    .rectangle {
      width: calc(100% / 3 - 60px);
      height: 200px;
      background-color: #FFFFFF;
      margin-left: 40px;
      margin-right: 10px;
      display: inline-block;
      border: 1px solid #000;
    }
  </style>
</head>

<body>

  <header class="header">
    <div class="logo">
      <img src="/imgs/homem_mulheres_imagem.jpg" alt="Imagem" height="100">
      <h1 style="font-family: 'Nickainley', cursive; font-style: oblique; font-size: 48px; margin-left: 10px;">Stylefy</h1>
    </div>
    <div class="search-bar">
      <input type="text" class="search-input" placeholder="O que você procura?">
      <div class="search-icon">
        <img src="/imgs/lupa_icon_novo.jpg" alt="Lupa de pesquisa">
      </div>
    </div>
    <div class="account-button">
      <img src="/imgs/user_icon.png" alt="Ícone de pessoa">
      <div class="account-button-text">
        <div>Minha</div>
        <div style="font-weight: bold;">Conta</div>
      </div>
    </div>
  </header>

  <nav class="nav-bar">
    <a href="index.html">Início</a>
    <a href="#">Feminino</a>
    <a href="roupas_masculinas.html">Masculino</a>
  </nav>

  <div class="separator"></div>

  <h2 class="section-title">Roupas Femininas</h2>

  <div class="rectangle"></div>
  <div class="rectangle"></div>
  <div class="rectangle"></div>

</body>

</html>