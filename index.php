<?php session_start()?>
<?php include_once './includes/header.inc.php'?> 
<?php include_once './includes/menu.inc.php'?> 
 <?php 
    include ('./db/conexao.php');
    if (isset($_POST['nome']) ||isset ($_POST['senha'])){
        if(strlen($_POST['nome']) == 0 ){
            echo "Preencha seu nome";
        }elseif (strlen($_POST['senha']) == 0 ) {
            echo "Preencha sua senha";
        } else{
            $nome = $link->real_escape_string($_POST['nome']);
            $senha = $link->real_escape_string($_POST['senha']);
            
            $sql_code = "SELECT * FROM tb_usuario WHERE nome = '$nome' AND senha = '$senha'";
            $sql_query = $link->query($sql_code) or die("Falha na execução do código SQL: ".$link->error);
            
            $quantidade = $sql_query->num_rows;
            
            if ($quantidade == 1){
                $usuario = $sql_query->fetch_assoc();
                
                if (!isset($_SESSION)){
                    session_start();
                }
                $_SESSION['id']   = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                
                header("Location:consultas.php");
            } else {
                echo "Falha ao logar! Verifique nome e senha!";
            }
        } 
    }
    
?>

        <!--FORMULARIO DE LOGIN-->
        <div class="row container">
            <p>&nbsp;</p>
            <h5 class="light center">Acessar conta</h5><hr>
            <form action="" method="post" class="col s12">
                <fieldset class="formulario" style="padding: 15px">
                    <p>
                        <label>Nome</label>
                        <input type="text" name="nome" class="input-field col ">                    
                    </p>
                    <p>
                        <label>Senha</label>
                        <input type="password" name="senha">                    
                    </p>
                    <p>
                        <button type="submit" class="btn blue">Entrar</button>
                        <a href="usuario.php" class="btn blue">Cadastrar</a>
                    </p>
                </fieldset>
            </form>
        </div>
    
        
           
        
<?php include_once './includes/footer.inc.php'?>       