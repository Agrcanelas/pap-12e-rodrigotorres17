session_start();

if (!isset($_SESSION['utilizador'])) {
    $_SESSION['utilizador'] = "Utilizador";
}

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
?></Text><Text>```</Text><Text>```html</Text><Text preserveWhitespace><!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Mapa Interativo - Escola de Canelas</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f4f4f4;
}

header{
    background:#b30000;
    color:#fff;
    padding:15px 25px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 3px 12px rgba(0,0,0,.2);
}

.header-title{
    font-size:24px;
    font-weight:700;
}

.user-area{
    display:flex;
    align-items:center;
    gap:12px;
}

.user-name{
    background:rgba(255,255,255,.15);
    padding:8px 14px;
    border-radius:20px;
    font-size:14px;
    font-weight:600;
}

.logout-btn{
    background:#fff;
    color:#b30000;
    border:none;
    padding:8px 14px;
    border-radius:20px;
    cursor:pointer;
    font-weight:600;
    transition:.25s;
}

.logout-btn:hover{
    transform:scale(1.05);
    background:#ffe5e5;
}

.container{
    max-width:1500px;
    margin:25px auto;
    padding:0 15px;
}

.map-wrapper{
    position:relative;
    width:100%;
    background:#fff;
    border-radius:18px;
    overflow:hidden;
    box-shadow:0 8px 25px rgba(0,0,0,.15);
}

.map-wrapper img{
    width:100%;
    display:block;
}

.hotspot{
    position:absolute;
    width:34px;
    height:34px;
    border-radius:50%;
    background:#b30000;
    border:4px solid #fff;
    cursor:pointer;
    box-shadow:0 0 0 0 rgba(179,0,0,.6);
    animation:pulse 2s infinite;
    transition:.25s;
}

.hotspot:hover{
    transform:scale(1.15);
}

.hotspot.active{
    background:#007bff;
    animation:none;
}

.hotspot::after{
    content:attr(data-name);
    position:absolute;
    top:-42px;
    left:50%;
    transform:translateX(-50%);
    background:#222;
    color:#fff;
    padding:6px 10px;
    border-radius:10px;
    font-size:13px;
    white-space:nowrap;
    opacity:0;
    transition:.2s;
    pointer-events:none;
}

.hotspot:hover::after{
    opacity:1;
}

@keyframes pulse{
    0%{ box-shadow:0 0 0 0 rgba(179,0,0,.6);}
    70%{ box-shadow:0 0 0 15px rgba(179,0,0,0);}
    100%{ box-shadow:0 0 0 0 rgba(179,0,0,0);}
}

/* POSIÇÕES DOS BOTÕES */
#biblioteca{ top:42%; left:73%; }
#blocoA{ top:77%; left:74%; }
#blocoB{ top:61%; left:74%; }
#blocoF{ top:54%; left:56%; }
#blocoG{ top:31%; left:55%; }
#cantina{ top:14%; left:57%; }
#pavilhao{ top:35%; left:9%; }
#coberto{ top:57%; left:10%; }

svg{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    pointer-events:none;
}

.route{
    fill:none;
    stroke:#007bff;
    stroke-width:6;
    stroke-linecap:round;
    stroke-linejoin:round;
    stroke-dasharray:2000;
    stroke-dashoffset:2000;
    animation:draw 2.5s linear forwards;
}

@keyframes draw{
    to{ stroke-dashoffset:0; }
}

.controls{
    margin-top:20px;
    display:flex;
    gap:12px;
    flex-wrap:wrap;
}

.controls button{
    background:#b30000;
    color:#fff;
    border:none;
    padding:12px 18px;
    border-radius:12px;
    font-weight:600;
    cursor:pointer;
    transition:.25s;
}

.controls button:hover{
    background:#d60000;
}

.info{
    margin-top:18px;
    padding:18px;
    background:#fff;
    border-radius:14px;
    box-shadow:0 4px 15px rgba(0,0,0,.08);
}

.info h3{
    color:#b30000;
    margin-bottom:8px;
}

@media(max-width:900px){
    .header-title{ font-size:18px; }
    .hotspot{
        width:26px;
        height:26px;
        border-width:3px;
    }
}
</style>
</head>

<body>

<header>
    <div class="header-title">Mapa Interativo - Escola de Canelas</div>

    <div class="user-area">
        <div class="user-name">
            👤 Olá, <?php echo htmlspecialchars($_SESSION['utilizador']); ?>
        </div>

        <form method="get">
            <button type="submit" name="logout" class="logout-btn">
                🔐 Logout
            </button>
        </form>
    </div>
</header>

<div class="container">

    <div class="map-wrapper" id="mapa">

        <img src="imgs/planta.png" alt="Planta da escola">

        <svg id="svgRoutes"></svg>

        <div class="hotspot" id="biblioteca" data-name="Biblioteca"></div>
        <div class="hotspot" id="blocoA" data-name="Bloco A"></div>
        <div class="hotspot" id="blocoB" data-name="Bloco B"></div>
        <div class="hotspot" id="blocoF" data-name="Bloco F"></div>
        <div class="hotspot" id="blocoG" data-name="Bloco G"></div>
        <div class="hotspot" id="cantina" data-name="Cantina"></div>
        <div class="hotspot" id="pavilhao" data-name="Pavilhão"></div>
        <div class="hotspot" id="coberto" data-name="Coberto"></div>

    </div>

    <div class="controls">
        <button onclick="limparPercurso()">🧹 Limpar Percurso</button>
        <button onclick="window.location.href='biblioteca.php'">📚 Biblioteca</button>
        <button onclick="window.location.href='cantina.php'">🍽 Cantina</button>
        <button onclick="window.location.href='pavilhao.php'">🏀 Pavilhão</button>
    </div>

    <div class="info">
        <h3>Como utilizar</h3>
        <p><strong>1.º clique:</strong> seleciona o destino.</p>
        <p><strong>2.º clique:</strong> desenha o percurso em simulação.</p>
        <p><strong>Botão Limpar:</strong> remove o percurso atual.</p>
    </div>

</div>

<script>
const rotas = {
    biblioteca: "M 100 730 L 500 730 L 500 430 L 1080 430",
    blocoA: "M 100 730 L 500 730 L 500 840 L 1090 840",
    blocoB: "M 100 730 L 500 730 L 500 650 L 1080 650",
    blocoF: "M 100 730 L 500 730 L 500 560 L 830 560",
    blocoG: "M 100 730 L 500 730 L 500 350 L 830 350",
    cantina: "M 100 730 L 500 730 L 500 170 L 850 170",
    pavilhao: "M 100 730 L 100 410 L 190 410",
    coberto: "M 100 730 L 100 650 L 200 650"
};

let selecionado = null;

document.querySelectorAll('.hotspot').forEach(h => {

    h.addEventListener('click', () => {

        if(selecionado !== h.id){

            limparPercurso();

            document.querySelectorAll('.hotspot')
                .forEach(x => x.classList.remove('active'));

            h.classList.add('active');

            selecionado = h.id;

        } else {

            desenharPercurso(h.id);

        }
    });
});

function desenharPercurso(destino){

    limparPercurso();

    const svg = document.getElementById('svgRoutes');

    const path = document.createElementNS("http://www.w3.org/2000/svg","path");

    path.setAttribute("d", rotas[destino]);

    path.setAttribute("class", "route");

    svg.appendChild(path);
}

function limparPercurso(){

    document.getElementById('svgRoutes').innerHTML = "";

    document.querySelectorAll('.hotspot')
        .forEach(x => x.classList.remove('active'));

    selecionado = null;
}
</script>

</body>
</html>