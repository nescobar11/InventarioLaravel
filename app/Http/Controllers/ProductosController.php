<?php

namespace App\Http\Controllers;
use App\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = productos::latest()-> paginate(5);
        return view('productos', compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form_data = array(
            'name'       =>   $request->name,
            'quantity'   =>   $request->quantity,
            'price'      =>   $request->price,
            'lote'       =>   $request->lote,
            'expiration_date'  =>  $request->expiration_date
        );
        productos::create($form_data);
        return redirect('productos')->with('success', 'Producto Agregado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = productos::findOrFail($id);
        return view('productos.ver', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = productos::findOrFail($id);
        return view('productos.editar', compact('data'));
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
        $form_data = array(
            'name'      =>   $request->name,
            'quantity'  =>   $request->quantity,
            'price'     =>   $request->price,
            'lote'     =>   $request->lote,
            'expiration_date' => $request->expiration_date
        );
        productos::whereId($id)->update($form_data);
        return redirect('productos')->with('success', 'Datos de producto actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = productos::findOrFail($id);
        $data->delete();
        return redirect('productos')->with('success', 'Producto Eliminado satisfactoriamente');
    }
}
