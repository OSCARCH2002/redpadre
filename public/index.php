<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organización</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
    </style>
</head>
<body class="bg-white"> 

<!-- Hero Section -->
<header class="relative">
    <img alt="Group of people" class="w-full h-screen object-cover" src="../assets/images/main.jpeg"/>
    
    <div class="absolute inset-0 bg-black bg-opacity-50 flex flex-col justify-between text-white">
        <!-- Menú -->
        <div class="flex items-center justify-between px-16 py-6">
            <img alt="Logo" class="w-24 h-24" src="../assets/icons/logo.png"/>
            <nav class="flex space-x-12">
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="">Inicio</a>
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="../src/Views/Noticias.php">Noticias</a>
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="../src/Views/Eventos.php">Eventos</a>
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="../src/Views/Contactos.php">Contactos</a>
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="../src/Views/SobreNosotros.php">Sobre nosotros</a>
                <a class="text-white text-lg hover:text-gray-300 transition duration-300" href="../src/Views/Reseña.php">Reseña</a>
                <a class="border-2 border-white rounded-full px-6 py-2 text-lg hover:bg-white hover:text-black transition duration-300" href="../src/Views/auth/login.php">Regístrate</a>
            </nav>
        </div>

        <div class="text-center fade-in">
            <h1 class="text-5xl md:text-5xl font-extrabold leading-tight">SOMOS UNA ORGANIZACIÓN</h1>
            <h2 class="text-5xl md:text-5xl font-extrabold">SIN FINES DE LUCRO</h2>
            <p class="text-2xl md:text-3xl mt-6 italic">“Con amor, juntos por la inclusión”</p>
        </div>

        <!-- Botón de acceso -->
        <div class="flex justify-center mb-12">
            <a class="bg-transparent border-2 border-white text-white rounded-full px-10 py-4 text-xl hover:bg-white hover:text-black transition duration-300" href="#">Acceso</a>
        </div>
    </div>
</header>

<!-- Sobre Nosotros -->
<section class="container mx-auto px-4 py-12">
    <div class="text-center fade-in">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Sobre Nosotros</h1>
        <p class="mt-4 text-gray-600">
            Somos una red de padres de personas con discapacidad, convencidos de que a través de la unión y la organización podemos alcanzar mejores condiciones de vida para nuestros hijos y familiares.
        </p>
    </div>

    <div class="relative mt-12 bg-[#1A5CE0] rounded-3xl py-40 px-8 shadow-lg">
        <div class="absolute left-1/2 transform -translate-x-1/2 bottom-[-60px] w-11/12 md:w-3/4 lg:w-2/3 flex flex-col md:flex-row gap-8"> 
            <!--  Misión -->
            <div class="bg-white rounded-2xl shadow-xl p-10 flex-1 scale-up"> 
                <h2 class="text-xl font-bold text-gray-800">Nuestra Misión</h2>
                <p class="mt-4 text-gray-600">
                    Ser una comunidad de servicio y apoyo mutuo entre padres, tutores y cuidadores de personas con discapacidad, promoviendo la inclusión, la difusión de información y la orientación a la sociedad.
                </p>
            </div>

            <!--  Visión -->
            <div class="bg-white rounded-2xl shadow-xl p-10 flex-1 scale-up"> 
                <h2 class="text-xl font-bold text-gray-800">Nuestra Visión</h2>
                <p class="mt-4 text-gray-600">
                    Ser una red consolidada y reconocida en la región de Costa Chica en el ámbito de inclusión de Personas con Discapacidad para una vida digna e igualitaria.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Preguntas Frecuentes -->
<section class="bg-white py-12">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">Preguntas Frecuentes</h1>
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col">
                <div class="py-5 cursor-pointer bg-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition" onclick="toggleAnswer('answer1')">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">¿Qué es la red de padres?</span>
                        <i class="fas fa-plus text-gray-800" id="icon1"></i>
                    </div>
                    <div id="answer1" class="hidden px-4 pb-4 text-gray-600">
                        La red de padres es una comunidad que busca apoyar a familias de personas con discapacidad.
                    </div>
                </div>

                <div class="py-5 cursor-pointer bg-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition mt-4" onclick="toggleAnswer('answer2')">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">¿Quiénes pueden integrarse?</span>
                        <i class="fas fa-plus text-gray-800" id="icon2"></i>
                    </div>
                    <div id="answer2" class="hidden px-4 pb-4 text-gray-600">
                        Pueden integrarse todos los padres, tutores y cuidadores de personas con discapacidad.
                    </div>
                </div>

                <div class="py-5 cursor-pointer bg-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition mt-4" onclick="toggleAnswer('answer3')">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">¿Dónde están ubicados?</span>
                        <i class="fas fa-plus text-gray-800" id="icon3"></i>
                    </div>
                    <div id="answer3" class="hidden px-4 pb-4 text-gray-600">
                        Estamos ubicados en la región de Costa Chica, pero contamos con redes en otras áreas.
                    </div>
                </div>

                <div class="py-5 cursor-pointer bg-gray-100 rounded-xl p-6 shadow-md hover:shadow-lg transition mt-4" onclick="toggleAnswer('answer4')">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-semibold text-gray-800">¿Qué beneficios obtengo?</span>
                        <i class="fas fa-plus text-gray-800" id="icon4"></i>
                    </div>
                    <div id="answer4" class="hidden px-4 pb-4 text-gray-600">
                        Obtienes apoyo, información y acceso a recursos para mejorar la calidad de vida de tu familiar.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function toggleAnswer(id) {
    const answer = document.getElementById(id);
    answer.classList.toggle('hidden');
}
</script>

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
    <div class="bg-white p-12 rounded-lg shadow-lg max-w-7xl mx-auto border-4 border-gray-300" style="position: relative; z-index: 1;">
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

<?php include '../src/Views/partials/footer.php'; ?>

</body>
</html>