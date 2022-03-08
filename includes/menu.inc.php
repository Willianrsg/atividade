<nav class="blue-grey" >
            <div class="nav-wrapper container">
                <div class="brand-logo light"><a href="../produto.php">Controle de Estoque</a></div>
                <ul class="right">
                    <li><a href="./index.php"><i class="material-icons left"></i>Home</a></li>
                    <li><a href="usuario.php"><i class="material-icons left"></i>Cadastro</a></li>
                    <li><a href="consultas.php"><i class="material-icons left"></i>Consultas</a></li>
                    <li><a href="produto.php"><i class="material-icons left"></i>Produtos</a></li>
                    <li><a href="../logout.php"><i class="material-icons left"></i>Sair</a></li>
                    <i class="material-icons prefix">person</i>
                    <li><?php echo $_SESSION['nome'];?></li>
                </ul>
                  
            </div>
        </nav>