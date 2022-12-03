<?php

namespace App\Http\Controllers;

use App\Auditoria;
use Illuminate\Http\Request;

class AuditoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("auditoria.index", ["auditorias" => Auditoria::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("auditoria.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $auditorias= Auditoria::create($request->all());

        return redirect('admin/auditoria');

        // return view('auditoria.index', compact('auditorias'));
        // return redirect()->route('admin.auditoria.index')
        //  ->with('info', 'Auditoria creada con exito');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Auditoria  $auditoria
     * @return \Illuminate\Http\Response
     */
    public function show(Auditoria $auditoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Auditoria  $auditoria
     * @return \Illuminate\Http\Response
     */
    public function edit(Auditoria $auditoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Auditoria  $auditoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Auditoria $auditoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Auditoria  $auditoria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Auditoria $auditoria)
    {
        //
    }
}
