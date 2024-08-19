<?php
include_once "../modelo/modPago.php";
include_once "../modelo/modCliente.php";

// Llenado de los datos del formulario HTML
$forma_pago = htmlspecialchars($_POST['forma_pago']);
$fecha_pago = htmlspecialchars($_POST['fecha_pago']);
$total = htmlspecialchars($_POST['total']);
$codigo_cliente = htmlspecialchars($_POST['codigo_cliente']);

// Verificar si el cliente existe
$cliente = new Cliente();
$cliente->setCodigoCliente($codigo_cliente);
if (!$cliente->existeCliente()) {
    echo "<script>alert('No hay cliente registrado con el ID proporcionado.'); window.history.back();</script>";
    exit;
}

// Uso de los setters del modelo Pago
$pago = new Pago();
$pago->setFormaPago($forma_pago);
$pago->setFechaPago($fecha_pago);
$pago->setTotal($total);
$pago->setCodigoCliente($codigo_cliente);

// Registrar pago
$pago->registrarPago();
?>
