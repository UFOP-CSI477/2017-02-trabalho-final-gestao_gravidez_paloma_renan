@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['gvacina.destroy', $gvacina->id]
      ])
    !!}
      
      <h1>{{$gvacina->id}}</h1>
      <h1>{{$gvacina->data}}</h1>
      <h1>{{$gvacina->hora}}</h1>
      <h1>{{$gvacina->nome}}</h1>
      <h1>{{$gvacina->obs}}</h1>
      <h1>{{$gvacina->sugerido}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('gvacina.edit', $gvacina->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop