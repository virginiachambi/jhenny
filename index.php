<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poemas para Gatitos</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        .gallery-item {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            text-align: center;
        }
        h1 {
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Poemas para Gatitos</h1>
        <div class="gallery">
            <?php
            // Array de poemas para los gatitos
            $poemas = [
                "¡Oh, gatito tan suave y tan encantador! Tu ronroneo es un dulce cantar.",
                "En un rincón de la casa, un pequeño felino descansa. Sus ojos brillan con alegría, y en su sueño, hay fantasía.",
                "Gatito juguetón, con tu mirada tierna, llenas de amor cada mañana y cada noche eterna.",
                "Con pasos sigilosos y una cola que se mece, el gatito explora y su curiosidad crece.",
                "Entre las sombras y los rayos del sol, el gatito se desliza con un elegante control."
            ];

            // Mostrar cada poema
            foreach ($poemas as $poema) {
                echo '<div class="gallery-item">';
                echo '<p>' . $poema . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>

