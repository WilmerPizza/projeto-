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
    <title>Contato - Vovoonline Culinárias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <h1>Contato - Vovoonline Culinárias</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="receitas.php">Receitas</a></li>
                <li><a href="contato.php">Contato</a></li>
                <li><a href="../login/logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção de Contato -->
    <section class="contato">
        <h2>Entre em contato conosco</h2>
        <p>Estamos aqui para ajudar! Entre em contato por e-mail, WhatsApp, telefone ou através do nosso site.</p>

        <!-- Informações de Contato -->
        <div class="informacoes-contato">
            <h3>Informações de Contato</h3>
            <ul>
                <li><strong>E-mail:</strong> <a href="mailto:contato@vovoonline.com">contato@vovoonline.com</a></li>
                <li><strong>WhatsApp:</strong> <a href="https://wa.me/5599999999999" target="_blank">(55) 99999-9999</a></li>
                <li><strong>Telefone:</strong> (55) 3333-3333</li>
                <li><strong>Nosso site:</strong> <a href="https://www.vovoonline.com" target="_blank">www.vovoonline.com</a></li>
            </ul>
        </div>

        <!-- Formulário de Contato -->
        <div class="formulario-contato">
            <h3>Envie-nos uma mensagem</h3>
            <form action="enviar-contato.php" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>

                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Vovoonline Culinárias. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
