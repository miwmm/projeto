<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovação da Legalização do Cânhamo</title>
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            background-image: url('2.png');
            background-size: cover;
            background-position: center;
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

        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .content h2 {
            font-size: 36px;
            color: #2c6a2c;
            margin-bottom: 20px;
        }

        .content p {
            font-size: 20px;
            color: #707070;
            margin: 10px 0;
            line-height: 1.6;
        }

        .btn {
            display: inline-block;
            background-color: #2c6a2c;
            color: #fff;
            padding: 15px 30px;
            margin: 10px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #1a4d1a;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #e0ffe0;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="imagens/logo.png" alt="Logo Sustenta Cânhamo">
            <h1>Sustenta Cânhamo</h1>
        </div>
    </header>

    <section class="content">
        <h2>A sua opinião é muito importante!</h2>
        <p>Após conhecer os benefícios do cânhamo para o meio ambiente, sua opinião é muito importante!</p>
        <p>As informações que você adquiriu aqui podem impactar diretamente a maneira como a sociedade vê essa planta e suas potenciais aplicações. Sua resposta pode ajudar a moldar o futuro do cânhamo no Brasil.</p>

        <h2>Você aprova a legalização do Cânhamo no Brasil?</h2>
        <a href="agradecimento.php?resposta=sim" class="btn" id="sim">Sim</a>
        <a href="agradecimento.php?resposta=nao" class="btn" id="nao">Não</a>
        <script>
        const apiUrl = "https://sheetdb.io/api/v1/fg4m5fn8i96lj"; // Substitua pela URL do SheetDB ou Apps Script

        document.getElementById("sim").addEventListener("click", () => enviarResposta("sim"));
        document.getElementById("nao").addEventListener("click", () => enviarResposta("não"));

        function enviarResposta(resposta) {
            fetch(apiUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify({ resposta }),
            })
            .then(response => response.text())
            .then(data => alert("Resposta enviada!"))
            .catch(err => console.error("Erro:", err));
        }
    </script>
    </section>

    <footer>
        <p>&copy; 2024 Sustenta Cânhamo. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
