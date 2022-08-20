## Inicialización del proyecto

1. Instalar Laragon para  mas facilidad
2. Crear carpeta nueva crud en la ruta C:/laragon/www/
3. Descargar o clonar este repositorio en C:/laragon/www/crud
4. Abrir el terminal del Panel de Laragon
5. En el terminal ingresar a la ruta del proyecto descargado con cd
6. Al estar dentro de la carpeta del proyecto, se deben de lanzar los siguientes comandos
7. composer install
8. cp .env.example .env
9. php artisan key:generate
10. Se debe de abrir la base datos en el panel de laragon y crear una DB con el nombre de turismcol, 
con usuario= root y constraseña= (vacia). O configurar el .env segun la configuracion que se tenga en mysql
11. php artisan migrate  -> para crear las tablas del proyecto en la DB
12. Escribir en el navegador http://crudd.test

Si es necesario hay un respaldo de datos ya creados y se encuentran en el archivo respaldocrud.sql