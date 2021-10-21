<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/criaUsuario.css">
    <title>Criar Usuario</title>
    <link rel="shortcut icon" href="public/imagens/iconeUPF.png" type="image/png">
</head>

<body class="body">
    <div class="login">
        <div class="logoeicon">
            <div>
                <img class="logo" src="public/imagens/logoUPF.png" alt="LogoDaPagina">
            </div>
            <span class="redesocial">
                <a class="icones" href="https://www.facebook.com/universidadedepassofundo" target="_blank"><img src="public/imagens/facebook.png" alt="Facebook"></a>
                <a class="icones" href="https://twitter.com/universidadeupf" target="_blank"><img src="public/imagens/twitter.png" alt="Twitter"></a>
                <a class="icones" href="https://www.instagram.com/universidadeupf/" target="_blank"><img src="public/imagens/instagram.png" alt="Instagram"></a>
                <a class="icones" href="https://www.linkedin.com/school/universidade-de-passo-fundo/" target="_blank"><img src="public/imagens/linkedin.png" alt="Linkedin"></a>
                <a class="icones" href="https://www.youtube.com/user/UPFoficial" target="_blank"><img src="public/imagens/youtube.png" alt="Youtube"></a>
            </span>
        </div>
        <div class="linha_vertical"></div>
        <div class="referencia"></div>
        <div class="titulo1">
                <p>Criar Usuario</p>
            </div>
        <div class="todasinfos">
            <form action="app/controller/criaUsuario.php" method="POST">
                <input class="info" name="f_email" type="email" placeholder="E-mail:" required>
                <input class="info" name="f_senha" type="password" placeholder="Senha:" maxlength="8" minlength="5" required>
                <input class="info" name="f_csenha" type="password" placeholder="Confirme a Senha:" maxlength="8" minlength="5" required>
                <button class="btentrar" type="submit"><a>Cadastrar</a></button>
            </form>
        </div>
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