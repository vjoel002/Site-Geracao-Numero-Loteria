<?php
//echo "Test da página timemania";
?>

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
                                <?php echo "<a href='".URL."timemania' class='active'>TIMEMANIA</a>";
                                      echo "<a href='".URL."dupla-sena'>DUPLA SENA</a>";
                                      echo "<a href='".URL."quina'>QUINA</a>";?>
                            </ul>
                        </div><br>
                    </div>
               <!--+++++++++++++++++++++++++++++ RESULT AND RESEACH FORMS NUMBER +++++++++++++++++++++++++++++++-->

               <div class="result-research-form">
                           <!--======================= RESEACH =====================-->
                    <div class="title">
                        Você escolheu Timemania. Digite uma palavra
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

               <!--+++++++++++++++++++++++++++++ RESEACH FORM LOCKY DAY +++++++++++++++++++++++++++++++-->
               <div class="lockday">
                        <div class="dayTitle">
                            <b><?php if(!empty($this->data['database'][3])){extract($this->data['database'][3]);
                            echo $content;} ?></b>
                        </div>
                        <div class="day"><?php echo "<a href='".URL."meu-dia' class='fa-solid fa-square-caret-right'>
                            Meu dia de sorte</a><br>" ?>
                        </div>
                    </div>
                </div>

<!--///////////////////////////////////////////////// RIGHT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
                
                <div class="column right">
                    <!--+++++++++++++++++++++++++++++ NUMEROLOGY INFORMATION +++++++++++++++++++++++++++++++-->
                    <div class="numerology">
                        <h3 style='padding-top: 20px'>Saiba sobre a numerologia</h3>
                        <p>
                        <?php if(!empty($this->data['database'][4])){extract($this->data['database'][4]);
                            echo $content;} ?> 
                            <a href="https://excerpts.numilog.com/books/9782904616822.pdf" target="_blank">Saíba mais!</a>
                        </p>
                        <table class="numerologyTable">
                            <tr class="tableHead">
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                            </tr>
                            <tr>
                                <td>a</td>
                                <td>b</td>
                                <td>c</td>
                                <td>d</td>
                                <td>e</td>
                                <td>f</td>
                                <td>g</td>
                                <td>h</td>
                                <td>i</td>
                            </tr>
                            <tr>
                                <td>j</td>
                                <td>k</td>
                                <td>l</td>
                                <td>m</td>
                                <td>n</td>
                                <td>o</td>
                                <td>p</td>
                                <td>q</td>
                                <td>r</td>
                            </tr>
                            <tr>
                                <td>s</td>
                                <td>t</td>
                                <td>u</td>
                                <td>v</td>
                                <td>w</td>
                                <td>x</td>
                                <td>y</td>
                                <td>z</td>
                            </tr>
                        </table>
                        <div class="exemple">
                           <b style='font-family: Apple Chancery, cursive;'>Por exemplo:</b> Campinas = 31479511;
                            Azul = 1833; Computador = 3647321469
                        </div>
                    </div>
                    <div class="contact">
                        <p>Se você tem dúvida ou sugestões, por favor, entre em contato com a gente</p>
                        <div class="contactBtn"><?php echo "<a href='".URL."contato' class='fa-solid fa-square-caret-right'>
                            Entre em contato agora</a>" ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>