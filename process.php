<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $origen = $_POST['origen'];
    $destino = $_POST['destino'];
    $fecha = $_POST['fecha'];
    $transporte = $_POST['transporte'];
    $cantidad = $_POST['cantidad'];

    // Precios de los transportes
    $precios = [
        'autobus' => 100,
        'taxi' => 80,
        'mototaxi' => 50
    ];

    // Calcular el total
    $precio_por_boleto = $precios[$transporte];
    $total_pago = $precio_por_boleto * $cantidad;

    // Simulación de procesamiento de pago
    $pago_exitoso = true; // Aquí puedes integrar tu lógica de pago real

    if ($pago_exitoso) {
        echo "
        <div style='text-align: center; font-family: Arial, sans-serif;'>
            <h2>¡Pago Exitoso!</h2>
            <p>Gracias por tu compra. Aquí está tu comprobante de pago:</p>
            <div style='border: 1px solid #ccc; padding: 20px; margin: 20px; display: inline-block; text-align: left;'>
                <h3>Comprobante de Pago</h3>
                <p><strong>Origen:</strong> $origen</p>
                <p><strong>Destino:</strong> $destino</p>
                <p><strong>Fecha:</strong> $fecha</p>
                <p><strong>Transporte:</strong> $transporte</p>
                <p><strong>Cantidad de Boletos:</strong> $cantidad</p>
                <p><strong>Total Pagado:</strong> $$total_pago MXN</p>
            </div>
            <button onclick='window.print()' style='padding: 10px 20px; background-color: #4ECDC4; color: white; border: none; cursor: pointer;'>Imprimir Comprobante</button>
        </div>
        ";
    } else {
        echo "Hubo un problema con el pago. Por favor, inténtelo de nuevo.";
    }
}
?>