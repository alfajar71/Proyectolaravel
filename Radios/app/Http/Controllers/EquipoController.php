<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
 
class EquipoController extends Controller
{  
     //Datos temporales:
    
    private $equiposJson = '[{

        "id": 1,
        "first_name": "Mitchel",
        "last_name": "McGloughlin"
        
    }, {
        "id": 2,
        "first_name": "Ardelle",
        "last_name": "Starkie"
       
    }, {
        "id": 3,
        "first_name": "Melita",
        "last_name": "Haffner"
        
    }]';


    public function mostrarEquipos($equipoId){
        
        $equipos_temp=json_decode($this->equiposJson,true);
        return 'El equipo con el nombre: '.$equipos_temp[$equipoId]["first_name"].' Mostrado desde el controlador';
       

    }

    
    public function show(string $id): View
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
