@extends('modelo2')

@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container row d-flex">
    <div class="col-sm-6">
        <img src="../storage/{{ $reg['foto']}}" class="card-img-top" alt={{$reg['clube']}} style='width: 260px; height: 230px;'>
    </div>
    <div class="col-sm-6">
        <h2>Candidata</h2>
        <h4>Nome: {{$reg['nome']}}</h4 >
        <h4>Clube: {{$reg['clube']}}</h4>
        <form method="post" action="{{ route('votos.create', $reg['id']) }}" 
        style="border: 2px solid blue; border-radius: 15px; padding: 15px;" class="p-2">
            <h2>Preencha os dados:</h2>
            {{ csrf_field() }}
        
            <label>
                E-mail:<br>
                <input type="email" id="email" name="email">
            </label>
            <label>
                Nome:<br>
                <input type="text" id="nome" name="nome">
            </label><br>
                
            <input type="submit" value="Votar" class="btn btn-info" style="margin: 10px 0;">
        </form>
    </div>
</div>
@endsection 