<?php
 
namespace App\Http\Controllers;
 
use App\Models\producto;
use Illuminate\View\View;

use App\Http\Requests\productRequest;
 
class ProductController extends Controller
{
    
    public function index()
    {
        $mostrar = "";
        foreach (producto::all() as $pr) {
            $mostrar = $mostrar.$pr->nombre.": ".$pr->precio."<br>";
        }
        return $mostrar;
    }

    public function insertarProducto(productRequest $request)
    {
        $producto = new producto;

        /*$producto->id = $request->id;
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->tipo = $request->tipo;*/
        

        $producto->fill($request->validated());

        $producto->save();

        return "nuevo producto insertado con éxito";
    }

    public function actualizarProducto(productRequest $request)
    {
        $producto = producto::find($request->id);

        if(!$producto){
            return "producto no encontrado";
        }

        $producto->fill($request->validated());

        $producto->save();

        return "producto actualizado con éxito";
    }

    public function eliminarProducto(productRequest $request)
    {
        $producto = producto::find($request->id);

        if(!$producto){
            return "producto no encontrado";
        }

        $producto->delete();

        return "producto eliminado con éxito";

    }

    public function verProducto($id)
    {
        $producto = producto::find($id);
        echo "Id = ".$producto->id.", Nombre = ".$producto->nombre."<br>";
    }

    public function verNombreProducto($nombre)
    {
        $producto = producto::where('nombre', $nombre)->first();
        echo "Id = ".$producto->id.", Nombre = ".$producto->nombre."<br>";
    }

}