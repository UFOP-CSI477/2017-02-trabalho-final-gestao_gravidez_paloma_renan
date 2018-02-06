@extends('layouts.html')

@section('body')

  <div class="container">
    
    {!!Form::open([
        'method' => 'delete',
        'route' => ['pficha.destroy', $pficha->id]
      ])
    !!}
      
      <h1>{{$pficha->id}}</h1>
      <h1>{{$pficha->nome}}</h1>
      <h1>{{$pficha->foto}}</h1>
      <h1>{{$pficha->nascimento}}</h1>
      <h1>{{$pficha->cidade}}</h1>
      <h1>{{$pficha->hospital}}</h1>
      <h1>{{$pficha->genitor1}}</h1>
      <h1>{{$pficha->genitor2}}</h1>
      <h1>{{$pficha->medico}}</h1>
      
      <a type="button" class="btn btn-warning" href="{{route('pficha.edit', $pficha->id)}}">Editar</a>

      {!!Form::submit('Excluir', [
          'class' => 'btn btn-danger'
        ])
      !!}

    {!!Form::close()!!}

  </div>
  
@stop