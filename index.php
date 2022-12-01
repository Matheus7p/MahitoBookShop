<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="Assets/favicon.ico" type="image/x-icon">
  <style>
    <?php
    include 'style.css';
    ?>
  </style>

  <title>Mahito Book Shop</title>
</head>

<body>

  <nav class="navSuperior">
    <a class="logo" href="/">Mahito <span>Book Shop</span></a>
    <div class="search-box">
      <input type="search" class="search-txt" placeholder="Pesquisar">
      <a href="#" class="search-btn">
        <img src="Assets/loupe.svg" alt="Lupa" height="20" width="20">
      </a>
    </div>
    <div class="mobile-menu">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
    <ul class="nav-list">
      <div class="menu-li-icons">
        <li>
          <a class="carrinho" href="#">
            <img class="carrinho-img" src="Assets/cart.svg" alt="Carrinho"> Carrinho</a>
        </li>
      </div>
      <div class="menu-li-icons">
        <li>
          <a class="conta" href="#">
            <img class="conta-img" src="Assets/person-circle.svg" alt="Conta"> Minha Conta</a>
        </li>
      </div>

      <div class="menu-li-icons">
        <li>
          <a class="coracao" href="#">
            <img class="coracao-img" src="Assets/heart.svg" alt="Favoritos"> Favoritos</a>
        </li>
      </div>

    </ul>

  </nav>
  </header>
  <main>


    <nav class="navDropdown">
      <ul class="dropdown-menu">
        <li>
          <a href="#"><b>Livros</b> &#9660;</a>

          <ul class="dropdown-submenu">
            <li><a href="#"><b>Romance</b></a></li>
            <li><a href="#"><b>Aventura</b></a></li>
            <li><a href="#"><b>Didáticos</b></a></li>
            <li><a href="#"><b>Terror</b></a></li>
            <li><a href="#"><b>Ficção</b></a></li>
            <li><a href="#"><b>Crônicas</b></a></li>
            <li><a href="#"><b>Conto</b></a></li>
          </ul>

        </li>
        <li><a href="#"><b>Vendidos</b></a></li>
        <li>
          <a href="#"><b>Mangás</b> &#9660;</a>

          <ul class="dropdown-submenu">
            <li><a href="#"><b>One Piece</b></a></li>
            <li><a href="#"><b>Naruto</b></a></li>
            <li><a href="#"><b>Jujutsu Kaisen</b></a></li>
            <li><a href="#"><b>Kimetsu no Yaiba</b></a></li>
            <li><a href="#"><b>Dragon Ball</b></a></li>
            <li><a href="#"><b>Pokémon</b></a></li>
          </ul>

        </li>
        <li><a href="#"><b>Geek</b></a></li>
        <li>
          <a href="#"><b>Jogos | Brinquedo</b> &#9660;</a>

          <ul class="dropdown-submenu">
            <li><a href="#"><b>Quebra-Cabeça</b></a></li>
            <li><a href="#"><b>Dungeons & Dragons</b></a></li>
            <li><a href="#"><b>Banco Imobiliario</b></a></li>
            <li><a href="#"><b>Bonecas</b></a></li>
            <li><a href="#"><b>Carrinhos</b></a></li>
          </ul>
        </li>
      </ul>
    </nav>


  </main>


  <script src="Js/mobile-navbar.js"></script>
</body>

</html>