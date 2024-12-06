<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustenta Cânhamo - Aplicações</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('2.png');
            background-size: cover;
            background-position: center;
            height: auto;
        }

        header {
            background-color: #e0ffe0;
            padding: 20px;
            text-align: center;
        }

        .logo img {
            height: 50px;
            vertical-align: middle;
        }

        .logo h1 {
            display: inline;
            font-size: 32px;
            color: #2c6a2c;
            margin-left: 10px;
        }

        .subtitulo {
            font-size: 20px;
            color: #2c6a2c;
            margin-top: 5px;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .content h2 {
            font-size: 48px;
            color: #2c6a2c;
        }

        .content p {
            font-size: 24px;
            color: #707070;
            margin-top: -10px;
            width: 80%;
            max-width: 800px;
        }

        .application {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 40px 0;
        }

        .application img {
            width: 300px; /* Ajuste o tamanho da imagem conforme necessário */
            height: auto;
            margin: 0 20px;
        }

        .image-placeholder {
            width: 300px;
            height: 200px;
            background-color: #e0e0e0;
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: #707070;
            border: 2px dashed #2c6a2c;
        }

        .btn {
            display: inline-block;
            background-color: #2c6a2c;
            color: #fff;
            padding: 15px 30px;
            margin-top: 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
        }

        .btn:hover {
            background-color: #1a4d1a;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #e0ffe0;
        }

        /* Classes para alternar a disposição */
        .left {
            flex-direction: row;
        }

        .right {
            flex-direction: row-reverse;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="imagens/logo.png" alt="Logo Sustenta Cânhamo">
            <h1>Sustenta Cânhamo</h1>
            <h2 class="subtitulo">Plantando Soluções Sustentáveis</h2>
        </div>
    </header>

    <section class="content">
        <?php if ($_GET['serve'] == 'nao'): ?>
            <h2>O que é cânhamo e suas aplicações?</h2>
            <p>O cânhamo é uma planta versátil, utilizada em diversas indústrias. Embora você não conheça suas aplicações, elas são fundamentais para a sustentabilidade e inovação.</p>
        <?php else: ?>
            <h2>Ótimo! Você já conhece as aplicações do cânhamo!</h2>
            <p>O cânhamo é amplamente utilizado em produtos têxteis, biocombustíveis e na construção civil. Sua versatilidade e sustentabilidade o tornam uma planta essencial para o futuro.</p>
        <?php endif; ?>

        <h2>Aplicações do Cânhamo</h2>
        <p>O cânhamo possui uma vasta gama de aplicações, incluindo:</p>

        <div class="application left">
            <div class="image-placeholder">Imagem: Têxteis</div>
            <p>1. <strong>Têxteis</strong>: O cânhamo é usado para fabricar roupas, tecidos e acessórios. É conhecido por sua durabilidade e propriedades antimicrobianas.</p>
        </div>

        <div class="application right">
            <div class="image-placeholder">Imagem: Construção</div>
            <p>2. <strong>Construção</strong>: O cânhamo pode ser usado na produção de materiais de construção, como concreto de cânhamo, que é leve e isolante.</p>
        </div>

        <div class="application left">
            <div class="image-placeholder">Imagem: Biocombustíveis</div>
            <p>3. <strong>Biocombustíveis</strong>: As sementes de cânhamo podem ser processadas para produzir biodiesel e biocombustíveis.</p>
        </div>

        <div class="application right">
            <div class="image-placeholder">Imagem: Cosméticos</div>
            <p>4. <strong>Cosméticos</strong>: O óleo de cânhamo é utilizado em produtos de beleza, como cremes e loções, devido às suas propriedades hidratantes.</p>
        </div>

        <div class="application left">
            <div class="image-placeholder">Imagem: Alimentação</div>
            <p>5. <strong>Alimentação</strong>: As sementes de cânhamo são ricas em proteínas e nutrientes, sendo utilizadas em barras de proteína, leites e óleos.</p>
        </div>

        <div class="application right">
            <div class="image-placeholder">Imagem: Papel</div>
            <p>6. <strong>Papel</strong>: O cânhamo pode ser usado para produzir papel, sendo uma alternativa sustentável em relação ao papel feito de árvores.</p>
        </div>

        <div class="application left">
            <div class="image-placeholder">Imagem: Plásticos Biodegradáveis</div>
            <p>7. <strong>Plásticos Biodegradáveis</strong>: O cânhamo pode ser processado em bioplásticos, que são mais sustentáveis e menos poluentes.</p>
        </div>

        <!-- Botão atualizado para direcionar para a nova página -->
        <a href="pergunta_meio_ambiente.php" class="btn">Próxima Pergunta</a>
    </section>

    <footer>
        <p>&copy; 2024 Sustenta Cânhamo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
