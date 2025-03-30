<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0, user-scalable=yes">
    <title>Reseña - Red Padres</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        :root {
            --primary-color: #0E5BCC;
            --secondary-color: #ffffff;
            --bg-color: #101524;
            --accent-color: #10b981;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--secondary-color);
            overflow-x: hidden;
            padding-top: 0;
            margin-top: 0;
            scroll-behavior: smooth;
        }
        
        header {
            position: sticky;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(16, 21, 36, 0.98);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .hero-section {
            position: relative;
            height: 100vh;
            min-height: 600px;
            max-height: 800px;
            overflow: hidden;
            margin-top: 0;
        }
        
        .hero-content {
            position: relative;
            z-index: 20;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 100%;
            padding: 0 2rem;
            text-align: center;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(14, 91, 204, 0.7) 0%, rgba(16, 21, 36, 0.95) 100%);
            z-index: 10;
        }
        
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 5;
            overflow: hidden;
        }
        
        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            pointer-events: none;
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .scroll-down-arrow {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 30;
            color: white;
            font-size: 2rem;
            animation: bounce 2s infinite;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .scroll-down-arrow:hover {
            color: var(--primary-color);
            transform: translateX(-50%) scale(1.1);
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) translateX(-50%); }
            40% { transform: translateY(-20px) translateX(-50%); }
            60% { transform: translateY(-10px) translateX(-50%); }
        }
        
        .history-card {
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            background: rgba(30, 35, 50, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            overflow: hidden;
        }
        
        .history-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(14, 91, 204, 0.2);
            border-color: var(--primary-color);
        }
        
        .compact-timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .compact-timeline::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--primary-color);
        }
        
        .timeline-milestone {
            position: relative;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }
        
        .timeline-milestone:last-child {
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .milestone-header {
            display: flex;
            align-items: center;
            margin-bottom: 8px;
        }
        
        .milestone-dot {
            position: absolute;
            left: -26px;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--accent-color);
            border: 2px solid var(--primary-color);
        }
        
        .milestone-year {
            font-weight: 600;
            color: var(--primary-color);
            margin-right: 10px;
            min-width: 60px;
        }
        
        .milestone-title {
            font-weight: 600;
            color: white;
            font-size: 1rem;
        }
        
        .milestone-content {
            padding-left: 70px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        .milestone-content p {
            margin-bottom: 4px;
        }
        
        .highlight-text {
            position: relative;
            display: inline-block;
        }
        
        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 2px;
            left: 0;
            width: 100%;
            height: 8px;
            background-color: rgba(14, 91, 204, 0.3);
            z-index: -1;
            transition: all 0.3s ease;
        }
        
        .highlight-text:hover::after {
            height: 12px;
            background-color: rgba(14, 91, 204, 0.5);
        }
        
        @media (max-width: 640px) {
            .hero-section {
                min-height: 500px;
            }
            
            .hero-content {
                padding: 0 1rem;
            }
            
            header {
                backdrop-filter: none;
            }
            
            .compact-timeline {
                padding-left: 20px;
            }
            
            .milestone-dot {
                left: -18px;
                width: 10px;
                height: 10px;
            }
            
            .milestone-content {
                padding-left: 60px;
            }
        }
    </style>
</head>
<body class="antialiased">

<!-- Hero Section con todas las animaciones -->
<section class="hero-section">

    <div class="absolute inset-0 z-0">
        <img src="../../assets/images/galeria3.jpg" alt="Reseña Red Padres" class="w-full h-full object-cover object-center" data-aos="fade" data-aos-duration="1500">
    </div>
    

    <div class="particles" id="particles"></div>
    
   
    <div class="hero-overlay" data-aos="fade" data-aos-duration="2000"></div>
    
    
    <div class="hero-content">
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-bold text-white mb-4" data-aos="fade-up">
            <span class="block">Nuestra</span>
            <span class="text-blue-300">Historia</span>
        </h1>
        <p class="text-xl sm:text-2xl text-gray-300 max-w-2xl mx-auto mb-8" data-aos="fade-up" data-aos-delay="100">
            El amor por nuestros hijos es lo que nos mueve y su inclusión social es nuestra mayor aspiración.
        </p>
        <div data-aos="fade-up" data-aos-delay="200">
            <a href="#historia" class="inline-flex items-center bg-transparent border-2 border-white text-white rounded-full px-8 py-3 text-lg font-medium hover:bg-white hover:text-black transition-all duration-300 hover:shadow-lg scroll-link">
                Conoce nuestra historia
                <i class="fas fa-arrow-down ml-3"></i>
            </a>
        </div>
    </div>
    
    
    <a href="#historia" class="scroll-down-arrow scroll-link" data-aos="fade-up" data-aos-delay="300">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </a>
</section>

<section id="historia" class="py-20 px-4 sm:px-6 lg:px-8 bg-[#101524]">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
           
            <div data-aos="fade-right">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-8" data-aos="fade-right">
                    Nuestra <span class="text-blue-400">Camino</span>
                </h2>
                
                <div class="space-y-6 text-gray-300 text-lg leading-relaxed">
                    <p data-aos="fade-right" data-aos-delay="100">
                    Tener una discapacidad reconocida en nuestro medio social tiene pocas repercusiones,existen niños, jóvenes y adultos mayores con discapacidad que reciben poco reconocimiento, atención y las oportunidades son limitadas.
                    </p>

                    <p data-aos="fade-right" data-aos-delay="150">
                        En el año <strong class="text-blue-400">2011</strong> la necesidad de encontrar apoyo para obtener el interés de la autoridad y la sociedad para con los niños con discapacidad de San Marcos, nos hizo junto a una decena de padres con hijos con alguna discapacidad a organizarnos, primeramente para auto ayudarnos y a la vez ser el vehículo que pudiera gestionar ante el gobierno municipal los requerimientos mínimos poder acceder a medios que nos permitieran llevar a nuestros hijos a su atención médica fuera del municipio, tener el respaldo para lograr aparatos y entrar en la agenda de prioridades de la autoridad. 
                    </p>

                    <p data-aos="fade-right" data-aos-delay="200">
                        La secretaria de educación de la entidad atreves de su departamento de educación inclusiva lanzó una convocatoria para la creación en los municipios de la <strong class="text-blue-400">Red de padres de niños con discapacidad</strong>, una alternativa que agrupara a los padres de escolares con alguna discapacidad para que nos ocupáramos de coordinar junto con los docentes en el tema la atención de nuestros hijos a partir de la escuela. Desde el inicio fue difícil conjuntar a los padres, debido a que al contar con un hijo con discapacidad las necesidades familiares se incrementan, por lo que reunirse y realizar actividades era todo un desafío. Logramos aglutinar 15 padres, con lo que iniciamos nuestro peregrinar en la gestión, también en la orientación de otros quienes aún no se familiarizaban con el tema. 
                    </p>

                    <div class="history-card p-6 mb-6" data-aos="fade-up" data-aos-delay="250">
                        <h3 class="text-xl font-bold text-white mb-3 flex items-center">
                            <i class="fas fa-medal text-blue-400 mr-2"></i>
                            Nuestros Logros
                        </h3>
                        <ul class="text-gray-300 space-y-2 pl-5">
                            <li class="flex items-start" data-aos="fade-right" data-aos-delay="300"><i class="fas fa-check text-green-400 mr-2 mt-1"></i> Construcción de rampas de acceso</li>
                            <li class="flex items-start" data-aos="fade-right" data-aos-delay="350"><i class="fas fa-check text-green-400 mr-2 mt-1"></i> Transporte para terapias semanales</li>
                            <li class="flex items-start" data-aos="fade-right" data-aos-delay="400"><i class="fas fa-check text-green-400 mr-2 mt-1"></i> Obtención de aparatos funcionales</li>
                            <li class="flex items-start" data-aos="fade-right" data-aos-delay="450"><i class="fas fa-check text-green-400 mr-2 mt-1"></i> Profesionales en rehabilitación local</li>
                            <li class="flex items-start" data-aos="fade-right" data-aos-delay="500"><i class="fas fa-check text-green-400 mr-2 mt-1"></i> Creación de dirección municipal para discapacidad</li>
                        </ul>
                    </div>

                    <p data-aos="fade-right" data-aos-delay="550">
                        Por lo que, la red trascendió del tema educativo a lo social, sin embargo, la inercia de nuestros trabajos, ocupaciones y el interés de estar al cuidado de nuestros hijos de manera particular, provocó que la Red entrara en una etapa de pasividad natural, solo haciéndonos presentes en los actos protocolarios que el gobierno en turno convocaba sobre la discapacidad.
                    </p>

                    <p data-aos="fade-right" data-aos-delay="600">
                        En <strong class="text-blue-400">2024</strong> la red de padres retomó su papel, encontramos nuevas oportunidades para activarnos, encontramos nuevas formas de organización, replanteamos nuestros objetivos, ello con el fin de seguir encontrando mejores escenarios para que nuestros hijos puedan tener una localidad con mayores oportunidades en todos los ámbitos, el amor por nuestros hijos es lo que nos mueve y su inclusión social es la aspiración. Actualmente estamos en ese proceso de reconstrucción y nos observamos sólidos en esa finalidad, estamos realizando actividades, al mismo tiempo que se siguen sumando más padres.
                    </p>

                    <div class="bg-blue-900/20 p-6 rounded-lg border border-blue-700/30 mt-8" data-aos="fade-up" data-aos-delay="650">
                        <p class="text-center text-blue-300 font-bold text-xl">
                            ¡Hoy somos la Red de padres de personas con discapacidad, vamos juntos con amor, por la inclusión!
                        </p>
                    </div>
                </div>
            </div>

            
            <div class="space-y-8">
             
                <div class="history-card rounded-xl overflow-hidden" data-aos="fade-left" data-aos-delay="100">
                    <div class="relative h-64 w-full">
                        <img src="../../assets/images/galeria3.jpg" alt="Historia Red Padres" class="w-full h-full object-cover" data-aos="zoom-in">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-6 text-white">
                            <h3 class="text-xl font-bold">Nuestros inicios</h3>
                            <p class="text-gray-300">2011 - 2024</p>
                        </div>
                    </div>
                </div>

                <div class="history-card p-6" data-aos="fade-left" data-aos-delay="150">
                    <h3 class="text-2xl font-bold text-white mb-6 flex items-center">
                        <i class="fas fa-history text-blue-400 mr-3"></i>
                        Línea de Tiempo
                    </h3>
                    
                    <div class="compact-timeline">
                        <div class="timeline-milestone" data-aos="fade-left" data-aos-delay="200">
                            <div class="milestone-header">
                                <span class="milestone-year">2011</span>
                                <span class="milestone-title">Inicios</span>
                                <div class="milestone-dot"></div>
                            </div>
                            <div class="milestone-content">
                                <p>Primera organización de padres en San Marcos</p>
                            </div>
                        </div>
                        
                        <div class="timeline-milestone" data-aos="fade-left" data-aos-delay="250">
                            <div class="milestone-header">
                                <span class="milestone-year">2012-2015</span>
                                <span class="milestone-title">Primeros logros</span>
                                <div class="milestone-dot"></div>
                            </div>
                            <div class="milestone-content">
                                <p>Construcción de rampas y acceso a terapias</p>
                                <p>Creación del programa de inclusión educativa</p>
                            </div>
                        </div>
                        
                        <div class="timeline-milestone" data-aos="fade-left" data-aos-delay="300">
                            <div class="milestone-header">
                                <span class="milestone-year">2016-2020</span>
                                <span class="milestone-title">Consolidación</span>
                                <div class="milestone-dot"></div>
                            </div>
                            <div class="milestone-content">
                                <p>Ampliación de servicios y programas</p>
                                <p>Alianzas con instituciones gubernamentales</p>
                            </div>
                        </div>
                        
                        <div class="timeline-milestone" data-aos="fade-left" data-aos-delay="350">
                            <div class="milestone-header">
                                <span class="milestone-year">2024</span>
                                <span class="milestone-title">Renovación</span>
                                <div class="milestone-dot"></div>
                            </div>
                            <div class="milestone-content">
                                <p>Reorganización y nuevos objetivos</p>
                                <p>Expansión a toda la región Costa Chica</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="history-card p-6 bg-blue-900/20 border-blue-500/30" data-aos="flip-up" data-aos-delay="400">
                    <div class="flex items-center">
                        <div class="text-blue-400 text-3xl mr-4">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white mb-1">Nuestro lema</h3>
                            <p class="text-blue-300">“Con amor, juntos por la inclusión”</p>
                        </div>
                    </div>
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
        const particlesContainer = document.getElementById('particles');
        if (particlesContainer) {
            const particleCount = 30;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                const size = Math.random() * 4 + 1;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${Math.random() * 100}%`;
                particle.style.top = `${Math.random() * 100}%`;
                particle.style.opacity = Math.random() * 0.6 + 0.2;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                particle.style.animationDuration = `${Math.random() * 3 + 2}s`;
                
                particlesContainer.appendChild(particle);
            }
        }

    
        document.querySelectorAll('.scroll-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                const headerOffset = 80;
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        const observerOptions = {
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeIn');
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-aos]').forEach(element => {
            observer.observe(element);
        });
    });
</script>

<?php include './partials/footer.php'; ?>
</body>
</html>