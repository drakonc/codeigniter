<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;

class Libros extends Controller{

    public function index(){
        $libros = new Libro();
        $datos['libros'] = $libros->orderBy('id', 'asc')->findAll();
        return view('libros/listar',$datos);
    }

    public function crear_libro(){
        return view('libros/crear');
    }

    public function guardar_libro(){
        $libro = new Libro();
        if($imagen = $this->request->getFile('imagen')){
            echo "ingreso" ;
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('../public/uploads/',$nuevoNombre);
            $datos=[
                'nombre'=>$this->request->getVar('nombre'),
                'imagen'=>$nuevoNombre
            ];
            $libro->insert($datos);
        }
        return redirect()->to('/listar');
        
    }

    public function borrar_libro($id=null) {
        $libro = new Libro();
        $datosLibro = $libro->where('id',$id)->first();
        $ruta=('../public/uploads/'.$datosLibro['imagen']);
        $libro->where('id',$id)->delete();
        unlink($ruta);
        return  $this->response->redirect(base_url('listar'));
    }


}