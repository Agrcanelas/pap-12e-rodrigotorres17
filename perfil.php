<?php
session_start();

/* Dados de exemplo */
if (!isset($_SESSION['utilizador']))
    $_SESSION['utilizador']="Utilizador";

if (!isset($_SESSION['email']))
    $_SESSION['email']="utilizador@email.pt";

if (!isset($_SESSION['tipo']))
    $_SESSION['tipo']="Utilizador";

if (!isset($_SESSION['foto']))
    $_SESSION['foto']="imgs/default.png";

/* Atualizar perfil */

if(isset($_POST['guardar'])){

    $_SESSION['utilizador']=trim($_POST['nome']);
    $_SESSION['email']=trim($_POST['email']);

    if(isset($_FILES['foto']) && $_FILES['foto']['error']==0){

        $nome=time()."_".$_FILES['foto']['name'];

        move_uploaded_file(
            $_FILES['foto']['tmp_name'],
            "uploads/".$nome
        );

        $_SESSION['foto']="uploads/".$nome;
    }

    $mensagem="Perfil atualizado com sucesso!";
}
?>

<!DOCTYPE html>

<html lang="pt">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Perfil</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Poppins,sans-serif;
}

body{

background:#f5f6fb;

}

header{

background:#b30000;

padding:20px;

color:white;

font-size:28px;

font-weight:700;

text-align:center;

box-shadow:0 5px 15px rgba(0,0,0,.2);

}

.container{

max-width:700px;

margin:40px auto;

background:white;

border-radius:20px;

padding:40px;

box-shadow:0 15px 35px rgba(0,0,0,.12);

}

.profile{

display:flex;

flex-direction:column;

align-items:center;

}

.profile img{

width:170px;

height:170px;

border-radius:50%;

object-fit:cover;

border:6px solid #b30000;

margin-bottom:20px;

}

input[type=text],
input[type=email],
input[type=password]{

width:100%;

padding:14px;

margin-top:8px;

margin-bottom:20px;

border-radius:12px;

border:1px solid #ccc;

font-size:16px;

}

input[type=file]{

margin-bottom:25px;

}

label{

font-weight:600;

}

.tipo{

background:#ffe8e8;

padding:12px;

border-radius:12px;

margin-bottom:25px;

text-align:center;

font-weight:600;

color:#b30000;

}

button{

background:#b30000;

color:white;

border:none;

padding:14px;

width:100%;

font-size:17px;

border-radius:12px;

cursor:pointer;

transition:.3s;

}

button:hover{

background:#d00000;

}

.back{

margin-top:20px;

text-align:center;

}

.back a{

text-decoration:none;

color:#b30000;

font-weight:700;

}

.msg{

background:#d4edda;

color:#155724;

padding:12px;

border-radius:10px;

margin-bottom:20px;

text-align:center;

}

</style>

</head>

<body>

<header>

Meu Perfil

</header>

<div class="container">

<?php

if(isset($mensagem))
echo "<div class='msg'>$mensagem</div>";

?>

<form method="post" enctype="multipart/form-data">

<div class="profile">

<img src="<?php echo $_SESSION['foto'];?>">

</div>

<label>Fotografia</label>

<input type="file" name="foto">

<label>Nome</label>

<input
type="text"
name="nome"
value="<?php echo htmlspecialchars($_SESSION['utilizador']);?>">

<label>Email</label>

<input
type="email"
name="email"
value="<?php echo htmlspecialchars($_SESSION['email']);?>">

<label>Nova Palavra-passe</label>

<input
type="password"
name="password"
placeholder="********">

<div class="tipo">

Tipo de conta:
<strong>

<?php echo $_SESSION['tipo'];?>

</strong>

</div>

<button name="guardar">

Guardar Alterações

</button>

</form>

<div class="back">

<a href="menuprimario.php">

⬅ Voltar ao Menu

</a>

</div>

</div>

</body>

</html>