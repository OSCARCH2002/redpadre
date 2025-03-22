<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- hero -->
<section class="relative bg-cover bg-center h-96" style="background-image: url('../../assets/images/galeria3.jpg');">
    <div class="bg-black bg-opacity-50 w-full h-full flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-5xl font-bold text-red-500">NOTICIAS</h1>
        <p class="mt-4 max-w-2xl">
            Un espacio donde las noticias sobre discapacidad, inclusión y superación se encuentran, 
            creando conciencia y promoviendo el cambio social en cada paso.
        </p>
    </div>
</section>

<!-- Cards de noticias -->
<section class="py-16 bg-gray-200">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia1.jpg" alt="Discapacidad" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">Hablemos de discapacidad</h3>
                    <p class="text-gray-600 mt-2">
                        “Cualquier restricción o impedimento de la capacidad de realizar una actividad en la forma o dentro del margen que se considera normal.”
                    </p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

        
            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia2.jpg" alt="Tipos de Discapacidad" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">Tipos de Discapacidad</h3>
                    <p class="text-gray-600 mt-2">
                        Sensorial Visual, Auditiva, Motriz, Intelectual, Mental o Psicosocial.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia3.jpg" alt="Grados de discapacidad" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">¿Sabes qué ocasiona la discapacidad?</h3>
                    <p class="text-gray-600 mt-2">
                        La INEGI clasifica las causas en cuatro grupos principales: 
                        nacimiento, enfermedad, accidente y edad avanzada.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia4.jpg" alt="Apoyos discapacidad" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">¿Qué tipo de apoyos requiere una persona con discapacidad?</h3>
                    <ul class="list-disc list-inside text-gray-600 mt-2">
                        <li>Legislativo.</li>
                        <li>Lenguaje Incluyente.</li>
                        <li>Rehabilitación.</li>
                        <li>Ayudas técnicas.</li>
                    </ul>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia5.jpg" alt="Inclusión laboral" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">Venustiano Carranza impulsa la inclusión laboral para personas con discapacidad</h3>
                    <p class="text-gray-600 mt-2">
                        Más de 40 empresas del sector público y privado participaron en la feria.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                <img src="/assets/images/noticia6.jpg" alt="Reforma accesibilidad" class="w-full h-52 object-cover">
                <div class="p-6">
                    <h3 class="text-lg font-bold">Aprueban en San Lázaro reforma para estacionamientos accesibles</h3>
                    <p class="text-gray-600 mt-2">
                        El pleno de la Cámara de Diputados aprobó, por 430 votos a favor, reformar la Ley General de Movilidad y Seguridad Vial.
                    </p>
                    <div class="mt-4">
                        <a href="#" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                            Leer Noticia completa
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

</body>
</html>

<?php include './partials/footer.php'; ?>
