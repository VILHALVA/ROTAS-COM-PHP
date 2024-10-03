<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Adicionar MaterializeCSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        .card {
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho fixo -->
    <nav class="card-panel pink darken-4">
        <div class="nav-wrapper valign-wrapper">
            <a class="brand-logo center valign">ROTAS</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="index.php?page=home">HOME</a></li>
                <li><a href="index.php?page=curiosidades">CURIOSIDADES</a></li>
                <li><a href="index.php?page=sobre">SOBRE</a></li>
            </ul>
        </div>
    </nav>

    <!-- Conteúdo da página HOME -->
    <div class="container">
        <div class="row">
            <div class="col s12 m8 offset-m2">
                <div class="card">
                    <h2>Bem-vindo à HOME!</h2>
                    <p>Esta é a página inicial do nosso aplicativo de rotas.</p>
                    <p>Para navegar nas rotas, por favor, clique nos links do cabeçalho fixo acima.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts do MaterializeCSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>