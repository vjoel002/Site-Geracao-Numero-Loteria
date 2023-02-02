<?php
if(!empty($this->data['database'][2])){
    extract($this->data['database'][2]);
}
if(!empty($this->data['bankData'][0])){
    extract($this->data['bankData'][0]);
}
?>

<style>
    .right .numerology{
        background-image: url("<?php URL?>app/sts/assets/images/image23-rem.png");
        background-repeat: no-repeat;/*Tout nouveau*/
        background-size: cover;
    }
    .modal-logo{
        display: flex;
        justify-content: center;
    }
</style>

<div class="modal-container">
    <div class="modal">
        <div class="icon-close"><i class="fa-solid fa-xmark"></i></div>
        <video controls  width="100%" height="300px" src="<?php URL ?>app/sts/assets/images/VD_tutorial.mp4" type="video/mp4"></video>
        <div class="youtube">
            <span class="open-modal-artigo">Leia <i class="fa-solid fa-book"></i></span>
            <a class="link-close" href="https://youtu.be/IMHbjFVq3ZA" target="_blank">Assista <i class="fa-brands fa-youtube"></i></a>
        </div>
    </div>
</div>

<div class="modal-logo">
    <div class="modal_logo">
        <div class="link-close-logo"> <i class="fa-solid fa-xmark"></i> Fechar</div>
        <img src="<?php URL ?>app/sts/assets/images/image-oganhador.png"  alt="">
    </div>
</div>

<div class="modal-artigo">
    <div class="modal_artigo">
        <div class="link-close-artigo"> <i class="fa-solid fa-xmark"></i></div>
        <div class="artigo">
            <div class="artigo-modal-titulo">Escolha um dispositivo</div>
            <div class="cell"><a href="tutorial-celular.php">CELULAR <i class="fa-solid fa-mobile"></i></a></div>
            <div class="computer"><a href="tutorial-computador.php">COMPUTADOR <i class="fa-sharp fa-solid fa-computer"></i></a></div>
        </div>
    </div>
</div>

<!--=========================================================== CONTATO ========================================================-->

<div class="modal-contato">
    <div class="modal_contato">
        <div class="link-close-contato"><i class="fa-solid fa-xmark"></i> Fechar</div>
        <div class="contato">  
            <section class="contact">
                <div class="max-width-contact">
                    <h2 class="title">Formulário de Contato</h2>
                    <span id="msg_Contact"></span>
                    <div class="contact-content-contact">
                        <div class="column-contact right-contact ">

                            <form action="" method="POST" id="form-contact">
                                <div class="fields">
                                    <div class="field name">
                                        <input type="name" name="nome" id="nome" value="" placeholder="Digite seu nome">
                                    </div>
                                    <div class="field email">
                                        <input type="email" name="email" id="email" value="" placeholder="Digite seu e-mail">
                                    </div>
                                </div>
                                <div class="field">
                                    <input type="object" name="assunto" id="assunto" value="" placeholder="Digite o assunto">
                                </div>
                                <div class="field textarea">
                                    <textarea name="conteudo" id="conteudo" cols="50" rows="2" placeholder="Digite a mensagem (Sugestão, elogio, crítica ou perguta)"></textarea>
                                </div>
                                <div class="buttom-area">
                                    <button class="button" name="msgSend" value="Enviar">Enviar</button>
                                    <!--<button onClick="enviar()" name="msgSend" class="button" value="Enviar">Enviar</button>-->
                                </div>
                            </form>
                        </div>   
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

