<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Sistema de login</title>
</head>
<body>
    <div class="container-fluid vh-100" id="corpo">
        <div class="row align-items-center justify-content-center h-100">
            <div class="col-lg-3 col-sm-6 p-3 rounded" id="formulario">
                <h2 class="text-center">Login</h2>
                <form action="login.php" method="post">
                    <div>
                        <div class="mb-4">
                            <label for="">Usuario</label>
                            <input type="text" name="usuario" id="" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-4">
                            <label for="">Senha</label>
                            <input type="password" name="senha" id="" class="form-control">
                        </div>
                    </div>
                    <div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>