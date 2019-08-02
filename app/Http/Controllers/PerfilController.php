<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Perfil;
use File;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        return view('perfil.criar', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Input::file('imagem')){
            $imagem = Input::file('imagem');
            $extensao = $imagem->getClientOriginalExtension();

            if($extensao != 'jpg' && $extensao != 'png' && $extensao != 'jpeg' && $extensao != 'JPG' && $extensao != 'PNG' && $extensao != 'JPEG'){
                return back()->with('erro','Erro: Este arquivo não é imagem');
            }
        }

        $perfil = new Perfil;

        $perfil->nome = $request->input('nome');
        $perfil->endereco = $request->input('endereco');
        $perfil->cidade = $request->input('cidade');
        $perfil->estado = $request->input('estado');
        $perfil->cpf = $request->input('cpf');
        $perfil->imagem = "";
        $perfil->user_id = auth()->user()->id;

        $perfil->save();

        if(Input::file('imagem')){
            File::move($imagem,public_path().'\imagem-perfil\perfil-id_'.$perfil->id.'.'.$extensao);
            $perfil->imagem = public_path().'\imagem-perfil\perfil-id_'.$perfil->id.'.'.$extensao;
            $perfil->save();
        }

        return redirect('home');
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
