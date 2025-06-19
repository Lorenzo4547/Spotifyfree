<?php
// Você pode usar comandos PHP aqui no topo se quiser no futuro
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Minha Página PHP</title>
<style>
    body {
        background-image: url('Amore.png');
        background-size: cover;
        font-family: Arial, sans-serif;
        color: black;
        margin: 0;
        padding: 0px;
        text-align: center;
    }
    h1 {
        color:rgb(255, 121, 253);
    }
    img {
        max-width: 60%;
        height: auto;
        border-radius: 10px;
    }
    .video {
        max-width: 640px;
        margin-top: 20px;
    }
    p {
        font-size: 1.5em;
    }
    .btn-coracao {
        background: none;
        border: none;
        cursor: pointer;
        animation: pulsar 1.5s infinite;
        margin-top: 30px;
    }

    .btn-coracao img {
        width: 200px;
        height: auto;
        transition: transform 0.3s ease;
    }

    .btn-coracao:hover img {
        transform: scale(1.1);
    }

    @keyframes pulsar {
        0% { transform: scale(2.5); }
        50% { transform: scale(2.6); }
        100% { transform: scale(2.25); }
    }
</style>
</head>
<body>

    <!-- Áudio escondido, será tocado no clique -->
    <audio id="musicaFundo" loop>
        <source src="Heart.mp3" type="audio/mpeg">
        Seu navegador não suporta áudio HTML5.
    </audio>

    <h1>Oiiii Amor! Amo muito você! ❤️</h1>

    <p style="color: rgb(255, 121, 253);">&#128149; Eu te amo muitooo, estou feliz que estamos juntos a seis meses, e espero muuuuuuitos anos ao seu lado. &#128149;</p>
    <p style="color: rgb(255, 121, 253);">&#128149; Você é a melhor namorada do mundo, e eu sou o namorado mais sortudo por ter você ao seu lado. &#128149;</p>
    <p style="color: rgb(255, 121, 253);">&#128149; Você sempre alegra meus dias, eu amo você muito, NUNCA se esqueça disso. &#128149;</p>
    <p style="color: rgb(255, 121, 253);">&#128149; Mwhaaa amor, HeHeHe. &#128149;</p>

    <h2 style="color: rgb(255, 121, 253);">Feliz seis meses de Namoro!!!</h2>
    <br><br><br>

    <!-- Botão para tocar a música -->
    <button onclick="tocarMusica()" class="btn-coracao">
        <img src="coracao.png" alt="Coração">
    </button>

    <script>
    function tocarMusica() {
        const audio = document.getElementById('musicaFundo');
        audio.play().then(() => {
            console.log("Música tocando");
        }).catch((e) => {
            console.error("Erro ao tentar tocar o áudio:", e);
            alert("Clique permitido, mas o navegador pode ter bloqueado o som.");
        });
    }
    </script>

</body>
</html>
</html>