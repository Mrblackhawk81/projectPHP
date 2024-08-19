<?php include_once "cabecera.php"?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Cliente</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Registrar Pago</h2>
        <form action="../controlador/ctrlPago.php" method="POST">
        <div class="mb-3">
                <label for="forma_pago" class="form-label">Forma de pago</label>
                <select class="form-select" id="forma_pago" name="forma_pago" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    <option value="efectivo">Efectivo</option>
                    <option value="tarjeta">Tarjeta de crédito/débito</option>
                    <option value="transferencia">Transferencia bancaria</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_pago" class="form-label">Fecha de pago</label>
                <input type="date" class="form-control" id="fecha_pago" name="fecha_pago" required>
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total Pago</label>
                <input type="number" class="form-control" id="total" name="total" required>
            </div>
            <div class="mb-3">
                <label for="codigo_cliente" class="form-label">Codigo Cliente</label>
                <input type="number" class="form-control" id="codigo_cliente" name="codigo_cliente" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
