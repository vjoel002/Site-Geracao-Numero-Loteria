    <section class="principal">
        <div class="max-width">
            <div class="content">
                <div class="column left">
                <div class="text"><?php echo $content ?></div>
                    <div class="menu-general">
                        <div class="header">
                            <ul class="menu" id="menu-site">
                                <?php echo "<a href='".URL."mega-sena'>MEGA-SENA</a>"; 
                                      echo "<a href='".URL."milionaria'>MILIONÁRIA</a>";
                                      echo "<a href='".URL."dia-de-sorte'>DIA DE SORTE</a>";?>
                            </ul>
                        </div><br>
                        <div class="header">
                            <ul class="menu" id="menu-site">
                                <?php echo "<a href='".URL."timemania'>TIMEMANIA</a>";
                                      echo "<a href='".URL."dupla-sena' class='active'>DUPLA SENA</a>";
                                      echo "<a href='".URL."quina'>QUINA</a>";?>
                            </ul>
                        </div><br>
                    </div>
               <!--+++++++++++++++++++++++++++++ RESULT AND RESEACH FORMS NUMBER +++++++++++++++++++++++++++++++-->

               <div class="result-research-form">
                           <!--======================= RESEACH =====================-->
                    <div class="title">
                        Você escolheu Dupla Sena. Digite uma palavra
                    </div>
                    <form action="" method="POST">
                        <div class="field textarea">
                            <input type="text" name="word" id="word" placeholder="Digite uma palavra ou um número" maxlength="17">
                        </div>
                        <div class="buttom-area">
                            <button type="submit" name="smgSend" value=" ">  Calcular</button>
                        </div>
                    </form>
                            <!--======================= RESULT =====================-->
                            <?php if(isset($_SESSION['title'])){
                            echo $_SESSION['title'];
                            unset($_SESSION['title']);
                            }
                                    /////////////////////////////////////////////
                            if(isset($_SESSION['result']))
                            {echo $_SESSION['result']; unset($_SESSION['result']);} ?>
                </div>

