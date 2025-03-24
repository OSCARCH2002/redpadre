<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-300">

<!-- Header -->
<header class="bg-blue-900 py-6">
    <div class="max-w-7xl mx-auto flex items-center">
        <a href="../../../public/index.php" class="flex items-center">
            <img src="../../../assets/icons/logo.png" alt="Logo Red Padres" class="h-20 ml-4 hover:opacity-80 transition">
        </a>
    </div>
</header>


<div class="flex justify-center items-center min-h-screen bg-gray-300">
    <div class="bg-white p-10 rounded-2xl shadow-2xl w-full max-w-md border-2 border-blue-900"> 

        <h2 class="text-center text-2xl font-bold text-black mb-6">Ingresa a tu cuenta</h2>

        <form action="procesar_login.php" method="POST" class="space-y-6">
            
            <!-- CURP -->
            <div>
                <label for="curp" class="block text-black font-bold">CURP</label>
                <input type="text" id="curp" name="curp" placeholder="Escribe tu CURP" 
                    class="w-full p-3 border border-gray-300 rounded-xl text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
                <a href="https://www.gob.mx/curp/" class="text-sm text-gray-500 hover:text-blue-600 block mt-1">¿Cuál es mi CURP?</a>
            </div>

      
            <div>
                <label for="password" class="block text-black font-bold">Contraseña</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" 
                    class="w-full p-3 border border-gray-300 rounded-xl text-gray-600 focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required>
                <a href="#" class="text-sm text-gray-500 hover:text-blue-600 block mt-1">Olvidé mi contraseña</a>
            </div>


            <button type="submit" class="w-full bg-blue-900 text-white py-3 rounded-xl text-lg font-bold hover:bg-blue-700 transition">
                Ingresar
            </button>
        </form>

        <p class="text-center text-gray-600 mt-6">¿Aún no te has integrado al padrón?</p>
        

        <a href="registro_tutor.php" 
            class="block w-full text-center border-2 border-blue-900 text-blue-900 py-3 rounded-xl font-bold mt-3 hover:bg-blue-900 hover:text-white transition">
            Registrarme como tutor
        </a>

    </div>
</div>

</body>
</html>

<?php include '../partials/footer.php'; ?>
