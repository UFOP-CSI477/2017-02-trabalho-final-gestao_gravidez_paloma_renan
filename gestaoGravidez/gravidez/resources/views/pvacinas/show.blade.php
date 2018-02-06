@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pvacina.destroy', $pvacina->id]
      ])
    !!}
      
      <h1>{{$pvacina->id}}</h1>
      <h1>{{$pvacina->data}}</h1>
      <h1>{{$pvacina->hora}}</h1>
      <h1>{{$pvacina->nome}}</h1>
      <h1>{{$pvacina->obs}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pvacina.edit', $pvacina->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop