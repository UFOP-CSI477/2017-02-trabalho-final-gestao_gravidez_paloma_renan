@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['ghumore.destroy', $ghumore->id]
      ])
    !!}
      
      <h1>{{$ghumore->id}}</h1>
      <h1>{{$ghumore->data}}</h1>
      <h1>{{$ghumore->nivel}}</h1>
      <h1>{{$ghumore->descricao}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('ghumore.edit', $ghumore->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop