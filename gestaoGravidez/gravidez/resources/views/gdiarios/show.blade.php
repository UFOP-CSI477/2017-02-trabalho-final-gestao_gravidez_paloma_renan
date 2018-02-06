@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['gdiario.destroy', $gdiario->id]
      ])
    !!}
      
      <h1>{{$gdiario->id}}</h1>
      <h1>{{$gdiario->data}}</h1>
      <h1>{{$gdiario->peso}}</h1>
      <h1>{{$gdiario->altura}}</h1>
      <h1>{{$gdiario->posicao}}</h1>
      <h1>{{$gdiario->descricao}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('gdiario.edit', $gdiario->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop