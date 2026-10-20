<?php
class HolaMundo{
private $nombre;
function __construc($nombre){
$this->nombre = $nombre;


}

function __toString(){
return sprintf ("Hola,%s.\n ", $this->nombre);
}
}
?>
