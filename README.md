# Proyecto SGE - Seminario Laravel

## Capítulo 2: Instalación de Laravel y Entorno
En esta sección se detalla el proceso de configuración del entorno de desarrollo utilizando Laravel Sail (Docker) para garantizar la compatibilidad y el aislamiento de los servicios necesarios.

---

## Estructura de Carpetas de Laravel
* **app/**: Contiene el núcleo de la aplicación, incluyendo Modelos, Controladores y la lógica de negocio[cite: 2].
* **bootstrap/**: Archivos encargados de arrancar el framework[cite: 2].
* **config/**: Archivos de configuración general del sistema (base de datos, mail, caché, etc.)[cite: 2].
* **database/**: Aloja las migraciones, seeders y factories para gestionar la base de datos[cite: 2].
* **public/**: El punto de entrada público (`index.php`), además de assets como CSS, JavaScript e imágenes[cite: 2].
* **resources/**: Contiene las vistas en Blade y los archivos fuente de CSS/JS sin compilar[cite: 2].
* **routes/**: Archivos donde se definen todas las rutas y URLs de la aplicación[cite: 2].
* **storage/**: Archivos generados automáticamente por Laravel (logs, sesiones, caché)[cite: 2].
* **vendor/**: Contiene todas las dependencias del proyecto instaladas a través de Composer[cite: 2].

---

## Diagrama del Flujo de una Petición
1. El usuario escribe una URL en el navegador[cite: 2].
2. El archivo `public/index.php` recibe la petición inicial[cite: 2].
3. Laravel consulta el archivo `routes/web.php` para identificar si la ruta existe[cite: 2].
4. Si la ruta es válida, se ejecuta el **Controlador** asociado[cite: 2].
5. El controlador se comunica con el **Modelo** para extraer o manipular datos en la base de datos[cite: 2].
6. El controlador pasa dichos datos a la **Vista** de Blade[cite: 2].
7. La vista genera el código HTML resultante y se lo devuelve al navegador del usuario[cite: 2].

---

## Explicación de las Variables de Entorno (.env)
* **APP_NAME**: Define el nombre de la aplicación[cite: 2].
* **APP_ENV**: Establece el entorno de ejecución (`local` o `production`)[cite: 2].
* **APP_DEBUG**: Activa o desactiva el modo de depuración de errores (`true`/`false`)[cite: 2].
* **DB_CONNECTION / DB_HOST / DB_DATABASE**: Configuran el motor, el host (`mysql` al usar Sail) y el nombre de la base de datos[cite: 2].
