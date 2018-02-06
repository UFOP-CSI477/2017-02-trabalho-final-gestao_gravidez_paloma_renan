@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['palbun.destroy', $palbun->id]
      ])
    !!}
      
      <h1>{{$palbun->id}}</h1>
      <h1>{{$palbun->data}}</h1>
      <h1>{{$palbun->foto}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('palbun.edit', $palbun->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop