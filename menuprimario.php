<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Percursos da Escola</title>

<style>
    body {
        margin: 0;
        font-family: Poppins, Arial, sans-serif;
        background: #fff5f5;
        color: #333;
    }

    header {
        background: #b30000;
        color: white;
        padding: 20px;
        text-align: center;
        font-size: 24px;
        font-weight: 600;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        position: sticky;
        top: 0;
        z-index: 20;
    }

    h2 {
        margin: 15px 0;
        color: #b30000;
        text-align: center;
    }

    .container {
        padding: 20px;
    }

    /* Grid dos cartões */
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 20px;
    }

    /* Cartões */
    .card {
        background: white;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transition: 0.25s;
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    .card img {
        width: 100%;
        height: 140px;
        object-fit: cover;
    }

    .card-title {
        padding: 15px;
        text-align: center;
        font-size: 18px;
        color: #b30000;
        font-weight: 600;
    }

    /* Secção pisos */
    #pisos {
        margin-top: 30px;
        padding: 20px;
        background: white;
        border-radius: 14px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        display: none;
    }

    .pisos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
        gap: 15px;
        margin-top: 15px;
    }

    .piso-btn {
        background: #b30000;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        border-radius: 10px;
        cursor: pointer;
        transition: 0.25s;
    }

    .piso-btn:hover {
        background: #d60000;
        transform: scale(1.05);
    }
</style>
</head>
<body>

<header>
    Mapa Interativo — Escola de Canelas
</header>

<div class="container">

    <!-- DESTINOS -->
    <h2>Destinos</h2>
    <div class="grid">

        <div class="card" onclick="alert('Percurso para a Biblioteca')">
            <img src="imgs/biblioteca.jpg">
            <div class="card-title">Biblioteca</div>
        </div>

        <div class="card" onclick="alert('Percurso para a Cantina')">
            <img src="imgs/cantina.jpg">
            <div class="card-title">Cantina</div>
        </div>

        <div class="card" onclick="alert('Percurso para a Rádio')">
            <img src="imgs/radio.jpg">
            <div class="card-title">Rádio</div>
        </div>

        <div class="card" onclick="alert('Percurso para o Bar de Alunos')">
            <img src="imgs/bar.jpg">
            <div class="card-title">Bar de Alunos</div>
        </div>

        <div class="card" onclick="alert('Percurso para o Pavilhão')">
            <img src="imgs/pavilhao.jpg">
            <div class="card-title">Pavilhão</div>
        </div>

    </div>

    <!-- BLOCOS -->
    <h2>Blocos</h2>
    <div class="grid">

        <div class="card" onclick="mostrarBloco('A')">
            <img src="imgs/blocoA.jpg">
            <div class="card-title">Bloco A</div>
        </div>

        <div class="card" onclick="mostrarBloco('B')">
            <img src="imgs/blocoB.jpg">
            <div class="card-title">Bloco B</div>
        </div>

        <div class="card" onclick="mostrarBloco('F')">
            <img src="imgs/blocoF.jpg">
            <div class="card-title">Bloco F</div>
        </div>

        <div class="card" onclick="mostrarBloco('G')">
            <img src="imgs/blocoG.jpg">
            <div class="card-title">Bloco G</div>
        </div>

    </div>

    <!-- PISOS -->
    <div id="pisos"></div>

</div>


<script>
function mostrarBloco(bloco) {
    const sec = document.getElementById("pisos");
    sec.style.display = "block";

    let pisos = [];

    if (bloco === 'A') pisos = ['A0'];
    if (bloco === 'B') pisos = ['B0','B1'];
    if (bloco === 'F') pisos = ['F1','F0','F-1','F-2'];
    if (bloco === 'G') pisos = ['G1','G0','G-1'];

    let html = `<h2>Pisos do Bloco ${bloco}</h2>`;
    html += `<div class="pisos-grid">`;

    pisos.forEach(p => {
        html += `<button class='piso-btn' onclick="alert('Abrir salas do piso ${p}')">${p}</button>`;
    });

    html += `</div>`;

    sec.innerHTML = html;

    window.scrollTo({ top: sec.offsetTop - 20, behavior: "smooth" });
}
</script>

</body>
</html>
