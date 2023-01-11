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
        background-repeat: no-repeat;
        background-size: cover;
    }
    .modal-logo{
        display: flex;
        justify-content: center;
    }
    /*.modal-artigo{
        display: flex;
        justify-content: center;
    }*/

</style>

<div class="modal-container">
    <div class="modal">
        <div class="icon-close"><i class="fa-solid fa-xmark"></i></div>
        <video controls loop width="100%" height="300px" src="<?php URL ?>app/sts/assets/images/VD_tutorial.mp4" type="video/mp4"></video>
        <div class="youtube">
            <span class="open-modal-artigo">Ler artigo <i class="fa-solid fa-book"></i></span>
            <span class="conector"> Ou</span>
            <a class="link-close" href="https://youtu.be/IMHbjFVq3ZA" target="_blank">Assistir no YouTube <i class="fa-brands fa-youtube"></i></a>
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
            <div class="cell"><a href="tutorial-celular.php">CELULAR <i class="fa-solid fa-mobile"></i></a></div>
            <div class="computer"><a href="tutorial-computador.php">COMPUTADOR <i class="fa-sharp fa-solid fa-computer"></i></a></div>
        </div>
    </div>
</div>