<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
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
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Novel Notes - Blog</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/business-casual.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
   



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
                    <h2 class="intro-text text-center">Company
                        <strong>blog</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/review4.jpg" alt="" width="500" height="700">
                    <h2>Senhor dos Anéis: As duas torres
                        <br>
                        <small>Juny 3, 2022</small>
                    </h2>
                    <p>As Duas Torres O segundo volume de O Senhor dos Anéis arra os caminhos separados seguidos pelos membros da Sociedade do Anel em sua luta para deter Sauron, o Senhor Sombrio da terra de Mordor, e destruir o Um Anel, no qual está contida a maior parte do poder do tirano demoníaco imaginado por J.R.R. Tolkien.</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img src="img/review3.jpg" alt="" width="500" height="700">
                    <h2>O Sinal e o ruído
                        <br>
                        <small>October 13, 2022</small>
                    </h2>
                    <p>Planejar o futuro e traçar estratégias para alcançar determinados objetivos são atividades rotineiras para o ser humano. Porém, à medida que o ritmo da vida cotidiana se acelera, aumentam também as demandas para rápidas tomadas de decisões.</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <img  src="img/review5.jpg" alt="" width="500" height="700">
                    <h2>Harry Potter e a Pedra Filosofal
                        <br>
                        <small>July 25, 2022</small>
                    </h2>
                    <p>O livro começa de forma lenta, contextualizando como é a vida da família Dursley, tios de Harry, e no "movimento" criado para que Harry Potter, ainda bebê, fosse deixado na porta dos Dursley. O garoto fora o único sobrevivente do ataque de Voldemort,  um grande bruxo maligno. Mas esta informação é omitida por seus tios durante toda a sua infância...</p>
                    <a href="#" class="btn btn-default btn-lg">Read More</a>
                    <hr>
                </div>
                <div class="col-lg-12 text-center">
                    <ul class="pager">
                        <li class="previous"><a href="#">&larr; Older</a>
                        </li>
                        <li class="next"><a href="#">Newer &rarr;</a>
                        </li>
                    </ul>
                </div>
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

    <script src="js/jquery.js"></script>

    <script src="js/bootstrap.min.js"></script>

</body>

</html>
