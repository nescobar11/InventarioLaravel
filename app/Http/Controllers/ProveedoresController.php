<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proveedores;
class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = proveedores::latest()-> paginate(5);
        return view('proveedores', compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
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
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'email'            =>   $request->email,
            'phone'        =>   $request->phone
        );
        proveedores::create($form_data);
        return redirect('proveedores')->with('success', 'Proveedor Agregado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = proveedores::findOrFail($id);
        return view('proveedores.ver', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = proveedores::findOrFail($id);
        return view('proveedores.editar', compact('data'));
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
            'first_name'       =>   $request->first_name,
            'last_name'        =>   $request->last_name,
            'email'            =>   $request->email,
            'phone'        =>   $request->phone
        );
        proveedores::whereId($id)->update($form_data);
        return redirect('proveedores')->with('success', 'Datos de proveedor actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = proveedores::findOrFail($id);
        $data->delete();
        return redirect('proveedores')->with('success', 'Proveedor Eliminado satisfactoriamente');
    }
}
