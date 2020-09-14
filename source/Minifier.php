<?php

/**
 * CSS
 */
$minCss = new MatthiasMullie\Minify\CSS();
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/erro.css");
$minCss->add(dirname(__DIR__, 1) . "/public/assets/css/estilos.css");
$minCss->minify(dirname(__DIR__, 1) . "/public/assets/css/style.min.css");

/**
 * js
 */

