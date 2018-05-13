<?php
if (!defined('BASEPATH'))
   exit('No direct script access allowed');

class Vuelos extends CI_Controller { 
   private $lista = array(

      array('id' => 1, 'nombre' => 'Guitarra', 'descripcion' => 'Instrumento de cuerda.'),
      array('id' => 2, 'nombre' => 'Bajo', 'descripcion' => 'Instrumento de cuerda.'),
      array('id' => 3, 'nombre' => 'Batería', 'descripcion' => 'Instrumento de percusión.'),
   );

    public function listado(){
        $data = array();
        $data['vuelos'] = $this->vuelos->listado;

        $this->load->view('vuelos/listado', $data);
    }
    public function ver_instrumento($id=null){
        $data = array();
        $data['instrumento'] = $this->buscar_instrumento_por_id($id);
        $this->load->view('vuelos/', $data);
    }

   private function buscar_instrumento_por_id($id){
      foreach($this->lista as $item){
         if($item['id'] == $id){
            return $item;
         }
      }
      return false;
   }
}