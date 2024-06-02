### Proyecto: Sistema de Gestión de Inventario

**Descripción:**
Crear una aplicación web para gestionar el inventario de productos en una tienda. El sistema debe seguir el patrón de diseño MVC (Modelo-Vista-Controlador) y estar orientado a objetos (POO).

**Requisitos Generales:**

1. **Usuarios:**
   - Autenticación de usuarios (inicio de sesión y cierre de sesión).
   - Gestión de usuarios (agregar, editar, eliminar).

2. **Productos:**
   - Agregar nuevos productos al inventario.
   - Editar productos existentes.
   - Eliminar productos del inventario.

3. **Categorías:**
   - Organización de productos en diferentes categorías.
   - Agregar, editar y eliminar categorías.

4. **Interfaz:**
   - Diseño de una interfaz web atractiva y funcional utilizando HTML y CSS.
   - Utilización de JavaScript para mejorar la experiencia del usuario (validaciones, interacciones dinámicas).

5. **Base de Datos:**
   - Utilización de MySQL para almacenar la información de productos, usuarios y categorías.
   - Diseñar y crear las tablas necesarias para la gestión del sistema.

**Funcionalidades Específicas:**

1. **Autenticación y Gestión de Usuarios:**
   - Formulario de inicio de sesión.
   - Formulario para agregar nuevos usuarios con campos como nombre, apellido, correo electrónico y contraseña.
   - Funcionalidad para editar y eliminar usuarios.
   - Validación de datos del usuario en el servidor.
   - Gestión de sesiones de usuario.

2. **Gestión de Productos:**
   - Formulario para agregar nuevos productos con detalles como nombre, descripción, precio y cantidad en stock.
   - Funcionalidad para editar productos existentes.
   - Funcionalidad para eliminar productos del inventario.
   - Mostrar un listado de productos con opciones para editar y eliminar.

3. **Organización en Categorías:**
   - Formulario para agregar nuevas categorías.
   - Funcionalidad para editar y eliminar categorías.
   - Asignación de productos a categorías específicas.
   - Mostrar un listado de categorías con opciones para editar y eliminar.

4. **Búsqueda y Filtrado:**
   - Funcionalidad para que los usuarios busquen productos por nombre o categoría.
   - Mostrar resultados de búsqueda en una tabla o lista.

5. **Alertas de Stock Bajo:**
   - Mostrar alertas en la interfaz cuando el stock de un producto sea bajo.
   - Definir umbrales de stock bajo para cada producto.
   - Las alertas deben ser visibles en el listado de productos.

6. **Interfaz de Usuario:**
   - Diseño responsivo para que el sistema sea accesible desde dispositivos móviles y de escritorio.
   - Utilización de CSS para el diseño y presentación visual.
   - (Opcional) Utilización de JavaScript para validaciones y mejoras en la experiencia del usuario.

7. **Base de Datos:**
   - Tabla `usuarios` con campos como `id`, `nombre`, `apellido`, `email`, `contraseña`.
   - Tabla `productos` con campos como `id`, `nombre`, `descripcion`, `precio`, `cantidad_en_stock`, `categoria_id`.
   - Tabla `categorias` con campos como `id`, `nombre`.

**Consideraciones Técnicas:**

- Utilizar PHP para la lógica del servidor, siguiendo los principios de POO y el patrón MVC.
- Implementar controladores para manejar las solicitudes HTTP y coordinar las acciones entre el modelo y la vista.
- Utilizar modelos para interactuar con la base de datos y manejar la lógica de negocio.
- Diseñar vistas que presenten los datos al usuario de manera clara y accesible.
- Implementar medidas de seguridad, como encriptación de contraseñas y validaciones en el servidor para proteger los datos del usuario. (Opcional)