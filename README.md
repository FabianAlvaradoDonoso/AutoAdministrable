# AutoAdministrable
Aplicación usando framework Laravel (v5.7) para manejar los datos puestos en una pagina web a través de una interfaz simple y fácil de moldear a las distintas necesidades.

- Después de clonar, descargar todas las dependencias necesarios para la aplicación.
	````
	$ composer install
	$ npm i
	````
- Luego ejecutar todas las migraciones, teniendo en cuenta los datos a la base de datos que están en el .env.

	````
	$ php artisan migrate --seed
	````
