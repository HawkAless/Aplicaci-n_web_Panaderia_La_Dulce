<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Sección para crear Productos</h1>
    <form action="{{ url('/productos') }}" method="POST" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nombre_producto" class="form-label">{{ 'Nombre' }}</label>
            <input type="text" class="form-control" name="nombre_producto" id="nombre_producto" value="{{ old('nombre_producto') }}">
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">{{ 'Descripcion' }}</label>
            <input type="text" class="form-control" name="descripcion" id="descripcion" value="{{ old('descripcion') }}">
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">{{ 'Precio' }}</label>
            <input type="number" class="form-control" name="precio" id="precio" step="0.01" min="0" value="{{ old('precio') }}">
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">{{ 'Foto' }}</label>
            <input type="file" class="form-control" name="foto" id="foto" value="">
        </div>

        <button type="submit" class="btn btn-primary">Agregar</button>
    </form>
</div>

</body>
</html>
