<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Espaco;
use App\Models\User;
use App\Models\Atividade;
use App\Models\Esporte;
use App\Http\Controllers\Auth;

class EspacoController extends Controller
{

    public function __construct(Espaco $espaco){
        $this->espaco = $espaco;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $espaco = Espaco::where('user_id','=', auth()->user()->id)->get();

        return view('espaco.index',['espacos' => $espaco]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('espaco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $espaco = new Espaco();
        $user = auth()->user()->id;

        $espaco->fill($request->all());
        $espaco->user_id = $user;

        $espaco->save();

        return redirect()->route('');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $espaco = $this->espaco->find($id);

        return view('espaco.show',['espaco' => $espaco]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $espaco = $this->espaco->find($id);

        return view('espaco.edit',['espaco' => $espaco]);
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
        return 'Atualizacao';
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

    public function listarAtividades($id){

        $espaco = Espaco::find($id);

        $esportes = Esporte::all();

        return view('espaco.atividade.create',['espaco' => $espaco, 'esportes' => $esportes]);
    }

    public function AdicionarAtividade(Request $request, $id){

        $atividade = new Atividade;

        $atividade->fill($request->all());

        $atividade->esporte_id = $request->esporte;

        $atividade->espaco_id = $id;

        $atividade->save();

        return redirect()->route('espaco.index');

        }
}
