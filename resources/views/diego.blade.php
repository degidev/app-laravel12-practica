<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diego Lipa</title>
    @vite('resources/css/app.css')
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none">
        <!-- GitHub Icon -->
        <symbol id="github" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"/>
        </symbol>
        <!-- Verified Icon -->
        <symbol id="verified" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707a1 1 0 00-1.414-1.414L9 11.172l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
        </symbol>
        <!-- Instagram Icon -->
        <symbol id="instagram" viewBox="0 0 256 256">
            <path fill="#fff" d="M128 23.064c34.177 0 38.225.13 51.722.745 12.48.57 19.258 2.655 23.769 4.408 5.974 2.322 10.238 5.096 14.717 9.575 4.48 4.479 7.253 8.743 9.575 14.717 1.753 4.511 3.838 11.289 4.408 23.768.615 13.498.745 17.546.745 51.723 0 34.178-.13 38.226-.745 51.723-.57 12.48-2.655 19.258-4.408 23.769-2.322 5.974-5.096 10.239-9.575 14.718-4.48 4.48-8.744 7.253-14.718 9.574-4.511 1.753-11.289 3.839-23.768 4.408-13.497.616-17.545.746-51.723.746-34.18 0-38.228-.13-51.722-.746-12.48-.57-19.257-2.655-23.768-4.408-5.974-2.321-10.239-5.095-14.718-9.574-4.479-4.48-7.253-8.744-9.574-14.718-1.753-4.51-3.839-11.288-4.408-23.768-.616-13.497-.746-17.545-.746-51.723 0-34.177.147-38.225.746-51.722.57-12.48 2.655-19.258 4.408-23.769 2.321-5.974 5.095-10.238 9.574-14.717 4.48-4.48 8.744-7.253 14.718-9.575 4.51-1.753 11.289-3.838 23.768-4.408 13.497-.615 17.545-.745 51.723-.745M128 0C93.237 0 88.878.147 75.226.77c-13.625.622-22.93 2.786-31.071 5.95-8.418 3.271-15.556 7.648-22.672 14.764C14.367 28.6 9.991 35.738 6.72 44.155 3.555 52.297 1.392 61.602.77 75.226.147 88.878 0 93.237 0 128c0 34.763.147 39.122.77 52.774.622 13.625 2.785 22.93 5.95 31.071 3.27 8.417 7.647 15.556 14.763 22.672 7.116 7.116 14.254 11.492 22.672 14.763 8.142 3.165 17.446 5.328 31.07 5.95 13.653.623 18.012.77 52.775.77s39.122-.147 52.774-.77c13.624-.622 22.929-2.785 31.07-5.95 8.418-3.27 15.556-7.647 22.672-14.763 7.116-7.116 11.493-14.254 14.764-22.672 3.164-8.142 5.328-17.446 5.95-31.07.623-13.653.77-18.012.77-52.775s-.147-39.122-.77-52.774c-.622-13.624-2.786-22.929-5.95-31.07-3.271-8.418-7.648-15.556-14.764-22.672C227.4 14.368 220.262 9.99 211.845 6.72c-8.142-3.164-17.447-5.328-31.071-5.95C167.122.147 162.763 0 128 0Zm0 62.27C91.698 62.27 62.27 91.7 62.27 128c0 36.302 29.428 65.73 65.73 65.73 36.301 0 65.73-29.428 65.73-65.73 0-36.301-29.429-65.73-65.73-65.73Zm0 108.397c-23.564 0-42.667-19.103-42.667-42.667S104.436 85.333 128 85.333s42.667 19.103 42.667 42.667-19.103 42.667-42.667 42.667Zm83.686-110.994c0 8.484-6.876 15.36-15.36 15.36-8.483 0-15.36-6.876-15.36-15.36 0-8.483 6.877-15.36 15.36-15.36 8.484 0 15.36 6.877 15.36 15.36Z"/>
        </symbol>
        <!-- X (Twitter) Icon -->
        <symbol id="x" viewBox="0 0 1200 1227"> 
            <path fill="#fff" d="M714.163 519.284L1160.89 0h-105.86L667.137 450.887 357.328 0H0l468.492 681.821L0 1226.37h105.866l409.625-476.152 327.181 476.152H1200L714.137 519.284h.026Z"/>
        </symbol>
        <!-- LinkedIn Icon -->
        <symbol id="linkedin" viewBox="0 0 256 256">
            <path d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h37.97v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009-.002-12.157 9.851-22.014 22.008-22.016 12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h218.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453" fill="#0A66C2"/>
        </symbol>
        <!-- YouTube Icon -->
        <symbol id="youtube" viewBox="0 0 256 180">
            <path d="M250.346 28.075A32.18 32.18 0 0 0 227.69 5.418C207.824 0 127.87 0 127.87 0S47.912.164 28.046 5.582A32.18 32.18 0 0 0 5.39 28.24c-6.009 35.298-8.34 89.084.165 122.97a32.18 32.18 0 0 0 22.656 22.657c19.866 5.418 99.822 5.418 99.822 5.418s79.955 0 99.82-5.418a32.18 32.18 0 0 0 22.657-22.657c6.338-35.348 8.291-89.1-.164-123.134Z" fill="red"/>
            <path fill="#FFF" d="m102.421 128.06 66.328-38.418-66.328-38.418z"/>
        </symbol>
        <!-- Twitch Icon -->
        <symbol id="twitch" viewBox="0 0 2400 2800">
            <path fill="#fff" d="m2200 1300-400 400h-400l-350 350v-350H600V200h1600z"/>
            <g fill="#9146ff">
                <path d="M500 0 0 500v1800h600v500l500-500h400l900-900V0H500zm1700 1300-400 400h-400l-350 350v-350H600V200h1600v1100z"/>
                <path d="M1700 550h200v600h-200zm-550 0h200v600h-200z"/>
            </g>
        </symbol>
    </svg>
<body>
    <section class="flex flex-col justify-center items-center h-screen mx-auto min-h-dvh
        bg-gradient-to-b from-black via-sky-950 to-gray-800">
        <h1 class=" 
        text-7xl
        font-bold
        bg-clip-text text-transparent 
        bg-gradient-to-r from-red-500 to-blue-500
        md:text-9xl"
        >Diego Lipa</h1>
        <div class="flex flex-wrap justify-center gap-6 mt-8">
            <!-- GitHub -->
            <a href="https://github.com/diegoolipa" target="_blank"  aria-label="GitHub" title="Ir a GitHub"
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            bg-gray-100/90 hover:bg-gray-100/100">
                <svg class="w-15 h-15" fill="currentColor" viewBox="0 0 24 24">
                    <use href="#github" />
                </svg>
            </a>

            <!-- Instagram -->
            <a href="#" target="_blank" 
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            animate-delay-200 bg-gradient-to-tr from-yellow-300 via-pink-600 to-purple-600">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 256 256">
                    <use href="#instagram" />
                </svg>
            </a>

            <!-- X (Twitter) -->
            <a href="#" target="_blank" 
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            animate-delay-400 bg-blue-500 hover:bg-blue-500">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 1200 1227">
                    <use href="#x" />
                </svg>
            </a>

            <!-- LinkedIn -->
            <a href="#" target="_blank" 
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            animate-delay-600 bg-blue-700/10 hover:bg-blue-700/20">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 256 256">
                    <use href="#linkedin" />
                </svg>
            </a>

            <!-- YouTube -->
            <a href="#" target="_blank" 
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            animate-delay-800 bg-red-600/10 hover:bg-red-600/20">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 256 180">
                    <use href="#youtube" />
                </svg>
            </a>

            <!-- Twitch -->
            <a href="#" target="_blank" 
            class="p-2 size-15 sm:size-20 flex items-center justify-center rounded-full hover:scale-110 transition-transform
            animate-delay-1000 bg-purple-600/10 hover:bg-purple-600/20">
                <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 2400 2800">
                    <use href="#twitch" />
                </svg>
            </a>
        </div>
        <p class="text-white text-center mt-4">
            🐧 Diego Lipa <a href="https://github.com/diegoolipa" target="_blank" class="text-blue-500 hover:underline">@lipadev</a>
        </p>
        <p class="text-white text-center mt-4">
            &copy; {{ date('Y') }} Diego Lipa. Todos los derechos reservados.
        </p>
    </section>
</body>
</html>