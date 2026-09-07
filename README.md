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

## Clase 4
# Sistema ERP - Paraíso Distribuciones S.A.S.

Plataforma web para la gestión integral y control centralizado de inventarios, catálogo de productos, clientes y ventas corporativas de papelería al por mayor.

---

## 📸 Captura de Pantalla - Landing Page

![Landing Page - Paraíso Distribuciones S.A.S.](docs/visual/captura1.png)

---

## 🎨 Explicación de los Cambios Visuales Realizados

1. **Página de Bienvenida (`resources/views/welcome.blade.php`):**
   - Implementación de un encabezado *Hero* con fondo azul corporativo (`bg-slate-900`) y llamado a la acción destacado.
   - Creación de tarjetas informativas para presentar los módulos clave del sistema (Inventario, Clientes y Ventas).

2. **Módulo de Autenticación (`login.blade.php`, `register.blade.php`, `guest.blade.php`):**
   - Rediseño de formularios con campos centrados, bordes suaves e íconos interactivos en los *inputs*.
   - Inclusión de la marca e isotipo corporativo en la cabecera del formulario para dar identidad visual.

3. **Navegación Principal (`resources/views/layouts/app.blade.php`):**
   - Barra de menú superior fija en color azul noche con enlaces directos e íconos intuitivos para cada módulo (*Dashboard*, *Productos*, *Categorías*, *Clientes*, *Ventas*).
   - Menú desplegable personalizado para el usuario administrador.

4. **Panel de Control (`resources/views/dashboard.blade.php`):**
   - Implementación de métricas tipo *KPI* en una cuadrícula responsiva (Total Productos, Total Clientes, Ventas del Día y Alerta de Bajo Stock).
   - Indicadores visuales claros con íconos de estado y resaltado de alertas en tono rojo.

5. **Formulario de Productos (`resources/views/products/index.blade.php`):**
   - Vista estructurada en dos columnas dentro del layout principal con campos para nombre, categoría, precio y stock inicial.

---

## 🎨 Paleta de Colores Utilizada

* **Azul Corporativo Principal:** `#0f172a` / `#1e293b` (`bg-slate-900`, `bg-slate-800`) – Transmite seriedad y elegancia institucional.
* **Amarillo / Dorado de Acento:** `#f59e0b` (`bg-amber-500`, `text-amber-400`) – Para botones de acción principal, resaltados y logotipo.
* **Fondo de Interfaz:** `#f8fafc` (`bg-slate-50`) – Gris ultraclaro que garantiza un alto contraste y descansada lectura.
* **Verde Éxito:** `#10b981` (`emerald-600`) – Indicadores positivos de clientes e ingresos.
* **Rojo Alerta:** `#e11d48` (`rose-600`) – Para resaltar ítems con stock crítico o advertencias.

---

## 🛠️ Fuentes y Recursos Utilizados

* **Framework Base:** [Laravel 11](https://laravel.com/) con el paquete starter [Laravel Breeze](https://laravel.com/docs/breeze).
* **Motor de Plantillas:** Laravel Blade.
* **Framework de CSS:** [Tailwind CSS](https://tailwindcss.com/) (clases de utilidades integradas).
* **Tipografía:** *Figtree* (fuente sans-serif moderna incluida por defecto en Breeze).
* **Iconografía:** [Font Awesome 6 Free](https://fontawesome.com/) (importado vía CDN en la cabecera del layout principal).
