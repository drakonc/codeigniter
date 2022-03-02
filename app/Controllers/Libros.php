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

}