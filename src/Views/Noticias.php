<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">

    <link rel="stylesheet" href="../../assets/css/style.css">
    <title>Noticias - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Hero -->
<section class="relative bg-cover bg-center h-96" style="background-image: url('../../assets/images/galeria3.jpg');">
    <div class="bg-black bg-opacity-50 w-full h-full flex flex-col justify-center items-center text-center text-white">
        <h1 class="text-5xl font-bold text-red-500">NOTICIAS</h1>
        <p class="mt-4 max-w-2xl">
            Un espacio donde las noticias sobre discapacidad, inclusión y superación se encuentran, 
            creando conciencia y promoviendo el cambio social en cada paso.
        </p>
    </div>
</section>

<!-- Sección de noticias -->
<section class="py-16 bg-gray-200">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">

            <?php
            $noticias = [
                ['img' => 'noticia1.jpg', 'titulo' => 'Hablemos de discapacidad', 'desc' => '“Cualquier restricción o impedimento de la capacidad de realizar una actividad en la forma o dentro del margen que se considera normal.”', 'link' => 'https://www.gob.mx/salud/articulos/que-es-la-discapacidad'],
                ['img' => 'noticia2.jpg', 'titulo' => 'Tipos de Discapacidad', 'desc' => 'Sensorial Visual, Auditiva, Motriz, Intelectual, Mental o Psicosocial.', 'link' => 'https://www.un.org/esa/socdev/enable/spanish/disabled.html'],
                ['img' => 'noticia3.jpg', 'titulo' => '¿Sabes qué ocasiona la discapacidad?', 'desc' => 'La INEGI clasifica las causas en cuatro grupos principales: nacimiento, enfermedad, accidente y edad avanzada.', 'link' => 'https://www.inegi.org.mx/temas/discapacidad/'],
                ['img' => 'noticia4.jpg', 'titulo' => 'Apoyos para personas con discapacidad', 'desc' => 'Legislativo, lenguaje incluyente, rehabilitación y ayudas técnicas.', 'link' => 'https://www.conadis.gob.mx'],
                ['img' => 'noticia5.jpg', 'titulo' => 'Inclusión laboral en Venustiano Carranza', 'desc' => 'Más de 40 empresas del sector público y privado participaron en la feria.', 'link' => 'https://www.incluyeme.com'],
                ['img' => 'noticia6.jpg', 'titulo' => 'Reforma de estacionamientos accesibles', 'desc' => 'Cámara de Diputados aprobó la reforma de la Ley General de Movilidad y Seguridad Vial.', 'link' => 'https://www.diputados.gob.mx']
            ];

            foreach ($noticias as $noticia): ?>
                <div class="bg-white rounded-lg shadow-lg overflow-hidden transform transition hover:scale-105">
                    <img src="/assets/images/<?= $noticia['img'] ?>" alt="<?= $noticia['titulo'] ?>" class="w-full h-52 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold"><?= $noticia['titulo'] ?></h3>
                        <p class="text-gray-600 mt-2"><?= $noticia['desc'] ?></p>
                        <div class="mt-4">
                            <a href="<?= $noticia['link'] ?>" target="_blank" rel="noopener noreferrer" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition">
                                Leer Noticia completa
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- Sección de Videos -->
<section class="py-20 bg-gray-200">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">Videos</h2>
        
        <div class="flex overflow-x-auto space-x-6 pb-4">
            <div class="min-w-[300px] md:min-w-[400px] lg:min-w-[500px]">
                <iframe width="100%" height="250" 
                        src="https://www.youtube.com/embed/JOb5P1wOuwk" 
                        title="Video 1" frameborder="0" allowfullscreen 
                        class="rounded-lg shadow-md">
                </iframe>
            </div>
            <div class="min-w-[300px] md:min-w-[400px] lg:min-w-[500px]">
                <iframe width="100%" height="250" 
                        src="https://www.youtube.com/embed/KNP6I-TrwvI" 
                        title="Video 2" frameborder="0" allowfullscreen 
                        class="rounded-lg shadow-md">
                </iframe>
            </div>
            <div class="min-w-[300px] md:min-w-[400px] lg:min-w-[500px]">
                <iframe width="100%" height="250" 
                        src="https://www.youtube.com/embed/iNw3Pi4MpHA" 
                        title="Video 3" frameborder="0" allowfullscreen 
                        class="rounded-lg shadow-md">
                </iframe>
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php include './partials/footer.php'; ?>