<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Universidade de Passo Fundo </title>
    <link rel="shortcut icon" href="public/imagens/iconeUPF.png" type="image/png">
    <link rel="stylesheet" href="public/css/paginaPrincipal.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="background">
    <header class="menu">
        <div><img class="imgupf" src="public/imagens/logoUPF_branco.png" alt="logoDaPagina"></div>
        <div>
            <a href="index.php" onclick="<?php session_destroy()?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" color="white" font-size="28px" class="bi bi-power" viewBox="0 0 16 16">
                    <path d="M7.5 1v7h1V1h-1z" />
                    <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
                </svg>
            </a>
        </div>
    </header>
    <nav>
        <ul>
            <li><a class="active" href="#home">Home</a></li>
            <li><a href="public/arquivos/materialdeestudos/cartilha-lgpd.pdf" target="_blank">Treinamento LGPD</a></li>
            <li><a href="public/arquivos/materialdeestudos/DizAiDTI_GUIA DE ATENDIMENTO - v8.pdf" target="_blank">Treinamento DTI</a></li>
            <li><a href="https://www.w3schools.com/default.asp" target="_blank">3WSchools</a></li>
            <li><a href="https://www.w3schools.com/html/default.asp" target="_blank">HTML</a></li>
            <li><a href="https://www.w3schools.com/css/default.asp" target="_blank">CSS</a></li>
            <li><a href="https://www.w3schools.com/php/default.asp" target="_blank">PHP</a></li>
            <li><a href="criarUsuario.php" target="_blank">Criar novo usuario</a></li>
        </ul>
    </nav>

    <div>
        <h3 class="titulo">Treinamento</h3>
    </div>
    <div class="iconesAcesso">
        <div id="box-1" class="box">
            <img class="img-portal" src="public/imagens/user.png" alt="">
            <div id="box-11" class="box2"><a class="link" href="https://platform.senior.com.br/login/?redirectTo=https%3A%2F%2Fplatform.senior.com.br%2Fplataforma%2F&tenant=upf.br" target="_blank"><b>Portal <br> Gestão de Pessoas</b></a></div>
        </div>
        <div id="box-2" class="box">
            <img class="img-GAD" src="public/imagens/GuiaAtendimento.png" alt="">
            <div id="box-22" class="box2"><a class="link" href="https://secure.upf.br/apps/conteudo/gpGuiaDTI.php" target="_blank"><b>Guia de Atendimento<br>DTI</b></a></div>
        </div>
        <div id="box-3" class="box">
            <img class="img-lgpd" src="public/imagens/lgpd.png" alt="">
            <div id="box-33" class="box2"><a class="link" href="https://secure.upf.br/apps/conteudo/gpLGPD.php?u=163939" target="_blank"><b>LGPD</b></a></div>
        </div>
        <div id="box-4" class="box">
            <img class="img" src="public/imagens/processosEletronicos.png" alt="">
            <div id="box-44" class="box2"><a class="link" href="https://secure.upf.br/workflow/wftoday.aspx?t=%2bGOwEgotndtnnWo5sN8%2fZM8%2byjq0MEV2gXIj3Bn2Q63sfPbX0BIpgfSYICzQoExpDGV33GFcFU5u7NBnRoFgZUciXten7Zn68em3WTf%2b9ROf2adwFh%2fqQ%2fUcPdb6uXlS" target="_blank"><b>Processos <br>Eletronicos</b></a></div>
        </div>
        <div id="box-5" class="box">
            <img class="modle" src="public/imagens/moodleMobile.png" alt="">
            <div id="box-55" class="box2"><a class="link" href="https://ead.upf.br/"><b>Moodle</b></a></div>
        </div>
        <div id="box-6" class="box">
            <img class="img-MANUAL" src="public/imagens/manualBoasVindas.png" alt="">
            <div id="box-66" class="box2"><a class="link" href="https://secure.upf.br/html/downloads/pdf/manual_boas_vindas.pdf" target="_blank"><b>Manual de<br>Boas-Vindas</b></a></div>
        </div>
    </div>
    <div class="caixa">
        <h3>Escopo Projeto</h3>
        O projeto presente tem como objetivo aplicar o conhecimento adquirido nos treinamentos.<br>
        O projeto tem como ponto de partida a pagina de estudos, já solicitada anteriormente, onde a mesma será aperfeiçoada com os conhecimentos adquiridos.<br>
        Começamos desenvolvendo a parte de login, juntamente com recuperação de senha, sempre partindo dos exemplos obtidos da nossa Intranet para termos uma base. A ideia de partir do login é para que possamos em paralelo já irmos aplicando um pouco de banco de dados junto.
        Mudamos algumas partes para que seja uma página mais amigável com o usuário e para que não seja uma cópia completa do site.<br>
        As paginas do site deverão ser resposnivas, facilitando o uso em dispositivos móveis.<br>
        O banco de dados que será usado para realizalção deste projeto será o mysql, onde usaremos o PDO (PHP Data Objects), que é uma extensão que fornece uma interface padronizada para trabalhar com bancos de dados.<br>
        O projeto contem com sistema de login, onde conseguiremos recuperar a senha via token de confirmação enviado por e-mail, que é onde entra a biblioteca a ser usada (PHPMailer), que está disponivel na internet.<br>

    </div>
    <div class="rodape ">
        <div class="font-color-white">
            <h3><i>Conhecimento é a nossa natureza.</i></h3>
        </div>
        <div class="font-color-white"> BR 285, São José | Passo Fundo/RS | CEP: 99052-900</div>
        <div class="font-color-white">Canais de atendimento:
            <a href="tel:+55-54-3316-7000" title="Telefone UPF">(54)3316-7000</a>,
            <a href="mailto:informacoes@upf.br" title="E-mail para a Central de Informações">informacoes@upf.br</a>
        </div>
    </div>
</body>

</html>