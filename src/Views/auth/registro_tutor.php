<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Registro</title>
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
            background-color: #f8fafc;
        }
        
        .form-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .form-input {
            transition: all 0.3s ease;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .form-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 1px 0 0 var(--primary-color);
        }
        
        .form-input::placeholder {
            color: #94a3b8;
        }
        
        .submit-btn {
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -60%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                to right,
                rgba(255, 255, 255, 0) 0%,
                rgba(255, 255, 255, 0.1) 50%,
                rgba(255, 255, 255, 0) 100%
            );
            transform: rotate(30deg);
            transition: all 0.3s;
        }
        
        .submit-btn:hover::after {
            left: 100%;
        }
        
        .password-toggle {
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body class="antialiased bg-gray-50">

<header class="bg-[#101524] py-6 shadow-md">
        <div class="container mx-auto px-6">
            <a href="../../../public/index.php" class="flex items-center">
                <img src="../../../assets/icons/logo.png" alt="Logo Red Padres" class="h-16 transition-transform duration-300 hover:scale-105">
            </a>
        </div>
    </header>
<!-- Formulario de Registro -->
<section class="py-16 px-4">
    <div class="max-w-2xl mx-auto">
        <div class="form-container rounded-xl shadow-2xl overflow-hidden">
            <div class="p-8 sm:p-10">
                <form id="registroForm" class="space-y-6">
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">
                            <i class="fas fa-user-circle text-blue-600 mr-2"></i>
                            Información Personal
                        </h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="curp" class="block text-gray-700 font-medium mb-2">CURP *</label>
                                <input type="text" id="curp" name="curp" 
                                       class="form-input w-full px-3 py-3 focus:outline-none" 
                                       placeholder="Ej. ABCD123456EFGH78MN" 
                                       pattern="[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}"
                                       title="Ingresa una CURP válida (18 caracteres alfanuméricos)"
                                       required>
                            </div>
                            
                            <div>
                                <label for="telefono" class="block text-gray-700 font-medium mb-2">Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" 
                                       class="form-input w-full px-3 py-3 focus:outline-none" 
                                       placeholder="Ej. 5512345678"
                                       pattern="[0-9]{10}"
                                       title="Ingresa un número de 10 dígitos"
                                       required>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                            <div class="md:col-span-1">
                                <label for="nombre" class="block text-gray-700 font-medium mb-2">Nombre(s) *</label>
                                <input type="text" id="nombre" name="nombre" 
                                       class="form-input w-full px-3 py-3 focus:outline-none" 
                                       placeholder="Tus nombres"
                                       required>
                            </div>
                            
                            <div>
                                <label for="apellido_paterno" class="block text-gray-700 font-medium mb-2">Apellido Paterno *</label>
                                <input type="text" id="apellido_paterno" name="apellido_paterno" 
                                       class="form-input w-full px-3 py-3 focus:outline-none" 
                                       placeholder="Apellido paterno"
                                       required>
                            </div>
                            
                            <div>
                                <label for="apellido_materno" class="block text-gray-700 font-medium mb-2">Apellido Materno</label>
                                <input type="text" id="apellido_materno" name="apellido_materno" 
                                       class="form-input w-full px-3 py-3 focus:outline-none" 
                                       placeholder="Apellido materno">
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-xl font-bold text-gray-800 mb-6 pb-2 border-b border-gray-200">
                            <i class="fas fa-lock text-blue-600 mr-2"></i>
                            Datos de Acceso
                        </h3>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-gray-700 font-medium mb-2">Correo Electrónico *</label>
                            <input type="email" id="email" name="email" 
                                   class="form-input w-full px-3 py-3 focus:outline-none" 
                                   placeholder="tucorreo@ejemplo.com"
                                   required>
                        </div>
                        
                        <div class="mb-6 relative">
                            <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña *</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" 
                                       class="form-input w-full px-3 py-3 focus:outline-none pr-10" 
                                       placeholder="Mínimo 8 caracteres"
                                       minlength="8"
                                       required>
                                <span class="password-toggle absolute right-3" onclick="togglePassword()">
                                    <i class="far fa-eye text-gray-400"></i>
                                </span>
                            </div>
                            <p class="text-sm text-gray-500 mt-2">La contraseña debe tener al menos 8 caracteres</p>
                        </div>
                        
                        <div>
                            <label for="parentesco" class="block text-gray-700 font-medium mb-2">Parentesco con el beneficiario *</label>
                            <select id="parentesco" name="parentesco" 
                                    class="form-input w-full px-3 py-3 focus:outline-none" required>
                                <option value="" disabled selected>Selecciona una opción</option>
                                <option value="madre">Madre</option>
                                <option value="padre">Padre</option>
                                <option value="tutor">Tutor legal</option>
                                <option value="abuelo">Abuelo/a</option>
                                <option value="tio">Tío/a</option>
                                <option value="hermano">Hermano/a</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                    </div>

                    
               
                    <div class="pt-4">
                        <button type="submit" 
                                class="submit-btn w-full bg-[#0E5BCC] hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-lg transition-all duration-300">
                            Registrarme
                            <i class="fas fa-arrow-right ml-2"></i>
                        </button>
                    </div>
                    
                   
                    <div class="text-center pt-4">
                        <p class="text-gray-600">
                            ¿Ya tienes una cuenta? 
                            <a href="login.php" class="text-blue-600 font-medium hover:underline">Inicia sesión aquí</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    // Función para mostrar/ocultar contraseña
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.querySelector('.password-toggle i');
        
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    }
    
    // Validación del formulario
    document.getElementById('registroForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Validacion CURP
        const curp = document.getElementById('curp').value;
        const curpRegex = /^[A-Z]{4}[0-9]{6}[A-Z]{6}[0-9]{2}$/;
        if (!curpRegex.test(curp)) {
            alert('Por favor ingresa una CURP válida (18 caracteres alfanuméricos)');
            return;
        }
        
        // Validacion teléfono
        const telefono = document.getElementById('telefono').value;
        if (telefono.length !== 10 || !/^\d+$/.test(telefono)) {
            alert('Por favor ingresa un número de teléfono válido (10 dígitos)');
            return;
        }
        
        alert('Formulario válido. Enviando datos...');
    });
</script>

<?php include '../partials/footer.php'; ?>
</body>
</html>