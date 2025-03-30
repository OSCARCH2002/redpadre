<?php include './partials/header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videos Educativos | Organización</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #101524;
            --accent-color: #3b82f6;
            --secondary-color: #ffffff; 
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-bg);
            color: #f8fafc;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            background: #000;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .video-card {
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        
        .video-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: var(--accent-color);
        }
        
        .category-badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        
        .inclusion-badge {
            background: rgba(59, 130, 246, 0.2);
            color: #93c5fd;
        }
        
        .therapy-badge {
            background: rgba(59, 130, 246, 0.2); 
            color: #93c5fd;
        }
        
        .testimony-badge {
            background: rgba(59, 130, 246, 0.2); 
            color: #93c5fd; 
        }
        
        .hidden-video {
            display: none;
        }
        
        .active-filter {
            background-color: #3b82f6 !important; 
            color: white !important;
        }
        
        .pagination-btn {
            width: 2.5rem;
            height: 2.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            transition: all 0.3s ease;
        }
        
        .pagination-btn.active {
            background-color: #3b82f6;
            color: white;
        }
        
        .pagination-btn:not(.active):hover {
            background-color: #1e40af;
            color: white;
        }
    </style>
</head>
<body class="antialiased">

<!-- Hero Section -->
<section class="relative py-24 bg-gradient-to-b from-[#0a0e1a] to-[#101524]">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">
            <span class="bg-gradient-to-r from-blue-400 to-blue-300 bg-clip-text text-transparent">
                Videos Educativos
            </span>
        </h1>
        <p class="text-xl text-gray-300 max-w-2xl mx-auto">
            Recursos audiovisuales para el desarrollo e inclusión
        </p>
    </div>
</section>

<!-- Sección de Videos -->
<section class="py-16 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <button onclick="filterVideos('all')" 
                    class="filter-btn px-6 py-2 rounded-full bg-blue-600 text-white font-medium active-filter">
                Todos
            </button>
            <button onclick="filterVideos('inclusion')" 
                    class="filter-btn px-6 py-2 rounded-full bg-gray-800 text-gray-300 hover:bg-blue-700 transition">
                Inclusión
            </button>
            <button onclick="filterVideos('therapy')" 
                    class="filter-btn px-6 py-2 rounded-full bg-gray-800 text-gray-300 hover:bg-blue-700 transition">
                Terapias
            </button>
            <button onclick="filterVideos('testimony')" 
                    class="filter-btn px-6 py-2 rounded-full bg-gray-800 text-gray-300 hover:bg-blue-700 transition">
                Testimonios
            </button>
        </div>
        
        <div id="video-grid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        </div>
        
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2" id="pagination">
            </nav>
        </div>
    </div>
</section>

<script>
    const videoData = [
        { id: '9NXIo6PIb51', title: '¿Qué es la inclusión?', description: 'Conceptos básicos sobre inclusión social', category: 'therapy' },
        { id: '5F-WHVuVbc1', title: 'Terapias innovadoras', description: 'Nuevos enfoques terapéuticos', category: 'therapy' },
        { id: '3fJ5dG3uLQ1', title: 'Mi experiencia', description: 'Testimonio real de una familia', category: 'testimony' },
        { id: '7KZ5Q1oBqY3', title: 'Escuelas inclusivas', description: 'Cómo adaptar el sistema educativo', category: 'inclusion' },
        { id: 'G8S81CEBdN4', title: 'Ejercicios en casa', description: 'Guía práctica para terapia ocupacional', category: 'therapy' },
        { id: 'vp8H3Q1eQ75', title: 'Nuestra historia', description: 'Cómo enfrentamos los desafíos juntos', category: 'testimony' },
        { id: 'dQw4w9WgXc6', title: 'Taller de habilidades', description: 'Desarrollo de capacidades básicas', category: 'inclusion' },
        { id: 'yPYZpwSpK65', title: 'Terapia del lenguaje', description: 'Ejercicios para mejorar comunicación', category: 'therapy' },
        { id: 'oHg5SJYRHA4', title: 'Superando límites', description: 'Historia de crecimiento personal', category: 'testimony' },
        { id: 'jNQXAC9IVR6', title: 'Inclusión laboral', description: 'Oportunidades en el ámbito profesional', category: 'inclusion' },
        { id: '8xg3vE8Ie_4', title: 'Musicoterapia', description: 'Beneficios de la música en terapias', category: 'therapy' },
        { id: 'dQw4w9WgXc2', title: 'Un día en nuestra vida', description: 'Rutina familiar adaptada', category: 'testimony' }
    ];

    const videosPerPage = 6;
    let currentPage = 1;
    let currentFilter = 'all';

    function renderVideos() {
        const videoGrid = document.getElementById('video-grid');
        videoGrid.innerHTML = '';

        const filteredVideos = currentFilter === 'all' 
            ? videoData 
            : videoData.filter(video => video.category === currentFilter);

        const startIndex = (currentPage - 1) * videosPerPage;
        const endIndex = startIndex + videosPerPage;
        const videosToShow = filteredVideos.slice(startIndex, endIndex);

        videosToShow.forEach(video => {
            const videoHTML = `
                <div class="video-card" data-category="${video.category}">
                    <div class="p-4">
                        <div class="video-container mb-4">
                            <iframe src="https://www.youtube.com/embed/${video.id}" 
                                    title="${video.title}" 
                                    allowfullscreen></iframe>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">${video.title}</h3>
                        <p class="text-gray-400 mb-3">${video.description}</p>
                        <span class="category-badge ${video.category}-badge">
                            ${video.category === 'inclusion' ? 'Inclusión' : 
                              video.category === 'therapy' ? 'Terapias' : 'Testimonios'}
                        </span>
                    </div>
                </div>
            `;
            videoGrid.insertAdjacentHTML('beforeend', videoHTML);
        });

        updatePagination(filteredVideos.length);
    }

    function updatePagination(totalVideos) {
        const pagination = document.getElementById('pagination');
        pagination.innerHTML = '';

        const totalPages = Math.ceil(totalVideos / videosPerPage);

        const prevButton = `
            <button onclick="changePage(${currentPage - 1})" 
                    class="pagination-btn ${currentPage === 1 ? 'opacity-50 cursor-not-allowed' : 'hover:bg-blue-800'}">
                <i class="fas fa-chevron-left"></i>
            </button>
        `;
        pagination.insertAdjacentHTML('beforeend', prevButton);

        for (let i = 1; i <= totalPages; i++) {
            const pageButton = `
                <button onclick="changePage(${i})" 
                        class="pagination-btn ${i === currentPage ? 'active' : 'bg-gray-800 text-gray-300'}">
                    ${i}
                </button>
            `;
            pagination.insertAdjacentHTML('beforeend', pageButton);
        }

        const nextButton = `
            <button onclick="changePage(${currentPage + 1})" 
                    class="pagination-btn ${currentPage === totalPages ? 'opacity-50 cursor-not-allowed' : 'hover:bg-blue-800'}">
                <i class="fas fa-chevron-right"></i>
            </button>
        `;
        pagination.insertAdjacentHTML('beforeend', nextButton);
    }

    function changePage(page) {
        const totalPages = Math.ceil(
            (currentFilter === 'all' ? videoData.length : 
             videoData.filter(v => v.category === currentFilter).length) / videosPerPage
        );

        if (page >= 1 && page <= totalPages) {
            currentPage = page;
            renderVideos();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    }

    function filterVideos(category) {
        currentFilter = category;
        currentPage = 1;
        
        document.querySelectorAll('.filter-btn').forEach(button => {
            if (button.getAttribute('onclick').includes(`'${category}'`)) {
                button.classList.add('active-filter');
                button.classList.remove('bg-gray-800', 'text-gray-300');
            } else {
                button.classList.remove('active-filter');
                button.classList.add('bg-gray-800', 'text-gray-300');
            }
        });

        renderVideos();
    }

    document.addEventListener('DOMContentLoaded', () => {
        renderVideos();
    });
</script>
<?php include './partials/footer.php'; ?>
</body>
</html>