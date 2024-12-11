<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="../../src/public/js/sweet-alert.js"></script>
    <link rel="stylesheet" href="../../src/public/css/admin-index.css">
    <title>Login</title>
</head>

<body>

    <div class="container-fluid">
        <div class="container w-50 d-flex flex-column">
            <!-- Image Login Header -->
            <div class="image-header m-auto">
                <img src="../../src/public/images/login-image.jpg" alt="Login Header" class="img-fluid rounded-circle" width="300">
            </div>
            <!-- Image Login Header -->
            <form action="/admin/authenticate" method="post" id="form-login">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3" required>
                <label for="password" class="form-label">Senha</label>
                <input type="password" name="password" id="password" class="form-control mb-3" required>
                <!-- Recovery password link -->
                <a href="/admin/recovery-password" class="text-decoration-none" data-bs-toggle="modal" data-bs-target="#recoveryPassword">Esqueceu sua senha?</a>
                <!-- Recovery password link -->
        
                    <!-- Message Log -->
                    <div class="messages" id="messages">
                        <?php
                        use Project\Delivery\Library\SweetAlert;
                        
                        if(isset($_GET["login"]))
                        {
                            SweetAlert::messageWithIcon("Error", "Usuário ou senha não encontrados!", "warning");
                        }
                        ?>
                    </div>
                    <!-- Message Log -->

                <button type="submit" class="btn btn-primary form-control mt-2 mb-3 slide-in">Realizar Login</button>
            </form>
        </div>

        <!-- Modal Recovery Password-->
        <form action="" method="post" id="form-recovery">
        <div class="modal fade" id="recoveryPassword" tabindex="-1" aria-labelledby="recoveryPassword" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="recoveryPassword">Recuperar Senha!</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <label for="email" class="form-label">Digite seu email</label>
                        <input type="email" name="email_recover" id="email_recover" class="form-control mb-3">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary">Recuperar</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
        <!-- Modal Recovery Password-->

    </div>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Script Bootstrap -->
    <script src="../../src/public/js/admin-index.js"></script>
</body>

</html>