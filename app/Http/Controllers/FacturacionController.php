<?php

namespace App\Http\Controllers;
use App\facturacion;
use Illuminate\Http\Request;

class FacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = facturacion::latest()-> paginate(5);
        return view('facturacion', compact('data'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturas.create');
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
            'name_client'   =>   $request->name_client,
            'document'      =>   $request->document,
            'address'       =>   $request->address,
            'name_product'  =>   $request->name_product,
            'quantity'  =>  $request->quantity,
            'payment_type' => $request->payment_type
        );
        facturacion::create($form_data);
        return redirect('facturacion')->with('success', 'Factura Agregada satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = facturacion::findOrFail($id);
        return view('facturacion.ver', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = facturacion::findOrFail($id);
        return view('facturacion.editar', compact('data'));
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
            'name_client'   =>   $request->name_client,
            'document'      =>   $request->document,
            'address'       =>   $request->address,
            'name_product'  =>   $request->name_product,
            'quantity'      =>   $request->quantity,
            'payment_type'  =>   $request->payment_type

        );
        facturacion::whereId($id)->update($form_data);
        return redirect('facturacion')->with('success', 'Datos de factura actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = facturacion::findOrFail($id);
        $data->delete();
        return redirect('facturacion')->with('success', 'Factura Eliminado satisfactoriamente');
    }
}
