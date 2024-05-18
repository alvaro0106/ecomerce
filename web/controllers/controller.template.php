<?php

// Traemos la vista principal de la plantilla
class TemplateController{
    public function index(){
        include "views/template.php";
    }

    // Ruta principal o dominio del sitio
    static public function path(){

        if(!empty($_SERVER["HTTPS"]) && ("on" == $_SERVER["HTTPS"])){

            return "https://".$_SERVER["SERVER_NAME"]."/";

        }else{

            return "http://".$_SERVER["SERVER_NAME"]."/";

        }

    }

}

