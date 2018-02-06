@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['piten.destroy', $piten->id]
      ])
    !!}
      
      <h1>{{$piten->id}}</h1>
      <h1>{{$piten->nome}}</h1>
      <h1>{{$piten->quantidade}}</h1>
      <h1>{{$piten->data}}</h1>
      <h1>{{$piten->local}}</h1>
      <h1>{{$piten->valor}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('piten.edit', $piten->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop