<?php session_start()?>
<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="materialize/css/materialize.min.css"> 
        <title>Login</title>
      
    </head>
    <body>
       
        <nav class="blue-grey" >
            <div class="nav-wrapper container">
                <div class="brand-logo light">Sistema de Cadastro</div>
                <ul class="right">
                    <li><a href=""><i class="material-icons left"></i>Cadastro</a></li>
                    <li><a href=""><i class="material-icons left"></i>Consultas</a></li>
                </ul>

            </div>
        </nav>
        
        <!--FORMULARIO DE CADASTRO-->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="db/create.php" method="post" class="col s12">
                <fieldset class="formulario">
                    <legend><img src="imagens/avatar.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Cadastro de Usuarios</h5>
                    
                    <?php
                        if (isset($_SESSION['msg'])):
                            echo $_SESSION['msg'];
                            session_unset();
                        endif;
                    ?>
                    <!--CAMPO NOME-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nome" id="nome" maxlength="40" required autofocus>
                        <label for="nome">Nome do Usuario</label>
                    </div>
                    
                    <!--CAMPO SENHA-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="password" name="senha" id="senha" maxlength="12" required>
                        <label for="senha">Senha do Usuario</label>
                    </div>
                    
                    <!--BOTÕES-->
                    <div class="input-field col s12">
                        <input type="submit" value="Cadastrar" class="btn blue">
                        <input type="reset" value="Limpar" class="btn red">

                    </div>
                    
                </fieldset>
            </form>
        </div>
          
        
        <!--ARQUIVOS JQUERY E JAVASCRIPT-->
        <script type="text/javascript" src="bootstrap-5.1.3/js/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="bootstrap-5.1.3/js/index.umd.js"></script>
        
        <!--INICIALIZÇÃO JQUERY-->
        <script type="text/javascript">
           $(document).ready(function (){
               
           })
        </script>
    </body>
</html>
