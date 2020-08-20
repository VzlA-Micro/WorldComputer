<?php

namespace App\Controllers;

use App\Models\Empleado;
use App\Traits\Utility;
use System\Core\Controller;
use System\Core\View;


class EmpleadoController extends Controller{

  use Utility;

  private $empleado;

  public function __construct() {
      $this->empleado = new Empleado;
  }

  public function index(){
    session_start();
    return View::getView('Empleado.index');
  }
  
  public function listar(){

    $method = $_SERVER['REQUEST_METHOD'];

    if( $method != 'POST'){
      http_response_code(404);
      return false;
    }

    $empleados = $this->empleado->listar();

    foreach($empleados as $empleado){

      $empleado->button = 
      "<a href='/WorldComputer/empleado/mostrar/". $this->encriptar($empleado->id) ."' class='mostrar btn btn-info'><i class='fas fa-search'></i></a>".
      "<a href='/WorldComputer/empleado/mostrar/". $this->encriptar($empleado->id) ."' class='editar btn btn-warning m-1'><i class='fas fa-pencil-alt'></i></a>".
      "<a href='". $this->encriptar($empleado->id) ."' class='eliminar btn btn-danger'><i class='fas fa-trash-alt'></i></a>";

    }

    http_response_code(200);

    echo json_encode([
      'data' => $empleados
    ]);

  }

  public function guardar(){

    $method = $_SERVER['REQUEST_METHOD'];

    if( $method != 'POST'){
      http_response_code(404);
      return false;
    }

    $empleado = new Empleado();

    $empleado->setId($_POST['id']);
    $empleado->setTipoDocumento($_POST['inicial_documento']);
    $empleado->setDocumento($_POST['documento']);
    $empleado->setNombre(strtoupper($this->limpiaCadena($_POST['nombre'])));
    $empleado->setApellido(strtoupper($this->limpiaCadena($_POST['apellido'])));
    $empleado->setDireccion(strtoupper($this->limpiaCadena($_POST['direccion'])));
    $empleado->setTelefono(strtoupper($this->limpiaCadena($_POST['telefono'])));
    $empleado->setEmail(strtoupper($this->limpiaCadena($_POST['correo'])));
    $empleado->setCargo(strtoupper($this->limpiaCadena($_POST['cargo'])));
    $empleado->setEstatus("ACTIVO");


    $documento = $empleado->getTipoDocumento()."-".$empleado->getDocumento();

    $consultaDocumento = $this->empleado->query("SELECT * FROM empleados WHERE documento='$documento'" ); // Verifica inexistencia de cedula, sies igual a la actual no la toma en cuenta puesto que si registramos un cambio en el nombre se mantiene la misma cedula y afectaria la consulta.

    if ($consultaDocumento->rowCount() >= 1) {

      http_response_code(200);
      
      echo json_encode([
        'titulo' => 'Documento Registrado',
        'mensaje' => $documento . ' Se encuentra registrado en nuestro sistema',
        'tipo' => 'error'
      ]);

      return false;

    }

    $this->empleado->registrar($empleado);

    http_response_code(200);

    echo json_encode([
      'titulo' => 'Registro Exitoso',
      'mensaje' => 'Empleado registrado en nuestro sistema',
      'tipo' => 'success'
    ]);


  }

  public function actualizar(){

    $empleado = new Empleado();

    $empleado->setId($_POST['id']);
    $empleado->setTipoDocumento($_POST['inicial_documento']);
    $empleado->setDocumento($_POST['documento']);
    $empleado->setNombre(strtoupper($this->limpiaCadena($_POST['nombre'])));
    $empleado->setApellido(strtoupper($this->limpiaCadena($_POST['apellido'])));
    $empleado->setDireccion(strtoupper($this->limpiaCadena($_POST['direccion'])));
    $empleado->setTelefono(strtoupper($this->limpiaCadena($_POST['telefono'])));
    $empleado->setEmail(strtoupper($this->limpiaCadena($_POST['correo'])));
    $empleado->setCargo(strtoupper($this->limpiaCadena($_POST['cargo'])));
    $empleado->setEstatus("ACTIVO");

    if($this->empleado->actualizar($empleado)){
      http_response_code(200);

      echo json_encode([
        'titulo' => 'Actualización Exitosa',
        'mensaje' => 'Registro actualizado en nuestro sistema',
        'tipo' => 'success'
      ]);
    }else{
      http_response_code(404);

      echo json_encode([
        'titulo' => 'Error al Actualizar',
        'mensaje' => 'Ocurrio un error durante la actualización',
        'tipo' => 'error'
      ]);
    }

  }

  public function mostrar($param){

    $param = $this->desencriptar($param);
    
    $empleado = $this->empleado->getOne('empleados', $param);

    http_response_code(200);

    echo json_encode([
      'data' => $empleado
    ]);
  }

  public function eliminar($id){

    $method = $_SERVER['REQUEST_METHOD'];

    if( $method != 'DELETE'){
      http_response_code(404);
      return false;
    }

    $id = $this->desencriptar($id);

    if($this->empleado->eliminar("empleados", $id)){

      http_response_code(200);

      echo json_encode([
        'titulo' => 'Registro eliminado!',
        'mensaje' => 'Registro eliminado en nuestro sistema',
        'tipo' => 'success'
      ]);
    }else{
      http_response_code(404);

      echo json_encode([
        'titulo' => 'Ocurio un error!',
        'mensaje' => 'No se pudo eliminar el registro',
        'tipo' => 'error'
      ]);
    }
    

  }

}
