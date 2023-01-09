<?php
namespace Sts\Controllers;

class Contato{
    private string|array|null $data;

    public function loto(){

/////////////////////////// Envio de dados para o banco /////////////////////////////
    $this->dataForm = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        if(!empty($this->dataForm['msgSend'])){
                    
            if(empty($this->dataForm['nome'])){
                $_SESSION['contactValidation'] = "<p style='color: red'>Por favor, preencha o campo Nome</p>";
            }elseif(empty($this->dataForm['email'])){
                $_SESSION['contactValidation'] = "<p style='color: red'>Por favor, preencha o campo E-mail</p>";
            }elseif(empty($this->dataForm['assunto'])){
                $_SESSION['contactValidation'] = "<p style='color: red'>Por favor, preencha o campo Assunto</p>";
            }elseif(empty($this->dataForm['conteudo'])){
                $_SESSION['contactValidation'] = "<p style='color: red'>Por favor, preencha o campo Mensagem</p>";
            }else{
                $form = new \Sts\Models\MainDatabase();
                $form->transmetor = $this->dataForm;
                $form->sendForm();
            }
        }

        //Pegar dados para listar a conteúdo do site
        $getDatabase = new \Sts\Models\MainDatabase();
        $this->data['database'] = $getDatabase->siteData();
                
        //Pegar dados para listar os dados bancários
        $this->data['bankData'] = $getDatabase->bankDataList();


        //$this->data = 0;
        $configContact = new \Core\ConfigView("sts/Views/contato/contato", $this->data);
        $configContact->include();
    }
}