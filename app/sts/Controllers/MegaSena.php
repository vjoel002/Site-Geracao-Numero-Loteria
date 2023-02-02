<?php
namespace Sts\Controllers;

class MegaSena extends ConfigConversion{
    private string $name;
    private string|array|null $data;
    private string|array|null $load;
    public string $dataString;
    private array $dataArray;
    public string|array|null $dataSlug;
    private string $varString;

    public function loto(){
        $this->load = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->load['smgSend'])){
            $loadString = implode($this->load);
            $this->dataString = implode($this->load);

            $this->convert();

            $this->dataArray = explode("/",$this->dataString);
            $this->varString = $this->slug(implode($this->dataArray));
            $varInterger = intval($this->varString);
            $y = $varInterger / 60;
            $ys = (int)($varInterger / 60);
            $N = (60 * ($y - $ys)) + 1;

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
        $configMegasena = new \Core\ConfigView("sts/Views/megasena",$this->data);
        $configMegasena->include();
    }
}