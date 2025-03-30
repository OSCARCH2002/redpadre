
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0E5BCC;
            --secondary-color: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(14, 91, 204, 0.2);
        }
        
        .step-card {
            transition: all 0.3s ease;
            border-left: 4px solid transparent;
        }
        
        .step-card:hover {
            transform: translateY(-3px);
            border-left-color: var(--primary-color);
            box-shadow: 0 10px 15px -3px rgba(14, 91, 204, 0.1);
        }
        
        .step-number {
            width: 30px;
            height: 30px;
            background-color: var(--primary-color);
        }
    </style>
</head>
<body class="antialiased">

<div class="flex flex-col min-h-screen">
    <!-- Header -->
    <header class="bg-[#101524] py-6 shadow-md">
        <div class="container mx-auto px-6">
            <a href="../../../public/index.php" class="flex items-center">
                <img src="../../../assets/icons/logo.png" alt="Logo Red Padres" class="h-16 transition-transform duration-300 hover:scale-105">
            </a>
        </div>
    </header>

    <main class="flex-grow flex items-center justify-center py-12 px-4">
        <div class="w-full max-w-4xl flex flex-col lg:flex-row gap-8">
            <!-- Pasos de Registro -->
            <div class="w-full lg:w-1/2 space-y-6">
                <div class="bg-white p-6 rounded-xl shadow-md login-container">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Proceso de Registro</h2>
                    
                    <!-- Paso 1 -->
                    <div class="step-card bg-gray-50 p-5 rounded-lg mb-4">
                        <div class="flex items-start">
                            <div class="step-number rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">1</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800 mb-2">Registro como Tutor</h3>
                                <p class="text-gray-600">Si no tienes una cuenta, primero debes registrarte como tutor o responsable del familiar con discapacidad.</p>
                                <a href="registro_tutor.php" class="inline-block mt-3 text-blue-600 hover:text-blue-800 font-medium">
                                    Ir al registro de tutor <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Paso 2 -->
                    <div class="step-card bg-gray-50 p-5 rounded-lg">
                        <div class="flex items-start">
                            <div class="step-number rounded-full flex items-center justify-center text-white font-bold mr-4 flex-shrink-0">2</div>
                            <div>
                                <h3 class="font-bold text-lg text-gray-800 mb-2">Registro de Persona con Discapacidad</h3>
                                <p class="text-gray-600">Una vez registrado como tutor, podrás agregar a la(s) persona(s) con discapacidad a tu cargo desde tu sesión.</p>
                                <p class="text-sm text-gray-500 mt-2"><i class="fas fa-info-circle mr-1"></i> Este paso se realiza dentro de tu cuenta, después de iniciar sesión.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
                    <h3 class="font-bold text-lg text-blue-800 mb-3 flex items-center">
                        <i class="fas fa-question-circle mr-2"></i> ¿Necesitas ayuda?
                    </h3>
                    <p class="text-blue-700 mb-3">Si tienes problemas con el registro o el acceso, contáctanos:</p>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i class="fas fa-envelope text-blue-600 mr-2"></i>
                            <span>redpadres@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Formulario de Login -->
            <div class="w-full lg:w-1/2">
                <div class="bg-white p-8 rounded-xl shadow-md login-container">
                    <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Ingresa a tu cuenta</h2>

                    <form action="procesar_login.php" method="POST" class="space-y-6">
                        <div>
                            <label for="curp" class="block text-gray-700 font-medium mb-2">CURP</label>
                            <div class="relative">
                                <input type="text" id="curp" name="curp" placeholder="Ingresa tu CURP" 
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                    required>
                                <a href="https://www.gob.mx/curp/" target="_blank" class="absolute right-3 top-3 text-blue-600 hover:text-blue-800" title="Consultar CURP">
                                    <i class="fas fa-info-circle"></i>
                                </a>
                            </div>
                            <p class="text-sm text-gray-500 mt-1">La CURP es tu identificación única en el sistema</p>
                        </div>

                        <div>
                            <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" 
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" 
                                    required>
                                <button type="button" class="absolute right-3 top-3 text-gray-500 hover:text-blue-600" onclick="togglePassword()">
                                    <i class="far fa-eye" id="eye-icon"></i>
                                </button>
                            </div>
                            <a href="#" class="text-sm text-blue-600 hover:text-blue-800 block mt-1">¿Olvidaste tu contraseña?</a>
                        </div>

                        <button type="submit" 
                                class="w-full bg-[#0E5BCC] hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition-all duration-300 shadow-md hover:shadow-lg">
                            Ingresar
                        </button>
                    </form>

                    <div class="border-t border-gray-200 mt-8 pt-6 text-center">
                        <p class="text-gray-600">¿Aún no te has integrado al padrón?</p>
                        <a href="registro_tutor.php" 
                           class="inline-block mt-4 border-2 border-[#0E5BCC] text-[#0E5BCC] font-bold py-2 px-6 rounded-lg hover:bg-[#0E5BCC] hover:text-white transition-all duration-300">
                            Registrarme como tutor
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Mostrar/ocultar contraseña
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.remove('fa-eye');
            eyeIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('fa-eye-slash');
            eyeIcon.classList.add('fa-eye');
        }
    }
</script>

<?php include '../partials/footer.php'; ?>
</body>
</html>