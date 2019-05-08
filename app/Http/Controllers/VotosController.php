<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voto;

class VotosController extends Controller
{
    //
    public function post(Request $request, $id){

        $validatedData = $request->validate([
            'email' => 'required|unique:votos|max:255',
            'nome' => 'required',
        ]);

        // obtém todos os campos do formulário
        $dados = $request->all();
        $dados['candidata_id'] = $id;

        $reg = Voto::create($dados);

        return redirect('/');
            
    }
}
