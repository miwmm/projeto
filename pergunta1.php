<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sustenta Cânhamo - Pergunta 1</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('1.png');
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

        .question {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 80vh;
            text-align: center;
        }

        .question h2 {
            font-size: 64px;
            color: #2c6a2c;
        }

        .btn-group {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .btn-group .btn {
            display: inline-block;
            background-color: #2c6a2c;
            color: #fff;
            padding: 20px 40px;
            font-size: 24px;
            text-decoration: none;
            border-radius: 10px;
        }

        .btn-group .btn:hover {
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

    <section class="question">
        <h2>Você sabe o que é cânhamo?</h2>
        <div class="btn-group">
            <a href="explicacao.php?conhece=sim" class="btn">Sim</a>
            <a href="explicacao.php?conhece=nao" class="btn">Não</a>
        </div>
    </section>
</body>
</html>
