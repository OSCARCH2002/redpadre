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

$recursosItems = [
    "Días festivos" => "/src/Views/DiasFestivos.php",
    "Guías prácticas" => "/src/Views/GuiasPracticas.php",
    "Documentos" => "/src/Views/Documentos.php",
    "Videos tutoriales" => "/src/Views/Videos.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Red Padre</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0E5BCC;
            --secondary-color: #ffffff;
            --bg-color: #101524;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
      
        .navbar {
            background: rgba(16, 21, 36, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        @media (max-width: 1023px) {
            .navbar {
                background: var(--bg-color);
                backdrop-filter: none;
            }
        }
        
        .nav-link {
            position: relative;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: var(--primary-color);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
      
        .dropdown {
            position: relative;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 220px;
            background: rgba(16, 21, 36, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 8px 0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            z-index: 50;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
            animation: fadeIn 0.3s ease-out;
        }
        
        .dropdown-item {
            display: block;
            padding: 10px 20px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .dropdown-item:hover {
            background: rgba(14, 91, 204, 0.2);
            padding-left: 25px;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        

        .menu-mobile {
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transform: translateX(100%);
            background: var(--bg-color);
            backdrop-filter: none;
        }
        
        .menu-mobile.open {
            transform: translateX(0);
        }
        
        .mobile-link {
            transition: all 0.3s ease;
            border-left: 3px solid transparent;
        }
        
        .mobile-link:hover {
            border-left-color: var(--primary-color);
            background: rgba(14, 91, 204, 0.1);
        }
 
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 40;
        }
        
        .overlay.show {
            display: block;
        }
        
        .hamburger {
            transition: all 0.3s ease;
        }
        
        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: white;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }
        
        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(5px, -5px);
        }
        
  
        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .mobile-submenu.show {
            max-height: 500px;
        }
        
        .submenu-toggle {
            transition: transform 0.3s ease;
        }
        
        .submenu-toggle.rotate {
            transform: rotate(180deg);
        }
        
   
        @media (min-width: 768px) and (max-width: 1023px) {
            .navbar .container {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            
            .nav-link, .dropdown > button {
                font-size: 0.95rem;
                padding: 0.5rem 0.75rem;
            }
            
            .dropdown-content {
                min-width: 200px;
            }
            
            #menu-toggle {
                margin-left: 0.5rem;
            }
            
         
            .navbar .flex img {
                height: 3.5rem;
            }
            
         
            .menu-mobile {
                width: 22rem;
            }
        }
    </style>
</head>
<body class="antialiased">

<header class="fixed w-full z-50">
    <nav class="navbar">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <a href="<?= $base_url ?>/public/index.php" class="flex items-center">
                <img src="<?= $base_url ?>/assets/icons/logo.png" alt="Logo" class="h-16 md:h-14 transition-transform duration-300 hover:scale-105"> 
            </a>

            <div class="hidden lg:flex items-center space-x-4 xl:space-x-6">
                <?php foreach ($menuItems as $name => $link): ?>
                    <a href="<?= $base_url . $link ?>" 
                       class="nav-link text-white text-base xl:text-lg font-medium hover:text-blue-300 transition-colors duration-300">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
                
                <div class="dropdown">
                    <button class="nav-link text-white text-base xl:text-lg font-medium hover:text-blue-300 transition-colors duration-300 flex items-center">
                        Recursos
                        <i class="fas fa-chevron-down ml-1 text-xs mt-1"></i>
                    </button>
                    <div class="dropdown-content">
                        <?php foreach ($recursosItems as $name => $link): ?>
                            <a href="<?= $base_url . $link ?>" class="dropdown-item">
                                <i class="fas <?= 
                                    $name == 'Días festivos' ? 'fa-calendar-day' : 
                                    ($name == 'Guías prácticas' ? 'fa-book' : 
                                    ($name == 'Documentos' ? 'fa-file-pdf' : 'fa-video'))
                                ?> mr-2"></i> 
                                <?= $name ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <a href="<?= $base_url ?>/src/Views/auth/login.php" 
                   class="bg-transparent border-2 border-white text-white rounded-full px-4 xl:px-6 py-1.5 text-base xl:text-lg font-medium hover:bg-white hover:text-black transition-all duration-300 whitespace-nowrap">
                    Regístrate
                </a>
            </div>

         
            <button id="menu-toggle" class="lg:hidden block focus:outline-none hamburger ml-2">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>


        <div id="overlay" class="overlay"></div>
        
 
        <div id="mobile-menu" class="menu-mobile fixed top-0 right-0 w-80 md:w-96 h-full shadow-lg z-50">
            <div class="flex justify-between items-center p-4 md:p-6 border-b border-gray-700">
                <img src="<?= $base_url ?>/assets/icons/logo.png" alt="Logo" class="h-10 md:h-12">
                <button id="close-menu" class="text-white focus:outline-none">
                    <i class="fas fa-times text-xl md:text-2xl"></i>
                </button>
            </div>
            
            <div class="flex flex-col space-y-1 p-2 md:p-4">
                <?php foreach ($menuItems as $name => $link): ?>
                    <a href="<?= $base_url . $link ?>" 
                       class="mobile-link text-white px-4 py-3 rounded-lg text-base md:text-lg font-medium">
                        <?= $name ?>
                    </a>
                <?php endforeach; ?>
                
       
                <div class="mobile-link text-white px-4 py-3 rounded-lg text-base md:text-lg font-medium">
                    <div class="flex justify-between items-center" onclick="toggleSubmenu('recursos-submenu', 'recursos-arrow')">
                        <span>Recursos</span>
                        <i id="recursos-arrow" class="fas fa-chevron-down submenu-toggle text-sm"></i>
                    </div>
                    <div id="recursos-submenu" class="mobile-submenu pl-6">
                        <?php foreach ($recursosItems as $name => $link): ?>
                            <a href="<?= $base_url . $link ?>" class="block py-2 text-gray-300 hover:text-white text-sm md:text-base">
                                <i class="fas <?= 
                                    $name == 'Días festivos' ? 'fa-calendar-day' : 
                                    ($name == 'Guías prácticas' ? 'fa-book' : 
                                    ($name == 'Documentos' ? 'fa-file-pdf' : 'fa-video'))
                                ?> mr-2"></i> 
                                <?= $name ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            
            <div class="p-4 md:p-6 border-t border-gray-700 mt-4">
                <a href="<?= $base_url ?>/src/Views/auth/login.php" 
                   class="block text-center bg-[#0E5BCC] hover:bg-blue-700 text-white font-medium py-2 md:py-3 px-4 md:px-6 rounded-lg transition-all duration-300 text-base md:text-lg">
                    Regístrate
                </a>
            </div>
        </div>
    </nav>
</header>


<div class="h-16 md:h-20"></div>

<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const closeMenu = document.getElementById('close-menu');
    const overlay = document.getElementById('overlay');
    const hamburger = document.querySelector('.hamburger');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('open');
        overlay.classList.toggle('show');
        hamburger.classList.toggle('active');
    });

    
    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('show');
        hamburger.classList.remove('active');
    });

    overlay.addEventListener('click', () => {
        mobileMenu.classList.remove('open');
        overlay.classList.remove('show');
        hamburger.classList.remove('active');
    });

  
    document.querySelectorAll('#mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
            overlay.classList.remove('show');
            hamburger.classList.remove('active');
        });
    });


    function toggleSubmenu(submenuId, arrowId) {
        const submenu = document.getElementById(submenuId);
        const arrow = document.getElementById(arrowId);
        
        submenu.classList.toggle('show');
        arrow.classList.toggle('rotate');
    }
</script>

</body>
</html>