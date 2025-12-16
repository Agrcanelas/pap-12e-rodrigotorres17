<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Biblioteca — Escola de Canelas</title>

<style>
body {
    margin: 0;
    font-family: Poppins, Arial, sans-serif;
    background: #fff5f5;
    color: #333;
}

/* HEADER */
header {
    background: #b30000;
    color: white;
    padding: 25px;
    text-align: center;
    font-size: 26px;
    font-weight: 600;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* CONTEÚDO */
.container {
    padding: 25px;
    max-width: 1100px;
    margin: auto;
}

/* IMAGEM GRANDE */
.hero {
    width: 100%;
    height: 420px;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    margin-bottom: 30px;
}

.hero img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* TEXTO */
.description {
    background: white;
    padding: 25px;
    border-radius: 18px;
    font-size: 18px;
    line-height: 1.6;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

/* BOTÕES */
.buttons {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}

.btn {
    background: #b30000;
    color: white;
    padding: 16px;
    font-size: 18px;
    border: none;
    border-radius: 14px;
    cursor: pointer;
    transition: 0.25s;
}

.btn:hover {
    background: #d60000;
    transform: scale(1.05);
    box-shadow: 0 4px 12px rgba(179,0,0,0.4);
}

/* BOTÃO VOLTAR */
.back {
    margin-top: 35px;
    text-align: center;
}

.back button {
    background: transparent;
    color: #b30000;
    border: 2px solid #b30000;
    padding: 14px 30px;
    font-size: 18px;
    border-radius: 14px;
    cursor: pointer;
    transition: 0.25s;
}

.back button:hover {
    background: #b30000;
    color: white;
}
</style>
</head>

<body>

<header>📚 Biblioteca Escolar</header>

<div class="container">

    <!-- IMAGEM GRANDE -->
    <div class="hero">
        <img src="imgs/bibliotecafoto.jpg" alt="Biblioteca da Escola de Canelas">
    </div>

    <!-- DESCRIÇÃO -->
    <div class="description">
        A biblioteca é um espaço dedicado ao estudo, leitura e trabalho em grupo.
        Aqui podes consultar livros, usar computadores e preparar trabalhos escolares
        num ambiente calmo e organizado.
    </div>

    <!-- BOTÕES INTERATIVOS -->
    <div class="buttons">
        <button class="btn" onclick="alert('Horário da Biblioteca')">⏰ Horário</button>
        <button class="btn" onclick="alert('Regras da Biblioteca')">📜 Regras</button>
        <button class="btn" onclick="alert('Localização no mapa')">🗺️ Ver no mapa</button>
        <button class="btn" onclick="alert('Contactos da Biblioteca')">📞 Contactos</button>
    </div>

    <!-- VOLTAR -->
    <div class="back">
        <button onclick="location.href='menuprimario.php'">
            ⬅ Voltar ao menu
        </button>
    </div>

</div>

</body>
</html>
