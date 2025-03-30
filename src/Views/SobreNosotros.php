<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Sobre Nosotros - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary-color: #0E5BCC;
            --secondary-color: #ffffff;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #101524;
            color: var(--secondary-color);
        }
        
        .about-image-container {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(14, 91, 204, 0.25);
            transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .about-image-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 60px -15px rgba(14, 91, 204, 0.3);
        }
        
        .about-image {
            transition: transform 0.8s ease;
        }
        
        .about-image-container:hover .about-image {
            transform: scale(1.1) rotate(2deg);
        }
        
        .highlight-text {
            position: relative;
            display: inline-block;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 4px;
            left: 0;
            width: 100%;
            height: 8px;
            background-color: rgba(14, 91, 204, 0.4);
            z-index: -1;
            transition: height 0.3s ease;
        }
        
        .highlight-text:hover::after {
            height: 14px;
        }
        
        .contact-btn {
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .contact-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: 0.5s;
            z-index: -1;
        }
        
        .contact-btn:hover::before {
            left: 100%;
        }
        
        /* Efecto de partículas */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
        }
    </style>
</head>
<body class="antialiased">

<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 py-20 overflow-hidden">
    <div class="particles" id="particles"></div>
    
    <div class="absolute inset-0 bg-gradient-to-br from-[#0E5BCC]/30 via-[#101524]/80 to-[#101524] z-0"></div>
    
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center relative z-10">
        <div class="about-image-container" data-aos="fade-right">
            <img src="../../assets/images/galeria3.jpg" alt="Red de Padres" class="about-image w-full h-[500px] object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-8 text-white">
                <h3 class="text-xl font-bold">Reunión de red de Padres</h3>
                <p class="text-gray-300">Por la inclusión y el apoyo mutuo</p>
            </div>
        </div>
        
        <div data-aos="fade-left">
            <h1 class="text-4xl sm:text-5xl font-bold text-white mb-8 leading-tight">
                <span class="highlight-text">Sobre</span> <span class="text-blue-400">Nosotros</span>
            </h1>
            
            <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                <p>
                    Somos una <span class="font-bold text-blue-400">red de padres de personas con discapacidad</span>, convencidos de que a través de la <span class="text-blue-300 font-semibold">unión</span> y la <span class="text-blue-300 font-semibold">organización</span> podemos alcanzar mejores condiciones de vida para nuestros hijos y familiares.
                </p>
                
                <p>
                    Nuestra organización nació de la necesidad de crear un espacio seguro donde las familias puedan encontrar apoyo, recursos y orientación para enfrentar los desafíos que conlleva tener un ser querido con discapacidad.
                </p>
                
                <p>
                    Trabajamos incansablemente para promover la <span class="text-blue-400 font-medium">inclusión social</span>, el acceso a <span class="text-blue-400 font-medium">servicios de calidad</span> y la <span class="text-blue-400 font-medium">concientización</span> en nuestra comunidad.
                </p>
                
                <div class="mt-10">
                    <a href="./Contactos.php" class="contact-btn inline-flex items-center bg-[#0E5BCC] border-2 border-[#0E5BCC] text-white rounded-full px-8 py-4 text-lg font-medium hover:bg-transparent hover:text-white transition-all duration-300 hover:shadow-lg">
                        Contáctanos
                        <i class="fas fa-arrow-right ml-3"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce z-10">
        <a href="#mision-vision" class="text-white hover:text-blue-300 transition-colors duration-300">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
</section>

<!-- Misión y Visión -->
<section id="mision-vision" class="py-20 px-4 sm:px-6 lg:px-8 bg-[#0a0e1a]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Nuestros <span class="text-blue-400">Pilares</span>
            </h2>
            <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                Los fundamentos que guían nuestro trabajo y compromiso
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Misión -->
            <div class="bg-gray-900/50 backdrop-blur-md rounded-2xl p-8 border border-gray-800" data-aos="fade-up">
                <div class="flex items-start mb-6">
                    <div class="bg-blue-900/20 p-4 rounded-lg mr-5">
                        <i class="fas fa-bullseye text-blue-400 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-1">Misión</h3>
                </div>
                <p class="text-gray-300">
                Ser una comunidad de servicio y apoyo mutuo entre padres, tutores y cuidadores de personas con discapacidad y promover la inclusión,
                 a través de la concientización, difusión de información y orientación a la sociedad, organismos gubernamentales e instituciones educativas.
                </p>
            </div>
            
            <!-- Visión -->
            <div class="bg-gray-900/50 backdrop-blur-md rounded-2xl p-8 border border-gray-800" data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-start mb-6">
                    <div class="bg-blue-900/20 p-4 rounded-lg mr-5">
                        <i class="fas fa-eye text-blue-400 text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-1">Visión</h3>
                </div>
                <p class="text-gray-300">
                Ser una red de servicio y apoyo consolidada y reconocida en la región de Costa Chica en el 
                ámbito de inclusión de Personas con Discapacidad para una vida digna y con igualdad de derechos.
                </p>
            </div>
        </div>
    </div>
</section>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-in-out'
    });
    

    document.addEventListener('DOMContentLoaded', function() {
        const particlesContainer = document.getElementById('particles');
        const particleCount = 30;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            
            const size = Math.random() * 2 + 1;
            particle.style.width = `${size}px`;
            particle.style.height = `${size}px`;
            
            particle.style.left = `${Math.random() * 100}%`;
            particle.style.top = `${Math.random() * 100}%`;
            
            particle.style.opacity = Math.random() * 0.5 + 0.1;
            
            const duration = Math.random() * 20 + 10;
            const delay = Math.random() * 5;
            particle.style.animation = `float ${duration}s ease-in-out ${delay}s infinite`;
            
            particlesContainer.appendChild(particle);
        }
    });
</script>

<?php include './partials/footer.php'; ?>
</body>
</html>