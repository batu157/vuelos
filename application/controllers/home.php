<?php if(!defined("BASEPATH")) exit ("No tienes permiso a acceder aqui");
//session_start(); //Se necesita llamar a las sesiones de php para acceder a través de codeigniter.
Class Home extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    function index(){
        if($this->input->post('searchquery')){
            redirect('search', $this->input->post('searchquery'));
        }
        $this->load->view("home_view");
        /*
        if($this->session->userdata("logged_in")){
            $session_data = $this->session->userdata("logged_in");
            $data["username"] = $session_data["username"];
            $this->load->view("home_view", $data);
        }else{
            //Si no está creada la sesion
            redirect("login", "refresh");
        }*/
    }
    function logout(){
        $this->session->unset_userdata("logged_in");
        session_destroy();
        redirect("home", "refresh");
    }
    
}
