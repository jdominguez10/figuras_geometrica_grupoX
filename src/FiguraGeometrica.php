<?php
//Definición de la calse abstracta
abstract class FiguraGeometrica(){
  protected $nombre;

  //Constructor para inicializar el nombre de la figura
  public function __construct(string $nombre){
    $this->nombre=$nombre;
    
  }

  //Método para obtener el nombre de la figura
  public function getNombre(): string{
    return $this->nombre;
  }

  //Métodos abstracto que deben ser implementados por las subclases
  abstract public function area(): float;
  abstract public function perimetro(): float;
  
}


?>
