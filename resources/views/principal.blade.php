@extends('modelo2')

@section('conteudo')

<div class="row d-flex justify-content-center">
  <div>
      <form method="post" action="{{ route('pesquisa') }}" style="display: inline-flex; margin: 10px 5px">
          {{ csrf_field() }}
        <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Buscar candidata">
        <input type="submit" value="Buscar" class="btn btn-info" style="margin: 0 10px;">
      </form>
  </div>
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif

        @forelse ($linhas as $linha)
    <div class="card border border-primary col-sm-12" 
         style="width: 24rem; margin:5px; padding: 10px; border: 2px solid blue; border-radius: 15px;">
         <div style="width: 100%">
          <img src="storage/{{ $linha->foto}}" class="card-img-top" alt={{$linha->clube}} style='width: 160px; height: 130px; margin: auto; display: block;'>
         </div>
        <div class="card-body">
            {{ csrf_field() }}
          <h5 class="card-title"><b>Nome:</b> {{$linha->nome}}</h5>
            <p class="card-text"><b>Clube:</b> {{$linha->clube}}</p>
            <a href="{{ route('votar', $linha->id) }}" class="btn btn-primary btn-sm" role="button" style="margin: auto; display: block;">Votar</a>&nbsp;
        </div>
      </div>
      @empty
        <p class="alert alert-warning">Nenhuma candidata encontrada</p>
      @endforelse
</div>

@endsection