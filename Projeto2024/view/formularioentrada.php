<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada Site</title>
    <link rel="stylesheet" href="../css/entradaformulario.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Benefícios</a></li>
                <li><a href="#">Depoimentos</a></li>
            </ul>
        </nav>
        <div class="logo">
            <img src="../img/caduceu.png" alt="Afya Whitebook Logo">
        </div>
        <div class="header-buttons">
            <button id="myButton" class="btn entrar">Entrar</button>
        </div>
    </header>

    <main>
        <div class="form-container">
            <h2>Entrar</h2>
            <form method="POST" action="../processamentos/processamento.php">
                <label for="login">Email</label>
                <input type="email" id="login" name="inputEmail" placeholder="Digite seu email" required>

                <label for="password">Senha</label>
                <input type="password" id="password" name="inputSenha" placeholder="Digite sua senha" required>

                <button type="submit" id="bot">Entrar</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="social-media">
                <a href="#" class="social-icon">
                    <img src="../img/facebook.png" alt="Facebook">
                </a>
                <a href="#" class="social-icon">
                    <img src="../img/sinal-do-twitter.png" alt="Twitter">
                </a>
                <a href="#" class="social-icon">
                    <img src="../img/instagram (2).png" alt="Instagram">
                </a>
            </div>
            <p>&copy; 2024 Todos os direitos reservados.</p>
        </div>
    </footer>

    <script src="../java/entrada.js"></script>
</body>
</html>
