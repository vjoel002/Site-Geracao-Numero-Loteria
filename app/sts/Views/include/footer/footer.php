<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/style.css">
    <title>Loteria</title>
</head>
<body>
    <footer>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <div class="donation">
                            <div class="donationTitle">
                                <p><i class="fa-solid fa-hand-holding-dollar"></i> 
                                    <?php if(!empty($this->data['database'][7])){extract($this->data['database'][7]);
                                    echo $content;} ?>  
                                <i class="fa-solid fa-hand-holding-dollar"></i></p>
                            </div>
                            <div class="donationBank"><b><?php if(!empty($this->data['database'][8])){extract($this->data['database'][8]);
                                                            echo $content;} ?></b></div>

                            <div class="donationInput">
                                <label for=""><?php if(!empty($this->data['database'][9])){extract($this->data['database'][9]);
                                                            echo $content;} ?>: </label>
                                <input type="text" name="agence" id="agence" value=" <?php echo $agencia ?>" readonly/>
                                <button onclick="copiaragence()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>

                            <div class="donationInput">
                                <label for="">Conta: </label>
                                <input type="text" name="texto01" id="texto01" value=" <?php echo $conta ?>" readonly/>
                                <button onclick="copiarTexto01()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>

                            <div class="donationPix">
                                <b><?php if(!empty($this->data['database'][10])){extract($this->data['database'][10]);
                                                            echo $content;} ?></b> <i class="fa-brands fa-pix"></i>
                            </div>
                            <div class="donationInput-pix">
                                <label for="">Pix: </label>
                                <input type="text" name="texto" id="texto" value=" <?php echo $pix ?>" readonly/>
                                <button onclick="copiarTexto()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>
                        </div>
                    </div>
                    <br><br><br><hr>
                    <div class="sobre"><!--================================================== NOUVEAU ================================================-->
                        <h1>Quem somos?</h1>
                        <p>
                            Este site é um projeto da Eclair-Tec e tem como objetivo auxiliar quem joga na loteria na geração de números de loteria a partir 
                            de palavras de sorte. A Eclair-Tec (CNPJ 46554273000189) é uma microempresa de tecnologia que presta serviços nas áreas de suporte técnico TI e 
                            desenvolvimento de sistemas. Entre em contato com a gente por <a href="https://wa.me/5519982828308" target="_blank">whatsapp <i class="fa-brands fa-whatsapp"></i></a>.
                        </p>
                    </div>
                <!--</div>-->
                </div>
            </div> <!--Locaweb n'a pas accepté-->
            <div class="share">
                <h4>Compartilhar</h4>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://oganhador.com.br/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=http://oganhador.com.br/"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://api.whatsapp.com/send?text=http://oganhador.com.br/"><i class="fa-brands fa-square-whatsapp"></i></a>
                <a href="https://twitter.com/intent/tweet?url=http://oganhador.com.br/"><i class="fa-brands fa-square-twitter"></i></a>
                <a href="https://telegram.me/share/url?url=http://oganhador.com.br/"><i class="fa-brands fa-telegram"></i></a>
                <a href="https://www.pinterest.com/pin/create/button/?url=http://oganhador.com.br/"><i class="fa-brands fa-square-pinterest"></i></a>
                <a href="https://plus.google.com/share?url=http://oganhador.com.br/"><i class="fa-brands fa-google-plus"></i></a>
            </div>
    </footer>
    <div class="foot">
        <div class="foter">
           <div class="container01">
                <h1 class="titre">Resultados anteriores</h1>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Mega-Sena.aspx" target="_blank">Mega-sena</a></h2>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Mais-Milionaria.aspx" target="_blank">Milionária</a></h2>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Dia-de-Sorte.aspx" target="_blank">Dia de Sorte</a></h2>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Dupla-Sena.aspx" target="_blank">Dupla-Sena</a></h2>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Timemania.aspx" target="_blank">Timemania</a></h2>
                <h2><a href="https://loterias.caixa.gov.br/Paginas/Quina.aspx" target="_blank">Quina</a></h2>
           </div>
           <div class="container02">
                <h1 class="titre">Siga-nos nas redes sociais</h1>
                <h2><a href="https://www.facebook.com/profile.php?id=100089409785773" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></h2>
                <h2><a href="https://twitter.com/OGANHADOR4" target="_blank"><i class="fa-brands fa-square-twitter"></i> Twitter</a></h2>
                <h2><a href="https://youtu.be/IMHbjFVq3ZA" target="_blank"><i class="fa-brands fa-youtube"></i> YouTube</a></h2>
                <h2><a href="#" target="_blank"><i class="fa-brands fa-telegram"></i> Telegram</a></h2>
                <h2><a href="https://www.instagram.com/ganhador_loteria/" target="_blank"><i class="fa-brands fa-square-instagram"></i> Instagram</a></h2>
                <h2><a href="https://www.linkedin.com/in/o-ganhador-3b5316261/" target="_blank"><i class="fa-brands fa-linkedin"></i> linkedin</a></h2>
           </div>
           <div class="container03">
                <h1>Palavras-chaves </h1>
                <h2>Numerologia</h2>
                <h2>Gerador</h2>
                <h2>Cálculo</h2>
                <h2>Conta</h2>
                <h2>Loteria</h2>
                <h2>Número</h2>
                <h2>Palavra</h2>
                <h2>Ganhar</h2>
                <h2>Rico</h2>
           </div>
        </div>
        <br><hr><br>
        <div class="adm">&copy O Ganhador 2023</div>
        <span>Created and administered by <a href="">Eclair Tec</a></span>
        <div class="adm"><?php echo "<a href='".URL."loguin'>Administration</a>" ?></div>
    </div>
    <script src="<?php echo URL; ?>app/sts/assets/js/script.js"></script>
</body>
</html>
<style>
    .foter{
        height: auto;
        display: flex;
        justify-content: center;
        width: 100%;
    }
    .container01,
    .container02,
    .container03{
        height: auto;
        width: auto;
        /*border: 2px solid #fff;*/
        margin: 0 100px 0 100px;
    }
    .container01 h1,
    .container02 h1,
    .container03 h1{
        text-align: left;
        font-size: 18px;
        padding: 0 0 10px 0;
        color: white;
    }
    .container01 h2,
    .container02 h2,
    .container03 h2{
        text-align: left;
        font-size: 15px;
        color: #d7d6d6;
        padding: 0 0 10px 0;
    }
    .container01 a,
    .container02 a{
        color: #d7d6d6;
        padding: 5px;
    }
    .card .sobre{
        color: black;
        padding: 10px 15px 0 15px;;
    }
    .card .sobre h1{
        font-size: 20px;
        padding: 0 0 10px 0;
    }
    .card .sobre p{
        font-size: 17px;
        text-align: left;
    }
    @media (max-width: 947px){
        .container01,
        .container02,
        .container03{
        margin: 0 0 0 0;
        }
        .container01 h1,
        .container02 h1,
        .container03 h1{
        font-size: 13px;
        }
        .container01 a,
        .container02 a,
        .container03 h2{
            font-size: 12px;
        }
        .container03 h2{
            font-size: 12px;
        }
    }
</style>