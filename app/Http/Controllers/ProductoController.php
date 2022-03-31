<?php 
namespace App\Http\Controllers;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public $modelo; 
    public function __construct(){
        $this->modelo = new ProductoModel();
        echo 'Iniciando la clase ProductoController - construct';
    }
    public function index(){ 
        $productos = ProductoModel::all();
        dump($productos->toArray());
        //echo 'Metodo index';
    }
    public function index2(){ 
        $this->modelo->listarProductos();
    }
}
