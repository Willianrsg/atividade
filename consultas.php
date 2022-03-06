<?php include_once './includes/header.inc.php'?> 
<?php include_once './includes/menu.inc.php'?> 

<div class="row container">
    <div class="col s12">
        <<h5 class="light">Consultas</h5><hr>
        
        <table class="striped">
            <<thead>
                <tr>
                    <th>Nome</th>
                    <th>Senha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include_once 'db/read.php';
                ?>
            </tbody>
            
        </table>
    </div>
</div>


<?php include_once './includes/footer.inc.php'?> 
