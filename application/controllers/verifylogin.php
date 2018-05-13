<?php if(!defined("BASEPATH")) exit ("No tienes permiso para entrar aqui");

Class VerifyLogin extends CI_Controller{
    function __construct() {
        parent::__construct();
        $this->load->model("user", "", TRUE);
    }
    function index(){
        //Este metodo tendrá las credenciales de validación
        $this->load->library("form_validation");
        
        $this->form_validation->set_rules("username", "username", "trim|required");
        $this->form_validation->set_rules("password", "Password", "trim|required|callback_check_database");
        
        if($this->form_validation->run() == FALSE){
            //Ha fallado la validacion, se redirecciona a si misma
            $this->load->view("login_view");
        }else{
            //Accedemos a la aplicacion
            redirect("home", "refresh");
        }
    }
    function check_database($password){
        //Validacion del campo valida, se valida contra la bbdd
        $username = $this->input->post("username");
        
        //Query a la bbdd
        $resultado = $this->user->login($username, $password);
        
        if($resultado){
            $sess_array = array();
            foreach($resultado as $row){
                $sess_array = array(
                    "id" => $row->id,
                    "username"=> $row->nombre
                );
                
                $this->session->set_userdata("logged_in", $sess_array);
                return true;
            }
        }else{
            $this->form_validation->set_message("check_database", "Usuario o contraseña no validos");
            return false;
        }
    }
}