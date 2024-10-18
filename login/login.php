<?php
session_start();

$usuario = [
    "email" => " ",
    "senha" => " ",
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'];
    $senha = $_POST['senha'];


    if (is_array($usuario) && isset($usuario[$username]) && $usuario[$username] === $senha) {
        $_SESSION['email'] = $username;
        header("Location: login.php");
        exit();
    } else {
    }
};
?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Listenxd</title>
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./login.css">
</head>

<body>

    <header>
        <nav class="menu-navegacao">

            <a href="../index.html" class="titulo">Listenxd</a href="#">

            <div class="drops">
                <a href="../index.html" class="perfil">Home</a>

                <div>
                    <div id="barraLateral" class="barraLateral">
                        <a href="#" class="fechar" onclick="toggleBarra()">&times;</a>
                        <div class="reprodutor">
                            <audio id="audio" controls></audio>
                            <div class="nomeMusica"></div>
                        </div>
                        <a href="#" onclick="toggleDropdown(event)">Metallica</a>
                        <ul class="top3">
                            <!-- <button id="play">Play</button> -->
                            <!-- <div id="musica-conteiner"> -->
                            <button class="botao-musica" data-index="0">Fade to Black - Remastered</button>
                            <!-- </div> -->
                            <button class="botao-musica" data-index="1">For Whom The Bell Tolls - Remastered</button>
                            <button class="botao-musica" data-index="2">Creeping Death - Creeping Death EP Version/Remastered</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">System of a Down</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="3">B.Y.O.B</button>
                            <button class="botao-musica" data-index="4">Radio/Video</button>
                            <button class="botao-musica" data-index="5">Lost in Hollywood</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Black Sabbath</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="6">Paranoid</button>
                            <button class="botao-musica" data-index="7">War Pigs</button>
                            <button class="botao-musica" data-index="8">Iron Man</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Linkin Park</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="9">In the End</button>
                            <button class="botao-musica" data-index="10">Papercut</button>
                            <button class="botao-musica" data-index="11">Crawling</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Playboy Carti</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="12">M3tamorphosis (feat. Kid Cudi)</button>
                            <button class="botao-musica" data-index="13">Sky</button>
                            <button class="botao-musica" data-index="14">Go2DaMoon (feat. Kid Cudi)</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Travis Scott</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="15">Sicko Mode</button>
                            <button class="botao-musica" data-index="16">Butterfly Effect</button>
                            <button class="botao-musica" data-index="17">No Bystanders (feat. Swae Lee & Don Toliver)</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Tyler, the Creator</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="18">See You Again (feat. Kali Uchis)</button>
                            <button class="botao-musica" data-index="19">Who Dat Boy (feat. A$AP Rocky)</button>
                            <button class="botao-musica" data-index="20">911 / Mr. Lonely (feat. Frank Ocean & Steve Lacy)</button>
                        </ul>
                        <a href="#" onclick="toggleDropdown(event)">Kanye West</a>
                        <ul class="top3">
                            <button class="botao-musica" data-index="21">Runaway (feat. Pusha T)</button>
                            <button class="botao-musica" data-index="22">Power</button>
                            <button class="botao-musica" data-index="23">All of the Lights (feat. Rihanna)</button>
                        </ul>
                    </div>

                    <div id="menu">
                        <button onclick="toggleBarra()">Mais tocadas ☰</button>
                    </div>
                </div>
            </div>

        </nav>
    </header>

    <main class="separador">
        <section class="formulario">
            <form class="retangle" action="../index.html" method="post">
                <h1>LOGIN</h1>
                <input type="email" name="email" required placeholder="Insira seu e-mail">

                <input type="password" name="senha" required placeholder="Insira sua senha">

                <input type="submit" value="LOGIN">
            </form>
        </section>
    </main>

    <footer>
        <div class="back-foot">
            <div class="topicos">
                <ul>
                    <li><a href="#">Desenvolvedores</a></li>
                    <li><a href="#">Termos de uso</a></li>
                    <li><a href="#">Novidades</a></li>
                    <li><a href="#">Aplicativos</a></li>
                </ul>
            </div>
            <div class="social-media">
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">Instagram</a>
            </div>
            <div class="copyright">
                <p>&copy; 2024 1MD. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="../js/barraLateral.js"></script>
    <script src="../js/doubleDrop.js"></script>

    <script>
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            return re.test(email);
        }

        document.querySelector('form').addEventListener('submit', function(event) {
            const emailInput = document.querySelector('input[name="email"]');
            if (!validateEmail(emailInput.value)) {
                alert('Por favor, insira um email válido que contenha "@"');
                event.preventDefault();
            }
        });
    </script>
</body>

</html>