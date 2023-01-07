<?php
namespace Sts\Controllers;

class MeuDia extends ConfigConversion{
    private string|array|null $data;
    private array|null $dataForm;
    public string $dataString;
    private array $dataArray;
    public array|string|null $dataSlug;

    public function loto(){
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $_SESSION['birthday'] = $this->dataForm;
        if(!empty($this->dataForm['smgSend'])){
            $this->dataString = $this->slug(implode($this->dataForm));
            $inteiro = intval($this->dataString);
            $x = $inteiro;
            $y = $x / 6;
            $ys = (int)($x / 6);
            $N = (6 * ($y - $ys)) + 2;
            $Ns = round($N,0);
            if($Ns==2){
                $_SESSION['N'] = "Segunda-feira";
            }
            else if($Ns==3){
                $_SESSION['N'] = "Terça-feira";
            }
            else if($Ns==4){
                $_SESSION['N'] = "Quarta-feira";
            }
            else if($Ns==5){
                $_SESSION['N'] = "Quinta-feira";
            }
            else if($Ns==6){
                $_SESSION['N'] = "Sexta-feira";
            }
            else if($Ns==7){
                $_SESSION['N'] = "Sábado";
            }
        }

                //Pegar dados para listar a conteúdo do site
                $getDatabase = new \Sts\Models\MainDatabase();
                $this->data['database'] = $getDatabase->siteData();
        
                //Pegar dados para listar os dados bancários
                $this->data['bankData'] = $getDatabase->bankDataList();

        //$this->data = 0;
        $configMeuDia = new \Core\ConfigView("sts/Views/meudia",$this->data);
        $configMeuDia->include();
    }
}