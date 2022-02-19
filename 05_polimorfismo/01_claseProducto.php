<?php 

    class Producto{

        public $descripcion;
        private $precio;
        public $stock;
        static $estado;

        public function __construct($vrdescripcion, $vrprecio)
        {
            $this->descripcion = $vrdescripcion;
            $this->precio = $vrprecio;
            $this->stock = 30;
            Producto::$estado = "Activo";
        }

        public function getInfoproductos(){
            $arrayProducto = Array('Descripcion: ' => $this->descripcion,
                                   'precio: ' => $this->precio,
                                   'stock inventario: ' => $this->stock,
                                   'estado: ' => Producto::$estado,
        );
        return $arrayProducto;
        }
        public function getPrecio(){
            return $this->precio;
        }
        public function setPrecio($vrprecio){
            $this->precio = $vrprecio;
        }
    }//end clase

?>