<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principa</title>
    <link rel="stylesheet" href="assets/css/style-index.css">
    <link rel="stylesheet" href="assets/css/style-main.css">
</head>

<body>

<?php

    require('conexao.php');


    $select_produto = mysqli_query($conexao, "SELECT * FROM produto ORDER BY produto_id ASC");
    // $select_produto = mysqli_query($conexao, "SELECT * FROM ")
            

    if (mysqli_num_rows($select_produto) > 0) {
        
        $dados_produto = mysqli_fetch_assoc($select_produto);
        
    } else {
        
        echo "<script> alert ('HOUVE UM ERRO AO CARREGAR A PAGINA!');</script>";
            
        echo "<script> window.location.href='$url_admin/curso';</script>";
        
        
    }


?>


    <!--Cabeçario do Site, com a imagem de logo e três menus que redirecionam para os principais recursos do site-->
    <Header>
        <div class="menup">
            <div class="logo"><a href="index.php"><img src="assets/img/logo-pets.png" alt="Logo da Empresa" class="logo_xpets"></a></div>

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

    <!-- 
            Conteudo principal da pagina, contendo: 
        uma imagem e texto promocional, 
        os principais produtos da loja, 
        um seção destinada a promover nossos serviços,
        e uma seção com os comentarios de clientes satisfeitos com o serviço.
     -->

    <main>
        <section>
            <div class="preenchimento" >
                <div class="imagem_feliz">
                    <img src="assets/img/licensed-image.jpg" alt="">
                </div>
                <div class="texto_patrocinado">
                    <h3>Xpets</h3>
                    <p>Aqui, dedicamos nosso amor e cuidado a cada patinha, plumagem e pelagem que entra pela nossa porta. Com uma variedade de produtos premium, serviços de grooming de alta qualidade e uma equipe apaixonada por pets, estamos prontos para transformar cada visita em uma experiência inesquecível para você e seu companheiro de quatro patas. Junte-se a nós e faça do seu animal de estimação um VIP, porque eles merecem o melhor!</p>
                </div>
            </div>
        </section>

        <section class="vitrine">
            <div class="vitrine-cab">
                <h1>Nossos Principais Produtos</h1>
            </div>
            
            <div class="conteudo-vit">
        <?php while ($dados_produto = mysqli_fetch_assoc($select_produto)) { ?>
            <div class="card-produto">
                <img src="<?php echo $dados_produto['imagem']; ?>" alt="<?php echo $dados_produto['nome']; ?>">
                <h2><?php echo $dados_produto['nome']; ?></h2>
                <p><?php echo $dados_produto['descricao']; ?></p>
                <p>Preço: R$ <?php echo number_format($dados_produto['preco'], 2); ?></p>
                <a href="#">Comprar</a>
            </div>
        <?php } ?>
            </div>

            <div class="vitrine-end"></div>
            
        </section>

        <section class="comentarios">
            <!-- Escrever a parte do lerolero mais tarde -->
        </section>

        <section class="vitrine-serv">

            <div class="vitrine-cab"><h2>Veja tambem nossos serviços</h2></div>

            <div class="serv-contest">
                <div class="card-serv">
                    <h2>Banho e Cuidados Sanitarios</h2>
                    <p>
                        Cuidados de higiene basicos para que seu pet sempre fique limpinho e cheiroso.
                    </p>
                    <a href="">Marque o atendimento online por aqui!</a>
                </div>

                <div class="card-serv">
                    <h2>Serviços de Atendimentos Veterinario</h2>
                    <p>
                        Cuidados de saúde para que seu anjinho fique sempre saudavel.
                    </p>
                    <a href="">Marque o atendimento online por aqui!</a>
                </div>

                <div class="card-serv">
                    <h2>Educaçao e Treinamento de Pets</h2>
                    <p>
                        Ensine as boas praticas para seu bichinho. Mesmo ele precisa aprender a ler e escrever!
                    </p>
                    <a href="">Marque o atendimento online por aqui!</a>
                </div>
            </div>

            <div class="vitrine-end"></div>
        </section>
        
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