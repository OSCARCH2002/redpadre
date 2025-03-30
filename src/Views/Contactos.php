<?php 
$host = $_SERVER['HTTP_HOST'];
$base_url = "http://$host/redpadre";  
include './partials/header.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #0E5BCC;
            --bg-color: #101524;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: white;
            padding-top: 0 !important;
        }
        
        .first-section {
            padding-top: 4rem; 
        }
        
        @media (min-width: 768px) {
            .first-section {
                padding-top: 5rem; 
            }
        }
        
        .contact-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            border-color: var(--primary-color);
            box-shadow: 0 10px 20px rgba(14, 91, 204, 0.2);
        }
        
        .form-input {
            background: transparent;
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 2px 0 0 rgba(14, 91, 204, 0.3);
        }
    </style>
</head>
<body class="antialiased">


<section class="first-section py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-r from-[#0E5BCC] to-blue-800">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
           
            <div class="contact-card rounded-xl p-6 text-center">
                <div class="bg-blue-900/20 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-map-marker-alt text-blue-300 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Ubicación</h3>
                <p class="text-blue-100">San Marcos, Gro. México</p>
            </div>
            
        
            <div class="contact-card rounded-xl p-6 text-center">
                <div class="bg-blue-900/20 p-4 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-envelope text-blue-300 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold mb-2">Correo</h3>
                <p class="text-blue-100">red_padres@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Formulario -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#101524]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Formulario -->
            <div class="contact-card rounded-xl p-6 lg:p-8">
                <h2 class="text-2xl font-bold mb-6">Envíanos un mensaje</h2>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <input type="text" placeholder="Nombre" class="form-input w-full py-3 px-2 focus:outline-none">
                        </div>
                        <div>
                            <input type="email" placeholder="Correo" class="form-input w-full py-3 px-2 focus:outline-none">
                        </div>
                    </div>
                    <div>
                        <textarea placeholder="Mensaje" rows="5" class="form-input w-full py-3 px-2 focus:outline-none"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-[#0E5BCC] hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition">
                        Enviar Mensaje <i class="fas fa-paper-plane ml-2"></i>
                    </button>
                </form>
            </div>
            
            <!-- Redes Sociales -->
            <div class="flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-6">Contáctanos</h2>
                <p class="text-gray-300 mb-8">
                    ¿Tienes dudas? Escríbenos a través de nuestras redes sociales o utiliza nuestro formulario de contacto.
                </p>
                <div class="flex space-x-6">
                    <a href="#" class="text-3xl text-white hover:text-blue-400 transition">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-3xl text-white hover:text-blue-400 transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                    <a href="#" class="text-3xl text-white hover:text-blue-400 transition">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './partials/footer.php'; ?>

</body>
</html>