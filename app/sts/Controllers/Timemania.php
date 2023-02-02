<?php
namespace Sts\Controllers;

class Timemania extends ConfigConversion{
    private string $name;
    private string|array|null $data;
    private string|array|null $load;
    public string $dataString;
    private array $dataArray;
    public string|array|null $dataSlug;
    private string $varString;

    public function loto(){
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dataForm['smgSend'])){
            $loadString = implode($this->dataForm);
            $this->dataString = implode($this->dataForm);

            $this->convert();

            $this->dataArray = explode("/",$this->dataString); 
            $this->varString = $this->slug(implode($this->dataArray));
            $varInterger = intval($this->varString);
            $y = $varInterger / 80;
            $ys = (int)($varInterger / 80);
            $N = (80 * ($y - $ys)) + 1;

            $_SESSION['y'] = $y;
            $_SESSION['palavra'] = $loadString;
            $_SESSION['response'] = $N;
            $this->result();
        }

                //Pegar dados para listar a conteúdo do site
                $getDatabase = new \Sts\Models\MainDatabase();
                $this->data['database'] = $getDatabase->siteData();
        
                //Pegar dados para listar os dados bancários
                $this->data['bankData'] = $getDatabase->bankDataList();

                $this->dbContact();

        //$this->data = 0;
        $configTimemania = new \Core\ConfigView("sts/Views/timemania",$this->data);
        $configTimemania->include();
    }
}