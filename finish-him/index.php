<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finish him</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <nav>
      <a class="logo" href="index.html">Finish Him</a>
      <div class="mobile-menu">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
        <div class="line4"></div>
      </div>
      <ul class="nav-list">
        <li>
          <a href="index.html">Home</a>
        </li>
        <li>
          <a href="#cards">Cards</a>
        </li>
        <li>
          <a href="#sobre-nos">Sobre nós</a>
        </li>
        <li>
          <a href="/">Login</a>
        </li>
      </ul>
    </nav>
  </header>

  <section class="image-slider">
    <div class="seta-esquerda">
      <img src="img/seta-esquerda.png" alt="seta para esquerda">
    </div>
    <div class="seta-direita">
      <img src="img/seta-direita.png" alt="seta para direita">
    </div>
    <div class="rubrica">
      <h1 id="tituloSlider"></h1>
      <p id="descricaoSlider"></p>
    </div>
  </section>

  <div class="divisor-cards">
    <h1>Lendas consagradas</h1>
    <h3>Conheça os verdadeiros titãs dentre os jogos de luta que já estão sob os holofotes há décadas.</h3>
  </div>

  <!-- Espaço dos cards dinâmicos -->
  <div class="card-container" id="cards">
    <!-- Os cards serão preenchidos dinamicamente aqui -->
  </div>
  <!--   x   -->

  <div class="divisor-cards2">
    <img src="img/fire.png" alt="" width="100px">
    <h5>Jogos de luta em estilo anime</h5>
    <h1>Embates estilosos</h1>
    <h3>A paixão japonesa por competição em arcades, animação feita a mão e personagens grandiosos se junta aqui.</h3>
  </div>

  <div class="container-banner">
    <!-- Os banners serão mantidos como estão -->
  </div>

  <div class="divisor-cards3">
    <h5>Jogos de luta clássicos</h5>
    <h1>Confrontos clássicos</h1>
    <h3>Jogos clássicos que ajudaram a dar forma ao gênero de luta dão um salto para a era <br> moderna e chegam repletos de novos recursos.</h3>
  </div>

  <div class="jogos-classicos">
    <!-- Os jogos clássicos serão mantidos como estão -->
  </div>

  <div class="divisor-cards4">
    <h5>Personagens icônicos</h5>
    <h1>Estrelas</h1>
    <h3>Esses personagens lendários, e muitos outros, <br> pavimentaram o caminho para o universo dos jogos de luta que conhecemos hoje.</h3>
  </div>

  <div class="estrelas">
    <!-- Os personagens icônicos serão mantidos como estão -->
  </div>

  <div class="quem-somos" id="sobre-nos">
    <h1>Projeto integrador TI 22 </h1>
    <h2>Codinome: FINISHI HIM</h2>
    <h3>
      O Projeto Integrador TI 22, codinome "Finish Him", surge como uma proposta audaciosa para os amantes dos jogos de
      luta. Combinando expertise em tecnologia da informação e a paixão pelo universo dos jogos, nossa equipe está
      empenhada em desenvolver uma plataforma que ofereça uma experiência única de combate virtual. Inspirados pelos
      clássicos e pela adrenalina dos confrontos digitais, nosso objetivo é criar uma arena virtual onde jogadores
      possam testar suas habilidades, competindo em batalhas emocionantes e desafiadoras. "Finish Him" não é apenas um
      projeto; é uma promessa de mergulhar nos universos fantásticos dos jogos de luta, oferecendo aos jogadores uma
      plataforma dinâmica e envolvente para testar suas habilidades e dominar a arte do combate virtual. Junte-se a nós
      nesta jornada emocionante enquanto trabalhamos para tornar essa visão uma realidade.
      <br>
    </h3>
  </div>

  <footer class="footer">
    <div class="container-footer">
      <p>&copy; 2024 Todos os direitos reservados</p>
    </div>
  </footer>

  <script src="app.js"></script>
  <script>
    // Script para carregar conteúdo dinâmico nos cards e slider

    // Exemplo de como carregar o slider dinamicamente
    var sliderTitulo = document.getElementById('tituloSlider');
    var sliderDescricao = document.getElementById('descricaoSlider');

    // Exemplo de conteúdo para o slider (pode ser substituído por dados do banco de dados)
    sliderTitulo.textContent = "MORTAL KOMBAT 1";
    sliderDescricao.textContent = "Mortal Kombat 1, lançado em 2023, é um reboot da série icônica de jogos de luta. Desenvolvido pela NetherRealm Studios, o jogo se passa na nova linha do tempo criada por Liu Kang após sua ascensão à divindade em Mortal Kombat 11.";

    // Exemplo de como carregar os cards dinamicamente
    var cardContainer = document.getElementById('cards');

    // Aqui você deve carregar os dados do banco de dados e gerar os cards dinamicamente
    // Exemplo simplificado usando JavaScript puro para gerar os cards
    <?php
    // Conexão com o banco de dados
    include('conexao.php');

    $sql = "SELECT * FROM tabela_de_conteudo";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "var card = document.createElement('div');";
        echo "card.classList.add('card', 'card{$row['id']}');"; // Adapte conforme sua necessidade de estilização
        echo "card.innerHTML = `
          <a href='{$row['link']}'>
            <img src='{$row['imagem']}' alt='{$row['titulo']}'>
            <h2>{$row['titulo']}</h2>
            <p>{$row['descricao']}</p>
          </a>
        `;";
        echo "cardContainer.appendChild(card);";
      }
    } else {
      echo "console.log('Nenhum conteúdo encontrado.');";
    }

    $conn->close();
    ?>
  </script>
</body>

</html>
