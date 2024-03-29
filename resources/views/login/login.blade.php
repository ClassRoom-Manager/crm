<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Iniciar sesión</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container h-100">
        <div class="abs-center">
            <!-- Outer Row -->
            <div class="d-flex justify-content-center h-100">

                <div class="col-xl-10 col-lg-12 col-md-9">

                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row">
                                <div class="col-lg-6 d-none d-lg-block bg-login"
                                    style="text-align: center; height: 100%; display: flex; align-items: center; justify-content: center; margin-top: 90px;">
                                    <img src="https://moodle.uniautonoma.edu.co/pluginfile.php/1/theme_lambda/logo/1699540253/logo-quimera-transparente-550x420.png"
                                        style="max-width: 100%; max-height: 100%;">
                                </div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h4 text-gray-900 mb-4">Bienvenido a Class Rom Manager</h1>
                                        </div>
                                        <form class="user" method="POST" action="{{ route('login.authenticate') }}">
                                            @csrf
                                            <div class="form-group">
                                                <input type="email" class="form-control form-control-user"
                                                    name="email" id="inputEmail" aria-describedby="emailHelp"
                                                    placeholder="Correo electrónico">
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control form-control-user"
                                                    name="password" id="inputPassword" placeholder="Contraseña">
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox small">
                                                    <input type="checkbox" class="custom-control-input"
                                                      name="remember"  id="customCheck">
                                                    <label class="custom-control-label" for="customCheck">Recordar
                                                        usuario</label>
                                                </div>
                                            </div>
                                            <button type="submit"
                                                class="btn btn-primary btn-user btn-block">Entrar</button>
                                            <hr>
                                        </form>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="{{ route('login.olvidocontrasenia') }}">Olvidó su contraseña?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

   <!-- Additional script -->

   <script>
        function showAlert(title, message, type = 'info') {
            Swal.fire({
                title: title,
                text: message,
                icon: type,
                confirmButtonText: 'OK'
            });
    }

        @if (session('alert'))
            showAlert('Alerta', '{{ session('alert') }}', 'info');
        @endif

        @if (session('incorrect_values'))
            showAlert('Valores Incorrectos', '{{ session('incorrect_values') }}', 'error');
        @endif

        @if (session('wrong_password'))
            console.log('Se detectó la sesión de contraseña incorrecta');
            showAlert('Error de Autenticación', 'La contraseña ingresada es incorrecta.', 'error');
        @endif

        @if (session('invalid_email'))
            showAlert('Correo Electrónico Inválido', '{{ session('invalid_email') }}', 'error');
        @endif
// Agregar más alertas según sea necesario para otros casos
    </script>


</body>

</html>