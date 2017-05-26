<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Jugador extends CI_Controller {

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
     * 
     * 
     */
    function __construct() {
        parent::__construct();
        if (!isset($_SESSION)) {
            session_start();
        }
        $this->load->model('model_Jugador', 'jugadorModel');
        //$this->load->model('model_Categoria', 'categoriaModel');
    }

    public function index() {
        $this->load->view('welcome_message');
    }

    public function NuevoJugador() {
        //$this->datos['categoria'] = $this->categoriaModel->GetCategorias();
        //$this->datos['jugador'] = $this->jugadorModel->GetJugadores();
        $this->form_validation->set_rules('nombre', 'nombre', 'required');
        $this->form_validation->set_rules('fisica', 'fisica', 'required');
        $this->form_validation->set_rules('tecnica', 'tecnica', 'required');
        $existe = null;
        if ($this->form_validation->run() === FALSE) {

            $cuerpo = $this->load->view('NuevoJugador', array('ok' => ""), true);
            $this->load->view('Index', Array('cuerpo' => $cuerpo));
        } else {
            $suma = $_POST['fisica'] + $_POST['tecnica'];

            $puntuacion = round(($suma / 2), 0);
            $nuevoJugador = Array(
                'nombre' => $_POST['nombre'],
                'fisica' => $_POST['fisica'],
                'tecnica' => $_POST['tecnica'],
                'puntuacion' => $puntuacion,
                'usuario' => $_SESSION['usuario']
            );
            $existe = $this->jugadorModel->JugadorExiste($_POST['nombre']);

            if ($existe->total == 0) {
                if ($this->jugadorModel->NewJugador($nuevoJugador)) {
                    $cuerpo = "<p>Guardado Correcamente</p>";
                    $this->load->view('Index', Array('cuerpo' => $cuerpo));
                } else {
                    $cuerpo = "<p>Error al Guardar</p>";
                    $this->load->view('Index', Array('cuerpo' => $cuerpo));
                }
            } else {
                $cuerpo = "<p>El jugador ya existe.</p>";
                $this->load->view('Index', Array('cuerpo' => $cuerpo));
            }
        }
    }

    function ListaJugadores() {

        $misJugadores = $this->datos['jugador'] = $this->jugadorModel->GetJugadores();

        $cuerpo = $this->load->view('ListaJugadores', Array('misJugadores' => $misJugadores), true);

        $this->load->view('Index', Array('cuerpo' => $cuerpo));
    }

    function EditarJugador() {
        $misJugadores = $this->datos['jugador'] = $this->jugadorModel->ComboJugadores();
        $this->form_validation->set_rules('fisica', 'fisica', 'required');
        $this->form_validation->set_rules('tecnica', 'tecnica', 'required');
        $this->form_validation->set_rules('nombre', 'nombre', 'required');

        if ($this->form_validation->run() === FALSE) {


            $cuerpo = $this->load->view('EditarJugador', Array('misJugadores' => $misJugadores), true);
            $this->load->view('Index', Array('cuerpo' => $cuerpo));
        } else {

            $suma = $_POST['fisica'] + $_POST['tecnica'];
            $puntuacion = round(($suma / 2), 0);
            $Jugador = Array(
                'id' => $_POST['id'],
                'nombre' => $_POST['nombre'],
                'fisica' => $_POST['fisica'],
                'tecnica' => $_POST['tecnica'],
                'puntuacion' => $puntuacion,
                'usuario' => $_SESSION['usuario']
            );
            $respuesta = $this->jugadorModel->ActualizarJugador($_POST['id'], $Jugador);
            if ($respuesta) {
                $cuerpo = $this->load->view('EditarJugador', Array('misJugadores' => $misJugadores, "ok" => "Guardado Correctamente"), true);
                $this->load->view('Index', Array('cuerpo' => $cuerpo));
            } else {
                $cuerpo = $this->load->view('EditarJugador', Array('misJugadores' => $misJugadores, "ok" => "Error al Guardar"), true);
                $this->load->view('Index', Array('cuerpo' => $cuerpo));
            }
        }
    }

    function DevolverJugador() {

        $id = $_POST['id'];

        $jugador = $this->jugadorModel->GetJugador($id);

        //$jugadorJson = array('tecnica' => $jugador->tecnica, 'fisica' => $jugador->fisica);

        echo json_encode($jugador);
    }

}
