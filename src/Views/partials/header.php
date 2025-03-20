<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Site Title</title>
    <!-- Include Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Or if you've installed Tailwind locally -->
    <!-- <link rel="stylesheet" href="/path/to/your/tailwind.css"> -->
</head>
<body>
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-3 flex items-center justify-between">
            <!-- Logo section -->
            <div class="flex items-center">
                <a href="/" class="flex items-center">
                    <img src="../../../assets/icons/logo.png" alt="Logo" class="h-16 w-16">
                </a>
            </div>
            
            <!-- Navigation links -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-800 hover:text-blue-700 font-medium">Inicio</a>
                <a href="../Contactos.php" class="text-gray-800 hover:text-blue-700 font-medium">Noticias</a>
                <a href="../Eventos" class="text-gray-800 hover:text-blue-700 font-medium">Eventos</a>
                <a href="../Contactos" class="text-gray-800 hover:text-blue-700 font-medium">Contactos</a>
                <a href="../SobreNosotros" class="text-gray-800 hover:text-blue-700 font-medium">Sobre nosotros</a>
                <a href="../Reseña.php" class="text-gray-800 hover:text-blue-700 font-medium">Reseña</a>
            </div>
            
            <!-- Register button -->
            <div class="flex items-center">
                <a href="/registro" class="bg-white text-blue-700 border border-blue-700 rounded-full px-6 py-2 hover:bg-blue-700 hover:text-white transition duration-300">
                    Registrate
                </a>
            </div>
            
            <!-- Mobile menu button (optional) -->
            <div class="md:hidden flex items-center">
                <button class="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
        
        <!-- Mobile menu (optional, hidden by default) -->
        <div class="mobile-menu hidden md:hidden">
            <a href="/" class="block py-2 px-4 text-sm hover:bg-gray-200">Inicio</a>
            <a href="/noticias" class="block py-2 px-4 text-sm hover:bg-gray-200">Noticias</a>
            <a href="/eventos" class="block py-2 px-4 text-sm hover:bg-gray-200">Eventos</a>
            <a href="/contactos" class="block py-2 px-4 text-sm hover:bg-gray-200">Contactos</a>
            <a href="/sobre-nosotros" class="block py-2 px-4 text-sm hover:bg-gray-200">Sobre nosotros</a>
            <a href="/resena" class="block py-2 px-4 text-sm hover:bg-gray-200">Reseña</a>
            <a href="/registro" class="block py-2 px-4 text-sm text-blue-700 font-bold hover:bg-gray-200">Registrate</a>
        </div>
    </header>
    <!-- Your page content will start here -->