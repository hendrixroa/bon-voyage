# bon-voyage
Ejemplo de Restful en Laravel 5.3

1) Se debe instalar Lamp para linux, wamp para Windows, o mamp para Mac.
2) La configuracion del proyecto esta en un archivo .env donde estaran todas las variables de entorno tales como nombre de base de datos, password entre otros.
3) Instalar la version estable de Composer

Una vez instalado composer ir a la carpeta donde esta el package.json y correr el siguiente comando:
 $ composer install

Luego de haber instalado el proyecto importar el .sql a mysql respectivamente donde estan las migraciones y algunas tablas llenas.

y para ejecutar el proyecto en en la carpeta bon-voyage se debe ejecutar el siguiente comando :

$ php artisan serve --host 0.0.0.0 

El mismo indicara por que puerto y host correra la aplicacion.

para ir al panel de la aplicacion se debe ingresar a la siguiente ruta: http://localhost:8000/crear

