<?php
ob_start();
session_start();
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Magisterioio Primario</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />
    <!-- templatemo 358 carousel -->
    <!-- 
Carousel Template 
http://www.templatemo.com/preview/templatemo_358_carousel 
-->
    <script type="text/javascript" src="js/jquery-1-4-2.min.js"></script>
    <!--script type="text/javascript" src="/jqueryui/js/jquery-ui-1.7.2.custom.min.js"></script-->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/showhide.js"></script>
    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" />
    <script type="text/JavaScript" src="js/jquery.mousewheel.js"></script>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>

    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">
    /***********************************************
     * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
     * This notice MUST stay intact for legal use
     * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
     ***********************************************/
    </script>

    <script type="text/javascript">
    ddsmoothmenu.init({
        mainmenuid: "templatemo_menu", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu', //class added to menu's outer DIV
        //customtheme: ["#1c5a80", "#18374a"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })
    </script>

</head>

<body id="subpage">

    <div id="templatemo_header_wrapper">
        <div id="site_title">
            <h1><a href="#">Carousel Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#" class="selected">Cursos</a>
                    <ul>
                        <li><span class="top"></span><span class="bottom"></span></li>
                        <li><a href="Pre-escolar.php">Pr??-escolar</a></li>
                        <li><a href="Magisterio Primario.php">Magisterio Primario</a></li>

                    </ul>
                </li>
                <li><a href="#">Fotos</a>
                    <ul>
                        <li><span class="top"></span><span class="bottom"></span></li>
                        <li><a href="Inauguracao.php">Inaugura????o</a></li>
                        <li><a href="Actividades.php">Actividades</a></li>

                    </ul>
                </li>
                <li><a href="Estrutura.php">Estrutura</a></li>
                <?php  if(!isset($_SESSION['nome'])){
                ?>
                <li><a href="cadastro.php">Cadastro</a></li>
                <?php 
                }else{
                ?>
                <li><a href="acessoRestrito.php">Meu Perfil</a></li>
                <?php } ?>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header_wrapper -->


    <div class="cleaner"></div>
    </div> <!-- END of templatemo_main -->

    <div id="templatemo_main">
        <font color="black">
            <p><b>Magist??rio Prim??rio</b> ?? um curso pertencente a institui????o de ensino EFP denominado escola do
                Magist??rio Prim??rio ???J??lia Lopes??? que tem como objectivo formar professores qualificados capaz de ser um
                excelente educador do ensino de crian??as compreendida de 6h?? 12 anos de idade de 1?? ate 6?? de modo a
                fornecer uma educa????o de qualidade com ma base s??lida fornecendo oportunidade educativa a todos.</p>
            <p>Ao entrar a este magn??fica curso o aluno deve ter compet??ncias suficientes para ingressar-se neste curso
                dominando as seguintes disciplinas:</p>
            <ul>
                <li>L??ngua portuguesa </li>
                <li>Matem??tica </li>
                <li>Educa????o Musical</li>
            </ul>
            Ap??s ter entrado a este curso o aluno deve lesionar as seguintes disciplinas:
            <p></p>
            <br>
            10?? Classe Disciplina Lesionadas
            </br>
            <ul>
                <li>Matem??tica </li>
                <li>L??ngua portuguesa </li>
                <li>Geografia</li>
                <li>Hist??ria</li>
                <li>Qu??mica</li>
                <li>Biologia</li>
                <li>Empreendedorismo</li>
                <li>Express??o Pl??stica</li>
                <li>Ingl??s</li>
                <li>Express??o Musical</li>
                <li>F??sica</li>
                <li>Express??o Motora</li>
                <li>Psicologia</li>
                <li>Nhaneca</li>
            </ul>
            11?? Classe Disciplina Lesionadas
            <ul>
                <li>L??ngua portuguesa </li>
                <li>Matem??tica</li>
                <li>TDEC ???Teoria do desenvolvimento de Educa????o Curricular???</li>
                <li>Metodologia de L??ngua Portuguesa</li>
                <li>Metodologia geografia e Historia </li>
                <li>NEE ??? Necessidade especiais educativas</li>
                <li>PSEP??? Pratica semin??rio est??gio pedag??gico???</li>
                <li>Ingl??s</li>
                <li>Express??o Pl??stica</li>
                <li>Express??o Musical</li>
                <li>Express??o Motora</li>
                <li>Nhaneca</li>
            </ul>
            12?? Disciplinais lesionadas
            <ul>
                <li>L??ngua portuguesa </li>
                <li>Matem??tica</li>
                <li>Metodologia de L??ngua Portuguesa</li>
                <li>Metodologia geografia e Historia </li>
                <li>PSEP??? Pratica semin??rio est??gio pedag??gico</li>
                <li>Metodologia de estudo do meio </li>
                <li>Ingl??s</li>
                <li>Filosofia</li>
                <li>Express??o Pl??stica</li>
                <li>Express??o Musical</li>
                <li>Express??o Motora</li>
                <li>Nhaneca</li>
                <li>FPSD Forma????o pessoal social e Deontol??gicas</li>
            </ul>

            <p>Durante o percurso de forma????o na 13??clase o aluno estar?? preparado e capacitado fazer um casamento
                perfeito entre a teoria e pratica podendo fazer o ???Estagio??? e ter?? simplesmente uma disciplina
                denominada Higiene e Sa??de, O aluno ser?? respons??vel pelo se plano de aulas durante o percurso do
                estagio.

                Ap??s ter dado por encerrar o curso na 13?? classe o aluno este capacitado para ostentar o nome de docente
                podendo dar aulas no ensino Prim??rio podendo cria uma institui????o de ensino Prim??rio ???Col??gio ou uma
                cresce.

            </p>
        </font>
    </div> <!-- END of templatemo_main -->

    <div id="templatemo_bottom_wrapper">
        <div id="templatemo_bottom">
            <div class="col one_third">
                <h4><span></span>Menu</h4>
                <div class="bottom_box">
                    <ul class="footer_list">
                        <li><a href="Estrutura.php">Estrutura</a></li>
                        <li><a href="#">Cadastoro</a></li>
                        <ul>
                            <li>Cursos</li>
                            <li><a href="Pre-escolar.php">Pr??-escolar</a></li>
                            <li><a href="Magisterio Primario.php">Magisterio Primario</a></li>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="col one_third">
                <h4><span></span> Contactos</h4>
                <li>email:luciacalulu@yahoo.com.br</li>
                <li>silcasilva7@yahoo.com.br</li>
                <li>telefone:+244 924-410-501</li>
                <li>+244 923-699-207</li>

                <?php 
                if(isset($_SESSION['nome'])){
                    ?>
                <li><a href="logout.php" class="selected">Logout</a></li>
                <?php 
                }else{
                ?>
                <li><a href="login.php" class="selected">Login</a></li>
                <?php
                }
                ?>
                <div class="bottom_box">
                    <ul class="twitter_post">
                        <li></a></li>
                        <li></li>
                    </ul>
                </div>
            </div>
            <div class="col one_third no_margin_right">
                <center>
                    <h4><span></span>Sobre a Pagina</h4>
                </center>
                <div class="bottom_box">
                    <p><em>esta pagina web foi criada com objetivo de promover a publicita????o das informa????es da escola
                            Julia lopes a nivel da midia
                            de modo a facilitar e minimizar os gastos, esfor??os tornando mais fac??l o processo de
                            aderencia a escola. </em></p><br />
                    <div class="footer_social_button">
                        <a href="#"><img src="images/facebook.png" title="facebook" alt="facebook" /></a>
                        <a href="#"><img src="images/flickr.png" title="flickr" alt="flickr" /></a>
                        <a href="#"><img src="images/twitter.png" title="twitter" alt="twitter" /></a>
                        <a href="#"><img src="images/youtube.png" title="youtube" alt="youtube" /></a>
                        <a href="#"><img src="images/feed.png" title="rss" alt="rss" /></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="cleaner"></div>
    </div> <!-- END of tempatemo_bottom -->
    </div> <!-- END of tempatemo_bottom_wrapper -->

    <div id="templatemo_footer_wrapper">
        <div id="templatemo_footer" <center>
            <h3>Ecola Magisterio Primario J??lia Lopes</h3>
            </center>
        </div> <!-- END of templatemo_footer_wrapper -->
    </div> <!-- END of templatemo_footer -->

</body>

</html>