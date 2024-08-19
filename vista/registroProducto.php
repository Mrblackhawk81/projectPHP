<?php include_once "cabecera.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Producto</h2>
        <form action="../controlador/ctrlProducto.php" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="dimensiones" class="form-label">Dimensiones</label>
                <input type="text" class="form-control" id="dimensiones" name="dimensiones">
            </div>
            <div class="mb-3">
                <label for="proveedor" class="form-label">Proveedor</label>
                <input type="text" class="form-control" id="proveedor" name="proveedor">
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
            </div>
            <div class="mb-3">
                <label for="cantidad_en_stock" class="form-label">Cantidad en Stock</label>
                <input type="number" class="form-control" id="cantidad_en_stock" name="cantidad_en_stock" required>
            </div>
            <div class="mb-3">
                <label for="precio_venta" class="form-label">Precio de Venta</label>
                <input type="number" step="0.01" class="form-control" id="precio_venta" name="precio_venta" required>
            </div>
            <div class="mb-3">
                <label for="precio_proveedor" class="form-label">Precio del Proveedor</label>
                <input type="number" step="0.01" class="form-control" id="precio_proveedor" name="precio_proveedor">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Producto</button>
        </form>

        <hr class="my-5">

        <h2>Registrar Gama de Producto</h2>
        <form action="../controlador/ctrlGama.php" method="POST">
            <div class="mb-3">
                <label for="descripcion_texto" class="form-label">Descripción Texto</label>
                <textarea class="form-control" id="descripcion_texto" name="descripcion_texto"></textarea>
            </div>
            <div class="mb-3">
                <label for="descripcion_html" class="form-label">Descripción HTML</label>
                <textarea class="form-control" id="descripcion_html" name="descripcion_html"></textarea>
            </div>
            <div class="mb-3">
                <label for="imagen" class="form-label">URL de la Imagen</label>
                <input type="text" class="form-control" id="imagen" name="imagen">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Gama de Producto</button>
        </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
