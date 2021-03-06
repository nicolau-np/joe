<?php
ob_start();
session_start();
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>EScola Magisterio Primario Julia Lopes</title>
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
    <script type="text/JavaScript" src="js/jquery.mousewheel.js"></script>

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

    <!-- Load the CloudCarousel JavaScript file -->
    <script type="text/JavaScript" src="js/cloud-carousel.1.0.5.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {

        // This initialises carousels on the container elements specified, in this case, carousel1.
        $("#carousel1").CloudCarousel({
            reflHeight: 40,
            reflGap: 2,
            titleBox: $('#da-vinci-title'),
            altBox: $('#da-vinci-alt'),
            buttonLeft: $('#slider-left-but'),
            buttonRight: $('#slider-right-but'),
            yRadius: 30,
            xPos: 480,
            yPos: 32,
            speed: 0.15,
            autoRotate: "yes",
            autoRotateDelay: 1500
        });
    });
    </script>

</head>

<body id="home">

    <div id="templatemo_header_wrapper">
        <div id="site_title">
            <h1><a href="#">Carousel Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php" class="selected">Home</a></li>
                <li><a href="#">Cursos</a>
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
    <div id="templatemo_slider">
        <!-- This is the container for the carousel. -->
        <div id="carousel1" style="width:960px; height:280px;background:none;overflow:scroll; margin-top: 20px">
            <!-- All images with class of "cloudcarousel" will be turned into carousel items -->
            <!-- You can place links around these images -->
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/1.JPG" alt="CSS Templates 1"
                    title="Website Templates 1" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/2.JPG" alt="CSS Templates 2"
                    title="Website Templates 2" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/3.JPG" alt="CSS Templates 3"
                    title="Website Templates 3" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/4.JPG" alt="CSS Templates 4"
                    title="Website Templates 4" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/5.JPG" alt="Flash Templates 1"
                    title="Flash Templates 1" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/6.JPG" alt="Flash Templates 2"
                    title="Flash Templates 2" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/7.JPG" alt="Flash Templates 3"
                    title="Flash Templates 3" /></a>
            <a href="#" rel="lightbox"><img class="cloudcarousel" src="images/slider/8.JPG" alt="Flash Templates 4"
                    title="Flash Templates 4" /></a>
        </div>

        <!-- Define left and right buttons. -->
        <center>
            <input id="slider-left-but" type="button" value="" />
            <input id="slider-right-but" type="button" value="" />
        </center>
    </div>
    <div id="templatemo_main">
        <B>
            <center>
                <h2>Caracteriza????o da Escola</h2>
            </center>
        </B>
        A Escola de Forma????o de Professores do Magist??rio Prim??rio N?? 78N J??lia Lopes do Namibe,?? uma institui????o de
        Ensino Secund??rio do II Ciclo, criada ?? luz do Decreto executivo n??63/015 de 03 de Mar??o, no ??mbito da reforma
        educativa e do plano mestre com finalidade de formar futuros professores profissionalmente preparados para a
        doc??ncia no ensino prim??rio e do pr??-escolar.
        <p>
        <h5>Perfil de entrada e dura????o da forma????o</h5>
        Acesso a candidatos que tenham conclu??do o I ciclo do ensino secund??rio;
        <p>
            Idade m??nima 15 anos;
        <p>
            A forma????o tem a dura????o de (4) quatro anos.
        <p>
        <P>
        <h5>Objectivo</h5>
        Formar professores com s??lidos conhecimentos cient??ficos e t??cnicos e uma profunda consci??ncia nacionalista, de
        modo que assumam com responsabilidade a tarefa de educar as novas gera????es;
        Desenvolver ac????es de permanente actualiza????o e aperfei??oamento dos professores e agentes de educa????o nas
        modalidades de forma????o presencial, cont??nua e a dist??ncia.
        </P>
        <h5>Miss??o</h5>
        Formar professores profissionalmente preparados para a doc??ncia no Ensino Prim??rio e no Pr??-Escolar;

        Elevar o n??vel acad??mico e profissional dos agentes da educa????o nos demais munic??pios e comunas, sem os retirar
        dos seus locais de trabalho.

    </div> <!-- END of templatemo_main -->

    <div id="templatemo_bottom_wrapper">
        <div id="templatemo_bottom">
            <div class="col one_third">
                <font color="white">
                    <h4><span></span>Menu</h4>
                    <div class="bottom_box">
                        <ul class="footer_list">
                            <li><a href="Estrutura.php">Estrutura</a></li>
                            <li><a href="#">Cadastoro</a></li>
                            <li><a href="#">Cursos</a></li>
                            <ul>
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
                            aderencia a escola. </em></p><br /></font>
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
        <div id="templatemo_footer" <font color="white">
            <center>
                <h3>Ecola Magisterio Primario J??lia Lopes</h3>
            </center>
            </font>
        </div> <!-- END of templatemo_footer_wrapper -->
    </div> <!-- END of templatemo_footer -->