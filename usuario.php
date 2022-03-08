<?php session_start()?>
<?php include_once './includes/header.inc.php'?> 
<?php include_once './includes/menu.inc.php'?> 

 <!--FORMULARIO DE CADASTRO-->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="db/create.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
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
                        <input type="text" name="nome" id="nome" maxlength="40" placeholder="Nome do Usuario" required autofocus>
                        
                    </div>
                    
                    <!--CAMPO SENHA-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="password" name="senha" id="senha" maxlength="12" placeholder="Senha" required>
                        
                    </div>
                    
                    <!--BOTÕES-->
                    <div class="input-field col s12">
                        <input type="submit" value="Cadastrar" class="btn blue">
                        <input type="reset" value="Limpar" class="btn red">

                    </div>
                    
                </fieldset>
            </form>
        </div>




<?php include_once './includes/footer.inc.php'?>   