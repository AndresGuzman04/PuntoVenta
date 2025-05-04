------------

## Como instalar en Local
1. Clone o descargue el repositorio a una carpeta en Local

1. Abra el repositorio en su editor de código favorito (**Visual Studio Code**)

1. Ejecute la aplicación **XAMPP** e inice los módulos de **Apache** y **MySQL**

1. Abra una nueva terminal en su editor 

- Este comando nos va a instalar todas la dependencias de composer
```bash
composer install
```
- En el directorio raíz encontrará el arhivo **.env.example**, dupliquelo, al archivo duplicado cambiar de nombre como **.env**, este archivo se debe modificar según las configuraciones de nuestro proyecto. Ahí se muestran como debería quedar
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbsistemaventas 
DB_USERNAME=root
DB_PASSWORD=
```
- Ejecutar el comando para crear la Key de seguridad
```bash
php artisan key:generate 
```
- Correr la migraciones del proyecto
```bash
php artisan migrate
```
- Ejecute los seeders, esto creará un usuario administrador, puede revisar las credenciales en el archivo (**database/seeders/UserSeeder**)
```bash
php artisan db:seed
```
- Ejecute el proyecto
```bash
php artisan serve
```
