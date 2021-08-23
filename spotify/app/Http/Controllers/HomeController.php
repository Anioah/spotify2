<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Canciones;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        
        return Inertia::render('Home/index');
        
    }
  
    public function BibliotecaIndex(){      
        return Inertia::render('Biblioteca/BibliotecaIndex'); 
    }
  
    public function search(){
        return Inertia::render('Home/search'); 
    }
    
    public function playlistIndex(){
        return Inertia::render('playlist/playlist');
    }

    public function TusMegustaIndex(){

        return Inertia::render('TusMegusta/TusMegusta');
    }
////////////////Canciones

    public function InsertarCancion(Request $request){

        $cancion = new canciones();
        $cancion->indice=$request->indice;
        $cancion->nombre = $request->nombre;
        $cancion->album = $request->album;
        $cancion->artista = $request->artista;
        $cancion->duracion = $request->duracion;
        $cancion->estado = $request->estado;
        $cancion->rutacancion = $request->rutacancion;
        $cancion->rutaimagen = $request->rutaimagen;
        $cancion->agregado = $request->agregado;

        if($cancion->save()){
            return response()->json(['message' =>'Cancion registrada'],201);
        }else{
            return response()->json(['message' => 'ooops algo salio mal'], 401);
        }
    }
    
    public function AllCanciones(Request $request){

        //$cancion = new canciones();

        return canciones::all();
    }
}
