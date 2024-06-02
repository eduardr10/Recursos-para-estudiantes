### Sistema de Reservas para un Restaurante

**Descripción:**
Desarrollar un sistema de reservas para un restaurante que permita a los clientes hacer y gestionar sus reservas en línea. El sistema debe seguir el patrón de diseño MVC (Modelo-Vista-Controlador) y estar orientado a objetos (POO).

**Requisitos Generales:**

1. **Usuarios:**
   - Registro de clientes.
   - Autenticación de clientes (inicio de sesión y cierre de sesión).

2. **Reservas:**
   - Creación de nuevas reservas.
   - Edición de reservas existentes.
   - Cancelación de reservas.

3. **Mesas:**
   - Gestión de la disponibilidad de mesas, incluyendo número de asientos y ubicación.
   - Los administradores pueden gestionar la disposición y configuración de las mesas.

4. **Interfaz:**
   - Desarrollo de una interfaz web amigable utilizando HTML y CSS.
   - (Opcional) Utilización de JavaScript para mejorar la experiencia del usuario (validaciones, interacciones dinámicas).

5. **Base de Datos:**
   - Utilizar MySQL para almacenar la información de los clientes, mesas y reservas.
   - Diseñar y crear las tablas necesarias para la gestión del sistema.

**Funcionalidades Específicas:**

1. **Registro y Autenticación de Clientes:**
   - Formulario de registro con campos como nombre, apellido, correo electrónico y contraseña.
   - Formulario de inicio de sesión.
   - Validación de datos del cliente en el servidor.
   - Gestión de sesiones de usuario.

2. **Gestión de Reservas:**
   - Formulario para crear una nueva reserva, seleccionando la fecha, hora y número de personas.
   - Funcionalidad para editar reservas existentes, permitiendo cambios en la fecha, hora o número de personas.
   - Funcionalidad para cancelar reservas.
   - Los clientes reciben una confirmación por correo electrónico al crear, editar o cancelar una reserva.

3. **Visualización de Disponibilidad:**
   - Los clientes pueden ver la disponibilidad de mesas para una fecha y hora específicas.
   - Muestra lista de horarios disponibles.

4. **Gestión de Mesas:**
   - Panel de administrador para agregar, editar y eliminar mesas.
   - Cada mesa debe tener atributos como número de asientos y ubicación.
   - Gestión de la disposición de mesas en el restaurante.

5. **Interfaz de Usuario:**
   - Diseño responsivo para que el sistema sea accesible desde dispositivos móviles y de escritorio.
   - Utilización de CSS para el diseño y presentación visual.
   - Utilización de JavaScript para validaciones y mejoras en la experiencia del usuario (Opcional).

6. **Base de Datos:**
   - Tabla `clientes` con campos como `id`, `nombre`, `apellido`, `email`, `contraseña`.
   - Tabla `mesas` con campos como `id`, `numero_asientos`, `ubicacion`.
   - Tabla `reservas` con campos como `id`, `cliente_id`, `mesa_id`, `fecha`, `hora`, `numero_personas`.

**Consideraciones Técnicas:**

- Utilizar PHP para la lógica del servidor, siguiendo los principios de POO y el patrón MVC.
- Implementar controladores para manejar las solicitudes HTTP y coordinar las acciones entre el modelo y la vista.
- Utilizar modelos para interactuar con la base de datos y manejar la lógica de negocio.
- Diseñar vistas que presenten los datos al usuario de manera clara y accesible.
- Implementar medidas de seguridad, como encriptación de contraseñas y validaciones en el servidor para proteger los datos del cliente.