@extends('template')

@section('titulo', 'Labores asignadas a docentes')

@section('contenido')

<div class="container-fluid">
    <!-- Pensum -->
    <div class="card shadow mb-4">
        <!-- Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="padding: 10px 10px; margin-bottom: 20px; padding-top: 20px; width: 70%;">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar docente" aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Seleccione</th>
                            <th>Facultad</th>
                            <th>Codigo</th>
                            <th>Cedula</th>
                            <th>Primer Apellido</th>
                            <th>Segundo Apellido</th>
                            <th>Primer Nombre</th>
                            <th>Segundo Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Puedes agregar filas y datos aquí según tu necesidad -->
                        <tr>
                            <td>
                                <div class="text-center">
                                    <input type="radio" aria-label="Radio button for following text input" id="">
                                </div>
                            </td>
                            <td>Dato 1</td>
                            <td>Dato 2</td>
                            <td>Dato 3</td>
                            <td>Dato 4</td>
                            <td>Dato 5</td>
                            <td>Dato 6</td>
                            <td>Dato 7</td>
                        </tr>
                        <!-- Puedes agregar más filas según sea necesario -->
                    </tbody>
                </table>
            </div>
        </div>


    </div>
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <a href="#" class="btn btn-primary btn-sm shadow"><i class="fas fa-download fa-sm text-white-50"></i>
            Generar reporte</a>
    </div>

    <!-- Botones -->
    <div class="col-md-6">
        <div class="btn-group d-flex justify-content-center">
            <div class="boton-container">
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Editar</a>
            </div>
            <div class="boton-container" style="margin-left: 4px;">
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Cancelar</a>
            </div>
            <div class="boton-container" style="margin-left: 4px;">
                <a href="#" class="btn btn-primary mb-2" onclick="mostrarAdvertencia()">Guardar cambios</a>
            </div>
        </div>
    </div>
    <!-- Advertnecia -->
    <script>
        function mostrarAdvertencia() {
            // Utiliza el método confirm() para mostrar una ventana emergente con los botones Aceptar y Cancelar
            var confirmacion = confirm("¿Estás seguro de guardar cambios?");

            // Si el usuario hace clic en Aceptar, realiza la acción de guardar
            if (confirmacion) {
                alert("Cambios guardados correctamente."); // Puedes reemplazar esto con tu lógica de guardar datos
            } else {
                alert("Cambios cancelados.");
            }
        }
    </script>

</div>

<!-- End of Main Content -->

@endsection