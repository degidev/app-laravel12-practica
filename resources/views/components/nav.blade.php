<style>
    .efecto-espejo {
        background-size: 200% 100%;
        animation: espejo 3s linear infinite;
        position: relative;
        overflow: hidden;
    }

    .efecto-espejo::before {
        content: "";
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.3), transparent);
        transform: rotate(45deg);
        animation: espejodiagonal 4s linear infinite;
    }

    @keyframes espejo {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    @keyframes espejodiagonal {
        0% {
            transform: translateX(-100%) rotate(45deg);
        }

        100% {
            transform: translateX(100%) rotate(45deg);
        }
    }

    /* Efecto de scroll en el navbar */
    .navbar-scroll {
        transition: all 0.3s ease;
        backdrop-filter: none;
    }

    .navbar-scroll.scrolled {
        background-color: rgba(0, 0, 0, 0.5) !important;
        backdrop-filter: blur(7px) brightness(1.1) saturate(1.2);
        box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
    }
</style>

<header class="navbar-scroll fixed w-full z-50 bg-gray-900">
    <nav class="container mx-auto px-5 py-5">
        <div class="flex items-center justify-between">
            <!-- Logo a la izquierda -->
            <div class="flex items-center">
                <img src="{{ asset('assets/svg/lipadev2.svg') }}" alt="Logo Lipadev" class="h-12 w-auto">
            </div>

            <!-- Opciones centradas -->
            <div class="hidden md:flex items-center">
                <ul class="flex items-center space-x-6">
                    <li>
                        <a href="{{ route('hola-mundo') }}"
                            class="text-white font-medium
                            text-lg
                             hover:text-blue-500 transition-colors"><i class="bi bi-bank"></i> Hola Mundo</a>
                    </li>
                    <li>
                        <a href="{{ route('nav-bar') }}"
                            class="text-white font-medium
                             text-lg
                              hover:text-blue-500 transition-colors"><i class="bi bi-android"></i> Nav Bar</a>
                    </li>
                    <li>
                        <a href="{{ route('contactos') }}"
                            class="text-white font-medium 
                            text-lg
                            hover:text-blue-500 transition-colors"><i class="bi bi-person-lines-fill"></i> Contactos</a>
                    </li>

                </ul>
            </div>

            <!-- Botón a la derecha -->
            <div class="flex flex-col  items-center ">
                <button class="
                    efecto-espejo
                    bg-gradient-to-r from-blue-700 via-blue-400 to-blue-700
                    text-white px-4 py-2
                    font-medium
                    rounded-3xl
                    shadow-lg shadow-blue-600/30
                    hover:scale-105 hover:shadow-blue-600/50 transition-all duration-200
                    cursor-pointer
                    ">
                    <i class="bi bi-brilliance"></i> El Mejor Botón
                </button>
                <span class="text-[10px] text-gray-600 mt-10 absolute">El Mejor Botón</span>
            </div>

            <!-- Menú móvil -->
            <div class="md:hidden">
                <button class="p-2" aria-label="Menú móvil" onclick="toggleMobileMenu()" id="mobile-menu-toggle">
                    <i class="bi bi-list text-white text-3xl"></i>
                </button>
            </div>
            <!-- Menú móvil contenido -->
            <div id="mobile-menu" class="md:hidden fixed top-[100px] left-0 right-0 bg-gray-900 bg-opacity-90 z-50 hidden">
                <div class="p-8">
                    <ul class="space-y-4">
                        <li>
                            <a href="{{ route('hola-mundo') }}"
                                class="block text-white text-lg hover:text-blue-500 transition-colors"><i class="bi bi-bank"></i> Hola Mundo</a>
                        </li>
                        <li>
                            <a href="{{ route('nav-bar') }}"
                                class="block text-white text-lg hover:text-blue-500 transition-colors"><i class="bi bi-android"></i> Nav Bar</a>
                        </li>
                        <li>
                            <a href="{{ route('contactos') }}"
                                class="block text-white text-lg hover:text-blue-500 transition-colors"><i class="bi bi-person-lines-fill"></i> Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar-scroll');

        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', function(event) {
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('mobile-menu-toggle');

        if (menu && !menu.contains(event.target) && !button.contains(event.target)) {
            menu.classList.add('hidden');
            button.querySelector('i').className = 'bi bi-list text-gray-600 text-xl';
        }
    });

    function toggleMobileMenu() {
        const menu = document.getElementById('mobile-menu');
        const button = document.getElementById('mobile-menu-toggle');
        const icon = button.querySelector('i');

        menu.classList.toggle('hidden');

        // Cambiar el icono
        if (menu.classList.contains('hidden')) {
            icon.className = 'bi bi-list text-white text-3xl';
        } else {
            icon.className = 'bi bi-x-lg text-white text-3xl';
        }
    }
</script>