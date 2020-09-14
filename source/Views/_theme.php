<!DOCTYPE html>
<html lang="<?= site("locale"); ?>">

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
        <link rel="shortcut icon" href="<?= asset("/img/favicon.ico"); ?>" />

        <!--CSS-->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet" />
        <?= $v->section("stylesheet"); ?>
    </head>
    <body>
        
        <!--header-->
        <header id="header">
            <div class="header_navbar">
                <?php if($v->section("navbar")): ?>
                    <?= $v->section("navbar"); ?>
                <?php else: ?>
                <div class="container">
                    <!-- brand -->
                    <a href="#">
                        <img src="_cdn/img/logo-white.svg" alt="Logo Lojas Emofer">
                    </a>
                    
                    <!-- toggle -->
                    <div class="header_menu_section">
                        <div class="header_menu_section_toggle">
                            <div class="header_menu_section_toggle_bar"></div>
                            <div class="header_menu_section_toggle_bar"></div>
                            <div class="header_menu_section_toggle_bar"></div>
                        </div>
                        <!-- nav -->
                        <nav class="header_navbar_nav">
                            <ul>
                                <li>
                                    <a href="<?= url(); ?>">Home</a>
                                </li>
                                <li>
                                    <a href="<?= url("#teste"); ?>">Empresa</a>
                                </li>
                                <li>
                                    <a href="<?= url(); ?>">Produtos</a>
                                </li>
                                <li>
                                    <a href="<?= url(); ?>">Serviços</a>
                                </li>
                                <li>
                                    <a href="<?= url(); ?>">Informações</a>
                                </li>
                                <li>
                                    <a href="<?= url("contato"); ?>">Contato</a>
                                </li>
                            </ul>
                        </nav>
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
        <footer id="footer">
            <h2>teste</h2>
        </footer>
        <!--end of footer-->

        <!-- SCRIPTS -->
        <script src="<?= asset("/js/main.js"); ?>"></script>
        <?= $v->section("scripts"); ?>
    </body>

</html>