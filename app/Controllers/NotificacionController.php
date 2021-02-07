<?php

namespace app\Controllers;

use App\Models\Notificacion;
use App\Models\Inventario;
use App\Traits\Utility;
use System\Core\Controller;

class NotificacionController extends Controller{
    private $notificacion;
    private $inventario;

    use Utility;

    public function __construct(){
        $this->notificacion = new Notificacion;
        $this->inventario = new Inventario;
    }

    public function listar(){

        $method = $_SERVER['REQUEST_METHOD'];

        if( $method != 'POST'){
            http_response_code(404);
            return false;
        }

        $notificaciones = $this->notificacion->listar(10);

        header('Content-Type: application/json');

        http_response_code(200);

        echo json_encode([
        'data' => $notificaciones
        ]);

    }

    public function nuevasNotificaciones () {
        $notificacionesPendientes = $this->notificacion->notificacionesPendientes(3);
        $productosBajoStock = $this->inventario->productosBajoStock();

        foreach ($productosBajoStock as $producto) {
            echo 'Producto: '. $producto->nombre . ' Tiene bajo stock <br>';
        }
    }

    public function dismissNotificacion () {
        $method = $_SERVER['REQUEST_METHOD'];

        if( $method != 'POST'){
            http_response_code(404);
            return false;
        }
        $result = $this->notificacion->dismissNotificacion($_POST['id']);

        echo json_encode($result);
    }

 
}