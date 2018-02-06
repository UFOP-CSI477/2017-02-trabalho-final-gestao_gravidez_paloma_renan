@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['palimentacoe.destroy', $palimentacoe->id]
      ])
    !!}
      
      <h1>{{$palimentacoe->id}}</h1>
      <h1>{{$palimentacoe->cardapio}}</h1>
      <h1>{{$palimentacoe->data}}</h1>
      <h1>{{$palimentacoe->hora}}</h1>
      <h1>{{$palimentacoe->obs}}</h1>
      <h1>{{$palimentacoe->sugerido}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('palimentacoe.edit', $palimentacoe->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop