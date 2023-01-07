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
</style>

<div class="modal-container">
    <div class="modal">
        <div class="icon-close"><i class="fa-solid fa-xmark"></i></div>
            <video controls loop width="100%" height="300px" src="<?php URL ?>app/sts/assets/images/VD_tutorial.mp4"
                    type="video/mp4">
            </video>
            <div class="youtube">
                <a class="link-close" href="https://youtu.be/IMHbjFVq3ZA" target="_blank">Assistir no YouTube <i class="fa-brands fa-youtube"></i></a>
            </div>
    </div>
</div>