<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Sobre Nosotros - Red Padres</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

<section class="min-h-screen bg-gray-100 flex items-center justify-center px-8 md:px-16 lg:px-24 py-12">

    <div class="grid md:grid-cols-2 gap-12 max-w-6xl items-center">

        <div class="relative group">
            <div class="overflow-hidden rounded-3xl shadow-lg transition-transform duration-500 group-hover:scale-105">
                <img src="../../assets/images/galeria3.jpg" alt="Red de Padres"
                    class="w-full h-[400px] object-cover group-hover:rotate-3 group-hover:scale-110 transition-transform duration-500">
            </div>
            <div class="absolute inset-0 bg-blue-900 opacity-30 group-hover:opacity-0 transition-opacity duration-500 rounded-3xl"></div>
        </div>

        <div>
            <h1 class="text-5xl font-extrabold text-blue-900 mb-6 leading-tight">
                Sobre <span class="text-blue-600">Nosotros</span>
            </h1>
            
            <p class="text-lg text-gray-700 leading-relaxed mb-6">
                Somos una <span class="font-bold text-blue-600">red de padres de personas con discapacidad</span>, convencidos de que a través de la <span class="text-blue-900 font-semibold">unión</span> y la <span class="text-blue-900 font-semibold">organización</span> podemos alcanzar mejores condiciones de vida para nuestros hijos y familiares.
            </p>

            <a href="./Contactos.php" class="inline-block bg-blue-600 text-white font-bold py-3 px-8 rounded-full shadow-md hover:bg-blue-700 transition-all duration-300">
                Contáctanos
            </a>
        </div>
    </div>
</section>


</body>
</html>

<?php include './partials/footer.php'; ?>
