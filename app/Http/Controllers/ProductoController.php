<?php 
namespace App\Http\Controllers;
use App\Models\ProductoModel;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public $modelo; 
    public function __construct(){
        $this->modelo = new ProductoModel();
        //echo 'Iniciando la clase ProductoController - construct';
    }
    public function index(){ 
        $productos = ProductoModel::all();
        dump($productos->toArray());
        //echo 'Metodo index';
    }
    public function index2(){ 
        $this->modelo->listarProductos();
    }
    public function crear_producto(){
        return view('crear_producto');
    }
    public function guardar_producto(Request $request){
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            if ($file->guessExtension() == 'jpg' || $file->guessExtension() == 'png') {
                $file->store('public/images'); 
                echo $file->hashName(); //Obtiene el nombre del archivo+extension
                dd('Se subió correctamente');
            }else{
                dd('No es una foto');
            }
        }
    }
}
