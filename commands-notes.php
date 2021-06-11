> laravel new myproject --jet
Creación del proyecto desde la carpeta wwww

> cd .\myproject\
Entro al proyecto para poder ejecutar

> npm install
Obligatorio para instalar NodeJS en el proyecto y manejar las dependencias desde el NPM

> npm run dev
Ejecuta y realiza las aplicaciones, incluidas las de LiveWire

> php artisan migrate
Este comando se realiza para ejecutar los migrates de la base de datos configurada en el archivo .env

> php artisan vendor:publish --tag=jetstream-views
Este comando permite publicar/copiar en el proyecto las vistas de jetstream que estan 
en el directorio de vendor para poder personalizarla y que no se pierda en alguna actualización
de versiones

> php artisan make:livewire ShowPosts
este comando crea un componente ShowPosts con su respectiva Vista y Clase pero de tipo LiveWire
de manera que tenga los componentes necesarios para ejecutar JS Scripts de livewire. ShowPosts es
el nombre del componente, aqui tambien es imporntante mencionar que se crean componentes, NO vistas.
Tambien es importante que estos componentes por Livewire solo sean para crear componentes reactivos
dentro de la pagina, porque si son componentes normales sin reactividad se deben crear por blade.

> php artisan make:model Post -mf
Este comando crea el modelo de base de datos con migración (actualización que lleva a BD) y factories 
(para rellenar la base de datos) -> -mf

> php artisan migrate:fresh --seed
Este comando va a crear nuevamente (si es el caso) las tablas de base de datos según el archivo que 
tnega en migration con los campos que he agregado, luego va a ver el seeder (cantidad de registros)
puestos desde el archivo de DatabaseSeeder, y va a rellenar de acuerdo alos faker puestos en el archivo 
de factory. NOTA: Esto elimina tambien hasta el usuario que hemos registrado.

> composer require jeroennoten/laravel-adminlte
Este comando instala los componentes de composer del template de adminlte para utilizarlo en el proyecto, 
luego de esto simplemente hay que instalarlo.

> php artisan adminlte:install
Este comando instala en el proyecto todos los archivos de la plantilla adminLTE.

> php artisan make:controller Admin/CategoryController -r
Este comando sirve para crear el controller con todos los metodos del CRUD y que luego con una sola linea 
en el web.php se hagan los llamados a todos los metodos en conjunto, luego se deja esta linea en el web.php

Route::resource('categories', CategoryController::class)->names('admin.categories');

Esto es equivalente a que yo pusiera en en archivo web.php las siguientes rutas y lo puedo ocnsultar a través del siguiente comando
> php artisan r:l --name=admin

+--------+-----------+----------------------------------+--------------------------+-------------------------------------------------------+----------------------------------+
| Domain | Method    | URI                              | Name                     | Action                                                | Middleware                       |
+--------+-----------+----------------------------------+--------------------------+-------------------------------------------------------+----------------------------------+
|        | GET|HEAD  | admin                            | admin.home               | App\Http\Controllers\Admin\HomeController@index       | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | GET|HEAD  | admin/categories                 | admin.categories.index   | App\Http\Controllers\Admin\CategoryController@index   | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | POST      | admin/categories                 | admin.categories.store   | App\Http\Controllers\Admin\CategoryController@store   | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | GET|HEAD  | admin/categories/create          | admin.categories.create  | App\Http\Controllers\Admin\CategoryController@create  | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | GET|HEAD  | admin/categories/{category}      | admin.categories.show    | App\Http\Controllers\Admin\CategoryController@show    | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | PUT|PATCH | admin/categories/{category}      | admin.categories.update  | App\Http\Controllers\Admin\CategoryController@update  | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | DELETE    | admin/categories/{category}      | admin.categories.destroy | App\Http\Controllers\Admin\CategoryController@destroy | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
|        | GET|HEAD  | admin/categories/{category}/edit | admin.categories.edit    | App\Http\Controllers\Admin\CategoryController@edit    | web                              |
|        |           |                                  |                          |                                                       | App\Http\Middleware\Authenticate |
+--------+-----------+----------------------------------+--------------------------+-------------------------------------------------------+----------------------------------+

Luego tambien en el controlador hay que reemplazar la variable $id en los parametros de las funciones por
una variable $category con instancia de la clase Category

> https://laravelcollective.com/
Aqui encontraremos un paquete que nos va a ayudar a crear los formularios de manera muy rapida y luego aqui se dirige a Docs > 6.x

> composer require laravelcollective/html
Con este comando se instala la libreria

> php artisan storage:link
Este comando debe usarse para poder subir archivos y en los casos que se usa Jetstrean probablemente la carpeta no se haya
creado correctamente, adicional en el archivo filesystems.php de la carpeta config se debe cambiar la variable 'default' de local a public

> php artisan make:observer PostObserver --model=Post
Este comando sirve para crear un observer, funciona como el trigger de una base de datos al mometo de generar una acción como borrar, 
actualizar o crear un registro en una tabla.





