<?php
    include('../functions.php');

    if(isset($_POST['select-equipe'])){
        if($_GET['modalidade'] == 2){
            inscricaoJogador($_POST['select-equipe'], $_POST['rm-usuario']);
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futsal</title>

    <!-- Parte destinada a importação de fontes, links etc. -->
    <link rel="stylesheet" href="style_home.css">
    <link rel="shortcut icon" href="../assets/favicon-16x16.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Linkando o javascript -->
    <!-- <script src="script.js"></script> -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: var(--font);
            text-decoration: none;
        }
        :root{
            --principal-color: #ffe52f;
            --secondary-color: #19191a;
            --third-color: #5A05B3;
            --fontColor: #f5f5f5;
            --font: 'Montserrat', sans-serif;
            --white: white;
            --black: black;
        }

        body{
            background-color: var(--secondary-color);
            width: 100vw;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Estilizando a caixa principal e tudo que ela contém */

        .box-main{
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;

            flex-wrap: wrap;

            background-color: var(--white);
            /* /* margin-block: 9vh;
            margin-inline: 7vw; */
            width: 50rem;
            height: 60%; 



            border-radius: 0px 30px 30px 0px;
            box-shadow: -3px -3px 5px var(--secondary-color), 3px 3px 5px var(--secondary-color);
        }
        .form{

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            flex-wrap: wrap;

            color: var(--secondary-color);
        }

        @media screen and (max-width: 800px) {
            #img{
                width: 100%;
                height: auto;
            }
            .box-main{
                padding: 2rem;
                width: 100%;
                height: auto;
                border-radius: 0;
            }
        }

        /* input ,select e botão */

        label{
            margin-top: 1rem;
            margin-bottom: 0.3rem;
        }

        input, select{
            cursor: pointer;

            background-color: var(--white);
            color: var(--secondary-color);
            border: 1px solid var(--secondary-color);
            border-radius: 6px;
            outline: none;

            caret-color: var(--secondary-color);
            
            width: 100%;

            padding: 0.5rem;
            transition: 0.6s;
        }
        input::placeholder, select::placeholder{
            color: var(--secondary-color);
        }
        input:focus, select:focus{
            background-color: var(--secondary-color);
            color: var(--white);
            border: 1px solid var(--white);
            border-radius: 6px;
            outline: none;

            caret-color: var(--white);
        }
        input:focus::placeholder, select:focus::placeholder{
            color: var(--white);
        }
        .btn{
            width: 20rem;
            padding: 0.8rem;
            margin-block: 2rem;

            font-size: 16px;

            cursor: pointer;

            border: 1px solid var(--secondary-color);
            border-radius: 6px;

            background-color: var(--white);
            color: var(--secondary-color);

            text-align: center;

            transition: 0.6s;
        }
        .btn:hover{
            border: 1px solid var(--white);

            background-color: var(--secondary-color);
            color: var(--white);
        }
        p#title-page{
            font-weight: 600;
            font-size: 35px;
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
        <!-- DIV DO QUADRADO GRANDE CINZA -->
        <!-- DIV DO CARTAZ-->
        <img src="../assets/cartazes/panfleto_fifa.png" alt="" height="60%" id="img">
        <div class="box-main">
        
        <!-- DIV DO FORM-->
        <div class="form">
            <!-- Titulo de seção feito com <p> -->
        <p id="title-page">Inscrição para o FIFA</p>
                <?php
                echo '
                <form action="" method="post" class="form">
                    <!-- SELECT DAS EQUIPES -->
                        <label for="select-equipe">Selecione sua equipe</label>
                        <select name="select-equipe" id="select-equipe">
              ';
              formInscricaoEquipe($_GET['modalidade']);
              echo '
                  </select>
                  <!-- FIM SELECT DAS EQUIPES -->
                  <!-- RM USUARIO -->
                      <label for="rm-usuario">Seu rm</label>
                      <input type="text" id="rm-usuario" name="rm-usuario"  value="'.$_SESSION['rm'].'">
                  <!-- FIM RM USUARIO -->
                  <!-- NOME USUARIO -->
                      <label for="nome-usuario">Seu nome</label>
                      <input type="text" id="nome-usuario" name="nome-usuario" value="'.$_SESSION['nm_usuario'].'">
                  <!-- FIM NOME USUARIO -->
                  <button type="submit" class="btn">Enviar</button>
              </form>
              ';
                ?>
            <!-- </fieldset> -->
        </div>
    </div>
</body>
</html>