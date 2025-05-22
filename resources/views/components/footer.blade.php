<footer class="bg-gray-900 text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Columna 1: Logo y Descripción -->
            <div>
                <h3 class="text-xl font-bold mb-4">Mi Blog</h3>
                <p class="text-gray-400">Un espacio para compartir mis experiencias y conocimientos.</p>
            </div>

            <!-- Columna 2: Enlaces Rápidos -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Enlaces Rápidos</h4>
                <ul class="space-y-2">
                    <li><a href="/" class="text-gray-400 hover:text-white">Inicio</a></li>
                    <li><a href="/about" class="text-gray-400 hover:text-white">Acerca de</a></li>
                    <li><a href="/contact" class="text-gray-400 hover:text-white">Contacto</a></li>
                    <li><a href="/categories" class="text-gray-400 hover:text-white">Categorías</a></li>
                </ul>
            </div>

            <!-- Columna 3: Contacto -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contacto</h4>
                <ul class="space-y-2">
                    <li><span class="text-gray-400">Email: contacto@mi-blog.com</span></li>
                    <li><span class="text-gray-400">Teléfono: (555) 123-4567</span></li>
                </ul>
            </div>

            <!-- Columna 4: Redes Sociales -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Síguenos</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-gray-800 mt-8 pt-8 text-center">
            <p class="text-gray-400">&copy; {{ date('Y') }} Mi Blog. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>