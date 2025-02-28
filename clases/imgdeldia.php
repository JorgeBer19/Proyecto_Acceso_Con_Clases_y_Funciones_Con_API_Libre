<?php
// Realiza chequeos más estrictos sobre los tipos
declare(strict_types=1);
// Constructor que define las propiedades de la clase como privadas y de tipo string
class imgdeldia{
    public function __construct(
        private string $explanation,
        private string $title,
        private string $url,
        private string $autor_img,
        
   ){
   }
   //Con esta función se obtienen los datos de la API
   public static function fetch_and_create_movie(string $api_url): imgdeldia
   {
       $result = file_get_contents( $api_url); //Esta haciendo un get a la API elegida
       // Decodificar el JSON recibido en un array asociativo
       $data = json_decode($result, true);
       // Retorna una nueva instancia de imgdeldia utilizando los datos obtenidos de la API
       return new self(
            $data["explanation"],
            $data["title"],  
            $data["url"],
            $data["copyright"] ?? "Desconocido"
       );    
   }

   // Trae los datos 
   public function get_data()
   {
    return get_object_vars($this);
   }
}
#Jorge BL