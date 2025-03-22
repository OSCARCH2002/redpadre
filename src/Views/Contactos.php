<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
<section class="bg-blue-900 text-white py-10">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div class="bg-white text-gray-800 rounded-lg shadow-lg p-8 flex flex-col items-center">
                <div class="text-5xl mb-4">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="text-xl font-bold">Ubicación</h3>
                <p class="text-center mt-2">San Marcos, Gro. México</p>
            </div>
            <div class="bg-white text-gray-800 rounded-lg shadow-lg p-8 flex flex-col items-center">
                <div class="text-5xl mb-4">
                    <i class="fas fa-envelope"></i>
                </div>
                <h3 class="text-xl font-bold">Correo</h3>
                <p class="text-center mt-2">red_padres@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<section class="bg-gray-200 py-14">
    <div class="max-w-7xl mx-auto px-6 md:px-12 lg:px-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            
            <div>
                <form action="#" method="POST" class="bg-white rounded-lg shadow-lg p-8">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="nombre" class="block text-gray-700 font-bold">Nombre</label>
                            <input type="text" id="nombre" placeholder="Escribe su nombre" class="mt-1 w-full border-b-2 border-blue-900 focus:outline-none focus:border-blue-700 transition">
                        </div>
                        
                        <div>
                            <label for="correo" class="block text-gray-700 font-bold">Correo</label>
                            <input type="email" id="correo" placeholder="Escribe su correo" class="mt-1 w-full border-b-2 border-blue-900 focus:outline-none focus:border-blue-700 transition">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label for="mensaje" class="block text-gray-700 font-bold">Mensaje</label>
                        <textarea id="mensaje" placeholder="Escribe su mensaje" rows="4" class="mt-1 w-full border-b-2 border-blue-900 focus:outline-none focus:border-blue-700 transition"></textarea>
                    </div>

                    <div class="mt-6 text-center">
                        <button type="submit" class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-3 px-10 rounded-lg transition">
                            Enviar
                        </button>
                    </div>
                </form>
            </div>

            <div class="flex flex-col justify-center">
                <h3 class="text-2xl font-bold text-blue-900">Ponerse en contacto con nosotros</h3>
                <p class="text-gray-600 mt-4">
                    Cualquier duda o aclaración, no dudes en ponerte en contacto con nosotros, a través de nuestras redes o por este medio enviando su mensaje.
                </p>
                
                <div class="flex mt-6 space-x-4">
                    <a href="#" class="text-blue-900 hover:text-blue-700 text-3xl">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-blue-900 hover:text-blue-700 text-3xl">
                        <i class="fas fa-envelope"></i>
                    </a>
                    <a href="#" class="text-blue-900 hover:text-blue-700 text-3xl">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
<?php include './partials/footer.php'; ?>