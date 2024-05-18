<?php

// init_set("dysplay_erros",1);
// init_set("log_erros",1);
// init_set("error_log","/opt/lampp/htdocs/ecommerce/web/php_error_log");

require_once "controllers/controller.template.php";

$index = new TemplateController();
$index->index();