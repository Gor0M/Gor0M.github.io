<?php
$conexion = new mysqli("localhost", "root", "", "Comercializadora");

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

$resultado = $conexion->query("SELECT * FROM productos");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Comercializadora</title>
</head>

<body>
    <!-- 
navegador inicio
 -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container-fluid bg-primary">
            <a class="navbar-brand" href="#"><img src="img/CRG.jpeg" alt="Comercializadora" width="50" height="50"
                    class="d-inline-block align-text-top"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="index.html">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page" href="Productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-warning" aria-current="page"
                            href="contactanos.html">Contactanos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- 
navegador fin
 -->
    <!-- 
contenido inicio
 -->
    <div>
        <div class="card">
            <div class="card-body text-center">
                <h1>Productos</h1>
            </div>
        </div>
        <table class="table">
            <thead class="table-primary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Cantidad Disponible</th>
                </tr>
                        <?php while ($row = $resultado->fetch_assoc()) { ?>
            </thead>
            <tbody>
                 <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['nombre']) ?></td>
                <td><?= nl2br(htmlspecialchars($row['descripcion'])) ?></td>
                <td><?= $row['cant_disponible'] ?></td>
            </tr>
        <?php } ?>
            </tbody>
        </table>
    </table>
    </div>
    <!-- 
contenido fin
 -->
    <!-- 
footer inicio
 -->
    <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="index.html" class="nav-link p-0 text-body-secondary">Home</a>
                        </li>
                        <li class="nav-item mb-2"><a href="Productos.php"
                                class="nav-link p-0 text-body-secondary">Productos</a></li>
                        <li class="nav-item mb-2"><a href="contactanos.html"
                                class="nav-link p-0 text-body-secondary">Contactanos</a></li>
                        <li class="nav-item mb-2"><a href="contactanos.html"
                                class="nav-link p-0 text-body-secondary">Preguntas</a></li>
                    </ul>
                </div>

                <div class="col-md-6 offset-md-1 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="img/CRG.jpeg" class="card-img-top" alt="...">
                    </div>
                </div>
                <div class="col-6 col-md-2 mb-3">
                    <p>&copy; 2025 Company, Inc. All rights reserved.</p>
                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#twitter" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#instagram" />
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                                    <use xlink:href="#facebook" />
                                </svg></a></li>
                    </ul>
                </div>

            </div>
        </footer>
    </div>
    <!-- 
footer fin
 -->
    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>
</html>