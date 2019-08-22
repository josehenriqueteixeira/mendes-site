<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <!-- Metatags -->
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="pt-br">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Mendes Cavalcante - Soluções residenciais, arquitetura no Morumbi-SP</title>
        <meta name="author" content="José Henrique Teixeira">
        <meta name="description" content="A Mendes Cavalcante vai do macro ao micro, sendo uma empresa diferenciada por proporcionar tudo em um só lugar: móveis sob medida, obras e reformas">
        <meta name="keywords" content="mendes cavalcante, solucoes residenciais, design de interiores 
                                    arquitetura, arquiteto, escritório de arquitetura, são paulo, morumbi, reforma, móveis planejados, móveis sob medida, 
                                    consultoria com arquiteto, projeto, projeto arquitetura, projeto 3d, obra, apartamentos novos">
        <meta property="og:url" content="https://www.mendescavalcante.com.br">
        <meta property="og:title" content="Mendes Cavalcante - Soluções residenciais, arquitetura no Morumbi-SP">
        <meta property="og:image" content="http://www.mendescavalcante.com.br/img/logo/logo-compartilhamento.jpg">
        <meta property="og:description" content="A Mendes Cavalcante vai do macro ao micro, sendo uma empresa diferenciada por proporcionar tudo em um só lugar: móveis sob medida, obras e reformas">     

        <!-- Favicon -->
        <link rel="favicon" href="favicon.ico" />

        <!-- Fontes -->
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
        
        <!-- Estilos -->        
        <link rel="stylesheet" type="text/css" href="css/bulma.css">
        <link rel="stylesheet" href="css/lightbox.min.css">
        <link rel="stylesheet" type="text/css" href="css/ux.css">
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

        <!-- Scripts -->
        <script src="js/lightbox-plus-jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-144835187-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-144835187-1');
        </script>

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-THZDHL2');</script>
        <!-- End Google Tag Manager -->

    </head>
    <body class="ux-gradient" id="home">

        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THZDHL2"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <?php include "partials/cabecalho.html" ?>

        <section class="section ux-cover form-orcamento">
            <div class="container">
                <div class="columns">
                    <div class="column">
                        <h2 class="subtitle is-2 has-text-white ux-text-title ux-serifa">Faça seu <br> orçamento aqui!</h2>
                        <p class="has-text-white ux-left-text ux-text-left">Soluções em Arquitetura e Design de interiores</p>
                        <p class="has-text-white ux-left-text ux-text-left">Tranquilidade e reforma podem estar juntos no mesmo lugar!</p>
                    </div>
                    <div class="column">
                        <form class="ux-form" method="POST" action="envio_email.php">
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label has-text-white is-small">Nome*</label>
                                        <div class="control has-icons-left">
                                            <input class="ux-input input" id="nome" placeholder="Ex: João da Silva" name="nome" required="required" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white is-small">Email*</label>
                                        <div class="control has-icons-left">
                                            <input class="ux-input input" id="email" placeholder="Ex: email@email.com.br" name="email" required="required" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label has-text-white is-small">Telefone*</label>
                                        <div class="control has-icons-left">
                                            <input class="ux-input input" id="telefone" placeholder="Ex: 11 XXXX-XXXX" name="telefone" required="required" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-phone"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white is-small">Celular</label>
                                        <div class="control has-icons-left">
                                            <input class="ux-input input" id="celular" placeholder="Ex: 11 9XXXX-XXXX" name="celular" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-mobile-alt"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="field">
                                <label class="label has-text-white is-small">Endereço*</label>
                                <div class="control has-icons-left ux-fill">
                                    <input class="ux-input input" id="endereco" name="endereco" placeholder="Ex: Avenida Dr. Guilherme Dumont Vilares, 693" required="required" type="text">
                                    <span class="icon is-small is-left">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <label class="label has-text-white is-small">Cidade*</label>
                                        <div class="control has-icons-left ux-fill">
                                            <input class="ux-input input" id="cidade" placeholder="Ex: São Paulo" name="cidade" required="required" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-map"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white is-small">Bairro*</label>
                                        <div class="control has-icons-left ux-fill">
                                            <input class="ux-input input" id="bairro" placeholder="Ex: Morumbi" name="bairro" required="required" type="text">
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-map-marked"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label class="label has-text-white is-small">Tipo*</label>
                                        <div class="control has-icons-left">
                                            <div class="select" id="tipo" name="tipo" required="required">
                                                <select>
                                                    <option value="Casa">Casa</option>
                                                    <option value="Apartamento">Apartamento</option>
                                                </select>
                                            </div>
                                            <span class="icon is-small is-left">
                                                <i class="fas fa-home"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label has-text-white is-small">Observação*</label>
                                <div class="control has-icons-left">
                                    <textarea class="textarea" rows="2" id="observacao" placeholder="Observações..." name="observacao" required="required" type="text"></textarea>
                                </div>
                            </div>
                            <div class="field is-grouped is-grouped-right">
                                <div class="control">
                                    <input class="button is-warning" type="submit" value="Enviar"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <?php include "partials/quem-somos.html" ?>

        <?php include "partials/galeria.html" ?>
        
        <?php include "partials/parceiros.html" ?>
        
        <?php include "partials/contato.html" ?>

        <?php include "partials/contato-form.html" ?>
        
        <?php include "partials/rodape.html" ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

        <script>
            var mySwiper = new Swiper ('.swiper-container', {
                // Optional parameters
                direction: 'horizontal',
                loop: true,
            
                // Navigation arrows
                navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
                },
            
                // And if we need scrollbar
                scrollbar: {
                el: '.swiper-scrollbar',
                },
                
                autoplay: {
                    delay: 3000,
                }
            })  
        </script>


    </body>
</html>