@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pbanho.destroy', $pbanho->id]
      ])
    !!}
      
      <h1>{{$pbanho->id}}</h1>
      <h1>{{$pbanho->data}}</h1>
      <h1>{{$pbanho->hora}}</h1>
      <h1>{{$pbanho->sugerido}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pbanho.edit', $pbanho->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop