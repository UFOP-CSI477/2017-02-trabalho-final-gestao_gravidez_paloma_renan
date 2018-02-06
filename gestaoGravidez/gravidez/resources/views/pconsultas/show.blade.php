@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pconsulta.destroy', $pconsulta->id]
      ])
    !!}
      
      <h1>{{$pconsulta->id}}</h1>
      <h1>{{$pconsulta->data}}</h1>
      <h1>{{$pconsulta->hora}}</h1>
      <h1>{{$pconsulta->pediatra}}</h1>
      <h1>{{$pconsulta->obs}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pconsulta.edit', $pconsulta->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop