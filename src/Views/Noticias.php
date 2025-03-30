<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Noticias - Red Padres</title>
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
            overflow-x: hidden;
        }
        
      
        .hero-news {
            position: relative;
            height: 100vh;
            min-height: 600px;
            max-height: 800px;
            overflow: hidden;
        }
        
        .hero-news-content {
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: 0 2rem;
            text-align: center;
        }
        
        .hero-news-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 91, 204, 0.7) 0%, rgba(16, 21, 36, 0.9) 100%);
            z-index: 2;
        }
        
        .hero-news-title {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            line-height: 1.2;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
            margin-bottom: 1.5rem;
        }
        
        .hero-news-subtitle {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            max-width: 700px;
            margin: 0 auto 3rem;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
        }
        
        .hero-news-scroll {
            position: absolute;
            bottom: 40px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {transform: translateY(0) translateX(-50%);}
            40% {transform: translateY(-20px) translateX(-50%);}
            60% {transform: translateY(-10px) translateX(-50%);}
        }
        
     
        .particles-news {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            overflow: hidden;
        }
        
        .particle-news {
            position: absolute;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            pointer-events: none;
        }
        
        .news-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 25px -5px rgba(14, 91, 204, 0.2), 0 10px 10px -5px rgba(14, 91, 204, 0.1);
            border-color: var(--primary-color);
        }
        
        .video-container {
            min-width: 300px;
            transition: all 0.3s ease;
        }
        
        .video-container:hover {
            transform: scale(1.03);
        }
        
        @media (min-width: 768px) {
            .video-container {
                min-width: 400px;
            }
        }
        
        @media (min-width: 1024px) {
            .video-container {
                min-width: 500px;
            }
        }
    </style>
</head>
<body class="antialiased">


<section class="hero-news">
    
    <div class="absolute inset-0 z-0">
        <img src="../../assets/images/galeria3.jpg" alt="Noticias Red Padres" class="w-full h-full object-cover object-center">
    </div>
    
    <div class="hero-news-overlay"></div>
    
    <div class="particles-news" id="particles-news"></div>
    
    <div class="hero-news-content">
        <h1 class="hero-news-title font-bold text-white" data-aos="fade-up">
            <span class="block">INFORMACIÓN</span>
            <span class="text-blue-300">QUE TRANSFORMA</span>
        </h1>
        <p class="hero-news-subtitle text-gray-300" data-aos="fade-up" data-aos-delay="100">
            Un espacio donde las noticias sobre discapacidad, inclusión y superación se encuentran, 
            creando conciencia y promoviendo el cambio social en cada paso.
        </p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="#noticias" class="inline-flex items-center bg-transparent border-2 border-white text-white rounded-full px-8 py-3 text-lg font-medium hover:bg-white hover:text-black transition-all duration-300 hover:shadow-lg">
                Ver noticias
                <i class="fas fa-newspaper ml-3"></i>
            </a>
        </div>
    </div>
    
   
    <a href="#noticias" class="hero-news-scroll text-white hover:text-blue-300 transition-colors duration-300">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </a>
</section>

<!-- Sección de noticias -->
<section id="noticias" class="py-20 px-4 sm:px-6 lg:px-8 bg-[#101524]">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-12 text-center" data-aos="fade-up">
            Nuestras noticias
        </h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $noticias = [
                ['img' => 'noticia1.jpg', 'titulo' => 'Hablemos de discapacidad', 'desc' => '“Cualquier restricción o impedimento de la capacidad de realizar una actividad en la forma o dentro del margen que se considera normal.”', 'link' => 'https://www.gob.mx/salud/articulos/que-es-la-discapacidad'],
                ['img' => 'noticia2.jpg', 'titulo' => 'Tipos de Discapacidad', 'desc' => 'Sensorial Visual, Auditiva, Motriz, Intelectual, Mental o Psicosocial.', 'link' => 'https://www.un.org/esa/socdev/enable/spanish/disabled.html'],
                ['img' => 'noticia3.jpg', 'titulo' => '¿Sabes qué ocasiona la discapacidad?', 'desc' => 'La INEGI clasifica las causas en cuatro grupos principales: nacimiento, enfermedad, accidente y edad avanzada.', 'link' => 'https://www.inegi.org.mx/temas/discapacidad/'],
                ['img' => 'noticia4.jpg', 'titulo' => 'Apoyos para personas con discapacidad', 'desc' => 'Legislativo, lenguaje incluyente, rehabilitación y ayudas técnicas.', 'link' => 'https://www.conadis.gob.mx'],
                ['img' => 'noticia5.jpg', 'titulo' => 'Inclusión laboral en Venustiano Carranza', 'desc' => 'Más de 40 empresas del sector público y privado participaron en la feria.', 'link' => 'https://www.incluyeme.com'],
                ['img' => 'noticia6.jpg', 'titulo' => 'Reforma de estacionamientos accesibles', 'desc' => 'Cámara de Diputados aprobó la reforma de la Ley General de Movilidad y Seguridad Vial.', 'link' => 'https://www.diputados.gob.mx']
            ];

            foreach ($noticias as $index => $noticia): ?>
                <div class="news-card rounded-xl overflow-hidden" data-aos="fade-up" data-aos-delay="<?= ($index % 3) * 100 ?>">
                    <div class="relative h-60 overflow-hidden">
                        <img src="/assets/images/<?= $noticia['img'] ?>" alt="<?= $noticia['titulo'] ?>" class="w-full h-full object-cover transition-transform duration-500 hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-white mb-3"><?= $noticia['titulo'] ?></h3>
                        <p class="text-gray-300 mb-4"><?= $noticia['desc'] ?></p>
                        <a href="<?= $noticia['link'] ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-[#0E5BCC] hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg transition-all duration-300">
                            Leer noticia completa
                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Sección de Videos -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-[#101524] border-t border-gray-800">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-3xl sm:text-4xl font-bold text-white text-center mb-12" data-aos="fade-up">
            Videos Destacados
        </h2>
        
        <div class="flex overflow-x-auto pb-8 space-x-6 scrollbar-hide" data-aos="fade-up">
            <div class="video-container flex-shrink-0">
                <div class="relative rounded-xl overflow-hidden shadow-lg">
                    <iframe width="100%" height="280" 
                            src="https://www.youtube.com/embed/JOb5P1wOuwk" 
                            title="Video 1" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen class="rounded-xl">
                    </iframe>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>
                </div>
            </div>
            
            <div class="video-container flex-shrink-0">
                <div class="relative rounded-xl overflow-hidden shadow-lg">
                    <iframe width="100%" height="280" 
                            src="https://www.youtube.com/embed/KNP6I-TrwvI" 
                            title="Video 2" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen class="rounded-xl">
                    </iframe>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>
                </div>
            </div>
            
            <div class="video-container flex-shrink-0">
                <div class="relative rounded-xl overflow-hidden shadow-lg">
                    <iframe width="100%" height="280" 
                            src="https://www.youtube.com/embed/iNw3Pi4MpHA" 
                            title="Video 3" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen class="rounded-xl">
                    </iframe>
                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>
                </div>
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
        const particlesContainer = document.getElementById('particles-news');
        const particleCount = 40;
        
        for (let i = 0; i < particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle-news');
            
         
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
    

    const videosContainer = document.querySelector('.flex.overflow-x-auto');
    let isDown = false;
    let startX;
    let scrollLeft;

    videosContainer.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - videosContainer.offsetLeft;
        scrollLeft = videosContainer.scrollLeft;
    });

    videosContainer.addEventListener('mouseleave', () => {
        isDown = false;
    });

    videosContainer.addEventListener('mouseup', () => {
        isDown = false;
    });

    videosContainer.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - videosContainer.offsetLeft;
        const walk = (x - startX) * 2;
        videosContainer.scrollLeft = scrollLeft - walk;
    });
</script>

<?php include './partials/footer.php'; ?>
</body>
</html>