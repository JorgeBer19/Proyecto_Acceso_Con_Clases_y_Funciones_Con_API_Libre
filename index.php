<?php
//Jorge bl
// Importa las funciones del fichero de funciones.php una sola vez 
require_once 'constantes.php';
require_once 'funciones.php'; 
require_once 'clases/imgdeldia.php';
//Se obtiene el contenido de la api con la clase imgdeldia
$siguinte_imagen = imgdeldia::fetch_and_create_movie(API_URL);
//Se obtiene el contenido 
$imagen_del_dia = $siguinte_imagen -> get_data();

?>


<!DOCTYPE html>
<html lang="es">
    
    <!-- Importa los contenidos  y estilos de html y css-->
    <?php render_plantilla('head',  ["title"=>$imagen_del_dia['title']]);?>
    <?php render_plantilla ('main', array_merge(
        $imagen_del_dia  
    ));?>

 
</html>
