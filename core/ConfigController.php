<?php
namespace Core;

class ConfigController extends Config{
    private string $url;
    private string $urlController;
    private string $urlMethod;
    private string $urlParameter;
    private array $urlArray;
    private array $urlFormat;
    private string $urlSlugController;

    public function __construct(){
        $this->config();
        if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))){
            $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
            //var_dump($this->url);
            $this->urlCleaner();
            $this->urlArray = explode("/", $this->url);
            //var_dump($this->urlArray);
            if(isset($this->urlArray[0])){
                $this->urlController = $this->slugController($this->urlArray[0]);
            }else{
                $this->urlController = CONTROLLER;
            }
        }else{
            $this->urlController = CONTROLLER;
        }
        //echo $this->urlController."<br>";
    }

    private function urlCleaner(){
        $this->urlFormat['a'] = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]?;:.,\\\'<>°ºª';
        $this->urlFormat['b'] = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr-------------------------------';
        $this->url = strtr(utf8_decode($this->url), utf8_decode($this->urlFormat['a']), utf8_decode($this->urlFormat['b']));
    }

    private function slugController($slugController){
        $this->urlSlugController = strtolower($slugController);
        $this->urlSlugController = str_replace("-", " ", $this->urlSlugController);
        $this->urlSlugController = ucwords($this->urlSlugController);
        $this->urlSlugController = str_replace(" ", "", $this->urlSlugController);
        return $this->urlSlugController;
    }

    public function pageLoad(){
        $loadControllers = "\\Sts\Controllers\\".$this->urlController;
        $loadController = new $loadControllers();
        $loadController->loto();
    }
}