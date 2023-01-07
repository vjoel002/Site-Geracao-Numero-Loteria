<?php
namespace Sts\Models;
class MainDatabase extends Conn{
    private object $conn;
    public array $transmetor;

    ////////////////////////////////////// Formulário de contatos //////////////////////////////////////////////////
    public function sendForm(){
        $receptor = $this->transmetor;

        $this->conn = $this->connection();
        $query_sendForm = "INSERT INTO  tb_contato (nome, email, assunto, conteudo, created) 
        VALUE (:nome, :email, :assunto, :conteudo, NOW())";
        $querySendForm = $this->conn->prepare($query_sendForm);
        $querySendForm->bindParam(':nome',$receptor['nome']);
        $querySendForm->bindParam(':email',$receptor['email']);
        $querySendForm->bindParam(':assunto',$receptor['assunto']);
        $querySendForm->bindParam(':conteudo',$receptor['conteudo']);

        $querySendForm->execute();
        if($querySendForm->rowCount()){
            $_SESSION['msgSending'] = "<p style='color:blue'>Mensagem enviada com sucesso. Obrigado pelo contato!</p>";
        }else{
            $_SESSION['msgSending'] = "<p style='color:red'>Ops! Ocorreu um problema. Por favor, tente mais tarde.</p>";
        }
    }

    ////////////////////////////////////// dados do sistema //////////////////////////////////////////////////
    public function siteDataSending(){
        $receptor = $this->transmetor;
        $this->conn = $this->connection();

        $query_siteData = "INSERT INTO tb_sitedata (title, content, created) VALUE (:title, :content, NOW())";
        $querySiteData = $this->conn->prepare($query_siteData);
        $querySiteData->bindParam(':title',$receptor['title']);
        $querySiteData->bindParam(':content',$receptor['content']);

        $response = $querySiteData->execute();
        return $response;
    }

    public function siteData(){
        $this->conn = $this->connection();

        $query_siteDataList = "SELECT id, title, content FROM tb_sitedata";
        $querySiteDataList = $this->conn->prepare($query_siteDataList);
        $querySiteDataList->execute();
        $responseQuery = $querySiteDataList->fetchAll();
        return $responseQuery;
    }

    ////////////////////////////////////// Dados bancários //////////////////////////////////////////////////

    public function bankDataList(){
        $this->conn = $this->connection();
        $query_bank = "SELECT * FROM tb_donation";
        $queryBank = $this->conn->prepare($query_bank);
        $queryBank->execute();
        return $queryBank->fetchAll();
    }
}