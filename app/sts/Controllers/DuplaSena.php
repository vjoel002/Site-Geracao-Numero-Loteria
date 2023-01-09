<?php
namespace Sts\Controllers;

class DuplaSena extends ConfigConversion{
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
            $y = $varInterger / 50;
            $ys = (int)($varInterger / 50);
            $N = (50 * ($y - $ys)) + 1;
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
                                        <span style='font-weight: bold'>".$loadString."</span> deu <span style='font-weight: bold'>".(round($N,0)). "</span> para Dupla Sena".
                                        "</div>";
            }
        }

                //Pegar dados para listar a conteúdo do site
                $getDatabase = new \Sts\Models\MainDatabase();
                $this->data['database'] = $getDatabase->siteData();
        
                //Pegar dados para listar os dados bancários
                $this->data['bankData'] = $getDatabase->bankDataList();

        //$this->data=0;
        $configDuplasena = new \Core\ConfigView("sts/Views/duplasena",$this->data);
        $configDuplasena->include();
    }
}