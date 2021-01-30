<?php $v->layout("_theme"); ?>

<?= $v->start("stylesheet"); ?>
<link rel="preload" href="<?= asset("font/Karla.ttf"); ?>" as="font" type="font/truetype" crossorigin>
<link rel="preload" href="<?= asset("font/YesevaOne.ttf"); ?>" as="font" type="font/truetype" crossorigin>
<link rel="preload" href="<?= asset("css/home.min.css"); ?>" as="style" />
<link rel="stylesheet" href="<?= asset("css/home.min.css"); ?>" />
<?= $v->end; ?>

<h1><?= SITE["name"]; ?></h1>

