<?php

namespace App;

class Propiedad{

    // BBDD 
    protected static $db;
    // Nos permite mapear el objeto que creamos en crear.php, nos permite ver la forma que tendría
    protected static $columnasDB = ['id','titulo','precio','imagen','descripcion','habitaciones','wc','estacionamiento',
    'creado','vendedorId'];

    // Erroes 
    protected static $errores = [];

    public $id;
    public $titulo;
    public $precio;
    public $imagen;
    public $descripcion;
    public $habitaciones;
    public $wc;
    public $estacionamiento;
    public $creado;
    public $vendedorId;

    // Definir la conexión a la BBDD
    public static function setDB($database){
        self::$db= $database; // Self te utiliza para protected, $db tiene que llevar $
    }

    public function __construct($args = []){
        // Al ser propiedades publicas, lo referenciamos con this y estas no deben llevar $
        $this->id= $args['id'] ?? ''; // En caso de no encontrar id, lo deja vacio
        $this->titulo= $args['titulo'] ?? '';
        $this->precio= $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->habitaciones = $args['habitaciones'] ?? '';
        $this->wc = $args['wc'] ?? '';
        $this->estacionamiento = $args['estacionamiento'] ?? '';
        $this->creado= date('Y/m/d');
        $this->vendedorId= $args['vendedorId'] ?? '';
    }
    public function guardar(){

        // Sanitizar los datos
        $atributos = $this->sanitizarAtributos();

        // Insertar en la base de datos
        $query = "INSERT INTO propiedades (";
        $query .= join(', ', array_keys($atributos));
        $query .= ") VALUES (' "; 
        $query .= join("', '", array_values($atributos));
        $query .= " ') ";

        $resultado = self::$db->query($query);
        return $resultado;
}

    // Identificar y unir los atributos de la BBDD
    public function atributos(){
        $atributos = [];
            $atributos = [];
            foreach(self::$columnasDB as $columna){ // Se debe poner $columna ya que es una variable
                if($columna === 'id') continue; // Si ya existe continua con el siguiente
                $atributos[$columna] = $this->$columna;
        }
        return $atributos;
}
    // Nos permite evitar inserción datos maliciosos
    public function sanitizarAtributos(){
        $atributos = $this->atributos();
        $sanitizado = [];
        foreach($atributos as $key => $value){
            $sanitizado[$key] = self::$db->escape_string($value); // escape_string es POO, es lo mismo que  mysqli_real_escape_string
        }
        return $sanitizado;
    }

    // Subida de archivos
    public function setImagen($imagen){
        // Asignar al atributo de imagen el nombre de la imagen
        if($imagen){
            $this->imagen = $imagen;
        }
    }

    // Validación 
    public static function getErrores(){
        return self::$errores;
    }
    public function validar(){
        if(!$this->titulo){ // Se pone this porque es parte de la instancia
            self::$errores[] = "Debes añadir un titulo"; // Se pone self porque es estática $errores
        }
        if(!$this->precio){
            self::$errores[] = "El precio es obligatorio";
        }
        if(strlen($this->descripcion) < 50){
            self::$errores[] = "La descripción debe tener al menos 50 caracteres";
        }
        if(!$this->habitaciones){
            self::$errores[] = "El número de habitaciones es obligatorio";
        }
        if(!$this->wc){
            self::$errores[] = "El número de baños es obligatorio";
        }
        if(!$this->estacionamiento){
            self::$errores[] = "El número de Estacionamientos es obligatorio";
        }
        if(!$this->vendedorId){
            self::$errores[] = "Elige un vendedor";
        }
        if(!$this->imagen){
            self::$errores[] = 'La imagen es Obligatoria';
        }
        return self::$errores;
    }
}

?>