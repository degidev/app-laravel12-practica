php -v
composer --version
composer global require laravel/installer
1. crear un proyecto
new laravel nombre_del_proyecto
2. iniciar el servidor
 * php artisan serve
 * composer run dev


***ir a la documentacion de tailwindcss
1. instalar tailwindcss
npm install tailwindcss @tailwindcss/vite

***migracion a la base de datos
1. crear migracion
php artisan make:migration asis_prueba --create=asis_prueba 

2. ejecutar la migracion    
php artisan migrate

3. ejecutar la migracion con fresh
php artisan migrate:fresh

4. ejecutar la migracion con fresh y seed
php artisan migrate:fresh --seed





***Crear un componente
1. Crear un componente
php artisan make:component nombre_del_componente

2. Crear un componente con vista    
php artisan make:component nombre_del_componente --view

3. Crear un componente con vista y estilo
php artisan make:component nombre_del_componente --view --style

4. Crear un componente con vista y estilo y script
php artisan make:component nombre_del_componente --view --style --script



*** Dieferencia entre include yield y section
1. include: 
    * Incluye el contenido de otra vista directamente en la vista actual
2. yield: 
    * Define un punto de inserción donde las vistas hijas pueden inyectar su contenido
3. section: 
    * Define el contenido que será inyectado en el @yield correspondiente

