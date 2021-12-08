<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leitura;

class LeituraController extends Controller
{
    public function index()
    {
        $leituras = auth()->user()->leituras();
        return view('layout.dashboard.dashboard');
    }

    public function add()
    {
        return view('layout.dashboard.add');
    }

    public function salvar(Request $request)
    {

        $validated = $request->validate([
            "titulo" => "required",
            "pag_total" => "required|integer",
            "pag_lida" => "integer"
        ]);

        $validated['user_id'] = auth()->user()->id;

        (Leitura::add($validated));
       {
            return view('layout.dashboard.sucesso', [
                "livro" => $request->input('titulo')
            ]);
        }

    }

    public function edit (Request $request, Leitura $leitura)
    {
        


        if (auth()->user()->id == $leitura->user_id)
        {   


            return view('layout.dashboard.edit', [
                "leitura" => $leitura
            ]);
        }
    }

    public function update(Request $request, Leitura $leitura)
    {
        
        $this->validate($request, [
            'pag_lida' => 'required'
        ]);
        $leitura->pag_lida = $request->pag_lida;
        $leitura->save();
        return redirect('/leituras'); 

    }

    public function destroy(Request $request, $leitura)
    {
       /*  echo "<pre>";
        var_dump($leitura);
        die;
        */
        Leitura::destroy($leitura);
        return redirect('/leituras'); 
    }
}
