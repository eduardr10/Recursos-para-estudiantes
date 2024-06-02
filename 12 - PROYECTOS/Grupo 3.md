### Proyecto: Sistema de Gestión de Eventos

**Descripción:**
Desarrollar un sistema de gestión de eventos que permita a los usuarios crear y unirse a eventos. El sistema debe seguir el patrón de diseño MVC (Modelo-Vista-Controlador) y estar orientado a objetos (POO).

**Requisitos Generales:**

1. **Usuarios:**
   - Registro de usuarios.
   - Autenticación de usuarios (inicio de sesión y cierre de sesión).

2. **Eventos:**
   - Creación de nuevos eventos.
   - Edición de eventos existentes.
   - Eliminación de eventos.

3. **Participación:**
   - Los usuarios pueden unirse a eventos.
   - Los usuarios pueden salir de eventos.

4. **Interfaz:**
   - Creación de una interfaz web interactiva utilizando HTML y CSS.
   - (Opcional) Utilización de JavaScript para mejorar la experiencia del usuario (validaciones, interacciones dinámicas).

5. **Base de Datos:**
   - Utilización de MySQL para almacenar la información de usuarios y eventos.
   - Diseñar y crear las tablas necesarias para la gestión del sistema.

**Funcionalidades Específicas:**

1. **Registro y Autenticación de Usuarios:**
   - Formulario de registro con campos como nombre, apellido, correo electrónico y contraseña.
   - Formulario de inicio de sesión.
   - Validación de datos del usuario en el servidor.
   - Gestión de sesiones de usuario.

2. **Gestión de Eventos:**
   - Formulario para crear nuevos eventos con detalles como título, descripción, fecha, hora y lugar.
   - Funcionalidad para editar eventos existentes.
   - Funcionalidad para eliminar eventos.
   - Mostrar un listado de eventos con opciones para editar y eliminar.

3. **Participación en Eventos:**
   - Los usuarios pueden unirse a eventos.
   - Los usuarios pueden salir de eventos en los que están registrados.
   - Mostrar una lista de participantes para cada evento.
   - Los administradores pueden gestionar la participación de los usuarios en los eventos.

4. **Interfaz de Usuario:**
   - Diseño responsivo para que el sistema sea accesible desde dispositivos móviles y de escritorio.
   - Utilización de CSS para el diseño y presentación visual.
   - Utilización de JavaScript para validaciones y mejoras en la experiencia del usuario.

5. **Base de Datos:**
   - Tabla `usuarios` con campos como `id`, `nombre`, `apellido`, `email`, `contraseña`.
   - Tabla `eventos` con campos como `id`, `titulo`, `descripcion`, `fecha`, `hora`, `lugar`.
   - Tabla `participaciones` con campos como `id`, `usuario_id`, `evento_id`.

**Consideraciones Técnicas:**

- Utilizar PHP para la lógica del servidor, siguiendo los principios de POO y el patrón MVC.
- Implementar controladores para manejar las solicitudes HTTP y coordinar las acciones entre el modelo y la vista.
- Utilizar modelos para interactuar con la base de datos y manejar la lógica de negocio.
- Diseñar vistas que presenten los datos al usuario de manera clara y accesible.
- Implementar medidas de seguridad, como encriptación de contraseñas y validaciones en el servidor para proteger los datos del usuario. (Opcional)