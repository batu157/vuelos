<?php

Class Vuelos extends CI_Model{

    function listado($tipo, $origen, $destino, $fIda, $fVuelta, $personas){

        $this->db->select("idVuelo, empresa, fechaVuelo, origen, destino");
        $this->db->from("vuelos");

        if($tipo == "IV"){
                
        }

        $this->db->where("origen", $origen);

        $this->db->where("destino", $destino);
        
        
        $query = $this->db->get();
        return $query->result();
        
        
    }
}
