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
                                    Apoie nosso trabalho, fazendo uma doação!  
                                <i class="fa-solid fa-hand-holding-dollar"></i></p>
                            </div>
                            <div class="donationBank"><b>Transferência bancária</b></div>

                            <!--<div class="donationInput">
                                <label for="">Agência: </label>
                                <input type="text" name="agence" class="agence" value=" <?php echo $agencia ?>" readonly>
                                <button type="button" class="copy"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>-->

                            <div class="donationInput">
                                <label for="">Agência: </label>
                                <input type="text" name="agence" id="agence" value=" <?php echo $agencia ?>" readonly/>
                                <button onclick="copiaragence()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>

                            <div class="donationInput">
                                <label for="">Conta: </label>
                                <input type="text" name="texto01" id="texto01" value=" <?php echo $conta ?>" readonly/>
                                <button onclick="copiarTexto01()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>

                            <div class="donationPix">
                                <b>Doação por pix</b> <i class="fa-brands fa-pix"></i>
                            </div>
                            <div class="donationInput-pix">
                                <label for="">Pix: </label>
                                <input type="text" name="texto" id="texto" value=" <?php echo $pix ?>" readonly/>
                                <button onclick="copiarTexto()"><i class="fa-regular fa-copy"></i> copiar</button>
                            </div>
                        </div>
                    </div>
                    <br><br><br><hr>
                <!--</div>-->

                <div class="box">
                        <div class="titre">Siga-nos nas redes sociais</div>
                        <div class="follow-us">
                            <div class="follow">
                                <div><a href="https://www.facebook.com/profile.php?id=100089409785773" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a></div><br>
                                <div><a href="https://twitter.com/OGANHADOR4" target="_blank"><i class="fa-brands fa-square-twitter"></i> Twitter</a></div><br>
                                <div><a href="https://youtu.be/IMHbjFVq3ZA" target="_blank"><i class="fa-brands fa-youtube"></i> YouTube</a></div><br>
                            </div>
                            <div class="follow">
                                <div><a href="#" target="_blank"><i class="fa-brands fa-telegram"></i> Telegram</a></div><br>
                                <div><a href="https://www.instagram.com/ganhador_loteria/" target="_blank"><i class="fa-brands fa-square-instagram"></i> Instagram</a></div><br>
                                <div><a href="https://www.linkedin.com/in/o-ganhador-3b5316261/" target="_blank"><i class="fa-brands fa-linkedin"></i> linkedin</a></div><br>
                            </div>
                        </div>
                    </div><br><br><br><hr>

                <!--<div class="card">-->
                    <div class="box">
                        <div class="titre">Confira os resultados dos concursos anteriores</div>
                        <div class="resultado-loteria">
                            <div class="verresultados">
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Mega-Sena.aspx" target="_blank">Mega-Sena</a></div><br>
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Mais-Milionaria.aspx" target="_blank">Milionária</a></div><br>
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Dia-de-Sorte.aspx" target="_blank">Dia de Sorte</a></div><br>
                            </div>
                            <div class="verresultados">
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Dupla-Sena.aspx" target="_blank">Dupla-Sena</a></div><br>
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Timemania.aspx" target="_blank">Timemania</a></div><br>
                                <div><a href="https://loterias.caixa.gov.br/Paginas/Quina.aspx" target="_blank">Quina</a></div><br>
                            </div>
                        </div>
                    </div>
                <!--</div>-->
                </div>
            </div>
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
            <div class="adm">&copy O Ganhador 2023</div>
            <span>Created By <a href="">Eclair Tec</a></span>
            <div class="adm"><?php echo "<a href='".URL."loguin'>Administration</a>" ?></div>
    </div>
    <script src="<?php echo URL; ?>app/sts/assets/js/script.js"></script>
</body>
</html>