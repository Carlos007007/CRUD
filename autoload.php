<?php

    spl_autoload_register(function($clase){
        if(is_file(__DIR__."\\".$clase.".php")){
            require_once __DIR__."\\".$clase.".php";
        } 
    });