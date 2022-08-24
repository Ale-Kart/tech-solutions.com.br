<?php

require 'class.site.php';
require 'template/class/Conexao.class.php';

$site = new FuncoesSite();
$url_imagens = $site->transformUrl() . "template/imgs/";

define('url', $site->transformUrl());
define('url_imagens', $url_imagens);

$conn = new Conexao();
