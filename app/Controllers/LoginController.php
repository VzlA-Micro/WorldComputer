<?php

namespace App\Controllers;

use App\Models\Cliente;
use App\Models\Compra;
use App\Models\Producto;
use App\Models\Venta;
use System\Core\Controller;
use System\Core\View;

class LoginController extends Controller{

    private $cliente;
    private $producto;
    private $compra;
    private $venta;

    public function __construct(){
        $this->cliente = new Cliente;
        $this->producto = new Producto;
        $this->compra = new Compra;
        $this->venta = new Venta;
    }

    public function index(){
        return View::getView('Login.Login');
    }
}