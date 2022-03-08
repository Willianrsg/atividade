
<?php session_start()?>
<?php include_once './includes/header.inc.php'?> 
<?php include_once './includes/menu.inc.php'?> 

 <!--FORMULARIO DE CADASTRO-->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="db/create-produto.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Cadastro de Produto</h5>
                    
                    <?php
                        if (isset($_SESSION['msg'])):
                            echo $_SESSION['msg'];
                            session_unset();
                        endif;
                    ?>
                    <!--CAMPO NOME-->
                    <div class="input-field col s12">
                        <input type="text" name="nome" id="nome" maxlength="40" placeholder="Nome do Produto" required autofocus>
                        
                    </div>
                    
                    <!--CAMPO DESCRIÇÃO-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="descricao" id="descricao" maxlength="40" placeholder="Descrição do Produto" required>
                        
                    </div>
                    
                    <!--CAMPO CÓDIGO DE BARRA-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="number" name="codigo_barra" id="codigo_barra" maxlength="13" placeholder="Código de Barras" required>
                       
                    </div>
                    
                    <!--CAMPO FABRICANTE-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="fabricante" id="fabricante" maxlength="40" placeholder="Fabricante" required>
                        
                    </div>
                    
                    <!--CAMPO VALIDADE-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="date" name="validade" id="validade" placeholder="Validade">
                        
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