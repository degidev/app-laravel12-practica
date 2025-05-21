<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Estilos personalizados -->
    <style>
 
    </style>

    <script>

    </script>
</head>

<x-nav /> <!-- Componente de navegación -->

<body class="">

    <!-- Contenido principal -->
    <main class="">
        <!-- Hero Section -->
        <section class="relative min-h-screen bg-gradient-to-b from-gray-900 via-gray-900 to-gray-900 flex items-center justify-center">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                    <!-- Columna de contenido -->
                    <div class="space-y-8">
                        <h1 class="text-5xl md:text-7xl font-bold text-white mb-8">
                            Bienvenido a Lipadev
                        </h1>
                        <p class="text-xl text-gray-200 max-w-2xl mx-auto">
                            Descubre nuestras soluciones tecnológicas innovadoras y cómo podemos ayudarte a llevar tu proyecto al siguiente nivel.
                        </p>
                        <div class="flex flex-col md:flex-row gap-6 justify-center mt-8">
                            <a href="{{ route('contactos') }}" class="
                                efecto-espejo
                                bg-gradient-to-r from-blue-700 via-blue-400 to-blue-700
                                text-white px-8 py-4
                                font-medium
                                rounded-3xl
                                shadow-lg shadow-blue-600/30
                                transition-all duration-200
                                cursor-pointer
                                ">
                                Contáctanos
                            </a>
                            <a href="#servicios" class="
                                bg-white/10
                                text-white px-8 py-4
                                font-medium
                                rounded-3xl
                                hover:bg-white/20
                                transition-all duration-200
                                cursor-pointer
                                ">
                                Nuestros Servicios
                            </a>
                        </div>
                    </div>

                    <!-- Columna de imagen -->
                    <div class="">
                        <div class="w-full h-full rounded-2xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                                alt="Desarrollo web"
                                class="w-full h-full object-cover">
                        </div>
                        <!-- Efecto de brillo sobre la imagen -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 "></div>
                    </div>
                </div>
            </div>
        </section>

        <section>
        </section>
        <!-- Sección de características -->
        <section class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8">Nuestras Características</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4">Desarrollo Web</h3>
                        <p class="text-gray-600">Creamos sitios web modernos y responsivos</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4">Aplicaciones Móviles</h3>
                        <p class="text-gray-600">Desarrollamos apps nativas y híbridas</p>
                    </div>
                    <div class="bg-gray-100 p-6 rounded-lg">
                        <h3 class="text-xl font-semibold mb-4">Consultoría</h3>
                        <p class="text-gray-600">Asesoría en tecnologías y mejores prácticas</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sección de contacto -->
        <section class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8">Contáctanos</h2>
                <form class="max-w-2xl mx-auto">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Correo</label>
                            <input type="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Mensaje</label>
                            <textarea class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" rows="4"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Sección de blog -->
        <section class="py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8">Nuestro Blog</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @for($i = 1; $i <= 6; $i++)
                        <article class="bg-white p-6 rounded-lg shadow">
                        <h3 class="text-xl font-semibold mb-2">Artículo {{ $i }}</h3>
                        <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <a href="#" class="mt-4 inline-block text-blue-600 hover:text-blue-800">Leer más →</a>
                        </article>
                        @endfor
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Lipadev</h3>
                        <p class="text-gray-400">Desarrollo web y soluciones tecnológicas</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Enlaces Rápidos</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Inicio</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Servicios</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Contacto</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Legal</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Términos de servicio</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Política de privacidad</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Contacto</h3>
                        <p class="text-gray-400">contacto@lipadev.com</p>
                        <p class="text-gray-400">+57 311 123 4567</p>
                    </div>
                </div>
            </div>
        </footer>
        <h1>Section</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
        <br>
        <div class="w-1/2 h-1/2 bg-blue-500 h-7/12"></div>
        </section>
</body>

</html>
