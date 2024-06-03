**Archivo .htaccess:**

El archivo .htaccess permite modificar la configuración del servidor web Apache. A continuación, se presenta un ejemplo de configuración básica:

```htaccess
# Habilitar mod_rewrite
RewriteEngine On

# Redirección al index.php para URLs que no sean archivos o directorios
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [NC,L]
```

**Router en PHP:**

Un router en PHP permite definir URLs amigables y mapearlas a controladores específicos.

**Enlace de utilidad:**

Para profundizar en el tema, se recomienda consultar el siguiente video:

* **[**Router en PHP**](https://www.youtube.com/watch?v=jTFefd3n-kE)**
* **[**Router en PHP (Inglés, tiene subtitulos disponibles)**](https://www.youtube.com/watch?v=siQUekpmImw)**
* **[**Router en PHP**](https://emiliocobos.net/router-en-php/)**

**Consideraciones:**

* Esta es solo una configuración básica. Se pueden agregar más directivas a .htaccess y más rutas al router según las necesidades del proyecto.
* Es importante asegurarse de que el servidor web Apache esté configurado para permitir el uso de .htaccess.
* Se recomienda seguir las mejores prácticas de seguridad al trabajar con archivos .htaccess.

**Conclusión:**

La combinación de un archivo .htaccess y un router en PHP permite crear URLs amigables y organizar el código de una aplicación web de manera eficiente.
