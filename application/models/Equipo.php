<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Equipo extends CI_Controller {

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

    private function rellenarAux($filter, $jugadoresORD) {
        $coinci = null;


        foreach ($jugadoresORD as $jugador) {
            if ($filter == $jugador->puntuacion) {
                $coinci = $jugador;
                break;
            }
            return $coinci;
        }
    }

    private function ObtenerRango($filter, $array) {
        $coinci = array();


        foreach ($array as $jugador) {
            if ($filter == $jugador->puntuacion) {
                array_push($coinci, $jugador);
            }
        }
        return $coinci;
    }

    private function MezclarArrayPorPuntos($jugadoresORD) {
        $p1 = Array();
        $p2 = Array();
        $p3 = Array();
        $p4 = Array();
        $p5 = Array();
        $p6 = Array();
        $p7 = Array();
        $p8 = Array();
        $p9 = Array();

        $p1 = $this->ObtenerRango(1, $jugadoresORD);
        $p2 = $this->ObtenerRango(2, $jugadoresORD);
        $p3 = $this->ObtenerRango(3, $jugadoresORD);
        $p4 = $this->ObtenerRango(4, $jugadoresORD);
        $p5 = $this->ObtenerRango(5, $jugadoresORD);
        $p6 = $this->ObtenerRango(6, $jugadoresORD);
        $p7 = $this->ObtenerRango(7, $jugadoresORD);
        $p8 = $this->ObtenerRango(8, $jugadoresORD);
        $p9 = $this->ObtenerRango(9, $jugadoresORD);

        $jugadores = array();

        if (count($p1) > 0) {
            shuffle($p1);
            foreach ($p1 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p2) > 0) {
            shuffle($p2);
            foreach ($p2 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p3) > 0) {
            shuffle($p3);
            foreach ($p3 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p4) > 0) {
            shuffle($p4);
            foreach ($p4 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p5) > 0) {
            shuffle($p5);
            foreach ($p5 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p6) > 0) {
            shuffle($p6);
            foreach ($p6 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p7) > 0) {
            shuffle($p7);
            foreach ($p7 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p8) > 0) {
            shuffle($p8);
            foreach ($p8 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }
        if (count($p9) > 0) {
            shuffle($p9);
            foreach ($p9 as $jugador) {
                array_push($jugadores, $jugador);
            }
        }

        return $jugadores;
    }

    function CalcularEquipos($jugadores) {
        //$alt = rand(0, 1);
        $media = 0;
        usort($jugadores, function($a, $b) {
            return strcmp($a->puntuacion, $b->puntuacion);
        });

        $jugadoresORD = $this->MezclarArrayPorPuntos($jugadores);

        $jugadoresORD = array_reverse($jugadores);

        /* aleatoriamente invertiremos las posiciones de los jugadores que tengan la misma puntuación */
//        if ($alt == 1) {
//            for ($i = 0; $i < count($jugadoresORD); $i++) {
//                if ($i != count($jugadoresORD) - 1) {
//                    if ($jugadoresORD[$i]->puntuacion == $jugadoresORD[$i + 1]->puntuacion) {
//                        $tmp = $jugadoresORD[$i];
//                        $jugadoresORD[$i] = $jugadoresORD[$i + 1];
//                        $jugadoresORD[$i + 1] = $tmp;
//                    }
//                }
//            }
//        }


        foreach ($jugadoresORD as $jugador) {
            $media += $jugador->puntuacion;
        }

        $media = ($media / 2);

//        echo "Media Total : ".$media;
//        echo "<br>";
        $equipos = $this->algoritmoNivel($media, $jugadoresORD);

        return $equipos;
    }

    private function algoritmoNivel($media, $jugadores) {

        $eq1 = array();
        $eq2 = array();

        $eq1media = 0;
        $eq2media = 0;

        array_push($eq1, $jugadores[0]);
        $eq1media += $jugadores[0]->puntuacion;
        //$tmp;
        for ($i = 1; $i < count($jugadores); $i++) {
            if ($eq1media >= $eq2media) {

                //$aux = $this->rellenarAux($jugadores[$i]->puntuacion , $jugadores);
                array_push($eq2, $jugadores[$i]/* $aux[$alt] */);

                $eq2media += $jugadores[$i]->puntuacion;
            } else {
                array_push($eq1, $jugadores[$i]);
                $eq1media += $jugadores[$i]->puntuacion;
            }
        }
//        echo "EQUIPO A";
//        echo "Media Equipo 1 : ".$eq1media;
//        echo "<pre>";
//        var_dump($eq1);
//        echo "</pre>";
//        
//        echo "EQUIPO A";
//        echo "Media Equipo 2 : ".$eq2media;
//        echo "<pre>";
//        var_dump($eq2);
//        echo "</pre>";

        /*
         *  Equipo completo A = eq1
         *  Media A = eq1media
         *  Equipo completo B = eq2
         *  Media B = eq2media
         *  Media = media
         */
        return array($eq1, $eq1media, $eq2, $eq2media, $media);
    }

    public function GenerarEquipos() {

        $this->form_validation->set_rules('check[]', 'check[]', 'required');

        if ($this->form_validation->run() === FALSE) {

            $misJugadores = $this->datos['jugador'] = $this->jugadorModel->GetJugadoresNombre();
            $cuerpo = $this->load->view('CheckJugadores', Array('misJugadores' => $misJugadores), true);
            $this->load->view('Index', Array('cuerpo' => $cuerpo));
        } else {
            //Si la validación es correcta, cogemos los datos de la variable POST
            //y los enviamos al modelo
            $idJugadoresAsistentes = $this->input->post('check');
            $jugadoresTodos = array();

            foreach ($idJugadoresAsistentes as $key => $value) {
                $jugador = $this->jugadorModel->GetJugador($value);
                array_push($jugadoresTodos, $jugador);
                //array_push($jugadoresTodos,$jugador );
                //$jugadoresTodos['Jugador_ID_Jugador'] = $value;
                //$this->entrenamiento->AsignarEntrenamientoAJugador($jugadoresTodos);
                //$jugadoresAsistentes[$value] = $this->jugadores->TraerDatoJugador($value);
            }
//            echo "<pre>";
//            var_dump($jugadoresTodos);
//            echo "</pre>";
            $equipos = $this->CalcularEquipos($jugadoresTodos);

            if (isset($_SESSION['oldEquipoA']) && isset($_SESSION['oldEquipoB'])) {
//            echo "<pre> EQUIPO A OLD";
//            var_dump($_SESSION['oldEquipoA']);
//            echo "</pre>";
//            echo "<pre> EQUIPO A";
//            var_dump($equipos[0]);
//            echo "</pre>";
//            echo "<pre> EQUIPO B OLD";
//            var_dump($_SESSION['oldEquipoB']);
//            echo "</pre>";
//            echo "<pre> EQUIPO B";
//            var_dump($equipos[2]);
//            echo "</pre>";
                while ($_SESSION['oldEquipoA'] === $equipos[0] || $_SESSION['oldEquipoA'] === $equipos[2]) {
                    $equipos = $this->CalcularEquipos($jugadoresTodos);
                }
            }

            $_SESSION['oldEquipoA'] = $equipos[0];
            $_SESSION['oldEquipoB'] = $equipos[2];
            echo "<pre>";
            var_dump($equipos);
            echo "</pre>";
            $fisicoA = 0;
            $tecnicoA = 0;
            $totalA = 0;
            $fisicoB = 0;
            $tecnicoB = 0;
            $totalB = 0;

            foreach ($equipos[0] as $jugador) {
                $fisicoA += $jugador->fisica;
                $tecnicoA += $jugador->tecnica;
            }
            $totalA = $fisicoA + $tecnicoA;

            $fisicoA = ($fisicoA * 100) / $totalA;
            $tecnicoA = ($tecnicoA * 100) / $totalA;

            foreach ($equipos[2] as $jugador) {
                $fisicoB += $jugador->fisica;
                $tecnicoB += $jugador->tecnica;
            }
            $totalB = $fisicoB + $tecnicoB;

            $fisicoB = ($fisicoB * 100) / $totalB;
            $tecnicoB = ($tecnicoB * 100) / $totalB;
            
            usort($equipos[0], function($a, $b) {
                return strcmp($a->nombre, $b->nombre);
            });
            usort($equipos[2], function($a, $b) {
                return strcmp($a->nombre, $b->nombre);
            });
            $cuerpo = $this->load->view('EquiposGenerados', Array(
                'equipoA' => $equipos[0],
                'equipoB' => $equipos[2],
                'mediaA' => $equipos[1],
                'mediaB' => $equipos[3],
                'media' => $equipos[4],
                'color' => rand(0, 1),
                'fisicoA' => round($fisicoA, 1),
                'fisicoB' => round($fisicoB, 1),
                'tecnicaA' => round($tecnicoA, 1),
                'tecnicaB' => round($tecnicoB, 1)), true);
            $this->load->view('Index', Array('cuerpo' => $cuerpo));
        }
    }

    public function ListaJugadores() {
        $misJugadores = $this->datos['jugador'] = $this->jugadorModel->GetJugadores();

        $cuerpo = $this->load->view('CheckJugadores', Array('misJugadores' => $misJugadores), true);
        $this->load->view('Index', Array('cuerpo' => $cuerpo));
    }

}
