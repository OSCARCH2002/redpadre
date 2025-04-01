<?php
$host = $_SERVER['HTTP_HOST'];
$base_url = "http://$host/redpadre";  
include '../src/Views/partials/header.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Red Padre</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary-color: #0E5BCC;
            --secondary-color: #ffffff;
            --bg-color: #101524;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--secondary-color);
            overflow-x: hidden;
        }
        
       
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 6rem;
        }
        
       
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0) translateX(-50%);
            }
            40% {
                transform: translateY(-20px) translateX(-50%);
            }
            60% {
                transform: translateY(-10px) translateX(-50%);
            }
        }
        
        .fade-in-up {
            animation: fadeInUp 1s ease-out forwards;
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        .bounce-animation {
            animation: bounce 2s infinite;
        }
        
        .hero-button {
            position: relative;
            overflow: hidden;
            z-index: 1;
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .hero-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(14, 91, 204, 0.3);
        }
        
        .card-hover-effect {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        
        .card-hover-effect:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(14, 91, 204, 0.2), 0 10px 10px -5px rgba(14, 91, 204, 0.1);
        }
        
        .faq-item {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .faq-item:hover {
            background: rgba(14, 91, 204, 0.1);
            border-color: var(--primary-color);
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
        }
        
        .gallery-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(14, 91, 204, 0.3), rgba(14, 91, 204, 0.7));
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }
        
        .gallery-item:hover::before {
            opacity: 1;
        }
        
        .gallery-item img {
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        
        .contact-form-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            transition: all 0.3s ease;
        }
        
        .contact-form-input:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(14, 91, 204, 0.3);
        }
        
        .submit-btn {
            background-color: var(--primary-color);
            position: relative;
            overflow: hidden;
        }
        
        .submit-btn:hover {
            background-color: #0c4fb3;
        }
        
     
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
        
      
        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
        }
        
        .scroll-down-arrow {
            display: block;
            width: 30px;
            height: 30px;
            color: white;
            transition: all 0.3s ease;
        }
        
        .scroll-down-arrow:hover {
            color: #3b82f6;
            transform: translateY(5px) translateX(-50%);
        }
.hero-gradient-transition {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 150px;
    background: linear-gradient(
        to bottom, 
        transparent, 
        var(--bg-color)
    );
    z-index: 5; 
    pointer-events: none;
}
    </style>
</head>
<body class="antialiased">


<div class="particles" id="particles"></div>

<!-- Hero Section -->
<section class="relative h-screen overflow-hidden pt-24">

    
    <div class="absolute inset-0 bg-black z-0">
        <img alt="Group of people" class="w-full h-full object-cover opacity-70" src="<?= $base_url ?>/assets/images/main.jpeg"/>
    </div>
    
    <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black opacity-80 z-0"></div>
    
    <div class="relative z-10 h-full flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold mb-4 text-white" data-aos="fade-up" data-aos-delay="100">
            SOMOS UNA ORGANIZACIÓN
        </h1>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-8 text-white" data-aos="fade-up" data-aos-delay="200">
            SIN FINES DE LUCRO
        </h2>
        <p class="text-xl sm:text-2xl italic text-blue-300 mb-12 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="300">
            "Con amor, juntos por la inclusión"
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4" data-aos="fade-up" data-aos-delay="400">
            <a class="hero-button bg-transparent border-2 border-white text-white rounded-full px-8 py-3 text-lg font-medium hover:bg-white hover:text-black flex items-center justify-center" href="<?= $base_url ?>/src/Views/SobreNosotros.php">
                <span>Conoce más</span>
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a>
            <a class="hero-button bg-white border-2 border-white text-black rounded-full px-8 py-3 text-lg font-medium hover:bg-transparent hover:text-white flex items-center justify-center" href="../src/Views/auth/acceso.php">
                <span>Acceso</span>
                <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
    </div>
    
 
    <div class="scroll-down bounce-animation" data-aos="fade-up" data-aos-delay="500">
        <a href="#about" class="scroll-down-arrow" id="scroll-down">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </a>
    </div>
    <div class="hero-gradient-transition"></div>

</section>

<!-- Sobre Nosotros -->
<section id="about" class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#101524]">
    <div class="max-w-7xl mx-auto" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Sobre Nosotros
            </h2>
            <p class="text-lg sm:text-xl text-gray-300 max-w-3xl mx-auto">
            Somos una red de padres de personas con discapacidad, convencidos que atreves dela unión y la organización podemos alcanzar mejores condiciones de vida para nuestros hijos y familiares.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 relative">
            <!-- Misión -->
            <div class="bg-gray-900/50 backdrop-blur-md rounded-2xl p-8 border border-gray-800 shadow-xl card-hover-effect" data-aos="fade-right">
                <div class="flex items-start mb-6">
                    <div class="bg-blue-900/20 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-1">Nuestra Misión</h3>
                </div>
                <p class="text-gray-300 text-lg">
                Ser una comunidad de servicio y apoyo mutuo entre padres, tutores y cuidadores de personas 
                con discapacidad y promover la inclusión, a través de la concientización, difusión de información y
                 orientación a la sociedad, organismos gubernamentales e instituciones educativas.
            </p>
            </div>
            
            <!-- Visión -->
            <div class="bg-gray-900/50 backdrop-blur-md rounded-2xl p-8 border border-gray-800 shadow-xl card-hover-effect" data-aos="fade-left">
                <div class="flex items-start mb-6">
                    <div class="bg-blue-900/20 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mt-1">Nuestra Visión</h3>
                </div>
                <p class="text-gray-300 text-lg">
                Ser una red de servicio y apoyo consolidada y reconocida en la región de Costa Chica en el ámbito
                 de inclusión de Personas 
                con Discapacidad para una vida digna y con igualdad de derechos.
            </p>
            </div>
        </div>
    </div>
</section>
<!-- Preguntas Frecuentes -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-[#101524]">
    <div class="max-w-7xl mx-auto" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Preguntas Frecuentes
            </h2>
            <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                Encuentra respuestas a las preguntas más comunes sobre nuestra organización.
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-4">

            <div class="faq-item rounded-xl p-6" data-aos="fade-up" data-aos-delay="100">
                <button class="flex justify-between items-center w-full text-left focus:outline-none group" onclick="toggleFAQ(this)">
                    <h3 class="text-lg sm:text-xl font-semibold text-white group-hover:text-blue-300 transition-colors duration-300">
                        ¿Qué es la red de padres?
                    </h3>
                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden mt-4 pl-2">
                    <div class="border-l-2 border-blue-400 pl-4">
                        <p class="text-gray-300">
                            La red de padres es una comunidad que busca apoyar a familias de personas con discapacidad, proporcionando recursos, información y un espacio seguro para compartir experiencias y estrategias que mejoren la calidad de vida de todos sus miembros.
                        </p>
                    </div>
                </div>
            </div>
            
          
            <div class="faq-item rounded-xl p-6" data-aos="fade-up" data-aos-delay="200">
                <button class="flex justify-between items-center w-full text-left focus:outline-none group" onclick="toggleFAQ(this)">
                    <h3 class="text-lg sm:text-xl font-semibold text-white group-hover:text-blue-300 transition-colors duration-300">
                        ¿Quiénes pueden integrarse?
                    </h3>
                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden mt-4 pl-2">
                    <div class="border-l-2 border-blue-400 pl-4">
                        <p class="text-gray-300">
                            Pueden integrarse todos los padres, tutores y cuidadores de personas con discapacidad, así como profesionales y voluntarios que deseen contribuir con nuestra causa. También estamos abiertos a colaboraciones con otras organizaciones afines.
                        </p>
                    </div>
                </div>
            </div>
            
          
            <div class="faq-item rounded-xl p-6" data-aos="fade-up" data-aos-delay="300">
                <button class="flex justify-between items-center w-full text-left focus:outline-none group" onclick="toggleFAQ(this)">
                    <h3 class="text-lg sm:text-xl font-semibold text-white group-hover:text-blue-300 transition-colors duration-300">
                        ¿Dónde están ubicados?
                    </h3>
                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden mt-4 pl-2">
                    <div class="border-l-2 border-blue-400 pl-4">
                        <p class="text-gray-300">
                            Estamos ubicados en la región de Costa Chica, en la cabecera de San Marcos.
                        </p>
                    </div>
                </div>
            </div>
            
           
            <div class="faq-item rounded-xl p-6" data-aos="fade-up" data-aos-delay="400">
                <button class="flex justify-between items-center w-full text-left focus:outline-none group" onclick="toggleFAQ(this)">
                    <h3 class="text-lg sm:text-xl font-semibold text-white group-hover:text-blue-300 transition-colors duration-300">
                    ¿Cuales son las asociaciones que la integran?
                    </h3>
                    <svg class="w-6 h-6 text-gray-400 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </button>
                <div class="faq-answer hidden mt-4 pl-2">
                    <div class="border-l-2 border-blue-400 pl-4">
                        <p class="text-gray-300">
                        Tenemos el apoyo de diferentes asociaciones entre ellas el DIF Municipal de San Marcos, Gro.
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Galería -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-[#101524]">
    <div class="max-w-7xl mx-auto" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Nuestra Galería
            </h2>
            <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                Momentos especiales que capturan nuestro trabajo y compromiso.
            </p>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
           
            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="100">
                <img alt="Imagen 1" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/galeria1.jpg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Proceso escolar de discapacidad</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
            
            
            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="200">
                <img alt="Imagen 2" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/galeria2.jpg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Reunión con padres de familia</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
            

            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="300">
                <img alt="Imagen 3" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/galeria3.jpg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Sesión educativa</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
            
            
            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="400">
                <img alt="Imagen 4" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/galeria4.jpg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Entrega de reconocimientos</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
            
            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="500">
                <img alt="Imagen 5" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/galeria5.jpg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Marcha en San Marcos</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
            
          
            <div class="gallery-item aspect-w-16 aspect-h-9 rounded-xl overflow-hidden shadow-2xl" data-aos="zoom-in" data-aos-delay="600">
                <img alt="Imagen 6" class="w-full h-full object-cover" src="<?= $base_url ?>/assets/images/main.jpeg"/>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity duration-300 z-10">
                    <div class="text-center p-4">
                        <svg class="w-10 h-10 text-white mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <h3 class="text-white font-bold text-xl">Reunión de concientización</h3>
                        <p class="text-gray-300">2025</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12" data-aos="fade-up">
            <button class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-full shadow-sm text-white bg-[#0E5BCC] hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-all duration-300 hover:shadow-lg">
                Ver más fotos
                <svg class="ml-3 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                </svg>
            </button>
        </div>
    </div>
</section>

<!-- Contacto -->
<section class="py-20 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-[#101524]">
    <div class="max-w-7xl mx-auto relative z-10" data-aos="fade-up">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                Contáctanos
            </h2>
            <p class="text-lg text-gray-400 max-w-3xl mx-auto">
                Estamos aquí para ayudarte. Envíanos tus preguntas o comentarios.
            </p>
        </div>
        
        <div class="bg-gray-900/50 backdrop-blur-md rounded-3xl overflow-hidden shadow-2xl border border-gray-800 max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="hidden lg:block relative bg-blue-900/10">
                    <div class="absolute inset-0 flex items-center justify-center p-8">
                        <img alt="Mascota" class="w-full h-auto max-h-96 object-contain float-animation" src="<?= $base_url ?>/assets/images/dibujo.png"/>
                    </div>
                </div>
                
                <div class="p-8 sm:p-10">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1">Nombre</label>
                            <input type="text" id="name" name="name" class="contact-form-input w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Tu nombre" required>
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-1">Correo electrónico</label>
                            <input type="email" id="email" name="email" class="contact-form-input w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="tu@correo.com" required>
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-300 mb-1">Mensaje</label>
                            <textarea id="message" name="message" rows="4" class="contact-form-input w-full px-4 py-3 rounded-lg focus:ring-2 focus:ring-blue-500" placeholder="Tu mensaje..." required></textarea>
                        </div>
                        
                        <div class="pt-2">
                            <button type="submit" class="submit-btn w-full px-6 py-4 rounded-lg text-white font-medium text-lg shadow-lg transition-all duration-300">
                                Enviar mensaje
                                <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Scripts -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="../assets/js/ScriptMain.js"></script>
<?php include '../src/Views/partials/footer.php'; ?>

</body>
</html>