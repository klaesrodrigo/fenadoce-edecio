@extends('modelo')

@section('conteudo')

<table class="table">
    <thead>
        <tr>
        <th>Candidata</th>
        <th>Total de votos</th>
        <th></th>
        </tr>
    </thead>
    <tbody>
@foreach ($linhas as $linha)
        <tr>
            <td>{{$linha->candidata->nome}}</td>
            <td>{{$linha->total}}</td>
            <td>
                    <a href="{{ route('candidata.consultar', $linha->candidata_id) }}" class="btn btn-primary btn-sm" role="button" 
                        style="margin: auto; display: block; width: 130px;">Consultar votação</a>&nbsp;
            </td>
        </tr>
@endforeach
    </tbody>
</table>
@endsection