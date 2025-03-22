<?php
$host = $_SERVER['HTTP_HOST'];
$base_url = "http://$host/redpadre";  

$menuItems = [
    "Inicio" => "/public/index.php",
    "Noticias" => "/src/Views/Noticias.php",
    "Eventos" => "/src/Views/Eventos.php",
    "Contactos" => "/src/Views/Contactos.php",
    "Sobre nosotros" => "/src/Views/SobreNosotros.php",
    "Reseña" => "/src/Views/Reseña.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Red Padre</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<header>
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            
            <a href="<?= $base_url ?>/public/index.php" class="flex items-center">
                <img src="<?= $base_url ?>/assets/icons/logo.png" alt="Logo" class="h-16"> 
            </a>

            <div class="hidden md:flex items-center space-x-8">
                <?php foreach ($menuItems as $name => $link): ?>
                    <a href="<?= $base_url . $link ?>" 
                       class="text-gray-700 hover:text-blue-500 transition duration-300 text-lg font-semibold">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
            </div>

            <a href="<?= $base_url ?>/src/Views/registro.php" 
               class="px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                Regístrate
            </a>

            <button class="md:hidden block text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>
    </nav>
</header>

</body>
</html>
