<?php
$productos = array(
    array("id" => 1, "nombre" => "MICROONDAS 20 L BLANCO INNOVA", "imagen" => "img/01.jpg", "descripcion" => "20 litros, panel digital, cocción rápida, 700 watts de potencia, reloj, temporizador", "precio" => 69.00),
    array("id" => 2, "nombre" => "SANDUCHERA P/2 PANES SMART HOME REF 0499", "imagen" => "img/03.jpg", "descripcion" => "Sanduchera para 2 panes, doble indicador de luces, placas antiadherentes.", "precio" => 22.99),
    array("id" => 3, "nombre" => "REFRIGERADORA 298 L FRENCH DOBLE CAJON ELECTROLUX CROMADA", "imagen" => "img/02.jpg", "descripcion" => "Electrolux crea la mejor forma de conservar tus alimentos y tenerlos siempre frescos.", "precio" => 779.00),

);
?> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi tienda</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS externo -->
</head>
<body>
    <div class="container"> <!-- Contenedor para centrar el contenido -->
        <header>
            <h1>Mi tienda online</h1>
        </header>

        <div id="listaProductos">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Imagen</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripción</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($productos as $producto) { ?>
                    <tr>
                        <td><img src="<?php echo $producto["imagen"];?>" alt="<?php echo $producto["descripcion"];?>" class="product-image"></td>
                        <td><?php echo $producto["nombre"];?></td>
                        <td><?php echo $producto["descripcion"];?></td>
                        <td>$<?php echo $producto["precio"];?></td>
                        <td><button class="btn btn-primary" onclick="agregarAlCarrito(<?php echo $producto['id']; ?>)">Agregar al carrito</button></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="mt-5">
            <h3>Carrito:</h3>
            <div id="carritoItems"></div>
        </div>
    </div>

    <script type="text/javascript">
        let productos = <?php echo json_encode($productos, JSON_PRETTY_PRINT); ?>;
    </script>
    <script src="script.js"></script>
</body>
</html>
