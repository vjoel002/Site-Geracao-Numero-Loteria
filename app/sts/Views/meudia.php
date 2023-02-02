<section class="principal">
        <div class="max-width">
            <div class="content">
<!--///////////////////////////////////////////////// LEFT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
                <div class="column left">
                    <div class="text-meuDia"><?php if(!empty($this->data['database'][13])){extract($this->data['database'][13]); echo $content;} ?></div>
                        <div class="research-result">
                            <div class="title">
                                Data e horário de nascimento
                            </div>
                            <form action="" method="POST">
                                <div class="field-lookday textarea">
                                    <input type="date" name="date" required>
                                    <input type="time" name="hour" required>
                                    <div class="buttom-area-lookday">
                                        <button type="submit" name="smgSend" value=" ">Calcular</button>
                                    </div>
                                </div>
                            </form>
                            <div class="result">
                                <?php
                                if(isset($_SESSION['birthday'])){
                                    $birthday = date('d/m/Y', strtotime($_SESSION['birthday']['date']));
                                    $birthtime = $_SESSION['birthday']['hour'];

                                    echo "<p style='font-weight: 500; font-size: 25px; color: blue; text-align: center;'>Resultado</p>";
                                    echo "<div style='color:blue; padding:10px;'>Se você nasceu em <span style='font-weight: bold'>".$birthday.
                                        "</span> às <span style='font-weight: bold'>".$birthtime.
                                        "</span>, é possível que o melhor dia para você apostar e ter a maior chance de ganhar 
                                        seja <span style='font-weight: bold'>".$_SESSION['N']."</span>. Boa sorte!</div>";

                                    unset($birthday);
                                }?>
                            </div>
                        </div>
                        <div style='color:blue; text-align: center; font-size: 30px; padding-top: 15px'>Ir para</div>
                        <div class="menu-general-meudia">
                            <div class="header">
                                <ul class="menu" id="menu-site">
                                    <?php echo "<a href='".URL."mega-sena'>MEGA-SENA</a>"; 
                                        echo "<a href='".URL."milionaria'>MILIONÁRIA</a>";
                                        echo "<a href='".URL."dia-de-sorte'>DIA DE SORTE</a>";
                                    ?>
                                </ul>
                            </div><br>
                            <div class="header">
                                <ul class="menu" id="menu-site">
                                    <?php echo "<a href='".URL."timemania'>TIMEMANIA</a>";
                                        echo "<a href='".URL."dupla-sena'>DUPLA SENA</a>";
                                        echo "<a href='".URL."quina'>QUINA</a>";
                                    ?>
                                </ul>
                            </div><br>
                        </div> 
                    
