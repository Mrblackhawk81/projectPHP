<?php
include_once "../modelo/modProducto.php";
include_once "../modelo/modGamaProducto.php";

// Llenado de los datos del formulario HTML
$nombre = htmlspecialchars($_POST['nombre']);
$dimensiones = htmlspecialchars($_POST['dimensiones']);
$proveedor = htmlspecialchars($_POST['proveedor']);
$descripcion = htmlspecialchars($_POST['descripcion']);
$cantidad_en_stock = htmlspecialchars($_POST['cantidad_en_stock']);
$precio_venta = htmlspecialchars($_POST['precio_venta']);
$precio_proveedor = htmlspecialchars($_POST['precio_proveedor']);
$gama = htmlspecialchars($_POST['gama']);

$gamaProducto = new GamaProducto();
$gamaProducto->setGama($gama);
if (!$gamaProducto->existeGama()) {
    echo "<script>alert('No hay gama registrada con el ID proporcionado.'); window.history.back();</script>";
    exit;
}

$producto = new Producto();
$producto->setNombre($nombre);
$producto->setDimensiones($dimensiones);
$producto->setProveedor($proveedor);
$producto->setDescripcion($descripcion);
$producto->setCantidadEnStock($cantidad_en_stock);
$producto->setPrecioVenta($precio_venta);
$producto->setPrecioProveedor($precio_proveedor);
$producto->setGama($gama);

$producto->registrarProducto();
echo "<script>alert('Producto registrado exitosamente.'); window.location.href='pagina_de_confirmacion.php';</script>";
?>
