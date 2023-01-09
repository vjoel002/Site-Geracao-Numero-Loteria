<?php
namespace Core;

abstract class Config{
    public function config(){
        define('CONTROLLER','MegaSena');
        define('METHOD','loto');
        define('URL','http://oganhador.com.br/');
      
        define('DB','mysql');
        define('HOST','lotory.mysql.dbaas.com.br');
        define('USER','lotory');
        define('PASS','Store@150993');
        define('DBNAME','lotory');
    }
}