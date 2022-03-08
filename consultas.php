<?php include_once 'protect.php'?>
<?php include_once './includes/header.inc.php'?> 
<?php include_once './includes/menu.inc.php'?> 

<div class="row container">
    <div class="col s12">
        <legend><img src="imagens/consulta.png" alt="[imagem]" width="100"></legend>
        <h5 class="light">Consultas</h5><hr>
        
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descriçao</th>
                    <th>Codigo de barra</th>
                    <th>fabricante</th>
                    <th>validade</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once './db/produto/read-produto.php';
                ?>
            </tbody>
            
        </table>
    </div>
</div>


<?php include_once './includes/footer.inc.php'?> 
