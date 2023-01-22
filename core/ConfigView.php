<?php
namespace Core;

class ConfigView{

    public function __construct(private string $name, private array|string|null $data){
    }

    public function include(){
        if(file_exists('app/'.$this->name.'.php')){
            include 'app/sts/Views/include/header/header.php';
            include 'app/sts/Views/include/general/general.php';  
            include 'app/'.$this->name.'.php';
            include 'app/sts/Views/include/pagecommune/commune.php';
            include 'app/sts/Views/include/footer/footer.php';
        }
    }
}