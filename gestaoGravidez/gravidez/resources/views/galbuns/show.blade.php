@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['galbun.destroy', $galbun->id]
      ])
    !!}
      
      <h1>{{$galbun->id}}</h1>
      <h1>{{$galbun->data}}</h1>
      <h1>{{$galbun->foto}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('galbun.edit', $galbun->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop