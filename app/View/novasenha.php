<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/novasenha.css">
    <title>Universidade de Passo Fundo</title>
    <link rel="shortcut icon" href="public/imagens/iconeUPF.png" type="image/png">
</head>
<body class="body">
    <div class="login">
        <div>
            <img class="img" src="public/imagens/logoUPFnome.png" alt="LogoDaPagina">
        </div>
        <div class="linha_vertical"></div>
        <div class="referencia"></div>
        <div class="titulo1">
            <p>Redefina a sua senha</p>
        </div>
        <div class="todasinfos">
            <form class="esqsenha" action="app/controller/alteraSenha.php" method="POST">
                <input class="info" name="f_senha" type="password" placeholder="Nova senha"  minlength="5" required>
                <input class="info" name="f_csenha" type="password" placeholder="Repetir senha" minlength="5" required>
                <div class="btsalvar">
                    <input class="bt" type="submit" value="Salvar" />
                </div>
            </form>
        </div>
    </div>
    <div class="rodape ">
        <div class="font-color-white">
            <h3><i>Conhecimento é a nossa natureza.</i></h3>
        </div>
        <div class="font-color-white"> BR 285, São José | Passo Fundo/RS | CEP: 99052-900</div>
        <div class="font-color-white">Canais de atendimento:
            <a href="tel:+55-54-3316-7000" title="Telefone UPF">(54)3316-7000</a>,<br>
            <a href="mailto:informacoes@upf.br" title="E-mail para a Central de Informações">informacoes@upf.br</a>
        </div>
    </div>
</body>
</html>