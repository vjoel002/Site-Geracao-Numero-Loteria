<?php
namespace Sts\Controllers;

abstract class ConfigConversion{
    public array $format;
    public string $dataString;
    private string|array|null $data;

    protected function convert(){ 
        $this->format['a'] = 'AÁÀÃÄãàáäaBbCÇçcDdEÉÈËéèë&eFfGgHhIÍÏïíiJjKkLlMmNÑñnOÕÓÖÒõöòóoPpQqRrSsTtUÜÙÚüùúuVvWwXxYyZz';
        $this->format['b'] = '11111111112233334455555555566778899999911223344555566666666667788991122333333334455667788';
        $this->dataString = strtr(utf8_decode($this->dataString),utf8_decode($this->format['a']),utf8_decode($this->format['b']));
        
    }

    protected function slug($slug){
        $this->dataSlug = strtolower($slug);
        $this->dataSlug = str_replace("-","",$this->dataSlug);
        $this->dataSlug = str_replace(" ","",$this->dataSlug);
        $this->dataSlug = str_replace("/","",$this->dataSlug);
        $this->dataSlug = str_replace(".","",$this->dataSlug);
        $this->dataSlug = str_replace(":","",$this->dataSlug);


        $this->dataSlug = str_replace("*","",$this->dataSlug);
        $this->dataSlug = str_replace("+","",$this->dataSlug);
        $this->dataSlug = str_replace(";","",$this->dataSlug);
        $this->dataSlug = str_replace(",","",$this->dataSlug);
        $this->dataSlug = str_replace("?","",$this->dataSlug);

        $this->dataSlug = str_replace(",","",$this->dataSlug);
        $this->dataSlug = str_replace("!","",$this->dataSlug);
        $this->dataSlug = str_replace("@","",$this->dataSlug);
        $this->dataSlug = str_replace("#","",$this->dataSlug);
        $this->dataSlug = str_replace("%","",$this->dataSlug);

        $this->dataSlug = str_replace("(","",$this->dataSlug);
        $this->dataSlug = str_replace(")","",$this->dataSlug);
        $this->dataSlug = str_replace("=","",$this->dataSlug);
        $this->dataSlug = str_replace("<","",$this->dataSlug);
        $this->dataSlug = str_replace(">","",$this->dataSlug);

        $this->dataSlug = str_replace("{","",$this->dataSlug);
        $this->dataSlug = str_replace("}","",$this->dataSlug);
        $this->dataSlug = str_replace("[","",$this->dataSlug);
        $this->dataSlug = str_replace("]","",$this->dataSlug);
        $this->dataSlug = str_replace("_","",$this->dataSlug);

        $this->dataSlug = str_replace("'","",$this->dataSlug);
        $this->dataSlug = str_replace("|","",$this->dataSlug);
        return $this->dataSlug;
    }

 /////////////////////////// Envio de dados para o banco /////////////////////////////
    public function dbContact(){
        $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
            if(!empty($this->dataForm['msgSend'])){
                $form = new \Sts\Models\MainDatabase();
                $form->transmetor = $this->dataForm;
                $form->sendForm();
            }
    }

    ///////////////////////// RESULTADO \\\\\\\\\\\\\\\\\\\\\\\\\\\\\
    public function result(){
        if($_SESSION['y'] == null){
            $_SESSION['title'] = "<div style='font-weight: 500; font-size: 25px; color: red; text-align: center;'>
                                        Resultado
                                  </div>";

            $_SESSION['result'] = "<div style='color: red; background: white;
                                    padding: 20px; border: 1px solid red;
                                    border-radius: 5px'>
                                        Digite alguma palavra no campo de cima!
                                   </div>";

            $_SESSION['mensagem'] = "<div style= 'text-align: center; background: #F8D7DA; color: red; padding:10px;'>
                                        <div style='font-size: 22px;'>Atenção!</div>
                                        <div style='padding-top:5px'>
                                            Escolhe palavras que você acha mesmo que podem te trazer sorte como por
                                            exemplo uma coisa que você sonhou.
                                        </div>
                                    </div>";
                                   
        }else{
            $_SESSION['title'] = "<div style='font-weight: 500; font-size: 25px; color: green; text-align: center;'>
                                        Resultado
                                  </div>";
            $_SESSION['result'] = "<div style='color: green; background: white;
                                    padding: 20px; border: 1px solid green;
                                    border-radius: 5px'>
                                        <span style='font-weight: bold'>".$_SESSION['palavra']."</span> deu <span style='font-weight: bold'>".(round($_SESSION['response'],0)). "</span> para Dia de Sorte".
                                  "</div>";

            $_SESSION['mensagem'] = "<div style= 'text-align: center; background: #D1E7DD; color: blue; padding:10px;'>
                                        <div style='font-size: 22px;'>Atenção!</div>
                                        <div style='padding-top:5px'>
                                            Seu ganho assim como sua perda não dependem deste portal, mas sim da 
                                            escolha das suas palavras de sorte.
                                        </div>
                                    </div>";
        }
    }

}