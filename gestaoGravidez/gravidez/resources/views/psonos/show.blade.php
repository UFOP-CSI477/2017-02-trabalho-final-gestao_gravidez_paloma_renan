@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['psono.destroy', $psono->id]
      ])
    !!}
      
      <h1>{{$psono->id}}</h1>
      <h1>{{$psono->data}}</h1>
      <h1>{{$psono->hora}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('psono.edit', $psono->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop