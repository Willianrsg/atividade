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
        include_once './db/conexao.php';
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $querySelect = $link->query("select * from tb_usuario where id='$id'");
    
    while($registros = $querySelect->fetch_assoc()):
        $id    = $registros['id'];
        $nome  = $registros['nome'];
        $senha = $registros['senha'];
    endwhile;
?>

<!--FORMULARIO DE CADASTRO-->
        <div class="row container">
            <p>&nbsp;</p>
            <form action="db/update.php" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <legend><img src="imagens/avatar.png" alt="[imagem]" width="100"></legend>
                    <h5 class="light center">Alteração</h5>
                    
                    <!--CAMPO NOME-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlength="40" required autofocus>
                        <label for="nome">Nome do Usuario</label>
                    </div>
                    
                    <!--CAMPO SENHA-->
                    <div class="input-field col s12">
                        <!--<i class="material-icons prefix">account_circle</i>-->
                        <input type="password" name="senha" id="senha" value="<?php echo $senha ?>" maxlength="12" required>
                        <label for="senha">Senha do Usuario</label>
                    </div>
                    
                    <!--BOTÕES-->
                    <div class="input-field col s12">
                        <input type="submit" value="Alterar" class="btn blue">
                        <a href="consulta.php" class="btn red">Cancelar</a>

                    </div>
                    
                </fieldset>
            </form>
        </div>


<?php
include_once './includes/footer.inc.php';
?>