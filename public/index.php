<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organización</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>
<body class="bg-white"> 

<!-- Hero Section -->
<header class="relative">
    <img alt="Group of people" class="w-full h-screen object-cover" src="../assets/images/main.jpeg"/>
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center text-center text-white">
        
        <div class="absolute top-0 left-0 p-4">
            <img alt="Logo" class="w-20 h-20" src="../assets/icons/logo.png"/>
        </div>
        
        <!-- HE4ADER -->
        <nav class="absolute top-0 right-0 p-4 flex space-x-4">
            <a class="text-white hover:text-gray-300" href="#">Inicio</a>
            <a class="text-white hover:text-gray-300" href="#">Noticias</a>
            <a class="text-white hover:text-gray-300" href="#">Eventos</a>
            <a class="text-white hover:text-gray-300" href="#">Contactos</a>
            <a class="text-white hover:text-gray-300" href="#">Sobre nosotros</a>
            <a class="text-white hover:text-gray-300" href="#">Reseña</a>
            <a class="text-white border border-white rounded-full px-4 py-2 hover:bg-white hover:text-black" href="#">Regístrate</a>
        </nav>
        
        <div class="mt-20">
            <h1 class="text-4xl md:text-6xl font-bold">SOMOS UNA ORGANIZACIÓN</h1>
            <h2 class="text-4xl md:text-6xl font-bold">SIN FINES DE LUCRO</h2>
            <p class="text-xl md:text-2xl mt-4">“Con amor, juntos por la inclusión”</p>
            <a class="mt-8 inline-block bg-transparent border border-white text-white rounded-full px-6 py-3 hover:bg-white hover:text-black" href="#">Acceso</a>
        </div>
    </div>
</header>

<!-- Sobre Nosotros -->
<section class="container mx-auto px-4 py-12">
    <div class="text-center">
        <h1 style="font-family: 'Montserrat', sans-serif; color: #4C5354; font-weight: bold; font-size: 50px;">
            Sobre Nosotros
        </h1>
        <p class="mt-4 text-gray-600">
            Somos una red de padres de personas con discapacidad, convencidos que a través de la unión y la organización podemos alcanzar mejores condiciones de vida para nuestros hijos y familiares.
        </p>
    </div>
    
    <div class="mt-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800">Nuestra Misión</h2>
                <p class="mt-4 text-gray-600">Ser una comunidad de servicio y apoyo mutuo entre padres, tutores y cuidadores de personas con discapacidad, promoviendo la inclusión, la difusión de información y la orientación a la sociedad.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-xl font-bold text-gray-800">Nuestra Visión</h2>
                <p class="mt-4 text-gray-600">Ser una red consolidada y reconocida en la región de Costa Chica en el ámbito de inclusión de Personas con Discapacidad para una vida digna e igualitaria.</p>
            </div>
        </div>
    </div>
</section>

<!-- Preguntas Frecuentes -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Preguntas Frecuentes</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="border-t border-gray-300">
                <div class="flex justify-between items-center py-4 border-b border-gray-300">
                    <span class="text-lg font-semibold text-gray-800">¿Qué es la red de padres?</span>
                    <i class="fas fa-plus text-gray-800"></i>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-300">
                    <span class="text-lg font-semibold text-gray-800">¿Quienes pueden integrarse?</span>
                    <i class="fas fa-plus text-gray-800"></i>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-300">
                    <span class="text-lg font-semibold text-gray-800">¿Dónde están ubicados?</span>
                    <i class="fas fa-plus text-gray-800"></i>
                </div>
                <div class="flex justify-between items-center py-4 border-b border-gray-300">
                    <span class="text-lg font-semibold text-gray-800">¿Qué beneficios obtengo?</span>
                    <i class="fas fa-plus text-gray-800"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galería -->
<section class="container mx-auto px-4 py-12">
    <h1 class="text-center text-4xl font-bold mb-8">NUESTRA GALERÍA</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mb-8">
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 1" class="w-full h-96 object-cover" src="../assets/images/galeria1.jpg"/>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 2" class="w-full h-96 object-cover" src="../assets/images/galeria2.jpg"/>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 3" class="w-full h-96 object-cover" src="../assets/images/galeria3.jpg"/>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 4" class="w-full h-96 object-cover" src="../assets/images/galeria4.jpg"/>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 5" class="w-full h-96 object-cover" src="../assets/images/galeria5.jpg"/>
        </div>
        <div class="rounded overflow-hidden shadow-lg">
            <img alt="Imagen 6" class="w-full h-96 object-cover" src="../assets/images/main.jpeg"/>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="container mx-auto px-4 py-20">
    <div class="bg-white p-12 rounded-lg shadow-lg max-w-7xl mx-auto border-4 border-gray-300" style="font-family: 'Montserrat', sans-serif; color: #4C5354; position: relative; z-index: 1; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);">
        <h2 class="text-center text-4xl font-bold mb-8">CONTACTO</h2>
        
        <form class="space-y-10">
            <div class="flex justify-center space-x-12">
                <input class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-1/3 text-lg" 
                       placeholder="Nombre" 
                       type="text" 
                       required 
                       style="background-color: #D9D9D9; color: #333;" />
                <input class="p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-1/3 text-lg" 
                       placeholder="Correo" 
                       type="email" 
                       required 
                       style="background-color: #D9D9D9; color: #333;" />
            </div>
            
            <div class="flex justify-center items-center space-x-12">
                <div class="relative">
 <img alt="Mascota" 
                         class="w-64 h-64 rounded-lg shadow-lg object-cover" 
                         src="../assets/images/dibujo.jpg" 
                         style="clip-path: inset(0 0 20% 0);"/> 
                </div>
                
                <textarea class="p-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-2/3 h-64 text-lg" 
                          placeholder="Sugerencias" 
                          style="background-color: #D9D9D9; color: #333;"></textarea>
            </div>
            
            <div class="text-center">
                <button class="bg-blue-500 text-white px-16 py-6 rounded-lg hover:bg-blue-600 transition duration-300 text-xl" type="submit">
                    Enviar
                </button>
            </div>
            
        </form>
    </div>
    
    <div class="absolute inset-0 rounded-lg border-4 border-transparent" style="background: linear-gradient(to right, rgba(76, 83, 84, 0.9), rgba(217, 217, 217, 0.9)); z-index: -1;"></div>
</section>

</body>
</html>
<?php include '../src/Views/footer.php'; ?>
