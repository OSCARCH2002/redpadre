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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Red Padre</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilo para el menú móvil */
        .menu-mobile {
            transition: transform 0.3s ease-out;
            transform: translateX(100%); /* Comienza fuera de la pantalla a la derecha */
        }
        .menu-mobile.open {
            transform: translateX(0); /* Se desliza hacia la izquierda */
        }
        /* Fondo oscuro cuando el menú está abierto */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 40;
        }
        .overlay.show {
            display: block;
        }
    </style>
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

            <button id="menu-toggle" class="md:hidden block text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </button>
        </div>

        <!-- Menú móvil -->
        <div id="overlay" class="overlay"></div>
        <div id="mobile-menu" class="menu-mobile fixed top-0 right-0 w-4/5 h-full bg-white shadow-lg rounded-l-lg z-50">
            <div class="flex justify-between items-center p-4 border-b">
                <h2 class="text-lg font-semibold">Menú</h2>
                <button id="close-menu" class="text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class=" flex flex-col space-y-2 p-4">
                <?php foreach ($menuItems as $name => $link): ?>
                    <a href="<?= $base_url . $link ?>" 
                       class="text-gray-700 hover:text-blue-500 transition duration-300 text-lg font-semibold">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="p-4">
                <a id="register-button" href="<?= $base_url ?>/src/Views/auth/login.php" 
                   class="w-full px-6 py-2 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-600 transition duration-300">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
</header>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const overlay = document.getElementById('overlay');
    const registerButton = document.getElementById('register-button');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        overlay.classList.toggle('show');
    });

    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('show');
    });

    overlay.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('show');
    });

    registerButton.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('show');
    });
</script>

</body>
</html>