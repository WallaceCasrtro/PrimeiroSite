<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Novel Notes - Perfil</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <link href="css/business-casual.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleaips.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
    <?php
    session_start();
    $nomeB_servidor = "sql10.freemysqlhosting.net";
    $nomeB_usuario = "sql10624189";
    $senhaB = "n9UvWuzumq";
    $nome_B = "sql10624189";
    $conn = new mysqli($nomeB_servidor, $nomeB_usuario, $senhaB, $nome_B);
    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }
    if (isset($_SESSION['usuario'])) {
    } else {
        header("Location: login.php");
        exit();
    }
    $conn->close();
?>
</head>

<body>

    <div class="brand">Novel Notes</div>
    
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="Perfil.php">Perfil</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li>
                        <a href="contact.html">Cadastrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>Meu Perfil</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-4">
                    <img class="img-responsive img-border-left" src="img/Photo.png" alt="" width="300" height="200">
                </div>
                <div class="col-md-6">
                    <p><?php echo "".$_SESSION["usuario"];?></p>
                    <p>Atualizar infomação do usuario</p>
                    <p><form action="update.php" method="POST">
                      <input type="text" name="novo" id="novo">
                      <select name="operacao" id="operacao" required>
                        <option value="">Selecione</option>
                        <option value="nomeU">Nome</option>
                        <option value="emailU">Email</option>
                        <option value="senhaU">Senha</option>
                      </select><br>
                      
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <div id="mensagem" style="color: red;"></div></p>
                
                <button onclick="confirmLogout()">Para desconectar</button>
                <br><br>
                <a href="#" onclick="confirmDelete()" style="color: red; text-decoration: none;">Deletar conta</a>

                
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong>form</strong>
                    </h2>
                    <hr>
                    <p>Esse campo e usado para postar uma review de um livro para ser postado tem que ser revisado por um superior</p>
                    <form role="form">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Email Address</label>
                                <input type="email" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label>Review</label>
                                <textarea class="form-control" rows="6"></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>@2023</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
        $('form').submit(function(event) {
            event.preventDefault();
    
        var novo = $('#novo').val();
        var operacao = $('#operacao').val();
        var erro = false;

        switch (operacao) {
            case "nomeU":
                if (novo.length < 3) {
                  $('#mensagem').text("O nome deve ter pelo menos 3 caracteres.");
                erro = true;
        }
        break;
      
      
        case "emailU":
            if (novo.indexOf('@') === -1) {
            $('#mensagem').text("O email informado é inválido.");
            erro = true;
            }
        break;
      
        case "senhaU":
            if (novo.length < 6) {
            $('#mensagem').text("A senha deve ter pelo menos 6 caracteres.");
            erro = true;
        }
        break;
      
        default:
            $('#mensagem').text("Selecione uma operação válida.");
            erro = true;
            break;
    }

        if (!erro) {
        this.submit();
    }
    });
    });
    function confirmLogout() {
    if (confirm("Tem certeza de que deseja fazer logout?")) {
        window.location.href = "logout.php";
    }
    }
    function confirmDelete() {
    if (confirm("Tem certeza de que deseja deletar sua conta? Essa ação é irreversível.")) {
        window.location.href = "deleta.php";
    }
    }
    </script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
