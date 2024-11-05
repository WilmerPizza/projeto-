<?php
session_start();
if (!isset($_SESSION['logado'])) {
    header('Location: ../page/404.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vovoonline Culinárias</title>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <video id="videoBG" autoplay muted loop>
        <source src="video-bg/cozinhando.mp4" type="video/mp4">
    </video>


    <header>
        <h1>Vovoonline Culinárias</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="receitas.php">Receitas</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="../login/logout.php">Sair</a></li>
            </ul>
        </nav>

    </header>

    <main>
        <section class="texto">
            <h2>Bem-vindo ao Vovoonline Culinárias!</h2>
            <p>Explore receitas deliciosas feitas com carinho e tradição.</p>
        </section>

        <!-- <section class="imagens-principais">
            <img src="assets/torta-de-limao.jpg.jpeg" alt="torta de limao">
            <img src="assets/frango.jpg.jpg" alt="Frango na brasa">
            <img src="assets/peixe.jpg.png" alt="Peixe com limão e alcaparras">
        </section> -->
        <section id="fotos">
            <ul class="galeria">
                <li id="foto01"><span>torta de limao</span></li>
                <li id="foto02"><span>Frango na brasa</span></li>
                <li id="foto03"><span>Peixe com limão e alcaparras</span></li>
                <li id="foto04"><span>Batata doce crocante com aioli</span></li>
                <li id="foto05"><span>Mousse de chocolate vegano</span></li>
                <li id="foto06"><span>Sableé de pistache com frutas </span></li>
                <li id="foto07"><span>Bala de fruta saudável</span></li>
                <li id="foto08"><span>Bolo de Cenoura com Calda de Chocolate</span></li>
                <li id="foto09"><span>Medalhão na Brasa com Molho</span></li>
                <li id="foto10"><span>Mousse de Maracujá</span></li>
                <li id="foto11"><span>Robata de Salmão com Brócolis</span></li>
                <li id="foto12"><span>Arroz Frito com Lombo e Teriyaki</span></li>
            </ul>
        </section>



    </main>

    <footer>
        <p>&copy; 2024 Vovoonline Culinárias</p>
    </footer>
</body>

</html>