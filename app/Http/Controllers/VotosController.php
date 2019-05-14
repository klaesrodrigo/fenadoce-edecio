<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Voto;

class VotosController extends Controller
{
    //
    public function post(Request $request, $id){

        $validatedData = $request->validate([
            'nome' => 'required|min:11|max:50|regex:/ /um',
            'email' => 'required|unique:votos',
        ]);

        // obtém todos os campos do formulário
        $dados = $request->all();
        $dados['candidata_id'] = $id;

        $reg = Voto::create($dados);

        if ($reg) {
            return redirect()->route('principal')
                   ->with('status', 'Voto Computado!');
        } else {
            return redirect()->route('filmes.index')
                   ->with('status', 'Erro... Erro ao computar voto!');
        }
            
    }
}
