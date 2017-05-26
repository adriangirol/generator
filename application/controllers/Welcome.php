<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct() {
        parent::__construct();
        if (!isset($_SESSION)) {
            session_start();
        }
        $this->load->model('model_Usuario', 'usuarioModel');
        //$this->load->model('model_Categoria', 'categoriaModel');
    }

    public function index() {
        $this->load->view('Index');
    }

    public function loger() {

        $user = $_POST['user'];
        $pass = $_POST['pwd'];

        if ($this->usuarioModel->Correcto($user, $pass)) {
            $_SESSION['logeado'] = 1;
            $_SESSION['usuario'] =  $this->usuarioModel->CodigoUser($user);
        }
       
        $this->load->view('Index');
    }

    public function Salir() {
        
        $_SESSION['logeado'] = 0;
        $this->load->view('Index');
    }

}
