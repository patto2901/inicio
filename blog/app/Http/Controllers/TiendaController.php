<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;
use App\Carrito;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //
        $categorias=Categoria::all();
        $productos=Producto::paginate(12);
        return view('wix.tienda',['productos'=>$productos, 'categorias'=>$categorias]);//retornar a una vista con los productos que se van agregando
    }
    public function detalles ($id_producto){
        $producto=Producto::find($id_producto);

        return view('wix.detalles',['producto'=>$producto]);
            
        }

public function categorias($id_categoria){
     $categorias=Categoria::all();
    $productos=Producto::where('categoria_id',$id_categoria)->paginate(12);
    

 return view('wix.tienda',['productos'=>$productos, 'categorias'=>$categorias]);
}

public function carrito(){//lo que mandamos a llamar en web.php que visualiza carrito.blade.php
   if (isset(Auth::user()->id)){ //Para validar que este dentro de una sesion
            $id_user=Auth::user()->id;
            $user=User::find($id_user);
            $carrito=User::find($id_user)->carrito;//busca el carrito del perfil
            if (!$carrito) {
               $carrito= new Carrito;
                    $carrito->estatus=0;
                    $carrito->user_id=$id_user;
                $carrito->save();
                 $carrito->productos()->attach($request->id_producto);
            }//en caso de que queramos entrar al carrito sin haber agregad productos formar alternativa de agregarlo y agrega el producto en automatico

            return view('wix.carrito',['carritos'=>$carrito]);//retornamos a la vista carrito pasamos la variable carrito a la vista atraves de la variable carrito.
     }else{
        return redirect('/login');//si no hay sesion lo regresamos a iniciar sesion
     }
     
 
}
public function eliminarProducto($producto_id){
    DB::table('carrito_producto')->where('producto_id', '=', $producto_id)->delete();
    
    return redirect('/carrito');

}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          if (isset(Auth::user()->id)){
            $id_user=Auth::user()->id;
            $user=User::find($id_user);

            $carrito=Carrito::where('user_id',$id_user)->first();
            if ($carrito) {
                $carrito->productos()->attach($request->id_producto);//crea el carrito al agregar el producto
               
            }else{
                $carrito= new Carrito;
                    $carrito->estatus=0;
                    $carrito->user_id=$id_user;
                $carrito->save();
            }

            return redirect('/carrito');
        }else{
            return redirect('/login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
