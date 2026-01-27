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
    max-height: 110vh; /* altura máxima da tela */
    border-radius: 30px;
    overflow: hidden;
    box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    margin-bottom: 30px;
}

.hero img {
    width: 100%;
    height: auto; /* mantém proporção original */
    display: block;
    border-radius: 18px;
}

/* TEXTO */
.description {
    background: white;
    padding: 25px;
    border-radius: 18px;
    font-size: 18px;
    line-height: 1.6;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    margin-bottom: 30px;
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

/* SEÇÕES INTERATIVAS */
.info-section {
    background: white;
    padding: 20px;
    border-radius: 14px;
    margin-top: 20px;
    font-size: 17px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    display: none; /* Escondido por padrão */
}

.info-section h3 {
    margin-top: 0;
    color: #b30000;
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
        <button class="btn" onclick="showInfo('horario')">⏰ Horário</button>
        <button class="btn" onclick="showInfo('regras')">📜 Regras</button>
        <button class="btn" onclick="showInfo('localizacao')">🗺️ Ver no mapa</button>
        <button class="btn" onclick="showInfo('contactos')">📞 Contactos</button>
    </div>

    <!-- SEÇÕES INTERATIVAS -->
    <div id="horario" class="info-section">
        <h3>Horário da Biblioteca</h3>
        <p>
            Segunda a Sexta: 08:15 - 17:30<br>
            Fins de semana: Encerrado
        </p>
    </div>

    <div id="regras" class="info-section">
        <h3>Regras da Biblioteca</h3>
        <ul>
            <li>Manter silêncio absoluto dentro da biblioteca. Conversas devem ser feitas em voz baixa e apenas nos espaços designados.</li>
            <li>Desligar ou colocar no modo silencioso todos os dispositivos eletrónicos (telemóveis, tablets, relógios com som).</li>
            <li>Não comer ou beber próximo aos livros ou equipamentos. Somente água em garrafas fechadas é permitida.</li>
            <li>Respeitar os livros e materiais: manusear com cuidado, não dobrar páginas ou riscar textos.</li>
            <li>Devolver todos os livros e materiais no prazo estipulado. Atrasos devem ser justificados junto do bibliotecário.</li>
            <li>Usar computadores e recursos digitais apenas para fins educativos e de pesquisa. Jogos, redes sociais ou conteúdos pessoais não são permitidos.</li>
            <li>Mantém os espaços limpos: lixo deve ser depositado nos cestos apropriados e mesas organizadas após uso.</li>
            <li>Respeitar os colegas e funcionários: atos de desrespeito ou perturbação podem resultar em suspensão temporária da utilização da biblioteca.</li>
            <li>Não remover livros ou materiais sem registo. Todos os empréstimos devem ser registados na receção da biblioteca.</li>
            <li>Reservar salas de estudo em grupo com antecedência e respeitar o horário reservado.</li>
            <li>Evitar movimentações bruscas que possam danificar móveis, estantes ou equipamentos.</li>
            <li>Evitar uso de perfumes fortes ou produtos que possam incomodar outros utilizadores.</li>
            <li>Participar em sessões de orientação sobre utilização da biblioteca e recursos digitais sempre que solicitado.</li>
            <li>Respeitar a política de copyright e citar corretamente qualquer material utilizado em trabalhos.</li>
            <li>Qualquer dano causado a livros, equipamentos ou instalações deve ser reportado imediatamente ao responsável da biblioteca.</li>
            <li>Incentivar a leitura e o estudo coletivo de forma respeitosa, ajudando a manter a biblioteca como um espaço de conhecimento acessível a todos.</li>
        </ul>
    </div>

    <div id="localizacao" class="info-section">
        <h3>Localização</h3>
        <p>R. Delfim Lima Apartado 512, 4411-701 Vila Nova de Gaia.</p>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3124.123456789!2d-8.619!3d41.157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2464b0!2sEscola%20de%20Canelas!5e0!3m2!1spt-PT!2spt!4v1234567890" 
            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>

    <div id="contactos" class="info-section">
        <h3>Contactos</h3>
        <p>
            Telefone: +351 223 456 789<br>
            Email: biblioteca@escoladecanelas.pt
        </p>
    </div>

    <!-- VOLTAR -->
    <div class="back">
        <button onclick="location.href='menuprimario.php'">
            ⬅ Voltar ao menu
        </button>
    </div>

</div>

<script>
// Função para mostrar a seção correta
function showInfo(sectionId) {
    // Esconder todas as seções
    const sections = document.querySelectorAll('.info-section');
    sections.forEach(sec => sec.style.display = 'none');

    // Mostrar a seção selecionada
    const selected = document.getElementById(sectionId);
    if(selected) {
        selected.style.display = 'block';
        // Scroll suave até a seção
        selected.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}
</script>

</body>
</html>
