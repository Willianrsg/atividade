<?php 
    include_once './includes/header.inc.php';
    include_once './includes/menu.inc.php';
?>

<div class="row container">
    <div class="col s12">
        <h5 class="light">Edição de Registros</h5><hr>
    </div>
</div>

<?php
    include_once '../db/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $querySelect = $link->query("select * from tb_produto where id='$id'");
    
    while($registros = $querySelect->fetch_assoc()):
        $id           = $registros['id'];
        $nome         = $registros['nome'];
        $descricao    = $registros['descricao'];
        $codigo_barra = $registros['codigo_barra'];
        $fabricante   = $registros['fabricante'];
        $validade     = $registros['validade'];
    endwhile;
?>

<!--FORMULARIO DE CADASTRO-->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="db/produto/create-produto.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Cadastro de Produto</h5>
                   
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
                        <input type="submit" value="Alterar" class="btn blue">
                        <a href="../consultas.php" class="btn red">Cancelar</a>

                    </div>
                    
                </fieldset>
            </form>
        </div>
<a href=""

<?php
include_once './includes/footer.inc.php';
?>