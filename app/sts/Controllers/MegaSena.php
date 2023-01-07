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
            if($y == null){
                $_SESSION['title'] = "<div style='font-weight: 500; font-size: 25px; color: red; text-align: center;'>
                                            Resultado
                                      </div>";
                $_SESSION['result'] = "<div style='color: red; background: white;
                                        padding: 20px; border: 1px solid red;
                                        border-radius: 5px'>
                                            Digite alguma palavra no campo de cima!
                                       </div>";
            }else{
                $_SESSION['title'] = "<div style='font-weight: 500; font-size: 25px; color: green; text-align: center;'>
                                            Resultado
                                      </div>";
                $_SESSION['result'] = "<div style='color: green; background: white;
                                        padding: 20px; border: 1px solid green;
                                        border-radius: 5px'>
                                            O número gerado a partir de <span style='font-weight: bold'>".$loadString."</span> é: 
                                            ".(round($N,0)).
                                      "</div>";
            }
        }

                //Pegar dados para listar a conteúdo do site
                $getDatabase = new \Sts\Models\MainDatabase();
                $this->data['database'] = $getDatabase->siteData();
        
                //Pegar dados para listar os dados bancários
                $this->data['bankData'] = $getDatabase->bankDataList();

        //$this->data = 0;
        $configMegasena = new \Core\ConfigView("sts/Views/megasena",$this->data);
        $configMegasena->include();
    }
}