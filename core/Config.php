<?php
namespace Core;

abstract class Config{
    public function config(){
        define('CONTROLLER','MegaSena');
        define('METHOD','loto');
        define('URL','http://localhost/descobertas/');

        define('DB','mysql');
        define('HOST','localhost');
        define('USER','root');
        define('PASS','Store@150993');
        define('DBNAME','lotory');
    }
}