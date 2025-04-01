<footer class="bg-[#101524] text-gray-300 py-12 px-4 sm:px-6 lg:px-8 border-t border-gray-700">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="md:col-span-1">
                <img alt="Logo" class="w-24 h-24 mb-4" src="<?= $base_url ?>/assets/icons/logo.png"/>
                <p class="text-base mb-4 italic">
                    “Con amor, juntos por la inclusión”
                </p>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xl">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xl">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-blue-400 transition-colors duration-300 text-xl">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Menú</h3>
                <ul class="space-y-3">
                    <li><a href="<?= $base_url ?>/public/index.php" class="hover:text-blue-400 transition-colors duration-300 text-lg">Inicio</a></li>
                    <li><a href="<?= $base_url ?>/src/Views/Noticias.php" class="hover:text-blue-400 transition-colors duration-300 text-lg">Noticias</a></li>
                    <li><a href="<?= $base_url ?>/src/Views/Eventos.php" class="hover:text-blue-400 transition-colors duration-300 text-lg">Eventos</a></li>
                    <li><a href="<?= $base_url ?>/src/Views/Contactos.php" class="hover:text-blue-400 transition-colors duration-300 text-lg">Contactos</a></li>
                </ul>
            </div>
            
          
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Contacto</h3>
                <ul class="space-y-3">
                    <li class="flex items-start">
                        <i class="fas fa-map-marker-alt mt-1 mr-3 text-blue-400"></i>
                        <span class="text-lg">San Marcos, Guerrero</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-phone-alt mt-1 mr-3 text-blue-400"></i>
                        <span class="text-lg">+52 745 104 3814</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-envelope mt-1 mr-3 text-blue-400"></i>
                        <span class="text-lg">redpadres@gmail.com</span>
                    </li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-white text-xl font-bold mb-4">Escribenos</h3>
                <p class="text-base mb-4">
                   Recibe nuestras notificaciones
                </p>
                <form class="flex">
                    <input type="email" placeholder="Tu correo" class="px-4 py-3 w-full rounded-l-lg focus:outline-none text-gray-800 text-base">
                    <button type="submit" class="bg-[#1A5CE0] text-white px-6 py-3 rounded-r-lg hover:bg-blue-600 transition-colors duration-300">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <div class="border-t border-gray-700 mt-12 pt-8 text-center">
            <p class="text-base">
                &copy; <?php echo date("Y"); ?> Red de Padres. Todos los derechos reservados.
            </p>
        </div>
    </div>
</footer>


<script>
    document.querySelector('form')?.addEventListener('submit', (e) => {
        const email = e.target.querySelector('input[type="email"]').value;
        if (!email.includes('@')) {
            e.preventDefault();
            alert('Por favor ingresa un correo válido');
        }
    });
</script>