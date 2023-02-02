<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URL; ?>app/sts/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" >
    <title>O Ganhador</title>
    <link rel="shortcut icon" href="<?php echo URL; ?>app/sts/assets/images/favicon.ico" type="image/x-icon">
</head>

<body>
    <section class="header01">
        <div class="intro">
            <div class="header-content">
                <span>
                    <div class="open-modal-logo"><img src="<?php echo URL ?>app/sts/assets/images/image-oganhador.png" alt="oganhador"></div>
                </span>
                <span>
                    <?php if(!empty($this->data['database'][0])){extract($this->data['database'][0]); 
                    echo $content;} ?> 
                    <button class="open-modal-button">Entenda como funciona <i class="fa-solid fa-circle-arrow-right"></i></button>
                </span>
            </div>
            <?php
            if(isset($_SESSION['msgSending'])){
                echo $_SESSION['msgSending'];
                unset($_SESSION['msgSending']);
                unset($this->data['contactMantein']);
            }
            ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        </div>
    </section>
</body>
</html>