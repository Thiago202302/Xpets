<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\style-main.css">
    <link rel="stylesheet" href="assets\css\style-login.css">
    <title>Login</title>
</head>

<body>
    <!--Cabeçario do Site, com a imagem de logo e três menus que redirecionam para os principais recursos do site-->
    <Header>
        <div class="menup">
            <div class="logo"><a href="index.php"><img src="assets/img/logo-pets.png" alt="Logo da Empresa"
                        class="logo_xpets"></a></div>

            <div class="Menu">
                <ul class="submenu">
                    <li><a href="Loja.php" class="button">Loja</a></li>
                    <li><a href="servicos.php" class="button">Serviços</a></li>
                    <li><a href="login.php" class="button">Login</a></li>

                    <li hidden><a href="#" class="button">Perfil</a></li>
                    <li hidden><a href="#" class="button">Carrinho</a></li>
                </ul>
            </div>
        </div>
    </Header>

    <main>

        <div class="cabecario-login">
            <h1>Faça login para poder fazer compras no site!</h1>
        </div>

        <div class="login-container">
            <form action="valida.php" method="post">
                <div class="container-login-a">
                    <label for="nome-login">Login: </label>
                    <input type="text" name="nome-login" id="nome-login" required><br>

                    <label for="nome-senha">Senha:</label>
                    <input type="password" name="nome-senha" id="nome-senha" required><br>
                </div>

                <button type="submit">Acessar</button>

            </form>
        </div>

        <div class="redirec-cadastro">
            <h1>Ainda não possui conta? <a href="cadastro.php">Cadastre-se aqui!</a></h1>
        </div>

    </main>

        <!--
        Parte do Rodape do site , contendo três conteiners: 
        Artigos sobre nois, 
        informacões para contato 
        e nosso endereço.
    -->

    <footer>
        <div class="info">
            <div class="lerolero">
                <ul class="lero">
                    <li><a href="#">Quem somos</a></li>
                    <li><a href="#">Nossa missão</a></li>
                    <li><a href="#">Termos de uso</a></li>
                    <li><a href="#">ESG</a></li>
                </ul>
            </div>

            <div class="telefones">
                <p>Telefones:</p>
                <div style="width: 2px;"></div>
                <div>
                    <p>92 93314699</p>
                    <p>92 93314699</p>
                    <p>92 93314699</p>
                </div>
            </div>

            <div class="endereco">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                    var setting = {"query":"1-1 Chiyoda, Tóquio, Japão","width":300,"height":150,"satellite":false,"zoom":14,"placeId":"ChIJx-meWQmMGGARx4Wl1t8hdwE","cid":"0x17721dfd6a585c7","coords":[35.6865546,139.7578008],"lang":"pt","queryString":"1-1 Chiyoda, Tóquio, Japão","centerCoord":[35.6865546,139.7578008],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1005770"};
                    var d = document;
                    var s = d.createElement('script');
                    s.src = 'https://1map.com/js/script-for-user.js?embed_id=1005770';
                    s.async = true;
                    s.onload = function (e) {
                      window.OneMap.initMap(setting)
                    };
                    var to = d.getElementsByTagName('script')[0];
                    to.parentNode.insertBefore(s, to);
                  })();</script><a href="https://1map.com/pt/map-embed">1 Map</a></div>
            </div>
        </div>

        <div class="copyright">
            <H1>© 2023 Xpets S.A.</H1>
        </div>
    </footer>
</body>

</html>