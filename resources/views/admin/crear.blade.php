<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Registro</title>
    <!-- CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <h2>Crear Nuevo Registro</h2>
                        <!-- Mensaje de éxito -->
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="modal-body">
                            <form action="{{ route('guardar_registro') }}" method="POST" enctype="multipart/form-data">
                                @csrf <!-- Directiva Blade para protección contra falsificación de solicitudes -->

                                <div class="form-group row">
                                    <label for="fecha" class="col-sm-2 col-form-label">Fecha:</label>
                                    <div class="col-sm-10">
                                        <input type="date" id="fecha" name="fecha" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="categoria" class="col-sm-2 col-form-label">Categoría:</label>
                                    <div class="col-sm-10">
                                        <select id="categoria" name="categoria_id" class="form-control">
                                            @foreach($categorias as $categoria)
                                                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                

                                <div class="form-group row">
                                    <label for="usuario" class="col-sm-2 col-form-label">Usuario:</label>
                                    <div class="col-sm-10">
                                        <select id="usuario" name="usuario_id" class="form-control">
                                            @foreach($usuarios as $usuario)
                                                <option value="{{ $usuario->id }}">{{ $usuario->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="descrip" class="col-sm-2 col-form-label">Descripción:</label>
                                    <div class="col-sm-10">
                                        <textarea id="descrip" name="descrip" class="form-control" rows="4" cols="50"></textarea>
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Guardar">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScript de Bootstrap (colócalo antes de cerrar el body) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
