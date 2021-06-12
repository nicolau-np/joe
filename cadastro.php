﻿<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>cadastro</title>
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

</head>

<body id="subpage">

    <div id="templatemo_header_wrapper">
        <div id="site_title">
            <h1><a href="#">Carousel Template</a></h1>
        </div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Cursos</a>
                    <ul>
                        <li><span class="top"></span><span class="bottom"></span></li>
                        <li><a href="Pre-escolar.php">Pré-escolar</a></li>
                        <li><a href="Magisterio Primario.php">Magisterio Primario</a></li>

                    </ul>
                </li>
                <li><a href="#">Fotos</a>
                    <ul>
                        <li><span class="top"></span><span class="bottom"></span></li>
                        <li><a href="Inauguracao.php">Inauguração</a></li>
                        <li><a href="Actividades.php">Actividades</a></li>

                    </ul>
                </li>
                <li><a href="Estrutura.php">Estrutura</a></li>
                <li><a href="cadastro.php" class="selected">Cadastro</a></li>
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        <div class="cleaner"></div>
    </div> <!-- END of templatemo_header_wrapper -->








    <form method="pst" id="fcadastro" oninput="calc_total();">
        <fieldset id="usuario">
            <legend>Identificação do Usuário</legend>
            <p><label for="cNome">Nome:<input type="text" name="nome" id="cNome" size="20" maxlength="30"
                        placeholder="Nome completo" /></p></label>
            <p> <label For="cSenha">Palavra-Passe:<input type="password" name="palavra_passe" id="cSenha" maxlength="8"
                        placeholder="Palavra-Passe" /> </p></label>
            <p>E-mail:<input type="email" name="email" id="cMail" /> </p>
            <fieldset id="sexo">
                <legend>Sexo:</legend>
                <select name="sexo">
                    <option>Masculino</option>
                    <option>Femenino</option>
                </select>

            </fieldset>

            <fieldset id="endereco">
                <legend>Endereço</legend>
                <p>Telefone:<input type="number" name="telefone" id="cRua" placeholder="Telefone" />
                </p>

            </fieldset>

            <input type="submit" value="Enviar" name="enviar">



</body>

</htmL>