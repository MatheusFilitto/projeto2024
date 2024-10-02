<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica</title>
    <link rel="stylesheet" href="../css/consultas1.css">
</head>
<body>
    <div class="menu">
        <h1>CONSULTAS PEDIÁTRICAS</h1>
        <ul>
            <li><a href="pagina.php">Início</a></li>
            <li><a href="#para-voce">Para Você</a></li>
            <li><a href="#buscar">Buscar</a></li>
            <li><a href="#favorito">Favorito</a></li>
        </ul>
    </div>

    <main>
        <section class="accordion">
            <div class="accordion-item">
                <input type="checkbox" id="section2" checked>
                <label for="section2" class="accordion-header">Doenças Alérgicas</label>
                <div class="accordion-content">
                    <div class="grid-container">
                        <button class="grid-item" onclick="window.location.href='segundapag.php'">Alergia e Anafilaxia</button>
                        <button class="grid-item" onclick="window.location.href='segundapag2.php'">Angioedema Hereditário</button>
                        <button class="grid-item" onclick="window.location.href='segundapag3.php'">Dermatite Atópica (DA)</button>
                        <button class="grid-item" onclick="window.location.href='segundapag4.php'">Imunodeficiências</button>
                        <button class="grid-item" onclick="window.location.href='segundapag5.php'">Prurigo Estrófulo</button>
                        <button class="grid-item" onclick="window.location.href='segundapag6.php'">Urticária</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="accordion1">
            <div class="accordion-item1">
                <input type="checkbox" id="section21" checked>
                <label for="section21" class="accordion-header1">Emergências Pediátricas</label>
                <div class="accordion-content1">
                    <div class="grid-container1">
                        <button class="grid-item1" onclick="window.location.href='afogamento.html'">Afogamento</button>
                        <button class="grid-item1" onclick="window.location.href='corpo-estranho.html'">Ingestão de Corpo Estranho</button>
                        <button class="grid-item1" onclick="window.location.href='queimaduras.html'">Queimaduras</button>
                        <button class="grid-item1" onclick="window.location.href='hipercalemia.html'">Hipercalemia</button>
                        <button class="grid-item1" onclick="window.location.href='trauma-ortopedico.html'">Trauma Ortopédico</button>
                        <button class="grid-item1" onclick="window.location.href='via-aerea-avancada.html'">Via Aérea Avançada</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="accordion2">
            <div class="accordion-item2">
                <input type="checkbox" id="section22" checked>
                <label for="section22" class="accordion-header2">Opção</label>
                <div class="accordion-content2">
                    <div class="grid-container2">
                        <button class="grid-item2" onclick="window.location.href='opcao1.html'">Opção 1</button>
                        <button class="grid-item2" onclick="window.location.href='opcao2.html'">Opção 2</button>
                        <button class="grid-item2" onclick="window.location.href='opcao3.html'">Opção 3</button>
                        <button class="grid-item2" onclick="window.location.href='opcao4.html'">Opção 4</button>
                        <button class="grid-item2" onclick="window.location.href='opcao5.html'">Opção 5</button>
                        <button class="grid-item2" onclick="window.location.href='opcao6.html'">Opção 6</button>
                    </div>
                </div>
            </div>
        </section>

        <section class="accordion3">
            <div class="accordion-item3">
                <input type="checkbox" id="section23" checked>
                <label for="section23" class="accordion-header3">Opção</label>
                <div class="accordion-content3">
                    <div class="grid-container3">
                        <button class="grid-item3" onclick="window.location.href='opcao7.html'">Opção 7</button>
                        <button class="grid-item3" onclick="window.location.href='opcao8.html'">Opção 8</button>
                        <button class="grid-item3" onclick="window.location.href='opcao9.html'">Opção 9</button>
                        <button class="grid-item3" onclick="window.location.href='opcao10.html'">Opção 10</button>
                        <button class="grid-item3" onclick="window.location.href='opcao11.html'">Opção 11</button>
                        <button class="grid-item3" onclick="window.location.href='opcao12.html'">Opção 12</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="../java/script.js"></script>
</body>
</html>
