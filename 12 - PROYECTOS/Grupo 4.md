### Sistema de Gestión de Biblioteca

**Descripción:**
Desarrollar un sistema de gestión de biblioteca que permita registrar, buscar y gestionar libros y usuarios. El sistema debe seguir el patrón de diseño MVC (Modelo-Vista-Controlador) y estar orientado a objetos (POO).

**Requisitos Generales:**

1. **Usuarios:**
   - Registro de usuarios.
   - Autenticación de usuarios (inicio de sesión y cierre de sesión).

2. **Libros:**
   - Los administradores pueden agregar, editar y eliminar libros.
   - Cada libro debe tener atributos como título, autor, género, año de publicación, y número de copias disponibles.

3. **Préstamos:**
   - Los usuarios pueden solicitar préstamos de libros.
   - Los usuarios pueden devolver libros prestados.
   - Registrar la fecha de inicio y fecha de devolución de cada préstamo.

4. **Interfaz:**
   - Crear una interfaz web amigable para gestionar las operaciones utilizando HTML y CSS.
   - Utilizar JavaScript para mejorar la experiencia del usuario (validaciones, interacciones dinámicas).

5. **Base de Datos:**
   - Utilizar MySQL para almacenar la información de los libros, usuarios y préstamos.
   - Diseñar y crear las tablas necesarias para la gestión del sistema.

**Funcionalidades Específicas:**

1. **Registro y Autenticación de Usuarios:**
   - Formulario de registro de usuarios con campos como nombre, apellido, correo electrónico, y contraseña.
   - Formulario de inicio de sesión.
   - Validación de datos del usuario en el servidor.
   - Gestión de sesiones de usuario.

2. **Gestión de Libros:**
   - Panel de administrador donde se puedan agregar nuevos libros mediante un formulario.
   - Funcionalidad para editar la información de un libro existente.
   - Funcionalidad para eliminar un libro del sistema.
   - Listado de libros con opciones para editar y eliminar.

3. **Búsqueda de Libros:**
   - Funcionalidad para que los usuarios registrados puedan buscar libros por título, autor o género.
   - Mostrar resultados de búsqueda en una tabla o lista.

4. **Gestión de Préstamos:**
   - Formulario para que los usuarios puedan solicitar el préstamo de un libro.
   - Validación para asegurar que hay copias disponibles antes de confirmar el préstamo.
   - Registro automático de la fecha de inicio del préstamo.
   - Funcionalidad para que los usuarios puedan devolver libros prestados.
   - Registro de la fecha de devolución.

5. **Interfaz de Usuario:**
   - Diseño responsivo para que el sistema sea accesible desde dispositivos móviles y de escritorio.
   - Utilización de CSS para el diseño y presentación visual.
   - Utilización de JavaScript para validaciones y mejoras en la experiencia del usuario (Opcional).

6. **Base de Datos:**
   - Tabla `usuarios` con campos como `id`, `nombre`, `apellido`, `email`, `contraseña`.
   - Tabla `libros` con campos como `id`, `titulo`, `autor`, `genero`, `ano_publicacion`, `copias_disponibles`.
   - Tabla `prestamos` con campos como `id`, `usuario_id`, `libro_id`, `fecha_inicio`, `fecha_devolucion`.

**Consideraciones Técnicas:**

- Utilizar PHP para la lógica del servidor, siguiendo los principios de POO y el patrón MVC.
- Implementar controladores para manejar las solicitudes HTTP y coordinar las acciones entre el modelo y la vista.
- Utilizar modelos para interactuar con la base de datos y manejar la lógica de negocio.
- Diseñar vistas que presenten los datos al usuario de manera clara y accesible.
- Implementar medidas de seguridad, como encriptación de contraseñas y validaciones en el servidor para proteger los datos del usuario.