# Guía de Instalación en AwardSpace

Sigue estos pasos para subir tu página web **gratis** en AwardSpace.

## Paso 1: Crear la Base de Datos
1. Inicia sesión en tu cuenta de **AwardSpace**.
2. Ve al **Hosting Control Panel**.
3. Busca la sección **Database Manager** (Gestor de Base de Datos) y entra.
4. Crea una nueva base de datos MySQL:
   - **Database Name**: (Ej: `4693019_cbtis`)
   - **Database User**: (Ej: `4693019_cbtis`)
   - **Password**: Escribe una contraseña segura (Ej: `Cbtis2025!`) y **guárdala**.
5. **IMPORTANTE**: Una vez creada, AwardSpace te mostrará el **Host** (generalmente algo como `fdb1033.awardspace.net`). Copia este dato.

## Paso 2: Editar la Configuración
1. Abre el archivo `db.php` en tu computadora (o edítalo antes de subir).
2. Busca la línea:
   ```php
   $password = "YOUR_AGREED_PASSWORD";
   ```
3. Cámbiala por la contraseña que creaste en el Paso 1.
4. Verifica que `$servername`, `$username` y `$dbname` coincidan con lo que te dio AwardSpace.

## Paso 3: Importar los Datos
1. En el **Database Manager** de AwardSpace, busca la opción **phpMyAdmin** y dale clic.
2. Selecciona tu base de datos a la izquierda.
3. Ve a la pestaña **Importar** (arriba).
4. Selecciona el archivo **`full_install.sql`** que está en tu carpeta del proyecto.
5. Dale clic a **Continuar** (o Go).
   - Verás un mensaje verde indicando que las tablas y datos se crearon correctamente.

## Paso 4: Subir los Archivos
1. Vuelve al **Hosting Control Panel**.
2. Entra al **File Manager** (Administrador de Archivos).
3. Entra a la carpeta de tu dominio (ej: `tu-sitio.atwebpages.com`).
4. Borra el archivo `index.html` por defecto si existe.
5. Sube **TODOS** los archivos de tu carpeta `CBTIS_WEB` (index.php, css, img, etc.).
   - Puedes arrastrarlos o usar el botón "Upload".
   - Asegúrate de subir la carpeta `img` completa.

## ¡Listo!
Entra a tu dominio (ej: `http://tu-sitio.atwebpages.com`) y deberías ver tu página funcionando con las noticias y especialidades cargadas.
