<!DOCTYPE html>
<html lang="<?= site("lang"); ?>" itemscope itemtype="https://schema.org/WebSite">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <?= $head; ?>

        <!-- AUTHOR -->
        <meta name="author" content="<?= DEV["name"] . " | " . DEV["url"]; ?>" />

        <!-- REGION -->
        <meta name="geo.region" content="<?= REGION["region"]; ?>" />
        <meta name="geo.placename" content="<?= REGION["placename"]; ?>" />
        <meta name="geo.position" content="<?= REGION["position"]; ?>" />
        <meta name="ICBM" content="<?= REGION["icbm"]; ?>" />

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?= asset("img/favicon/apple-icon-57x57.png"); ?>">
        <link rel="apple-touch-icon" sizes="60x60" href="<?= asset("img/favicon/apple-icon-60x60.png"); ?>">
        <link rel="apple-touch-icon" sizes="72x72" href="<?= asset("img/favicon/apple-icon-72x72.png"); ?>">
        <link rel="apple-touch-icon" sizes="76x76" href="<?= asset("img/favicon/apple-icon-76x76.png"); ?>">
        <link rel="apple-touch-icon" sizes="114x114" href="<?= asset("img/favicon/favicon/apple-icon-114x114.png"); ?>">
        <link rel="apple-touch-icon" sizes="120x120" href="<?= asset("img/favicon/apple-icon-120x120.png"); ?>">
        <link rel="apple-touch-icon" sizes="144x144" href="<?= asset("img/favicon/apple-icon-144x144.png"); ?>">
        <link rel="apple-touch-icon" sizes="152x152" href="<?= asset("img/favicon/apple-icon-152x152.png"); ?>">
        <link rel="apple-touch-icon" sizes="180x180" href="<?= asset("img/favicon/apple-icon-180x180.png"); ?>">
        <link rel="icon" type="image/png" sizes="192x192" href="<?= asset("img/favicon/android-icon-192x192.png"); ?>">
        <link rel="icon" type="image/png" sizes="32x32" href="<?= asset("img/favicon/favicon-32x32.png"); ?>">
        <link rel="icon" type="image/png" sizes="96x96" href="<?= asset("img/favicon/favicon-96x96.png"); ?>">
        <link rel="icon" type="image/png" sizes="16x16" href="<?= asset("img/favicon/favicon-16x16.png"); ?>">
        <link rel="manifest" href="<?= asset("img/favicon/manifest.json"); ?>">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?= asset("img/favicon/ms-icon-144x144.png"); ?>">
        <meta name="theme-color" content="#ffffff">
        
        <!--CSS-->
        <?= $v->section("stylesheet"); ?>

    </head>
    <body id="home">

        <!--header-->
        <header class="header">
            <div class="header__navbar">
                <?php if ($v->section("navbar")): ?>
                    <?= $v->section("navbar"); ?>
                <?php else: ?>
                    <div class="container">
                        <!-- brand -->
                        <a href="<?= url(); ?>" title="Website Pai Hugo">
                            <img src="<?= asset("img/logo_topo.svg"); ?>" loading="lazy" alt="Logo Topo Pai Hugo">
                        </a>

                        <!-- toggle -->
                        <div class="header__navbar__section">


                            <div class="header__navbar__section__toggle">
                                <div class="header__navbar__section__toggle__bar"></div>
                                <div class="header__navbar__section__toggle__bar"></div>
                                <div class="header__navbar__section__toggle__bar"></div>
                            </div>
                            
                            <!-- nav -->
                            <nav class="header__navbar__section__nav">
                                
                                <h1 class="d-none">Menu de navegação</h1>
                                <ul>
                                    <li>
                                        <a href="#home">Home</a>
                                    </li>
                                    <li>
                                        <a href="#sobre">Sobre</a>
                                    </li>
                                    <li>
                                        <a href="#amarracao-amorosa">Amarração Amorosa</a>
                                    </li>
                                    <li>
                                        <a href="#trabalhos">Trabalhos</a>
                                    </li>
                                    <li>
                                        <a href="#consulta">Consulta</a>
                                    </li>
                                </ul>
                            </nav>
                            <!--end of nav-->
                            
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </header>
        <!--end of header-->

        <!--main-->
        <main id="main">
            <?= $v->section("content"); ?>
        </main>
        <!--end of main-->

        <!--footer-->
        <footer class="footer">
            
            <!--image-->
            <div class="footer__image">
                <img src="<?= asset("img/logo_rodape.svg"); ?>" loading="lazy" alt="Logo Rodapé Pai Hugo"/>
            </div>
            <!--end of image-->
            
            <!--developer-->
            <div class="footer__developer">
                <p><small>Desenvolvido por <strong><a href="<?= DEV["url"]; ?>" target="_blank" title="Especialidados em Marketing Digital"><?= DEV["name"]; ?></a></strong> </small></p>
            </div>
            <!--end of developer-->
            
        </footer>
        <!--end of footer-->

        <!-- SCRIPTS -->
        <script src="<?= asset("/js/main.min.js"); ?>"></script>
        <?= $v->section("scripts"); ?>
    </body>

</html>