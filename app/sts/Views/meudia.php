<?php
//echo "Test da página meudia";
?>

<section class="principal">
        <div class="max-width">
            <div class="content">
<!--///////////////////////////////////////////////// LEFT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
                <div class="column left">
                    <div class="text"><?php echo $content ?></div>
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
                        <div class="menu-general">
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
                </div>
<!--///////////////////////////////////////////////// RIGHT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
                
                <div class="column right">

                <!--+++++++++++++++++++++++++++++ NUMEROLOGY INFORMATION +++++++++++++++++++++++++++++++-->

                    <div class="numerology">
                        <h3 style='padding-top: 20px'>Saiba sobre a numerologia</h3>
                        <p><?php if(!empty($this->data['database'][4])){extract($this->data['database'][4]);
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

                <!--+++++++++++++++++++++++++++++ CONTACT LINK +++++++++++++++++++++++++++++++-->

                    <div class="contact">
                        <p>Se você tem dúvida ou sugestões, por favor, entre em contato com a gente</p>
                        <div class="contactBtn"><?php echo "<a href='".URL."contato' class='fa-solid fa-square-caret-right'>
                            Entre em contato agora</a>" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>