<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustenta Cânhamo - Explicação</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('2.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
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
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
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
            width: 60%;
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
        <?php if ($_GET['conhece'] == 'nao'): ?>
            <h2>O que é cânhamo?</h2>
            <p>O cânhamo é uma planta versátil que tem sido cultivada há milênios. Embora pertença à mesma espécie da maconha (Cannabis sativa), o cânhamo é distinto por seu baixo teor de THC, o composto psicoativo da planta. Ele é amplamente utilizado por suas propriedades em diversas áreas.</p>
        <?php else: ?>
            <h2>Você já conhece o cânhamo!</h2>
            <p>O cânhamo é amplamente utilizado por suas propriedades sustentáveis e aplicabilidade em diversas indústrias.</p>
        <?php endif; ?>
        <a href="pergunta2.php" class="btn">Próxima Pergunta</a>
    </section>
</body>
</html>
