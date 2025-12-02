<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Percursos da Escola</title>

<style>
body {
    margin: 0;
    font-family: "Segoe UI", Arial, sans-serif;
    background: #e8eef7;
    overflow-y: scroll;
}

h1 {
    text-align: center;
    margin: 20px 0 10px;
    font-size: 32px;
}

.container {
    width: 95%;
    max-width: 900px;
    margin: auto;
    padding-bottom: 40px;
}

/* Secções (cartões grandes) */
.section {
    background: white;
    padding: 25px;
    margin-top: 25px;
    border-radius: 18px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.10);
}

/* Grelha de botões */
.buttons {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
    gap: 20px;
    margin-top: 20px;
}

/* Botões com imagem */
.card-btn {
    background: #ffffff;
    border: none;
    border-radius: 15px;
    padding: 0;
    cursor: pointer;
    text-align: center;
    font-size: 18px;
    overflow: hidden;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    transition: transform 0.2s;
}

.card-btn:hover {
    transform: scale(1.05);
}

.card-btn img {
    width: 100%;
    height: 120px;
    object-fit: cover;
}

.card-btn span {
    display: block;
    padding: 12px;
    background: #0055aa;
    color: white;
    font-weight: 600;
}

#pisos h2 {
    margin-top: 0;
}
</style>

</head>
<body>

<h1>Percursos da Escola</h1>

<div class="container">

<!-- DESTINOS -->
<div class="section">
    <h2>Destinos</h2>
    <div class="buttons">
        <button class="card-btn" onclick="alert('Percurso para a Biblioteca')">
            <img src="imgs/biblioteca.jpg">
            <span>Biblioteca</span>
        </button>

        <button class="card-btn" onclick="alert('Percurso para a Cantina')">
            <img src="imgs/cantina.jpg">
            <span>Cantina</span>
        </button>

        <button class="card-btn" onclick="alert('Percurso para a Rádio')">
            <img src="imgs/radio.jpg">
            <span>Rádio</span>
        </button>

        <button class="card-btn" onclick="alert('Percurso para o Bar')">
            <img src="imgs/bar.jpg">
            <span>Bar Alunos</span>
        </button>

        <button class="card-btn" onclick="alert('Percurso para o Pavilhão')">
            <img src="imgs/pavilhao.jpg">
            <span>Pavilhão</span>
        </button>
    </div>
</div>

<!-- BLOCOS -->
<div class="section">
    <h2>Blocos</h2>
    <div class="buttons">
        <button class="card-btn" onclick="mostrarBloco('A')">
            <img src="imgs/blocoA.jpg">
            <span>Bloco A</span>
        </button>

        <button class="card-btn" onclick="mostrarBloco('B')">
            <img src="imgs/blocoB.jpg">
            <span>Bloco B</span>
        </button>

        <button class="card-btn" onclick="mostrarBloco('F')">
            <img src="imgs/blocoF.jpg">
            <span>Bloco F</span>
        </button>

        <button class="card-btn" onclick="mostrarBloco('G')">
            <img src="imgs/blocoG.jpg">
            <span>Bloco G</span>
        </button>
    </div>
</div>

<!-- PISOS -->
<div class="section" id="pisos"></div>

</div> <!-- container -->

<script>
function mostrarBloco(bloco) {
    let container = document.getElementById("pisos");
    let html = `<h2>Pisos do Bloco ${bloco}</h2>`;

    let pisos = [];
    if (bloco === 'A') pisos = ['A0'];
    if (bloco === 'B') pisos = ['B0', 'B1'];
    if (bloco === 'F') pisos = ['F1', 'F0', 'F-1', 'F-2'];
    if (bloco === 'G') pisos = ['G1', 'G0', 'G-1'];

    html += `<div class="buttons">`;

    pisos.forEach(p => {
        html += `
        <button class="card-btn" onclick="alert('Abrir salas do piso ${p}')">
            <img src="imgs/piso.jpg">
            <span>${p}</span>
        </button>`;
    });

    html += `</div>`;
    container.innerHTML = html;
}
</script>

</body>
</html>
