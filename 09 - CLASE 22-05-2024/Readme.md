### ¿Qué es PDO?

PDO (**P**HP **D**ata **O**bjects) es una extensión de PHP que te permite acceder a bases de datos de forma **flexible** y **robusta**. Funciona como una capa de abstracción, lo que significa que te ofrece una interfaz unificada para interactuar con diferentes tipos de bases de datos, como MySQL, PostgreSQL, Oracle y más.

En otras palabras, PDO te permite olvidarte de las particularidades de cada base de datos y enfocarte en la lógica de tu aplicación, utilizando siempre las mismas funciones y métodos. Esto te ahorra tiempo, facilita el mantenimiento de tu código y lo hace más reutilizable.

### ¿Por qué usar PDO?

Las principales ventajas de usar PDO son:

* **Portabilidad:** Funciona con diferentes bases de datos, lo que permite migrar tu aplicación sin grandes cambios.
* **Seguridad:** Prepara las consultas y evita la inyección SQL, una vulnerabilidad común.
* **Flexibilidad:** Ofrece diferentes modos de ejecución y recuperación de datos.
* **Rendimiento:** Optimiza las consultas y la comunicación con la base de datos.
* **Facilidad de uso:** Proporciona una sintaxis clara y consistente.

### Primeros pasos con PDO

Para empezar a usar PDO, necesitas seguir estos pasos:

1. **Instalar la extensión PDO:** Asegúrate de que la extensión PDO esté instalada en tu servidor PHP. Puedes verificarlo en la configuración de PHP o usando la función `phpinfo()`.

2. **Crear una conexión:** Utiliza la clase `PDO` para crear una instancia que represente la conexión a tu base de datos. Necesitarás especificar los detalles de conexión, como el tipo de base de datos, el nombre del servidor, el nombre de usuario y la contraseña.

```php
$dbhost = "localhost";
$dbname = "mi_base_de_datos";
$dbuser = "usuario";
$dbpass = "mi_contraseña";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
    echo "Conectado a la base de datos exitosamente";
} catch (PDOException $e) {
    echo "Error al conectar con la base de datos: " . $e->getMessage();
}
```

3. **Preparar y ejecutar consultas:** Una vez que tienes la conexión, puedes preparar y ejecutar consultas SQL utilizando la instancia `PDO`. Para ello, utiliza el método `prepare()` y luego `execute()`.

```php
$sql = "SELECT * FROM usuarios";
$stmt = $pdo->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "ID: " . $row["id"] . " - Nombre: " . $row["nombre"] . "<br>";
}
```

4. **Cerrar la conexión:** Siempre es importante cerrar la conexión a la base de datos cuando termines de usarla. Utiliza el método `close()` de la instancia `PDO`.

```php
$pdo->close();
```

### PDO en MVC

Para integrar PDO en un patrón MVC (Modelo-Vista-Controlador), se recomienda seguir estos pasos:

1. **Crear una clase de base de datos:** Define una clase que encapsule la lógica de conexión y ejecución de consultas PDO. Esta clase puede ser utilizada por los modelos para interactuar con la base de datos.

2. **Inyectar la conexión PDO en los modelos:** En el controlador, crea una instancia de la clase de base de datos y pásala como argumento al constructor de los modelos. De esta manera, los modelos tendrán acceso a la conexión PDO para realizar sus operaciones.

3. **Utilizar métodos PDO en los modelos:** Los modelos deben utilizar los métodos de la clase de base de datos para preparar, ejecutar y recuperar datos de la base de datos. Esto mantiene la lógica de negocio separada de la lógica de acceso a datos.

4. **Manejo de errores:** Es importante implementar un manejo adecuado de errores en todas las capas, especialmente en la clase de base de datos y en los modelos. Esto te permitirá identificar y gestionar posibles problemas de conexión o ejecución de consultas.

### Ejemplo básico de integración PDO en MVC

A continuación, se muestra un ejemplo simplificado de cómo integrar PDO en un patrón MVC:

**Modelo (Usuario.php):**

```php
class Usuario {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function getAllUsers() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();

        $users = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $users[] = $row;
        }

        return $users;
    }

    public function getUserById($id) {
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
```

**Controlador (UsuarioController.php):**

```php
class UsuarioController {
    private $usuarioModel;

    public function __construct(Usuario $usuarioModel) {
        $this->usuarioModel = $usuarioModel;
    }

    public function index() {
        $users = $this->usuarioModel->getAllUsers();
        require_once 'views/usuario/index.php';
    }

    public function show($id) {
        $user = $this->usuarioModel->getUserById($id);
        require_once 'views/usuario/show.php';
    }
}
```

**Vista (index.php):**

```php

<h1>Lista de usuarios</h1>

<ul>
    <?php foreach ($users as $user): ?>
        <li>
            <a href="?controller=usuario&action=show&id=<?php echo $user['id']; ?>">
                <?php echo $user['nombre']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
```

**Vista (show.php):**

```php
<h1>Usuario <?php echo $user['nombre']; ?></h1>

<p>ID: <?php echo $user['id']; ?></p>
<p>Email: <?php echo $user['email']; ?></p>
```