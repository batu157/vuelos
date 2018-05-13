<?php

Class User extends CI_Model{

    function login($usuario, $pass){
        $this->db->select("idCliente, email, pass");
        $this->db->from("clientes");
        $this->db->where("email", $usuario);
        $this->db->where("pass", $pass);
        $this->db->limit(1);
        
        $query = $this->db->get();
        if($query->num_rows() == 1){
            return $query->result();
        }else{
            return false;
        }
    }
}
