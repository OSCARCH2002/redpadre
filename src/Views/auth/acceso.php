<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            background-color: #101524;
            font-family: 'Montserrat', sans-serif;
        }
        .login-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .input-field {
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        .input-field:focus {
            border-color: #1A5CE0;
            box-shadow: 0 0 0 3px rgba(26, 92, 224, 0.3);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-md">
   
        <div class="login-card rounded-2xl p-8 shadow-2xl">
       
            <div class="text-center mb-8">
                <img src="../../../assets/icons/logo.png" alt="Logo" class="w-20 h-20 mx-auto">
                <h1 class="text-2xl font-bold text-white mt-4">ACCESO AL SISTEMA</h1>
                <p class="text-gray-400 mt-2">Ingresa tus credenciales</p>
            </div>

            <form class="space-y-6" action="../src/Controllers/authController.php" method="POST">
           
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo electrónico</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-envelope text-gray-500"></i>
                        </div>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required
                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="ingresa tu correo">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-1">Contraseña</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <i class="fas fa-lock text-gray-500"></i>
                        </div>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="input-field w-full pl-10 pr-4 py-3 rounded-lg text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500"
                            placeholder="••••••••">
                        <button type="button" class="absolute right-3 top-3 text-gray-500 hover:text-gray-300" onclick="togglePassword()">
                            <i class="fas fa-eye-slash" id="eye-icon"></i>
                        </button>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-600 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-300">Recordar sesión</label>
                    </div>
                    
                </div>

                <div>
                    <button type="submit" class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-[#1A5CE0] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition duration-300">
                        <i class="fas fa-sign-in-alt mr-2"></i> INGRESAR
                    </button>
                </div>
            </form>

            <div class="mt-6 text-center">
                <p class="text-sm text-gray-400">
                    Este sistema es solo para personal autorizado. 
                    <br>Si necesitas acceso, contacta al administrador.
                </p>
            </div>
        </div>

        <div class="mt-8 text-center">
            <p class="text-xs text-gray-600">
                &copy; <?php echo date("Y"); ?> Organización red de padres.
            </p>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');
            
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye-slash');
                eyeIcon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            }
        }

        
        document.querySelector('form').addEventListener('submit', function(e) {
            const email = document.getElementById('email').value;
            if (!email.includes('@') || !email.includes('.')) {
                e.preventDefault();
                alert('Por favor ingresa un correo electrónico válido');
            }
        });
    </script>
</body>
</html>