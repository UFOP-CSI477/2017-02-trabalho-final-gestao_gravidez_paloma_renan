@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['gdesejo.destroy', $gdesejo->id]
      ])
    !!}
      
      <h1>{{$gdesejo->id}}</h1>
      <h1>{{$gdesejo->data}}</h1>
      <h1>{{$gdesejo->descricao}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('gdesejo.edit', $gdesejo->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop