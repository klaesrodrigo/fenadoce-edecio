@extends('modelo')

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
    <div class="col-sm-12">
        <div class="col-sm-6">
            <img src="../../storage/{{ $reg['foto']}}" class="card-img-top" alt={{$reg['clube']}} style='width: 260px; height: 230px;'>
        </div>
        <div class="col-sm-6">
            <h2>Candidata</h2>
            <h4>Nome: {{$reg->nome}}</h4 >
            <h4>Clube: {{$reg['clube']}}</h4>
            {{-- {{$linhas}} --}}
        </div>
    </div>
    <div style="margin: 50px 0">
            <table class="table" >
                    <thead>
                        <tr>
                        <th>Nome do votante</th>
                        <th>E-mail</th>
                        <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                @foreach ($linhas as $linha)
                        <tr>
                            <td>{{$linha->nome}}</td>
                            <td>{{$linha->email}}</td>
                            <td>{{$linha->created_at->format('d/m/Y')}}</td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
    </div>
</div>
@endsection 