<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/esqueceuSenha.css">
    <title>Universidade de Passo Fundo</title>
    <link rel="shortcut icon" href="public/imagens/iconeUPF.png" type="image/png">
</head>

<body class="body">
    <div class="login">
        <div class="imageupf">
            <img class="img" src="public/imagens/logoUPFnome.png" alt="LogoDaPagina">
        </div>
        <div class="linha_vertical"></div>
        <div class="referencia"></div>
        <div class="titulo1">
                <h1> Esqueceu senha?</h1><br>
                Redefina a sua senha em duas etapas rápidas
            </div>
            <form action="app/controller/geraToken.php" method="POST">
                <input class="info" name="f_email" type="email" placeholder="exemplo@gmail.com" required>
                <div>
                       <button class="bt"><a>Voltar</a></button>
                <button class="bt" type="submit"><a>Enviar</a></button>
                </div>

            </form>
        </div>
    </div>
    <div class="rodape">
        <div class="font-color-white">
            <h3><i>Conhecimento é a nossa natureza. </i> </h3>
        </div>
        <div class="font-color-white"> BR 285, São José | Passo Fundo/RS | CEP: 99052-900</div>
        <div class="font-color-white">Canais de atendimento:
            <a href="tel:+55-54-3316-7000" title="Telefone UPF">(54)3316-7000</a>
            <a href="mailto:informacoes@upf.br" title="E-mail para a Central de Informações">informacoes@upf.br</a>
            Canais de atendimento:<a href="tel:+55-54-3316-7000" title="Telefone UPF">(54)3316-7000</a>,
            <a href="mailto:informacoes@upf.br" title="E-mail para a Central de Informações">informacoes@upf.br</a>
        </div>
    </div>
</body>

</html>